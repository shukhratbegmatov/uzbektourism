<?php
/**
 *
 * Author: Nurmukhammadov Shakhrizod
 * date: 13.12.2019
 */

$this->title = $model->{'name_'.Yii::$app->language};
$this->params['breadcrumbs'][] = Yii::t('app','Sertifikatsiya');
$this->params['titlebreadcrumbs'] = Yii::t('app','Sertifikatsiya');
?>
<style>
    .sansserif {
        font-family: 'Open Sans', sans-serif;
    }
    body{
        color: #000!important;
    }
</style>
<?php echo $model->{'text_'.Yii::$app->language}; ?>


