<?php

/**
 *
 *
 * Created By: Shakxzod Namazbaev
 * Created_at: 03.12.2019
 * Refactored By: Xakimjon Ergashov
 * Refactored_at 05.05.2020
 *
 */

namespace zetsoft\widgets\navigat;

use rmrevin\yii\fontawesome\FA;
use rmrevin\yii\fontawesome\FAS;
use zetsoft\system\assets\ZColor;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZVarDumper;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\former\ZAjaxWidget;
use function Amp\Parallel\Worker\factory;

class   ZButtonWidgetaaa extends ZWidget
{

    /**
     * Configuration
     */
    public $config = [];
    public $_config = [

        /**
         *
         * ALL
         */

        'text' => '',
        'title' => '',
        'btn' => true,
        'btnType' => ZButtonWidget::btnType['link'],
        'btnStyle' => ZButtonWidget::btnStyle['btn-transparent'],
        'btnRounded' => true,
        'btnFloating' => false,
        'toggle' => ZButtonWidget::toggle['tooltip'],
        'color' => ZColor::color['none'],
        'class' => 'border-none',
        'hidden' => false,
        /**
         *
         * Button
         */
        'dataTarget' => '',
        'ic-target' => '',
        'ic-push-url' => true,
        /**
         *
         * Links
         */
        'url' => '#',
        'target' => ZButtonWidget::target['_self'],
        'method' => ZButtonWidget::method['none'],
        'iconsSm' => false,
        /**
         *
         * Badge
         */
        'badge' => '100',
        'badgeType' => ZButtonWidget::badgeType['badge-default'],
        /**
         *
         * Confirm
         */
        'hasConfirm' => false,
        'confirm' => 'Вы уверены?',
        'confirmTitle' => 'Подтверждение',
        'canselLabelText' => 'cancel',
        'confirmLabelText' => 'ok',
        'blank' => false,
        /**
         *
         * Tooltip
         */
        'hintRounded' => true,
        'ttSize' => ZButtonWidget::ttSize['medium'],
        'ttSide' => ZButtonWidget::ttSide['top'],
        'ttColor' => ZButtonWidget::ttColor['info'],
        'ttAnimate' => ZButtonWidget::ttAnimate['bounce'],
        /**
         *
         * Icon
         */
        'download' => false,
        'icon' => 'fa-5'
    ];

