<?php
/**
 *
 * Author: Nurmukhammadov Shakhrizod
 * date: 15.12.2019
 */

$lang = Yii::$app->language;

$this->title =  Yii::t('app','UNWTO');
$this->params['breadcrumbs'][] = Yii::t('app','UNWTO');
$this->params['titlebreadcrumbs'] = Yii::t('app','UNWTO');
?>
<style>
    .sansserif {
        font-family: 'Open Sans', sans-serif !important;
    }
</style>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <?php foreach ($model as $item): ?>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
            <h6 class="panel-title">
                <a role="button" class="sansserif" data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $item->id ?>" aria-expanded="false" aria-controls="collapseOne" class="collapsed"> <?= $item->{'name_'.Yii::$app->language} ?> </a>
            </h6>
            </div>
            <div id="collapse<?= $item->id ?>" class="panel-collapse collapse" role="tabpanel"
                 aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                <div class="panel-body sansserif ">
                    <?= $item->{'text_'.Yii::$app->language} ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
