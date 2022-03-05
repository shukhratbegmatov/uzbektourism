<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Centr */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Centrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="centr-view">

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
            'id',
            'name_uz:ntext',
            'name_ru:ntext',
            'name_cyrl:ntext',
            'name_en:ntext',
            'fio_uz:ntext',
            'fio_ru:ntext',
            'fio_en:ntext',
            'fio_cyrl',
            'imya_cyrl',
            'imya_en:ntext',
            'imya_ru:ntext',
            'imya_uz:ntext',
            'short_uz',
            'short_cyrl',
            'short_ru',
            'short_en',
            'photo',
            'doljnost_uz',
            'doljnost_ru',
            'doljnost_en',
            'doljnost_cyrl',
            'tel',
            'email:email',
        ],
    ]) ?>

</div>
