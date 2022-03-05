<?php
$lang = Yii::$app->language;

use yii\captcha\Captcha;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = Yii::t('app','Aloqa');
$this->params['breadcrumbs'][] = Yii::t('app','Aloqa');
$this->params['titlebreadcrumbs'] = Yii::t('app','Aloqa');
?>
<style>
    .span_size{
        font-size: 18px;
    }
</style>
<div class="contacts">
    <div class="row">
        <div class="col-md-4">
            <?php if($lang=='uz'):?>
                <h5 class="title">Manzil</h5>
                <strong>O'zbekiston Respublikasi,Toshkent, 100084, Amir Temur shoh ko‘chasi 107B</strong><br><br>
                <p>
                    <strong>Mo'ljal:</strong><br />
                    <span class="span_size">"Intercontinental" mehmonxonasi</span><br><br>
                    <strong>Marshurt:</strong>
                    <br />
                    <span class="span_size">Transport: Metro "Bodomzor" bekat
                    <br>
                    Avtobuslar:  № 67,71,8</span>
                </p>
            <?php elseif($lang=='ru'):?>
                <h5 class="title">Адрес</h5>
                <strong>Узбекистан, 100084, г. Ташкент ул. Амир Темур, 107B</strong>
                <p>
                    <strong>Ориентир:</strong><br />
                    <span class="span_size">Гостиница "Intercontinental"</span><br />
                    <strong>Маршрут:</strong>
                    <br />
                    <span class="span_size">Транспорт: Metro станция "Бодомзор"
                    <br>
                    Автобус: № 67,71,85</span>
                </p>
            <?php elseif($lang=='en'):?>
                <h5 class="title">Address</h5>
                <strong>O'zbekiston Respublikasi,Toshkent, 100084, Amir Temur shoh ko‘chasi 107B</strong>
                <p>
                    <strong>Mo'ljal:</strong><br />
                    <span class="span_size">"Intercontinental" mehmonxonasi</span><br />
                    <strong>Marshurt:</strong>
                    <br />
                    <span class="span_size">Transport: Metro "Bodomzor" bekat
                    <br>
                    Avtobuslar:  № 67,71,8</span>
                </p>
            <?php elseif($lang=='cyrl'):?>
                <h5 class="title">Манзил</h5>
                <strong>Ўзбекистан, 100084, Ташкент шахар, Амир Темур Шох кўчаси, 107B</strong>
                <p>
                    <strong>Мўлжал:</strong><br />
                    <span class="span_size"> Гостиница "Intercontinental"</span><br />
                    <strong>Маршрут:</strong>
                    <br />
                    <span class="span_size">Транспорт: Метрo "Бодомзор" бекати
                    <br>
                    Автобус: № 38,51,58,67,71,85</span>
                </p>
            <?php endif;?>
        </div>
        <div class="col-md-4">
            <h5 class="title"><?= Yii::t('app', 'Telefonlar')?></h5>
            <p>
                <strong><?= Yii::t('app', 'O‘zbekiston Respublikasi IIV Xavfsiz turizmni taʼminlashni muvofiqlashtirish boshqarmasi Call-markaz')?></strong>:<br />
                <span class="span_size">1173</span><br/>
            </p>
            <p>
                <strong><?= Yii::t('app', 'Yagona telefon raqami')?></strong>:<br />
                <span class="span_size">(0-371) 200-00-88</span><br />
                <span class="span_size">1163</span><br/>
            </p>
            <p>
                <strong><?= Yii::t('app', 'Ishonch telefonlari')?></strong>:<br />
                <span class="span_size">(0-371) 200-00-88</span><br />
            </p>
            <p>
                <strong><?= Yii::t('app', 'Devonxona')?></strong>:<br />
                <span class="span_size">(998) 71-205-55-09</span><br />
            </p>
            <p>
                <strong><?= Yii::t('app', 'Faks')?></strong>:<br />
                <span class="span_size">(0-371) 233-80-68</span><br />
            </p>
            <p>
                <strong><?= Yii::t('app', 'Email')?></strong>:<br />
                <span class="span_size">info@uzbektourism.uz</span><br />
            </p>
        </div>
        <div class="col-md-4">
            <h5 class="title"><?= Yii::t('app', 'Ish rejimi')?></h5>
            <?php if($lang=='uz'):?>
                <p>
                    <strong>Dushanba-Juma</strong>:<br />
                    <span class="span_size">09:00 dan 18:00 gacha</span><br />
                </p>
                <p>
                    <strong>Tushlik vaqti</strong>:<br />
                    <span class="span_size">13:00 dan 14:00 gacha</span><br />
                </p>
                <p>
                    <strong>Dam olish kuni </strong>:<br />
                    <span class="span_size">shanba-yakshanba</span><br />
                </p>
            <?php elseif($lang=='ru'):?>
                <p>
                    <strong>понедельник-пятница</strong>:<br />
                    <span class="span_size">с 09:00 до 18:00</span><br />
                </p>
                <p>
                    <strong>обеденное время</strong>:<br />
                    <span class="span_size">с 13:00 до 14:00</span><br />
                </p>
                <p>
                    <strong>выходные дни </strong>:<br />
                    <span class="span_size">суббота-воскресенье</span><br />
                </p>
            <?php elseif($lang=='en'):?>
                <p>
                    <strong>Monday-Friday </strong>:<span class="span_size">9am-6pm</span><br />
                </p>
                <p>
                    <strong>Break  </strong>:<span class="span_size">1pm-2pm</span><br />

                </p>
                <p>
                    <strong>closed hours </strong>:<span class="span_size">Saturday-Sunday</span><br />

                </p>
            <?php elseif($lang=='cyrl'):?>
                <p>
                    <strong>душанба-жума</strong>:<br />
                    <span class="span_size"> 09:00 дан 18:00 гача</span><br />
                </p>
                <p>
                    <strong>Тушлик вақти</strong>:<br />
                    <span class="span_size"> 13:00 дан 14:00 гача</span><br />
                </p>
                <p>
                    <strong>Дам олиш кунлари </strong>:<br />
                    <span class="span_size"> шанба-якшанба</span><br />
                </p>
            <?php endif;?>
        </div>

    </div>
</div>
<hr class="line" />
<div class="row">
    <div class="col-md-6">
        <?php
        if(Yii::$app->session->hasFlash('success')){
            echo "<div class='alert alert-success'>".Yii::$app->session->getFlash('success')."</div>";
        }
        ?>
        <?php $form=ActiveForm::begin()?>
        <div class="row">
            <div class="text-center">
                <h4><?= Yii::t('app','QAYTA ALOQA')?></h4>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'fullname')->textInput()?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'email')->Input('email') ?>
            </div>
        </div>
        <div class="form-group">
            <?= $form->field($model, 'subject')->textInput() ?>
        </div>
        <div class="form-group">
            <?= $form->field($model, 'content')->textArea() ?>
        </div>
        <div class="form-group">
            <?= $form->field($model, 'verifyCode')->widget(Captcha::className()) ?>
        </div>

        <?= $form->field($model,'code')->widget(\Baha2Odeh\RecaptchaV3\RecaptchaV3Widget::className()); ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Jo‘natish') : 'Update', ['class' => $model->isNewRecord ? 'btn btn-primary' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
    <div class="col-md-6">
        <label><?= Yii::t('app', 'Xarita')?></label>
        <div>
            <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="380" id="gmap_canvas" src="https://maps.google.com/maps?q=TLScontact%20Tashkent&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div></div>
        </div>
    </div>
</div>

<style>

</style>
