<?php

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$lang = Yii::$app->language;

$this->title = Yii::t('app','Dayjest yangiliklari');
$this->params['breadcrumbs'][] = Yii::t('app','Dayjest yangiliklari');
$this->params['titlebreadcrumbs'] = Yii::t('app','Dayjest yangiliklari');
use yii\widgets\LinkPager; ?>
<style type="text/css">
    body {
        /*font-family: 'Open Sans', sans-serif;*/
        /*background-image: url("../bg-01.svg") !important;*/
        /*height: 100vh !important;*/
    }
    .sansserif {
        font-family: 'Open Sans', sans-serif;
    }
</style>




<div class="news-index " >
    <div class="news">
        <?php $i = 1;
        foreach ($news as $item): ?>

            <!--            --><?php //if ($i % 2 != 0) { ?>
            <div class="column">
                <!--            --><?php //} ?>
                <div class="news-box">
                    <a href="<?=\yii\helpers\Url::to(["/committee/digesta?id=$item->id"], true)?>"><div class="new-thumb"><img class="img-responsive" src="<?=\yii\helpers\Url::to(["../uploads/images/$item->image"], true)?>" alt=""></div></a>
                    <div class="new-txt" style="height: 263px">
                        <ul class="news-meta sansserif">
                            <li><?php
                                echo " " . Yii::$app->formatter->asDate($item->date, 'd') . " ";
                                echo \frontend\controllers\NewsController::getMonthAsString(Yii::$app->formatter->asDate($item->date, 'M')) . ", ";
                                echo Yii::$app->formatter->asDate($item->date, 'Y');
                                ?></li>
                            <li><i class="fa fa-eye"></i> <?= $item->viewed ?></li>
                        </ul>
                        <h6>
                            <a class="sansserif" style="font-size: 16px" href="<?=\yii\helpers\Url::to(["/committee/digesta?id=$item->id"], true)?>"><?= $item->{'title_' . $lang} ?></a>
                        </h6>
                        <p class="sansserif"> <?= \yii\helpers\StringHelper::truncate($item->{'desc_' . $lang}, 200,' ...' )?> </p>
                    </div>
                    <div class=" sansserif news-box-f">  <a
                                href="/<?= $lang . "/committee/digesta?id=" . $item->id ?>"><i
                                    class="fas fa-arrow-right"></i></a></div>
                </div>
                <!--            --><?php //if ($i % 2 == 0) { ?>
            </div>
            <!--            --><?php //} ?>

            <?php $i++; endforeach; ?>

    </div>
    <div class="row text-center">
        <div class="site-pagination">
            <?=  \justinvoelker\separatedpager\LinkPager::widget ( [
                'id'=>'my-pager',
                'pagination' => $pagination ,
                'activePageCssClass' => 'active' ,

                'maxButtonCount' => 7 ,
                'options' => [
                    'class' => 'pagination'
                ]
            ] ); ?>
        </div>

    </div>

</div>