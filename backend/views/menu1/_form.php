<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Menu1 */
/* @var $form yii\widgets\ActiveForm */
$menu = \yii\helpers\ArrayHelper::map(common\models\Menu1::find()->where(['=', 'menu_order', 2])->all(), 'id', 'name_uz');
?>

<div class="menu1-form card" style="padding: 20px">
    <h1 style="text-align: center">Create Sub Menu</h1>
    <?php $form = ActiveForm::begin(); ?>
    <div class="row col-sm-12">
        <div class="col-sm-6">
            <?= $form->field($model, 'menu_order')->dropDownList(['2' => 'sub menu', '3' => 'sub submenu']) ?>
            <?= $form->field($model, 'parent_id')->dropDownList([
                '2' => '"Qo\'mita" qatori',
                '3' => '"Qonunchilik" qatori',
                '5' => '"Xizmatlar" qatori',
                '6' => '"Tadqiqotlar" qatori',
                '7' => '"Imtiyozlar" qatori',
            ]) ?>
            <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'name_cyrl')->textInput(['maxlength' => true]) ?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script >
    $('#menu1-menu_order').change(function() {
        if ($(this).val() == '3') {
            var url = 'parent';
            $.ajax({
                url: url,
                method: "GET",
                data: {
                    data: '1',
                },
                success: function(result) {
                    $('#menu1-parent_id').html(result);
                }
            });
        }
        if ($(this).val() == '2') {
            var url = 'parent1';
            $.ajax({
                url: url,
                method: "GET",
                data: {
                    data: '1',
                },
                success: function(result) {
                    $('#menu1-parent_id').html(result);
                }
            });
        }
    });

</script>