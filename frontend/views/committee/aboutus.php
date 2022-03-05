<?php
/**
 * Author: Nurmukhammadov Shakhrizod
 * date: 13.12.2019
 */

$lang = Yii::$app->language;

$this->title = $model->{'name_'.$lang};
$this->params['titlebreadcrumbs'] = $model->{'name_'.$lang};
$this->params['breadcrumbs'][] = $model->{'name_'.$lang};
?>
<style>
    .sansserif {
        font-family: 'Open Sans', sans-serif;
    }
    body{
        color: #000!important;
    }
    h4 {
        font-weight: 600;
    }
</style>
<div class="sansserif aboutus-content" >
    <p class="sansserif" style="text-align: justify; font-size: 16px"><?= $model->{'text_'.$lang}; ?></p>
</div>


