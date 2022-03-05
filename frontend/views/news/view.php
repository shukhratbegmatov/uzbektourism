<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\News */
$lang = Yii::$app->language;
$this->title = $model->{'title_'.$lang} ;

$this->registerMetaTag(['property' => 'og:type', 'content' => 'article']);
$this->registerMetaTag(['property' => 'og:image', 'content' => 'https://uzbektourism.uz/uploads/images/'.$model->image]);
$this->registerMetaTag(['property' => 'og:data', 'content' => Yii::$app->formatter->asDate($model->date)]);
$this->registerMetaTag(['property' => 'og:url', 'content' => 'https://uzbektourism.uz'.Url::current()]);
$this->registerMetaTag(['property' => 'og:description', 'content' => Html::decode($model->{'desc_'.$lang})  ]);
$this->registerMetaTag(['property' => 'og:title', 'content' => $this->title]);
$this->registerMetaTag(['property' => 'og:site_name', 'content' => 'Uzbektourism.uz']);
$this->params['breadcrumbs'][] = $this->title;
$this->params['titlebreadcrumbs'] = $this->title;
?>


    <div class="imgss1"><img style="display: block;" class="img-responsive" src="/uploads/images/<?= $model->image ?>" > </div>



    <div class="new-txt sansserif imgss1">
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
        <p class="sansserif"><?= Html::decode($model->{'content_'.$lang}) ?></p>
    </div>

<style>
    body {
        font-family: 'Open Sans', sans-serif !important;
    }

    .navbar-fixed-bottom, .navbar-fixed-top{
        z-index: 420!important;
    }
    span{
        font-size: 14px !important;
    }


    .main-content{
        position:initial;
    }
    .imgss1 > img{
        display: block;
        margin: 0 auto;
    }
    .zoom-img-wrap  > img{
        height: 767px !important;
        max-width: 100%!important;
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
        $('.imgss1').find('img').attr('data-action', 'zoom');
        $('.imgss1').find('img').addClass('imgss13');
        "
        );
?>



