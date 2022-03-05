var myMap;

// Дождёмся загрузки API и готовности DOM.
ymaps.ready(init);

function init () {
    // Создание экземпляра карты и его привязка к контейнеру с
    // заданным id ("map").
    myMap = new ymaps.Map('map', {
        // При инициализации карты обязательно нужно указать
        // её центр и коэффициент масштабирования.
        center: [ 41.301874,69.249199], // Москва
        zoom: 18
    });
    geoObjects = new ymaps.Placemark();
    var placemark = new ymaps.Placemark([41.302914, 69.248439], {
    }, {
        preset: "islands#icon",
        // Отключаем кнопку закрытия балуна.
        balloonCloseButton: false,
        // Балун будем открывать и закрывать кликом по иконке метки.
        hideIconOnBalloonOpen: false
    });
    myMap.geoObjects.add(placemark);
    myMap.behaviors.disable('scrollZoom');
    myMap.behaviors.disable('drag');
}