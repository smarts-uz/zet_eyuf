<?php
/**
 *
 * Class ZGoogleWidget
 * Created By: Daho
 * Refactored by: Davlatmurod Jumaboyev, Zoirjon Sobirov, jamshid Tojiboyev
 */
namespace zetsoft\widgets\places;


use zetsoft\system\Az;

use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\former\ZFormWidget;

class ZGoogleWidgetZoir2 extends ZWidget
{
    #region Congif
    /**
     * Configuration
     */
    public $config = [];
    public $_config = [
        'height'=>600 ,
        'width'=>0,
        'zoom' => 9,
        'disableDoubleClickZoom' => 9,
        'fullScreenControlPosition' => self::fullScreenControlPosition['LEFT_TOP'],
        'MapTypeControlStyle' => self::MapTypeControlStyle['DEFAULT'],
        'mapTypeControlPosition' => self::mapTypeControlPosition['TOP_CENTER'],
        'mapType' => self::mapType['roadmap'],
        'scrollwheel' => true,                   //boolean == true || false
        'zoomControl' => true,                  //boolean == true || false
        'zoomControlPosition' => self::zoomControlPosition['TOP_LEFT'],
        'grapes' =>true,                      //boolean == true || false
        'searchAutoComplete' => true,        //boolean == true || false
        'searchPlaceImageShow' => true,     //boolean == true || false
        'depend' => [
            'dependPlace' => true,
            'depend_id' => '',
        ],
        'matkerCount'   => 1,        // number min == 1, max == n
        'draggable'     => false,     //boolean == true || false
        'mapUseType'    => 'read', // options == read || write
        'travel_mode'   => ['DRIVING', 'WALKING', 'BICYCLING','TRANSIT'],

    ];

    public const fullScreenControlPosition = [
        'BOTTOM_CENTER' => 'BOTTOM_CENTER',
        'TOP_RIGHT' => 'TOP_RIGHT',
        'BOTTOM_LEFT' => 'BOTTOM_LEFT',
        'BOTTOM_RIGHT' => 'BOTTOM_RIGHT',
        'LEFT_BOTTOM' => 'LEFT_BOTTOM',
        'LEFT_CENTER' => 'LEFT_CENTER',
        'LEFT_TOP' => 'LEFT_TOP',
        'RIGHT_BOTTOM' => 'RIGHT_BOTTOM',
        'RIGHT_CENTER' => 'RIGHT_CENTER',
        'RIGHT_TOP' => 'RIGHT_TOP',
        'TOP_CENTER' => 'TOP_CENTER',
        'TOP_LEFT' => 'TOP_LEFT',
    ];

    public const MapTypeControlStyle = [
        'DEFAULT' => 'DEFAULT',
        'DROPDOWN_MENU' => 'DROPDOWN_MENU',
        'HORIZONTAL_BAR' => 'HORIZONTAL_BAR',
    ];

    public const mapTypeControlPosition = [
        'BOTTOM_CENTER' => 'BOTTOM_CENTER',
        'TOP_RIGHT' => 'TOP_RIGHT',
        'BOTTOM_LEFT' => 'BOTTOM_LEFT',
        'BOTTOM_RIGHT' => 'BOTTOM_RIGHT',
        'LEFT_BOTTOM' => 'LEFT_BOTTOM',
        'LEFT_CENTER' => 'LEFT_CENTER',
        'LEFT_TOP' => 'LEFT_TOP',
        'RIGHT_BOTTOM' => 'RIGHT_BOTTOM',
        'RIGHT_CENTER' => 'RIGHT_CENTER',
        'RIGHT_TOP' => 'RIGHT_TOP',
        'TOP_CENTER' => 'TOP_CENTER',
        'TOP_LEFT' => 'TOP_LEFT',

    ];

    public const mapType = [
        'roadmap' => 'roadmap',
        'satellite' => 'satellite',
        'hybrid' => 'hybrid',
        'terrain' => 'terrain',
    ];

    public const travelMode = [
        'DRIVING' => 'DRIVING',
        'BICYCLING' => 'BICYCLING',
        'TRANSIT' => 'TRANSIT',
        'WALKING' => 'WALKING',
    ];

    public const zoomControlPosition = [
        'BOTTOM_CENTER' => 'BOTTOM_CENTER',
        'TOP_RIGHT' => 'TOP_RIGHT',
        'BOTTOM_LEFT' => 'BOTTOM_LEFT',
        'BOTTOM_RIGHT' => 'BOTTOM_RIGHT',
        'LEFT_BOTTOM' => 'LEFT_BOTTOM',
        'LEFT_CENTER' => 'LEFT_CENTER',
        'LEFT_TOP' => 'LEFT_TOP',
        'RIGHT_BOTTOM' => 'RIGHT_BOTTOM',
        'RIGHT_CENTER' => 'RIGHT_CENTER',
        'RIGHT_TOP' => 'RIGHT_TOP',
        'TOP_CENTER' => 'TOP_CENTER',
        'TOP_LEFT' => 'TOP_LEFT',
    ];
    #endregion

