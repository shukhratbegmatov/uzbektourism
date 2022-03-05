<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'admin/https://designreset.com/cork/ltr/demo6/assets/img/favicon.ico',
        'admin/https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap',
        'admin/bootstrap/css/bootstrap.min.css',
        'admin/assets/css/plugins.css',
        'admin/plugins/table/datatable/datatables.css',
        'admin/plugins/plugins/table/datatable/dt-global_style.css',
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'

    ];
    public $js = [
        'admin/assets/js/libs/jquery-3.1.1.min.js',
        'admin/bootstrap/js/popper.min.js',
        'admin/bootstrap/js/bootstrap.min.js',
        'admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js',
        'admin/assets/js/app.js',
        'admin/assets/js/main.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
