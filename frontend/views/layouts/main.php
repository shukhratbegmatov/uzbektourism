<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\models\Menu1;
use yii\helpers\Html;
use cinghie\multilanguage\widgets\MultiLanguageWidget;
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
\frontend\assets\OtherAsset::register($this);
$menu =  Menu1::find()->select([ 'id', 'name_'.\Yii::$app->language, 'link', 'parent_id', 'menu_order'])->all();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
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
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=9e8aeb4d-2c44-474f-bad8-7a5d2b6f0db2&lang=ru_RU"
            type="text/javascript">

    </script>
    <!--    <script src="https://kit.fontawesome.com/99c5297f60.js" crossorigin="anonymous"></script>-->
</head>
<style>
.a_href:hover, .a_href1:hover{
    color: white !important;
}
.a_href1{
    font-size: x-large;
}
.sansserif {
    font-family: 'Open Sans', sans-serif !important;
}
.main-content {
    padding-top: 0 !important;
    margin-top: 20px !important;
}
.sansserif {
    font-family: 'Open Sans', sans-serif !important;
}
@media only screen and (min-width: 769px) {
    .news-box{
        padding: 2% 2% 0 2% !important; margin-bottom: 20px;
    }
}
@media only screen and (max-width: 769px) {
    .news-box{
        padding: 15% 10px 0 10px !important; margin-bottom: 20px;
    }
}
.hover_tran:hover{
    transform: translate(12px);
}

.row_lef{
    width: 101%;
}
@media only screen and (max-width: 600px) {
    .row_lef{
        width: 105%;
    }
}
</style>
<script>
    // var myElement = document.getElementById('fontsninja-text-13');
    // myElement.classList.add('sansserif');
