


<?php

/* @var $this yii\web\View */
use cinghie\multilanguage\widgets\MultiLanguageWidget;
$lang = Yii::$app->language;
if ($lang == 'uz'){
    $lang_1 = 'uz';
    $lang_2 = 'en';
    $lang_3 = 'ru';
    $lang_4 = 'cyrl';
}elseif ($lang == 'en'){
    $lang_1 = 'en';
    $lang_2 = 'uz';
    $lang_3 = 'ru';
    $lang_4 = 'cyrl';
}elseif ($lang == 'ru'){
    $lang_1 = 'ru';
    $lang_2 = 'uz';
    $lang_3 = 'en';
    $lang_4 = 'cyrl';
}elseif ($lang == 'cyrl'){
    $lang_1 = 'cyrl';
    $lang_2 = 'uz';
    $lang_3 = 'en';
    $lang_4 = 'ru';
}

$langcurl1 = $lang_1 == 'cyrl' ? 'ўз' : $lang_1;
$langcurl2 = $lang_2 == 'cyrl' ? 'ўз' : $lang_2;
$langcurl3 = $lang_3 == 'cyrl' ? 'ўз' : $lang_3;
$langcurl4 = $lang_4 == 'cyrl' ? 'ўз' : $lang_4;
use common\models\Menu1;
use yii\helpers\Url;
$this->title = 'Государственный комитет республики узбекистан по развитию туризма';
?>
<style type="text/css">
    .content {
        width: 77%;
        margin: 50px auto;
        font-family: 'Merriweather', serif;
        font-size: 17px;
        color: #6c767a;
        line-height: 1.9;
    }
    @media (min-width: 500px) {
        .content {
            width: 43%;
        }
        #button {
            margin: 30px;
        }
    }

    @media (max-width: 700px) {
        .mediya_none{
            display: none;
        }
    }
    @media (min-width: 700px) {
        .mediya_black{
            display: none;
        }
    }
</style>
<a id="button"></a>
<div class="left_sticky">
    <div class="sticky_content">
        <div class="multilanguage">
            <ul>
                <li><a class="active" href="<?=\yii\helpers\Url::to(['/', 'language' => $lang_1], true)?>" style="text-decoration: none;"><b style="color: #f7f7f7; text-transform:uppercase;"><?=$langcurl1;?></b></a></li>
                <li><a class="active" href="<?=\yii\helpers\Url::to(['/', 'language' => $lang_2], true)?>" style="text-decoration: none;"><b style="color: #f7f7f7; text-transform:uppercase;"><?=$langcurl2;?></b></a></li>
                <li><a class="active" href="<?=\yii\helpers\Url::to(['/', 'language' => $lang_3], true)?>" style="text-decoration: none;"><b style="color: #f7f7f7; text-transform:uppercase;"><?=$langcurl3;?></b></a></li>
<!--                <li><a class="active" href="--><?//=\yii\helpers\Url::to(['/', 'language' => $lang_4], true)?><!--" style="text-decoration: none;"><b style="color: #f7f7f7; text-transform:uppercase;">--><?//=$langcurl4;?><!--</b></a></li>-->
            </ul>
        </div>
    </div>
</div>
<div id="parallax-bg">
    <div id="overlay"></div>
    <div class="parallax-bg">
        <ul id="scene">
            <li class="layer" data-depth-x="0.03"><img src="<?=\yii\helpers\Url::to(["../images/parallax/bulut.png"], true)?>"></li>
            <li class="layer" data-depth-x="-0.05" data-depth-y="0.2"><img src="<?=\yii\helpers\Url::to(["../images/parallax/baloon.png"], true)?>"></li>
            <li class="layer" data-depth-x="0.05" data-depth-y="-0.2"><img src="<?=\yii\helpers\Url::to(["../images/parallax/baloon1.png"], true)?>"></li>
            <li class="layer" data-depth-x="0.03"><img class="lagan" src="<?=\yii\helpers\Url::to(["../images/parallax/plov.png"], true)?>"></li>
        </ul>
    </div>
<!--    <div class="parallax-text">-->
<!--        <ul id="scene2">-->
<!--            <li class="layer" data-depth="-0.1">-->
<!--                --><?php //if ($lang == 'uz'):?>
<!--                <img class="logo-text-uz" style="margin-top: 10em; padding: 0 162px;"  src="--><?//=\yii\helpers\Url::to(["../images/parallax/Logo_uz.png"], true)?><!--">-->
<!--                --><?php //elseif ($lang == 'en'): ?>
<!--                <img class="logo-text-en" style="margin-top: 10em; padding: 0 162px;"  src="--><?//=\yii\helpers\Url::to(["../images/parallax/Logo_en.png"], true)?><!--">-->
<!--                --><?php //else: ?>
<!--                <img class="logo-text-ru" style="margin-top: 10em; padding: 0 162px;"  src="--><?//=\yii\helpers\Url::to(["../images/parallax/Logo_ru.png"], true)?><!--">-->
<!--                --><?php //endif; ?>
<!--            </li>-->
<!--        </ul>-->
<!--    </div>-->
</div>
<div id="main_header">
    <div class="header">
        <div style="display: flex; flex-direction: row; justify-content: center; align-items: center;">
            <p class="header__logo"><img class="img-fluid logo-media" id="logo-media" style="" src="<?=\yii\helpers\Url::to(["../images/uzlogo_white.png"], true)?>" alt="logo_PR" ></p>
            <p class="sansserif logo-text" style="padding-left: 7px; line-height: 20px; font-size: 18px; margin-bottom: 0px; border-left: 2px solid white; cursor: pointer"><?php echo Yii::t('app',"O'zbekiston Respublikasi<br> Turizm va sport vazirligi"); ?></p>
        </div>

        <div>
            <nav>
                <ul class="header__menu">
                    <?php foreach ($menu as $menus):?>
                        <?php $menus1 = Menu1::find()->select([ 'name_'.\Yii::$app->language, 'link', 'status',  'menu_order', 'id'])->where(['=', 'parent_id', $menus->id])->andWhere(['status_none'=>1])->all(); ?>
                        <?php if($menus->menu_order == 1 && $menus->parent_id == 0):?>
                            <li><a class="sansserif" href="<?=\yii\helpers\Url::to(["$menus->link"], true)?>"><?php echo $menus->{'name_'.Yii::$app->language}?></a></li>
                        <?php endif;?>
                        <?php if($menus->menu_order == 2 && $menus->parent_id == 0):?>
                            <li>
                                <a class="sansserif"><?php echo $menus->{'name_'.Yii::$app->language}?></a>
                                <ul class="header__sub1">
                                    <?php foreach($menus1 as $menus2):?>
                                        <?php $menus3 = Menu1::find()->select([ 'name_'.\Yii::$app->language, 'link', 'menu_order', ])->where(['=', 'parent_id', $menus2->id])->andWhere(['status_none'=>1])->all(); ?>
                                        <?php if (strpos($menus2->link, '://') == true ) { ?>
                                        <li><a class="sansserif"  target="_blank" href="<?= $menus2->link ?>"><?php echo $menus2->{'name_'.Yii::$app->language} ?></a></li>
                                        <?php  } elseif ($menus2->menu_order == 2 || $menus2->menu_order == 3){ ?>
                                            <?php $menustatus = $menus2->status == 2 ? $menus2->link.'?id='.$menus2->id : $menus2->link; ?>
                                            <li><a class="sansserif" href="<?=\yii\helpers\Url::to(["$menustatus"], true)?>"><?php echo $menus2->{'name_'.Yii::$app->language};?></a>
                                            <ul class="<?php if ($menus2->menu_order == 3){echo 'header__sub2';} ?>" style="line-height: 1px!important;">
                                                <?php if ($menus2->menu_order == 3): ?>
                                                    <?php foreach ($menus3 as $menu4):?>
                                                        <li><a class="sansserif"  href="<?=\yii\helpers\Url::to(["$menu4->link.$menu4->id"], true)?>"><?php echo $menu4->{'name_'.Yii::$app->language}?></a></li>
                                                    <?php endforeach;?>
                                                <?php endif; ?>
                                            </ul>
                                        </li>
                                        <?php } ?>
                                    <?php endforeach;?>
                                </ul>
                            </li>
                        <?php endif;?>
                    <?php endforeach;?>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div class="mobile_scroll sansserif" id="mobile_menu">
    <div>
        <a class="mburger mburger--collapse" href="#my-menu">
            <b></b>
            <b></b>
            <b></b>
        </a><a href="/">
            <ul style="padding-left: 0;display: inline-flex; margin: 5px 0;">
                <li><img src="../../images/gerb.png" alt="" height="58"></li>
                <li style="display: flex; align-items: center;"><h1 class="sansserif mobile-logo-text" style="padding: 0 0 0 20px; color: black; font-size: 16px"><?php echo Yii::t('app',"O'zbekiston Respublikasi<br> Turizm va sport vazirligi"); ?></h1></li>
            </ul>
        </a>


        <!--original menu location-->
        <nav id="my-menu" class="mm-spn--light mm-spn--navbar mm-spn--main" data-mm-spn-title="Меню">
            <ul class="mm-spn--open">
                <?php echo $this->render('../layouts/_menu'); ?>
            </ul>
        </nav>
    </div>

</div>

<!-- Start News Section-->
<section id="news" data-scroll-index="5" class="main-section center-align " style="
background-size: cover;
background-image: url('https://new.uzbektourism.uz/frontend/web/5.png')">

    <div class="container">

        <!--Title-->
        <h4 style="z-index: 4"  class="reflection-text p-b-2 text-bold"><a class=" sansserif" href="<?=\yii\helpers\Url::to(['/news'], true)?>"><?= Yii::t('app', 'Yangiliklar') ?></a></h4>


        <div class="p-t-2 grid center-align owl-carousel owl-news">
            <?php foreach ($model as $news): ?>


                <div class="single-news">
                    <!-- Link to the blog news post -->
                    <a href="<?=\yii\helpers\Url::to(['news/view?id='.$news->id], true)?>">
                        <figure>
                            <!-- Post Image -->
                            <img class="responsive-img" src="<?=\yii\helpers\Url::to(["../uploads/images/$news->image"], true)?>" alt="news image">
                            <figcaption>
                                <span class="overlay gradient-color"></span>
                                <span class="stats">
                                <span class="search">
                                    <i class="fa fa-search"></i>
                                </span>
                                <span class="icons">
                                    <!--Post Views Count-->
                                    <i class="fa fa-eye" aria-hidden="true"></i><?= $news->viewed ?>
                                </span>
                            </span>
                            </figcaption>
                        </figure>
                    </a>
                    <div class="info p-b-1" style="">

                        <!-- Post Title -->
                        <a href="<?=\yii\helpers\Url::to(['news/view?id='.$news->id], true)?>">
                            <!--                        <h5>-->
                            <? //= mb_substr($news->{'title_'.$lang},0,50) ?><!--</h5>-->
                            <h5 class="sansserif " style="color: #6c757d;"><?= \yii\helpers\StringHelper::truncate($news->{'title_' . $lang}, 97,' ...' ); ?></h5>

                        </a>
                        <!-- Post Excerpt -->
                        <p class="p-b-1  sansserif"><?= \yii\helpers\StringHelper::truncate($news->{'desc_' . $lang}, 97,' ...' ); ?></p>
                        <!-- Post Link -->
                        <p >
                            <!-- Post Date -->
                            <span>
                            <i class="fa fa-calendar gradient-color" aria-hidden="true"></i>
                            <span class="sansserif"><?= $news->date ?></span>
                                <!--                            24 Oct. 1988-->
                        </span>
                        </p>
                        <div class="button_news" style="position: absolute;bottom: 0;">
                            <a  class="hov1 sansserif" href="<?=\yii\helpers\Url::to(['news/view?id='.$news->id], true)?>"><?= Yii::t('app', 'Batafsil') ?></a>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>


        </div>

    </div>

