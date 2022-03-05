<?php
$lang = Yii::$app->language;
$this->title = Yii::t('app', "Ko'chma dam olish maskanlari");
$this->params['breadcrumbs'][] = Yii::t('app', "Ko'chma dam olish maskanlari");
$this->params['titlebreadcrumbs'] = Yii::t('app', "Ko'chma dam olish maskanlari");
?>
<style>
    body{
        font-family: 'Open Sans', sans-serif !important;
    }
    .list-type5 ol li:before {
        content: none;
    }
</style>
<div class="list-type5">
    <ol>
        <li><a href="<?=\yii\helpers\Url::to(["/news/download?url=01-05-1157.pdf"], true)?>"><?php echo Yii::t('app', "Ko'chma dam olish maskanlari"); ?></a></li>
    </ol>
</div>