<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DigestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Digests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="digest-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Digest', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title_cyrl:ntext',
            'title_en:ntext',
            'title_ru:ntext',
            'title_uz:ntext',
            //'desc_cyrl:ntext',
            //'desc_en:ntext',
            //'desc_ru:ntext',
            //'desc_uz:ntext',
            //'content_cyrl:ntext',
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
