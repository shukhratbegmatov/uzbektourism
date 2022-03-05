<?php

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$lang = Yii::$app->language;

$this->title = Yii::t('app','Yangiliklar') ;
$this->params['breadcrumbs'][] = $this->title;
$this->params['titlebreadcrumbs'] = $this->title;

use yii\widgets\ActiveForm;
use yii\widgets\LinkPager; ?>
<style type="text/css">
    body {
        /*color: #000; !important;*/
        /*background-image: url("../bg-01.svg") !important;*/
        /*height: 100vh !important;*/
    }

    .sansserif {
        font-family: 'Open Sans', sans-serif !important;
    }
    .title_hover:hover{
        color: #0089ff !important;
    }
    .new-txt {
        height: 363px;
    }

    .field {
        display:flex;
        position:realtive;
        margin:1em auto;
        width:80%;
    }

    .field>input[type=text],
    .field>button {
        display:block;
        font:1.2em Myriad Pro;
    }

    .field>input[type=text] {
        flex:1;
        /*padding:0.6em;*/
        /*border:0.2em ;*/
    }

    .field>button {
        padding:0.6em 0.8em;
        background-color:#2ecc71;
        color:white;
        border:none;
    }
    .field>button:hover {
        cursor:pointer;
    }

    input[type=text]:not(.browser-default){
        margin: 0 0 0px 0 !important;
    }

</style>
<div class="field" id="searchform">


    <input type="text" id="searchterm" placeholder="<?=Yii::t('app','Qidiruv');?>..." />
    <button type="button" id=""><i class="fa fa-search" aria-hidden="true"></i></button>

</div>
<div class="news-index " >
    <div class="news">
        <?php $i = 1;
        foreach ($news as $item): ?>

<!--            --><?php //if ($i % 2 != 0) { ?>
                <div class="column">
<!--            --><?php //} ?>
            <div class="news-box">
                <a href="<?=\yii\helpers\Url::to(["/news/view?id=$item->id"], true)?>"><div class="new-thumb " style="cursor: pointer"><img class="img-responsive" src="<?=\yii\helpers\Url::to(["../uploads/images/$item->image"], true)?>" alt=""></div></a>
                <div class="new-txt">
                    <ul class="news-meta sansserif">
                        <li><?php
                            echo " " . Yii::$app->formatter->asDate($item->date, 'd') . " ";
                            echo \frontend\controllers\NewsController::getMonthAsString(Yii::$app->formatter->asDate($item->date, 'M')) . ", ";
                            echo Yii::$app->formatter->asDate($item->date, 'Y');
                            ?></li>
                        <li><i class="fa fa-eye"></i> <?= $item->viewed ?></li>
                    </ul>
                    <h6>
                        <a class="sansserif title_hover" style="font-size: 16px" href="<?=\yii\helpers\Url::to(["/news/view?id=$item->id"], true)?>"><?= $item->{'title_' . $lang} ?></a>
                    </h6>
                    <p class="sansserif"> <?= \yii\helpers\StringHelper::truncate($item->{'desc_' . $lang}, 200,' ...' )?> </p>
                </div>
                <div class=" sansserif news-box-f">  <a
                            href="/<?= $lang . "/news/view?id=" . $item->id ?>"><i
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
