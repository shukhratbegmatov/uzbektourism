
<?php


if($model){
    $lang = Yii::$app->language;
    $this->title =  $model->{'name_'.$lang};
    $this->params['breadcrumbs'][] = $model->{'name_'.$lang};
    $this->params['titlebreadcrumbs'] =  $model->{'name_'.$lang};
    ?>


    <div class="title"><?= $model->{'name_'.$lang};?></div>
<!--    <div class="pull-right"><a href="#" class="btn btn-xs btn-primary print-btn"><i class="glyphicon glyphicon-print"></i>&nbsp;--><?//= Yii::t('app', 'Chop etish'); ?><!--</a></div>-->
    <div id="print-content">
        <?= $model->{'text_'.$lang};?>
    </div>

    
<?php }elseif ($models) {
    $this->title =  Yii::t('app', 'Tizimdagi tashkilotlar');
    $this->params['breadcrumbs'][] = Yii::t('app', 'Tizimdagi tashkilotlar');
    $this->params['titlebreadcrumbs'] =  Yii::t('app', 'Tizimdagi tashkilotlar');

  ?>
    <style>
        .sansserif {
            font-family: 'Open Sans', sans-serif;
        }
    </style>
    <title class="sansserif">Tasarrufiy tashkilotlar</title>

    <div class="list-type5">
        <ol>
            <li><a class="sansserif" href="<?=\yii\helpers\Url::to(["/committee/organizations?id=1"], true)?>"><?=Yii::t('app', '"MTMTQ" DUK');?></a></li>
            <li><a class="sansserif" href="<?=\yii\helpers\Url::to(["/committee/organizations?id=2"], true)?>"><?=Yii::t('app', '"TSKTvMORM" DUK');?></a></li>
            <li><a class="sansserif" href="<?=\yii\helpers\Url::to(["/committee/organizations?id=4"], true)?>"><?=Yii::t('app', '"TXKvDM" DUK');?></a></li>
            <li><a class="sansserif" href="<?=\yii\helpers\Url::to(["/committee/certification"], true)?>"><?=Yii::t('app', '"TXSM" DUK');?></a></li>
        </ol>
    </div>
  <?php }?>
<style>
    body{
        color: #000;
    }
</style>






