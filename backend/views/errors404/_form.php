<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Menu1;

/* @var $this yii\web\View */
/* @var $model common\models\Errors404 */
/* @var $form yii\widgets\ActiveForm */
$items = ArrayHelper::map(Menu1::find()->all(), 'link', 'name_uz');

?>

<div class="errors404-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'error_link')->textInput(['maxlength' => true]) ?>
    <p>
        <input type="checkbox" onclick="checkFluency()" id="fluency" />
        <span>Urlni uzingiz qulda yozishni xohlaysizmi ? </span>
    </p>

    <?= $form->field($model, 'answer_link')->dropDownList(
            $items,
            ['prompt' => '--Выберите menu--']

    ) ?>
    <?= $form->field($model, 'answer_link1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList(
            [1=>'Active', 0=>'InaCtive'],
            ['prompt' => '--Выберите menu--']
    ) ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
