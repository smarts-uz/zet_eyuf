<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

namespace zetsoft\widgets\menus;


use PharIo\Manifest\Url;
use PhpOffice\PhpWord\Reader\HTML;
use zetsoft\dbitem\wdg\MenuItem;
use zetsoft\service\menu\ALL;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\helpers\ZStringHelper;
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\kernels\ZWidget;

/*use zetsoft\system\helpers\ZJsonHelper;*/


class ZMmenuWidgetX extends ZWidget
{

    public static $grapes = [
        'enable' => true,
        'icon' => '',
        'image' => '/render/inputes/ZKDatepickerWidget/image/icon.png',
        'height' => '400px',
        'width' => '500px',
        'name' => Azl . 'Menu',
        'title' => Azl . 'Меню',
    ];

    public $config = [];
    public $_config = [

        'type' => ZMmenuWidgetX::type['Menu'],

        'nameOn' => [],
        'isName' => true,
        'isAll' => false,
        'isApp' => true,
        'menu_ids' => [],
        'theme' => ZMmenuWidgetX::theme['white'],
        'pagedim' => ZMmenuWidgetX::pagedim['pagedim-black'],
        'dividers.add' => 0,
        'dropdowns.drop' => 0,
        'counters.add' => true,
        'content' => '',
        'navbarTitle' => '',
        'home' => true,
        'counters.count' => true,
        'pageScroll.scroll' => true,
        'content.img.width' => 230,
        'menu-effect-slide' => false,
        //'grapes' => true,

        'iconbar.use' => false,
        'iconbar.top' => [],
        'iconbar.bottom' => [
        ],
        'all.border' => ZMmenuWidgetX::border['border-full'],
        'position' => ZMmenuWidgetX::position['position-back'],
        'shadows' => ZMmenuWidgetX::shadows['shadow-page'],
        'fx-slides' => ZMmenuWidgetX::fx_slide['fx-panels-slide-0'],

        'tileview' => false,
        'listview-justify' => false,
        'multiline' => false,
        'fullscreen' => false,


        'p-left' => 'left',
        'p-right' => 'right',
        'p-top' => 'top',
        'p-bottom' => 'bottom',

        /*
         * Intercooler
         * */
        'cooler' => false,
        'expandedUse' => false,

    ];

    public const type = [
        'Category' => 'Category',
        'Menu' => 'Menu',

    ];

    public const theme = [
        'white' => 'white',
        'dark' => 'dark',
        'light' => 'light',
        'black' => 'black',
        'eyuf' => 'eyuf',
        'market' => 'market',
        'umid' => 'umid',
        'umidX' => 'umidX',
        'newTheme' => 'newTheme'
    ];

    public const border = [
        'border-full' => 'border-full',
        'border-none' => 'border-none',
    ];

    public const pagedim = [
        'pagedim-black' => 'pagedim-black',
        'pagedim-white' => 'pagedim-white',
        'pagedim' => 'pagedim'
    ];

    public const position = [
        'position-back' => 'position-back',
        'position-top' => 'position-top',
        'position-right' => 'position-right',
        'position-front' => 'position-front',
        'position-bottom' => 'position-bottom'
    ];

    public const shadows = [
        'shadow-page' => 'shadow-page',
        'shadow-panels' => 'shadow-panels',
        'shadow-menu' => 'shadow-menu'
    ];

    public const fx_slide = [
        'fx-panels-slide-100' => 'fx-panels-slide-100',
        'fx-panels-slide-0' => 'fx-panels-slide-0',
        'fx-panels-none' => 'fx-panels-none'
    ];

    public $event = [];
    public $_event = [
        'item:click' => 'function(){console.log("ZALLMmenuWidget | item:click");}',
        'openPanel:start' => 'function (panel) { console.log("ZALLMmenuWidget | openPanel:start: " + panel.id) }',
        'openPanel:finish' => 'function (panel) { console.log("ZALLMmenuWidget | openPanel:finish: " + panel.id) }',
        'closeAllPanels:before' => 'function (panel) { console.log("ZALLMmenuWidget | closeAllPanels:before: " + panel.id) }',
        'closeAllPanels:after' => 'function (panel) { console.log("ZALLMmenuWidget | closeAllPanels:after: " + panel.id) }',
        'closePanel:before' => 'function (panel) { console.log("ZALLMmenuWidget | closePanel:before: " + panel.id) }',
        'closePanel:after' => 'function (panel) { console.log("ZALLMmenuWidget | closePanel:after: " + panel.id) }',
        'openPanel:before' => 'function (panel) { console.log("ZALLMmenuWidget | openPanel:before: " + panel.id) }',
        'openPanel:after' => 'function (panel) { console.log("ZALLMmenuWidget | openPanel:after: " + panel.id) }',
        'setSelected:before' => 'function (panel) { console.log("ZALLMmenuWidget | setSelected:before: " + panel.id) }',
        'setSelected:after' => 'function (panel) { console.log("ZALLMmenuWidget | setSelected:after: " + panel.id) }',
    ];

