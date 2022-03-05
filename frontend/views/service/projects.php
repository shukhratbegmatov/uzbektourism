<?php
/**
 * Author: Nurmukhammadov Shakhrizod
 * date: 16.03.2020
 */
$lang = Yii::$app->language;
$this->title =  Yii::t('app', 'Loyihalar');
$this->params['breadcrumbs'][] = Yii::t('app', 'Loyihalar');
$this->params['titlebreadcrumbs'] = Yii::t('app', 'Loyihalar');
?>

<style type="text/css">
    img {
        border: none;
        max-width: 100%;
        padding: 0 1px 1px 0;
    }

     body{
         font-family: 'Open Sans', sans-serif !important;
     }
</style>
<div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false">
                    Service area</a>
            </h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <a href="<?=\yii\helpers\Url::to(["/news/download?url=002.jpg"], true)?>" target="_blank"><img
                                    src="<?=\yii\helpers\Url::to(["/news/download?url=002.jpg"], true)?>" alt=""></a>
                    </div>
                    <div class="col-md-6">
                        <a href="<?=\yii\helpers\Url::to(["/news/download?url=003.jpg"], true)?>" target="_blank"><img
                                    src="<?=\yii\helpers\Url::to(["/news/download?url=003.jpg"], true)?>" alt=""></a>
                    </div>
                </div>
                <br>
                <a href="<?=\yii\helpers\Url::to(["/news/download?url=6. СГУ на 9 очков.rar"], true)?>">Service area</a>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false">
                    Service point</a>
            </h4>
        </div>
        <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <a href="<?=\yii\helpers\Url::to(["/news/download?url=002 (3).jpg"], true)?>" target="_blank"><img
                                    src="<?=\yii\helpers\Url::to(["/news/download?url=002 (3).jpg"], true)?>" alt=""></a>
                    </div>
                    <div class="col-md-6">
                        <a href="<?=\yii\helpers\Url::to(["/news/download?url=001 (3).jpg"], true)?>" target="_blank"><img
                                    src="<?=\yii\helpers\Url::to(["/news/download?url=001 (3).jpg"], true)?>" alt=""></a>
                    </div>
                </div>
                <br>
                <a href="<?=\yii\helpers\Url::to(["/news/download?url=003.pdf"], true)?>">Service point</a>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false">
                    <?= Yii::t('template', '2 ta kabinkali hojatxona') ?></a>
            </h4>
        </div>
        <div id="collapse3" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <a target="_blank">
                            <img src="<?=\yii\helpers\Url::to(["/news/download?url=1.2 очко фото.jpg"], true)?>"
                                 alt=""></a>
                    </div>
                </div>
                <br>
		     <a href="<?=\yii\helpers\Url::to(["/news/download?url=2. СГУ на 2 очко.rar"], true)?>"><img
                            src="<?=\yii\helpers\Url::to(["/news/download?url=download.png"], true)?>"
                            alt=""> <?= Yii::t('template', 'Ko\'chirib olish') ?>
                    (<?= Yii::t('template', '2 ta kabinkali hojatxona') ?>)</a>
           </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"
                   aria-expanded="false"><?= Yii::t('template', '4 ta kabinkali hojatxona') ?></a>
            </h4>
        </div>
        <div id="collapse4" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <a><img src="<?=\yii\helpers\Url::to(["/news/download?url=1. 4 очко фото.jpg"], true)?>"
                                alt=""></a>
                    </div>

                </div>
                <br>
                <a href="<?=\yii\helpers\Url::to(["/news/download?url=2. СГУ на 4 очко.rar"], true)?>"><img
                            src="<?=\yii\helpers\Url::to(["/news/download?url=download.png"], true)?>"
                            alt=""> <?= Yii::t('template', 'Ko\'chirib olish') ?>
                    (<?= Yii::t('template', '4 ta kabinkali hojatxona') ?>)</a>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse6"
                   aria-expanded="false"><?= Yii::t('template', '6 ta kabinkali hojatxona') ?></a>
            </h4>
        </div>
        <div id="collapse6" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <a><img src="<?=\yii\helpers\Url::to(["/news/download?url=1. 6 очко фото.jpg"], true)?>"
                                alt=""></a>
                    </div>
                </div>
                <br>
                <a href="<?=\yii\helpers\Url::to(["/news/download?url=3. СГУ на 6 очко.rar"], true)?>"><img
                            src="<?=\yii\helpers\Url::to(["/news/download?url=download.png"], true)?>"
                            alt=""> <?= Yii::t('template', 'Ko\'chirib olish') ?>
                    (<?= Yii::t('template', '6 ta kabinkali hojatxona') ?>)</a>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse7"
                   aria-expanded="false"><?= Yii::t('template', '7 ta kabinkali hojatxona') ?></a>
            </h4>
        </div>
        <div id="collapse7" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <a><img src="<?=\yii\helpers\Url::to(["/news/download?url=1. 7 очко фото.jpg"], true)?>"
                                alt=""></a>
                    </div>
                </div>
                <br>
                <a href="<?=\yii\helpers\Url::to(["/news/download?url=4. СГУ на 7 очко.rar"], true)?>"> <img
                            src="<?=\yii\helpers\Url::to(["/news/download?url=download.png"], true)?>"
                            alt=""> <?= Yii::t('template', 'Ko\'chirib olish') ?>
                    (<?= Yii::t('template', '7 ta kabinkali hojatxona') ?>)</a>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false">
                    <?= Yii::t('template', '7 ta kabinkali hojatxona hamda do\'kon') ?></a>
            </h4>
        </div>
        <div id="collapse8" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <a><img src="<?=\yii\helpers\Url::to(["/news/download?url=1.7ochko_magazin.jpg"], true)?>"
                                alt=""></a>
                    </div>
                </div>
                <br>
                <a href="<?=\yii\helpers\Url::to(["/news/download?url=5magazin.zip"], true)?>"><img
                            src="<?=\yii\helpers\Url::to(["/news/download?url=download.png"], true)?>"
                            alt=""> <?= Yii::t('template', 'Ko\'chirib olish') ?>
                    (<?= Yii::t('template', '7 ta kabinkali hojatxona hamda do\'kon') ?>)</a>
            </div>
        </div>
    </div>


    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false"><?= Yii::t('template', '“Beldirsoy-Chimyon-Nanay” xalqaro umummavsumiy kurort loyihasi') ?></a>
            </h4>
        </div>
        <div id="collapse9" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <a><img src="<?=\yii\helpers\Url::to(["/news/download?url=04_03_2021kurort.pdf"], true)?>" alt=""></a>
                    </div>
                </div>
                <a href="<?=\yii\helpers\Url::to(["/news/download?url=04_03_2021kurort.pdf"], true)?>">
                    <b><?= Yii::t('template', '“Beldirsoy-Chimyon-Nanay” xalqaro umummavsumiy kurort loyihasi') ?></b>(.pdf)
                </a>
                <br>
                <br>
                <?= Yii::t('template', '"Beldersay-Chimgan-Nanay" xalqaro kurortini qurish va foydalanishga topshirish loyihasi Frantsiyaning "Geode", "Manie" fransuz kompaniyalari konsortsiumi tomonidan Frantsiyaning Xususiy sektorga ilmiy tadqiqotlar va yordam ko\'rsatish fondi (FASEP) ko\'magida ishlab chiqilgan.. Lives "," Egis "," Patriarche ", Epode (keyingi o\'rinlarda Konsortsium deb yuritiladi) Bo\'stonliq viloyatida Beldersay-Chimgan-Nanai (keyingi o\'rinlarda MVK deb nomlanadi) xalqaro mavsumiy dam olish maskanini tashkil etishning bosh rejasini ishlab chiqdi. Uning asosiy maqsadi erning qiymatini oshirish va investitsiya jozibadorligini oshirish orqali tadbirkorlikni rivojlantirishdir. Ushbu bosh rejada Frantsiya hukumat moliya institutlarining turizm, yo\'l transporti va kommunal infratuzilmani rivojlantirishga yo\'naltirilgan mablag\'larini hisobga olgan holda 500 million AQSh dollarigacha investitsiyalar jalb etilishi ko\'zda tutilgan. Loyiha uch bosqichdan iborat. Birinchisi, Chimyon viloyatida mavsumiy dam olish maskanini barpo etishni o/’z ichiga oladi. Frantsiyadan 47,9 million evro miqdorida imtiyozli kredit ajratish orqali osma ko\'priklar, changi yo\'llari va attraksionlar qurilishini o’\z ichiga olgan sayyohlik infratuzilmasini rivojlantirish rejalashtirilgan. Loyihaning birinchi bosqichini boshlash 2021 yil dekabrga rejalashtirilgan.') ?>
            </div>
        </div>
    </div>


