ymaps.ready(init);

function init() {
    var myMap = new ymaps.Map("map", {
            center: [56.292328, 43.988505],
            zoom: 16
        }, {
            searchControlProvider: 'yandex#search'
        }),

        myGeoObject = new ymaps.GeoObject({
            geometry: {
                type: "Point",
                coordinates: [56.292328, 43.988505]
            },
            properties: {
                iconContent: 'ООО «ЭнергоМонтажПроект»',
                hintContent: 'Нижний Новгород, Светлогорский переулок, 13'
            }
        }, {
            preset: 'islands#blackStretchyIcon',
        });

    myMap.geoObjects
        .add(myGeoObject);
}