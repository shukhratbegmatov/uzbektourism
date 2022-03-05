<?php


namespace backend\assets;


class UserAsset
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://designreset.com/cork/ltr/demo6/assets/img/favicon.ico',
        'https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap',
        'admin/bootstrap/css/bootstrap.min.css',
        'admin/assets/css/plugins.css',
        'admin/assets/css/authentication/form-2.css',
        'admin/assets/css/forms/theme-checkbox-radio.css',
        'admin/assets/css/forms/switches.css',
    ];
    public $js = [
        'admin/assets/js/libs/jquery-3.1.1.min.js',
        'admin/bootstrap/js/popper.min.js',
        'admin/bootstrap/js/bootstrap.min.js',
        'admin/assets/js/authentication/form-2.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];

    public static function register(\yii\web\View $param)
    {
    }
}