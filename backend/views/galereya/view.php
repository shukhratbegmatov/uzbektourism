<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Galereya */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Galereyas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="galereya-view">


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
            [
                'attribute' => 'image_max',
                'value'=>('../../../../frontend/web/img_conv/' . $model->image_max),
                'format' => ['image',['width'=>'230','height'=>'200']],
            ],
            [
                'attribute' => 'image_min',
                'value'=>('../../../../frontend/web/img_conv/' . $model->image_min),
                'format' => ['image',['width'=>'230','height'=>'200']],
            ],
            [
                'attribute' => 'status',
                'value' => function($model){
                    if ($model->status == 1){
                        return 'active';
                    }elseif($model->status == 0){
                        return 'inactive';
                    }
                },
            ],
        ],
    ]) ?>

</div>
