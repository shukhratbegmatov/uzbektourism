<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [

    'language'   => 'en',
    'sourceLanguage' => 'en_GB',
    'homeUrl' => '/admin/4D24A94C78C98DB9',
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
//    'defaultRoute'=>'',
//    'catchAll'=>['admin/4D24A94C78C98DB9/site/login'],
    'components' => [

        'request' => [
            'enableCsrfValidation'=>false,
            'baseUrl' => '/admin/4D24A94C78C98DB9',
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'recaptchaV3' => [
            'class' => 'Baha2Odeh\RecaptchaV3\RecaptchaV3',
            'site_key' => '6LfCC7MUAAAAAHGWCzo5V1cZEOUiMh4tDW7TEn_G',
            'secret_key' => '6LfCC7MUAAAAAMKbRjkbESqCKnGgh_RjunShjfBM',
            'verify_ssl' => true, // default is true
        ],
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@frontend/messages',
                    'sourceLanguage' => 'uz-UZ',
                    'fileMap' => [
                        'app' => 'app.php',
                        'recaptchav3' => 'recaptchav3.php',
                    ],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],


        'urlManager' => [
            'class' => 'codemix\localeurls\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'backend/web' => '/',
                '<controller:\w+>/<action:\w+>/' => '<controller>/<action>',
            ],
            'languages' => ['en', 'ru', 'uz'],
        ],
        'Datacreate'=>[
            'class'=>'backend\components\Datacreate'
        ]
    ],
    'controllerMap' => [
        'elfinder' => [
            'class' => 'mihaildev\elfinder\PathController',
            'access' => ['@'],
            'root' => [
                'path' => '', //path in ftp path (real path will be  /public_html/test/, real Url will be http://domain.com/test/)
                'baseUrl'=>'/uploads/images',
                'basePath'=>'@frontend/web/uploads/images/',
            ],
//            'watermark' => [
//                'source'         => __DIR__.'/logo.png', // Path to Water mark image
//                'marginRight'    => 5,          // Margin right pixel
//                'marginBottom'   => 5,          // Margin bottom pixel
//                'quality'        => 95,         // JPEG image save quality
//                'transparency'   => 70,         // Water mark image transparency ( other than PNG )
//                'targetType'     => IMG_GIF|IMG_JPG|IMG_PNG|IMG_WBMP, // Target image formats ( bit-field )
//                'targetMinPixel' => 200         // Target image minimum pixel size
//            ]
        ]
    ],
    'params' => $params,

];
