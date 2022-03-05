<?php
/**
 * Author: Nurmukhammadov Shakhrizod
 * date: 15.12.2019
 */
$lang = Yii::$app->language;

$this->title = $model->{'name_'.$lang};
$this->params['breadcrumbs'][] = $this->title;
$this->params['titlebreadcrumbs'] = $this->title;
?>
<style type="text/css">

</style>
<div>
<!--    <p class="padd">--><?//= $model->{'text_'.$lang} ?><!--</p>-->
</div>
<!-- Exercise and idea from: https://www.formget.com/css-lists/ -->
<style>
    .sansserif {
        font-family: 'Open Sans', sans-serif;
    }
</style>

<style>
    .list-type5 ol li:before {
        content: none;
    }
</style>
<div class="list-type5">
    <ol>
        <li style="color: white"><p class="sansserif" ><?= $model->{'text_'.$lang} ?></p></li>
    </ol>
</div>


