<?php

/**
 *
 *
 * Author:  Daho
 * Date:    12.07.2020
 *
 *
 *
 */

namespace zetsoft\widgets\former;

use zetsoft\dbitem\data\TabItem;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\helpers\ZVarDumper;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\blocks\ZCollapseWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\navigat\ZLiloAccordionWidget;
use zetsoft\widgets\navigat\ZPillWidget;
use zetsoft\widgets\navigat\ZSmartTabWidget;
use zetsoft\widgets\notifier\ZJspanelWidgetRavshan;
use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\widgets\themes\ZTabWidget;

class ZFormBuildWidget_2 extends ZWidget
{

    public static $grapes = [
        'modalWidth' => '700px',
        'modalHeight' => '500px',
    ];

    public const stepType = [
        'none' => 'none',
        'wizard' => ZSmartWizardWidget::class,
        'tab' => ZTabWidget::class,
        'pill' => ZPillWidget::class,
        'smartTab' => ZSmartTabWidget::class,
        'card' => ZCardWidget::class
    ];
    public const blockType = [
        'naked' => null,
        'card' => ZCardWidget::class,
        'collapse' => ZCollapseWidget::class,
        'lilo' => ZLiloAccordionWidget::class,

    ];

    /**
     * Configuration
     */
    public $config = [];
    public $_config = [
        'stepType' => self::stepType['none'],
        'blockType' => self::blockType['naked'],
        'stepOptions' => [],
        'blockOptions' => [],
        'isStepsVertical' => true,
        'topBtn' => true,
        'botBtn' => true,
        'removeBtn' => false,
        'btnTitle' => null,
        'isCard' => false,
        'showCancelBtn' => true,
        'btnClass' => '',
        'parentClass' => 'd-flex',
        'btnStyle' => ZButtonWidget::btnStyle['btn-outline-dark'],
    ];

    public $event = [];
    public $_event = [
        'formOpen' => 'function x(){console.log(\'formOpen\')}'
    ];

    public $_layout = [
        'card' => <<<HTML
    <div class="{parentClass}">{cards}</div>
HTML,
        'main' => <<<HTML
        {submitTop}
        {formGrid}
        {submitBottom}
        {removeBtn}
HTML,
        'submitTop' => <<<HTML
    <div class="d-flex justify-content-end topBtn mt-0 mb-3">{topBtn}<!--{cancelBtn}--></div>
HTML,

        'submitBottom' => <<<HTML
    <div class="d-flex efre justify-content-end bottomBtn mt-2">{bottomBtn}</div>
HTML,

        'removeBtn' => <<<HTML
    <div class="d-flex justify-content-end removeBtn mt-2">{removeBtn}</div>
HTML,

        'js' => <<<JS
        {formOpen}
JS,


        'cancelClickAuto' => <<<JS
        function() {
          
            Swal.fire({
              title: '{confirmTitle}',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonText: '{confirmBtn}',
              cancelButtonText: '{cancelBtn}',
            }).then((result) => {
              if (result.value) {
              
                $.ajax({
                    type: 'GET',
                    url: '{cancelUrl}',
                    success: function() {
                        location.reload()
                    }
                })
                
              }
              
            })
          
        }
JS,

    ];

