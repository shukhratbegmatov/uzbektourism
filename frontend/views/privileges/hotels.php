<?php
/**
 * Author: Nurmukhammadov Shakhrizod
 * date: 16.12.2019
 */
use GuzzleHttp\Client;
$lang = Yii::$app->language;

$this->title = $model->{'name_'.$lang};
$this->params['breadcrumbs'][] = $this->title;
$this->params['titlebreadcrumbs'] = $this->title;


?>
<style>
    .sansserif {
        font-family: 'Open Sans', sans-serif !important;
    }

</style>
<div class="sansserif">
    <?= $model->{'text_'.$lang} ?>
</div>
<iframe width="100%" height="400px" src="https://www.youtube.com/embed/4WAahwcVNjI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
