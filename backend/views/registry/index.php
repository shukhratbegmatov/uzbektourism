<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\RegistrySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Registries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registry-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Registry', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name_uz',
            'name_ru',
            'name_cyrl',
            'name_en',
            'images',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
