<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create News', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'title_uz',
                'value' => function($model){
                    return \yii\helpers\StringHelper::truncate($model->title_uz, 200,' ...' );
                },
            ],
            [
                'attribute' => 'desc_uz',
                'value' => function($model){
                    return \yii\helpers\StringHelper::truncate($model->desc_uz, 200,' ...' );
                },
            ],
            [
                'attribute' => 'content_uz',
                'value' => function($model){
                    return \yii\helpers\StringHelper::truncate($model->content_uz, 200,' ...' );
                },
            ],
            [
                'attribute' => 'image',
                'format' => 'html',
                'value' => function($model){
                    return Html::img('/../../../frontend/web/uploads/images/'. $model->image, ['width' => '70px']);
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
