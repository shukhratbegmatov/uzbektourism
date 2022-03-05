<?php
/**
 * Author: Nurmukhammadov Shakhrizod
 * date: 13.12.2019
 */
use yii\helpers\Html;
$lang = Yii::$app->language;
$this->title = $title->{'name_'.$lang};
$this->title = $title->{'name_'.$lang};
$this->params['breadcrumbs'][] =  $title->{'name_'.$lang};
$this->params['titlebreadcrumbs'] =  $title->{'name_'.$lang};
?>
<style>
    .news-box{
        padding: 0 !important;
    }
    .news  {
        /*height: auto;*/
        height: 400px;
    }
    @media screen and (max-width: 700px){
        .news-box img{
            width: 100% !important;
            height: auto !important;
        }
    }
    .sansserif {
        font-family: 'Open Sans', sans-serif;
    }

    table{
        width: 864px;
        display: block;
        max-width: -moz-fit-content;
        overflow-x: auto;
        //white-space: nowrap;
    }
    td{
        width: 60px!important;
        text-align: left;
        padding: 8px;
    }

</style>
<?php foreach ($models as $model): ?>
<div class="new-txt">
    <ul class="news-meta">
        <li class="sansserif"><?= $model->create_date; ?></li>
    </ul>
    <h4 class="text-center sansserif"><?= $model->{'name_'.$lang} ?></h4>
    <h3 class="text-center sansserif"><?= $model->{'title_'.$lang} ?></h3>
    <?php if (isset($model->images)):?>
    <div class="new-thumb news">
        <img class="img-responsive" src="/sum_men_img/<?= $model->images ?>" alt="">
    </div>
    <?php endif;?>
    <p class="text-center sansserif"><?= Html::decode($model->{'text_'.$lang}) ?></p>
</div>

<?php endforeach;?>

