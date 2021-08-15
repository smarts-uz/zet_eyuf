<?php

namespace zetsoft\widgets\incores;

use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use function GuzzleHttp\Psr7\str;
use zetsoft\system\kernels\ZWidget;
use kartik\widgets\Select2;
use yii\web\JsExpression;

/**
 *
 * Class ZKSelect2Widget
 * http://demos.krajee.com/widget-details/select2
 *
 * Created By: Sunnat Ermatov
 * Refactored: Sunnat Ermatov
 */

class ZLazyloadVerlockWidget extends ZWidget
{

    /**
     * Configuration
     */
    public $config = [];
    public $_config = [

    ];


    /**
     *
     * Plugin Events
     * https://select2.org/programmatic-control/events
     */
    public $event = [];
    public $_event = [

    ];


    /**
     *
     * Constants
     */
    public const theme = [
        'default' => 'default',
        'classic' => 'classic',
        'bootstrap' => 'bootstrap',
        'krajee' => 'krajee',
        'krajee-bs4' => 'krajee-bs4',
    ];

    public const size = [
        'lg' => 'lg',
        'md' => 'md',
        'sm' => 'sm'
    ];

    /*public $layout = [];
    public $_layout =[

        'main' =>
    ];*/

    public function asset()
    {
        $this->fileJs('https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.4.0/dist/lazyload.js');
    }





