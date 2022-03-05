<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class OtherAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap3.min.css',
        'css/plugins.css',
        'css/main.css',
        'css/mmenu.css',
        'css/mburger.css',
        'css/site.css',
        'css/site1.min.css',
        'css/all.css',
        'css/custom.css',
        'css/fontawesome.min.css',
        'css/prettyPhoto.css',
        'css/data.table.css',
        'map_tour/css/jquery.scrollbar.css',
        'map_tour/css/style.css',
        'css/fonts.css',
    ];
    public $js = [
        'js/jquery-3.4.1.min.js',
        'js/plugins.js',

        'js/popper.min.js',
        'js/bootstrap.min.js',
        'js/jquery.slicknav.js',
        'js/data.table.js',
        'js/wow.js',
        'js/mburger.js',
        'js/mmenu.js',
        'js/specialview.js',
        'js/main1.js',

    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
