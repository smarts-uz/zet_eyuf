<?php

/**
 *
 * Class ZTimeZonePickerWidget
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

namespace zetsoft\widgets\places;


use zetsoft\system\kernels\ZWidget;

/**
 *
 * http://kevalbhatt.github.io/timezone-picker/
 * https://github.com/kevalbhatt/timezone-picker
 *
 * Created By: AzimjonToirov
 * Modifyed by: Javohir Abdufattohov
 */
class ZTimezonePickerWidget extends ZWidget
{
    public $config = [];
    public $_config = [

    ];

    public function asset()
    {

        /*
         * YARN
         *
    $this->fileJs('/publish/yarner/moment/min/moment-with-locales.js');
    $this->fileJs('/publish/yarner/moment-timezone/builds/moment-timezone-with-data-2010-2020.min.js');
    $this->fileJs('/publish/yarner/timezone-picker/timezone-picker.js');

                */

        $this->fileJs('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js');
        $this->fileJs('https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.28/moment-timezone-with-data.min.js');
        $this->fileJs('https://cdn.jsdelivr.net/npm/timezone-picker@2.0.0-1/dist/timezone-picker.min.js');

    }
     public $layout = [];
     public $_layout = [
         'main' => <<<HTML
        <div id="{id}">
        <input type="hidden" name="{name}[MapTimeZone]" id="MapTimeZone">
        <input type="hidden" name="{name}[MapCountry]" id="MapCountry">
        <input type="hidden" name="{name}[MapZoneName]" id="MapZoneName">
        </div>
HTML,
          'js' => <<<JS
          $('#time-{id}').timezonePicker({
            width: 600,
            height: 250,
            selectBox: true,
            showHoverText: true,
            quickLink: [{
                "ANAT": "ANAT",
                "PST": "PST",
                "MST": "MST",
                "CST": "CST",
                "EST": "EST",
                "IST": "IST",
                "GMT": "GMT",
                "LONDON": "Europe/London",
            }]
        });
        
        var send_val;
        
        var arr = new Array(3);
        
        $('#click-{id}').on("map:clicked" , function(){
           var send_val = $('#map').data('timezonePicker').getValue();
           
            arr[0] = send_val[0].timezone;
            arr[1] = send_val[0].zonename;
            arr[2] = send_val[0].country;
       
       console.log(arr);
       console.log(send_val[0].country);
            
           $('#MapTimeZone').val(arr[0]);
           $('#MapCountry').val(arr[1]);
           $('#MapZoneName').val(arr[2]);
           
           
        });
   
JS,

     ];
    public function codes()
    {


         $this->htm = strtr($this->_layout['main'],[
         '{id}' => $this->id,
         '{name}' => $this->name,
         ]);


        $this->js = strtr($this->_layout['js'], [
        '{id}' => $this->id,
        ]);
        $this->css = <<<CSS
    .dropdown-toggle{
        display: block !important; 
    }
CSS;

    }
}
