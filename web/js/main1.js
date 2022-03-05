// $(document).ready(function(){





$(".multilanguage").children().addClass("left-links");
$(".multilanguage").children().removeAttr("style");
$(".multilanguage").children().children().removeAttr("style");
$(".multilanguage").children().children().first().children().children().after(" <b style='color: #f7f7f7;' class='sansserif'>O'ZBEK</b>").remove(".lang-flag");
$(".multilanguage").children().children().first().next().children().children().after(" <b style='color: #f7f7f7;' class='sansserif'>English</b>").remove(".lang-flag");
// $(".multilanguage").children().children().first().next().next().children().children().after(" <b style='color: #f7f7f7;' class='sansserif'>Ўзбек</b>").remove(".lang-flag");
$(".multilanguage").children().children().first().next().next().hide();
$(".multilanguage").children().children().first().next().next().next().children().children().after(" <b style='color: #f7f7f7;' class='sansserif'>РУССКИЙ</b>").remove(".lang-flag");
// });
$('.dataTables_length').hide();
$('.dataTables_filter').hide();
$( ".learn-more" ).hover(
    function() {
        $(this).find('.iconss').addClass("glyphicon1");
    }, function() {
        $(this).find('.iconss').removeClass("glyphicon1");
    }
);
$(document).ready(function () {
    $('.tab11').children('li').first().children('a').addClass('is-active').next().addClass('is-open').show();
    $('.tab11').on('click', 'li > a', function(event) {
        if (!$(this).hasClass('is-active')) {
            event.preventDefault();
            $('.tab11 .is-open').removeClass('is-open').hide();
            $(this).next().toggleClass('is-open').toggle();
            $('.tab11').find('.is-active').removeClass('is-active');
            $(this).addClass('is-active');
        } else {
            event.preventDefault();
        }
    });
});
$(document).ready(function () {
    $('.tab22').children('li').first().children('a').addClass('is-active').next().addClass('is-open').show();
    $('.tab22').on('click', 'li > a', function(event) {
        if (!$(this).hasClass('is-active')) {
            event.preventDefault();
            $('.tab22 .is-open').removeClass('is-open').hide();
            $(this).next().toggleClass('is-open').toggle();
            $('.tab22').find('.is-active').removeClass('is-active');
            $(this).addClass('is-active');
        } else {
            event.preventDefault();
        }
    });
});
$(document).ready(function () {
    $('.tab44').children('li').first().children('a').addClass('is-active').next().addClass('is-open').show();
    $('.tab44').on('click', 'li > a', function(event) {
        if (!$(this).hasClass('is-active')) {
            event.preventDefault();
            $('.tab44 .is-open').removeClass('is-open').hide();
            $(this).next().toggleClass('is-open').toggle();
            $('.tab44').find('.is-active').removeClass('is-active');
            $(this).addClass('is-active');
        } else {
            event.preventDefault();
        }
    });
});

$(document).ready(function () {
    $('.tab33').children('li').first().children('a').addClass('is-active').next().addClass('is-open').show();
    $('.tab33').on('click', 'li > a', function(event) {
        if (!$(this).hasClass('is-active')) {
            event.preventDefault();
            $('.tab33 .is-open').removeClass('is-open').hide();
            $(this).next().toggleClass('is-open').toggle();
            $('.tab33').find('.is-active').removeClass('is-active');
            $(this).addClass('is-active');
        } else {
            event.preventDefault();
        }
    });
});


$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});


(function ($) {
    "use strict";
    $(window).on('load', function () {
        $('#preloader').fadeOut();
        if (window.screen.width > 768) {
            $(window).on('scroll', function () {
                if ($(window).scrollTop() > 300) {
                    $('.scrolling-navbar').addClass('top-nav-collapse');
                } else {
                    $('.scrolling-navbar').removeClass('top-nav-collapse');
                }
            });
        }
        var wow = new WOW({mobile: false});
        wow.init();
    });
}(jQuery));
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

SpecialView.run();

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

