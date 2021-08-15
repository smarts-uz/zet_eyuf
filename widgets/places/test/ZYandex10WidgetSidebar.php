<?php
/**
 *
 * Class ZGoogleWidget
 * Created By: Daho
 * Refactored by: Davlatmurod Jumaboyev,Khojiakbar Kodirov, Zoirjon Sobirov, Anvar Jabborov
 */

namespace zetsoft\widgets\places\test;

use kartik\builder\Form;
use kartik\widgets\Typeahead;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\former\ZFormWidget;

class ZYandex10WidgetSidebar extends ZWidget
{
    #region Congif
    /**
     * Configuration
     */
    public $config = [];
    public $_config = [
        'zoom' => self::zoom['zoom'],
        'controls' => self::controls['routePanelControl'],
        'type' => self::type['auto'],
        'types' => self::types['typse'],
        'fromEnabled' => self::fromEnabled['true'],
        'from' => self::from['from'],
        'toEnabled' => self::toEnabled['true'],
        'allowSwitch' => self::allowSwitch['false'],
        'reverseGeocoding' => self::reverseGeocoding['true'],
        'data' => self::data['data'],
        'options' => self::options['options'],

    ];
    public const zoom = [
        'zoom' => 9,
    ];
    public const controls = [
        'routePanelControl' => 'routePanelControl',
        'routeButtonControl' => 'routeButtonControl',
    ];
    public const type = [
        'masstransit' => 'masstransit',
        'pedestrian' => 'pedestrian',
        'taxi' => 'taxi',
        'auto' => 'auto',
        'bicycle' => 'bicycle',
    ];
    public const types = [
        'typse' => '{masstransit: true, pedestrian: true, taxi: true, auto: true, bicycle: true,}',
    ];
    public const fromEnabled = [
        'true' => 'true',
        'false' => 'false',
    ];
    public const from = [
        'from' => 'Москва, метро Молодежная',
    ];
    public const toEnabled = [
        'true' => 'true',
        'false' => 'false',
    ];
    public const allowSwitch = [
        'true' => 'true',
        'false' => 'false',
    ];
    public const reverseGeocoding = [
        'true' => 'true',
        'false' => 'false',
    ];
    public const data = [
        'data' => '{content: "Поменять местами", title: "Поменять точки местами"}',
    ];
    public const options = [
        'options' => '{selectOnClick: false, maxWidth: 160}',
    ];


