<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CovidSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Covids';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="covid-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Covid', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title_en:ntext',
            'title_ru:ntext',
            'title_uz:ntext',
            'desc_en:ntext',
            //'desc_ru:ntext',
            //'desc_uz:ntext',
            //'content_en:ntext',
            //'content_ru:ntext',
            //'content_uz:ntext',
            //'image',
            //'date',
            //'viewed',
            //'isactive',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