    public function codes()
    {
        //  $this->htm = \kartik\select2\Select2::widget($this->options);

        $this->htm = <<<HTML
        <div class="container">
<div id="results1" class="results">
    <ul>
        <li>
            <a href="#/it/donna/stivaletti_cod44721746jj.html"
            ><img
                    alt="Stivaletti"
                    src="https://via.placeholder.com/440x560?text=Img+01"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a href="#/it/donna/open-toe_cod44740806jx.html"
            ><img
                    alt="Open toe"
                    src="https://via.placeholder.com/440x560?text=Img+02"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a
                    href="#/it/donna/sneakers-tennis-shoes-basse_cod44735977gr.html"
            ><img
                    alt="Sneakers &amp; Tennis"
                    data-src="https://via.placeholder.com/440x560?text=Img+03"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a
                    href="#/it/donna/sneakers-tennis-shoes-basse_cod44738717am.html"
            ><img
                    alt="Sneakers &amp; Tennis shoes basse"
                    data-src="https://via.placeholder.com/440x560?text=Img+04"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a
                    href="#/it/donna/sneakers-tennis-shoes-alte_cod44739940cb.html"
            ><img
                    alt="Sneakers &amp; Tennis shoes alte"
                    data-src="https://via.placeholder.com/440x560?text=Img+05"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a
                    href="#/it/donna/sneakers-tennis-shoes-alte_cod44740860xg.html"
            ><img
                    alt="Sneakers &amp; Tennis shoes alte"
                    data-src="https://via.placeholder.com/440x560?text=Img+06"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a
                    href="#/it/donna/sneakers-tennis-shoes-basse_cod44738719vn.html"
            ><img
                    alt="Sneakers &amp; Tennis shoes basse"
                    data-src="https://via.placeholder.com/440x560?text=Img+07"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a
                    href="#/it/donna/sneakers-tennis-shoes-basse_cod44739938wk.html"
            ><img
                    alt="Sneakers &amp; Tennis shoes basse"
                    data-src="https://via.placeholder.com/440x560?text=Img+08"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a href="#/it/donna/stivali_cod44736534fq.html"
            ><img
                    alt="Stivali"
                    data-src="https://via.placeholder.com/440x560?text=Img+09"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a href="#/it/donna/stivali_cod44735388ui.html"
            ><img
                    alt="Stivali"
                    data-src="https://via.placeholder.com/440x560?text=Img+10"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a href="#/it/donna/stivaletti_cod44739165ev.html"
            ><img
                    alt="Stivaletti"
                    data-src="https://via.placeholder.com/440x560?text=Img+11"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a href="#/it/donna/stivaletti_cod44739454hf.html"
            ><img
                    alt="Stivaletti"
                    data-src="https://via.placeholder.com/440x560?text=Img+12"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a href="#/it/donna/stivali_cod44719480km.html"
            ><img
                    alt="Stivali"
                    data-src="https://via.placeholder.com/440x560?text=Img+13"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a href="#/it/donna/stivaletti_cod44719687td.html"
            ><img
                    alt="Stivaletti"
                    data-src="https://via.placeholder.com/440x560?text=Img+14"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a href="#/it/donna/decollete_cod44721899ng.html"
            ><img
                    alt="Décolleté"
                    data-src="https://via.placeholder.com/440x560?text=Img+15"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a href="#/it/donna/mocassini_cod44721744sl.html"
            ><img
                    alt="Mocassini"
                    data-src="https://via.placeholder.com/440x560?text=Img+16"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a href="#/it/donna/stivaletti_cod44716730kr.html"
            ><img
                    alt="Stivaletti"
                    data-src="https://via.placeholder.com/440x560?text=Img+17"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a href="#/it/donna/decollete_cod44718734xl.html"
            ><img
                    alt="Décolleté"
                    data-src="https://via.placeholder.com/440x560?text=Img+18"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a href="#/it/donna/decollete_cod44721796uk.html"
            ><img
                    alt="Décolleté"
                    data-src="https://via.placeholder.com/440x560?text=Img+19"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a href="#/it/donna/francesine_cod44717679mj.html"
            ><img
                    alt="Francesine"
                    data-src="https://via.placeholder.com/440x560?text=Img+20"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a href="#/it/donna/stivaletti_cod44724594vu.html"
            ><img
                    alt="Stivaletti"
                    data-src="https://via.placeholder.com/440x560?text=Img+21"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a href="#/it/donna/decollete_cod44726148aq.html"
            ><img
                    alt="Décolleté"
                    data-src="https://via.placeholder.com/440x560?text=Img+22"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a href="#/it/donna/mocassini_cod44719629nt.html"
            ><img
                    alt="Mocassini"
                    data-src="https://via.placeholder.com/440x560?text=Img+23"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a href="#/it/donna/mocassini_cod44725329kq.html"
            ><img
                    alt="Mocassini"
                    data-src="https://via.placeholder.com/440x560?text=Img+24"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a href="#/it/donna/stivali_cod44724026qs.html"
            ><img
                    alt="Stivali"
                    data-src="https://via.placeholder.com/440x560?text=Img+25"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a href="#/it/donna/stivaletti_cod44720256gw.html"
            ><img
                    alt="Stivaletti"
                    data-src="https://via.placeholder.com/440x560?text=Img+26"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a href="#/it/donna/stivaletti_cod44722062id.html"
            ><img
                    alt="Stivaletti"
                    data-src="https://via.placeholder.com/440x560?text=Img+27"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a href="#/it/donna/mocassini_cod44722402rh.html"
            ><img
                    alt="Mocassini"
                    data-src="https://via.placeholder.com/440x560?text=Img+28"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a href="#/it/donna/stivaletti_cod44726296vu.html"
            ><img
                    alt="Stivaletti"
                    data-src="https://via.placeholder.com/440x560?text=Img+29"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a href="#/it/donna/stivaletti_cod44725755ct.html"
            ><img
                    alt="Stivaletti"
                    data-src="https://via.placeholder.com/440x560?text=Img+30"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a href="#/it/donna/stivaletti_cod44725348nv.html"
            ><img
                    alt="Stivaletti"
                    data-src="https://via.placeholder.com/440x560?text=Img+31"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a href="#/it/donna/stivaletti_cod44721879xx.html"
            ><img
                    alt="Stivaletti"
                    data-src="https://via.placeholder.com/440x560?text=Img+32"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a href="#/it/donna/cuissardes_cod44729472iq.html"
            ><img
                    alt="Cuissardes"
                    data-src="https://via.placeholder.com/440x560?text=Img+33"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a href="#/it/donna/decollete_cod44725388jv.html"
            ><img
                    alt="Décolleté"
                    data-src="https://via.placeholder.com/440x560?text=Img+34"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a href="#/it/donna/stivaletti_cod44721854ce.html"
            ><img
                    alt="Stivaletti"
                    data-src="https://via.placeholder.com/440x560?text=Img+35"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a
                    href="#/it/donna/sneakers-tennis-shoes-basse_cod44727690jp.html"
            ><img
                    alt="Sneakers &amp; Tennis shoes basse"
                    data-src="https://via.placeholder.com/440x560?text=Img+36"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a href="#/it/donna/mocassini_cod44727501hh.html"
            ><img
                    alt="Mocassini"
                    data-src="https://via.placeholder.com/440x560?text=Img+37"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a
                    href="#/it/donna/sneakers-tennis-shoes-basse_cod44727038aq.html"
            ><img
                    alt="Sneakers &amp; Tennis shoes basse"
                    data-src="https://via.placeholder.com/440x560?text=Img+38"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a href="#/it/donna/mocassini_cod44704882bq.html"
            ><img
                    alt="Mocassini"
                    data-src="https://via.placeholder.com/440x560?text=Img+39"
                    width="220"
                    height="280"
            /></a>
        </li>
        <li>
            <a href="#/it/donna/mocassini_cod44734002vc.html"
            ><img
                    alt="Mocassini"
                    data-src="https://via.placeholder.com/440x560?text=Img+40"
                    width="220"
                    height="280"
            /></a>
        </li>
    </ul>
</div>
</div>
HTML;

        $this->js = <<<JS
           (function() {
        function logElementEvent(eventName, element) {
            console.log(
                Date.now(),
                eventName,
                element.getAttribute("data-src")
            );
        }

        var callback_enter = function(element) {
            logElementEvent("🔑 ENTERED", element);
        };
        var callback_exit = function(element) {
            logElementEvent("🚪 EXITED", element);
        };
        var callback_reveal = function(element) {
            logElementEvent("👁️ REVEALED", element);
        };
        var callback_loaded = function(element) {
            logElementEvent("👍 LOADED", element);
        };
        var callback_error = function(element) {
            logElementEvent("💀 ERROR", element);
            element.src =
                "https://via.placeholder.com/440x560/?text=Error+Placeholder";
        };
        var callback_finish = function() {
            logElementEvent("✔️ FINISHED", document.documentElement);
        };

        var ll = new LazyLoad({
            container: document.getElementById("results1"),
            elements_selector: ".lazy", // ex: ".images img.lazy"
            threshold: 0, // default val: 300
            thresholds: null, // "500px 10%"
            data_src: "src", // "lazy-src"
            data_srcset: "srcset", // "lazy-srcset"
            data_sizes: "sizes", // "lazy-sizes"
            data_bg: "bg", // "lazy-bg"
            data_poster: "poster", // "lazy-poster"
            class_loading: "loading", // ex: "lazy-loading"
            class_loaded: "loaded", // ex: "lazy-loaded"
            class_error: "error",  // ex: "lazy-error"
            load_delay: 0,  // ex: 300
            auto_unobserve: true, // ex: false
            callback_set: null, // ex: (el)=>{console.log("Loading", el)}    
            use_native: false, // ex: true
            // Assign the callbacks defined above
            callback_enter: callback_enter,
            callback_exit: callback_exit,
            callback_reveal: callback_reveal,
            callback_loaded: callback_loaded,
            callback_error: callback_error,
            callback_finish: callback_finish
        });
    })();
JS;
        $this->css = <<<CSS
    ul,
        li {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        a,
        img {
            display: block;
        }

        img {
            border: 0;
            width: 220px;
            height: 280px;
        }

        img:not([src]) {
            visibility: hidden;
        }

        #results1 {
            height: 564px;
            overflow: scroll;
            border: 1px dotted #f00;
        }
    
CSS;





    }

}