    /**
     *
     * Wrapping with Cards
     * @throws \Exception
     */
    public function codes()
    {

        echo ZJspanelWidgetRavshan::widget([
            'model' => $this->model,
            'id' => 'jsPanel-related',
            'config' => [
                'funcName' => 'select2Related',
            ]
        ]);

        $checkForm = $this->form === null;
        if ($checkForm)
            $this->form = $this->activeBegin();

        $stepWizardData = []; //data for ZSmartWizardWidget
        $stepTabData = [];
        $cards = $this->model->cards;    //Get Cards

        if (Az::$app->smart->norms->overwriteCard($cards)) {

            $this->htm = ZFormWidget_2::widget([
                'model' => $this->model,
                'form' => $this->form,
                'config' => [
                    'type' => ZFormWidget_2::type['card'],
                    'topBtn' => $this->_config['topBtn'],
                    'botBtn' => $this->_config['botBtn'],
                ]

            ]);

            if ($this->_config['isCard'])
                $this->htm = $this->isCard();

            return null;
        }


        $stepCode = null;

        $i = 0;
        //Iterate Cards
        $stepNumber = 0;
        foreach ($cards as $steps) {
            $stepNumber++;
            $stepTitle = ZArrayHelper::getValue($steps, 'title'); //For Steptitle
            $stepCodes = [];
            foreach ($steps['items'] as $block) {
                $stepCodes[] = [
                    'content' => $this->blocksCode($stepTitle, $i),
                    'title' => $stepTitle,
                ];
                $i++;
            }

            $blockCode = $this->blockReady($stepCodes);
            $stepWizardData[] = [
                'id' => $stepNumber,
                'title' => $stepTitle,
                'content' => $blockCode
            ];

            $blockTab = new TabItem();
            $blockTab->title = $stepTitle;
            $blockTab->content = $blockCode;

            $stepTabData[] = $blockTab;
        }

        $title = Az::l('Применить');
        if (!empty($this->_config['btnTitle']))
            $title = $this->_config['btnTitle'];

        $isNew = ZVarDumper::grapesValue($this->httpGet('isNew'));
        $changeSave = $this->model->configs->changeSave;

        $topBtn = ZButtonWidget::widget([
            'id' => 'secondary' . $this->modelClassName,
            'config' => [
                'btnType' => ZButtonWidget::btnType['submit'],
                'text' => $title,
                'pjax' => 0,
                'hasIcon' => false,
                'icon' => '',
                'btnStyle' => ZButtonWidget::btnStyle['btn-outline-dark'],
                'btnRounded' => false,
                'name' => 'submitBtn',
                'class' => 'rounded text-muted',
            ],
            'active' => [
                'click' => true,
                'change' => true,
            ]
        ]);

        $bottomBtn = ZButtonWidget::widget([
            'id' => $this->modelClassName,
            'config' => [
                'btnType' => ZButtonWidget::btnType['submit'],
                'text' => $title,
                'pjax' => 0,
                'hasIcon' => false,
                'icon' => '',
                'btnStyle' => $this->_config['btnStyle'],
                'btnRounded' => false,
                'name' => 'submitBtn',
                'class' => 'rounded text-muted',
            ],
        ]);

        $removeBtn = ZBanderolWidget::widget([
            'config' => [
                'attr' => 'status_logistics',
                'value' => 'shipment_ready',
                'url' => ZUrl::to([
                    '/api/shop/cart/banderol',
                    'type' => 'multiBanderol',
                    'attribute' => 'status_logistics',
                    'modelClassName' => $this->model->className,
                    //'requiredClassName' => null,
                    'value' => 'shipment_ready',
                ]),
                'requiredClassName' => 'ShopOrder',
                'modelClassName' => 'ShopOrder',
                'btnOptions' => [
                    'config' => [
                        'btnStyle' => ZButtonWidget::btnStyle['btn-outline-success'],
                        'btnSize' => ZExportBtnWidget::btnSize['btn-mini'],
                        'btnRounded' => false,

                        'text' => Az::l('Бандероль')
                    ]
                ]
            ],
            'event' => [
                'ajaxComplete' => <<<JS
           function() {
                //window.location.reload()
                //alert('sadas');
           }
JS
            ]
        ]);

        $cancelBtn = '';
        if ($changeSave && !$isNew)
            $cancelBtn = $this->cancelBtn();

        $top = '';
        if ($this->_config['topBtn'])
            $top = strtr($this->_layout['submitTop'], [
                '{topBtn}' => $topBtn,
                '{cancelBtn}' => $cancelBtn,
            ]);

        $bottom = '';
        if ($this->_config['botBtn'])
            $bottom = strtr($this->_layout['submitBottom'], [
                '{bottomBtn}' => $bottomBtn
            ]);

        $remove = '';
        if ($this->_config['removeBtn'])
            $remove = strtr($this->_layout['removeBtn'], [
                '{removeBtn}' => $removeBtn,
            ]);

        $this->htm = $this->ready($stepWizardData, $stepTabData);
        $this->htm = strtr($this->_layout['main'], [
            '{formGrid}' => $this->htm,
            '{submitTop}' => $top,
            '{submitBottom}' => $bottom,
            '{removeBtn}' => $remove,
        ]);

        if ($this->_config['isCard'])
            $this->htm = $this->isCard();

        if ($checkForm)
            $this->activeEnd();


    }

