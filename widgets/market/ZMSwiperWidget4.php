<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

namespace zetsoft\widgets\market;


use zetsoft\models\core\CoreAdvancedItem;
use zetsoft\models\shop\ShopCategory;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\navigat\ZButtonWidget;


class ZMSwiperWidget4 extends ZWidget
{
    public $config = [];
    public $_config = [
        'slideWidget' => false,
        'slidesPerView' => 3,
        'href' => 3,
        'spaceBetween' => 1,
        'slidesMediaPerView640' => 2,
        'slidesMediaPerView500' => 2,
        'slidesMediaPerView1024' => 1,
        'slidesMediaPerView325' => 1,
        'centeredSlides' => false,
        'pagination.el' => '.swiper-pagination',
        'pagination.clickable' => true,
        'nextEl' => '.swiper-button-next',
        'prevEl' => '.swiper-button-prev',
        'mousewheel' => true,
        'keyboard' => true,
        'loop' => true,
        'effect' => ZMSwiperWidget::effect['fade'],
        'grabCursor' => true,
        'rotate' => 50,
        'stretch' => 0,
        'depth' => 100,
        'modifier' => 1,
        'slideShadows' => true,
        'class'=> '',
        'height'=>'50vh',
        'width'=> '100%',
        'position'=>'',
        'd-none'=>'',
         'swip-nor'=>'',
         'height_class'=>'',

    ];

    public const effect = [
        'fade' => 'fade',
        'cube' => 'cube',
        'coverflow' => 'coverflow'
    ];


    public $layout = [];
    public $_layout = [
        'main' => <<<HTML
   <div class="swiper-container {height_class}" id="{id}">
        <div class="swiper-wrapper {height_class}">
                    {slide} 
        </div>
    <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    <!-- Add Navigation -->
        <div class="swiper-button-prev text-success {d-none}"></div>
        <div class="swiper-button-next text-success {d-none}"></div>
</div>

HTML,

        'slide' => <<<HTML
      <div class="swiper-slide {swip-nor}">{item}</div>
HTML,

        'image' => <<<HTML
        <div class="swiper-slide">
            <div class="{class}">
                <a href="{href}">
                    <img src="{src}" class="img-fluid" alt="" width="100%">
                </a>
            </div>
        </div>
HTML,

        'jscode' => <<<JS
        swiper = new Swiper('#{id}', {
            slidesPerView: {slidesPerView},
            spaceBetween: {spaceBetween},
            centeredSlides: {centeredSlides},
            mousewheel: {mousewheel},
            keyboard: {keyboard},
            loop: {loop},
            effect: '{fade}',
            grabCursor: {grabCursor},
            coverflowEffect: {
                rotate: {rotate},
                stretch: {stretch},
                depth: {depth},
                modifier: {modifier},
                slideShadows : {slideShadows},
            },
            pagination: {
                el: "{el}",
                clickable: {clickable},
            },
            navigation: {
                nextEl: '{nextEl}',
                prevEl: '{prevEl}',
            },
            breakpoints: {
                325: {
                  slidesPerView: {slidesMediaPerView325},
                },
                500: {
                  slidesPerView: {slidesMediaPerView500},
                },
                640: {
                  slidesPerView: {slidesMediaPerView640},
                },
                1024: {
                  slidesPerView: {slidesMediaPerView1024},  
                }
            },
            
            
       });
JS,
        'css' => <<<CSS
         .{class} {
            width: {width};
            height: {height};
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            position:{position};
            display: flex;
            justify-content:center;
            align-items:center;
            
         }
         .swiper-container {
            z-index: 0!important;
         }
         
         .swiper-button-next, .swiper-container-rtl .swiper-button-prev{
             width: 2.5em;
             border-radius: 5px;
             color: wheat;
             color: white !important;
             opacity: 0.4;
             background-color: white;
         }
         .swiper-button-prev, .swiper-container-rtl .swiper-button-next{
            width: 2.5em;
            border-radius: 5px;
            color: wheat;
            color: white !important;
            opacity: 0.4;
            background-color: white;
         }
         .swiper-button-next:after, .swiper-button-prev:after{
            font-size: initial;
            color: black;
         }
         
         .swiper-button-next:hover{
            width: 2.6em;
            opacity: 0.6;
         }
         .swiper-button-prev:hover{
            width: 2.6em;
            opacity: 0.6;
         }
         
         .swiper-button-next:after:hover{
            font-size: 2em;
         }
        
             
CSS,
       

    ];

    public function asset()
    {
        $this->fileCss("https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.3.8/css/swiper.min.css");
        $this->fileJs("https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.3.8/js/swiper.min.js");
    }

    public function codes()
    {
        $slide_code = '';
        foreach ($this->data as $value) {
            if ($this->_config['slideWidget'])
                $slide_code .= strtr($this->_layout['slide'], [
                    '{item}' => $value ,
                    '{swip-nor}' => $this->_config['swip-nor'],
                ]);
            else
                $slide_code .= strtr($this->_layout['image'], [
                    '{src}' => $value,
                    '{class}' => $this->_config['class'],
                    '{href}' => $this->_config['href'],
                ]);
        }
       

        $this->htm = strtr($this->_layout['main'], [
            '{id}' => $this->id,
            '{slide}' => $slide_code,
            '{d-none}'=> $this->_config['d-none'],
            '{height_class}'=>$this->_config['height_class']
        ]);

        $this->js = strtr($this->_layout['jscode'], [
            '{slidesPerView}' => $this->_config['slidesPerView'],
            '{slidesMediaPerView640}' => $this->_config['slidesMediaPerView640'],
            '{slidesMediaPerView500}' => $this->_config['slidesMediaPerView500'],
            '{slidesMediaPerView1024}' => $this->_config['slidesMediaPerView1024'],
            '{slidesMediaPerView325}' => $this->_config['slidesMediaPerView325'],
            '{spaceBetween}' => $this->_config['spaceBetween'],
            '{centeredSlides}' => $this->_config['centeredSlides'] ? 'true' : 'false',
            '{el}' => $this->_config['pagination.el'],
            '{clickable}' => $this->_config['pagination.clickable'],
            '{nextEl}' => $this->_config['nextEl'],
            '{prevEl}' => $this->_config['prevEl'],
            '{id}' => $this->id,
            '{mousewheel}' => $this->_config['mousewheel'] ? 'true' : 'false',
            '{keyboard}' => $this->_config['keyboard'] ? 'true' : 'false',
            '{loop}' => $this->_config['loop'] ? 'true' : 'false',
            '{effect}' => $this->_config['effect'],
            '{grabCursor}' => $this->_config['grabCursor'] ? 'true' : 'false',
            '{rotate}' => $this->_config['rotate'],
            '{stretch}' => $this->_config['stretch'],
            '{depth}' => $this->_config['depth'],
            '{modifier}' => $this->_config['modifier'],
            '{slideShadows}' => $this->_config['slideShadows'] ? 'true' : 'false',
          

        ]);
        $this ->css = strtr($this ->_layout['css'], [
                
                '{height}'=> $this->_config['height'],
                '{width}'=> $this->_config['width'],
                '{class}' => $this->_config['class'],
                '{position}'=>$this->_config['position'],

            ]);
    }
}

