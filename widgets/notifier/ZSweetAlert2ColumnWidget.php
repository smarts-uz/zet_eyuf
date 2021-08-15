<?php

namespace zetsoft\widgets\notifier;

use zetsoft\system\Az;
use zetsoft\system\kernels\ZWidget;

/**
 * Refactored: AzimjonToirov
 * https://sweetalert2.github.io/#usage
 * https://github.com/Dominus77/yii2-sweetalert2-widget
 *
 *
 * Alert widget renders a message from session flash or custom messages.
 * @see https://sweetalert2.github.io/
 * @package dominus77\sweetalert2
 */
class ZSweetAlert2ColumnWidget extends ZWidget
{

    public $config = [];
    public $_config = [
        'button' => '',


        'functionName' => 'somefuncName',
        'title' => '<strong>Title</strong>',
        'text' => '',
        'html' => '',

        'footer' => '<strong>some text</strong>',
        'width' => 600,
        'padding' => '10px',
        'scrollbarPadding' => 'undifiend',
        'icon' => self::icon['warning'],
        'iconHtml' => '',
        'toast' => false, //apperance of alert
        'target' => 'body',
        'preConfirm' => 'function (){}',
        'background' => '#fff',
        'inputValue' => '',

        /*
         * Iframe Settings
         * */
        'url' => '/eyuf/cores/main/index.aspx',

        'iframeWidth' => '100%',
        'iframeHeight' => '',
        'scrolling' => 'yes',
        /*
         * Close Button
         * */
        'buttonsStyling' => true,
        'showCloseButton' => true,
        /*
         * Cancel Button
         * */
        'showCancelButton' => true,
        'cancelButtonColor' => '',
        'cancelButtonText' => 'Cancel',
        /*
         * Confirm Button
         * */
        'showConfirmButton' => true,
        'confirmButtonColor' => '#3085d6',
        'confirmButtonText' => 'Ok',
        /*
        * Image Settings
        * */
        'imageWidth' => '',
        'imageHeight' => '',
        'imageAlt' => '',
        /*
        * Timer Settings
        * */
        'timer' => '',  //1500 ms
        /*
        * Input Settings
        * */
        'input' => self::input['text'],  //input types select, email and etc.
        'inputPlaceholder' => '',
        'inputOptions' => '{}',
        'inputAttributes' => '{}',

        'grow' => self::grow['false'],  //appereance of alert: column, row
        'position' => self::position['center'],


    ];

    /*
     * Constants
     * */

    public const icon = [
        'success' => 'success',
        'error' => 'error',
        'warning' => 'warning',
        'info' => 'info',
        'question' => 'question',
    ];
    public const grow = [
        'row' => 'row',
        'column' => 'column',
        'fullscreen' => 'fullscreen',
        'false' => 'false',
    ];
    public const input = [
        'undefined' => 'undefined',
        'text' => 'text',
        'email' => 'email',
        'password' => 'password',
        'number' => 'number',
        'tel' => 'tel',
        'range' => 'range',
        'textarea' => 'textarea',
        'select' => 'select',
        'radio' => 'radio',
        'checkbox' => 'checkbox',
        'file' => 'file',
    ];
    public const position = [
        'top' => 'top',
        'top-start' => 'top-start',
        'top-end' => 'top-end',
        'center' => 'center',
        'center-start' => 'center-start',
        'center-end' => 'center-end',
        'bottom' => 'bottom',
        'bottom-start' => 'bottom-start',
        'bottom-end' => 'bottom-end',
    ];

