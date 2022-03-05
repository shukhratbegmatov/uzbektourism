<?php
/**
 * Author: Nurmukhammadov Shakhrizod
 * date: 15.12.2019
 */
$lang = Yii::$app->language;
$this->title = Yii::t('app','Vatandosh guruhlar');
$this->params['breadcrumbs'][] = Yii::t('app','Vatandosh guruhlar');
$this->params['titlebreadcrumbs'] = Yii::t('app','Vatandosh guruhlar');
//var_dump($lang);exit();
use yii\widgets\LinkPager; ?>


<title><?= $header->{'name_'.$lang} ?></title>
<div id="print-content" >
    <?php echo $header->{'text_'. $lang}?>

    <hr class="style5">
    <?php foreach ($man as $items): ?>
        <?php if (!empty($items->{'fio_'.$lang})):?>
        <div class="row">
            <div class="col-md-4">
                <img class="img-fluid" src="/images/vatandosh/<?php echo  $items->{'photo'} ?>" alt="">
            </div>
            <div class="col-md-8 ">
                <p class="sansserif"><?php echo  $items->{'fio_'.$lang};?></p>
                <p class="sansserif">Lavozimi: <?php echo $items->{'lavozim_'.$lang};?></p>
                <p class="sansserif">Ma'lumoti: <?php echo  $items->{'information_'.$lang};?></p>
                <p class="sansserif">Fokus davlatlar: <?php echo  $items->{'country_'.$lang};?></p>
            </div>
        </div>
        <br>
        <hr class="style5">
    <?php endif;?>
    <?php endforeach;?>
    <?php if (!empty($items->{'fio_'.$lang})){ echo LinkPager::widget(['pagination' => $pagination]);}?>
</div>

<style>
    .sansserif {
        font-family: 'Open Sans', sans-serif;
    }
    .pagination{
        margin-left: 30%;
    }
    .img-fluid{
        border: none;
        max-width: 100%;
        padding: 0 1px 1px 0;
    }
    body{
        color: #000;
    }
</style>