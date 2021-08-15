<?php

/*
 *
 *
 * Created By: Shahzod Gulomqodirov
 *
 *
 */


namespace zetsoft\widgets\notifier;


use zetsoft\system\kernels\ZWidget;

class ZJspanelWidgetWebphone extends ZWidget
{
    public $config = [];
    public $_config = [
        'content' => '',
        'headt' => 'This Title',
        'id' => '',
        'height' => '500px',
        'width' => '60%',
        'my' => 'right-bottom',
        'at' => 'right-bottom',
        'autoposition' => 'down',
        'offsetX' => -40,
        'offsetY' => '',
        'shown' => false,
        
        'iconbar' => [
        ]
    ];


    public function asset()
    {
        $this->fileCss('https://cdn.jsdelivr.net/npm/jspanel4@4.10.1/dist/jspanel.css');
        $this->fileCss('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css');
        $this->fileJs('https://cdn.jsdelivr.net/npm/jspanel4@4.10.1/dist/jspanel.js');
        $this->fileJs('https://cdn.jsdelivr.net/npm/jspanel4@4.10.1/dist/extensions/modal/jspanel.modal.js');
        $this->fileJs('https://cdn.jsdelivr.net/npm/jspanel4@4.10.1/dist/extensions/tooltip/jspanel.tooltip.js');
        $this->fileJs('https://cdn.jsdelivr.net/npm/jspanel4@4.10.1/dist/extensions/hint/jspanel.hint.js');
        $this->fileJs('https://cdn.jsdelivr.net/npm/jspanel4@4.10.1/dist/extensions/layout/jspanel.layout.js');
        $this->fileJs('https://cdn.jsdelivr.net/npm/jspanel4@4.10.1/dist/extensions/contextmenu/jspanel.contextmenu.js');
        $this->fileJs('https://cdn.jsdelivr.net/npm/jspanel4@4.10.1/dist/extensions/dock/jspanel.dock.js');

    }

