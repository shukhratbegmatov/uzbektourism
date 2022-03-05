<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;
use common\models\Hackers;
$url = Yii::$app->request->url;
$lang = Yii::$app->language;
$hak = Hackers::find()->where(['ip' => Yii::$app->request->userIP])->count();
//if ($hak >= 4){
//    Yii::$app->response->redirect(Url::to(['/site/detected']));
//}
//if(preg_match('/(php)/i', $url) || preg_match('/(script)/i', $url)){
//    \frontend\controllers\SiteController::addHacker(Yii::$app->request->url);
//}
AppAsset::register($this);
?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= $lang ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?=\yii\helpers\Url::to(["../images/gerb1.png"], true)?>"  rel="icon">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?=  Html::encode(Yii::t('app', "O'ZBEKISTON RESPUBLIKASI TURIZM VA SPORT VAZIRLIGI")) ?></title>
        <meta property="og:title" content="<?=  Html::encode(Yii::t('app', "O'ZBEKISTON RESPUBLIKASI TURIZM VA SPORT VAZIRLIGI")) ?>">
        <meta property="og:type" content="article">
        <meta property="og:url" content="https://uzbektourism.uz/">
        <meta property="og:description" content="<?=  Html::encode(Yii::t('app', "O'ZBEKISTON RESPUBLIKASI TURIZM VA SPORT VAZIRLIGINING RASMIY VEB-SAYTI")) ?>">
        <?php $this->head() ?>
<!--        <script src="https://api-maps.yandex.ru/2.1/?apikey=9e8aeb4d-2c44-474f-bad8-7a5d2b6f0db2&lang=ru_RU" type="text/javascript"></script>-->
<!--        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">-->
    </head>
    <body>
    <?php $this->beginBody() ?>
    <div id="preloader">
        <div class="preloader1"></div>
    </div>
    <script src="//code-eu1.jivosite.com/widget/hjyXnkPSKY" async></script>
    <?= $content ?>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>


<style>

</style>
