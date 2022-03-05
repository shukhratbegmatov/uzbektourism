<?php

use yii\widgets\ListView;
use yii\widgets\LinkPager;
use yii\helpers\Html;
$data = \frontend\controllers\ServiceController::getAllAgreements();
$lang = Yii::$app->language;
$this->title =  $data->{'name_'.$lang};
$this->params['breadcrumbs'][] = $data->{'name_'.$lang};
$this->params['titlebreadcrumbs'] = $data->{'name_'.$lang};
?>
<style>
    body{
        font-family: 'Open Sans', sans-serif !important;
    }
</style>
<div id="print-content">
    <?= $data->{'text_'.$lang} ?>
</div>

