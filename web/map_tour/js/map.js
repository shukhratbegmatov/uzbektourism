$(document).ready(function () {
    $('#vmap').css(
        {
            'width': '620px',
            'height': '440px'
        }
    );

    $('.mapPoints a').click(function(e){
        e.preventDefault();
        $('#mapLabels').toggleClass('open');
        // alert(999);
    });

    // $('.mapPoints a').hover(function(){
    //     filterRegions($(this).attr('href'));
    // }, function(){
    //     filterRegions('');
    // });
    $(window).click(function(e){
        if(e.target.className.animVal != "jvectormap-region"){
            // console.log(e.target.className.animVal);
            $('#mapLabels').html('');
        }
    });

});
$('.mini_modal').click(function (e) {
    e.preventDefault()
    console.log("hello")
})
var regions = {
        karakalpak: 0,
        andijan: 1,
        bukhara: 2,
        jizzakh: 3,
        kashkadarya: 4,
        navoi: 5,
        namangan: 6,
        samarkand: 7,
        surkhandarya: 8,
        syrdarya: 9,
        tashkent: 10,
        ferghana: 11,
        khorezm: 12,
    capital: 0
    };

function filterRegions(regionId) {
    var regionsList = {};
    $.each(regions, function (key, value) {
        var elementColor = '#4da9ec';
        regionsList[key] = elementColor;
    });
    if (regionId.length > 0){
        regionsList[regionId] = '#57bb64';
    if(regionId=='military' || regionId=='transport' || regionId=='department'){
      $.each(regions, function (key, value) {
        var elementColor = '#57bb64';
        regionsList[key] = elementColor;
      });
    }
    }
    $('#vmap').vectorMap('set', 'colors', regionsList);
    return false;
}

function makeMap(messages) {
    $('#vmap').html('');
    $('.jqvmap-label').remove();
    $('#vmap').vectorMap({
        map: 'uzbekistan',
        backgroundColor: '',
        color: '#0088cb',
        hoverColor: '#0073a1',
        enableZoom: false,
        showTooltip: false,
        borderColor: '#fff',
        borderWidth: 1,
        borderOpacity: 1,
        onLabelShow: function (event, label, code) {
            label.html(messages[code]);
        },
        onRegionClick: function (element, code, region) {
          
            $('#mapLabels').html(messages[code]);

            // console.log(messages[code]);
        },
    });
}

