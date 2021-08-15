<?php

use zetsoft\dbitem\core\WebItem;
use zetsoft\models\place\PlaceAdress;
use zetsoft\models\shop\ShopOrder;
use zetsoft\models\shop\ShopOrderItem;
use zetsoft\service\cores\Date;
use zetsoft\system\except\ZException;
use zetsoft\service\forms\Active;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\former\ZBanderolWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetLobar;
use zetsoft\widgets\former\ZExportBtnWidget;
use zetsoft\widgets\former\ZFormBuildWidget;
use zetsoft\widgets\former\ZGetChecksWidget;
use zetsoft\widgets\former\ZPdfWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZInputBtnWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZKDateTimePickerWidget;
use zetsoft\widgets\inputes\ZLibraInputWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZSessionGrowlWidget;
use zetsoft\dbitem\data\TabItem;
use zetsoft\widgets\navigat\ZSmartTabWidget;


/** @var ZView $this */


/**
 *
 * Action Params
 */

$action = new WebItem();

$action->title = Azl . 'Редактирование Поступление товаров в склад';

$action->icon = 'fal fa-film';
$action->type = WebItem::type['html'];
$action->csrf = true;
$action->debug = false;
$action->layout = true;
$action->layoutFile = 'admin';

$this->paramSet(paramAction, $action);

$this->title();
$this->toolbar();

?>

