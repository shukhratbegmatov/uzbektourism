<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Centr */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="centr-form">

    <?php $form = ActiveForm::begin(); ?>

<!--    --><?//= $form->field($model, 'name_uz')->textarea(['rows' => 6]) ?>
<!---->
<!--    --><?//= $form->field($model, 'name_ru')->textarea(['rows' => 6]) ?>
<!---->
<!--    --><?//= $form->field($model, 'name_cyrl')->textarea(['rows' => 6]) ?>
<!---->
<!--    --><?//= $form->field($model, 'name_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fio_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fio_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fio_en')->textarea(['rows' => 6]) ?>

<!--    --><?//= $form->field($model, 'fio_cyrl')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'imya_cyrl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imya_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'imya_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'imya_uz')->textarea(['rows' => 6]) ?>

<!--    --><?//= $form->field($model, 'short_uz')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'short_cyrl')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'short_ru')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'short_en')->textInput() ?>

<!--    --><?//= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doljnost_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doljnost_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doljnost_en')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'doljnost_cyrl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