</section>
<!-- End News Section-->

<!-- Start Features Section-->
<section id="features" data-scroll-index="1" class="main-section center-align">

    <div class="gradient-color overlay"></div>

    <div class="container">

        <!--Title-->
        <h4 class="reflection-text reflection-text-white p-b-2 sansserif sansserif"><a href="#"><?= Yii::t('app', 'Interaktiv xizmatlar') ?></a></h4>

        <div class="row p-t-2">

            <div class="col col-xs-12 s12 m12 l4 p-tb-1 feature-left">

                <div class="single-feature p-tb-2">

                    <a class="hoverable feature-link same-height active" data-owl-item="0">

                        <!--Title -->
                        <div>
                            <h5 class="sansserif">«E-mehmon»</h5>
                            <p class="sansserif"><?= Yii::t('app', 'Mehmonxona va boshqa joylashtirish vositalarida yashovchilarning hisobini yuritish uchun mo‘ljallangan maxsus elektron avtomatlashtirilgan dastur') ?></p>
                        </div>

                        <!-- Icon -->
                        <div>
                            <i class="fa fa-suitcase waves-effect waves-light" aria-hidden="true"></i>
                        </div>

                    </a>

                </div>

                <div class="single-feature p-tb-2">

                    <a class="hoverable feature-link same-height" data-owl-item="1">

                        <!-- Title -->
                        <div>
                            <h5 class="sansserif"><?= Yii::t('app', 'Gidlar reyestri') ?></h5>
                            <p class="sansserif"><?= Yii::t('app', "Gid-ekskursiya yetakchilari Yagona elektron reyestri"); ?></p>
                        </div>

                        <!-- Icon -->
                        <div>

                            <i class="fa  fa-id-card-o waves-effect waves-light" aria-hidden="true"></i>

                        </div>

                    </a>

                </div>

                <div class="single-feature p-tb-2">

                    <a class="hoverable feature-link same-height" data-owl-item="2">

                        <!-- Title -->
                        <div>
                            <h5 class="sansserif"><?= Yii::t('app', 'Litsenziya olish') ?></h5>
                            <p class="sansserif"><?= Yii::t('app', 'Turizm faoliyatini amalga oshirish uchun yangi litsenziya olish') ?></p>
                        </div>

                        <!-- Icon-->
                        <div>
                            <i class="fa fa-globe waves-effect waves-light" aria-hidden="true"></i>
                        </div>

                    </a>

                </div>

            </div>

            <div class="col  images-slider">

                <!--Features Images-->
                <div class="owl-carousel owl-features">

                    <div>
                        <a href="https://emehmon.uz/" target="_blank">
                            <img class="responsive-img" src="<?=\yii\helpers\Url::to(["../img/interaktiv/emehmon.png"], true)?>" alt="image of the iPhone app">
                        </a>
                    </div>

                    <div>
                        <a href="<?=\yii\helpers\Url::to(["/committee/guides"], true)?>">
                            <img class="responsive-img" src="<?=\yii\helpers\Url::to(["../img/interaktiv/litsenziya.png"], true)?>"
                                 alt="image of the iPhone app">
                        </a>
                    </div>

                    <div>
                        <a href="https://my.gov.uz/oz/license-of-tourism-activities-v1/passport" target="_blank">
                            <img class="responsive-img" src="<?=\yii\helpers\Url::to(["../img/interaktiv/my_gov.png"], true)?>" alt="image of the iPhone app">
                        </a>
                    </div>

                    <div>
                        <a href="<?=\yii\helpers\Url::to(["/service/reporting"], true)?>">
                            <img class="responsive-img" src="<?=\yii\helpers\Url::to(["../img/interaktiv/sayyoh.png"], true)?>" alt="image of the iPhone app">
                        </a>
                    </div>

                    <div>
                        <a href="<?=\yii\helpers\Url::to(["/committee/certification"], true)?>">
                            <img class="responsive-img" src="<?=\yii\helpers\Url::to(["../img/interaktiv/sert.png"], true)?>" alt="image of the iPhone app">
                        </a>
                    </div>

                    <div>
                        <a href="<?=\yii\helpers\Url::to(["committee/spisokgostin"], true)?>">
                            <img class="responsive-img" src="<?=\yii\helpers\Url::to(["../img/interaktiv/sredstva_razmesheniya.png"], true)?>"
                                 alt="image of the iPhone app">
                        </a>
                    </div>

                </div>

            </div>
            <div class="col s12 m12 l4 p-tb-1 feature-right">

                <div class="single-feature p-tb-2">

                    <a class="hoverable feature-link same-height" data-owl-item="5">

                        <!-- Icon -->
                        <div>
                            <i class="fa fa-bed waves-effect waves-light" aria-hidden="true"></i>
                        </div>

                        <div>

                            <!-- Title -->
                            <h5 class="sansserif"><?= Yii::t('app', 'Joylashtirish vositalarining reyestri') ?></h5>
                            <p class="sansserif"><?= Yii::t('app', 'Respublika joylashtirish vositalarining yagona reyestri') ?> </p>

                        </div>

                    </a>

                </div>

                <div class="single-feature p-tb-2">
                    <a class="hoverable feature-link same-height" data-owl-item="4">

                        <!-- Icon -->
                        <div>
                            <i class="fa fa-code waves-effect waves-light" aria-hidden="true"></i>
                        </div>

                        <div>

                            <!-- Title -->
                            <h5 class="sansserif"><?= Yii::t('app', 'Sertifikatlash') ?></h5>
                            <p class="sansserif"><?= Yii::t('app', 'Turoperator va mehmonxona xizmatlarini sertifikatlashtirish tartibi') ?></p>

                        </div>

                    </a>

                </div>

                <div class="single-feature p-tb-2">

                    <a class="hoverable feature-link same-height" data-owl-item="3">

                        <!-- Icon -->
                        <div>
                            <i class="fa fa-plane waves-effect waves-light" aria-hidden="true"></i>
                        </div>

                        <div>

                            <!-- Title -->
                            <h5 class="sansserif"><?= Yii::t('app', 'Sayyoh') ?></h5>
                            <p class="sansserif"><?= Yii::t('app', 'Elektron hisobot') ?></p>

                        </div>
                    </a>
                </div>

            </div>

        </div>

    </div>

</section>
<!-- End Features Section-->

<!--Start photo gallery-->
<section data-scroll-index="7" class="main-section" style="background-size: cover; background-image: url(https://new.uzbektourism.uz/frontend/web/5.png);">

    <div class="container">

        <!--Title-->
        <h4 class="reflection-text p-b-2"><a class="sansserif"  style="color: #0a5eb0;" href="<?=\yii\helpers\Url::to(["/committee/galereya"], true)?>"><?= Yii::t('app', 'media baza') ?></a></h4>
        <div class="row mediya_none">
            <div class="col-sm-6">
                <div class="text-center galler reflection-text p-b-2">
                    <a class="sansserif"  style="color: #0a5eb0;" href="<?=\yii\helpers\Url::to(["/committee/galereya"], true)?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16">
                        <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/>
                        <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                    </svg>
                        <?= Yii::t('app', 'Rasmlar') ?>
                    </a>
                </div>
                <div class="slider">
                    <div class="slide-track">
                        <div class="slide">
                            <img class="slader_images" src="<?=\yii\helpers\Url::to(["../img_conv/1614145445597min.jpg"], true)?>"  alt="" />
                        </div>
                        <div class="slide">
                            <img class="slader_images" src="<?=\yii\helpers\Url::to(["../img_conv/1614147408840min.jpg"], true)?>"  alt="" />
                        </div>
                        <div class="slide">
                            <img class="slader_images" src="<?=\yii\helpers\Url::to(["../img_conv/1614147264572min.jpg"], true)?>"  alt="" />
                        </div>
                        <div class="slide">
                            <img class="slader_images" src="<?=\yii\helpers\Url::to(["../img_conv/1614141542902min.jpg"], true)?>"  alt="" />
                        </div>
                        <div class="slide">
                            <img class="slader_images" src="<?=\yii\helpers\Url::to(["../img_conv/1614141570190min.jpg"], true)?>"  alt="" />
                        </div>
                        <div class="slide">
                            <img class="slader_images" src="<?=\yii\helpers\Url::to(["../img_conv/1614145058231min.jpg"], true)?>"  alt="" />
                        </div>
                        <div class="slide">
                            <img class="slader_images" src="<?=\yii\helpers\Url::to(["../img_conv/1614146706146min.jpg"], true)?>"  alt="" />
                        </div>
                        <div class="slide">
                            <img class="slader_images" src="<?=\yii\helpers\Url::to(["../img_conv/1614146316305min.jpg"], true)?>"  alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="text-center galler reflection-text p-b-2">
                    <a class="sansserif"  style="color: #0a5eb0;" href="<?=\yii\helpers\Url::to(["/committee/video"], true)?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-collection-play" viewBox="0 0 16 16">
                        <path d="M2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3zm2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1zm2.765 5.576A.5.5 0 0 0 6 7v5a.5.5 0 0 0 .765.424l4-2.5a.5.5 0 0 0 0-.848l-4-2.5z"/>
                        <path d="M1.5 14.5A1.5 1.5 0 0 1 0 13V6a1.5 1.5 0 0 1 1.5-1.5h13A1.5 1.5 0 0 1 16 6v7a1.5 1.5 0 0 1-1.5 1.5h-13zm13-1a.5.5 0 0 0 .5-.5V6a.5.5 0 0 0-.5-.5h-13A.5.5 0 0 0 1 6v7a.5.5 0 0 0 .5.5h13z"/>
                    </svg>
                        <?= Yii::t('app', 'Videolar') ?>
                    </a>
                </div>
                <div class="">
                    <div class="">
                        <div class="">
                            <div id="random_number1" class="carousel slide youtube-carousel"  data-ride="carousel" data-interval="false">
                                <div class="carousel-inner">
                                    <div class="video-container item active">
                                        <div class="youtube-video" id=''>
<!--                                            <iframe width="100%" height="200" src="https://www.youtube.com/embed/f6DRqbhXbWU" frameborder="0" ></iframe>-->
                                            <video controls style="width: 100%; height: auto">
                                                <source src="<?=\yii\helpers\Url::to(["../../gallery/hd/tourism_video.mp4"], true)?>" type="video/mp4">
                                                <source src="<?=\yii\helpers\Url::to(["../../gallery/hd/tourism_video.mp4"], true)?>" type="video/ogg">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <?php if(Yii::$app->language == 'uz'): ?>
                    <a target="_blank" href="https://cloud.mail.ru/public/6hvZ/Ug7zVStbi"><img class="slader_images" style="width: 100%; height: 100%;" src="<?=\yii\helpers\Url::to(["../img_conv/1hls_banner_uz.png"], true)?>"  alt="" /></a>
                <?php else: ?>
                    <a target="_blank" href="https://cloud.mail.ru/public/6hvZ/Ug7zVStbi"><img class="slader_images" style="width: 100%; height: 100%;" src="<?=\yii\helpers\Url::to(["../img_conv/1hls_banner.png"], true)?>"  alt="" /></a>
                <?php endif;?>
            </div>
        </div>
        <div class="mediya_black" style="text-align: center">
            <a href="<?=\yii\helpers\Url::to(["/committee/galereya"], true)?>">


                <svg style="width: 141px;" version="1.1" id="Capa_1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 410.309 410.309" style="enable-background:new 0 0 410.309 410.309;" xml:space="preserve">