</script>
<body style="font-family: 'Open Sans', sans-serif !important;">
<?php $this->beginBody() ?>
<div class="wrapper">
    <div id="preloader">
        <div class="preloader1"></div>
    </div>
    <!--Header Start-->
    <header class="wf100 header-two">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 ">
                        <div class="layout_lang sansserif">
                            <?= MultiLanguageWidget::widget([
                                'addCurrentLang' => true, // add current lang
                                'calling_controller' => $this->context,
                                'image_type'  => 'classic', // classic or rounded
                                'link_home'   => false, // true or false
                                'widget_type' => 'classic', // classic or selector
//            'width'       => '28'
                            ]); ?>
                        </div>
                        <div id="VisualHeader" style="">
                            <div class="vi_panel">
                            <span id="vi-fontsize">
                                <a id="vi-fontsize-smallest" title="Маленький размер шрифта">A</a>
                                <a id="vi-fontsize-small" title="Уменьшенный размер шрифта" class="">A</a>
                                <a id="vi-fontsize-normal" title="Нормальный размер шрифта">A</a>
                                <a id="vi-fontsize-big" title="Увеличенный размер шрифта" class="active">A</a>
                                <a id="vi-fontsize-bigest" title="Большой размер шрифта">A</a></span>
                            <span id="vi-colors">
                                <a id="vi-color1" title="Цветовая схема: Черным по белому" class="">A</a>
                                <a id="vi-color2" title="Цветовая схема: Белым по черному" class="active">A</a>
                                <a id="vi-color3" title="Цветовая схема:  Коричневым по бежевому">А</a>
                            </span>
                            <span id="vi-image">
                                <a id="vi-image1" title="Изображения: Черно-Белое"><img class="vi-nopart" src="data:image/svg+xml;base64,PHN2ZyBmaWxsPSIjOTk5IiBoZWlnaHQ9IjM2IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIzNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4gICAgPHBhdGggZD0iTTAgMGgyNHYyNEgweiIgZmlsbD0ibm9uZSIvPiAgICA8cGF0aCBkPSJNMTkgM0g1Yy0xLjEgMC0yIC45LTIgMnYxNGMwIDEuMS45IDIgMiAyaDE0YzEuMSAwIDItLjkgMi0yVjVjMC0xLjEtLjktMi0yLTJ6bTAgMTZINVY1aDE0djE0em0tNS4wNC02LjcxbC0yLjc1IDMuNTQtMS45Ni0yLjM2TDYuNSAxN2gxMWwtMy41NC00LjcxeiIvPjwvc3ZnPg=="/> </a>
                                <a id="vi-image2" title="Изображения: Включить"><img class="vi-nopart" src="data:image/svg+xml;base64,PHN2ZyBmaWxsPSIjMDAwMDAwIiBoZWlnaHQ9IjM2IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIzNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4gICAgPHBhdGggZD0iTTAgMGgyNHYyNEgweiIgZmlsbD0ibm9uZSIvPiAgICA8cGF0aCBkPSJNMTkgM0g1Yy0xLjEgMC0yIC45LTIgMnYxNGMwIDEuMS45IDIgMiAyaDE0YzEuMSAwIDItLjkgMi0yVjVjMC0xLjEtLjktMi0yLTJ6bTAgMTZINVY1aDE0djE0em0tNS4wNC02LjcxbC0yLjc1IDMuNTQtMS45Ni0yLjM2TDYuNSAxN2gxMWwtMy41NC00LjcxeiIvPjwvc3ZnPg=="/></a>
                                <a id="vi-image3" title="Изображения: Выключить" class="active"><img class="vi-nopart" src="data:image/svg+xml;base64,PHN2ZyBmaWxsPSIjMDAwMDAwIiBoZWlnaHQ9IjM2IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIzNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4gICAgPHBhdGggZD0iTTAgMGgyNHYyNEgweiIgZmlsbD0ibm9uZSIvPiAgICA8cGF0aCBkPSJNMyA1djRoMlY1aDRWM0g1Yy0xLjEgMC0yIC45LTIgMnptMiAxMEgzdjRjMCAxLjEuOSAyIDIgMmg0di0ySDV2LTR6bTE0IDRoLTR2Mmg0YzEuMSAwIDItLjkgMi0ydi00aC0ydjR6bTAtMTZoLTR2Mmg0djRoMlY1YzAtMS4xLS45LTItMi0yeiIvPjwvc3ZnPg=="/></a>
                            </span>
                            <span id="vi-close">
                                <a title="Выход из специального режима" class="active">x</a>
                            </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <ul class="right-links">
                            <li><a class="vi-open"><i class="far fa-eye" title="Режим для слабовидящих" style="font-size: 19px;"></i> </a></li>
                            <li><i class="fas fa-phone"></i> <strong><a class="sansserif" href="#">71 200-00-88 </a></strong></li>
                            <li><a class="sansserif" href="<?=\yii\helpers\Url::to(["/committee/contact"], true)?>"><i class="far fa-user-circle"></i></i> <?=Yii::t('app', "Bog‘lanish")?></a></li>
