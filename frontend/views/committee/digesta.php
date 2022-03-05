<?php
/**
 *
 * Author: Nurmukhammadov Shakhrizod
 * date: 15.12.2019
 */
use yii\helpers\Html;
$lang = Yii::$app->language;

$this->title =  Yii::t('app','Daydjest yangiliklari');
$this->params['breadcrumbs'][] = Yii::t('app','Daydjest yangiliklari');
$this->params['titlebreadcrumbs'] = Yii::t('app','Daydjest yangiliklari');
?>

<div class="new-thumb news imgss1"><img class="img-responsive" src="<?=\yii\helpers\Url::to(["../uploads/images/$model->image"], true)?>" alt=""> </div>
<div class="new-txt">
    <ul class="news-meta">
        <li class="sansserif">
            <?php
            echo " " . Yii::$app->formatter->asDate($model->date, 'd') . " ";
            echo \frontend\controllers\NewsController::getMonthAsString(Yii::$app->formatter->asDate($model->date, 'M')) . ", ";
            echo Yii::$app->formatter->asDate($model->date, 'Y');
            ?>
        </li>
        <li class="sansserif"><i class="fas fa-eye"></i>  <?= $model->viewed ?></li>
    </ul>
    <h4 class="sansserif"><?= $model->{'title_'.$lang} ?></h4>
    <?= \yii\helpers\StringHelper::truncate($model->{'content_'.$lang}, 200,' ...' )?>
</div>

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
</style>

    <script>
        var element = document.getElementsByClassName('main-content');
        element.style.position = null;
        element.style.removeProperty("position");
    </script>
<?php
$this->registerJs(
    "        
//        $('.imgss1').find('img').attr('data-action', 'zoom');
//        $('.imgss1').find('img').addClass('imgss13');
        "
);
?>