<div class="row p-3">
  <div class="mx-auto col-md-12">

      <?

      echo ZLibraInputWidget::widget([
          'config' => [
              'objectName' => 'libra',
              'mode' => ZLibraInputWidget::mode['manual'],
              'inputSelector' => '#shoporder-weight',
              'autorun' => true,
          ]
      ]);

      $order_id = $this->httpGet('shop_order_id');

      $order = ShopOrder::findOne($order_id);

      if ($order === null) {
          throw new ZException(Az::l('Заказ не найден.'));
      }

      $dogovor = ZPdfWidget::widget([
          'config' => [
              'url' => ZUrl::to([
                  '/core/word/actOb',
                  'type' => 'multiContract',
              ]),
              'modelClassName' => 'ShopOrder',
              'checkKeys' => $order_id,
              'btnOptions' => [
                  'config' => [

                      'btnStyle' => ZButtonWidget::btnStyle['btn-outline-success'],
                      'btnSize' => ZExportBtnWidget::btnSize['btn-mini'],
                      'btnRounded' => false,
                      'text' => Az::l('Договор заказа')
                  ]
              ]
          ],
          'event' => [
              'ajaxComplete' => <<<JS
            function () {
                //location.reload()
            }
JS
          ]
      ]);

      $button = ZButtonWidget::widget([
          'config' => [

              'btnType' => ZButtonWidget::btnType['link'],
              'url' => ZUrl::to([
                  '/shop/logistics/shop-order/index'
              ]),
              'btnStyle' => ZButtonWidget::btnStyle['btn-outline-dark'],
              'btnSize' => ZButtonWidget::btnSize['btn-mini'],
              'btnRounded' => false,
              'text' => Az::l('Провести и закрыть'),
              'class' => 'm-0',
          ]
      ]);

      $dogovor = ZGetChecksWidget::widget([
          'model' => $order,
          'config' => [
              'url' => ZUrl::to([
                  '/api/shop/cart/actOb',
                  'type' => 'multiContract',
                  'modelId' => $order_id
              ]),
              'dyna' => false,
              'noConfirm' => true,
              'btnOptions' => [
                  // 'id' => 'btn-banderol',
                  'config' => [

                      'btnType' => ZButtonWidget::btnType['button'],
                      'btnStyle' => ZButtonWidget::btnStyle['btn-outline-dark'],
                      'btnSize' => ZButtonWidget::btnSize['btn-mini'],
                      'btnRounded' => false,
                      'text' => Az::l('Договор заказа'),
                      'class' => 'm-0'
                  ]
              ],
          ],
          'event' => [
              'ajaxSuccess' => <<<JS
            function(data) {
            
                if (data.error) {
                    alert(data.error)
                }
                                  
                
                
                if (data.path)
                    window.open(data.path, '_blank')
                    window.dynaReload('{$order->className}')
            }
JS,

          ]
      ]);

      $banderol = ZGetChecksWidget::widget([
          'model' => $order,
          'config' => [
              'url' => ZUrl::to([
                  '/api/shop/cart/banderol',
                  'type' => 'multiBanderol',
                  'modelId' => $order_id,
                  'modelClassName' => $order->className,
                  'value' => 'shipment_ready',
              ]),
              'dyna' => false,
              'noConfirm' => true,
              'btnOptions' => [
                  'id' => 'btn-banderol',
                  'config' => [

                      'btnType' => ZButtonWidget::btnType['button'],
                      'btnStyle' => ZButtonWidget::btnStyle['btn-outline-dark'],
                      'btnSize' => ZButtonWidget::btnSize['btn-mini'],
                      'btnRounded' => false,
                      'text' => Az::l('Бандероль'),
                      'class' => 'm-0'
                  ]
              ],
          ],
          'event' => [
              'ajaxSuccess' => <<<JS
            function(data) {
            
                if (data.error) {
                    bootbox.confirm({
                        title: 'Ошибка',
                        message: data.error,
                        callback: function (result) {
                            
                        }
                    });
                }
            
                if (data.data) {
                    
                    if (data.redirect) {
                         window.open(data.data, '_blank')
                    } else {
                        bootbox.confirm({
                            title: 'Ошибка',
                            message: 'Необходимо заполнить вес заказа!',
                            callback: function (result) {
                                if (result === true)
                                    $('#update-'+ data.id).click();
                            }   
                        });
                    }
                }
            }
JS,
          ],
      ]);

      $order->configs->widget = [
          'weight' => ZHInputWidget::class
      ];

      $order->cards = [
          [
              'title' => Az::l('Основное'),
              'items' => [
                  [
                      'title' => Az::l('Форма'),
                      'items' => [
                          [
                              'number',
                              'code',
                              'responsible',
                              'operator',
                          ],
                          [
                              'date_deliver',
                              'date_approve',
                              'time_deliver'
                          ],
                          [
                              'place_adress_id',
                              'weight',
                              'packaging',
                          ],
                      ],
                  ],
              ],
          ],
          [
              'title' => Az::l('Клиенты'),
              'items' => [
                  [
                      'title' => Az::l('Форма'),
                      'items' => [
                          [
                              'user_id',
                          ],
                          [
                              'contact_name',
                          ],
                          [
                              'contact_phone',
                          ],
                          [
                              'called_time',
                          ],
                      ],
                  ],
              ],
          ],
      ];

      $order->configs->options = [
          'weight' => [
              'active' => [
                  'click' => true,
              ],
              'config' => [
                  'buttonText' => Az::l('Вес'),
                  'buttonWeight' => true,
                  'classMain' => 'd-flex',
                  'btnClass' => 'px-4',
              ],
              'event' => [
                  'buttonClick' => <<<JS
                      function() {
                          libra.updateWeight();
                      }
                  JS,

              ],
          ],

      ];

      $order->responsible = $this->userIdentity()->id;

      $order->configs->changeSave = true;
      $order->columns();
      $place = PlaceAdress::findOne($order->place_adress_id);

      if (empty($place)) {
          return;
      }

      $place->configs->changeSave = true;

      $place->cards = [
          [
              'title' => Az::l('Первый этап'),
              'shows' => true,
              'items' => [
                  [
                      'title' => Az::l('Форма'),
                      'shows' => true,
                      'items' => [
                          [
                              'place_country_id',
                              'place_region_id',
                              'home',
                          ],
                          [
                              'orientation',
                              'place',
                              'postal_code',
                          ]

                      ],
                  ],
              ],
          ],
      ];

      $place->columns();
      if ($this->modelSave($order)) {
          $this->urlRedirect(['index', true]);
      }

      $this->modelSave($place);

      if (empty($order->parent))
          echo <<<HTML

        <div class="mb-3 d-flex justify-content-between">
        
            <div class="d-flex">
                $dogovor
                $banderol
            </div>
            
            $button
            
        </div>
        