    public $layout = [];
    public $_layout = [

        'main' => <<<HTML
<div id="main-div" class="d-none">
     <nav id="menu" style="">
        <ul class="listview-icons">
            {home}
            {content}
        </ul>
     </nav>
</div>
HTML,

        'homeItem' => <<<HTML
        <li>       
            <a 
                href="{url}{args}" 
                target="_blank"
            >
                <i class="fal fa-home"></i>
                {home}
            </a>
        </li>
HTML,

        'linkTemplate' => <<<HTML
                <a href="{url}{args}" data-item="{data-item}" target="_blank" class="mmenu-item {class}">{icon}&nbsp;&nbsp; {label}</a>
HTML,

        'linkTemplateBlank' => <<<HTML
                  <a href="{url}{args}" class="{class}" target="_blank">{icon}&nbsp;&nbsp; {label}</a>
HTML,

        'linkTemplateItem' => <<<HTML
                  <a {data-id} class="mmenu-item {class}" target="_blank" data-item="{data-item}" href="{url}{args}">{icon}&nbsp;&nbsp; {label} </a>
HTML,

        'subMenuTemplate' => <<<HTML
       <ul class="treeview-menu">{items}</ul> 
HTML,

        'defaultIcon' => <<<HTML
                 <i class="{icon} mr-2"></i>
HTML,

        'cooler' => <<<HTML
                <a
                class="{class}"
                ic-post-to="{url}" 
                ic-target="#content"
                ic-push-url="true"
                >{icon}&nbsp;&nbsp; {label}</a>
HTML,

        'css' => <<<CSS

            .home-mmenu{
                margin-right: 12px !important;   
            }
            /* start|FozilZayniddinov|10/16/2020 */
            .mm-navbar__title {
                color: #fff !important;
                display: none;
            }
            /* end|FozilZayniddinov|10/16/2020 */
            
            /* start|SherzodMangliyev|10/17/2020*/
            /*.mm-btn_prev:before{*/
            /*    border-color: #ffffff;*/
            /*}*/
            /* end|SherzodMAngliyev|10/17/2020*/
            
            /* start|AzimjonToirov|2020:10:16 */
            .mm-navbar__title:hover {
                background: rgba(255,255,255,.4);
            }
            /* end|AzimjonToirov|2020:10:16 */

CSS,

    ];


    public function asset()
    {
        $this->fileCss('/render/asrorz/css/mmenuX.css');
        $this->fileCss('https://cdn.jsdelivr.net/npm/mhead-js@2.0.0/dist/mhead.css');
        $this->fileCss('https://cdn.jsdelivr.net/npm/mburger-css@1.3.3/dist/mburger.css');
        $this->fileCss('/render/menus/ZMMmenuWidget/assets/mmenu/fix-modal.css');
        $this->fileCss('/render/menus/ZMMmenuWidget/assets/mmenu/mmenuextension.css');

        $theme = $this->_config['theme'];
        $this->fileCss("/render/menus/ZMMmenuWidget/assets/mmenu-theme/$theme.css");

        $this->fileJs('https://cdn.jsdelivr.net/npm/mmenu-js@8.5.13/dist/mmenu.polyfills.js');
        $this->fileJs('/render/asrorz/js/mmenu.js');
        $this->fileJs('https://cdn.jsdelivr.net/npm/mhead-js@2.0.0/dist/mhead.js');
        $this->fileJs('https://cdn.jsdelivr.net/npm/js-cookie@2.2.1/src/js.cookie.js');

    }


    /**
     * Recursively renders the menu items (without the container tag).
     * @param MenuItem[] $items
     * @return string the rendering result
     */
    public function all($items)
    {

        $lines = [];


        if (empty($items))
            return null;

        foreach ($items as $item) {

            if ($item->visible === false)
                continue;

            $menu = $this->item($item);

            if (!empty($item->items)) {
                $menu .= strtr($this->_layout['subMenuTemplate'], [
                    '{items}' => $this->all($item->items),
                ]);
            }

            $lines[] = ZHTML::tag('li', $menu, []);
        }

        return implode("\n", $lines);
    }

