<?php

use yii\widgets\ListView;
use yii\widgets\LinkPager;
use yii\helpers\Html;


$lang = Yii::$app->language;
$this->title =  Yii::t('app', 'Статистика обращений');
$this->params['breadcrumbs'][] = Yii::t('app', 'Статистика обращений');
$this->params['titlebreadcrumbs'] = Yii::t('app', 'Статистика обращений');
?>

<style>
    body{
        font-family: 'Open Sans', sans-serif !important;
    }
</style>

<title><?= $this->title; ?></title>
<div class="title"><?= Yii::t('app', 'Статистика обращений')?></div>
<br>
<div id="print-content">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a href="<?=\yii\helpers\Url::to(["downloads/files/мурожаатлар_туризм_1-чорак.xls"], true)?>"><?= Yii::t('app', 'Статистика обращений')?></a>
                </h4>
            </div>
        </div>
    </div>
</div>


