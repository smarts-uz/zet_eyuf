<?php

namespace zetsoft\widgets\inputes;

use zetsoft\system\kernels\ZWidget;

/**
 * Author: Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 *
 * Created By: MurodovMirbosit
 * Refactored: AzimjonToirov
 *
 * Class ZSelect2Widget
 * https://github.com/asror-z
 * https://github.com/select2/select2
 * https://select2.org/
 * https://select2.github.io/select2/
 *
 */
class ZSelect2Widget2 extends ZWidget
{

    public $config = [];
    public $_config = [
        'width' => '',
        'class' => '',
        'theme' => ZSelect2Widget::theme['bootstrap'],
        'icon' => '',
        'hasPlace' => true,
        'placeholder' => '',
        'flagHeight' => '15px',
        'flagWidth' => '18px',
        'margin' => '',
        'padding' => '',
        'tags' => true,
        //true only in view page
        'ajax' => false,
        'pjax' => false,
        'url' => '/core/tester/restjson/api4.aspx',
        'dataType' => 'jsonb',
        //true for select country with his flag
        'imagePath' => false,
        'clear' => true,
        'label' => false,
        //optionlarini backgroundi
        'selectedColor' => '#d9edf7',
        'selectColor' => '',
        'Fontcolor' => '#000000',
        'readonly' => false,
        'allowClear' => false,
    ];

    public static $grapes = [
        'enable' => true,
        'icon' => 'fa-down',
        'height' => '600px',
        'width' => '840px',
        'src' => '/render/inputes/ZSelect2Widget/image/icon.png',
        'name' => Azl . 'Select2',
        'title' => Azl . '<h4>Select2</h4>',
        'content' => Azl . '<b>this widget for selcted element</b>',
    ];

    public $branch = [];
    public $_branch = [
        'widget' => [
            'theme',
            'size',
            'url',
            'multiple',
            'allowClear',
            'isHideSearch',
        ],
    ];

    public $branchLabel = [];
    public $_branchLabel = [
        'widget' => Azl . 'Основные опции ZSelect2Widget',
        'tooltip' => Azl . 'Примечание',
    ];

    public const size = [
        'lg' => 'lg',
        'md' => 'md',
        'sm' => 'sm'
    ];

    public const theme = [
        'bootstrap' => 'bootstrap',
        'classic' => 'classic',
        'material' => 'material',
    ];

    public $event = [];
    public $_event = [
        'opening' => "function() { console.log('select2:opening'); }",
        'open' => "function() { console.log('open'); }",
        'closing' => "function() { console.log('close'); }",
        'close' => "function() { console.log('close'); }",
        'selecting' => "function() { console.log('selecting'); }",
        'select' => "function() { console.log('select'); }",
        'unselecting' => "function() { console.log('unselecting'); }",
        'unselect' => "function() { console.log('unselect'); }",
        'clear' => "function() { console.log('select2:clear'); }",
        'clearing' => "function() { console.log('select2:clearing'); }",
    ];

    public function asset()
    {
        //CssFile
        $this->fileCss('/render/asrorz/css/select2.css');

        //Theme
        $this->fileCss('/render/inputes/ZSelect2Widget/assets/select2-bootstrap.css');

        //JsFile
        $this->fileJs('https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js');
    }

    public $layout = [];
    public $_layout = [

        'main' => <<<HTML
        {label}
        <select id="{id}" class="select {class} selectM" {readonly} {multiple} name="{name}" data-placeholder="{placeholder}" data-allow-clear="{clear}">
        {content}
        </select>
HTML,

        'option' => <<<HTML
             <option value="{key}" {selected}>{value}</option>
HTML,

        'label' => <<<HTML
            <label class="select2-label" for="{id}">
            {labels}   
</label>
HTML,

        'ajax' => <<<JS
        $(document).ready(function() {
        $('#{id}').select2({
        ajax: {
        url: '{url}',
        dataType: '{dataType}'
        }
    })
})         
JS,

        'imagePath' => <<<JS
    templateResult: formatState,
    templateSelection: formatState,
JS,

        'select2Options' => <<<JS
        $('#{id}').select2({
            theme: '{theme}',
            delimiter: ',',
            tags: '{tags}',
            persist: true,
            create: true,
            createOnBlur: true,
            createFilter: null,
            highlight: true,
            maxItems: 1,
            hideSelectedhideSelected: null,
            closeAfterSelect: true,
            loadThrottle: 300,
            scrollDuration: 60,
            loadingClass: 'loading',
            preload: false,
            dropdownParent: null,
            addPrecedence: false,
            selectOnTab: true,
            diacritics: true,
            dataAttr: 'data-',
            valueField: 'value',
            optgroupValueField: 'value',
            labelField: 'text',
            optgroupLabelField: 'label',
            optgroupField: 'optgroup',
            disabledField: 'disabled',
            sortField: 'order',
            searchField: ['text'],
            searchConjunction: 'and',
            lockOptgroupOrder: false,
            copyClassesToDropdown: true, 
            loadMorePadding: 100,
            closeOnSelect: true,
            openOnEnter: false,
            //dropdownAutoWidth: true,
            selectOnBlur: false,
            width: '{width}',
            allowClear: true,
            maximumInputLength: 20,
            {imagePath}
        })     
        .on("select2:closing", {closing})
        .on("select2:open", {open})
        .on("select2:close", {close})
        .on("select2:opening", {opening})
        .on("select2:selecting", {selecting})
        .on("select2:select", {select})
        .on("select2:unselecting", {unselecting})
        .on("select2:unselect", {unselect})
        .on("select2:clearing", {clearing})
        .on("select2:clear", {clear});
JS,

        'flagSelect2' => <<<JS
         function formatState (state) {
            if (!state.id) {
                return state.text;
            }
         /*agar flaglani olomasela shu urlni qarisla flagla bormi bosa kyn datadan kevotgan keyni qarisla flaglani otiga datani key to`ri kelish kere shunda to`ri cqaradi example: key=uz => photo=uz.png */
         var baseUrl = "/render/asrorz/flags";
            var state = $(
         '<span><img src="' + baseUrl + '/' + state.element.value.toLowerCase() + '.png" class="img-flag" /> ' + state.text + '</span>'
  );
  return state;
}
JS,

        'pjax' => <<<JS
        {flagSelect2}
        function ZSelect2Widget(){
        {select2Options}
}
        $(document).ready(function() {
         ZSelect2Widget();  
        });
        
        $(document).on('pjax:end', function () {
        $('#{id}').select2('destroy');
         ZSelect2Widget();
        });
JS,

        'js' => <<<JS
      {flagSelect2}
      $(document).ready(function() {
      {select2Options}
      }); 
JS,

        'css' => <<<CSS
        .img-flag{
       height: {flagHeight};
       width: {flagWidth};
       margin: {margin};
       padding: {padding};
       background-repeat: no-repeat;
       }
       .select2-container--bootstrap .select2-results__option[aria-selected=true]{
       background-color: {selectedColor};
       }
       .select2-container--bootstrap .select2-results__option--highlighted[aria-selected]{
       color: {Fontcolor};
       background-color: {selectColor};
       }    
CSS,

        'icon' => <<<HTML
    <i class="{icon} fa-2x"></i>
HTML,
    ];