    public $_layout = [
        'main' => <<<HTML
<!--                <div id="locations">-->
<!--                </div>             -->
<!--                <div class="travel-map no-gutters" >                   -->

<!--                   <div class="col-md-5 col-sm-7" id="search_area">      -->
<!--                         {search}-->
<!--                    </div>-->
                             
                        <div class="col-md-6 sidebar pl-2 Small shadow" id="Sidebar">
                         <div class="sidebar-front">
                            <div class="search-map w-100">
                         <input type="text" class=" w-100 map-search-input z-depth-1" type="text" placeholder="Поиск на Картах">
                         <div class="seach-icon">
                         <i class="fa fa-search" ></i>
                         <div class="line"></div>
                         </div>
                         <i class="fas fa-share-square button-share"></i>
                        <i class="fas fa-bars"></i>
                        </div>
                        
                        <div class="specify-address  p-3 z-depth-1">
                            <div class="d-flex align-items-center">
                                <div class="back-icon">
                                    <i class="fas fa-home fa-2x text-success"></i>
                                </div>
                                <div class="text-icon d-flex flex-column">
                                    <p>Дом</p>
                                    <span>Укажите адрес</span>
                                </div>
                            </div>
                            <hr class="w-90">
                             <div class="d-flex align-items-center">
                                <div class="back-icon rounded-circle">
                                    <i class="fas fa-briefcase fa-2x text-success"></i>
                                </div>
                                <div class="text-icon d-flex text-start flex-column">
                                    <p>Работа</p>
                                    <span>Укажите адрес</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="move-closer mt-3 p-3 z-depth-1">
                               <div class="d-flex align-items-center">
                                <div class="back-icon rounded-circle">
                                    <img src="https://img.icons8.com/officel/30/000000/traffic-jam.png"/>
                                </div>
                                <div class="text-icon d-flex flex-column">
                                    <p>Рядом с вами почти нет пробок</p>
                                    <span>Движение затруднено</span>
                                </div>
                                <div class="next-page ml-auto">
                                    <i class="fas fa-chevron-right fa-2x"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="opportunities d-flex justify-content-between mt-3 p-3 z-depth-1">
                        <div class="d-flex flex-column align-items-center">
                            <div class="opportunities-icon bg-success">
                            <i class="fa fa-shopping-cart opp-icon  fa-2x"></i>
                        </div>
                        <span>Продуктовые <br> магазины</span>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                         <div class="opportunities-icon bg-primary">
                           <i class="fas fa-truck opp-icon  fa-2x"></i>
                        </div>
                        <span>Доставка еды</span>
                        </div>
                         <div class="d-flex flex-column align-items-center">
                          <div class="opportunities-icon bg-danger">
                            <i class="fas fa-utensils opp-icon  fa-2x"></i>
                        </div>
                        <span>Еда навынос</span>
                        </div>
                        
                       <div class="d-flex flex-column align-items-center">
                          <div class="opportunities-icon bg-warning">
                            <i class="fas fa-bed opp-icon  fa-2x"></i>
                        </div>
                        <span>Гостиница</span>
                        </div>
                        
                        <div class="d-flex flex-column align-items-center">
                          <div class="opportunities-icon again-info  bg-secondary">
                            <i class="fa fa-ellipsis-h opp-icon  fa-2x "></i>
                        </div>
                        <span>Ещё</span>
                        </div>
                         
                         
                        </div>
                        
                       <div class="again-item z-depth-1 again-hidden">
                         <div class="opportunities-again d-flex align-items-center justify-content-between p-4">
                            <div class="opp-again-list d-flex align-items-center">  
                            <div class="opportunities-icon  bg-secondary">
                            <i class="fas fa-university opp-icon fa-2x"></i>
                        </div>  <p class="pl-2 pt-3 h5">Bank</p></div>
                        
                        <div class="opp-again-list  d-flex align-items-center">  
                            <div class="opportunities-icon bg-secondary">
                            <i class="fas fas fa-gas-pump opp-icon fa-2x"></i>
                        </div>  <p class="pl-2 pt-3 h5">AES</p></div>
                        <div class="opp-again-list  d-flex align-items-center">  
                            <div class="opportunities-icon bg-secondary">
                            <i class="fas fa-parking opp-icon fa-2x"></i>
                        </div>  <p class="pl-2 pt-3 h5">Parking</p></div>
                        
                        
                        </div> 
</div>
                          </div>
<!--search header-->
                          <div id="right-panel"class="ctn map-sidebar-back w-100"  style="background: white; max-height: 100vh; position: absolute; z-index: 999; top: 0; left: 0;">            
                            <div class="map-saibar success-color hidden-map-sidebar">
                            <div class="map-sidebar-header">
<!--                            <button class="btn-burger">-->
<!--                        <i class="fas fa-align-justify fa-2x"></i>-->
<!--                            </button>-->
                      <div class="map-sidebar-icons">
<!--                    <button class="map-button btn-share">-->
<!--                         <i class="fas fa-share-square fa-2x btn-icon"></i>-->
<!--                    </button>-->
                    <button class="map-button btn-car" id="DRIVING">
                         <i class="fas fa-car fa-2x btn-icon"></i>
                    </button>
                    <button class="map-button btn-bus" id="TRANSIT">
                         <i class="fas fa-bus-alt fa-2x btn-icon"></i>
                    </button>
                     <button class="map-button btn-bus" id="WALKING">
                         <i class="fas fa-walking fa-2x btn-icon"></i>
                    </button>
                      <button class="map-button btn-biking" id="BICYCLING">
                         <i class="fas fa-biking fa-2x btn-icon"></i>
                    </button>
                    <button class="map-button btn-plane" >
                         <i class="fa fa-plane fa-2x btn-icon"></i>
                    </button>
</div>    
                       
                        <div class="button btn-close ml-auto">
                        <i class="fa fa-times fa-2x"></i>
</div>     

                        
</div>
                             
                                                     <div class="map-search-in">
                            <div class="map-search-location">
                            <i class="far fa-circle"></i>
                            <div class="circle-box">
                            <div class="location-circle"></div>
                            <div class="location-circle"></div>
                            <div class="location-circle"></div>
</div>
                            <i class="fas fa-map-marker-alt"></i>
</div>
                            <div class="map-search-from">
                              <input class="form-control" id="direction_a" type="text" placeholder="Укажите пункт отправления или выберите его на карте..."> <br>
                                <input class="form-control"  id="direction_b" type="text" placeholder="Укажите пункт назначения...">

</div>
                                <i class="fas fa-sync btn-sync fa-2x"></i>
                              </div> 
                             
</div>

<!--                                <p> <i class="fab fa-plus" ></i></p>-->
                                
                                
                          <div class="map-address-hidden-car">
                               <div class="map-address Small shadow p-3 d-flex flex-column">
                                <div class="d-flex mr-auto ml-3">
                                    <i class="fas fa-car fa-2x btn-icon"></i> 
                                    <p class="pt-2 pl-3 h5">Общее расстояние: <span id="total"></span></p> 
                                    <i class="far fa-times-circle fa-2x"></i> 
                                </div>
                                <button class="details mr-auto">подробности</button>
                            </div>
                          

                          </div> 
                           <div class="map-address-hidden-bus">
                               <div class="map-address Small shadow p-3 d-flex flex-column">
                                <div class="d-flex mr-auto ml-3">
                                    <i class="fas fa-bus-alt fa-2x btn-icon"></i> 
                                    <p class="pt-2 pl-3 h5">Общее расстояние: <span id="total"></span></p> 
                                    <i class="far fa-times-circle fa-2x"></i> 
                                </div>
                                <button class="details mr-auto">подробности</button>
                            </div>
                          </div>
                          </div> 
                           
<!--                          <div class="btn-group">-->

<!--</div>  -->
                        </div>   
                         <button id="Openbtn" class="openbtn"><i class="fas fa-chevron-right"></i></button>  
                    <div id="map" style="width: 100% ; height: 97vh; position: relative"> 
                                                                   
                    </div>
<!--                        <div class="mr-5">-->
<!--                        {img}   -->
<!--</div>           -->
                </div>
               
                       
             
HTML,


        'css' => <<<CSS

::-webkit-scrollbar {
  width: 12px;
}

::-webkit-scrollbar-thumb {
  background-color: forestgreen;
}

 .white-skin {
        width: 99% !important;
        height: 100vh !important;
        position: relative !important;
}
                .sidebar {
              height: 100vh !important;
              width: 0;
              position: absolute;
              z-index: 5;
              top: 0;
              left: 0;
              background-color: white;
              overflow-x: hidden;
              transition: 0.5s;
            }
            #direction_a,
             #direction_b{
                width: 300px;
                height: 40px;
            }
            .topBtn,
             .bottomBtn{
                display: none !important;
            }
            
            
                .openbtn {
              cursor: pointer;
              background-color:green;
              color: gray;
              width: 30px;
              height: 60px;
              transition: margin-left .5s;
              border: none;
              color: white;
               position: absolute;
              z-index: 5;
              top: 60px;
              left: 20px;
              /*margin-top: 70px;*/
            }
            .map-sidebar-back {
                display: none;
            }
            .specify-address,
             .again-item{
                margin-left: 5px;
            }
           .search-map {
            position: relative;
            margin: 25px 5px;
            }
            .map-search-input {
                height: 50px;
                padding-left: 50px;
                border-radius: 10px;
                border: none;
            }
            .seach-icon {
            display: flex;
            position: absolute;
            top: 18px;
            right: 40px;
            color: #0c850c;
            }
              .line {
                width: 30px;
                height: 1px;
                background-color: #0c850c;
                transform: rotate(90deg);
                margin-left: 10px;
                margin-top: 5px;
            }
            .button-share {
            position: absolute;
            top: 18px;
            right: 20px;
            color: #0c850c;
            }
            .fa-bars {
             position: absolute;
            top: 18px;
            left: 20px;
            color: #0c850c;
            }
            .move-closer,
             .opportunities{
                margin-left: 5px;
            }
            .map-sidebar-header {
                width: 100%;
                display:flex;
                justify-content:space-around;
                align-items: center;
                margin-bottom: 50px;
            }
            .btn-burger,
             .btn-close{
                background-color: transparent;
                border: none;
                width: 60px;
                height: 60px;
                border-radius: 50%; 
                display:flex;
                justify-content:center;
                align-items: center;

            }
            .details {
                background-color: transparent;
                border: none;
                color: green;
                font-size: 20px;
                width: 50%;
            }
             .map-sidebar-icons {
                display: flex;
                justify-content:space-between;
                align-items: center;
                width: 80%;
                margin: auto;
            }
            .map-button,
             .btn-burger,
             .btn-close{
                background-color: transparent;
                border: none;
                width: 60px;
                height: 60px;
                border-radius: 50%;

            }
             .map-button:focus {
                outline: none;
                background-color: #0c850c;
                color: white;
            }
            .fa-align-justify,
            .fa-times,
             .fa-circle,
             .fa-sync,
             .fa-map-marker-alt,
             .opp-icon{
                color: white;
            }
            .fa,
            .fas,
            .far,
            .next-page,
            .opportunities-icon  {
                cursor: pointer;
                margin-left: 5px;
            }
            .btn-icon {
                color: lightgrey;
                margin: auto;
            }
            