    public $layout = [];
    public $_layout = [

        'html' => <<<JS

    $(document).on('click', '#{id}', function() {
        {functionName}{id}();
    })


       
function {functionName}{id}(title = null, text = null,  icon = null){
    Swal.fire({
        title: '{title}',
        text: '{text}',
        html: `{html}`,
        footer: `{footer}`,
        width: {width},
        heightAuto: true,
        padding: '{padding}',
        scrollbarPadding: '{scrollbarPadding}',
        /*
        * Icon
        * */
        icon: '{icon}',
        iconHtml: '{iconHtml}',
        toast: {toast},
        animation: true,
        showClass: {
          popup: 'swal2-show',
          backdrop: 'swal2-backdrop-show',
          icon: 'swal2-icon-show'
        },
        hideClass: {
          popup: 'swal2-hide',
          backdrop: 'swal2-backdrop-hide',
          icon: 'swal2-icon-hide'
        },
        customClass: {
            container: 'container-class',
            popup: 'popup-class',
            header: 'header-class',
            title: 'title-class',
            closeButton: 'close-button-class',
            icon: 'icon-class',
            image: 'image-class',
            content: 'content-class',
            input: 'input-class',
            actions: 'actions-class',
            confirmButton: 'confirm-button-class',
            cancelButton: 'cancel-button-class',
            footer: 'footer-class'
        },
        target: '{target}',
        backdrop: true,
        allowOutsideClick: true,
        allowEscapeKey: true,
        allowEnterKey: true,
        stopKeydownPropagation: true,
        keydownListenerCapture: true,
        preConfirm: {preConfirm},
        background: '{background}',
        /*
        * Close Button
        * */
        buttonsStyling: {buttonsStyling},
        reverseButtons: false,
        closeButtonAriaLabel: '',
        showCloseButton: {showCloseButton},
        closeButtonHtml: '&times;',
        /*
        * Cancel Button
        * */
        showCancelButton: {showCancelButton},
        focusCancel: false,
        cancelButtonAriaLabel: '',
        cancelButtonText: '{cancelButtonText}',
        cancelButtonColor: '{cancelButtonColor}',
        /*
        * Confirm Button
        * */
        showConfirmButton: {showConfirmButton},
        focusConfirm: false,
        confirmButtonAriaLabel: '',
        confirmButtonText: '{confirmButtonText}',
        confirmButtonColor: '{confirmButtonColor}',
        showLoaderOnConfirm: true,
        /*
        * Image Settings
        * */
        url: '{url}',
        imageWidth: '{imageWidth}',
        imageHeight: '{imageHeight}',
        imageAlt: '{imageAlt}',
        /*
        * Timer Settings
        * */
        timer: '{timer}',
        timerProgressBar: true,
        /*
        * Input Settings
        * */
        input: '{input}',
        inputPlaceholder: '{inputPlaceholder}',
        inputValue: '{inputValue}',
        inputOptions: {inputOptions},
        inputAutoTrim: true,
        inputAttributes: {inputAttributes},
        inputValidator: undefined,
        validationMessage: '{validationMessage}',
        
        grow: '{grow}',
        position: '{position}',
        
        /*
        * SweetAlert events
        * */
        onOpen:  {onOpen},
        onBeforeOpen: {onBeforeOpen},
        onRender: {onRender},
        onClose: {onClose},
        onAfterClose: {onAfterClose},
        onDestroy: {onDestroy},
    })
}  
JS,
        'button' => <<<HTML
     <div id="{id}" >{content}</div>
     
HTML,

    ];

