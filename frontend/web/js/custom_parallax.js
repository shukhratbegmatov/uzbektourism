var scene = document.getElementById('scene');
var parallax = new Parallax(scene);
var scene2 = document.getElementById('scene2');
var parallax = new Parallax(scene2);


$(document).ready(function () {
    $(".lightgallery").lightGallery({
        "thumbnail":true
    });
});
$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:5,
                nav:false,
                loop:false
            }
        }
    });
});