            .map-saibar {
                padding: 50px 10px;
            }
            .adp {
                margin: 25px;
                display: none;
            }
             .map-search-in {
                width: 85%;
                display:flex;
                justify-content:space-between;
                align-items: center;
                margin: auto;
            }
             .map-search-location {
                display: flex;
                align-items: center;
                align-content: center;
                flex-direction: column;
            }
            .circle-box {
                margin-left: 5px;
            }
            .location-circle {
                display: block;
                width: 10px;
                height: 10px;
                background-color:#fff8;
                border-radius: 50% ;
                margin: 5px 0;
            }
              .text-icon {
                line-height: 5px;
                margin-left: 15px;
            }
            
            .text-icon p {
                font-size: 25px;
                text-align: start;
            }
               .opportunities-icon {
                width: 60px;
                height: 60px;
                border-radius: 50% ;
                display:flex;
                justify-content:center;
                align-items: center;
                cursor: pointer;
            }
            .again-hidden {
                display:none;
            }
            .opportunities span {
                line-height: 16px;
                text-align: center;
                padding-top: 10px;
            }
            .btn-sync {
                transform: rotateX(180deg);
            }
            .map-address-hidden-car,
            .map-address-hidden-bus{
                display: none;
                position: relative;
            }
            
            .fa-times-circle {
                cursor: pointer;
                position: absolute;
                top: 10px;
                right: 10px;
                display: none;
            }
            /*.adp {*/
            /*    display: none;*/
            /*}*/
           
            
            
CSS,