    private function cancelBtn()
    {

        $userid = $this->userIdentity()->id;
        $class = $this->model->className;
        $action = $this->urlArrayStr;

        $sessionKey = "Cancel-$class-$action-$userid";

        $cancelClick = strtr($this->_layout['cancelClickAuto'], [
            '{cancelUrl}' => ZUrl::to([
                '/api/core/dyna/cancel',
                'modelName' => $class,
                'modelId' => $this->model->id,
                'fullWebId' => $action,
                'sessionKey' => $sessionKey,
                'isNew' => false,
            ]),
            '{cancelBtn}' => Az::l('Отмена'),
            '{confirmBtn}' => Az::l('Да'),
            '{confirmTitle}' => Az::l('Вы уверены что хотите Отменить действия?'),
        ]);

        return ZButtonWidget::widget([
            'id' => 'cancel' . $this->modelClassName,
            'config' => [
                'btnType' => ZButtonWidget::btnType['button'],
                'text' => Az::l('Отмена'),
                'pjax' => 0,
                'hasIcon' => false,
                'icon' => '',
                'btnStyle' => ZButtonWidget::btnStyle['btn-outline-danger'],
                'btnRounded' => false,
                'name' => 'cancelBtn',
                'class' => 'rounded text-muted',
            ],
            'event' => [
                'click' => $cancelClick
            ]
        ]);
    }

    private function isCard()
    {
        return ZCardWidget::widget([
            'config' => [
                'title' => $this->model->configs->title,
                'type' => ZCardWidget::type['dynCard'],
                'content' => $this->htm
            ]
        ]);
    }

    private function blocksCode($title, $ident, $formType = ZFormWidget::type['block'])
    {
        $code = ZFormWidget::widget([
            'model' => $this->model,
            'form' => $this->form,
            'config' => [
                'type' => $formType,
                'ident' => $ident,
                'topBtn' => false,
                'botBtn' => false,
                'buildConfigs' => $this->_config
            ]
        ]);

        if ($this->_config['blockType'] === self::blockType['card']) {
            $cardOptions = ZArrayHelper::merge([
                'config' => [
                    'content' => $code,
                    'title' => $title
                ]
            ], $this->_config['blockOptions']);
            $code = ZCardWidget::widget($cardOptions);
        }

        return $code;
    }

    private function blockReady($data)
    {
        $code = null;
        switch ($this->_config['blockType']) {
            case self::blockType['naked']:
            case self::blockType['card']:
                foreach ($data as $block)
                    $code .= $block['content'];
                break;
            default:
                $blockOptions = ZArrayHelper::merge([
                    'data' => $data
                ], $this->_config['blockOptions']);
                $code = $this->_config['blockType']::widget($blockOptions);
                break;
        }

        return $code;
    }

    private function ready($wizardData, $tabData)
    {
        $code = null;
        switch ($this->_config['stepType']) {
            case self::stepType['pill']:
            case self::stepType['tab']:
            case self::stepType['smartTab']:
                $options = ZArrayHelper::merge([
                    'data' => $tabData
                ], $this->_config['stepOptions']);
                $code = $this->_config['stepType']::widget($options);
                break;
            case self::stepType['wizard']:
                $options = ZArrayHelper::merge([
                    'data' => $wizardData
                ], $this->_config['stepOptions']);
                $code = $this->_config['stepType']::widget($options);
                break;
            case self::stepType['card']:
                $code = $this->stepCode($tabData);
                break;
            case self::stepType['none']:
                $code = $this->stepCode($tabData, false);
                break;
        }
        return $code;
    }

    private function stepCode($data, $card = true)
    {
        $code = null;
        foreach ($data as $item) {
            $step = $item->content;
            if ($card) {

                $options = ZArrayHelper::merge([
                    'config' => [
                        'content' => $step,
                        'title' => $item->title
                    ]
                ], $this->_config['stepOptions']);
                $step = ZCardWidget::widget($options);
            }
            $code .= $step;
        }
        if ($card && $this->_config['isStepsVertical'])
            $code = strtr($this->_layout['card'], [
                '{cards}' => $code,
                '{parentClass}' => $this->_config['parentClass']
            ]);
        return $code;
    }

}
