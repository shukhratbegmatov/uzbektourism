<?php
/**
 * Author: Nurmukhammadov Shakhrizod
 * date: 13.12.2019
 */
$this->beginContent(Yii::getAlias('@app') . '/views/layouts/main.php', ['is_inner' => true]);
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
use common\models\Hackers;
$url = Yii::$app->request->url;
$hak = Hackers::find()->where(['ip' => Yii::$app->request->userIP])->count();
//if ($hak >= 4){
//    Yii::$app->response->redirect(Url::to(['/site/detected']));
//}
//if(preg_match('/(php)/i', $url) || preg_match('/(script)/i', $url)){
//    \frontend\controllers\SiteController::addHacker(Yii::$app->request->url);
//}

?>
<link href="<?=\yii\helpers\Url::to(["../images/gerb1.png"], true)?>"  rel="icon">
<section class="wf100 subheader" style="">
    <div class="container">
    </div>
<!--    <div class="parallax-breadcrumb">-->
<!--        <img style="height: 373px; z-index: -1;" src="--><?//=\yii\helpers\Url::to(["../images/header_img.PNG"], true)?><!--" alt="" class="img-responsive">-->
<!--    </div>-->
</section>
<!--Sub Header End-->
<!--Main Content Start-->
<style>
    .sansserif {
        font-family: 'Open Sans', sans-serif !important;
    }
    @media only screen and (min-width: 769px) {
        .news-box{
            padding: 2% 2% 0 2% !important; margin-bottom: 20px;
        }
    }
    @media only screen and (max-width: 769px) {
        .news-box{
            padding: 15% 10px 0 10px !important; margin-bottom: 20px;
        }
    }
</style>
<div class="main-content">
    <div class="container">
        <div class="news-box" style="padding: 2% 0 0 0 !important; margin-bottom: 20px;">
            <?php
            $main = Yii::t('app', 'Bosh sahifa');
            echo Breadcrumbs::widget([
                'homeLink' => ['label' => $main, 'url' => ['/']],
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]);
            ?>
        </div>
    </div>
        <div class="container" style="z-index: 9">
            <?= $content ?>
        </div>


    
</div>
<?php $this->endContent(); ?>