        'js' => <<<JS
//Sidebar Start

                const buttonShare = document.querySelector('.button-share')
                const mapSidebarBack = document.querySelector('.map-sidebar-back');
                const sidebarFront = document.querySelector('.sidebar-front');
                const btnClose = document.querySelector('.btn-close');
                const nextPage = document.querySelector('.next-page ');
                const againInfo = document.querySelector('.again-info');
                const againItem = document.querySelector('.again-item');
                const sync = document.querySelector('.fa-sync');
                const btnCar = document.querySelector('.btn-car');
                const btnBus = document.querySelector('.btn-bus');
                const mapAddressCar = document.querySelector('.map-address-hidden-car');
                const mapAddressBus = document.querySelector('.map-address-hidden-bus');
                const details = document.querySelectorAll('.details');
                const timesCircle = document.querySelector('.fa-times-circle');
                const mapSaibar = document.querySelector('.map-saibar');
                
                details.forEach((detailIn) => {
                    detailIn.addEventListener('click', eventDetail)
                });
                function eventDetail() {
                             mapSaibar.style.display = 'none';
                         timesCircle.style.display = 'block';
                         details.style.display = 'none';
                };
                
                btnClose.addEventListener('click', () => {
                     mapSidebarBack.style.display = 'none';
                     sidebarFront.style.display = 'block'
                 }) ;
                 buttonShare.addEventListener('click', () => {
                     mapSidebarBack.style.display = 'block';
                     sidebarFront.style.display = 'none'
                 }) ;
                 
                  nextPage.addEventListener('click', () => {
                     mapSidebarBack.style.display = 'block';
                     sidebarFront.style.display = 'none'
                 }) ;   
                 againInfo.addEventListener('click', () => {
                     againItem.classList.toggle('again-hidden')
                 }) ;   
                 sync.addEventListener('click', () => {
                     sync.classList.toggle('btn-sync')
                 }) ;  
                 btnCar.addEventListener('click', () => {
                     mapAddressCar.style.display = 'block';
                     timesCircle.style.display = 'none';
                     details.style.display = 'block';
                     
                 }) ;
                  btnBus.addEventListener('click', () => {
                     mapAddressBus.style.display = 'block';
                     // timesCircle.style.display = 'none';
                     // details.style.display = 'block';
                     //  mapAddressCar.style.display = 'none';
                     console.log('hi')
                     
                 }) ;
                 //    details.addEventListener('click', () => {
                 //         mapSaibar.style.display = 'none';
                 //         timesCircle.style.display = 'block';
                 //         details.style.display = 'none';
                 //     // console.dir(mapAddressCar.parentElement.lastChild.classList.add('abp-hidden'))
                 //     // console.log('hello')
                 //     // mapAddressCar.parentElement.lastChild.classList.add('abp-hidden')
                 //     // mapAddressCar.parentElement.lastChild.classList.toggle('abp-hidden')
                 // }) ;
                     timesCircle.addEventListener('click', () => {
                     mapSaibar.style.display = 'block';
                     mapAddressCar.style.display = 'none';
                     
                 }) ;
                  
                 
                 
