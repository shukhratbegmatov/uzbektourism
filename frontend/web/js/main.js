
// $(document).ready(function(){
// $(".multilanguage").children().removeAttr("style");
// $(".multilanguage").children().children().removeAttr("style");
// $(".multilanguage").children().children().first().children().children().after(" <b style='color: #f7f7f7;'>UZ</b>").remove(".lang-flag");
// $(".multilanguage").children().children().first().next().children().children().after(" <b style='color: #f7f7f7;'>EN</b>").remove(".lang-flag");
// $(".multilanguage").children().children().first().next().next().children().children().after(" <b style='color: #f7f7f7;'>УЗ</b>").remove(".lang-flag");
// $(".multilanguage").children().children().first().next().next().next().children().children().after(" <b style='color: #f7f7f7;'>RU</b>").remove(".lang-flag");

// $(".layout_lang").children().children().removeAttr("style");
// $(".layout_lang").children().children().children().removeAttr("style");
// $(".layout_lang").children().children().children().first().children().children().after(" <b style='color: #f7f7f7;'>EN</b>").remove(".lang-flag");
// $(".layout_lang").children().children().children().first().next().children().children().after(" <b style='color: #f7f7f7;'>UZ</b>").remove(".lang-flag");
// $(".layout_lang").children().children().children().first().next().next().children().children().after(" <b style='color: #f7f7f7;'>УЗ</b>").remove(".lang-flag");
// $(".layout_lang").children().children().children().first().next().next().next().children().children().after(" <b style='color: #f7f7f7;'>RU</b>").remove(".lang-flag");
// });
$(".header__menu").children().next().next().next().next().next().next().children().next().addClass('law');
$(".btn-group, .dropdown").hover(
    function () {
        $('>.dropdown-menu', this).stop(true, true).fadeIn("fast");
        $(this).addClass('open');
    },
    function () {
        $('>.dropdown-menu', this).stop(true, true).fadeOut("fast");
        $(this).removeClass('open');
    });




// (function ($) {
//     "use strict";
//     $(window).on('load', function () {
//         $('#preloader').fadeOut();
//         if (window.screen.width > 768) {
//             $(window).on('scroll', function () {
//                 if ($(window).scrollTop() > 300) {
//                     $('.scrolling-navbar').addClass('top-nav-collapse');
//                 } else {
//                     $('.scrolling-navbar').removeClass('top-nav-collapse');
//                 }
//             });
//         }
//         var wow = new WOW({mobile: false});
//         wow.init();
//     });
// }(jQuery));


$(document).ready(function(){

    //When clicking on a button, it shows the loader
    function loader(){
        $('#preloader').fadeOut(1000);
        $('body').css('overflow','auto');
    }
    setTimeout(loader,210);
});


var links = document.querySelectorAll('.ripplelink');

for (var i = 0, len = links.length; i < len; i++) {
    links[i].addEventListener('click', function(e) {
        var targetEl = e.target;
        var inkEl = targetEl.querySelector('.ink');

        if (inkEl) {
            inkEl.classList.remove('animate');
        }
        else {
            inkEl = document.createElement('span');
            inkEl.classList.add('ink');
            inkEl.style.width = inkEl.style.height = Math.max(targetEl.offsetWidth, targetEl.offsetHeight) + 'px';
            targetEl.appendChild(inkEl);
        }

        inkEl.style.left = (e.offsetX - inkEl.offsetWidth / 2) + 'px';
        inkEl.style.top = (e.offsetY - inkEl.offsetHeight / 2) + 'px';
        inkEl.classList.add('animate');
    }, false);
}
document.addEventListener(
    "DOMContentLoaded", () => {
        const menu = new MmenuLight(
            document.querySelector("#my-menu"),
            "(max-width: 768px)"
        );
        const lang = document.documentElement.lang;
        var menu_lang;
        if (lang === "ru"){
            menu_lang = "Меню"
        }
        if (lang === "cyrl"){
            menu_lang = "Меню"
        }
        if (lang === "en"){
            menu_lang = "Menu"
        }
        if (lang === "uz"){
            menu_lang = "Menu"
        }
        const navigator = menu.navigation({
            'title': menu_lang
        });
        const drawer = menu.offcanvas({
            // 'position': "right"
        });

        document.querySelector("a[href='#my-menu']")
            .addEventListener("click", (evnt) => {
                evnt.preventDefault();
                drawer.open();
            });
    }
);

// SpecialView.run();

$(document).ready(function () {
    $('#example').DataTable({
        "ajax": {
            "url": "http://api/resources/get", "dataSrc": "data"
        },
        "deferRender": true,
        "columns": [
            {data: "region_id"},
            {data: "city_id"},
            {data: "organization_name"},
            {data: "star"},
            {data: "inn"}
        ]
    })
})
var btn = $('#button');

$(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
});

btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
});