    public $layout = [];
    public $_layout = [


        'js' => <<<JS
        
/*
    METHODS

    .addControl({
            html: '<span class="fa fa-cog"></span>',
            name: 'settings',
            handler: function(panel, control){
                panel.content.innerHTML = 'You clicked the "settings" control';
            }
        })

        var tbar = '<span id="btn-bus"><i class="fa fa-bus"></i></span>'+
    '<span id="btn-train"><i class="fa fa-train"></i></span>'+
    '<span id="btn-car"><i class="fa fa-car"></i></span>';


     .addToolbar('header', tbar, function (panel) {
            var tb = this.headertoolbar;
            tb.querySelector('#btn-bus').addEventListener('click', function () {
                panel.content.innerHTML = 'you clicked the bus icon.';
            }, false);
            tb.querySelector('#btn-train').addEventListener('click', function () {
                panel.content.innerHTML = 'you clicked the train icon.';
            }, false);
            tb.querySelector('#btn-car').addEventListener('click', function () {
                panel.content.innerHTML = 'you clicked the car icon.';
            }, false);
            Array.prototype.slice.call(tb.querySelectorAll('span')).forEach(function (item) {
                item.style.cursor = 'pointer';
                item.style.margin = '3px 8px 1px 0';
            });
        });



            panel.close();
            panel.closeChildpanels();

           panel.contentRemove(function () {
            this.setTheme('darkgray');
        });


            panel.dragit('enable');

          panel.front(function () {
            this.setTheme('purple filledlight');
          });


         .maximize();
         .minimize();
        .normalize();

        panel.overlaps("#testcontainer", "paddingbox", event);

         panel.reposition('left-top 50 50');

         panel
            .resize({
                width:  window.innerWidth/2,
                height: 300
            })

        .resizeit();

        .setBorder('dashed orange');

        .setBorderRadius('0.5rem');

        .setControlStatus('minimize', 'disable');

        .setHeaderLogo('<i class="fa fa-spinner fa-spin"></i>'

        .create().setHeaderTitle('a new title ...');

        .setTheme({
        bgPanel: 'linear-gradient(120deg,#155799,#159957)',
        bgContent: 'transparent',
        colorHeader: '#fff',
        colorContent: '#fff',
        border: '4px solid #157B75'
    });

        .smallify();
        .unsmallify()
    
* */
/*

   options

    addCloseControl: 1,

    animateIn: 'jsPanelFadeIn',
    animateOut: 'jsPanelFadeOut'

    autoclose: 3000,
     autoclose: {
    time: '6s',
    background: 'linear-gradient(90deg, rgba(255,0,0,1) 0%, rgba(0,255,17,1) 100%)'
  }

    border: "thick dashed orange",
    borderRadius: '1rem',

    boxShadow: 2,                 // type: integer range: 0 - 5

    callback: function () {
    this.content.innerHTML = '<p>Added via option.callback.</p>';
  }

    closeOnEscape: true,

    config: hintConfig,     // type object

    container: '#testcontainer',    // type: string (selector), node object, jQuery object

    content: '<p>Appended with <i>Element.innerHTML</i></p>',        // type: string, element, function


     contentAjax: {
    url: '../docs/sample-content/sampleContent.html',   // url type: string, default: undefined
    done: function (panel) {
      panel.content.innerHTML = this.responseText;
    },
    evalscripttags: true
  },                                            //  type: string, object


    contentFetch: {
    resource: '../docs/sample-content/delayedContent.php',
    beforeSend: function() {
      this.headerlogo.innerHTML = "<span class='fa fa-spinner fa-spin' style='margin-left:8px'></span>"
    },
    fetchInit: {
      method: 'POST'
    },
    done: function (panel, response) {
      this.content.innerHTML = response;
      this.headerlogo.innerHTML = "<span class='fa fa-check' style='margin-left:8px'></span>";
      this.resize('auto 300').reposition();
    }
  }                                              // type: string, object


    contentOverflow: 'scroll',            // type: string

    contentSize: '600 300',            // type: object, string
    contentSize: {
    width: function() {
        return window.innerWidth/4
    },
    height: 'auto'
  }

     data: 'foobar',                // type: string, number, array, plain object

     dragit: {
        axis: 'x',
        cursor: 'move'
        //.....
  }                                  // type: object or boolean false (turns off dragit completely)


    footerToolbar: '<span style="flex:1 1 auto">Some text content</span>'      //type: string, array, node object or function

    header: false,        // type: boolean or string     string 'auto-show-hide'


    headerControls: {
    add: {
      html: '<span class="fal fa-undo"></span>',
      name: 'reset',
      handler: function(panel, control){
        panel.content.innerHTML = 'You clicked the "reset" control';
      }
    },
    minimize: 'remove',
    reset: 'enable'
  }                                   // type: object or string


    headerRemove: true

    headerTitle: 'just another title'           // type: string, function or element

     headerToolbar: '<span id="bus"><i class="fad fa-bus fa-fw"></i></span>'         // type: string, array, node object or function


     iconfont: 'material-icons',               // type: string or array

     id: 'mypanel-1',                         // type: string, function

     maximizedMargin: [61, 5, 5, 5]             // type: number, array

     onbeforeclose: function (panel, status, closedByUser) {
        console.log(panel, status, closedByUser);
     return confirm('Close panel?');
  }

    panelSize: '600 300',                          // type: object or string


    position: {
    my: 'right-top',
    at: 'right-top',
    of: 'body .main-content',
    offsetX: '-0.5rem',
    offsetY: '5px',
    autoposition 'down'
}                                                   // type: object, string or boolean false


    resizeit: {
    handles: 'e, se'
  }                                               // type: object or boolean false (turns off resizeit completely)


    theme: 'primary',                           // type: string object

    */
    
    var tbar = '{tbar}';
    jsPanel.create({
        id: '{id}',
        contentSize: ({
            width:  '{width}',
            height: '{height}', 
        }),
        
        /*panelSize: {
        width: () => window.innerWidth * 0.3,
        height: '30vh'
        },*/
        
        position: {
                my: '{my}', //right-bottom
                at: '{at}', //right-bottom
                autoposition: '{autoposition}', //down
                offsetX: {offsetX}, //-40
                offsetY: {offsetY},    //0
               
        },
        headerTitle: '{headt}',
        content: `{content}`,
        headerControls: {
            close: 'remove'
        },
        footerToolbar: '<i class="fa fa-clock"></i><span class="clock"></span>',
        callback: function (panel) {
        }
    })
         
       
        
        .addControl({
            html: '<span class="fa fa-close"></span>',
            name: 'close',
            handler: function(panel, control){
              
               if (window.confirm("Хотите закрыть ?")) {
                
                    $('.jsPanel').hide();
                    
                    $.ajax({
                         type: "GET",
                         url: '/core/agent/setOnline.aspx',
                         data:{
                             agentId: agentId,
                         },
                     });
                     
                     //location.reload()
                    
               }
            },
            
            position: 7,
            afterInsert: function(control){
                // do with the control whatever is needed ...
            }
            
        })
        
        
         
        .setBorderRadius('0.7rem')
        /*.setHeaderLogo('<i class="fa fa-spinner fa-spin"></i>', function() {
            this.headerlogo.querySelector('.fa-spinner').style.marginLeft = '8px';
        })*/
        .setTheme({
            bgPanel: 'linear-gradient(120deg,#1BE7FF,#8100BA)',
            colorHeader: '#ffffff',
            colorContent: 'black',
            border: '4px solid #157B75'
        })
        
        {panel}
        //$('.jsPanel').hide();
         
         

JS,

        'tb' => <<<HTML
     <span id="btn-{icon}"><i class="fa {icon}"></i></span>
HTML,

        'func' => /** @lang JavaScript */
            <<<JS
    
    tb.querySelector('#btn-{icon}').addEventListener('click', function () {
                    {func}
    },false);

JS,


        /*'control' => <<<JS

            .addControl({
              html: '<span class="fa {icon}"></span>',
              name: 'clear',
              handler: function(panel, control){
                {func};
              }
        })
JS,*/


    ];

    public function init()
    {
        parent::init();

        if ($this->_config['begin'])
            ob_start();
    }


    public function codes()
    {
        $tbar = '';
        $func = '';
        $contrl = '';
        foreach ($this->_config['iconbar'] as $value) {

            $tbar .= strtr($this->_layout['tb'], [
                '{icon}' => $value['icon']
            ]);
            $func .= strtr($this->_layout['func'], [
                '{icon}' => $value['icon'],
                '{func}' => $value['func'],
            ]);

        }

        foreach ($this->_config['iconbar'] as $value) {
            $contrl .= strtr($this->_layout['control'], [
                '{icon}' => $value['icon'],
                '{func}' => $value['func'],
            ]);
        }


        $this->js .= strtr($this->_layout['js'], [
            '{content}' => $this->_config['begin'] ? ob_get_clean() : $this->_config['content'],
            '{headt}' => $this->_config['headt'],
            '{tbar}' => $tbar,
            '{func}' => $func,
            '{id}' => $this->_config['id'],
            '{width}' => $this->_config['width'],
            '{height}' => $this->_config['height'],

            '{my}' => $this->_config['my'],
            '{at}' => $this->_config['at'],
            '{autoposition}' => $this->_config['autoposition'],
            '{offsetX}' => $this->_config['offsetX'],
            '{offsetY}' => $this->_config['offsetY'],
            '{panel}' => $this->_config['shown'] ? "":"$('.jsPanel').hide();",

        ]);

    }
}
