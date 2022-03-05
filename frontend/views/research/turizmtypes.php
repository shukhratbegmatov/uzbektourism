<?php
/**
 * Author: Nurmukhammadov Shakhrizod
 * date: 16.12.2019
 */

$lang = Yii::$app->language;

$this->title = Yii::t('app','Turizm turlari');
$this->params['breadcrumbs'][] = $this->title;
$this->params['titlebreadcrumbs'] = $this->title;

?>
<div class="list-type5">
    <ol>
        <li><a href="/downloads/files/eco_objects.xlsx"><?=Yii::t('app','Eko turizm') ?></a></li>
        <li><a href="/downloads/files/eco_objects.xlsx"><?=Yii::t('app','Turizm turlari') ?></a></li>
    </ol>
</div>