    public function item($item)
    {

        $data_id = uniqid('', true);

        if (!empty($item->items))
            $linkTemplate = $this->_layout['linkTemplateItem'];
        else {
            if ($item->target === '_blank')
                $linkTemplate = $this->_layout['linkTemplateBlank'];
            else {
                if ($this->_config['cooler'])
                    $linkTemplate = $this->_layout['cooler'];
                else
                    $linkTemplate = $this->_layout['linkTemplate'];
            }
        }
        if ($item->icon === 'empty' || empty($item->icon))
            $item->icon = Az::$app->utility->mains->icon(true);

        $icon = strtr($this->_layout['defaultIcon'], [
            '{icon}' => $item->icon
        ]);

        $class = str_replace(',', ' ', $item->class);

        $replace = [
            '{data-id}' => 'data-id="' . $data_id . '"',
            '{class}' => $class,
            '{data-item}' => $item->dataItem,
            '{url}' => (!empty($item->url)) ? $item->url : '#',
            '{args}' => (!empty($item->args)) ? "?$item->args" : '',
            '{label}' => $item->title,
            '{icon}' => $icon,
            '{target}' => $item->target
        ];

        return strtr($linkTemplate, $replace);

    }

    public function codes()
    {

        if (empty($this->_config['navbarTitle']))
            $this->_config['navbarTitle'] = Az::l('Главное меню');


        switch ($this->_config['type']) {
            case  'Category':
                $this->data = Az::$app->market->category->generateDBMenuItems();
                break;

            default:
                $this->data = Az::$app->cores->menus->create();
                break;
        }


        

        if ($this->_config['isAll']) {
            $this->data = ZArrayHelper::merge(
                $this->data,
                (new ALL())->run()
            );
        }

        if (empty($this->_config['content']))
            $this->_config['content'] = "<div class=\"zlogo\"><img src=\"/render/menus/ZMMmenuWidget/img/logo.svg\" width=\"{$this->_config['content.img.width']}\"></div>";


        $role = $this->userRole();
        $url = $this->urlGetMain();

        $url = ZUrl::to([$url]);


        $this->js = <<<JS


        $(document).ready(function() {
            $('#main-div').removeClass('d-none')
            var options = {
                "extensions": {
                    all: [
                        "{all.theme}", //  theme-dark | theme-black | theme-light  / theme-eyuf
                        "{pagedim}", // pagedim-black | pagedim-white | pagedim
                        
                        /*
                        * https://mmenujs.com/docs/extensions/border-style.html
                        */
                       
                        "{all.border}", // border-none | border-full

                        "{position}", // position-back / "position-right"  | position-top | position-bottom | position-front 
                        "{shadows}",  // shadow-page | shadow-menu | shadow-panels

                        /* TO USE EFFECTS ENABLE "menu-effect-slide" (P.S the same with  the 'fx-menu-slide' */
                        "{menu-effect-slide}",
                        "{fx-slides}",// "fx-panels-none",// fx-panels-slide-0 | fx-panels-slide-100 / fx-menu-slide,
                        
                        //  "{istileview}", / tileview : true
                        // "{fullscreen}", / fullscreen
                       
                        //  "{multiline}" // "multiline",
                        //  "{islistview-justify}" //   "listview-justify" : true,


                    ],
                },
                hooks: {
                    "openPanel:start": {openPanel:start},
                    "openPanel:finish": (panel) => {
                        console.log("Finished opening panel: " + panel.id);
                    },
                    "closeAllPanels:before": (panel) => {
                        console.log("Before closing all panel: " + panel.id);
                    },
                    "closeAllPanels:after": (panel) => {
                        console.log("After closing all panel: " + panel.id);
                    },
                    "closePanel:before": (panel) => {
                        console.log("Before closing panel: " + panel.id);
                    },
                    "closePanel:after": (panel) => {
                        console.log("After closing panel: " + panel.id);
                    },
                    "openPanel:before": (panel) => {
                        console.log("Before opening panel xx: " + panel.id);
                    },
  
                    "openPanel:after": (panel) => {
                        console.log("After opening panel: " + panel.id);
                    },
                    "setSelected:before": (panel) => {
                        console.log("Before set selected: " + panel.id);
                    },
                    "setSelected:after": (panel) => {
                        console.log("After set selected: " + panel.id);
                    },

                },
                /*
                * https://mmenujs.com/docs/addons/dividers.html
                */
                "dividers": {
                    add: {dividers.add},
                    addTo: "panels"
                },
                /*
                * https://mmenujs.com/docs/addons/drag.html
                */
                drag: {
                    open: false,
                    node: null
                },
                /*"sectionIndexer": false,*/
                /*
                * https://mmenujs.com/docs/addons/dropdown.html
                */
                
                "dropdown": {
                    drop: {dropdowns.drop},
                    event: "click", // hover | click hover | hover click      e
                    fitViewport: true,
                    position: {
                        of: null,
                        x: "left",
                        y: "bottom"  // bottom
                    },
                    tip: false,
                    offset: {
                        button: {
                            x: 100,
                            y: 100
                        }
                    },
                    viewport: {
                        x: 20,
                        y: 20
                    },

                },
                /*
                * https://mmenujs.com/docs/addons/fixed-elements.html
                */
                fixedElements: {
                    insertMethod: "prepend", // "prepend"
                    insertSelector: "div"
                },


                /*
                * https://mmenujs.com/docs/addons/iconbar.html
                */
               /* iconbar: {
                    use: {iconbar.use},
                    position: "{p-left}", // right , left
                    top: {iconbar.top},
                    bottom: {iconbar.bottom},
                    type: null // "tabs"
                },*/

                rag: {
                    open: true
                },
                // https://mmenujs.com/docs/addons/back-button.html
                backButton: {
                    close: true    
                },
                // https://mmenujs.com/docs/addons/columns.html
                columns: {
                    add: false,
                    visible: {
                        max: 3,
                        min: 1
                    }
                },
                /*
                * https://mmenujs.com/docs/addons/auto-height.html
                */
                autoHeight: {
                    height: "default" // auto | highest
                },

                pageScroll: {
                    scroll: {pageScroll.scroll},
                    update: false
                },
                
                /*
                * https://mmenujs.com/docs/addons/counters.html
                */

                counters: {
                    add: {counters.add},
                    addTo: "panels",
                    count: {counters.count}
                },
                /*
                * https://mmenujs.com/docs/addons/keyboard-navigation.html
                */
                keyboardNavigation: {
                    enable: false,
                    enhance: false
                },

                /*
                * https://mmenujs.com/docs/addons/icon-panels.html
                */
                iconPanels: {
                    add:true,
                    hideDivider: false,
                    hideNavbar: true,
                    visible: 3, // max 3
                    blockPanel: true,
                },

                navbar: {
                    title: "{navbar.title}",
                    add: false,
                    sticky: false,
                    titleLink: "parent", // anchor | none
                },

                onClick: {
                    close: true,
                    preventDefault: null, // true | false
                    setSelected: true,
                },
                slidingSubmenus: true,
                wrappers: [],
                
                /*
                * https://mmenujs.com/docs/addons/navbars.html
                */
                navbars: [
                    {
                        content: `{content}`,
                        position: "{p-top}",
                    },
                    {
                        use: true,
                        content: [
                            'searchfield', // breadcrumbs | close | next | prev | searchfield | title 
                        ],
                        position: "{p-top}", // bottom
                        type: null // tabs
                        // {...} objects
                    },
                                        
                ],
                /*
                * https://mmenujs.com/docs/addons/lazy-submenus.html
                */
                lazySubmenus: {
                    load: false
                },

                /**
                 *
                 * https://mmenujs.com/docs/addons/searchfield.html
                 */
                searchfield: {
                    add: true,
                    addTo: "panels",// panel
                    cansel: true,
                    noResults: "No results found.", //false
                    placeholder: "Найти", // something
                    search: true,
                    showSubPanels: true,
                    showTextItems: true,
                    panel: {
                        add: false,
                        dividers: true,
                        fx: "none",
                        id: null,
                        splash: null,
                        title: "search",
                    },
                },
                /*
                * https://mmenujs.com/docs/addons/set-selected.html
                */
                setSelected: {
                    current: true,
                    hover: !0,
                    parent: !0
                },
                /*
                * https://mmenujs.com/docs/addons/sidebar.html
                */
               sidebar: {
                    collapsed: {
                        use: true, // true , false , usable meausure (example: 768 ) 
                        blockMenu: true,  // false
                        hideNavbar: true, // false
                        hideDivider: false // true
                    },

                    expanded: {
                        use: {expandedUse}, // false, //true  usable meausure (example: 1440 )
                        initial: "remember" // open
                    }
                },

                /*
                * https://mmenujs.com/docs/core/options.html
                */
            };

            var configs = {
                offCanvas: {
                    pageNodetype: "section",
                    pageSelector: "#page"
                },
                /**
                 * https://mmenujs.com/docs/addons/searchfield.html
                 */
                "searchfield": {
                    "clear": true,
                      form: null, // false
                     input: null,
                     submit: true  
                },
                autoHeight: {
                    // auto height options
                },
                navbars: {
                    breadcrumbs: {
                        separator: "/",
                        removeFirst: false
                    }
                },
                /*height: {
                    // max: 40     iconPanels
                }, */
                width: {
                    // max: 40
                },
                /*
                * https://mmenujs.com/docs/addons/page-scroll.html
                */
                pageScroll: {
                    scrollOffset: 0,
                    updateOffset: 50
                }

            };

            var menu = new Mmenu("#menu", options, configs);
            var api = menu.API;
            var t = $("#hamburger").children(".mburger");
            api.bind("close:finish", function () {
                setTimeout(function () {
                    t.attr("href", "#menu");
                }, 100)
            });
               api.bind("open:finish", function () {
                   console.log()
                    setTimeout(function () {
                        t.attr("href", "#page");
                    }, 100)
                });


            $(function () {
                $('.mm-listitem').each(function () {
                    var firstchild = $(this).children('.mm-listitem__text');
                    var secondchild = $(this).children('.mm-btn');
                    var myhref = secondchild.attr("href");

                    firstchild.attr("href", myhref);
                    firstchild.addClass("mm-listitem__btn");

                });
            });
            
            $(document).on('click', '.mmenu-item', {item:click});
});

JS;

        $this->js = strtr($this->js, [
            '{dividers.add}' => $this->jscode($this->_config['dividers.add']),
            '{dropdowns.drop}' => $this->jscode($this->_config['dropdowns.drop']),
            '{counters.add}' => $this->jscode($this->_config['counters.add']),
            '{counters.count}' => $this->jscode($this->_config['counters.count']),
            '{pageScroll.scroll}' => $this->jscode($this->_config['pageScroll.scroll']),
            '{navbar.title}' => $this->jscode($this->_config['navbarTitle']),
            '{content.img.width}' => $this->jscode($this->_config['content.img.width']),
            '{content}' => $this->jscode($this->_config['content']),
            '{all.theme}' => $this->jscode($this->_config['theme']),
            '{pagedim}' => $this->jscode($this->_config['pagedim']),

            '{iconbar.use}' => $this->jscode($this->_config['iconbar.use']),
            '{iconbar.top}' => $this->jscode($this->_config['iconbar.top']),
            '{iconbar.bottom}' => $this->jscode($this->_config['iconbar.bottom']),

            '{all.border}' => $this->jscode($this->_config['all.border']),
            '{position}' => $this->jscode($this->_config['position']),
            '{shadows}' => $this->jscode($this->_config['shadows']),
            '{fx-slides}' => $this->jscode($this->_config['fx-slides']),

            '{tileview}' => ($this->_config['tileview']) ? ($this->jscode('tileview')) : '',
            '{menu-effect-slide}' => ($this->_config['menu-effect-slide']) ? ($this->jscode('fx-menu-slide')) : '',
            '{listview-justify}' => ($this->_config['listview-justify']) ? ($this->jscode('listview-justify')) : '',
            '{multiline}' => ($this->_config['multiline']) ? ($this->jscode('multiline')) : '',
            '{fullscreen}' => ($this->_config['fullscreen']) ? ($this->jscode('fullscreen')) : '',

            '{p-right}' => $this->jscode($this->_config['p-right']),
            '{p-left}' => $this->jscode($this->_config['p-left']),
            '{p-top}' => $this->jscode($this->_config['p-top']),
            '{p-bottom}' => $this->jscode($this->_config['p-bottom']),
            '{expandedUse}' => $this->jscode($this->_config['expandedUse']) ? 'true' : 'false',

            /**
             *
             * Events
             */
            '{openPanel:start}' => $this->eventCode('openPanel:start'),
            '{item:click}' => $this->eventCode('item:click'),


        ]);

        $content = '';
        /** @var array $item */
        if (!empty($this->data))
            $content .= $this->all($this->data);


        $home = Az::l('Главная страница');

        $homeItem = strtr($this->_layout['homeItem'], [
            '{url}' => $this->urlRole(),
            '{home}' => $home,
            '{args}' => (!empty($item->args)) ? "?$item->args" : '',
        ]);

        $this->htm = strtr($this->_layout['main'], [
            '{home}' => $this->_config['home'] ? $homeItem : '',
            '{content}' => $content,
        ]);

        $this->css = strtr($this->_layout['css'], [

        ]);

    }
}

