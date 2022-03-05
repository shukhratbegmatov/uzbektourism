<?php

use yii\base\View;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Galereya */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$errors = $model->getErrors();
if (!empty($errors)){
    foreach ($errors as $error){
        echo "<p>$error</p>";
    }
}
?>

<div class="galereya-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
        <div class="custom-file">
            <?= $form->field($model, 'imageFile1')->fileInput(['multiple' => true, 'accept' => 'image/*', 'id'=>'customFile1', 'style'=>'display: none', 'options' => ['class' => 'custom-file-input']]) ?>
            <label class="custom-file-label kartin1" for="customFile1">Фото большого размера</label>
        </div>
        <div class="custom-file">
            <?= $form->field($model, 'imageFile2')->fileInput(['multiple' => true, 'accept' => 'image/*', 'id'=>'customFile2', 'style'=>'display: none', 'options' => ['class' => 'custom-file-input']]) ?>
            <label class="custom-file-label kartin2" for="customFile2">Фото небольшого размера</label>
        </div>

    <?= $form->field($model, 'status')->dropDownList([1=>'active', 2=>'inactive']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


<div class=" row">
    <div class="col-sm-6">
        <p class="imgsize1"></p>
        <div class="gallery1"></div>
    </div>
    <div class="col-sm-6">
        <p class="imgsize2"></p>
        <div class="gallery2"></div>
    </div>
</div>
<style>
    .custom-file input {
        margin-bottom: 13px;
    }
    .help-block{
        margin-top: 40px;
    }
</style>