HTML;
      else
          echo <<<HTML

        <div class="mb-3 d-flex justify-content-between">
        
            <div class="d-flex">
                <h2>Заказ является дочерним заказом {$order->parent}</h2>
            </div>
            
            $button
            
        </div>
        
        
HTML;

      $active = new Active();
      $active->type = Active::type['vertical'];
      $active->childClass = 'my-3';

      $form = $this->activeBegin($active);

      $stepType = ZFormBuildWidget::stepType['smartTab'];

      echo ZFormBuildWidget::widget([
          'model' => $order,
          'form' => $form,
          'config' => [
              'stepOptions' => [
                  'config' => [
                      'mcontent' => 'p-3',
                  ],
              ],
              'btnTitle' => Az::l('Сформировать и закрыть'),
              'botBtn' => false,
              'topBtn' => false,
              'stepType' => $stepType,
              'blockType' => ZFormBuildWidget::blockType['naked']
          ],
      ]);

      echo ZFormBuildWidget::widget([
          'model' => $place,
          'form' => $form,
          'config' => [
              'stepOptions' => [
                  'config' => [
                      'mcontent' => 'p-3',
                  ],
              ],
              'botBtn' => false,
              'topBtn' => false,
          ],
      ]);


      $this->activeEnd();

      ?>

  </div>


  <div class="col-md-12 mx-auto mt-5">

      <?php
      $this->pjaxBegin();
      $model = new ShopOrderItem();

      $model->configs->query = ShopOrderItem::find()
          ->where([
              'shop_order_id' => $order_id
          ]);

      if ($order->status_universal === ShopOrder::status_universal['change']) {
          $model->configs->nameOn = [
              'id',
              'shop_catalog_id',
              'shop_order_id',
              'check_return',
              'user_company_id',
              'ware_id',
              'amount',
              'best_before',
              'price',
              'price_all',
          ];
      } else {
          $model->configs->nameOn = [
              'id',
              'shop_catalog_id',
              'shop_order_id',
              'user_company_id',
              'ware_id',
              'amount',
              'best_before',
              'price',
              'price_all',
          ];
      }

      $model->configs->dynaButtons = [
          'update' => [
              'content' => '{update}',
              'options' => ['class' => 'btn-group p-1 mr-0 {btnSize} {iconSize}']
          ],
          'add-tabular-clone-delete' => [
              'content' => '{add}{delete}',
              'options' => ['class' => 'btn-group p-1 mr-0 {btnSize} {iconSize}']
          ],

      ];

      $model->configs->widget = [
          'weight' => ZHInputWidget::class
      ];

      $model->columns();

      /** @var ZView $this */
      echo ZDynaWidgetLobar::widget([
          'model' => $model,
          'rightNameEx' => [
              'system'
          ],
          'config' => [
              'pjax' => false,
              'hasToolbar' => true,
              'columnBefore' => [
                  'checkbox',
                  'serial',
                  'action',
                  'id'
              ],
              'viewUrl' => '{fullUrl}/view-process.aspx?shop_order_id=' . $order_id,
              'actionButtons' => [
                  'clone',
                  'delete',
                  'view'
              ],
              'spaHeight' => [
                  'create' => '600px',
                  'view' => '600px',
              ],
              'columnAfter' => false,
              'deleteAllUrl' => '/api/core/dyna/delete-all.aspx?modelClassName={modelClassName}&shop_order_id=' . $order_id,
              'createUrl' => '{fullUrl}/create-process.aspx?shop_order_id=' . $order_id,
              'createTitle' => Az::l('Создание прихода в склад')
          ]

      ]);
      $this->pjaxEnd();
      ?>

  </div>

</div>


