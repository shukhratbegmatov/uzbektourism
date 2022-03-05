<?php
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
$data = \frontend\controllers\ServiceController::getAllAgreements1();
$count = 1;
$lang = Yii::$app->language;
$this->title =  Yii::t('app', 'LITSENZIYA REGISTRATSIYASI');
$this->params['breadcrumbs'][] =  Yii::t('app', 'LITSENZIYA REGISTRATSIYASI');
$this->params['titlebreadcrumbs'] =  Yii::t('app', 'LITSENZIYA REGISTRATSIYASI');
?>
<style>
    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        background: none;
        color: black!important;
        border-radius: 4px;
        border: 1px solid #828282;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button:active {
        background: none;
        color: black!important;
    }
</style>

<!--<div class="container-fluid" style="padding: 20px 15px 50px 15px;">-->
<!--    <div class="nopade">-->
<!--        <div class="title">--><?//= $data->{'name_' . $lang}; ?><!--</div>-->
<!---->
<!--        <div id="print-content">-->
<!--            --><?//= $data->{'text_' . $lang} ?>
<!---->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

    <br>
    <h3 class="text-center"><?php echo Yii::t('app', "Litsenziyalangan va sertifikatlangan turizm tashkilotlari reyestri"); ?></h3>
    <br>
    <div class="list-type5">
        <ol>
            <?php foreach ($data as $da):?>
            <li><a href="<?=\yii\helpers\Url::to(["/news/download?url=$da->images"], true)?>"><?php echo $da->{'name_'.$lang}; ?></a></li>
            <?php endforeach;?>
    </ol>
    </div>
<?php
$this->registerJs("
$(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
");?>




