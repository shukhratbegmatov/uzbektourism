<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Menu1;
use mihaildev\ckeditor\CKEditor;
$items = ArrayHelper::map(Menu1::find()->where(['!=', 'parent_id', '0'])->andWhere(['=', 'status', '2'])->all(), 'id', 'name_uz');
$menu = \yii\helpers\ArrayHelper::map(common\models\Menu1::find()->where(['=', 'status', 2])->all(), 'id', 'name_uz');
/* @var $this yii\web\View */
/* @var $model common\models\Createmenu */
/* @var $form yii\widgets\ActiveForm */

?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Roboto+Slab:wght@400;700&display=swap');

    html {
        height: 100%;
        min-height:800px;
    }
    body {

        background-size:cover;
        background-repeat:no-repeat;
        text-align: center;
        font-family: 'Noto Sans', sans-serif;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    h1{
        font-weight:400;
        padding-top:0;
        margin-top:0;
        font-family: 'Roboto Slab', serif;
    }

    #svg_form_time {
        height: 15px;
        max-width: 80%;
        margin: 40px auto 20px;
        display: block;
    }

    #svg_form_time circle,
    #svg_form_time rect {
        fill: white;
    }

    .button {
        background: rgb(237, 40, 70);
        border-radius: 5px;
        padding: 15px 25px;
        display: inline-block;
        margin: 10px;
        font-weight: bold;
        color: white;
        cursor: pointer;
        box-shadow:0px 2px 5px rgb(0,0,0,0.5);
    }

    .disabled {
        display:none;
    }

    section {
        padding: 17px ;
        /*max-width: 300px;*/
        margin: 30px auto;
        background:white;
        background:rgba(255,255,255,0.9);
        backdrop-filter:blur(10px);
        box-shadow:0px 2px 10px rgba(0,0,0,0.3);
        border-radius:5px;
        transition:transform 0.2s ease-in-out;
    }


    input {
        width: 100%;
        margin: 7px 0px;
        display: inline-block;
        padding: 12px 25px;
        box-sizing: border-box;
        border-radius: 5px;
        border: 1px solid lightgrey;
        font-size: 1em;
        font-family:inherit;
        background:white;
    }

    p{
        text-align:justify;
        margin-top:0;
    }
</style>

<h1>Добавить Menu Данные</h1>
<div id="svg_wrap"></div>


<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
<section>
    <p>Данные uz </p>
    <?= $form->field($model, 'menu_id')->dropDownList($menu, ['prompt'=>'- Выберите меню -'])->label(false) ?>
    <?= $form->field($model, 'name_uz')->textInput(['placeholder' => "имя", 'maxlength' => true])->label(false) ?>
    <?= $form->field($model, 'title_uz')->textInput(['placeholder' => "Краткий текст",'maxlength' => true])->label(false) ?>
    <div class="custom-file">
        <?= $form->field($model, 'file')->fileInput(['accept' => 'image/*', 'id'=>'customFile', 'style'=>'display: none', 'options' => ['class' => 'custom-file-input']]) ?>
        <label class="custom-file-label" for="customFile">Картина</label>
    </div>
    <br>
    <?= $form->field($model, 'text_uz' )->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full',
            'inline' => false,
        ],
    ])->label(false);?>
</section>
<section>
    <p>Данные ru </p>
    <?= $form->field($model, 'name_ru')->textInput(['placeholder' => "имя",'maxlength' => true])->label(false) ?>
    <?= $form->field($model, 'title_ru')->textInput(['placeholder' => "Краткий текст",'maxlength' => true])->label(false) ?>
    <?= $form->field($model, 'text_ru' )->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full',
            'inline' => false,
        ],
    ])->label(false);?>
</section>

<section>
    <p>Данные curl </p>
    <?= $form->field($model, 'name_cyrl')->textInput(['placeholder' => "имя",'maxlength' => true])->label(false) ?>
    <?= $form->field($model, 'title_cyrl')->textInput(['placeholder' => "Краткий текст",'maxlength' => true])->label(false) ?>
    <?= $form->field($model, 'text_cyrl')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full',
            'inline' => false,
        ],
    ])->label(false);?>
</section>

<section>
    <p>Данные en </p>

    <?= $form->field($model, 'name_en')->textInput(['placeholder' => "имя",'maxlength' => true])->label(false) ?>
    <?= $form->field($model, 'title_en')->textInput(['placeholder' => "Краткий текст",'maxlength' => true])->label(false) ?>
    <?= $form->field($model, 'text_en')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full',
            'inline' => false,
        ],
    ])->label(false);?>
</section>


<div class="button" id="prev">&larr; Previous</div>
<div class="button" id="next">Next &rarr;</div>
<button class="button" id="submit" type="submit">Agree and send application</button>

<?php ActiveForm::end(); ?>

