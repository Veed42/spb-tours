let  center = [59.96507621651757,30.291105157567927]
function init(){
    let map = new ymaps.Map('map',{
        center:center,
        zoom:20
    });
    let placemark = new ymaps.Placemark(center,{}, {
        iconLayout:'default#image',
        iconImageHref:'https://cdn-icons-png.flaticon.com/128/9131/9131546.png',
        iconImageSize: [50,50],
        iconImageOffset:[-20,-50]
    })


    map.controls.remove('trafficControl');
    map.controls.remove('rulerControl');
    map.controls.remove('typeSelector');
    map.controls.remove('fullscreenControl');
    map.controls.remove('searchControl');

    map.geoObjects.add(placemark);

}


ymaps.ready(init);
