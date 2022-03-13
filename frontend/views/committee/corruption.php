<?php
/**
 * Author: Nurmukhammadov Shakhrizod
 * date: 13.01.2020
 */
$this->title = Yii::t('app', 'Korrupsiyaga qarshi');
$this->params['breadcrumbs'][] = Yii::t('app', 'Korrupsiyaga qarshi');
$this->params['titlebreadcrumbs'] = Yii::t('app', 'Korrupsiyaga qarshi');
?>
<title><?= $this->title ?></title>
<style type="text/css">
    .padd {
        box-shadow: none;
        font-family: 'Lato', sans-serif;
        font-size: 18px;
        line-height: 30px;
        font-weight: 700;
        padding: 0 10px 0 20px;
        position: relative;
        background: #eeeeee;
        border: 1px solid #00000029;
        border-radius: 4px;
        color: cadetblue;
    }

    .sansserif {
        font-family: 'Open Sans', sans-serif;
    }
</style>


<div class="list-type5">
    <ol>
        <li><a class="sansserif"
               href="https://undocs.org/ru/A/RES/58/4"><?= Yii::t('app', "Birlashgan Millatlar Tashkilotining korrupsiyaga qarshi Konvensiyasi, 2003-y."); ?></a>
        </li>
        <li><a class="sansserif"
               href="https://lex.uz/docs/-5495529"><?= Yii::t('app', "O‘zbekiston Respublikasi Prezidentining 2021 yil 6 iyuldagi “Korrupsiyaga qarshi murosasiz munosabatda bo‘lish muhitini yaratish, davlat va jamiyat boshqaruvida korrupsiyaviy omillarni keskin kamaytirish va bunda jamoatchilik ishtirokini kengaytirish chora-tadbirlari to‘g‘risida”gi PF-6257-son Farmoni"); ?></a>
        </li>
        <li><a class="sansserif"
               href="https://lex.uz/docs/-5495533"><?= Yii::t('app', "O‘zbekiston Respublikasi Prezidentining 2021 yil 6 iyuldagi “Korrupsiyaga qarshi kurashish faoliyatini samarali tashkil etishga doir qo‘shimcha chora-tadbirlar to‘g‘risida”gi PQ-5177-son qarori"); ?></a>
        </li>
        <li><a class="sansserif"
               href="https://lex.uz/docs/-3088008"><?= Yii::t('app', "O‘zbekiston Respublikasining 2017-yil 3-yanvardagi “Korrupsiyaga qarshi kurashish to‘g‘risida”gi O‘RQ-419-son Qonuni"); ?></a>
        </li>
        <li><a class="sansserif"
               href="https://lex.uz/docs/-111453"><?= Yii::t('app', "O‘zbekiston Respublikasining Jinoyat kodeksi (O‘zR 22.09.1994 y. 2012-XII-son Qonuni bilan tasdiqlangan)"); ?></a>
        </li>
        <li><a class="sansserif"
               href="https://uzbektourism.uz/downloads/files/korrupsiya-1-ilova.pdf"><?= Yii::t('app', "Turizm va sport vazirligi va uning tizim tashkilotlarida korrupsiyaviy xavf-xatarlar xaritasi"); ?></a>
        </li>
        <li><a class="sansserif"
               href="https://uzbektourism.uz/downloads/files/korrupsiya-2-ilova.pdf"><?= Yii::t('app', "Korrupsiya xavf-xatariga eng ko‘p moyil bo‘lgan lavozimlar"); ?></a>
        </li>
        <li><a class="sansserif"
               href="https://uzbektourism.uz/downloads/files/korrupsiya-3-ilova.pdf"><?= Yii::t('app', "Turizm va sport vazirligi va uning tizim tashkilotlarining korrupsiyaga qarshi kurashish dasturi"); ?></a>
        </li>

    </ol>
</div>
<style>
    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
    }

    /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
    }

    .tab-page {
        padding: 50px 5px;
        margin: 50px 0;
    }

    .input {
        margin-top: 25px;

    }

    .input label {
        font-size: 14px;
        color: black;
    }
</style>


<div class="tab-page">
    <div class="tab d-flex">
        <button class="tablinks active d-flex" onclick="openCity(event, 'London')"><?= Yii::t('app', "Murojat"); ?></button>
        <button class="tablinks d-block" onclick="openCity(event, 'Paris')"><?= Yii::t('app', "Idoraviy hujjatlar"); ?></button>
        <button class="tablinks d-block" onclick="openCity(event, 'Tokyo')"><?= Yii::t('app', "Amalga oshiriladigan ishlar"); ?></button>
    </div>


    <div id="London" class="tabcontent" style="display: block">
        <h3 style="padding-top: 15px"><?= Yii::t('app', "Xodimlar xatti xarakatiga oid korrupsiyani oldini olish bo'yicha murojat"); ?></h3>

        <?php $form = \yii\widgets\ActiveForm::begin(); ?>
        <div class="row">
            <div class="col-md-12 input">
                <label for=""><?= Yii::t('app', "Kim tomonidan"); ?></label>
                <select name="CorruptionForm[type]" id="" class="form-control">
                    <option value="Jismoniy shaxs"><?= Yii::t('app', "jismoniy shaxs"); ?></option>
                        <option value="Yuridik shaxs"><?= Yii::t('app', "Yuridik shaxs"); ?>s</option>

                </select>
            </div>
            <div class="col-md-12 input">
                <label for=""><?= Yii::t('app', "Ariza beruvchining ism familiyasi"); ?> *</label>
                <input type="text" required name="CorruptionForm[full_name]" class="form-control" placeholder="Ф.И.Ш">
            </div>
            <div class="col-md-12 input">
                <label for=""><?= Yii::t('app', "Manzil"); ?> *</label>
                <input type="text" required name="CorruptionForm[address]" class="form-control" placeholder="<?= Yii::t('app', "Manzil"); ?>">
            </div>
            <div class="justify-content-between">
                <div class="col-md-6 input">
                    <label for=""><?= Yii::t('app', "Telefon"); ?> *</label>
                    <input type="text" required name="CorruptionForm[phone]" class="form-control" placeholder="<?= Yii::t('app', "Telefon"); ?>">
                </div>
                <div class="col-md-6 input">
                    <label for=""><?= Yii::t('app', "Elektron pochta"); ?> *</label>
                    <input type="text" required name="CorruptionForm[email]" class="form-control" placeholder="<?= Yii::t('app', "Elektron pochta"); ?> ">
                </div>
            </div>
            <div class="col-md-12 input">
                    <label for=""><?= Yii::t('app', "Murojat xati"); ?> *</label>
                <textarea type="text" required name="CorruptionForm[text]" class="form-control" placeholder="<?= Yii::t('app', "Murojat xati"); ?>" rows="5"></textarea>
            </div>

        </div>
        <button type="submit" class="btn btn-success input"><?= Yii::t('app', "Jo'natish"); ?></button>
        <?php \yii\widgets\ActiveForm::end() ?>


    </div>

    <div id="Paris" class="tabcontent">
        <h3><?= Yii::t('app', "Korrupsiyaga kurashish bo'yicha idoraviy hudjjatlar"); ?></h3>
    </div>

    <div id="Tokyo" class="tabcontent mb-4 pb-5">
        <h3><?= Yii::t('app', "Korrupsiyaga qarshi kurasish amalga oshirilayotgan ishlar"); ?></h3>
    </div>
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
</div>