<g>
    <g>
        <path style="fill:#00ACEA;" d="M382.955,58.96c16.936,2.176,29.014,17.507,27.167,34.482L386.09,306.079
			c-1.848,16.923-17.066,29.144-33.989,27.295c-0.339-0.037-0.677-0.08-1.015-0.128h-1.567V138.372
			c0-17.312-14.035-31.347-31.347-31.347H56.947l5.747-52.245c2.179-17.223,17.742-29.535,35.004-27.69L382.955,58.96z"/>
        <path style="fill:#00CEB4;" d="M349.518,333.246v18.808c0,17.312-14.035,31.347-31.347,31.347H31.347
			C14.035,383.401,0,369.366,0,352.054v-43.886l86.204-62.694c13.668-10.37,32.794-9.491,45.453,2.09l57.469,50.155
			c12.046,10.215,29.238,11.683,42.841,3.657l117.551-68.963V333.246z"/>
        <path style="fill:#00EFD1;" d="M349.518,138.372v94.041l-117.551,68.963c-13.603,8.026-30.795,6.558-42.841-3.657l-57.469-50.155
			c-12.659-11.58-31.785-12.46-45.453-2.09L0,308.168V138.372c0-17.312,14.035-31.347,31.347-31.347h286.824
			C335.484,107.026,349.518,121.06,349.518,138.372z"/>
    </g>
    <circle style="fill:#D4E1F4;" cx="208.98" cy="192.707" r="33.437"/>
</g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
</svg>
            </a>
        </div>
    </div>
</section>
<!--End photo gallery-->