                var openCheck = 0;
                document.getElementById("Openbtn").onclick = function openBtn(){
	                if(openCheck==0){
                            document.getElementById("Sidebar").style.width = "510px";
                            document.getElementById("Openbtn").style.marginLeft = "500px";
                            document.getElementById("Openbtn").style.transform="rotate(180deg)";
                            // document.querySelector('#search_area').style.display = 'block'
                            openCheck = 1;
                        }else{
                            document.getElementById("Sidebar").style.width = "0";
                            document.getElementById("Openbtn").style.marginLeft= "0";
                            document.getElementById("Openbtn").style.transform="rotate(360deg)";
                            // document.querySelector('#search_area').style.display = 'none'
                            openCheck = 0;
                        }
                    };



var map;
var cnt_ind;

/*For get already saved data*/
var savedData;

/*For save searched place_id*/
var searchPlaceId = "";

/*For save markers on map*/
var allMarkers = [];

/*For config max marker count*/
var count_markers = {matkerCount};

/*For change markers*/
var cnt_edited = 0;

/*Is show in map input search auto complete*/
var searchAutoComplete = {searchAutoComplete};

/*Is show image*/
var searchPlaceImageShow = {searchPlaceImageShow};

/*For direction Render global*/
var directionsRenderer;

/*For direction Service global*/
var directionsService;

/*API key*/
var key = 'AIzaSyBkxS5l87lclaC6MIWSGejdCXL13wSShRo';
//#region Create Write Map
function createWriteMap() {
    var options = {
        center:{lat:41.32, lng: 69.22},
        zoom: {zoom},
        mapTypeId: '{mapType}'
    }
    map = new google.maps.Map(document.getElementById('map'),options);
   
    var markersOnMap = savedData.map(function(location, i) {
        
        var marker = new google.maps.Marker({
            position: {lat:parseFloat(location.lat), lng: parseFloat(location.lng)},
            label: 'Z' + i,
        });
        allMarkers.push(marker);
        return marker;
    });
    // Add a marker clusterer to manage the markers.
    var markerCluster = new MarkerClusterer(map, markersOnMap,
        {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
    
    
   
    map.addListener('click', function(event) {
        
        /*If selected place id*/
        if (allMarkers.length < count_markers)
        {
            console.log(event);
            pushData(event.latLng.lat(), event.latLng.lng(), cnt_ind, 'push');
            
            cnt_ind ++;
            console.log('saqlandi');
            console.log(count_markers);
        }
        else if (allMarkers.length >= count_markers) {
            //alert("Oграниченный маркер!!");
            
            allMarkers.forEach(function (m) {m.setMap(null);});
            
            var editing_index = cnt_ind - count_markers + cnt_edited;
            
            pushData(event.latLng.lat(), event.latLng.lng(), editing_index, 'edit');
            
            cnt_edited = (cnt_edited + 1) % count_markers;
        }
        else {
            alert("Пожалуйста сначала выберите место на панели поиска!")
        }
    });

    var Placeinput = document.getElementById('{depend_id}');
    var searchBoxPlace = new google.maps.places.SearchBox(Placeinput);

    map.addListener('bounds_changed', function () {
        searchBoxPlace.setBounds(map.getBounds());
    });

    var markers = [];

    searchBoxPlace.addListener('places_changed', function () {
        var places = searchBoxPlace.getPlaces();

        if(places.length === 0)
            return null;

        markers.forEach(function (m) {m.setMap(null);});
        markers = [];

        var bounds = new google.maps.LatLngBounds();
        places.forEach(function (p) {
            if(!p.geometry)
                return null;

            markers.push(new google.maps.Marker({
                map:map,
                title: p.name,
                position: p.geometry.location,
                // icon: 'https://maps.google.com/maps/contrib/104742213001054094436',
            }));
            console.log('Topildi ');
            console.log(p.place_id);
            searchPlaceId = p.place_id;
             
            
            getPlaceImage(searchPlaceId);

            if(p.geometry.viewport)
                bounds.union(p.geometry.viewport);
            else bounds.union(p.geometry.location);
        })
        map.fitBounds(bounds);
        
        if (searchAutoComplete) {
            document.getElementById('search_map').value =  document.getElementById('{depend_id}').value;
        }
         
    })
    
    
    
    
    /*Prevent to press ENTER button in search area*/
            
             $(window).keydown(function(event){
                if(event.keyCode == 13) {
                  event.preventDefault();
                  return false;
                }
              });
    /*********************************************************************************/
         /*IP address*/
    var btn_address = document.getElementById('getmyAddress');
    $(btn_address).on('click', function() {
       infoWindow = new google.maps.InfoWindow;
          var location = navigator.geolocation;
       
        if (location) {
        location.getCurrentPosition(function(position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };

                infoWindow.setPosition(pos);
                infoWindow.setContent();
               
                markers.push(new google.maps.Marker({
                map:map,
                title: pos.name,
                position:pos,
                // icon: 'https://maps.google.com/maps/contrib/104742213001054094436',
            }));
                /*infoWindow.open(map);*/
                
                map.setCenter(pos);
                
                 var urlLink2 = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='+position.coords.latitude+','+position.coords.longitude+'&key='+key;
                 fetch(urlLink2)
                    .then(response => response.json()) 
                     .then(data => {
                         var dataFet = data.results[0].formatted_address;
                        console.log(data);
                        var contentString = dataFet;
                        var infowindow = new google.maps.InfoWindow({
                                content: contentString
                        });
                        
                        infowindow.open(map, marker,document.contentString.insertAdjacentHTML(
                           "beforeend",                                                 
                        ));
                    })
                    .catch(err => console.warn(err.message));
            },
           function() {
                handleLocationError(true, infoWindow, map.getCenter());
            });
        } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
        }
    });
    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
            'Error: Служба геолокации не удалась.' :
            'Error: Ваш браузер не поддерживает геолокацию.');
        infoWindow.open(map);
    }

