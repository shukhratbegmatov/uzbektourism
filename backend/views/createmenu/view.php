<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\CreateMenu */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Create Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="create-menu-view">

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
            'name_uz',
            'name_ru',
            'name_en',
            'title_uz',
            'title_ru',
            'title_en',
            'title_cyrl',
            'text_uz:ntext',
            'text_ru:ntext',
            'text_en:ntext',
            'text_cyrl:ntext',
            'images',
            'create_date',
            'menu_id',
        ],
    ]) ?>

</div>
