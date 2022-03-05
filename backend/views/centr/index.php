<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CentrSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Centrs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="centr-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Centr', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'name_uz:ntext',
//            'name_ru:ntext',
//            'name_cyrl:ntext',
//            'name_en:ntext',
            'fio_uz:ntext',
            //'fio_ru:ntext',
            //'fio_en:ntext',
            //'fio_cyrl',
            //'imya_cyrl',
            //'imya_en:ntext',
            //'imya_ru:ntext',
            'imya_uz:ntext',
            //'short_uz',
            //'short_cyrl',
            //'short_ru',
            //'short_en',
            //'photo',
            'doljnost_uz',
            //'doljnost_ru',
            //'doljnost_en',
            //'doljnost_cyrl',
            //'tel',
            //'email:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