//#region search in map
    if (searchAutoComplete)
    {
        /*********************************************************************************/
        var input = document.getElementById('search_map');
        var searchBox = new google.maps.places.SearchBox(input);
    
        map.addListener('bounds_changed', function () {
            searchBox.setBounds(map.getBounds());
        });
         
        markers = [];
        /*For in search in map*/
        searchBox.addListener('places_changed', function () {
            var places = searchBox.getPlaces();
    
            if(places.length === 0)
                return null;
    
            markers.forEach(function (m) {m.setMap(null);});
            markers = [];
            
            var bounds = new google.maps.LatLngBounds();
            places.forEach(function (p) {
                if(!p.geometry)
                    return null;
    
                markers.push(new google.maps.Marker({
                    map:map,
                    title: p.name,
                    position: p.geometry.location,
                    // icon: 'https://maps.google.com/maps/contrib/104742213001054094436',
                }));
                console.log('User qidirdi va topildi');
                console.log(p.place_id);
                var place_id = p.place_id;
                $("<input hidden type='text' name = '{name}[" + cnt_ind + "][place_id]' value=" + place_id + ">").appendTo('#locations'); 
                
                getPlaceImage(p.place_id);
                 
                if(p.geometry.viewport)
                    bounds.union(p.geometry.viewport);
                else bounds.union(p.geometry.location);
            })
            
            map.fitBounds(bounds);
            document.getElementById('{depend_id}').value = document.getElementById('search_map').value;
        })
    }
//#endregion

}
//#endregion

//#region Create Read Map
var directionMarkerA;
var directionMarkerB;
var directionWayPoints = [];
var userWantChange;
var selectedMode = 'DRIVING';
function createReadMap()
{
    directionsRenderer = new google.maps.DirectionsRenderer;
    directionsService = new google.maps.DirectionsService;
    var options = {
        center:{lat:41.32, lng: 69.22},
        zoom: {zoom},
        mapTypeId: '{mapType}'
    }
    map = new google.maps.Map(document.getElementById('map'),options);
   
    var markersOnMap = savedData.map(function(location, i) {
        
        var marker = new google.maps.Marker({
            position: {lat:parseFloat(location.lat), lng: parseFloat(location.lng)},
            label: 'Z' + i,
        });
        allMarkers.push(marker);
        return marker;
    });
    // Add a marker clusterer to manage the markers.
    var markerCluster = new MarkerClusterer(map, markersOnMap,
        {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});

    directionsRenderer = new google.maps.DirectionsRenderer({
        draggable: true,
        map: map,
        panel: document.getElementById('right-panel'),
    });
    
    var trafficLayer = new google.maps.TrafficLayer();
    trafficLayer.setMap(map);
    
      
   
    map.addListener('click', function(event) {
        
        //If user want add other way points
        if (userWantChange === 'w')
        {
            console.log('w')
            directionWayPoints.push({
              location: event.latLng,
              stopover: true
            });
            
            document.getElementById("direction_ways").value = document.getElementById("direction_ways").value + event.latLng;
            
        }
        //If already have two marker. We can last marker
        //If second marker
        else if ((directionMarkerA && directionMarkerA.setMap && userWantChange != 'a')
         || (directionMarkerA && directionMarkerA.setMap && directionMarkerB && directionMarkerB.setMap && userWantChange === 'b')
         ) {
            
            console.log('1-')
            if (directionMarkerB && directionMarkerB.setMap)
                directionMarkerB.setMap(null);
            
            directionMarkerB = new google.maps.Marker({
                map: map,
                title: '#salom' ,
                position: event.latLng,
                draggable: {draggable},
                
            }); 
            document.getElementById("direction_b").value = event.latLng
            userWantChange = 'b';
        }
        //If first marker
        else{
        
            console.log('2-')
            if (directionMarkerA && directionMarkerA.setMap)
                directionMarkerA.setMap(null);
                
            directionMarkerA = new google.maps.Marker({
                map: map,
                title: '#salom' ,
                position: event.latLng,
                draggable: {draggable},
                
            });
            userWantChange = 'b';
            document.getElementById("direction_a").value = event.latLng
        }
        
        if (directionMarkerA && directionMarkerA.setMap && directionMarkerB && directionMarkerB.setMap)
        {
            console.log('draw')
            var LatLng1 = directionMarkerA.getPosition();
            var LatLng2 = directionMarkerB.getPosition();
            
            directionMarkerA.setMap(null); 
            directionMarkerB.setMap(null); 
            createDirection(LatLng1, LatLng2);
        }
        

    });

    directionsRenderer.addListener('directions_changed', function() {
        computeTotalDistance(directionsRenderer.getDirections());
    });

}
$("#direction_a").click(function(){
    console.log("A")
    userWantChange = 'a';
});

