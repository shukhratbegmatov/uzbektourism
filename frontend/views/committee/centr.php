<?php
/**
 * Author: Nurmukhammadov Shakhrizod
 * date: 13.12.2019
 */
$this->params['breadcrumbs'][] = Yii::t('app','Markaziy apparat');
$this->params['titlebreadcrumbs'] = Yii::t('app','Markaziy apparat');
$this->title = Yii::t('app','Markaziy apparat');
$lang = Yii::$app->language;
$licence = \frontend\controllers\CommitteeController::getAllCentr();
$pagination = \frontend\controllers\CommitteeController::getCentrPagination();

use yii\widgets\LinkPager; ?>
<?php foreach ($licence as $items): ?>
    <?php
    if ($items->id == 1){
        $this->title = $items->{'name_'.$lang};
    }
    ?>

<?php endforeach;?>
<style>
    .sansserif {
        font-family: 'Open Sans', sans-serif;
    }
</style>
<title><?= $this->title; ?></title>
<div class="title sansserif"><?= $this->title; ?></div><br>



<div class="">
    <div class="table-responsive">
        <table class="table table-bordered   table-striped" >
            <thead class="table__head">
            <tr class="winner__table">
                <th>№</th>
                <th><i class="fa fa-user" aria-hidden="true"></i> <?=Yii::t('app', 'FIO');?></th>
                <th><i class="fa fa-star" aria-hidden="true"></i> <?=Yii::t('app', 'Lavozim');?> </th>
                <th> <i class="fa fa-phone" aria-hidden="true"></i> <?=Yii::t('app', 'Telefon raqam');?> </th>
                <th><i class="fa fa-map-marker" aria-hidden="true"></i> <?=Yii::t('app', 'Boshqarma');?> </th>
            </tr>
            </thead>
            <tbody>
            <?php $a = 1; foreach ($licence as $items): ?>
            <tr class="winner__table">
                <td><?=$a++; ?></td>
                <td><?= $items->{'fio_'.$lang};?></td>
                <td><?= $items->{'doljnost_'.$lang};?></td>
                <td>+99871 <?= $items->tel;?></td>
                <td><?= $items->{'imya_'.$lang};?></td>
            </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>

<style>

    .table__head{
        color: #FFF;
        font-weight: 700;
        background: #9b4085;
        background: -moz-linear-gradient(-45deg, #9b4085 0%, #608590 100%);
        background: -webkit-linear-gradient(-45deg, #9b4085 0%,#608590 100%);
        background: linear-gradient(135deg, #3b3b79 0%,#608590 100%);
        white-space: nowrap;
    }
    .table-bordered td, .table-bordered th{
        border: 0px solid #FFF;
    }
    .coin {
        width:8%;
        margin-left: 5px;
        -webkit-animation:spin 4s linear infinite;
        -moz-animation:spin 4s linear infinite;
        animation:spin 4s linear infinite;
    }
    @-moz-keyframes spin { 100% { -moz-transform: rotate(360deg); } }
    @-webkit-keyframes spin { 100% { -webkit-transform: rotate(360deg); } }
    @keyframes spin { 100% { -webkit-transform: rotate(360deg); transform:rotate(360deg); } }

    .winner__table{
        white-space: nowrap;
    }

    @media screen and (max-width: 567px) {

        .winner__table{
            font-size: 12px;
        }
        .coin {
            width:15%;
            margin-left:2px;
        }
    }
</style>