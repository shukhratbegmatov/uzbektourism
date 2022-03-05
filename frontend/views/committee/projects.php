<?php
/**
 * Author: Nurmukhammadov Shakhrizod
 * date: 13.12.2019
 */

$lang = Yii::$app->language;

$this->title = Yii::t('app', 'DXSh loyihalari');
$this->params['titlebreadcrumbs'] = $this->title;
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .sansserif {
        font-family: 'Open Sans', sans-serif;
    }
    body{
        color: #000!important;
    }
    h4 {
        font-weight: 600;
    }
</style>
<div class="sansserif aboutus-content">
    <p class="sansserif" style="text-align: justify; font-size: 16px">
    </p><h4 class="font-weight-bold"><?=Yii::t('app', 'O‘zbekiston Respublikasi Turizm va Sport Vazirligining Davlat-xususiy sheriklik loyihalarini amalga oshirish boshqarmasi');?> </h4>
    <li style="list-style-type: none"><?= Yii::t('app', 'Hurmatli tadbirkorlar va ishbilarmonlar	');?>, </li>
    <li  style="list-style-type: none"><?= Yii::t('app', "Sizlarni Turizm va sport sohasida sport ta'lim muassasalarining bino-inshootlari va yer maydonlarida davlat-xususiy sheriklik shartlari asosida loyihalarni amalga oshirish uchun taklif va loyihalaringizni ko'rib chiqishga tayyor ekanligini ma'lum qilamiz");?>.</li>
    <li  style="list-style-type: none"><?= Yii::t('app', "Sizlarni, quyidagi obyektlar bo'yicha takliflaringizni vazirlikka taqdim etishingizni so'raymiz.");?>.</li>

</br>
	<td><a href="/downloads/files/Obyektlar.pdf">
            <?= Yii::t('app', "Obyektlar ro'yxati.pdf"); ?>
            </a>
        </td>

</br>
</br>
    <div class="row">
	<div class="col-sm-6">
<li  style="list-style-type: none"><?= Yii::t('app', "Biz bilan bog'lanish uchun aloqa manzillarimiz:");?></li>
        
	   <p><b><?= Yii::t('app', 'Manzil');?>:</b>  <?= Yii::t('app', '100084, Toshkent shahri, Amir Temur shoh ko‘chasi, 107B-uy');?></p>
        </div>
        <div class="col-sm-6">
            <p><b><?= Yii::t('app', 'Telefon');?>:</b>  +99871 205-06-00 (212)</p>
            <p><b><?= Yii::t('app', 'E-mail');?>:</b> ppp@motas.uz</p>
        </div>
    </div>
    <img class="img-responsive" src="<?=\yii\helpers\Url::to(["../uploads/images/Obyektlar_1-min.jpg"], true)?>" alt="">
    <img class="img-responsive" src="<?=\yii\helpers\Url::to(["../uploads/images/Obyektlar_2-min.jpg"], true)?>" alt="">
</div>


