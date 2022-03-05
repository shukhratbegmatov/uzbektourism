<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CentrSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="centr-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name_uz') ?>

    <?= $form->field($model, 'name_ru') ?>

    <?= $form->field($model, 'name_cyrl') ?>

    <?= $form->field($model, 'name_en') ?>

    <?php // echo $form->field($model, 'fio_uz') ?>

    <?php // echo $form->field($model, 'fio_ru') ?>

    <?php // echo $form->field($model, 'fio_en') ?>

    <?php // echo $form->field($model, 'fio_cyrl') ?>

    <?php // echo $form->field($model, 'imya_cyrl') ?>

    <?php // echo $form->field($model, 'imya_en') ?>

    <?php // echo $form->field($model, 'imya_ru') ?>

    <?php // echo $form->field($model, 'imya_uz') ?>

    <?php // echo $form->field($model, 'short_uz') ?>

    <?php // echo $form->field($model, 'short_cyrl') ?>

    <?php // echo $form->field($model, 'short_ru') ?>

    <?php // echo $form->field($model, 'short_en') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'doljnost_uz') ?>

    <?php // echo $form->field($model, 'doljnost_ru') ?>

    <?php // echo $form->field($model, 'doljnost_en') ?>

    <?php // echo $form->field($model, 'doljnost_cyrl') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'email') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