    /**
     *
     * Plugin Events
     * https://select2.org/programmatic-control/events
     */
    public $event = [];
    public $_event = [
        'confirmEvent' => 'function () {
            location.href = this.href
        }'
    ];

    public const btnType = [
        'link' => 'link',
        'reset' => 'reset',
        'button' => 'button',
        'submit' => 'submit',
    ];

    public const target = [
        '_blank' => '_blank',
        '_self' => '_self',
        '_top' => '_top',
    ];

    public const toggle = [
        'tooltip' => 'tooltip',
        'collapse' => 'collapse',
        'dropdown' => 'dropdown',
        'modal' => 'modal',
        'tab' => 'tab',
        'pill' => 'pill',
        'button' => 'button',
        'buttons' => 'buttons',
    ];

    public $layout = [];
    public $_layout = [

        'attr' => <<<HTML
id="{id}" data-toggle="{data-toggle}" data-pjax="{data-pjax}" class="{btnSize} {btn} {btn-rounded} ovr-button {btn-floating} {icons-sm} {btnStyle} {color} hint--{ttSide} hint--{ttColor} hint--{ttSize} hint--{ttAnimate} {hint--rounded} {class}" aria-label="{title}" aria-hidden="{aria-hidden}" {hidden} {disabled}
HTML,

        'button' => <<<HTML
    <button data-target="{data-target}" type="{btn-type}" {attrCode} name="{name}">{iconCode} {text}</button> {badgeCode}
HTML,
        'cooler' => <<<HTML
             <button 
                type="{btn-type}" 
                ic-post-to="{url}"
                ic-push-url="{ic-push-url}"
                ic-target="{ic-target}"
                ic-select-from-response=""
                {attrCode}
             >
                 {iconCode}
                 {text}
             </button> 
             {badgeCode}
                
HTML,

        'link' => <<<HTML
    <a href="{url}" target="{target}" {attrCode} {data-method} {download}> {iconCode} {text}</a> {badgeCode}
HTML,

        'confirm' => <<<JS
        $('#{id}').on("click", function (event) {
            bootbox.confirm({
                title: "{confirmTitle}",
                message: "{confirm}",
                buttons: {
                    cancel: {
                        label: '<i class="fa fa-times"></i> {canselLabelText}'
                    },
                    confirm: {
                        label: '<i class="fa fa-check"></i> {confirmLabelText}'
                    }
                },
                callback: function (result) {
                                if (result === true) {
                        {confirmEvent}
                    }
                    else
                        console.log(event); 
                }
            });
        });
JS,
        'method' => <<<HTML
data-method="{data-method}" 
HTML,
        'icon' => <<<HTML
        <i class="{icon}"></i>
HTML,
        'ic-icon' => <<<HTML
        <i class="ic-indicator fa fa-spinner fa-spin" style="display: none"></i>
HTML,
        'badge' => <<<HTML
        <span class="badge {badgeType} counter">{badge}</span>
HTML,
        'event' => <<<JS
    {confirmCode}
    {clickCode}
JS,
    ];

    public function codes()
    {
        $confirmCode = '';
        if ($this->_config['hasConfirm']) {
            $confirmCode = strtr($this->_layout['confirm'], [
                '{id}' => $this->id,
                '{url}' => $this->_config['url'],
                '{confirm}' => $this->_config['confirm'],
                '{confirmTitle}' => $this->_config['confirmTitle'],
                '{canselLabelText}' => $this->_config['canselLabelText'],
                '{confirmLabelText}' => $this->_config['confirmLabelText'],
                '{confirmEvent}' => $this->eventCode('confirmEvent')

            ]);
            $this->_config['btnType'] = self::btnType['button'];
        }

        $clickCode = '';
        if ($this->modelCheck()) {
            if ($this->_config['blank']) {
                $clickCode = <<<JS
            $('#{$this->id}').on('click', function() {
                  window.open('{$this->value}')
            });
JS;
            }
        } else {
            if ($this->_config['blank']) {
                $clickCode = <<<JS
            $('#{$this->id}').on('click', function() {
                  window.open('{$this->_config['url']}')
            });
JS;
            }
        }

        $badgeCode = '';
        if ($this->_config['hasBadge'])
            $badgeCode = strtr($this->_layout['badge'], [
                '{badge}' => $this->_config['badge'],
                '{badgeType}' => $this->_config['badgeType'],
            ]);

        $iconCode = '';
        if ($this->_config['hasIcon'])
            $iconCode = strtr($this->_layout['icon'], [
                '{icon}' => $this->_config['icon'],
            ]);

        $dataMethod = '';
        if ($this->_config['method'] !== self::method['none'])
            $dataMethod = strtr($this->_layout['method'], [
                '{data-method}' => $this->_config['method'],
            ]);

        $attrCode = strtr($this->_layout['attr'], array(
            '{id}' => $this->id,
            '{text}' => $this->_config['text'],
            '{title}' => $this->_config['title'],
            '{class}' => $this->_config['class'],
            '{data-toggle}' => $this->_config['toggle'],
            '{btnStyle}' => $this->_config['btnStyle'],
            '{btnType}' => $this->_config['btnType'],
            '{btnSize}' => $this->_config['btnSize'],
            '{color}' => $this->_config['color'],
            '{data-pjax}' => $this->_config['pjax'] ? '1' : '0',
            '{btn-floating}' => $this->_config['btnFloating'] ? 'btn-floating' : '',
            '{hint--rounded}' => $this->_config['hintRounded'] ? 'hint--rounded' : '',
            '{aria-hidden}' => $this->_config['ariaHidden'] ? 'true' : '',
            '{btn-rounded}' => $this->_config['btnRounded'] ? 'btn-rounded' : '',
            '{btn}' => $this->_config['btn'] ? 'btn' : '',
            '{icons-sm}' => $this->_config['iconsSm'] ? 'icons-sm' : '',
            '{ttSize}' => $this->_config['ttSize'],
            '{ttSide}' => $this->_config['ttSide'],
            '{ttColor}' => $this->_config['ttColor'],
            '{ttAnimate}' => $this->_config['ttAnimate'],
            '{hidden}' => $this->_config['hidden'] ? 'hidden="hidden"' : '',
            '{disabled}' => $this->_config['readonly'] ? 'disabled' : '',
        ));

        if ($this->_config['btnType'] === ZButtonWidget::btnType['link'])
            $_layout = $this->_layout['link'];
        else
            $_layout = $this->_layout['button'];

        if ($this->_config['cooler']) {
            $_layout = strtr($this->_layout['cooler'], [
                '{btnSize}' => $this->_config['btnSize'],
                '{ic-target}' => $this->_config['ic-target'],
                '{ic-push-url}' => $this->_config['ic-push-url']
            ]);

            if ($this->_config['hasIcon'])
                $iconCode = $this->_layout['ic-icon'];
        }

        if (is_array($this->value))
            $this->value = ZVarDumper::beauty($this->value);

        if ($this->modelCheck())
            $this->htm .= strtr($_layout, [
                /**
                 *
                 * Button
                 */
                '{data-target}' => $this->_config['dataTarget'],
                '{btn-type}' => $this->_config['btnType'],
                /**
                 *
                 * Links
                 */
                '{text}' => $this->_config['text'],
                '{url}' => $this->value,
                '{target}' => $this->_config['target'],
                '{data-method}' => $dataMethod,
                '{attrCode}' => $attrCode,
                '{iconCode}' => $iconCode,
                '{badgeCode}' => $badgeCode,
                '{download}' => $this->_config['download'] ? 'download' : '',
                '{btnSize}' => $this->_config['btnSize'],
            ]);

        else

            $this->htm .= strtr($_layout, [
                /**
                 *
                 * Button
                 */
                '{data-target}' => $this->_config['dataTarget'],
                '{btn-type}' => $this->_config['btnType'],
                '{name}' => empty($this->_config['name']) ? '' : $this->_config['name'],
                /**
                 *
                 * Links
                 */
                '{text}' => $this->_config['text'],
                '{url}' => $this->_config['url'],
                '{target}' => $this->_config['target'],
                '{data-method}' => $dataMethod,
                '{attrCode}' => $attrCode,
                '{iconCode}' => $iconCode,
                '{badgeCode}' => $badgeCode,
                '{download}' => $this->_config['download'] ? 'download' : '',
                '{btnSize}' => $this->_config['btnSize'],
            ]);

        $this->js .= strtr($this->_layout['event'], [
            '{id}' => $this->id,
            '{confirmCode}' => $confirmCode,
            '{clickCode}' => $clickCode,
            '{confirmEvent}' => $this->eventCode('confirmEvent')
        ]);

        $this->htm .= strtr($this->_layout['ic-icon'], [
            '{btnSize}' => $this->_config['btnSize'],
        ]);

    }
}