    public $_layout = [
        'main' => <<<HTML
    <div id="locations"></div>
    <div id="map"> 
       <div class="search-map">
          <input type="text" class="w-100 map-search-input pr-9 z-depth-1" type="text" placeholder="Поиск мест и адресов">
           <div class="seach-icon">
               <i class="fa fa-search" ></i>
               <div class="line"></div>
           </div>
           <i class="fas fa-share-square button-share"></i>
           <i class="fa fa-times close-btn-back"></i>
           <i class="fa fa-map-marker fa-2x"></i>
        </div>
                    
       <div class="sidebar Small shadow" id="Sidebar">
          <div class="sidebar-front">           
                <div class = "yandex-sidebar-front">
                        <div class="opportunities d-flex justify-content-around">
                             <div class="d-flex flex-column align-items-center">
                                <div class="opportunities-icon warning-color">
                                    <i class="fas fa-truck opp-icon fa-2x"></i>
                                </div>
                                <span>Доставка <br> еды</span>
                             </div> 
                            
                            <div class="d-flex flex-column align-items-center">
                                <div class="opportunities-icon light-green accent-4">
                                    <i class="fas fa-pills opp-icon fa-2x"></i>
                                </div>
                                <span>Аптеки</span>
                             </div>
                            
                            <div class="d-flex flex-column align-items-center">
                                <div class="opportunities-icon light-blue lighten-1">
                                    <i class="fa fa-shopping-cart opp-icon fa-2x"></i>
                                </div>
                                <span>Продукты</span>
                            </div>
                            
                              <div class="d-flex flex-column align-items-center">
                                <div class="opportunities-icon light-blue lighten-1">
                                    <i class="fas fa-truck opp-icon fa-2x"></i>
                                </div>
                                <span>Доставка <br> продуктов</span>
                             </div> 


                        </div>
                        
                         <div class="opportunities-sub d-flex justify-content-around mt-2">
                             <div class="d-flex flex-column align-items-center">
                                <div class="opportunities-icon indigo lighten-1">
                                    <i class="fas fas fa-gas-pump opp-icon fa-2x"></i>
                                </div>
                                <span>АЗС</span>
                             </div> 
                            
                            <div class="d-flex flex-column align-items-center">
                                <div class="opportunities-icon  red accent-1">
                                    <i class="fas fa-hospital opp-icon fa-2x"></i>
                                </div>
                                <span>Больницы</span>
                             </div>
                            
                            <div class="d-flex flex-column align-items-center">
                                <div class="opportunities-icon indigo lighten-1">
                                    <i class="fas fa-money-check-alt opp-icon fa-2x"></i>
                                </div>
                                <span>Банкоматы</span>
                            </div>
                            
                            <div class="info-again" >
                                <div class="d-flex flex-column align-items-center ">
                                <div class="opportunities-icon again-info  bg-secondary">
                                    <i class="fa fa-ellipsis-h opp-icon fa-2x"></i>
                                </div>
                                <span>Все места</span>
                            </div>
                            </div>

                             <div class="info-tools" >
                                <div class="d-flex flex-column align-items-center ">
                                <div class="opportunities-icon again-info  bg-secondary">
                                    <i class="fas fa-tools opp-icon fa-2x"></i>
                                </div>
                                <span>Автосервис</span>
                            </div>
                             
                            </div>

                        </div>
                        
                        <div class="opportunities-hidden">
                         <div class="d-flex justify-content-around mt-2">
                             <div class="d-flex flex-column align-items-center">
                                <div class="opportunities-icon rgba-purple-strong">
                                    <i class="fas fa-film opp-icon fa-2x"></i>
                                </div>
                                <span>Кино</span>
                             </div> 
                            
                            <div class="d-flex flex-column align-items-center">
                                <div class="opportunities-icon  rgba-indigo-strong">
                                    <i class="fas fa-bed opp-icon fa-2x"></i>
                                </div>
                                <span>Гостиницы</span>
                             </div>
                            
                            <div class="d-flex flex-column align-items-center">
                                <div class="opportunities-icon rgba-blue-strong">
                                    <i class="fas fa-dumbbell opp-icon fa-2x"></i>
                                </div>
                                <span>Фитнес</span>
                            </div>
                            
                            <div class="d-flex flex-column align-items-center text-center">
                                <div class="opportunities-icon again-info  light-blue ">
                                    <i class="fas fa-hammer opp-icon fa-2x"></i>
                                </div>
                                <span>Строительные <br> магазины</span>
                            </div> 


                        </div>
                        
                        </div>
                       </div>
       </div>   
                               
               
                        
                        
<!--search header-->
                      <div id="right-panel" class="yandex-sidebar-back w-100"> 
                            <div class="map-sidebar-header">
                            
                            
                      <div class="map-sidebar-icons w-100">
                     <div class="map-button btn-cars" id="All">
                         <i class="fas fa-car fa-2x btn-icon"></i>
                         <span class="h5 pt-2">Все</span>
                    </div>
                      
                    <div class="map-button btn-car" id="DRIVING">
                         <i class="fas fa-car fa-2x btn-icon"></i>
                    </div>
                    <div class="map-button btn-transit" id="TRANSIT">
                         <i class="fa fa-subway fa-2x btn-icon"></i>
                    </div>
                     <div class="map-button btn-walking" id="WALKING">
                        <i class="fas fa-walking fa-2x btn-icon"></i> 
                    </div>
                      <div class="map-button btn-biking">
                       <i class="fas fa-bicycle fa-2x btn-icon" id="BIKING"></i>
                    </div>
                    <div class="ddd map-button btn-taxi" >
                         <i class="fas fa-taxi fa-2x btn-icon" id="TAXI"></i>
                    </div>
</div>    
                        
                          </div>
                           <div class="map-search-in">
                            <div class="map-search-from">
                              <div class="d-flex align-items-center">
                                  <i class="fas fa-dot-circle circle-a"></i>
                                    <input type="text" class="form-control ml-2"  id="direction_a" type="text" placeholder="Откуда">
                            </div> <br>
                            <div class="d-flex align-items-center">
                                  <i class="fas fa-dot-circle circle-b circle-sub"></i>
                                    <input class="form-control ml-2"  id="direction_b" type="text" placeholder="Куда">
                            </div>
                                

</div>                             <i class="fas fa-exchange-alt" id="swap"></i>
                              </div> 
                                  <div class="add-inputs">

</div>
                              <div class="d-flex justify-content-between add-box-search">
                              <div class="d-flex align-items-center"  id="add-input">
                                    <span id="add-input" class="text-add" >Добавить точку</span>
                                    <span class="text-stop pl-2" style="display: none" >10 точек максимум</span>
                                </div>
                              <span id="remove-inputs" class="text-remove" >Сбросить</span>
</div>


                             
</div>
                 
       </div> 
                        
                        <div id="OpenSidebar" class="open-sidebar">
                            <i class="fas fa-caret-right"></i>
                        </div> 
        
   </div>                 
                     
HTML,

        'css' => <<<CSS
     
CSS,
        'js' => <<<JS
 
 const openSidebarBack = document.querySelector('.button-share');
 const yandeSidebarBack = document.querySelector('.yandex-sidebar-back');
 const yandexSidebarFront = document.querySelector('.yandex-sidebar-front');
 const closeBtnBack = document.querySelector('.close-btn-back');
 const addInput = document.getElementById('add-input');
 const removeInput = document.getElementById('remove-inputs');
 const directionA = document.getElementById('direction_a');
 const circleA = document.querySelector('.circle-a');
 const directionB = document.getElementById('direction_b');
 const circleB = document.querySelector('.circle-b');
 const addBoxSearch = document.querySelector('.add-inputs');
 const infoAgain = document.querySelector('.info-again');
 const infoTools = document.querySelector('.info-tools');
 const opportunitiesHidden = document.querySelector('.opportunities-hidden');
 const mapButtons = document.getElementsByClassName('map-button');
 const addText = document.querySelector('.text-add');
 const stopText = document.querySelector('.text-stop');
 
     for (var i = 0; i < mapButtons.length; i++) {
           mapButtons[i].onclick = function() {
              var elem = mapButtons[0];
              
              while(elem) {
                if (elem.tagName === 'DIV') {
                      elem.classList.remove('addStyle') ;
                }
                
                elem = elem.nextSibling
              }
              
              this.classList.add("addStyle")
           }
     }
  
  infoAgain.addEventListener('click', () => {
      infoAgain.style.display = 'none' ;
     infoTools.style.display = 'block';
     opportunitiesHidden.style.display = 'block';
  });
      
 
 directionA.addEventListener('click', () => {
    circleA.classList.add('circle-anim');
    circleB.classList.remove('circle-anim');
 });
 
  directionB.addEventListener('click', () => {
    circleB.classList.add('circle-anim');
    circleA.classList.remove('circle-anim');
 });
 
  
 
 openSidebarBack.addEventListener('click', () => {
     yandexSidebarFront.style.display = 'none'
     yandeSidebarBack.style.display = 'block';
     closeBtnBack.style.display = 'block';
     openSidebarBack.style.display = 'none';
     document.getElementById("Sidebar").style.left = "0";
     document.getElementById("OpenSidebar").style.transform="rotate(180deg)";
 });
 
 closeBtnBack.addEventListener('click', () => {
     yandexSidebarFront.style.display = 'block'
     yandeSidebarBack.style.display = 'none';
     closeBtnBack.style.display = 'none';
     openSidebarBack.style.display = 'block';
 
 });
 
 addInput.addEventListener('click', () => {
  let input =  document.createElement('div');
  input.classList.add('added-input');
  input.innerHTML = `<i class="fas fa-dot-circle circle-c"></i>
                     <input class="form-control ml-2 add-input" type="text" placeholder="Куда">`
  addBoxSearch.prepend(input)
        circleB.classList.remove('circle-anim');
                            const addedSearch = document.querySelectorAll('.add-input');
                        if (addedSearch.length == 9) {
                            input.remove(this);
                          //  alert('можно добавить не более десяти адресов')
                           addText.style.display = 'none'
                           stopText.style.display = 'block'
                        }
                        
                        console.dir(addedSearch)
        
         removeInput.addEventListener('click', () => {
                removeInput.style.display = 'none'
                addText.style.display = 'block'
                 stopText.style.display = 'none'
   input.remove() ;
 });
 });
 
 
                         var openCheck = 0;
                document.getElementById("OpenSidebar").onclick = function openSidebar(){
	                if(openCheck==0){
                            document.getElementById("Sidebar").style.left = "0";
                            document.getElementById("OpenSidebar").style.transform="rotate(180deg)";
                            openCheck = 1;
                        }else{
                            document.getElementById("Sidebar").style.left = "-430px";
                            document.getElementById("OpenSidebar").style.transform="rotate(360deg)";
                            openCheck = 0;
                        }
                    };
                document.getElementById("swap").onclick =
  function (event) {
    e.preventDefault();
    var inputdirection_a = document.getElementById("direction_a");
    var fromVal = inputdirection_a.value;

    var inputdirection_b = document.getElementById("direction_b");
    var toVal = inputdirection_b.value;

    inputdirection_a.value = toVal;
    inputdirection_b.value = fromVal;
  };
         
 
 
 
 ymaps.ready(function () {
 
    var myMap = new ymaps.Map('map', {
        center: [41.327069, 69.281797],
        zoom: {zoom},
        // Добавим панель маршрутизации.
        controls: ['{routePanelControl}']
    });

    var control = myMap.controls.get('{routePanelControl}');
///////////////////
                  
  // Получение объекта, описывающего построенные маршруты.
  var multiRoutePromise = control.routePanel.getRouteAsync();
  multiRoutePromise.then(function(multiRoute) {
    //  Подписка на событие получения данных маршрута от сервера.
    multiRoute.model.events.add('requestsuccess', function() {
    var wayPoints = multiRoute.getWayPoints();
    //var pointe=[];
   wayPoints.each(function (point) {   
            point.options.set({
                preset: "islands#redStretchyIcon",
                iconContentLayout: ymaps.templateLayoutFactory.createClass('{{ properties.request|raw }}')
            }); 
            //pointe = point.properties._data.address; 
            console.log('addr: ',point.properties._data.address);
            console.log('hhh: ',point.properties._data);
            console.log('kkk: ',point.properties);
            console.log('yyy: ',point);
            console.log('cor: ', point.properties._data.coordinates);
            console.log('req: ', point.properties._data.request);
        });
      // Ссылка на активный маршрут.
      var activeRoute = multiRoute.getActiveRoute();
      if (activeRoute) {
        // Вывод информации об активном маршруте.
        console.log("Длина: " + activeRoute.properties.get("distance").text);
        console.log("Время прохождения: " + activeRoute.properties.get("duration").text);
        console.log("type: " + control.routePanel.state.get('type'));
                 var data=[[55.755753, 37.414912], [55.740867, 37.416619],
        [55.73653252833374, 37.424580296356176],
        [55.731272, 37.447198],[55.735986, 37.467078]];
     /////////
                   
                    $("<input hidden type='text' name = 'CoreInput[jsonb_8]' value='" + JSON.stringify(data) + "'>").appendTo('#locations');
                 //   $("<input  type='text' name = 'CoreInput[jsonb_9]' value='" + activeRoute.properties.get("duration").text + "'>").appendTo('#locations');
                  //  $("<input  type='text' name = 'CoreInput[jsonb_9]' value='" + control.routePanel.state.get('type') + "'>").appendTo('#locations');
                    
                    /*$("<input hidden type='text' name = '{name}["+ index + "][lat]' value=" + lat + ">").appendTo('#locations-{id}');
                    $("<input hidden type='text' name = '{name}["+ index + "][lng]' value=" + lng + ">").appendTo('#locations-{id}');  */
     /////////////
     
      }
    });
    multiRoute.options.set({
      // Цвет метки начальной точки.
      wayPointStartIconFillColor: "#B3B3B3",
      // Цвет метки конечной точки.
      wayPointFinishIconFillColor: "blue", 
      // Внешний вид линий (для всех маршрутов).
      routeStrokeColor: "00FF00"
    });  
  }, function (err) {
    console.log(err); 
  });
///////////////////

    // Зададим состояние панели для построения машрутов.
    control.routePanel.state.set({
        // Тип маршрутизации.
        type: '{masstransit}',  //masstransit
        // Выключим возможность задавать пункт отправления в поле ввода.
        fromEnabled: {fromEnabled}, //true,| false
        // Адрес или координаты пункта отправления.
        from: '{from}', //Москва, Льва Толстого 16
        // Включим возможность задавать пункт назначения в поле ввода.
        toEnabled: {toEnabled},//true, | false
        // Адрес или координаты пункта назначения.
        //to: 'Петербург'
    });

    // Зададим опции панели для построения машрутов.
    control.routePanel.options.set({
        // Запрещаем показ кнопки, позволяющей менять местами начальную и конечную точки маршрута.
        allowSwitch: {allowSwitch},  //true, | false
        // Включим определение адреса по координатам клика.
        // Адрес будет автоматически подставляться в поле ввода на панели, а также в подпись метки маршрута.
        reverseGeocoding: {reverseGeocoding},   //true, | false
        // Зададим виды маршрутизации, которые будут доступны пользователям для выбора.
        types: {types}
    });

    // Создаем кнопку, с помощью которой пользователи смогут менять местами начальную и конечную точки маршрута.
    var switchPointsButton = new ymaps.control.Button({
        data: {data},
        options: {options}
    });
    // Объявляем обработчик для кнопки.
    switchPointsButton.events.add('click', function () {
    
           
       
        // Меняет местами начальную и конечную точки маршрута.
        control.routePanel.switchPoints();
        
    });
    myMap.controls.add(switchPointsButton);
})


JS,


    ];