<!--                            <li><a><img src="" width="30" height="30" alt=""> <strong id="celcium"></strong>°C /<strong id="farangeyt"></strong>°F</a></li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="h3-navbar wf100 fixedElement " style="border-top: 5px solid green;">
            <div class="container">
                <div class=" header-menu row" style="   ">
                    <div class="col-md-4">
                        <div style="display: flex;
                                align-items: center;">
                            <div class="logo">
                                <a href="<?=\yii\helpers\Url::to(["/"], true)?>">
                                    <img height="100" width="100" src="<?=\yii\helpers\Url::to(["../img/gerb.png"], true)?>" alt="">
                                </a>
                            </div>
                            <div class="name">
                                <a href="<?=\yii\helpers\Url::to(["/"], true)?>" >
                                    <p class="sansserif" style="text-align: start"><?= Yii::t('app', "O'zbekiston Respublikasi<br> Turizm va sport vazirligi") ?></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div id="navbar">
                            <nav class="navbar  navbar-fixed-top" role="navigation">
                                <div class=" navbar-collapse" id="navbar-collapse-1">
                                    <ul class="nav navbar-nav" style="margin: -9px!important;">

                                        <?php foreach ($menu as $menus):?>
                                        <?php $menus1 = Menu1::find()->select([ 'name_'.\Yii::$app->language, 'link', 'status',  'menu_order', 'id'])->where(['=', 'parent_id', $menus->id])->andWhere(['status_none'=>1])->all(); ?>
                                        <?php if($menus->menu_order == 1 && $menus->parent_id == 0):?>
                                            <li ><a  class="sansserif" href="<?=\yii\helpers\Url::to(["$menus->link"], true)?>"><?php echo $menus->{'name_'.Yii::$app->language}?></a></li>
                                        <?php endif;?>

                                            <?php if($menus->menu_order == 2 && $menus->parent_id == 0):?>
                                                <li class="dropdown">
                                                    <a class="sansserif" href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $menus->{'name_'.Yii::$app->language}?> <b class="caret"></b></a>

                                                    <ul class="dropdown-menu">
                                                        <?php foreach($menus1 as $menus2):?>
                                                            <?php $menus3 = Menu1::find()->select([ 'name_'.\Yii::$app->language, 'link', 'menu_order', ])->where(['=', 'parent_id', $menus2->id])->andWhere(['status_none'=>1])->all(); ?>
                                                            <?php if (strpos($menus2->link, '://') == true ) { ?>
                                                                <li><a  class="sansserif" target="_blank" href="<?= $menus2->link ?>"><?php echo $menus2->{'name_'.Yii::$app->language} ?></a></li>
                                                            <?php  } elseif ($menus2->menu_order == 2 || $menus2->menu_order == 3){ ?>
                                                            <li class="sansserif" class="<?php if ($menus2->menu_order == 3){echo 'dropdown dropdown-submenu';} ?>">
                                                                <?php $menustatus = $menus2->status == 2 ? $menus2->link.'?id='.$menus2->id : $menus2->link; ?>
                                                                <a class="sansserif" href="<?=\yii\helpers\Url::to(["$menustatus"], true)?>" class="dropdown-toggle" data-toggle="<?php if ($menus2->menu_order == 3){echo 'dropdown';} ?>"><?php echo $menus2->{'name_'.Yii::$app->language};?></a>
                                                                <?php if ($menus2->menu_order == 3): ?>
                                                                    <ul class="dropdown-menu">
                                                                        <?php foreach ($menus3 as $menu4):?>
                                                                            <li><a  class="sansserif" href="<?=\yii\helpers\Url::to(["$menu4->link"], true)?>"><?php echo $menu4->{'name_'.Yii::$app->language}?></a></li>
                                                                        <?php endforeach;?>
                                                                    </ul>
                                                                <?php endif; ?>

                                                            </li>
                                                            <?php } ?>
                                                        <?php endforeach;?>
                                                    </ul>
                                                </li>
                                            <?php endif;?>
                                        <?php endforeach;?>
                                    </ul>
                                </div>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="wf100 subheader">
<!--        <div class="container">-->
            <!--        <h2 class="text-center" style="">--><?//= $this->params['titlebreadcrumbs'] ?><!--</h2>-->
