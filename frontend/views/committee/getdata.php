<?php
$lang = Yii::$app->language;
$this->title =  Yii::t('app', "Gidlar");
$this->params['titlebreadcrumbs'] =  Yii::t('app', "Gidlar");
$this->params['breadcrumbs'][] =  ['label' => Yii::t('app', "Gid-ekskursiya yetakchilari Yagona elektron reyestri"), 'url' => ['committee/guides']];
$this->params['breadcrumbs'][] =  Yii::t('app', "Gidlar");
?>
<style>
        @media only screen and (max-width: 600px) {
            .w3-twothird, .w3-third {
                padding: 0 0 !important;

            }
        }
        .p-25 {
            padding: 0!important;
        }


        h3 {
            margin: 10px 0;
        }
        p {
            /*margin-top: 15px;*/
            font-size: 14px;
            line-height: 18px;
        }
        @media only screen and (min-width: 768px) {
            .card-container {
                margin: 30px 30% 30px 30%;
            }
        }
        @media only screen and (max-width: 768px) {
            /*.card-container {*/
            /*    margin: 0 8% 0 8%;*/
            /*}*/
        }

        .card-container .round {
            border: 1px solid #03BFCB;
            border-radius: 50%;
            padding: 7px;
        }

        button.primary {
            background-color: #03BFCB;
            border: 1px solid #03BFCB;
            border-radius: 3px;
            color: #231E39;
            font-family: Montserrat, sans-serif;
            font-weight: 500;
            padding: 10px 25px;
        }

        button.primary.ghost {
            background-color: transparent;
            color: #02899C;
        }

        .skills {
            background-color: #26a662;
            text-align: left;
            padding: 1px 15px 15px 19px;
            margin-top: 30px;
        }

        .skills ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .skills ul li {
            border: 1px solid rgb(255 255 255 / 46%);
            border-radius: 2px;
            display: inline-block;
            font-size: 12px;
            margin: 0 7px 7px 0;
            padding: 7px;
        }
        .card-container {
            background: linear-gradient(45deg, #0B63F6, #000000);
            border-radius: 5px;
            box-shadow: 0px 10px 20px -10px rgb(0 0 0 / 75%);
            color: #fafafa;
            padding-top: 30px;
            position: relative;
            width: 350px;
            max-width: 100%;
        }
        .top{
            text-align: center;
        }
        .top1{
            padding-left: 15px;
        }
        .top .pro {
            border-radius: 3px;
            font-size: 14px;
            font-weight: bold;
            padding: 3px 7px;
            position: absolute;
            top: 30px;
            left: 30px;
        }



        .sansserif {
            font-family: 'Open Sans', sans-serif;
        }
    </style>
<?php if(empty($body['error'])):?>
<?php
    $language = explode(',',$body['language']);
    $category = \frontend\controllers\CommitteeController::Category($body['category_guide']);
    $sert = !empty($body['attestation_sertificate']) ? $body['attestation_sertificate'] : '---------';
    $region = !empty($body['region_id']) ? explode(",", $body['region_id']) : '---------';


    ?>
    <div class="card-container" style="">
        <div class="top">
            <img class="round" src="https://data.uzbektourism.uz/uploads/guide/<?= $body['photo']; ?>" alt="user"  style="width: 205px; height: 200px;"/>
        </div>
        <div class="">
            <h3 class="sansserif" style="margin: 10px 0 10px 15px; text-align: center; width: 90%;"><?= $body['fio_uz']; ?></h3>
        </div>
        <div class="top1">
            <div class="row">
                <div class="col-sm-12 col-12">
                    <p><b><?= Yii::t('app', "Faoliyat olib boradigan hududi"); ?>: </b> <br>
                        <?php foreach ($region as $reg => $key ): ?>
                            <span><?= Yii::t('app', $key); ?>, </span>
                        <?php endforeach; ?>
                    </p>
                    <p><b><?= Yii::t('app', "Sertifikat (beyj) raqami"); ?>:</b><br> <?= $sert; ?></p>
                </div>
            </div>
        </div>
        <div class="top1">
            <div class="row">
                <div class="col-sm-6  col-xs-6">
                    <p><b><?= Yii::t('app', "Amal qilish muddati"); ?>:</b> <br><?= $body['beydj_date']; ?></p>
                    <p><b><?= Yii::t('app', "Toifasi"); ?>: </b> <br><?= $category; ?></p>
                </div>
                <div class="col-sm-6  col-xs-6">
                    <span class="pro"><img style="width: 118px;" src="https://data.uzbektourism.uz/uploads/qrcode/qrcode<?= $body['id'];?>.png" alt="user"/></span>
                </div>
            </div>
        </div>
        <div class="top">
        </div>
        <div class="skills">
            <h6 class="sansserif"><?= Yii::t('app', "Faoliyat olib boradigan tili"); ?>: </h6>
            <ul>
                <?php foreach ($language as $langs => $key ):?>
                    <li><?=Yii::t('app', $key);?></li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
<?php else: ?>
    <div class="alert alert-warning" role="alert">Ulanishda xatolik! <?= $body['error'];?> </div>
<?php endif;?>