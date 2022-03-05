<?php
$this->title = '';
$this->params['breadcrumbs'][] = Yii::t('app', 'Xaritada tashkilot joylashgan joy');
$this->params['titlebreadcrumbs'] = Yii::t('app', 'Xaritada tashkilot joylashgan joy');
$this->title = Yii::t('app', 'Xaritada tashkilot joylashgan joy');

?>
<div class="main-content p-80">
    <div class="news-details" style="margin: 30px 0;">
        <div class="container-fluid">
            <div class="news-box p-25 mt-4">
                <h2 class="text-center"><?= $this->title ?></h2>
                <div id="toitlet_map"></div>
            </div>
        </div>
    </div>
</div>
<style>
    #toitlet_map {
        height: 600px;
        width: 100%;
    }

</style>
<script type="text/javascript">
    function mapHeight() {
        let tmp = '750px'
        let h = document.documentElement.clientHeight
        if (h < 750) {
            tmp = (h * 0.6) + 'px'
        }
        return tmp
    }

    // Функция ymaps.ready() будет вызвана, когда
    // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
    ymaps.ready(init);

    function init() {
        // Создание карты.
        var myMap = new ymaps.Map("toitlet_map", {
                // Координаты центра карты.
                // Порядок по умолчанию: «широта, долгота».
                // Чтобы не определять координаты центра карты вручную,
                // воспользуйтесь инструментом Определение координат.
                center: [41.302933, 69.248274],
                controls: ['zoomControl', 'searchControl', 'typeSelector', 'fullscreenControl', 'routeButtonControl', 'geolocationControl'],
                // Уровень масштабирования. Допустимые значения:
                // от 0 (весь мир) до 19.
                zoom: 10
            }),
            objectManager = new ymaps.ObjectManager({
                // Чтобы метки начали кластеризоваться, выставляем опцию.
                clusterize: true,
                // ObjectManager принимает те же опции, что и кластеризатор.
                gridSize: 32,
                geoObjectOpenBalloonOnClick: true,
                clusterOpenBalloonOnClick: false
            });
        objectManager.objects.options.set('preset', 'islands#greenDotIcon');
        objectManager.clusters.options.set('preset', 'islands#greenClusterIcons');
        myMap.geoObjects.add(objectManager);

        var multiRoute;
        objectManager.objects.events.add('click', function (e) {
            myMap.geoObjects.remove(multiRoute);
            ymaps.geolocation.get({
                // Выставляем опцию для определения положения по ip    provider: 'yandex',
                // Карта автоматически отцентрируется по положению пользователя.
                mapStateAutoApply: true
            })
                .then(function (result) {
                    multiRoute = new ymaps.multiRouter.MultiRoute({
                        referencePoints: [
                            [result.geoObjects.position],
                            [e.get('coords')]
                        ],
                        params: {
                            results: 2
                        }
                    }, {
                        // Автоматически устанавливать границы карты так, чтобы маршрут был виден целиком.
                        boundsAutoApply: true
                    });
                    myMap.geoObjects.add(multiRoute);
                    console.log(e.get('coords'))
                });
        });


        var data = '{"type": "Feature",  "geometry": {"type": "Point", "coordinates": [<?= $latitude ?>, <?= $longitude ?>]}}';
        data = JSON.parse(data);
        objectManager.add(data);


        myMap.setBounds(objectManager.getBounds(), {checkZoomRange: true, zoomMargin: 9});
    }

    var data = document.getElementById('data').innerHTML;
</script>