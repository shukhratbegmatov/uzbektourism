<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="row">
    <div class="col-sm-6">
        <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'familya')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'rule')->dropDownList(['User' => 'User', 'Admin'=>'Admin']) ?>
        <?= $form->field($model, 'status')->dropDownList([10 => 'Active', 9=>'InActive']) ?>
    </div>
    <?php if (Yii::$app->controller->action->id == 'create'):?>
    <div class="col-sm-6">
        <?=$form->field($model, 'link1')->checkbox(['value'=>  '/menu1']);?>
        <?=$form->field($model, 'link2')->checkbox(['value'=>  '/createmenu']);?>
        <?=$form->field($model, 'link3')->checkbox(['value'=>  '/news']);?>
        <?=$form->field($model, 'link4')->checkbox(['value'=>  '/digest']);?>
        <?=$form->field($model, 'link5')->checkbox(['value'=>  '/galereya']);?>
        <?=$form->field($model, 'link6')->checkbox(['value'=>  '/registry']);?>
        <?=$form->field($model, 'link7')->checkbox(['value'=>  '/tender']);?>
        <?=$form->field($model, 'link8')->checkbox(['value'=>  '/errors404']);?>
        <?=$form->field($model, 'link9')->checkbox(['value'=>  '/hackers']);?>
        <?=$form->field($model, 'link10')->checkbox(['value'=>  '/covid']);?>
        <?=$form->field($model, 'link11')->checkbox(['value'=>  '/centr']);?>
    </div>
    <?php endif;?>
</div>





    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
