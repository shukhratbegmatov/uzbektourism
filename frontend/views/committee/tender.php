<?php
/**
 *
 * Author: Nurmukhammadov Shakhrizod
 * date: 09.01.2020
 */
use yii\helpers\Url;
$lang = Yii::$app->language;
$this->title =Yii::t('app','Tanlov va tenderlar');
$this->params['breadcrumbs'][] =Yii::t('app','Tanlov va tenderlar');
$this->params['titlebreadcrumbs'] =Yii::t('app','Tanlov va tenderlar');
$this->params['breadcrumbs'][] =Yii::t('app','Tanlov va tenderlar');
use yii\widgets\LinkPager;
?>
    <style type="text/css">
        .learn-more .circle .icon.arrow {
            transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
            left: 0.625rem;
            width: 1.125rem;
            height: 0.125rem;
            background: none;
        }
        .learn-more .circle .icon {
            transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
            position: absolute;
            top: 0;
            bottom: 0;
            margin: auto;
            background: black;
        }
        .sansserif {
            font-family: 'Open Sans', sans-serif;
        }
        .glyphicon1{display: none;}
    </style>
    <title><?= Yii::t('app','Tanlov va tenderlar') ?></title>
<? foreach ($model as $item): ?>
    <?php if ($item->{'title_' . $lang} != "") { ?>
        <div class="col-md-12 relative box sansserif">
            <h3><?= $item->{'title_' . $lang}; ?></h3>
            <div class="news_text sansserif" style="text-align: justify;">
                <p><?= $item->{'desc_' . $lang}; ?></p>
            </div>
            <div id="container">
                <button class="learn-more">
                    <div class="circle">
                        <span class="glyphicon glyphicon-chevron-right iconss" aria-hidden="true" style="top: 12px;color: #fff;"></span>
                    </div>
                    <a class="sansserif" href="<?= $item->link_uz ?>" target="_blank"><p class="button-text"><?= Yii::t('app', 'Ishtirok etish') ?></p></a>
                </button>
            </div>
            <div class="clearfix"></div>
            <div class="news-devider"></div>
        </div>
    <? }endforeach; ?>
<?= LinkPager::widget(['pagination' => $pagination]); ?>