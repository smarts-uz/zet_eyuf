    <script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&amp;apikey=5fb7da25-bc18-4612-b304-83ea2266c510" type="text/javascript"></script>

       <style>
        html, body, #map {
            width: 100%; height: 900px; padding: 0; margin: 0;
        }
        a {
            color: #04b; /* Link color */
            text-decoration: none; /* Removing uderline from links */
        }
        a:visited {
            color: #04b; /* Visited link color */
        }
        a:hover {
            color: #f50000; /* Link color when hovering */
        }
    </style>

<div id="map"></div>

<script>
    ymaps.ready(init);

    function init () {
        var myMap = new ymaps.Map('map', {
                center: [55.76, 37.64],
                zoom: 10
            }, {
                searchControlProvider: 'yandex#search'
            }),
            objectManager = new ymaps.ObjectManager({
                // Setting an option to make placemarks start clusterizing.
                clusterize: true,
                // ObjectManager accepts the same options as the clusterer.
                gridSize: 32,
                clusterDisableClickZoom: true
            });

        /**
         * To set options for single objects and clusters,
         * we refer to child collections of ObjectManager.
         */
        objectManager.objects.options.set('preset', 'islands#greenDotIcon');
        objectManager.clusters.options.set('preset', 'islands#greenClusterIcons');
        myMap.geoObjects.add(objectManager);

        $.ajax({
            url: "/render/places/ZYandexWidget/demo/ZYandexWidget/Popular Examples/data.json"
        }).done(function(data) {
            objectManager.add(data);
        });

    }

</script>