<!-- End
<!-- Start Statistics Section-->
<section id="statistics" class=" main-section center-align" style="background:url('../../images/background/header-bg-1.jpg') bottom fixed;">
    <!-- Color Overylay -->
    <div class="gradient-color overlay"></div>
    <div class="container">
        <!--Title-->
        <h4 class="reflection-text reflection-text-white p-b-2 sansserif"><?= Yii::t('app', 'Statistika') ?></h4>
        <!-- Description -->
        <div class="row p-t-2">
            <div class="col s12 m6 l3 p-tb-1">

                <i style="background: white">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1"  height="50" width="50"  x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
                            <path xmlns="http://www.w3.org/2000/svg" style="" d="M125.765,430.773c-43.02,0-88.741,14.234-88.741,40.612s45.722,40.613,88.741,40.613  s88.741-14.235,88.741-40.613S168.784,430.773,125.765,430.773z" fill="#ffdb56" data-original="#ffdb56" class=""/>
                            <path xmlns="http://www.w3.org/2000/svg" style="" d="M125.767,153.902c-69.22,0-125.535,56.315-125.535,125.535c0,42.977,20.444,89.185,60.765,137.341  c29.686,35.455,58.943,58.239,60.175,59.192c1.352,1.047,2.974,1.57,4.595,1.57c1.621,0,3.242-0.523,4.595-1.57  c1.231-0.953,30.49-23.737,60.175-59.192c40.321-48.156,60.765-94.365,60.765-137.341  C251.302,210.217,194.987,153.902,125.767,153.902z M172.842,279.437c0,25.998-21.076,47.074-47.075,47.074  c-25.998,0-47.074-21.076-47.074-47.074s21.076-47.075,47.074-47.075C151.766,232.362,172.842,253.439,172.842,279.437z" fill="#4a5eff" data-original="#ff4a4a" class=""/>
                            <path xmlns="http://www.w3.org/2000/svg" style="" d="M460.525,220.803c-12.67-5.163-29.356-8.007-46.981-8.007c-17.624,0-34.31,2.844-46.981,8.007  c-14.807,6.034-22.962,14.893-22.962,24.944s8.154,18.911,22.962,24.944c12.67,5.163,29.355,8.007,46.981,8.007  c17.625,0,34.31-2.844,46.981-8.007c14.806-6.033,22.96-14.893,22.96-24.944S475.331,226.838,460.525,220.803z" fill="#ffdb56" data-original="#ffdb56" class=""/>
                            <g xmlns="http://www.w3.org/2000/svg">
                                <path style="" d="M125.765,493.246c-37.606,0-77.275-10.877-86.664-31.237c-1.351,2.93-2.077,6.057-2.077,9.377   c0,26.379,45.722,40.613,88.741,40.613s88.741-14.235,88.741-40.613c0-3.319-0.726-6.446-2.077-9.377   C203.041,482.368,163.372,493.246,125.765,493.246z" fill="#ffbb24" data-original="#ffbb24" class=""/>
                                <path style="" d="M460.525,251.937c-12.67,5.163-29.355,8.007-46.981,8.007c-17.625,0-34.31-2.844-46.981-8.007   c-9.987-4.069-16.933-9.428-20.406-15.567c-1.676,2.963-2.555,6.104-2.555,9.377c0,10.051,8.154,18.911,22.962,24.944   c12.67,5.163,29.355,8.007,46.981,8.007c17.625,0,34.31-2.844,46.981-8.007c14.806-6.033,22.96-14.893,22.96-24.944   c0-3.271-0.879-6.414-2.555-9.377C477.458,242.509,470.511,247.868,460.525,251.937z" fill="#ffbb24" data-original="#ffbb24" class=""/>
                            </g>
                            <path xmlns="http://www.w3.org/2000/svg" style="" d="M413.546,0c-54.159,0-98.22,44.062-98.22,98.22c0,33.45,15.85,69.339,47.108,106.673  c22.935,27.392,45.566,45.015,46.518,45.752c1.353,1.047,2.974,1.57,4.595,1.57c1.621,0,3.241-0.523,4.595-1.57  c0.952-0.737,23.584-18.36,46.518-45.752c31.258-37.333,47.107-73.222,47.107-106.673C511.765,44.062,467.704,0,413.546,0z   M449.727,98.22c0,19.982-16.199,36.181-36.181,36.181c-19.982,0-36.181-16.199-36.181-36.181s16.199-36.18,36.181-36.18  C433.528,62.04,449.727,78.238,449.727,98.22z" fill="#4a5eff" data-original="#ff4a4a" class=""/>
                            <g xmlns="http://www.w3.org/2000/svg">
                                <path style="" d="M125.767,153.902c-4.781,0-9.497,0.278-14.14,0.801c62.587,7.048,111.394,60.294,111.394,124.734   c0,42.977-20.444,89.185-60.765,137.341c-19.802,23.65-39.4,41.648-50.63,51.304c5.606,4.82,9.136,7.57,9.546,7.887   c1.352,1.047,2.974,1.57,4.595,1.57s3.242-0.523,4.595-1.57c1.231-0.953,30.49-23.737,60.175-59.192   c40.321-48.156,60.765-94.365,60.765-137.341C251.302,210.217,194.987,153.902,125.767,153.902z" fill="#34b5e7" data-original="#e7343f" class=""/>
                                <path style="" d="M413.546,0c-4.801,0-9.522,0.352-14.141,1.022c47.481,6.876,84.08,47.841,84.08,97.198   c0,33.45-15.85,69.339-47.107,106.673c-14.096,16.836-28.068,29.971-36.973,37.774c5.583,4.892,9.179,7.694,9.546,7.977   c1.353,1.047,2.974,1.57,4.595,1.57c1.621,0,3.241-0.523,4.595-1.57c0.952-0.737,23.584-18.36,46.518-45.752   c31.258-37.333,47.107-73.222,47.107-106.673C511.765,44.062,467.704,0,413.546,0z" fill="#34b5e7" data-original="#e7343f" class=""/>
                            </g>
                            <path xmlns="http://www.w3.org/2000/svg" style="" d="M242.226,478.903c-4.13,0-7.488-3.338-7.507-7.474c-0.019-4.147,3.327-7.524,7.474-7.542l9.916-0.045  c0.012,0,0.023,0,0.035,0c4.13,0,7.489,3.338,7.507,7.474c0.019,4.147-3.327,7.524-7.474,7.542l-9.916,0.045  C242.249,478.903,242.237,478.903,242.226,478.903z M281.891,478.723c-4.13,0-7.488-3.338-7.507-7.474  c-0.019-4.147,3.327-7.524,7.474-7.542l9.916-0.045c0.012,0,0.023,0,0.035,0c4.13,0,7.488,3.338,7.507,7.474  c0.019,4.147-3.327,7.524-7.474,7.542l-9.916,0.045C281.914,478.723,281.902,478.723,281.891,478.723z M321.557,478.542  c-4.13,0-7.488-3.338-7.507-7.474c-0.019-4.146,3.327-7.524,7.474-7.542l9.915-0.045c0.012,0,0.023,0,0.035,0  c4.13,0,7.488,3.338,7.507,7.474c0.018,4.147-3.327,7.524-7.474,7.542l-9.915,0.045C321.58,478.542,321.568,478.542,321.557,478.542  z M361.223,478.362c-4.13,0-7.488-3.338-7.507-7.474c-0.019-4.146,3.327-7.524,7.474-7.542l9.916-0.045c0.012,0,0.023,0,0.035,0  c4.13,0,7.488,3.338,7.507,7.474c0.018,4.146-3.327,7.524-7.474,7.542l-9.916,0.045  C361.246,478.362,361.234,478.362,361.223,478.362z M400.888,478.183c-4.13,0-7.488-3.338-7.507-7.474  c-0.019-4.147,3.327-7.524,7.474-7.542l9.916-0.045c0.012,0,0.023,0,0.035,0c4.13,0,7.488,3.338,7.507,7.474  c0.019,4.147-3.327,7.524-7.474,7.542l-9.916,0.045C400.911,478.183,400.9,478.183,400.888,478.183z M440.554,478.003  c-4.129,0-7.487-3.337-7.507-7.472c-0.021-4.146,3.324-7.524,7.472-7.544l1.405-0.007c2.512-0.011,5.029-0.189,7.488-0.529  c4.1-0.572,7.896,2.302,8.465,6.41c0.567,4.107-2.302,7.897-6.41,8.465c-3.115,0.43-6.303,0.656-9.474,0.67l-1.402,0.007  C440.579,478.003,440.566,478.003,440.554,478.003z M477.905,466.692c-2.379,0-4.719-1.128-6.177-3.231  c-2.361-3.408-1.515-8.085,1.893-10.449c2.392-1.657,4.671-3.516,6.778-5.523c3-2.861,7.753-2.746,10.615,0.256  c2.86,3.001,2.746,7.754-0.256,10.615c-2.667,2.542-5.554,4.894-8.58,6.992C480.871,466.258,479.381,466.692,477.905,466.692z   M501.649,435.732c-0.837,0-1.689-0.141-2.522-0.438c-3.906-1.393-5.942-5.688-4.551-9.593c0.976-2.735,1.742-5.57,2.28-8.428  c0.768-4.075,4.698-6.755,8.767-5.988c4.074,0.767,6.756,4.693,5.988,8.767c-0.683,3.625-1.655,7.223-2.893,10.692  C507.625,433.816,504.733,435.732,501.649,435.732z M502.864,396.732c-3.263,0-6.268-2.145-7.212-5.439  c-0.801-2.79-1.831-5.542-3.061-8.177c-1.753-3.758-0.128-8.226,3.629-9.979c3.762-1.752,8.226-0.128,9.979,3.629  c1.562,3.346,2.868,6.839,3.886,10.384c1.143,3.985-1.159,8.144-5.145,9.288C504.247,396.637,503.55,396.732,502.864,396.732z   M481.089,364.343c-1.63,0-3.269-0.527-4.648-1.615c-2.283-1.804-4.726-3.44-7.256-4.866c-3.613-2.034-4.892-6.614-2.857-10.226  c2.035-3.613,6.616-4.893,10.226-2.857c3.206,1.806,6.299,3.879,9.192,6.162c3.254,2.569,3.81,7.291,1.24,10.545  C485.505,363.364,483.308,364.343,481.089,364.343z M444.541,350.735c-0.112,0-0.225-0.002-0.338-0.008  c-0.839-0.037-1.684-0.056-2.532-0.056h-7.051c-4.147,0-7.508-3.36-7.508-7.508c0-4.146,3.36-7.508,7.508-7.508h7.051  c1.059,0,2.134,0.023,3.196,0.071c4.142,0.183,7.352,3.69,7.167,7.832C451.858,347.589,448.534,350.735,444.541,350.735z   M404.871,350.672h-9.916c-4.147,0-7.508-3.36-7.508-7.508c0-4.146,3.361-7.508,7.508-7.508h9.916c4.147,0,7.508,3.362,7.508,7.508  C412.379,347.311,409.018,350.672,404.871,350.672z M365.205,350.672h-9.916c-4.147,0-7.508-3.36-7.508-7.508  c0-4.146,3.361-7.508,7.508-7.508h9.916c4.147,0,7.508,3.362,7.508,7.508C372.713,347.311,369.352,350.672,365.205,350.672z   M325.538,350.672h-9.916c-4.147,0-7.508-3.36-7.508-7.508c0-4.146,3.361-7.508,7.508-7.508h9.916c4.147,0,7.508,3.362,7.508,7.508  C333.046,347.311,329.686,350.672,325.538,350.672z M287.289,343.204c-1.369,0-2.755-0.374-3.998-1.158  c-3.219-2.03-6.243-4.401-8.991-7.042c-2.988-2.874-3.081-7.627-0.206-10.615c2.872-2.986,7.626-3.081,10.615-0.206  c2.015,1.937,4.233,3.676,6.593,5.163c3.508,2.212,4.558,6.849,2.345,10.356C292.218,341.964,289.78,343.204,287.289,343.204z   M265.468,311.398c-3.522,0-6.663-2.488-7.362-6.072c-0.688-3.532-1.037-7.16-1.037-10.786l0.003-0.592  c0.048-4.116,3.4-7.421,7.506-7.421c0.03,0,0.06,0,0.089,0.001c4.147,0.048,7.469,3.448,7.42,7.594l-0.002,0.417  c0,2.664,0.256,5.327,0.76,7.914c0.793,4.07-1.863,8.012-5.933,8.805C266.427,311.353,265.943,311.398,265.468,311.398z   M273.673,273.717c-1.518,0-3.048-0.458-4.374-1.41c-3.368-2.419-4.137-7.11-1.719-10.478c2.222-3.094,4.768-5.971,7.567-8.552  c3.05-2.811,7.798-2.618,10.609,0.428c2.812,3.048,2.62,7.798-0.428,10.609c-2.053,1.894-3.921,4.005-5.551,6.275  C278.31,272.63,276.009,273.717,273.673,273.717z M306.725,253.849c-3.706,0-6.93-2.744-7.433-6.519  c-0.547-4.11,2.342-7.886,6.452-8.433c2.454-0.326,4.962-0.492,7.458-0.492h3.428c4.147,0,7.508,3.361,7.508,7.508  s-3.361,7.508-7.508,7.508h-3.428c-1.836,0-3.679,0.121-5.478,0.36C307.388,253.828,307.055,253.849,306.725,253.849z" fill="#1ea4e9" data-original="#1ea4e9" class=""/>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                        </g></svg>
                </i>

                <h5 class="sansserif" style="margin-top: 19px; font-size: 28px;"><?= Yii::t('app', 'Turoperator va turagentlar') ?></h5>

                <h3 class="counter sansserif" style="font-size: 40px;">1483</h3>

            </div>
            <div class="col s12 m6 l3 p-tb-1">
                <i  style="background: white;">
                    <svg class="svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" height="50" width="50"
                         x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512; fill: white;"
                         xml:space="preserve">
                        <g>
                            <rect y="166.4" style="fill:#E8EAEA;" width="113.067" height="345.6"></rect>
                            <rect x="398.933" y="166.4" style="fill:#E8EAEA;" width="113.067" height="345.6"></rect>
                        </g>
                        <path style="fill:#FF7058;"
                              d="M0,172.8L0,172.8h512l0,0c0-12.8-10.667-23.467-23.467-23.467H23.467C10.667,149.333,0,160,0,172.8z"></path>
                        <rect x="113.067" y="108.8" style="fill:#F2F2F2;" width="285.867" height="403.2"></rect>
                        <path style="fill:#FF7058;" d="M414.933,85.333H97.067c-6.4,0-11.733,5.333-11.733,11.733S90.667,108.8,97.067,108.8h317.867c6.4,0,11.733-5.333,11.733-11.733S421.333,85.333,414.933,85.333z"></path>
                        <g>
                            <rect x="32" y="198.4" style="fill:#54C0EB;" width="49.067" height="54.4"></rect>
                            <rect x="32" y="274.133" style="fill:#54C0EB;" width="49.067" height="54.4"></rect>
                            <rect x="32" y="349.867" style="fill:#54C0EB;" width="49.067" height="54.4"></rect>
                            <rect x="32" y="425.6" style="fill:#54C0EB;" width="49.067" height="54.4"></rect>
                            <rect x="430.933" y="198.4" style="fill:#54C0EB;" width="49.067" height="54.4"></rect>
                            <rect x="430.933" y="274.133" style="fill:#54C0EB;" width="49.067" height="54.4"></rect>
                            <rect x="430.933" y="349.867" style="fill:#54C0EB;" width="49.067" height="54.4"></rect>
                            <rect x="430.933" y="425.6" style="fill:#54C0EB;" width="49.067" height="54.4"></rect>
                        </g>
                        <rect x="145.067" y="293.333" style="fill:#84DBFF;" width="53.333" height="54.4"></rect>
                        <rect x="198.4" y="378.667" style="fill:#40596B;" width="114.133" height="133.333"></rect>
                        <rect y="489.6" style="fill:#ACB3BA;" width="512" height="22.4"></rect>
                        <g>
                            <rect x="145.067" y="141.867" style="fill:#84DBFF;" width="53.333" height="54.4"></rect>
                            <rect x="145.067" y="217.6" style="fill:#84DBFF;" width="53.333" height="54.4"></rect>
                            <rect x="229.333" y="141.867" style="fill:#84DBFF;" width="53.333" height="54.4"></rect>
                            <rect x="229.333" y="217.6" style="fill:#84DBFF;" width="53.333" height="54.4"></rect>
                            <rect x="229.333" y="293.333" style="fill:#84DBFF;" width="53.333" height="54.4"></rect>
                            <rect x="313.6" y="141.867" style="fill:#84DBFF;" width="53.333" height="54.4"></rect>
                            <rect x="313.6" y="217.6" style="fill:#84DBFF;" width="53.333" height="54.4"></rect>
                            <rect x="313.6" y="293.333" style="fill:#84DBFF;" width="53.333" height="54.4"></rect>
                        </g>
                        <g>
                            <path style="fill:#40596B;" d="M147.2,1.067h13.867V64H147.2V39.467h-25.6V64h-13.867V1.067H121.6v26.667h25.6L147.2,1.067
                            L147.2,1.067z"></path>
                            <path style="fill:#40596B;" d="M229.333,55.467c-6.4,6.4-13.867,9.6-23.467,9.6s-17.067-3.2-23.467-9.6
                            c-6.4-6.4-9.6-13.867-9.6-23.467s3.2-17.067,9.6-23.467C188.8,3.2,196.267,0,205.867,0c9.6,0,17.067,3.2,23.467,9.6
                            c6.4,6.4,9.6,13.867,9.6,23.467C238.933,41.6,235.733,50.133,229.333,55.467z M225.067,33.067c0-5.333-2.133-10.667-5.333-14.933
                            c-3.2-4.267-8.533-6.4-13.867-6.4s-9.6,2.133-13.867,6.4c-3.2,4.267-5.333,8.533-5.333,14.933S188.8,43.733,192,46.933
                            c4.267,4.267,8.533,6.4,13.867,6.4c5.333,0,9.6-2.133,13.867-6.4S225.067,38.4,225.067,33.067z"></path>
                            <path style="fill:#40596B;" d="M276.267,13.867v51.2H262.4v-51.2h-18.133v-12.8H294.4V12.8h-18.133V13.867z"></path>
                            <path style="fill:#40596B;" d="M349.867,1.067v12.8h-32v12.8h28.8V38.4h-28.8v12.8h32V64h-46.933V1.067H349.867z"></path>
                            <path style="fill:#40596B;" d="M363.733,65.067v-64H377.6V51.2h26.667V64h-40.533V65.067z"></path>
                        </g>
                    </svg>
                </i>
                <h5 class="sansserif" style="margin-top: 19px;font-size: 28px"><?= Yii::t('app', 'Joylashtirish vositalari') ?></h5>
                <h3><span class="counter sansserif" style="font-size: 40px;">1442</span></h3>
            </div>
            <div class="col s12 m6 l3 p-tb-1">
                <i  style="background: white;">

                    <svg id="Layer_1" enable-background="new 0 0 512 512" height="50" viewBox="0 0 512 512" width="50" xmlns="http://www.w3.org/2000/svg"><g><g><g><path d="m469.035 354.815h-426.07c-11.046 0-20-8.954-20-20v-73.63c0-11.046 8.954-20 20-20h426.071c11.046 0 20 8.954 20 20v73.63c-.001 11.046-8.955 20-20.001 20z" fill="#c59191"/><path d="m469.035 241.185h-30c11.046 0 20 8.954 20 20v73.63c0 11.046-8.954 20-20 20h30c11.046 0 20-8.954 20-20v-73.63c0-11.046-8.954-20-20-20z" fill="#b98080"/><g fill="#eaf6ff"><path d="m417.759 241.185h30v113.63h-30z"/><path d="m64.241 241.185h30v113.63h-30z"/></g></g><path d="m434 474.5v-95.755c0-28.174-19.603-52.554-47.121-58.601l-73.673-16.192c-9.172-2.016-15.707-10.142-15.707-19.534v-60.918h-83v60.918c0 9.391-6.534 17.518-15.707 19.534l-73.673 16.192c-27.516 6.048-47.119 30.427-47.119 58.601v95.755z" fill="#ffe180"/><path d="m313.207 303.952c-9.172-2.016-15.707-10.142-15.707-19.534v-60.918h-83v60.918c0 9.391-6.534 17.518-15.707 19.534l57.207 60z" fill="#ffcebf"/><g><path d="m304.67 299.762c-4.427-3.705-7.17-9.259-7.17-15.344v-60.918l-30 15v60.918c0 9.391 6.534 17.518 15.707 19.534l1.862.409" fill="#ffb09e"/><path d="m285.069 319.361 71.811 15.783c27.517 6.048 47.12 30.427 47.12 58.601v80.755h30v-95.755c0-28.174-19.603-52.553-47.121-58.601l-73.673-16.192c-3.229-.71-6.132-2.177-8.537-4.19" fill="#fbd270"/></g><g><g><path d="m340.59 130.83v66c0 23.36-9.47 44.51-24.77 59.81-15.31 15.31-36.46 24.78-59.82 24.78-15.81 0-30.6-4.34-43.26-11.89-1.95-1.15-3.84-2.39-5.68-3.7-21.57-15.32-35.65-40.52-35.65-69v-66z" fill="#ffcebf"/><path d="m340.59 130.83v66c0 23.36-9.47 44.51-24.77 59.81-15.31 15.31-36.46 24.78-59.82 24.78-15.81 0-30.6-4.34-43.26-11.89-1.9-1.25-3.79-2.48-5.68-3.7 29.87 12.25 63.02 6.41 83.57-14.44 20.82-21.14 20.19-49.06 19.96-54.56v-66z" fill="#ffb09e"/><path d="m340.589 107.983h-169.178v-53.932c0-25.709 20.842-46.551 46.551-46.551h76.076c25.709 0 46.551 20.842 46.551 46.551z" fill="#c59191"/><path d="m294.038 7.5h-30c25.709 0 46.551 20.842 46.551 46.551v53.932h30v-53.932c0-25.709-20.842-46.551-46.551-46.551z" fill="#b98080"/><path d="m148.513 142.896h214.974c6.011 0 10.883-4.873 10.883-10.883v-13.147c0-6.011-4.873-10.883-10.883-10.883h-214.974c-6.011 0-10.883 4.873-10.883 10.883v13.147c0 6.01 4.872 10.883 10.883 10.883z" fill="#685e68"/><path d="m363.487 107.983h-30c6.011 0 10.883 4.873 10.883 10.883v13.146c0 6.011-4.873 10.883-10.883 10.883h30c6.011 0 10.883-4.873 10.883-10.883v-13.146c0-6.011-4.872-10.883-10.883-10.883z" fill="#554e56"/></g><path d="m350.979 182.827h-10.39v-39.931h10.39c11.027 0 19.965 8.939 19.965 19.965 0 11.027-8.939 19.966-19.965 19.966z" fill="#ffcebf"/><path d="m161.021 182.827h10.39v-39.931h-10.39c-11.027 0-19.965 8.939-19.965 19.965 0 11.027 8.939 19.966 19.965 19.966z" fill="#ffb09e"/></g><path d="m337.554 309.303-24.347-5.351c-3.229-.71-6.121-2.189-8.527-4.203l-47.266 47.266c-.781.781-2.047.781-2.828 0l-47.266-47.265c-2.405 2.013-5.297 3.493-8.527 4.203l-24.347 5.351 67.411 67.411c7.81 7.81 20.474 7.81 28.284 0z" fill="#82aee3"/><path d="m285.069 319.361 34.782 7.644 17.703-17.703-24.347-5.351c-3.229-.71-6.132-2.177-8.537-4.19z" fill="#528fd8"/><g><g><path d="m70.152 512c-5.523 0-10-4.477-10-10v-113.929c0-7.324 7.844-12.163 14.677-9.055l83.247 37.871v95.113z" fill="#8ddaa7"/><path d="m353.92 416.89v95.11h-195.84v-95.11l89.17-40.57c2.77-1.26 5.76-1.89 8.75-1.89s5.98.63 8.75 1.89z" fill="#8ddaa7"/><path d="m353.924 512v-95.112l83.247-37.871c6.833-3.108 14.677 1.731 14.677 9.055v113.928c0 5.523-4.477 10-10 10z" fill="#b0e6a0"/><path d="m437.171 379.017-15.544 7.071c.131.639.221 1.296.221 1.983v113.929c0 5.523-4.477 10-10 10h30c5.523 0 10-4.477 10-10v-113.929c0-7.323-7.845-12.163-14.677-9.054z" fill="#8ddaa7"/></g><path d="m256 374.43v137.57h-97.92v-95.11l89.17-40.57c2.77-1.26 5.76-1.89 8.75-1.89z" fill="#b0e6a0"/></g><g><path d="m469.296 489.5h-29.206c-9.65 0-17.473-7.823-17.473-17.473v-36.036c0-9.65 7.823-17.473 17.473-17.473h29.205c3.298 0 6.139 2.298 6.844 5.52 1.931 8.83 3.474 19.955 3.216 32.784-.209 10.403-1.553 19.563-3.215 27.158-.705 3.222-3.546 5.52-6.844 5.52z" fill="#ffcebf"/><path d="m476.139 424.038c-.705-3.222-3.546-5.52-6.844-5.52h-29.205c-.17 0-.334.021-.502.025 3.17.133 5.868 2.37 6.552 5.494 1.931 8.83 3.474 19.955 3.216 32.784-.209 10.403-1.553 19.563-3.215 27.158-.684 3.124-3.382 5.361-6.552 5.494.168.005.332.025.501.025h29.206c3.298 0 6.139-2.298 6.844-5.52 1.662-7.595 3.006-16.756 3.215-27.158.258-12.827-1.285-23.952-3.216-32.782z" fill="#ffb09e"/><path d="m42.704 489.5h29.206c9.65 0 17.473-7.823 17.473-17.473v-36.036c0-9.65-7.823-17.473-17.473-17.473h-29.205c-3.298 0-6.139 2.298-6.844 5.52-1.931 8.83-3.474 19.955-3.216 32.784.209 10.403 1.553 19.563 3.215 27.158.705 3.222 3.547 5.52 6.844 5.52z" fill="#ffcebf"/><path d="m71.91 418.518h-29.205c-.099 0-.194.021-.293.025 9.416.268 16.971 7.967 16.971 17.448v36.037c0 9.48-7.555 17.179-16.971 17.447.099.004.193.025.292.025h29.206c9.65 0 17.473-7.823 17.473-17.473v-36.037c0-9.649-7.823-17.472-17.473-17.472z" fill="#ffb09e"/></g></g><path d="m469.04 233.69h-128.622c5.826-13.379 8.301-28.477 7.671-43.363 15.835.872 30.354-10.787 30.354-27.465 0-5.758-1.785-11.105-4.825-15.525 4.966-3.295 8.251-8.93 8.251-15.324v-13.146c0-10.137-8.247-18.383-18.383-18.383h-15.398v-46.433c.001-29.804-24.246-54.051-54.05-54.051h-76.076c-29.804 0-54.051 24.247-54.051 54.051v46.432h-15.398c-10.137 0-18.383 8.247-18.383 18.383v13.146c0 6.394 3.285 12.029 8.251 15.324-3.04 4.42-4.825 9.767-4.825 15.525 0 16.013 14.185 29.044 30.354 27.465-1.41 14.078 2.322 30.962 7.708 43.363h-128.658c-15.164 0-27.5 12.336-27.5 27.5v73.62c0 15.164 12.336 27.5 27.5 27.5h29.593c-.684 2.717-1.202 5.478-1.545 8.267-3.59-.114-7.181.845-10.31 2.858-5.04 3.243-8.048 8.714-8.048 14.635v22.948h-9.945c-6.765 0-12.724 4.802-14.171 11.417-2.48 11.342-3.62 22.962-3.388 34.538.192 9.595 1.332 19.221 3.387 28.611 1.448 6.616 7.408 11.417 14.171 11.417h9.946v7.5c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-7.5h4.261c13.77 0 24.973-11.203 24.973-24.973v-36.037c0-13.77-11.203-24.973-24.973-24.973h-4.26v-22.947c.1-1.978 1.911-3.119 4.075-2.223l78.855 35.871v82.782c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-82.786l82.92-37.722v120.508c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-120.509c1.843.911 80.944 36.766 82.924 37.725v82.784c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-82.784l78.854-35.87c2.204-.888 3.97.245 4.072 2.224v22.948h-4.26c-13.77 0-24.973 11.203-24.973 24.973v36.037c0 13.77 11.203 24.973 24.973 24.973h4.261v7.5c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-7.501h9.946c6.763 0 12.723-4.801 14.171-11.416 2.055-9.391 3.194-19.017 3.387-28.611.232-11.576-.907-23.196-3.388-34.538-1.447-6.615-7.406-11.417-14.171-11.417h-9.945v-22.948c0-5.921-3.009-11.392-8.048-14.635-3.129-2.013-6.72-2.973-10.31-2.859-.343-2.789-.861-5.549-1.545-8.266h29.593c15.164 0 27.5-12.336 27.5-27.5v-73.62c-.002-15.164-12.338-27.5-27.502-27.5zm-412.299 113.62h-13.781c-6.893 0-12.5-5.607-12.5-12.5v-73.62c0-6.893 5.607-12.5 12.5-12.5h13.781zm15.169 78.708c5.499 0 9.973 4.474 9.973 9.973v36.037c0 5.499-4.474 9.973-9.973 9.973h-28.806c-1.795-8.318-2.791-16.837-2.961-25.329-.207-10.271.79-20.582 2.962-30.653h28.805zm396.985 0c2.172 10.071 3.168 20.383 2.962 30.654-.17 8.491-1.167 17.011-2.961 25.328h-28.806c-5.499 0-9.973-4.474-9.973-9.973v-36.037c0-5.499 4.474-9.973 9.973-9.973h28.805zm-58.635-177.328v73.149c-6.641-4.231-14.009-7.318-21.77-9.024l-73.675-16.191c-5.687-1.246-9.814-6.378-9.814-12.204v-9.611c5.767-3.639 11.183-7.925 16.123-12.865 4.113-4.113 7.772-8.556 10.987-13.253h78.149zm-62.17-73.363v-24.931c7.704-1.176 15.354 4.39 15.354 12.465 0 7.928-7.577 13.695-15.354 12.466zm-169.179-121.276c0-21.533 17.518-39.051 39.051-39.051h76.076c21.533 0 39.051 17.518 39.051 39.051v46.432h-154.178zm-15.001 121.276c-7.88.954-15.354-4.195-15.354-12.465 0-8.041 7.687-13.616 15.354-12.465zm-15.397-39.931c-1.866 0-3.383-1.518-3.383-3.383v-13.146c0-1.866 1.518-3.383 3.383-3.383h214.974c1.866 0 3.383 1.518 3.383 3.383v13.146c0 1.866-1.518 3.383-3.383 3.383h-125.799c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h95.402v46.434c.011 20.677-8.117 40.051-22.573 54.507-4.995 4.995-10.565 9.2-16.546 12.596-11.607 6.591-24.202 9.987-37.971 9.987-42.507 0-77.09-34.583-77.09-77.09v-46.434h23.778c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5zm145.962 163.952-38.475 38.475-38.475-38.475c3.203-4.904 4.744-10.909 4.475-16.935 10.524 4.196 21.997 6.507 34 6.507 11.835 0 23.321-2.239 34-6.478-.513 5.822 1.409 12.197 4.475 16.906zm-192.735-50.658h78.201c7.134 10.43 16.356 19.323 27.058 26.076v9.654c0 5.826-4.127 10.958-9.82 12.205l-73.67 16.19c-7.761 1.706-15.128 4.793-21.77 9.024v-73.149zm-23.447 98.62h-6.552v-98.62h15v86.155c-3.292 3.83-6.111 8.019-8.448 12.465zm79.783 61.339-72.473-32.968c1.379-23.179 18.242-43.185 41.128-48.216l45.32-9.96 58.275 58.275zm195.848 0-72.249-32.868 14.17-14.17c2.929-2.929 2.929-7.678 0-10.606-2.929-2.929-7.678-2.929-10.606 0l-18.161 18.161c-7.089-2.977-15.068-2.977-22.157 0l-55.481-55.481 10.954-2.407c2.046-.448 3.988-1.145 5.826-2.019l43.06 43.06c1.794 1.795 4.181 2.784 6.719 2.784s4.925-.989 6.717-2.783l43.061-43.061c1.837.874 3.777 1.57 5.822 2.018l10.959 2.408-12.334 12.335c-2.929 2.929-2.929 7.678 0 10.606 2.929 2.929 7.678 2.929 10.606 0l19.119-19.119 45.319 9.959c22.886 5.031 39.749 25.037 41.128 48.216zm86.335-61.339h-6.552c-2.333-4.442-5.16-8.638-8.447-12.465v-86.155h15v98.62zm41.281-12.5c0 6.893-5.607 12.5-12.5 12.5h-13.781v-98.62h13.781c6.893 0 12.5 5.607 12.5 12.5zm-184.728-143.501c4.142 0 7.5-3.358 7.5-7.5v-16.325c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v16.325c0 4.142 3.358 7.5 7.5 7.5zm-89.124-23.825v16.325c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-16.325c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5zm28.38 70.722c4.16 2.282 10.919 5.021 19.498 5.11 8.65.091 16.093-2.767 20.365-5.11 3.632-1.992 4.961-6.551 2.969-10.183-1.992-3.631-6.551-4.96-10.183-2.969-2.773 1.521-7.287 3.325-12.994 3.263-5.472-.058-9.786-1.806-12.441-3.263-3.633-1.993-8.191-.663-10.183 2.969s-.662 8.191 2.969 10.183z"/></g></svg>
                </i>
                <h5 class="sansserif" style="margin-top: 19px; font-size: 28px"><?= Yii::t('app', 'Chet ellik sayyohlar') ?></h5>
                <h3 class="sansserif"><span class="counter" style="font-size: 40px;">1881345</span></h3>
            </div>
            <div class="col s12 m6 l3 p-tb-1">
                <i  style="background: white;">

                    <svg id="Capa_1" enable-background="new 0 0 512 512" height="50" viewBox="0 0 512 512" width="50" xmlns="http://www.w3.org/2000/svg"><g><path d="m286.331 82.337h-224.895c-8.284 0-15 6.715-15 14.999v159.439c0 8.284 6.716 14.999 15 14.999h224.896c8.284 0 15-6.715 15-14.999v-159.439c-.001-8.284-6.717-14.999-15.001-14.999z" fill="#fd5"/><path d="m286.331 82.337h-112.448v189.438h112.448c8.284 0 15-6.715 15-14.999v-159.44c0-8.284-6.716-14.999-15-14.999z" fill="#febd3f"/><path d="m211.748 164.427h-75.729c-8.284 0-15 6.715-15 14.999v77.35c0 8.284 6.716 14.999 15 14.999h75.729c8.284 0 15-6.715 15-14.999v-77.35c0-8.284-6.716-14.999-15-14.999z" fill="#d5985c"/><path d="m211.748 164.427h-37.865v107.348h37.865c8.284 0 15-6.715 15-14.999v-77.349c0-8.285-6.716-15-15-15z" fill="#a9663b"/><path d="m330.915 89.833-47.567-82.336c-2.68-4.64-7.631-7.497-12.989-7.497h-192.952c-5.358 0-10.309 2.857-12.989 7.497l-47.566 82.337c-2.681 4.64-2.682 10.359-.002 15.001 2.679 4.641 7.632 7.501 12.991 7.501h288.086c5.36 0 10.312-2.86 12.991-7.501 2.679-4.643 2.678-10.361-.003-15.002z" fill="#d5985c"/><path d="m283.348 7.497c-2.68-4.64-7.631-7.497-12.989-7.497h-96.476v112.335h144.043c5.36 0 10.312-2.86 12.991-7.501 2.679-4.642 2.678-10.36-.002-15.001z" fill="#a9663b"/><path d="m433.678 156.211c-8.284 0-15 6.715-15 14.999v74.296c0 8.284 6.716 14.999 15 14.999s15-6.715 15-14.999v-74.296c0-8.283-6.716-14.999-15-14.999z" fill="#d5985c"/><path d="m433.678 156.211v104.295c8.284 0 15-6.716 15-14.999v-74.297c0-8.283-6.715-14.999-15-14.999z" fill="#a9663b"/><path d="m496.151 167.757-48.482-125.422c-2.234-5.78-7.794-9.592-13.991-9.592-6.198 0-11.757 3.811-13.991 9.592l-48.481 125.422c-1.783 4.613-1.177 9.809 1.62 13.889 2.797 4.079 7.425 6.518 12.372 6.518h96.962c4.946 0 9.575-2.438 12.372-6.518 2.796-4.08 3.402-9.276 1.619-13.889z" fill="#97de3d"/><path d="m447.669 42.335c-2.234-5.78-7.794-9.592-13.991-9.592v155.42h48.481c4.946 0 9.575-2.438 12.372-6.518s3.403-9.276 1.62-13.889z" fill="#49a420"/><g><path d="m295.256 269.381-39.256-28.365h-69.358l-70.642 59.996-15 14.999-35.55 110.966c3.076 3.42 6.254 6.77 9.531 10.047 48.352 48.349 112.639 74.976 181.019 74.976l39.256-12.985z" fill="#bceaf9"/><path d="m256 241.016v270.984c34.19 0 67.357-6.657 98.02-19.357l7.775-86.351-1.338-89.797z" fill="#acceff"/><path d="m15 241.016c-8.284 0-15 6.715-15 14.999 0 63.741 23.15 123.919 65.458 170.954l80.286-48.843c25.479-15.479 41.083-43.609 40.722-73.413l-.405-33.441c-.049-4.061.195-19.08.582-30.257h-171.643z" fill="#97de3d"/><path d="m512 256.015c0-8.284-6.716-14.999-15-14.999h-241l50.19 92.162c4.608 8.005 7.033 17.08 7.033 26.316v54.572c0 11.066 3.481 21.853 9.95 30.833l31.723 47.369c30.322-12.693 58.179-31.3 82.124-55.244 48.351-48.349 74.98-112.633 74.98-181.009z" fill="#49a420"/></g></g></svg>
                </i>
                <h5 class="sansserif" style="margin-top: 19px; font-size: 28px"><?= Yii::t('app', 'Mehmon uylari') ?></h5>


                <h3 class="counter sansserif" style="font-size: 40px;">2458</h3>
            </div>
            <div class="col s12 m6 l3 p-tb-1">
                <i  style="background: white;">
                    <svg id="Layer_1" enable-background="new 0 0 512 512" height="50" viewBox="0 0 512 512" width="50" xmlns="http://www.w3.org/2000/svg"><g id="XMLID_170_"><path id="XMLID_1344_" d="m159.997 90h-120v-80h120l-22 40z" fill="#ff7d97"/><path id="XMLID_2067_" d="m411.268 304.333c11.257-11.148 18.23-30.54 18.23-47.634 0-15.189-5.516-29.082-14.639-39.813 3.795-7.289 5.952-15.567 5.952-24.354 0-29.176-23.652-52.828-52.828-52.828h-131.718c-29.176 0-52.828 23.652-52.828 52.828 0 8.786 2.157 17.064 5.952 24.354-9.123 10.731-14.639 24.624-14.639 39.813 0 17.095 6.973 36.486 18.23 47.634z" fill="#d1a184"/><path id="XMLID_1288_" d="m390.374 293.421h-58.44v-37.421h-59.813v37.421h-92.125l.002-.015h-69.67l-38.26-104.92c-6.055-16.604-24.421-25.156-41.026-19.101-16.604 6.055-25.155 24.423-19.101 41.026l44.857 118.334c6.671 17.598 22.619 29.992 41.32 32.11l71.879 8.145v133h332v-96.956c0-61.648-49.975-111.623-111.623-111.623z" fill="#66e0f7"/><path id="XMLID_1128_" d="m169.997 291.125h47.667v207.875h-47.667z" fill="#ff7d97"/><path id="XMLID_1137_" d="m386.33 291.125h47.667v207.875h-47.667z" fill="#ff7d97" transform="matrix(-1 0 0 -1 820.327 790.125)"/><path id="XMLID_1297_" d="m79.731 209.499-7.662-21.013c-6.055-16.604-24.421-25.156-41.026-19.101-16.604 6.055-25.155 24.423-19.101 41.026l8.836 23.308z" fill="#f3c9a6"/><path id="XMLID_1108_" d="m393.997 293.421-48.958 75.871-43.042-43.042 29.937-32.829z" fill="#fff"/><path id="XMLID_1287_" d="m209.997 293.421 48.958 75.871 43.042-43.042-29.938-32.829z" fill="#fff"/><path id="XMLID_2069_" d="m272.122 296.375 29.875 29.875 29.937-29.937v-40.313h-59.812z" fill="#f3c9a6"/><path id="XMLID_2066_" d="m225.997 125.539v54.628c0 41.974 34.026 76 76 76 41.974 0 76-34.026 76-76v-53z" fill="#f3c9a6"/><path id="XMLID_2065_" d="m421.997 95.704h-240c-12.15 0-22 9.85-22 22 0 12.15 9.85 22 22 22h240c12.15 0 22-9.85 22-22 0-12.15-9.85-22-22-22z" fill="#ffcd69"/><path id="XMLID_1889_" d="m339.539 23.704h-74.831c-23.519 0-42.584 19.066-42.584 42.584v29.416h160v-29.415c0-23.519-19.066-42.585-42.585-42.585z" fill="#ffcd69"/><g id="XMLID_313_"><path id="XMLID_1142_" d="m432.095 290.795c4.719-10.63 7.403-22.685 7.403-34.096 0-14.773-4.596-29.165-13.052-41.168 2.868-7.299 4.365-15.139 4.365-22.999 0-16.54-6.435-31.597-16.919-42.828h8.104c17.645 0 32-14.355 32-32s-14.355-32-32-32h-29.873v-19.415c0-28.995-23.59-52.585-52.585-52.585h-74.831c-28.995 0-52.584 23.59-52.584 52.585v19.415h-30.127c-4.318 0-8.436.864-12.198 2.421-.194-1.016-.527-2.012-1.041-2.945l-19.347-35.18 19.349-35.181c1.704-3.098 1.646-6.865-.153-9.909-1.8-3.043-5.073-4.91-8.608-4.91h-120c-5.522 0-10 4.478-10 10v149.209c-.797.239-1.592.494-2.38.782-21.758 7.934-33.004 32.09-25.069 53.847.014.04.029.079.044.119l44.857 118.334c8.035 21.197 27.02 35.95 49.544 38.502l63.004 7.138v124.069c0 5.522 4.478 10 10 10h332c5.522 0 10-4.478 10-10v-96.956c-.001-52.413-33.328-97.188-79.903-114.249zm-241.336-7.373c-3.805-8.285-6.009-17.919-6.009-26.723 0-12.199 4.354-24.038 12.258-33.337 2.635-3.099 3.13-7.486 1.251-11.095-3.2-6.146-4.822-12.785-4.822-19.735 0-16.288 9.141-30.478 22.561-37.718v25.353c0 33.035 18.733 61.762 46.125 76.161v27.094zm177.224-133.718h.014v30.462c0 36.393-29.607 66-66 66s-66-29.607-66-66v-30.456c.09 0 .178-.007.268-.007h131.718zm-46.049 142.466-19.938 19.938-19.875-19.875v-28.409c6.384 1.517 13.033 2.344 19.875 2.344 6.864 0 13.534-.832 19.938-2.358zm-56.908 11.252 22.828 22.828-27.213 27.213-32.291-50.041zm73.942 0h36.675l-32.29 50.041-27.213-27.213zm57.362.179c9.642.56 18.925 2.471 27.667 5.545v182.854h-27.667zm16.187-18.153c-7.183-1.327-14.583-2.026-22.143-2.026h-48.439v-27.126c27.358-14.41 46.063-43.119 46.063-76.129v-25.483c13.557 7.198 22.814 21.459 22.814 37.848 0 6.95-1.622 13.59-4.822 19.735-1.879 3.608-1.384 7.996 1.251 11.095 7.904 9.299 12.258 21.138 12.258 33.337-.001 9.579-2.603 20.08-6.982 28.749zm-180.393-219.159c0-17.968 14.617-32.585 32.584-32.585h74.831c17.968 0 32.585 14.617 32.585 32.585v19.415h-140zm-50.127 39.415h240c6.617 0 12 5.383 12 12s-5.383 12-12 12h-240c-6.617 0-12-5.383-12-12s5.383-12 12-12zm-132-85.704h93.087l-13.849 25.181c-1.651 3.001-1.651 6.638 0 9.639l13.849 25.18h-93.087zm105.36 80c-3.383 5.074-5.36 11.162-5.36 17.704 0 17.645 14.355 32 32 32h8.358c-10.484 11.231-16.919 26.289-16.919 42.828 0 7.86 1.497 15.7 4.365 22.999-8.456 12.003-13.052 26.395-13.052 41.168 0 8.829 1.589 18.042 4.51 26.707h-51.933l-35.863-98.346c-3.843-10.54-11.561-18.953-21.73-23.688-3.148-1.465-6.414-2.522-9.736-3.172v-58.2zm-120.889 78.78c5.521-2.013 11.496-1.756 16.823.724s9.369 6.887 11.383 12.408l4.197 11.509-40.468 16.927-5.086-13.417c-4.117-11.382 1.773-24.001 13.151-28.151zm31.682 146.421-32.654-86.141 40.234-16.83 27.204 74.602c1.439 3.947 5.192 6.574 9.395 6.574h49.668v54.396l-60.752-6.883c-15.047-1.703-27.728-11.558-33.095-25.718zm113.847-21.779h27.667v79.897c0 5.522 4.478 10 10 10s10-4.478 10-10v-44.076l22.889 35.471c1.639 2.539 4.338 4.201 7.343 4.521.354.038.708.057 1.061.057 2.637 0 5.185-1.044 7.07-2.929l35.971-35.971 35.971 35.971c1.886 1.885 4.434 2.929 7.07 2.929.353 0 .707-.019 1.061-.057 3.005-.32 5.704-1.982 7.343-4.521l22.889-35.471v87.843h-36.187c-5.522 0-10 4.478-10 10s4.478 10 10 10h36.187v44.914h-148.668v-18.682c0-5.522-4.478-10-10-10s-10 4.478-10 10v18.682h-27.667zm312 188.578h-48v-173.24c28.795 17.96 48 49.919 48 86.284z"/><path id="XMLID_1192_" d="m301.997 218.953c5.127 0 10.253-1.952 14.156-5.854 3.905-3.905 3.892-10.237-.014-14.143-3.906-3.904-10.252-3.903-14.156 0-3.906-3.904-10.236-3.904-14.143 0-3.905 3.905-3.905 10.237 0 14.143 3.904 3.902 9.03 5.854 14.157 5.854z"/><path id="XMLID_1193_" d="m217.667 438.319c2.63 0 5.21-1.069 7.07-2.93 1.859-1.86 2.93-4.439 2.93-7.07 0-2.63-1.07-5.21-2.93-7.069-1.87-1.86-4.44-2.931-7.07-2.931s-5.21 1.07-7.07 2.931c-1.87 1.859-2.93 4.439-2.93 7.069 0 2.631 1.06 5.21 2.93 7.07 1.86 1.861 4.43 2.93 7.07 2.93z"/></g></g></svg>
                </i>
                <h5 class="sansserif" style="margin-top: 19px; font-size: 28px"><?= Yii::t('app', 'Gidlar') ?></h5>
                <h3 class="counter sansserif" style="font-size: 40px;"><?echo 2400; ?></h3>
            </div>
        </div>
    </div>
