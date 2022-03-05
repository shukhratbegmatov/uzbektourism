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
<?php if ($lang === "uz"){ ?>
    <iframe width="100%" height="460" src="https://mover.uz/video/embed/N8VEXg8m/" frameborder="0" allowfullscreen></iframe>
    <iframe width="100%" height="460" src="https://mover.uz/video/embed/AuzuXg8m/" frameborder="0" allowfullscreen></iframe>
<?php }else{ ?>
    <iframe width="100%" height="460" src="https://mover.uz/video/embed/OpFCXg8m/" frameborder="0" allowfullscreen></iframe>
    <iframe width="100%" height="460" src="https://mover.uz/video/embed/tbdBXg8m/" frameborder="0" allowfullscreen></iframe>
<?php }?>