</div>
<?php if (Yii::$app->language == "ru") { ?>

<?php } ?>
<!--<a href="http://cloud.uzbektourism.uz/uzbektourism/downloads/files/1. СГУ на 2 очко.rar">--><? //= Yii::t('app', '2 ta kabinkali hojatxona') ?><!--</a><br>-->
<!--<a href="http://cloud.uzbektourism.uz/uzbektourism/downloads/files/2. СГУ на 4 очко.rar">--><? //= Yii::t('app', '4 ta kabinkali hojatxona') ?><!--</a>-->
<!--<br>-->
<!--<a href="http://cloud.uzbektourism.uz/uzbektourism/downloads/files/3. СГУ на 6 очко.rar">--><? //= Yii::t('app', '6 ta kabinkali hojatxona') ?><!--</a>-->
<!--<br>-->
<!--<a href="http://cloud.uzbektourism.uz/uzbektourism/downloads/files/4. СГУ на 7 очко.rar">--><? //= Yii::t('app', '7 ta kabinkali hojatxona') ?><!--</a>-->
<!--<br>-->
<!--<a href="http://cloud.uzbektourism.uz/uzbektourism/downloads/files/5. СГУ на 7 очко+магазин.rar">--><? //= Yii::t('app', '7 ta kabinkali hojatxona hamda do\'kon') ?><!--</a>-->
<!--<br>-->
<!--<a href="http://cloud.uzbektourism.uz/uzbektourism/downloads/files/6. СГУ на 9 очков.rar">--><? //= Yii::t('app', '9 ta kabinkali hojatxona') ?><!--</a>-->
<!--<br>-->