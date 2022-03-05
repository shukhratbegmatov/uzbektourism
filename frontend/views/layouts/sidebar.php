




<?php
/**
 * Author: Nurmukhammadov Shakhrizod
 * date: 13.12.2019
 */
$this->beginContent(Yii::getAlias('@app') . '/views/layouts/main.php', ['is_inner' => true]);
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
use common\models\Hackers;
$newss = \frontend\controllers\NewsController::News();
$diges1 = \frontend\controllers\NewsController::Newsab();
$url = Yii::$app->request->url;
$hak = Hackers::find()->where(['ip' => Yii::$app->request->userIP])->count();
//if ($hak >= 4){
//    Yii::$app->response->redirect(Url::to(['/site/detected']));
//}
//if(preg_match('/(php)/i', $url) || preg_match('/(script)/i', $url)){
//    \frontend\controllers\SiteController::addHacker(Yii::$app->request->url);
//}
$lang = Yii::$app->language;
$year1 = date('Y') - 1;
$year2 = date('Y') - 2;
$year3 = date('Y') - 3;
$year4 = date('Y') - 4;
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
<section class="wf100 subheader" style="">
<!--    <div class="container">-->
<!--        <h2 class="text-center" >--><?//= $this->params['titlebreadcrumbs'] ?><!--</h2>-->
<!--    </div>-->
<!--    <div class="parallax-breadcrumb">-->
<!--        <img id="img12"  style="height: 391px; z-index: -1;" src="--><?//=\yii\helpers\Url::to(["../images/header_img.PNG"], true)?><!--" alt="" class="img-responsive img12" data-action="zoom1 !impotant">-->
<!--    </div>-->
</section>
<div class="main-content">
    <div class="">
        <div class="news-box sansserif" style="">
            <?php
            $main = Yii::t('app', 'Bosh sahifa');
            echo Breadcrumbs::widget([
                'homeLink' => ['label' => $main, 'url' => ['/']],
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]);
            ?>
        </div>
    </div>
    <div class="news-details">
        <div class=" sansserif">

            <div class="row">
                <div class="col-md-9"  style="">
                    <div class="news-box p-25 sansserif" id="cards1">
                        <?= $content ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sidebar">
                        <div class="widget">
                            <h4 class="sansserif"><?php echo Yii::t('app','SO\'NGGI YANGILIKLAR'); ?></h4>
                            <div class="recent-posts inner">
                                <ul>
                                    <?php foreach ($newss as $news):?>
                                        <li>
                                            <img src="<?=\yii\helpers\Url::to(["../uploads/images/$news->image"], true)?>" alt=""> <strong class="sansserif"><?php
                                                echo " " . Yii::$app->formatter->asDate($news->date, 'd') . " ";
                                                echo \frontend\controllers\NewsController::getMonthAsString(Yii::$app->formatter->asDate($news->date, 'M')) . ", ";
                                                echo Yii::$app->formatter->asDate($news->date, 'Y');
                                                ?></strong>
                                            <h6><a class="sansserif" href="<?=\yii\helpers\Url::to(["/news/view?id=$news->id"], true)?>"><?= \yii\helpers\StringHelper::truncate($news->{'title_' . $lang}, 30, '...');?></a></h6>
                                            <h6><a class="sansserif" href="<?=\yii\helpers\Url::to(["/news/view?id=$news->id"], true)?>"><i class="fa fa-eye" aria-hidden="true"></i> <?= $news->viewed ?></a></h6>
                                        </li>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                        </div>
                        <!--Widget End-->
                        <div class="widget">
                            <h4 class="sansserif"><?php echo Yii::t('app','DAYDJEST'); ?></h4>
                            <div class="recent-posts inner">
                                <ul>
                                    <?php foreach ($diges1 as $news):?>
                                        <li class="sansserif">
                                            <img src="<?=\yii\helpers\Url::to(["../uploads/images/$news->image"], true)?>" alt=""> <strong class="sansserif"><?php
                                                echo " " . Yii::$app->formatter->asDate($news->date, 'd') . " ";
                                                echo \frontend\controllers\NewsController::getMonthAsString(Yii::$app->formatter->asDate($news->date, 'M')) . ", ";
                                                echo Yii::$app->formatter->asDate($news->date, 'Y');
                                                ?></strong>
                                            <h6><a class="sansserif" href="<?=\yii\helpers\Url::to(["/committee/digesta?id=$news->id"], true)?>"><?= \yii\helpers\StringHelper::truncate($news->{'title_' . $lang}, 30, '...');?></a></h6>
                                            <h6><a class="sansserif" href="<?=\yii\helpers\Url::to(["/committee/digesta?id=$news->id"], true)?>"><i class="fa fa-eye" aria-hidden="true"></i> <?= $news->viewed ?></a></h6>
                                        </li>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                        </div>
                        <!--Widget End-->
                        <!--Widget Start-->
                        <div class="widget">
                            <h4 class="sansserif"><?php echo Yii::t('app','ARXIVLAR'); ?></h4>
                            <div class="archives inner">

                                <ul>
                                    <li><a class="sansserif" href="<?=\yii\helpers\Url::to(["/news?date=$year1"], true)?>"><?php echo Yii::t('app','Yangiliklar'); ?> <?= $year1; ?></a></li>
                                    <li><a class="sansserif" href="<?=\yii\helpers\Url::to(["/news?date=$year2"], true)?>"><?php echo Yii::t('app','Yangiliklar'); ?> <?= $year2; ?></a></li>
                                    <li><a class="sansserif" href="<?=\yii\helpers\Url::to(["/news?date=$year3"], true)?>"><?php echo Yii::t('app','Yangiliklar'); ?> <?= $year3; ?></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <!--Sidebar End-->
            </div>
        </div>
    </div>
    <!--News Details Page End-->
</div>
<?php $this->endContent(); ?>
<script>
    document.getElementsByTagName("img")[0].removeAttribute("data-action");
</script>
<?php
$this->registerJs(
    "$('.img12').removeAttr('data-action');"
);

?>