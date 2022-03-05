<?php
/**
 * Author: Nurmukhammadov Shakhrizod
 * date: 13.12.2019
 */
$this->params['breadcrumbs'][] = Yii::t('app',"Vazirlik tarkibi");
$this->params['titlebreadcrumbs'] = Yii::t('app',"Vazirlik tarkibi");
$this->title = Yii::t('app',"Vazirlik tarkibi");
?>
<style>
    .sansserif {
        font-family: 'Open Sans', sans-serif;
    }
</style>
<!--<h1 class="sansserif">--><?//= Yii::t('app','СТРУКТУРА КОМИТЕТА') ?><!--</h1>-->
<div class="container-fluid">
    <div class="text-center" >

        <a class="sansserif" href="<?=\yii\helpers\Url::to(["../img/structure.png"], true)?>" target="_blank"><img style="width: 100%" src="<?=\yii\helpers\Url::to(["../img/structure.png"], true)?>" alt="structure" class=""></a>
    </div>
</div>