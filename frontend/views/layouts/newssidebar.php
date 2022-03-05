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
<link href="<?=\yii\helpers\Url::to(["../images/gerb1.png"], true)?>"  rel="icon">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

<!--Sub Header End-->
<!--Main Content Start-->
<div class="main-content">
    <div class="">
        <div class="news-box" style="">
            <?php
            $main = Yii::t('app', 'Bosh sahifa');
            echo Breadcrumbs::widget([
                'homeLink' => ['label' => $main, 'url' => ['/']],
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]);
            ?>
        </div>
    </div>
    <!--News Details Page Start-->
    <div class="news-details">
        <div class="container-fluid">
            <div class="row">
                <!--Content Col Start-->
                <div class="col-md-12" style="z-index: 9">
                    <div class="">
                        <?= $content ?>
                    </div>
                </div>
                <!--Content Col End-->
                <!--Sidebar Start-->
                <!--Sidebar End-->
            </div>
        </div>
    </div>
    <!--News Details Page End-->
</div>
<?php $this->endContent(); ?>