</section>
<!-- End Statistics Section-->

<!-- Start FAQs Section-->
<div class="faq_none">
    <section id="faq" data-scroll-index="7" class="main-section" style="height: 800px;background-size: cover;background-image: url(https://new.uzbektourism.uz/frontend/web/5.png);">
        <div id="faq_bg"></div>
        <div class="container">
            <!-- map -->
            <div class="row">
                <div class="col-lg-12 noPadding" data-aos="fade-right" data-aos-delay="100" >
                    <div class="map_title  sansserif" ><?= Yii::t('app', "Hududiy boshqarmalar") ?></div>
                    <div id="vmap"></div>
                    <div id="mapLabels"></div>
                </div>
            </div>
            <?php ob_start(); ?>

            $(function() {
            var messages = {
            karakalpak: $("#karakalpak").html(),
            andijan: $("#andijan").html(),
            bukhara: $("#bukhara").html(),
            jizzakh: $("#jizzakh").html(),
            kashkadarya: $("#kashkadarya").html(),
            navoi: $("#navoi").html(),
            namangan: $("#namangan").html(),
            samarkand: $("#samarkand").html(),
            surkhandarya: $("#surkhandarya").html(),
            syrdarya: $("#syrdarya").html(),
            tashkent: $("#tashkent").html(),
            ferghana: $("#ferghana").html(),
            khorezm: $("#khorezm").html(),
            capital: $("#capital").html()};
            makeMap(messages);
            });
            <?php $script = ob_get_clean();
            $this->registerJs($script);
            ?>
            <div class="hidden" id="karakalpak">
                <div class="mini_modal">
                    <i></i>
                    <b class="x_out"></b>
                    <img class="img_modal_dep" src="<?=\yii\helpers\Url::to(["../map_tour/img/avatar.jpg"], true)?>">
                    <div class="mini_modal_title sansserif"><?= Yii::t('app', "Qoraqalpog'iston") ?> <?= Yii::t('app', "Respublikasi hududiy boshqarmasi") ?></div>
                    <div class="mini_modal_text">
                        <p class="f18 ptbold sansserif  ">Kusekeyev Bayram</p>
                        <p class="ptbold sansserif  "><?= Yii::t('app', "Lavozimi: Boshqarma boshlig’i") ?> </p>
                        <p class="ptbold sansserif  "><?= Yii::t('app', "Telefon") ?>: (61) 222-22-94 (91) 384-82-83 </p>
                        <p class="ptbold sansserif ptbold sansserif "><?= Yii::t('app', "Qabul kunlari: dushanba-juma 09:00 - 12:00") ?></p>
                        <p class="ptbold sansserif"><a class="" href="#" target="_blank">karakalpakstan@uzbektourism.uz</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="hidden" id="andijan">
                <div class="mini_modal">
                    <i></i>
                    <b class="x_out"></b>
                    <img class="img_modal_dep" src="<?=\yii\helpers\Url::to(["../map_tour/img/avatar.jpg"], true)?>">
                    <div class="mini_modal_title sansserif "><?= Yii::t('app', "Andijon") ?> <?= Yii::t('app', "viloyati hududiy boshqarmasi") ?></div>
                    <div class="mini_modal_text">
                        <p class="f18 ptbold sansserif ">Adxamjon Ismanov</p>
                        <p class="ptbold sansserif "><?= Yii::t('app', "Lavozimi: Boshqarma boshlig’i") ?> </p>
                        <p class="ptbold sansserif "><?= Yii::t('app', "Telefon") ?>: (90) 542-50-50 (93) 441-46-00 </p>
                        <p class=" ptbold sansserif "><?= Yii::t('app', "Qabul kunlari: dushanba-juma 09:00 - 12:00") ?></p>
                        <p class="ptbold sansserif"><a class="" href="#" target="_blank">andijan@uzbektourism.uz</a></p>
                    </div>
                </div>
            </div>
            <div class="hidden" id="bukhara">
                <div class="mini_modal">
                    <i></i>
                    <b class="x_out"></b>
                    <img class="img_modal_dep" src="<?=\yii\helpers\Url::to(["../map_tour/img/avatar.jpg"], true)?>">
                    <div class="mini_modal_title sansserif"><?= Yii::t('app', "Buxoro") ?> <?= Yii::t('app', "viloyati hududiy boshqarmasi") ?></div>
                    <div class="mini_modal_text">
                        <p class="f18 ptbold sansserif">Xojayev Furqat</p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Lavozimi: Boshqarma boshlig’i") ?> </p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Telefon") ?>: (65) 221-55-50 (93) 383-19-80</p>
                        <p class=" ptbold sansserif"><?= Yii::t('app', "Qabul kunlari: dushanba-juma 09:00 - 12:00") ?></p>

                    </div>
                </div>
            </div>
            <div class="hidden" id="jizzakh">
                <div class="mini_modal">
                    <i></i>
                    <b class="x_out"></b>
                    <img class="img_modal_dep" src="<?=\yii\helpers\Url::to(["../map_tour/img/avatar.jpg"], true)?>">
                    <div class="mini_modal_title sansserif"><?= Yii::t('app', "Jizzax") ?> <?= Yii::t('app', "viloyati hududiy boshqarmasi") ?></div>
                    <div class="mini_modal_text">
                        <p class="f18 ptbold sansserif">Lola Sanaeva</p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Lavozimi: Boshqarma boshlig’i") ?> </p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Telefon") ?>: (72) 226-19-69 (91) 207-55-39</p>
                        <p class=" ptbold sansserif"><?= Yii::t('app', "Qabul kunlari: dushanba-juma 09:00 - 12:00") ?></p>
                        <p class="ptbold sansserif"><a href="#" target="_blank">jizzakh@uzbektourism.uz</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="hidden" id="kashkadarya">
                <div class="mini_modal">
                    <i></i>
                    <b class="x_out"></b>
                    <img class="img_modal_dep" src="<?=\yii\helpers\Url::to(["../map_tour/img/avatar.jpg"], true)?>">
                    <div class="mini_modal_title sansserif"><?= Yii::t('app', "Qashqadaryo") ?> <?= Yii::t('app', "viloyati hududiy boshqarmasi") ?></div>
                    <div class="mini_modal_text">
                        <p class="f18 ptbold sansserif">Olimjonov Otabek</p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Lavozimi: Boshqarma boshlig’i") ?> </p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Telefon") ?>: +998 (0) 436 223-82-82, Факс: 223-04-34; </p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Qabul kunlari: dushanba-juma 09:00 - 12:00") ?></p>
                        <p class="ptbold sansserif"><a href="#" target="_blank">kashkadarya@uzbektourism.uz</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="hidden" id="syrdarya">
                <div class="mini_modal">
                    <i></i>
                    <b class="x_out"></b>
                    <img class="img_modal_dep" src="<?=\yii\helpers\Url::to(["../map_tour/img/avatar.jpg"], true)?>">
                    <div class="mini_modal_title sansserif"><?= Yii::t('app', "Sirdaryo") ?> <?= Yii::t('app', "viloyati hududiy boshqarmasi") ?></div>
                    <div class="mini_modal_text">
                        <p class="f18 ptbold sansserif">Tagayev Bexzod</p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Lavozimi: Boshqarma boshlig’i") ?> </p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Telefon") ?>: (67) 225-43-04 
                            (91) 506-12-75 </p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Qabul kunlari: dushanba-juma 09:00 - 12:00") ?></p>
                        <p class="ptbold sansserif"><a href="#" target="_blank">sirdarya@uzbektourism.uz</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="hidden" id="navoi">
                <div class="mini_modal">
                    <i></i>
                    <b class="x_out"></b>
                    <img class="img_modal_dep" src="<?=\yii\helpers\Url::to(["../map_tour/img/avatar.jpg"], true)?>">
                    <div class="mini_modal_title sansserif"><?= Yii::t('app', "Navoiy") ?> <?= Yii::t('app', "viloyati hududiy boshqarmasi") ?></div>
                    <div class="mini_modal_text">
                        <p class="f18 ptbold sansserif">Urokov Zoirjon</p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Lavozimi: Boshqarma boshlig’i") ?> </p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Telefon") ?>: (91) 336-79-82</p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Qabul kunlari: dushanba-juma 09:00 - 12:00") ?></p>
                        <p class="ptbold sansserif"><a href="#" target="_blank">navoitourism@umail.uz</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="hidden" id="namangan">
                <div class="mini_modal">
                    <i></i>
                    <b class="x_out"></b>
                    <img class="img_modal_dep" src="<?=\yii\helpers\Url::to(["../map_tour/img/avatar.jpg"], true)?>">
                    <div class="mini_modal_title sansserif"><?= Yii::t('app', "Namangan") ?> <?= Yii::t('app', "viloyati hududiy boshqarmasi") ?></div>
                    <div class="mini_modal_text">
                        <p class="f18 ptbold sansserif">Abdumalikov Xurshid</p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Lavozimi: Boshqarma boshlig’i") ?> </p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Telefon") ?>: (90) 275-13-47</p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Qabul kunlari: dushanba-juma 09:00 - 12:00") ?></p>
                        <p class="ptbold sansserif"><a href="#"
                                                       target="_blank">namturizm@umail.uz</a></p>

                    </div>
                </div>
            </div>
            <div class="hidden" id="samarkand">
                <div class="mini_modal">
                    <i></i>
                    <b class="x_out"></b>
                    <img class="img_modal_dep" src="<?=\yii\helpers\Url::to(["../map_tour/img/avatar.jpg"], true)?>">
                    <div class="mini_modal_title sansserif"><?= Yii::t('app', "Samarqand") ?> <?= Yii::t('app', "viloyati hududiy boshqarmasi") ?></div>
                    <div class="mini_modal_text">
                        <p class="f18 ptbold sansserif">Xushvaxtov Farhod</p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Lavozimi: Boshqarma boshlig’i") ?> </p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Telefon") ?>: (66) 231-50-99 
                            (93) 964-46-00</p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Qabul kunlari: dushanba-juma 09:00 - 12:00") ?></p>
                        <p class="ptbold sansserif"><a href="#" target="_blank">samarkand@uzbektourism.uz</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="hidden" id="surkhandarya">
                <div class="mini_modal">
                    <i></i>
                    <b class="x_out"></b>
                    <img class="img_modal_dep" src="<?=\yii\helpers\Url::to(["../map_tour/img/avatar.jpg"], true)?>">
                    <div class="mini_modal_title sansserif"><?= Yii::t('app', "Surxondaryo") ?> <?= Yii::t('app', "viloyati hududiy boshqarmasi") ?></div>
                    <div class="mini_modal_text">
                        <p class="f18 ptbold sansserif">Xo‘jaqulov Abdusalom</p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Lavozimi: Boshqarma boshlig’i") ?> </p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Telefon") ?>: (97) 242-15-01 </p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Qabul kunlari: dushanba-juma 09:00 - 12:00") ?></p>

                    </div>
                </div>
            </div>
            <div class="hidden" id="tashkent">
                <div class="mini_modal">
                    <i></i>
                    <b class="x_out"></b>
                    <img class="img_modal_dep" src="<?=\yii\helpers\Url::to(["../map_tour/img/avatar.jpg"], true)?>">
                    <div class="mini_modal_title sansserif"><?= Yii::t('app', "Toshkent") ?> <?= Yii::t('app', "viloyati hududiy boshqarmasi") ?></div>
                    <div class="mini_modal_text">
                        <p class="f18 ptbold sansserif">Umarov Axmadjon</p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Lavozimi: Boshqarma boshlig’i") ?> </p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Telefon") ?>: (94) 669-00-33</p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Qabul kunlari: dushanba-juma 09:00 - 12:00") ?></p>

                    </div>
                </div>
            </div>
            <div class="hidden" id="ferghana">
                <div class="mini_modal">
                    <i></i>
                    <b class="x_out"></b>
                    <img class="img_modal_dep" src="<?=\yii\helpers\Url::to(["../map_tour/img/avatar.jpg"], true)?>">
                    <div class="mini_modal_title sansserif"><?= Yii::t('app', "Farg'ona") ?> <?= Yii::t('app', "viloyati hududiy boshqarmasi") ?></div>
                    <div class="mini_modal_text">
                        <p class="f18 ptbold sansserif">Temirov Muzaffar</p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Lavozimi: Boshqarma boshlig’i") ?> </p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Telefon") ?>: (73) 244-14-40 (93) 181-75-95</p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Qabul kunlari: dushanba-juma 09:00 - 12:00") ?></p>
                        <p class="ptbold sansserif"><a href="#" target="_blank">ferghana@uzbektourism.uz</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="hidden" id="khorezm">
                <div class="mini_modal">
                    <i></i>
                    <b class="x_out"></b>
                    <img class="img_modal_dep" src="<?=\yii\helpers\Url::to(["../map_tour/img/avatar.jpg"], true)?>">
                    <div class="mini_modal_title sansserif"><?= Yii::t('app', "Xorazm") ?> <?= Yii::t('app', "viloyati hududiy boshqarmasi") ?></div>
                    <div class="mini_modal_text">
                        <p class="f18 ptbold sansserif">Azizbek Polvonov</p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Lavozimi: Boshqarma boshlig’i") ?> </p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Telefon") ?>: (62) 224-67-36; (97) 512-36-20 </p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Qabul kunlari: dushanba-juma 09:00 - 12:00") ?></p>
                    </div>
                </div>
            </div>
            <div class="hidden " id="capital">
                <div class="mini_modal">
                    <i></i>
                    <b class="x_out"></b>
                    <img class="img_modal_dep" src="<?=\yii\helpers\Url::to(["../map_tour/img/avatar.jpg"], true)?>">
                    <div class="mini_modal_title sansserif"><?= Yii::t('app', "Toshkent") ?> <?= Yii::t('app', "shahri hududiy boshqarmasi") ?></div>
                    <div class="mini_modal_text">
                        <p class="f18 ptbold sansserif">Tadjiyev Sanjar</p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Lavozimi: Direktor") ?> </p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Telefon") ?>: 71-210-02-68 </p>
                        <p class="ptbold sansserif"><?= Yii::t('app', "Qabul kunlari: dushanba-juma 09:00 - 12:00") ?></p>
                        <p class="ptbold sansserif"><a href="#" target="_blank">turizml@mail.ru</a></p>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>

    </section>