$("#direction_b").click(function(){
    console.log("B")
    userWantChange = 'b';
});

$("#direction_ways").click(function(){
    console.log("Ways")
    userWantChange = 'w';
});

//#endregion

 //Sending request via AJAX to get image of countries    
function getPlaceImage(place_id){
    if (searchPlaceImageShow){
        //404 image
        var imageNotFound = 'https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-scaled-1150x647.png';
         //Ajax request
         $.ajax({url: "\service.aspx?namespace=inputs&service=depDrops&method=map&args=" + place_id, success: function(result){
                if (result!=='https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-scaled-1150x647.png'){
                    
                    $('#place_image').css('display','') ;
                    document.getElementById("place_image").src = result;
                }
                else{
                    $('#place_image').css('display','none');
                }
        }});
    }
}

//For save or edit markers
function pushData(lat, lng, index, type)
{
    var marker = new google.maps.Marker({
        position: {lat:lat, lng: lng},
        draggable: {draggable},
        title: '' ,
        map: map
    });
    
    if (type === 'push') {
        allMarkers.push(marker);
    }
    else if(type === 'edit') {
        allMarkers[index] = marker;
        
        for (var i = 0; i < allMarkers.length; i++) {
          allMarkers[i].setMap(map);
        }
    }
    /************************************************************************/
    var urlLink = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='+ lat +','+ lng +'&key='+key;
    
    /******************************************************************/
    bootbox.prompt({
        title: "добавить ваше местоположение!", 
        centerVertical: true,
        callback: function(result){ 
            console.log(result);
            
            fetch(urlLink)
            .then(response => response.json()) 
            .then(data => {
                var address = data.results[0].formatted_address;
                var place_id = searchPlaceId;
                if (searchPlaceId.length === 0)
                    place_id = data.results[0].place_id;
                //console.log(data.results[0].place_id);
                var contentString = '<b style="text-align:center">'+result+'</b><br>'+address;
                var infowindow = new google.maps.InfoWindow({
                content: contentString 
                });
                infowindow.open(map, marker) 
                
                /* var address_area_input = $(valueOfInput).val();*/
                
                if (type === 'push') {
                    $("<input hidden type='text' name = '{name}[" +index + "][place_id]' value='" + place_id + "'>").appendTo('#locations'); 
                    $("<input hidden type='text' name = '{name}["+ index + "][address]' value='" + address + "'>").appendTo('#locations');
                    $("<input hidden type='text' name = '{name}["+ index + "][user_entered_address]' value='" + result + "'>").appendTo('#locations');
                    $("<input hidden type='text' name = '{name}["+ index + "][lat]' value=" + lat + ">").appendTo('#locations');
                    $("<input hidden type='text' name = '{name}["+ index + "][lng]' value=" + lng + ">").appendTo('#locations');
                }
                else if (type === 'edit') {
                    
                    $("input[name='{name}["+ index + "][address]'").val(address);
                    $("input[name='{name}["+ index + "][user_entered_address]'").val(result);
                    $("input[name='{name}["+ index + "][lat]'").val(lat);
                    $("input[name='{name}["+ index + "][lng]'").val(lng);
                }
            
            })
            .catch(err => console.warn(err.message));
              
            }
        });
} 

///#region For direction
/*Create Direction routes*/
function createDirection(LatLng1 , LatLng2) {
    
    directionsService.route({
        origin: LatLng1,
        destination: LatLng2,
        
        waypoints: directionWayPoints,
        
        travelMode: selectedMode,
        /*drivingOptions: {
            departureTime: new Date(Date.now()),  // for the time N milliseconds from now.
            trafficModel: 'optimistic'
        }*/
    }, function(response, status) {
        console.log(response)
        if (status === 'OK') {
            directionsRenderer.setDirections(response);
        } else {
            window.alert('Directions request failed due to ' + status);
        }
    });
}


function changedTravelMode()
{
    console.log('New route with ' + selectedMode)
    var LatLng1 = directionMarkerA.getPosition();
    var LatLng2 = directionMarkerB.getPosition();
    
    directionMarkerA.setMap(null); 
    directionMarkerB.setMap(null); 
    createDirection(LatLng1, LatLng2);
}

$("#DRIVING").click(function(){
    console.log("Select driving mode")
    selectedMode = 'DRIVING';
    changedTravelMode();
});

$("#WALKING").click(function(){
    console.log("Select walking mode")
    selectedMode = 'WALKING';
    changedTravelMode()
});

