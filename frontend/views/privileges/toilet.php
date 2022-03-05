<?php
/**
 * Author: Nurmukhammadov Shakhrizod
 * date: 16.12.2019
 */
use GuzzleHttp\Client;
$lang = Yii::$app->language;

$this->title = $model->{'name_'.$lang};
$this->params['breadcrumbs'][] = $this->title;
$this->params['titlebreadcrumbs'] = $this->title;


?>

<style>


    .social-bar {
        padding: 3px 40px;
        display: flex;
        border-radius: 10px;
        background: #fff;
        box-shadow: 0 0 60px rgba(93, 70, 232, 0.15);
        border: 1px solid#ebe9e9;
    }

    .process-scetion .slider-nav-item {
        position: relative;
        flex-grow: 0;
        flex-shrink: 0;
        border-radius: 50%;
        text-align: center;
        background: #fff;
        cursor: pointer;
        transition: all .4s ease;
    }

    .social-icons a {
        border-radius: 50px;
        color: #d94148;
        display: inline-block;
        line-height: 52px;
        height: 74px;
        width: 74px;
        box-shadow: 0 5px 25px rgba(93, 70, 232, 0.15);
        margin: 15px 15px;
        font-size: 22px;
    }

    a {
        text-decoration: none !important;
        color: #3f345f;
        transition: all 0.3s ease 0s;
    }

    .slider-nav-item:before {
        position: absolute;
        content: "";
        height: calc(100% + 16px);
        width: calc(100% + 16px);
        top: -8px;
        left: -8px;
        border-radius: 50%;
        border: 1px solid rgba(132, 132, 164, 0.35);
        animation: 1.5s linear 0s normal none infinite focuse;
    }


    .process-scetion .slider-nav-item {
        position: relative;
        flex-grow: 0;
        flex-shrink: 0;
        border-radius: 50%;
        text-align: center;
        background: #fff;
        cursor: pointer;
        transition: all .4s ease;

    }
    .slider-nav-item:before
    {
        position: absolute;
        content: "";
        height: calc(100% + 16px);
        width: calc(100% + 16px);
        top: -8px;
        left: -8px;
        border-radius: 50%;
        border: 1px solid rgba(132, 132, 164, 0.35);
        animation: 1.5s linear 0s normal none infinite focuse;
    }

    .process-scetion .slider-nav-item:nth-child(2) {
        color: #40beff; }
    .process-scetion .slider-nav-item:nth-child(3) {
        color: #311f9b; }
    .process-scetion .slider-nav-item:nth-child(4) {
        color: #ff9259; }
    .process-scetion .slider-nav-item:nth-child(5) {
        color: #38385f; }
    .process-scetion .slider-nav-item:after {
        position: absolute;
        top: 50%;
        left: 100%;
        height: 2px;
        content: '';
        width: 100%;
        background: url(http://demo.themenio.com/ico/assets/images/line.png) repeat 0 0;
        z-index: 0;
        animation: slide 1s linear infinite; }
    .process-scetion .slider-nav-item:last-child:after {
        display: none; }
    .process-scetion .slider-nav-item .ikon {
        font-size: 50px;
        line-height: 80px; }



    .process-scetion .slider-nav-item.active:before {
        position: absolute;
        content: "";
        height: calc(100% + 16px);
        width: calc(100% + 16px);
        top: -8px;
        left: -8px;
        border-radius: 50%;
        border: 1px solid rgba(132, 132, 164, 0.35);
        animation: 1.5s linear 0s normal none infinite focuse; }

    @keyframes focuse {
        0% {
            transform: scale(0.8);
            opacity: 1; }
        75% {
            transform: scale(1.2);
            opacity: 0; }
        100% {
            transform: scale(1.2);
            opacity: 0; } }
    @keyframes slide {
        from {
            background-position: 0 0; }
        to {
            background-position: 40px 0; } }

    .slider-nav-item:after {
        position: absolute;
        top: 50%;
        left: 100%;
        height: 2px;
        content: '';
        width: 100%;
        background: url(https://1.bp.blogspot.com/--Btu5p654jU/XYmrVd5IcYI/AAAAAAAATQ0/4bX8aZyFBgApbJUf90KrpCfO6RvAaZ6LgCLcBGAsYHQ/s1600/line.png) repeat 0 0;
        z-index: 0;
        animation: slide 1s linear infinite;
    }

    @-webkit-keyframes jello-horizontal {
        0% {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }
        30% {
            -webkit-transform: scale3d(1.25, 0.75, 1);
            transform: scale3d(1.25, 0.75, 1);
        }
        40% {
            -webkit-transform: scale3d(0.75, 1.25, 1);
            transform: scale3d(0.75, 1.25, 1);
        }
        50% {
            -webkit-transform: scale3d(1.15, 0.85, 1);
            transform: scale3d(1.15, 0.85, 1);
        }
        65% {
            -webkit-transform: scale3d(0.95, 1.05, 1);
            transform: scale3d(0.95, 1.05, 1);
        }
        75% {
            -webkit-transform: scale3d(1.05, 0.95, 1);
            transform: scale3d(1.05, 0.95, 1);
        }
        100% {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }
    }
    @keyframes jello-horizontal {
        0% {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }
        30% {
            -webkit-transform: scale3d(1.25, 0.75, 1);
            transform: scale3d(1.25, 0.75, 1);
        }
        40% {
            -webkit-transform: scale3d(0.75, 1.25, 1);
            transform: scale3d(0.75, 1.25, 1);
        }
        50% {
            -webkit-transform: scale3d(1.15, 0.85, 1);
            transform: scale3d(1.15, 0.85, 1);
        }
        65% {
            -webkit-transform: scale3d(0.95, 1.05, 1);
            transform: scale3d(0.95, 1.05, 1);
        }
        75% {
            -webkit-transform: scale3d(1.05, 0.95, 1);
            transform: scale3d(1.05, 0.95, 1);
        }
        100% {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }
    }


    .social-bar a:hover i
    {
        -webkit-animation: jello-horizontal 0.9s both;
        animation: jello-horizontal 0.9s both;
    }


    @media only screen and (max-width: 300px) {
        .process-scetion .slider-nav-item
        {
            height: 30px;
            width: 30px;
            margin: 15px 10px;
            line-height: 28px;
        }
    }

    @media only screen and (min-width: 430px) and (max-width: 496px) {
        .slider-nav-item
        {
            margin-top: 30px!important;
        }
    }

    @media only screen and (max-width: 430px) {
        .slider-nav-item
        {
            margin-top: 50px!important;
        }
    }
</style>
<div class="sansserif" style="padding: 10px">
    <?= $model->{'text_'.$lang} ?>
</div>


<div class="text-center">
    <p><?= Yii::t('app', "Batafsil ma'lumot uchun:"); ?></p>
    <p>(998) 71 200-00-88</p>
    <p>(998) 71 233-49-36</p>
    <p>(998) 90 353-01-04</p>
</div>
<br>

<div class="row">
    <div class="">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="social-bar">
                <div class="process-scetion">
                    <div class="">
                        <div class="social-icons">
                            <a href="<?= yii\helpers\Url::to(['privileges/map'])?>" class="slider-nav-item"><i class="fa fa-map-marker" style="font-size: 40px;margin-top: 17px;"></i></a>
                        </div>
                    </div>
                </div>
                <div style="margin-top: 35px;"><a href="<?=\yii\helpers\Url::to(["/privileges/map"], true)?>"><p class="text-center" style=" color: #d94148;"><?= Yii::t('app', "Sanitar-gigiyenik tarmoqlarini xaritadagi joylashuvi"); ?></p></a></div>

            </div>
         </div>
        <div class="col-sm-3"></div>
    </div>
</div>
<br>
<?php //if ($lang === "uz"){ ?>
<!--    <iframe width="100%" height="360" src="https://mover.uz/video/embed/dOapXg8m/" frameborder="0" style="margin-bottom: 20px;" allowfullscreen></iframe>-->
<!--    <iframe width="100%" height="460" src="https://mover.uz/video/embed/e7qfoME/" frameborder="0" allowfullscreen></iframe>-->
<?php //}else{ ?>
<!--    <iframe width="100%" height="360" src="https://mover.uz/video/embed/MpLwXg8m/" frameborder="0" style="margin-bottom: 20px;" allowfullscreen></iframe>-->
<!--    <iframe width="100%" height="460" src="https://mover.uz/video/embed/6bdmgg8m/" frameborder="0" allowfullscreen></iframe>-->
<?php //}?>





