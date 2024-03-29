<?php


namespace zetsoft\widgets\market\AUWs;


use zetsoft\system\kernels\ZWidget;

class ZPlaceAnOrderWidget extends Zwidget
{
    public $config = [];
    public $_config = [

        'grapes' => true,

    ];


    public $event = [];
    public $_event = [
        'click' => ' console.log("self | $eventClick") ',
        'dblclick' => ' console.log("self | $eventDblclick") ',
        'mouseenter' => ' console.log("self | $eventMouseEnter") ',
        'mouseleave' => ' console.log("self | $eventMouseLeave") ',
        'keyup' => ' console.log("self | $eventKeyup") ',
        'onload' => 'console.log("self | $eventOnLoad")',
        'onclick' => 'console.log("self | $eventOnClick")',
    ];
    /*   */
    public $layout = [];
    public $_layout = [
        'main' => <<<HTML
    <section class="checkout">
    <div class="container">
        <div class="row">

            <div class="col-md-5">
                <div class="row">

                    <div class="col-md-12">
                        <div class="pay-meth">
                            <h5>Payment Method</h5>
                            <div class="pay-box">
                                <ul class="list-unstyled">
                                    <li>
                                        <input type="radio" id="pay1" name="payment" value="pay1" checked="">
                                        <label for="pay1"><span><i class="fa fa-circle"></i></span>Cash On Delivery</label>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque sint placeat illo animi quis minus accusantium ad doloribus, odit explicabo asperiores quidem.</p>
                                    </li>
                                    <li>
                                        <input type="radio" id="pay2" name="payment" value="pay2">
                                        <label for="pay2"><span><i class="fa fa-circle"></i></span>Direct Bank Transfer</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="pay3" name="payment" value="pay3">
                                        <label for="pay3"><span><i class="fa fa-circle"></i></span>Cheque Payment</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="pay4" name="payment" value="pay4">
                                        <label for="pay4"><span><i class="fa fa-circle"></i></span>Paypal</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="pay5" name="payment" value="pay5">
                                        <label for="pay5"><span><i class="fa fa-circle"></i></span>Payoneer</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button type="button" name="button" class="ord-btn">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
          
          
HTML,
        'js' => <<<JS
         
                
JS,
        'event' => <<<JS
             $('#{id}')
            .on('click', {click})
            .on('dblclick', {dblclick})
            .on('keyup', {keyup})
            .on('mouseenter', {mouseenter})
            .on('mouseleave', {mouseleave})
            .on('onload',{onload})
            .on('onclick',{onclick}); 

JS,
        'css' => <<<CSS
        .checkout {
            padding: 50px 0 10px;
        }

        .checkout .pay-meth {
            background: #f1f1f1;
            padding: 28px 35px 20px;
        }

        .checkout .pay-meth h5 {
            color: #444444;
            text-transform: uppercase;
            font-weight: 600;
            margin-bottom: 35px;
        }

        .checkout .pay-meth .pay-box ul li {
            margin-bottom: 10px;
        }

        .checkout .pay-meth .pay-box ul li input[type="radio"] {
            display: none;
        }

        .checkout .pay-meth .pay-box ul li input[type="radio"] + label {
            margin-bottom: 0;
            font-size: 15px;
            color: #666666;
            font-weight: 600;
        }

        .checkout .pay-meth .pay-box ul li input[type="radio"] + label span {
            display: inline-block;
            width: 20px;
            height: 20px;
            background-color: #dddddd;
            cursor: pointer;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            border-radius: 50%;
            font-size: 14px;
            text-align: center;
            margin-right: 10px;
        }

        .checkout .pay-meth .pay-box ul li input[type="radio"] + label span i {
            font-size: 12px;
            color: #666666;
            padding-top: 4px;
            opacity: 0;
            -webkit-transition: all 0.2s ease;
            -moz-transition: all 0.2s ease;
            -ms-transition: all 0.2s ease;
            -o-transition: all 0.2s ease;
            transition: all 0.2s ease;
        }

        .checkout .pay-meth .pay-box ul li input[type="radio"] + label:hover {
            cursor: pointer;
        }

        .checkout .pay-meth .pay-box ul li input[type="radio"]:checked + label span i {
            opacity: 1;
        }

        .checkout .pay-meth .pay-box ul li p {
            color: #969696;
            margin: 8px 30px 10px;
        }

        .checkout button.ord-btn {
            font-size: 18px;
            color: #fff;
            background: #e45151;
            border: none;
            display: inline-block;
            text-transform: uppercase;
            font-weight: 600;
            width: 100%;
            height: 45px;
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            -ms-border-radius: 30px;
            border-radius: 30px;
            margin-top: 30px;
        }

        .checkout button.ord-btn:hover {
            background: #5677fc;
        }
     

CSS,



    ];

    public function asset()
    {

    }

    public function codes()
    {
        $this->js .= strtr($this->_layout['event'], [
            '{id}' => $this->id,
            '{click}' => $this->eventCode('click'),
            '{keyup}' => $this->eventCode('keyup'),
            '{dblclick}' => $this->eventCode('dblclick'),
            '{mouseenter}' => $this->eventCode('mouseenter'),
            '{mouseleave}' => $this->eventCode('mouseleave'),
        ]);


        $this->htm .= strtr($this->_layout['main'], [
            '{name}' => $this->name,
            '{value}' => $this->value,
            //'{\'{readonly}\' => $this->_config[\'readonly\'] ? \'readonly\' : \'\',type}' => $this->_config['type'],
            '{readonly}' => $this->_config['readonly'] ? 'readonly' : '',
        ]);


        $this->js .= strtr($this->_layout['js'], [
            '{id}' => $this->id,
            '{icon}' => $this->modelCheck() ? $this->value : '',
        ]);

        $this->css = strtr($this->_layout['css'], []);
    }
}