    public function asset()
    {
        $this->fileCss('\render\places\ZYandexWidget\asset\main\css\main.css');
        //$this->fileJs('https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=9c3673c0-e4ff-47fb-8214-9ccf58d21b25');
        $this->fileJs('https://api-maps.yandex.ru/2.1/?apikey=5fb7da25-bc18-4612-b304-83ea2266c510&lang=ru_RU');
        
    }

    public function codes()
    {
        $this->htm = strtr($this->_layout['main'], [

        ]);
        $this->css = strtr($this->_layout['css'], [

        ]);
        $this->js = strtr($this->_layout['js'], [
                 '{routePanelControl}'=>$this->_config['controls'],
                 '{zoom}'=>$this->_config['zoom'],
                 '{masstransit}'=>$this->_config['type'],
                 '{fromEnabled}'=>$this->_config['fromEnabled'],
                 '{from}'=>$this->_config['from'],
                 '{toEnabled}'=>$this->_config['toEnabled'],
                 '{allowSwitch}'=>$this->_config['allowSwitch'],
                 '{reverseGeocoding}'=>$this->_config['reverseGeocoding'],
                 '{types}'=>$this->_config['types'],
                 '{data}'=>$this->_config['data'],
                 '{options}'=>$this->_config['options'],
        ]);

    }

}