    public $event = [];
    public $_event = [
        'onOpen' => "function (event) { 
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
         }",
        'onBeforeOpen' => "function() { 
            console.log('ZSweeAlert2Widget | onRender') 
        }",
        'onRender' => "function() { console.log('ZSweeAlert2Widget | onRender') }",
        'onClose' => "function() { console.log('ZSweeAlert2Widget | onClose') }",
        'onAfterClose' => "function() { console.log('ZSweeAlert2Widget | onAfterClose') }",
        'onDestroy' => "function() { console.log('ZSweeAlert2Widget | onDestroy') }",

    ];

    public function asset()
    {
        $this->fileCss('https://cdn.jsdelivr.net/npm/sweetalert2@9.8.2/dist/sweetalert2.min.css');
        $this->fileJs('https://cdn.jsdelivr.net/npm/sweetalert2@9.10.2/dist/sweetalert2.all.min.js');
    }

    public function codes()
    {


        $content = $this->_config['html'];
        if ($this->_config['begin'])
            $content = ob_get_clean();

        $this->js .= strtr($this->_layout['html'], [
            '{functionName}' => $this->jscode($this->_config['functionName']),
            '{inputValue}' => $this->jscode($this->_config['inputValue']),
            '{title}' => $this->jscode($this->_config['title']),
            '{id}' => $this->jscode($this->id),
            '{text}' => $this->jscode($this->_config['text']),
            '{html}' => $content,
            '{footer}' => $this->jscode($this->_config['footer']),
            '{width}' => $this->jscode($this->_config['width']),
            '{padding}' => $this->jscode($this->_config['padding']),
            '{scrollbarPadding}' => $this->jscode($this->_config['scrollbarPadding']),
            '{icon}' => $this->jscode($this->_config['icon']),
            '{iconHtml}' => $this->jscode($this->_config['iconHtml']),
            '{toast}' => $this->jscode($this->_config['toast']),
            '{target}' => $this->jscode($this->_config['target']),
            '{preConfirm}' => $this->jscode($this->_config['preConfirm']),
            '{background}' => $this->jscode($this->_config['background']),
            /*
             * Close Button
             * */
            '{buttonsStyling}' => $this->jscode($this->_config['buttonsStyling']),
            '{showCloseButton}' => $this->jscode($this->_config['showCloseButton']),
            /*
             * Cancel Button
             * */
            '{showCancelButton}' => $this->jscode($this->_config['showCancelButton']),
            '{cancelButtonText}' => $this->jscode($this->_config['cancelButtonText']),
            '{cancelButtonColor}' => $this->jscode($this->_config['cancelButtonColor']),
            /*
             * Confirm Button
             * */
            '{confirmButtonText}' => $this->jscode($this->_config['confirmButtonText']),
            '{confirmButtonColor}' => $this->jscode($this->_config['confirmButtonColor']),
            '{showConfirmButton}' => $this->jscode($this->_config['showConfirmButton']),
            /*
            * Image Settings
            * */
            '{url}' => $this->jscode($this->_config['url']),
            '{imageWidth}' => $this->jscode($this->_config['imageWidth']),
            '{imageHeight}' => $this->jscode($this->_config['imageHeight']),
            '{imageAlt}' => $this->jscode($this->_config['imageAlt']),
            /*
            * Timer Settings
            * */
            '{timer}' => $this->jscode($this->_config['timer']),
            /*
            * Input Settings
            * */
            '{input}' => $this->jscode($this->_config['input']),
            '{inputPlaceholder}' => $this->jscode($this->_config['inputPlaceholder']),
            '{inputOptions}' => $this->jscode($this->_config['inputOptions']),
            '{inputAttributes}' => $this->jscode($this->_config['inputAttributes']),
            '{validationMessage}' => Az::l('Validation'),

            '{grow}' => $this->jscode($this->_config['grow']),
            '{position}' => $this->jscode($this->_config['position']),
            /*
             * SweetAlert events
             * */
            '{onOpen}' => $this->eventCode('onOpen'),
            '{onBeforeOpen}' => strtr($this->eventCode('onBeforeOpen'), ['{url}' => $this->_config['url']]),
            '{onRender}' => $this->eventCode('onRender'),
            '{onClose}' => $this->eventCode('onClose'),
            '{onAfterClose}' => $this->eventCode('onAfterClose'),
            '{onDestroy}' => $this->eventCode('onDestroy'),
        ]);

        $this->htm .= strtr($this->_layout['button'], [
            '{functionName}' => $this->jscode($this->_config['functionName']),
            '{content}' => $this->_config['button'],
            '{id}' => $this->id,

        ]);

    }
}
