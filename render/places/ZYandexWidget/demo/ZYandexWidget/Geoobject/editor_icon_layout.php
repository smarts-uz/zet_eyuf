





    <style>
        html, body, #map {
            width: 100%; height: 900px; padding: 0; margin: 0;
        }
    </style>
<body>
<div id="map"></div>

</body>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;coordorder=longlat&amp;apikey=<ваш API-ключ>" type="text/javascript"></script>
    <script>
        ymaps.ready(init);

        function init() {
            // Создаем карту.
            var myMap = new ymaps.Map("map", {
                center: [90, 15],
                zoom: 3,
                controls: []
            }, {
                searchControlProvider: 'yandex#search'
            });

            // Создаем ломаную.
            var myPolyline = new ymaps.Polyline([
                // Указываем координаты вершин.
                [70, 20],
                [70, 40],
                [90, 15],
                [70, -10]
            ], {}, {
                // Задаем опции геообъекта.
                // Цвет с прозрачностью.
                strokeColor: '#FF008888'
            });



            // Добавляем линию на карту.
            myMap.geoObjects.add(myPolyline);

            // Включаем режим редактирования.
            myPolyline.editor.startEditing();
        }

    </script>
