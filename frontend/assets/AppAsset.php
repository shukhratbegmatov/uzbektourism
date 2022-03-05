<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/plugins.css',
        'css/styles.css',
        'css/style.css',
        'css/color/style10.css',
        'css/main.css',
        'css/mmenu.css',
        'css/mburger.css',
        'css/lightgallery.css',
        'css/fonts.css',

//        map
        'map_tour/css/jquery.scrollbar.css',
        'map_tour/css/jqvmap.css',
        'map_tour/css/style.css',
        'map_tour/css/map_popup.css',
    ];
    public $js = [
        'js/plugins.js',

        'js/popper.min.js',
        'js/bootstrap.min.js',
        'js/jquery.slicknav.js',
//        map
        'map_tour/js/jquery.vmap.js',
        'map_tour/js/map.js',
        'map_tour/js/vmap.uzbekistan.js',
//        endmap

        'js/wow.js',
        'js/parallax.js',
        'js/mburger.js',
        'js/min/contact-form-min.js',
        'js/min/main-min.js',
//        'js/min/maps-min.js',
        'js/mmenu.js',
        'js/lightgallery.js',
        'js/jquery.mousewheel.js',
        'js/main.js',
        'js/custom_parallax.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