    public function codes()
    {
        $option = '';

        foreach ($this->data as $key => $value) {

            $selected = '';
            if ($this->value === $key) {
                $selected = 'selected="selected"';
            }

            if (is_array($this->value)) {
                foreach ($this->value as $val) {
                    if ($key === $val) {
                        $selected = 'selected="selected"';
                    }
                }
            }

            $option .= strtr($this->_layout['option'], [
                '{value}' => $value,
                '{key}' => $key,
                '{selected}' => $selected,
                '{readonly}' => $this->_config['readonly'],
            ]);
        }

        $iconCode = strtr($this->_layout['icon'], [
            '{icon}' => $this->_config['icon'],
        ]);

        $name = $this->name;
        if ($this->_config['multiple']) {
            $name = $this->name . '[]';
        }

        $label = '';
        if ($this->_config['label']) {
            $label .= strtr($this->_layout['label'], [
                '{labels}' => $this->_config['placeholder'],
                '{id}' => $this->id,
            ]);
        }

        $this->htm .= strtr($this->_layout['main'], [
            '{id}' => $this->id,
            '{data}' => $this->data,
            '{class}' => $this->_config['class'],
            '{name}' => $name,
            '{content}' => $option,
            '{multiple}' => $this->_config['multiple'] ? 'multiple="multiple"' : '',
            '{icon}' => $this->_config['hasIcon'] ? $iconCode : '',
            '{placeholder}' => $this->_config['placeholder'],
            '{clear}' => $this->_config['clear'],
            '{readonly}' => $this->_config['readonly'] ? 'disabled' : '',
            '{label}' => $label,
        ]);

        if ($this->_config['ajax']) {
            $this->js = strtr($this->_layout['ajax'], [
                '{url}' => $this->_config['url'],
                '{dataType}' => $this->_config['dataType'],
                '{id}' => $this->jscode($this->id),
            ]);
        }



        $imagePath = '';
        if ($this->_config['imagePath']) {
            $imagePath .= strtr($this->_layout['imagePath'],[]);
        }

        $conf = [
            //configuration
            '{width}' => $this->jscode($this->_config['width']),
            '{theme}' => $this->jscode($this->_config['theme']),
            '{id}' => $this->jscode($this->id),
            '{tags}' => $this->jscode($this->_config['tags']),
            '{imagePath}' => $this->jscode($imagePath),
            '{allowClear}' => $this->jscode($this->_config['allowClear']),
            '{select2Options}' => $this->jscode($this->_layout['select2Options']),

            //Events
            '{select}' => $this->eventCode('select'),
            '{selecting}' => $this->eventCode('selecting'),
            '{clear}' => $this->eventCode('clear'),
            '{clearing}' => $this->eventCode('clearing'),
            '{open}' => $this->eventCode('open'),
            '{opening}' => $this->eventCode('opening'),
            '{close}' => $this->eventCode('close'),
            '{closing}' => $this->eventCode('closing'),
            '{unselect}' => $this->eventCode('unselect'),
            '{unselecting}' => $this->eventCode('unselecting'),
        ];

        if ($this->_config['pjax']) {
            $this->js .= strtr($this->_layout['pjax'], [
                $this->jscode($conf),
            ]);
        } else {
            $this->js .= strtr($this->_layout['js'], [
                $this->jscode($conf),
            ]);
        }
        $this->js .= strtr($this->_layout['flagSelect2'], []);
        $this->css = strtr($this->_layout['css'], [
            '{flagHeight}' => $this->_config['flagHeight'],
            '{flagWidth}' => $this->_config['flagWidth'],
            '{margin}' => $this->_config['margin'],
            '{padding}' => $this->_config['padding'],
            '{selectedColor}' => $this->_config['selectedColor'],
            '{selectColor}' => $this->_config['selectColor'],
            '{Fontcolor}' => $this->_config['Fontcolor']
        ]);


    }
}
