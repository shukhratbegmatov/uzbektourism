<?php
/**
 * Author: Nurmukhammadov Shakhrizod
 * date: 13.12.2019
 */
$lang = Yii::$app->language;
$this->params['breadcrumbs'][] = $model->{'name_'.$lang};
$this->params['titlebreadcrumbs'] = $model->{'name_'.$lang};
$this->title = $model->{'name_'.$lang};
?>
<style>
    .sansserif {
        font-family: 'Open Sans', sans-serif;
    }
</style>
<div class="licence-content sansserif">
    <?= $model->{'text_'.$lang} ?>
</div>