<!--        </div>-->
        <div class="headerss1">

            <div class="info">
                <h1 style="font-weight: 600; font-size: 40px;"><?= $this->params['titlebreadcrumbs'] ?></h1>
            </div>
        </div>
    </section>
    <div class="mobile_scroll " id="mobile_menu">
        <div>
            <a class="mburger mburger--collapse" href="#my-menu">
                <b></b>
                <b></b>
                <b></b>
                <a href="/" >
                    <ul  style="padding-left: 0;display: inline-flex; margin: 5px 0; list-style-type: none" >
                        <li><img src="../../images/gerb.png" alt="" height="58"></li>
                        <li style="    display: flex;
                        justify-items: center;
                        align-items: center;"><h1 class="sansserif mobile-logo-text" style="padding: 0 0 0 20px; color: black; font-size: 16px"><?php echo Yii::t('app',"O'zbekiston Respublikasi<br> Turizm va sport vazirligi"); ?></h1></li>
                    </ul>
                </a>
            </a>
            <nav id="my-menu">
                <ul>
                    <?php echo $this->render('_menu'); ?>
                </ul>
            </nav>
        </div>
    </div>
    <script src="//code-eu1.jivosite.com/widget/hjyXnkPSKY" async></script>
    <div class="container">
        <?= $content ?>
    </div>
    <!-- Start Footer Section-->
    <div class="footer123  fot_buttom footer" style="margin-top: 20px;">
        <div class="contain">
            <div class="">
                <div class="col">
                    <h1 class="sansserif"><?php echo Yii::t('app','Vazirlik'); ?></h1>
                    <ul>
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["committee/aboutus"], true)?>"><?php echo Yii::t('app','Vazifalar va funksiyalar'); ?></a></li>
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["committee/licence"], true)?>"><?php echo Yii::t('app','Litsenziyalash'); ?></a></li>
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["committee/certification"], true)?>"><?php echo Yii::t('app','Sertifikatlash'); ?></a></li>
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["committee/structure"], true)?>"><?php echo Yii::t('app','Vazirlik tarkibi'); ?></a></li>
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["committee/management"], true)?>"><?php echo Yii::t('app','Rahbariyat'); ?></a></li>
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["committee/centr"], true)?>"><?php echo Yii::t('app','Markaziy apparat'); ?></a></li>
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["committee/organizations"], true)?>"><?php echo Yii::t('app','Tizimdagi tashkilotlar'); ?></a></li>
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["service/jobs"], true)?>"><?php echo Yii::t('app','Bo\'sh ish o\'rinlari'); ?></a></li>
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["committee/unwto"], true)?>"><?php echo Yii::t('app','UNWTO haqida'); ?></a></li>
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["committee/tender"], true)?>"><?php echo Yii::t('app','Xaridlar va tenderlar'); ?></a></li>
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["committee/corruption"], true)?>"><?php echo Yii::t('app','Korrupsiyaga qarshi'); ?></a></li>
                    </ul>
                </div>
                <div class="col">
                    <h1 class="sansserif"><?php echo Yii::t('app','Qonunchilik'); ?></h1>
                    <ul>
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["http://lex.uz/docs/35869"], true)?>"><?php echo Yii::t('app','Konstitutsiya'); ?></a></li>
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["legislation/laws"], true)?>"><?php echo Yii::t('app','Qonunlar'); ?></a></li>
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["research/statistics"], true)?>"><?php echo Yii::t('app','Prezidentning farmonlari va qarorlari'); ?></a></li>
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["legislation/decisions"], true)?>"><?php echo Yii::t('app','Hukumat qarorlari'); ?></a></li>
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["legislation/instruction"], true)?>"><?php echo Yii::t('app','Qoida va ko\'rsatmalar'); ?></a></li>
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["legislation/novalid"], true)?>"><?php echo Yii::t('app',"O'z kuchini yo'qotgan qonunchilik hujjatlari"); ?></a></li>
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["legislation/agreements"], true)?>"><?php echo Yii::t('app','Idoralararo bitimlar'); ?></a></li>
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["legislation/intergovernmental"], true)?>"><?php echo Yii::t('app','Hukumatlararo bitimlar'); ?></a></li>

                    </ul>
                </div>
                <div class="col">
                    <h1 class="sansserif"><?php echo Yii::t('app','Xizmatlar'); ?></h1>
                    <ul>
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["https://pm.gov.uz/ru"], true)?>"><?php echo Yii::t('app','Virtual qabulxona'); ?></a></li>
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["service/reporting"], true)?>"><?php echo Yii::t('app','Elektron hisobot'); ?></a></li>
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["service/listofdocuments"], true)?>"><?php echo Yii::t('app','Hujjatlar ro\'yxati'); ?></a></li>
<!--                        <li class="hover_tran"><a class="sansserif a_href" href="--><?//=\yii\helpers\Url::to(["service/registry"], true)?><!--">--><?php //echo Yii::t('app','Litsenziya registratsiyasi'); ?><!--</a></li>-->
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["service/opendata"], true)?>"><?php echo Yii::t('app','Ochiq ma\'lumotlar'); ?></a></li>
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["service/projects"], true)?>"><?php echo Yii::t('app','Loyihalar'); ?></a></a></li>
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["service/youth"], true)?>"><?php echo Yii::t('app','Xaridlar va tenderlar'); ?></a></a></li>
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["committee/spisokgostin"], true)?>"><?php echo Yii::t('app',"Mehmonxonalar ro'yxati"); ?></a></li>



                    </ul>
                </div>
                <div class="col">
                    <h1 class="sansserif"><?php echo Yii::t('app','Tadqiqotlar'); ?></h1>
                    <ul>
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["legislation/resolutions"], true)?>"><?php echo Yii::t('app','Statistika'); ?></a></li>
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["research/survey"], true)?>"><?php echo Yii::t('app','So\'rovnomalar'); ?></a></li>
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["service/konkurs"], true)?>"><?php echo Yii::t('app','Tanlovlar'); ?></a></li>

                    </ul>
                </div>
                <div class="col">
                    <h1 class="sansserif"><?php echo Yii::t('app','Imtiyozlar'); ?></h1>
                    <ul>
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["privileges/wifi"], true)?>"><?php echo Yii::t('app','Wi-Fi hududlar'); ?></a></li>
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["privileges/toilet"], true)?>"><?php echo Yii::t('app','Gigiyenik tarmoqlar'); ?></a></li>
                        <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["privileges/hotels"], true)?>"><?php echo Yii::t('app','Mehmonxonalar'); ?></a></li>