$("#BICYCLING").click(function(){
    console.log("Select bicycle mode")
    selectedMode = 'BICYCLING';
    changedTravelMode()
});

$("#TRANSIT").click(function(){
    console.log("Select transit mode")
    selectedMode = 'TRANSIT';
    changedTravelMode()
});



/*Create Direction routes calc distance*/
function computeTotalDistance(result) {
    var total = 0;
    var myroute = result.routes[0];
    for (var i = 0; i < myroute.legs.length; i++) {
        total += myroute.legs[i].distance.value;
    }
    total = total / 1000;
    document.getElementById('total').innerHTML = total + ' km with ' + selectedMode;
}

//#endregion

/*If loaded show map*/
window.onload = function() {

    savedData = {generateAlreadySaved};
    var useType = '{mapUseType}';
    cnt_ind = 0;
    for(var i = 0; i < savedData.length; i++)
    {
        console.log(savedData[i]);
        $("<input hidden type='text' name = '{name}[" + cnt_ind + "][place_id]' value='" + savedData[i].place_id + "'>").appendTo('#locations'); 
        $("<input hidden type='text' name = '{name}[" + cnt_ind + "][user_entered_address]' value='" + savedData[i].result + "'>").appendTo('#locations'); 
        $("<input hidden type='text' name = '{name}[" + cnt_ind + "][address]' value='" + savedData[i].address+ "'>").appendTo('#locations');
        $("<input hidden type='text' name = '{name}[" + cnt_ind + "][lat]' value=" + savedData[i].lat + ">").appendTo('#locations');
        $("<input hidden type='text' name = '{name}[" + cnt_ind + "][lng]' value=" + savedData[i].lng + ">").appendTo('#locations');
        cnt_ind++;
    }
    if (useType === 'write')
        createWriteMap();
    else if (useType === 'read')
        createReadMap();
    
}   

JS,


    ];

    public function asset()
    {
        $this->fileJs('https://maps.googleapis.com/maps/api/js?key=AIzaSyBkxS5l87lclaC6MIWSGejdCXL13wSShRo&libraries=places');
        /*$this->fileJs('\render\places\ZGoogleWidget\asset\js\main.js');*/
        $this->fileJs('https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js');
        $this->fileJs('https://unpkg.com/@google/markerclustererplus@4.0.1/dist/markerclustererplus.min.js');
        $this->fileCss('\render\places\ZGoogleWidget\asset\main\css\style.css');


    }

    public function codes()
    {
        $search='' ;
        $image='' ;

        if($this->_config['searchAutoComplete'])
        {
            $search='
                <input id="search_map" type="tel" class="form-control" placeholder="Search ..."/>
            ' ;
        }

        if($this->_config['searchPlaceImageShow'])
        {
            $image='
            <img id="place_image" style="width:200px; height: 200px;  position: relative; bottom: 550px; left: 88%;" src="https://maps.googleapis.com/maps/api/place/photo?key=AIzaSyBkxS5l87lclaC6MIWSGejdCXL13wSShRo&maxwidth=580
&photoreference=CnRtAAAATLZNl354RwP_9UKbQ_5Psy40texXePv4oAlgP4qNEkdIrkyse7rPXYGd9D_Uj1rVsQdWT4oRz4QrYAJNpFX7rzqqMlZw2h2E2y5IKMUZ7ouD_SlcHxYq1yL4KbKUv3qtWgTK0A6QbGh87GB3sscrHRIQiG2RrmU_jF4tENr9wGS_YxoUSSDrYjWmrNfeEHSGSc3FyhNLlBU" />
           ' ;

        }

        if(isset($this->config['depend']['dependPlace']) && $this->config['depend']['dependPlace']){
            $this->_config['depend']['depend_id'] = $this->config['depend']['depend_id'];
        }

        $this->htm = strtr($this->_layout['main'], [
            '{id}'          => $this->id,
            '{name}'        => $this->name,
            '{modalTitle}'  => Az::l('Adding Location'),
            '{search}'      => $search,
            '{img}'         => $image,
            '{height}'      => $this->_config['height'],
            '{width}'       => $this->_config['width'],

//            '{TRANSIT}' => $this->TRANSIT,
        ]);

        $this->css = $this->_layout['css'];


        $this->js = strtr($this->_layout['js'], [
            '{id}' => $this->id,
            '{name}' => $this->name,
            '{zoom}' => $this->_config['zoom'],
            '{mapType}' => $this->_config['mapType'],
            '{mapUseType}' => $this->_config['mapUseType'],
            '{matkerCount}' => $this->_config['matkerCount'],
            '{draggable}' => ($this->_config['draggable'])? 'true': 'false',
            '{depend_id}' => ($this->_config['depend']['dependPlace'] == true)?$this->_config['depend']['depend_id']: 'none',
            '{searchAutoComplete}' => ($this->_config['searchAutoComplete'])? 'true': 'false',
            '{searchPlaceImageShow}' => ($this->_config['searchPlaceImageShow'])? 'true': 'false',
            '{generateAlreadySaved}' => (isset($this->value) > 0)?json_encode($this->value) :json_encode([])
        ]);


    }

}