</div>
<!-- End FAQs Section-->

<!--Start Teritorial-->
<div id="teritorial_administration" class="map_place responsive" style="background: url(<?=\yii\helpers\Url::to(["../images/img_2091-4.jpg"], true)?>) no-repeat fixed center;
    background-size: cover; position:relative; ">
    <div class="gradient-color overlay" style="z-index: 0; opacity: 0.7"></div>
    <div class="map_area">
        <div class="map_footer noborder sildeable">
            <div class="mapArea" style="margin-top: -1px;">

            </div>
        </div>
    </div>
</div>


<!-- FOOTER START -->
<div class="footer">
    <div class="contain">

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
                <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["committee/unwto"], true)?>"><?php echo Yii::t('app','UNWTO haqida'); ?></a></li>
                <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["committee/tender"], true)?>"><?php echo Yii::t('app','Xaridlar va tenderlar'); ?></a></li>
                <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["committee/corruption"], true)?>"><?php echo Yii::t('app','Korrupsiyaga qarshi'); ?></a></li>
                <li class="hover_tran"><a class="sansserif a_href" href="<?=\yii\helpers\Url::to(["service/jobs"], true)?>"><?php echo Yii::t('app','Bo\'sh ish o\'rinlari'); ?></a></li>

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
<!--                 <li class="hover_tran"><a class="sansserif a_href" href="--><?//=\yii\helpers\Url::to(["service/registry"], true)?><!--">--><?php //echo Yii::t('app','Litsenziya registratsiyasi'); ?><!--</a></li>-->
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
<!--                <li class="hover_tran"><a class="sansserif a_href" href="--><?//=\yii\helpers\Url::to(["committee/spisokgostin"], true)?><!--">--><?php //echo Yii::t('app',"Mehmonxonalar ro'yxati"); ?><!--</a></li>-->
<!--                <li class="hover_tran"><a class="sansserif a_href" href="--><?//=\yii\helpers\Url::to(["committee/reestrguest"], true)?><!--">--><?php //echo Yii::t('app','Mehmonxonalar'); ?><!--</a></li>-->
            </ul>
        </div>
    </div>

    <div>
        <div class="clearfix"></div>
        <div class="row" style="background-color: #003063db; width: 101%;padding-bottom: 20px;">
            <div class="col-sm-4 text-center">
                <p class=" sansserif" style="color: white"><img style="padding: 14px 7px 14px 14px;  width: 160px;height: auto;" src="<?=\yii\helpers\Url::to(["../images/uzlogo_white.png"], true)?>" alt="logo_PR" ></p>
            </div>
            <div class="col-sm-4 text-center">
                <p class=" sansserif" style="color: white; margin-top: 17px; font-size: 14px"><?php echo Yii::t('app',"O'ZBEKISTON RESPUBLIKASI TURIZM VA SPORT VAZIRLIGI</br>Manzil: Amir Temur shox ko'chasi, 107B-uy</br> Tel: 71 205 06 00"); ?></p>
            </div>
            <div class="col-sm-4 text-center" style="">
                <div class="wrp">
                    <a class="icon icon-twitter" style="font-size: 23px;" href="https://t.me/uzbektourismofficial"><i class="fa fa-send" aria-hidden="true"></i></a>
                    <a class="icon icon-instagram" style="font-size: 23px;"  href="https://www.instagram.com/uzbektourism_official/?hl=ru"><i class="fa fa-instagram"></i></a>
                    <a class="icon icon-gplus" style="font-size: 23px;"  href="https://www.youtube.com/channel/UCilhbsbhiXgTjQjpw7DATgQ"><i class="fa fa-youtube"></i></a>
                    <a class="icon icon-facebook" style="font-size: 23px;"  href="https://www.facebook.com/uzbektourism.uz/"><i class="fa fa-facebook"></i></a>
                </div>
            </div>
        </div>

    </div>
</div>
<!--FOOTER END-->
