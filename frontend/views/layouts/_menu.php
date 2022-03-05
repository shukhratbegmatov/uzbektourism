<?php
use common\models\Menu1;
use yii\helpers\Html;
use yii\helpers\Url;
use cinghie\multilanguage\widgets\MultiLanguageWidget;
use yii\helpers\StringHelper;
$lang = Yii::$app->language;
$url = $_SERVER['REQUEST_URI'];
if ($lang == 'ru' || $lang == 'en'){
    $url2 = StringHelper::byteSubstr($url,3,100);
}elseif ($lang == 'cyrl'){
    $url2 = StringHelper::byteSubstr($url,5,100);
}else{
    $url2 = StringHelper::byteSubstr($url,0,100);
}


$menu =  Menu1::find()->select([ 'id', 'name_'.\Yii::$app->language, 'link', 'parent_id', 'menu_order'])->all();
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
<?php foreach ($menu as $menus):?>
    <?php $menus1 = Menu1::find()->select([ 'name_'.\Yii::$app->language, 'link', 'menu_order', 'id'])->where(['=', 'parent_id', $menus->id])->andWhere(['status_none'=>1])->all(); ?>
    <?php if($menus->menu_order == 1 && $menus->parent_id == 0):?>
        <li>
            <a class="sansserif" style="padding: 0 0;" href="<?=\yii\helpers\Url::to(["$menus->link"], true)?>"><span><?php echo $menus->{'name_'.Yii::$app->language}?></span></a>
        </li>
    <?php endif;?>
    <?php if($menus->menu_order == 2 && $menus->parent_id == 0):?>
        <li>
            <span class="sansserif"><?php echo $menus->{'name_'.Yii::$app->language}?></span>
            <ul>
                <?php foreach($menus1 as $menus2):?>
                    <?php if (strpos($menus2->link, '://') == true ) { ?>
                        <li><a class="sansserif" href="<?=\yii\helpers\Url::to(["$menus->link"], true)?>"><?php echo $menus2->{'name_'.Yii::$app->language} ?></a></li>
                    <?php } ?>
                    <?php if ($menus2->menu_order == 2 && strpos($menus2->link, '://') == false) { ?>
                        <li><a class="sansserif" href="<?=\yii\helpers\Url::to(["$menus2->link"], true)?>"><?php echo $menus2->{'name_'.Yii::$app->language};?></a></li>
                    <?php } ?>
                <?php endforeach;?>
            </ul>
        </li>
    <?php endif;?>
<?php endforeach;?>

<li>

</li>


<li>
    <span class="sansserif"><?= Yii::t('app', "Tilni o'zgartirish") ?> </span>
    <ul class="sansserif">
      <li class="sansserif"><a href="<?= Url::to([$url2, 'language' => 'uz']); ?>"><?= Yii::t('app', 'Uzbek') ?></a></li>
        <li class="sansserif"><a href="<?= Url::to([$url2, 'language' => 'en']); ?>"><?= Yii::t('app', 'English') ?></a></li>
<!--        <li class="sansserif"><a href="--><?//= Url::to([$url2, 'language' => 'cyrl']); ?><!--">--><?//= Yii::t('app', 'Ўзбек') ?><!--</a></li>-->
      <li class="sansserif"><a href="<?= Url::to([$url2, 'language' => 'ru']); ?>"><?= Yii::t('app', 'Russian') ?></a></li>
    </ul>
</li>


