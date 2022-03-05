<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model common\models\Menu1 */

$this->title = 'Update Menu1: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Menu1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="menu1-form card" style="padding: 20px">
    <h1 style="text-align: center">Update Sub Menu</h1>
    <?php $form = ActiveForm::begin(); ?>
    <div class="row col-sm-12">
        <div class="col-sm-6">
            <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'name_cyrl')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'parent_id')->dropDownList([
                '2' => '"Qo\'mita" qatori',
                '3' => '"Qonunchilik" qatori',
                '5' => '"Xizmatlar" qatori',
                '6' => '"Tadqiqotlar" qatori',
                '7' => '"Imtiyozlar" qatori',
            ]) ?>
            <?= $form->field($model, 'menu_order')->dropDownList(['2' => 'sum menu', '3' => 'sum summenu']) ?>
        </div>
    </div>
    <div class="row col-sm-12">
        <div class="col-sm-6"></div>
        <div class="col-sm-6">
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success', 'style'=>'width:100%']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
