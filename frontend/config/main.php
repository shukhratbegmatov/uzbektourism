<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'language'   => 'uz',
    'sourceLanguage' => 'uz_UZ',
//    'modules' => [
//        'gii' => [
//            'class' => 'yii\gii\Module',
//            'allowedIPs' => ['*']
//        ],
//    ],
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',

    'components' => [
        'request' => [
            'baseUrl' => '',
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
//        'mailer' => [
//            'class' => 'yii\swiftmailer\Mailer',
//            'useFileTransport' => false,
//            'transport' => [
//                'class' => 'Swift_SmtpTransport',
//                'host' => 'mail.uzbektourism.uz',  // e.g. smtp.mandrillapp.com or smtp.gmail.com
//                'username' => 'errors@uzbektourism.uz',
//                'password' => '23sdf78bn',
//                'port' => '587', // Port 25 is a very common port too
////                'encryption' => 'ssl', // It is often used, check your provider or mail server specs
//            ],
//        ],


        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'mail.uzbektourism.uz',  // e.g. smtp.mandrillapp.com or smtp.gmail.com
                'username' => 'errors@uzbektourism.uz',
                'password' => '23sdf78bn',
                'port' => '587', // Port 25 is a very common port too
//                'encryption' => 'ssl', // It is often used, check your provider or mail server specs
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
            'errorAction' => 'site/errors',
        ],

        'urlManager' => [
            'class' => 'codemix\localeurls\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableLanguagePersistence' => false,
            'enableLanguageDetection' => false,
            'languages' => ['uz', 'en', 'cyrl1', 'ru'],
        ],
        'MyComponent'=>[
            'class'=>'frontend\components\MyComponent'
        ]



    ],
    'params' => $params,
];