<!--                        <li class="hover_tran"><a class="sansserif a_href" href="--><?//=\yii\helpers\Url::to(["committee/reestrguest"], true)?><!--">--><?php //echo Yii::t('app','Mehmonxonalar'); ?><!--</a></li>-->
                    </ul>
                </div>
            </div>

        </div>
        <div class="">
            <div class="clearfix"></div>
            <div class="row row_lef" style="background-color: #003063db;padding-bottom: 20px;">
                <div class="col-sm-4 text-center">
                    <p class=" sansserif" style="color: white"><img style="padding: 14px 7px 14px 14px;  width: 160px;height: auto;" src="<?=\yii\helpers\Url::to(["../images/uzlogo_white.png"], true)?>" alt="logo_PR" class="img-fluid"></p>
                </div>
                <div class="col-sm-4 text-center">
                    <p class=" sansserif" style="color: white; margin-top: 17px; font-size: 14px"><?php echo Yii::t('app',"O'ZBEKISTON RESPUBLIKASI TURIZM VA SPORT VAZIRLIGI</br>Manzil: Amir Temur shox ko'chasi, 107B-uy"); ?></p>
                </div>
                <div class="col-sm-4 text-center"  style="">
                    <div class="wrp">
                        <a style="color: #ffffff;" class="icon icon-twitter"    href="https://t.me/uzbektourismofficial"><i class="a_href1 fab fa-telegram-plane"></i></a>
                        <a style="color: #ffffff;" class="icon icon-instagram"  href="https://www.instagram.com/uzbektourism_official/?hl=ru"><i class="a_href1 fab fa-instagram"></i> </a>
                        <a style="color: #ffffff;" class="icon icon-gplus"      href="https://www.youtube.com/channel/UCilhbsbhiXgTjQjpw7DATgQ"><i class="a_href1 fab fa-youtube"></i></a>
                        <a style="color: #ffffff;" class="icon icon-facebook"   href="https://www.facebook.com/uzbektourism.uz/"><i class="a_href1 fab fa-facebook-f"></i></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
