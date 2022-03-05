<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\News */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="news-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
//            'title_cyrl:ntext',
            'title_en:ntext',
            'title_ru:ntext',
            'title_uz:ntext',
//            'desc_cyrl:ntext',
            'desc_en:ntext',
            'desc_ru:ntext',
            'desc_uz:ntext',
//            'content_cyrl:ntext',
            'content_en:ntext',
            'content_ru:ntext',
            'content_uz:ntext',
            [
                'attribute' => 'image',
                'format' => 'html',
                'value' => function($model){
                    return Html::img('../../../../frontend/web/uploads/images/'. $model->image, ['width' => '600px']);
                },
            ],
            'date',
            'viewed',
            'status',
        ],
    ]) ?>

</div>
