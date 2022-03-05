<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CovidSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="covid-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title_en') ?>

    <?= $form->field($model, 'title_ru') ?>

    <?= $form->field($model, 'title_uz') ?>

    <?= $form->field($model, 'desc_en') ?>

    <?php // echo $form->field($model, 'desc_ru') ?>

    <?php // echo $form->field($model, 'desc_uz') ?>

    <?php // echo $form->field($model, 'content_en') ?>

    <?php // echo $form->field($model, 'content_ru') ?>

    <?php // echo $form->field($model, 'content_uz') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'viewed') ?>

    <?php // echo $form->field($model, 'isactive') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
