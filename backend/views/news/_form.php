<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Menu1;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

$url  = Yii::$app->request->url;
$massiv = explode('/', $url);
if (in_array("create", $massiv)) {
    $type = true;
}else{
    $type = false;
}
/* @var $this yii\web\View */
/* @var $model common\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<h1>Добавить Новости Данные</h1>


<div class="news-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->errorSummary($model)?>

    <div role="tabpanel">
        
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#uzb" aria-controls="uzb" role="tab" data-toggle="tab">Uzbek</a>
            </li>
            <li role="presentation">
                <a href="#rus" aria-controls="rus" role="tab" data-toggle="tab">Русский</a>
            </li>
            <li role="presentation">
                <a href="#eng" aria-controls="eng" role="tab" data-toggle="tab">English</a>
            </li>
<!--            <li role="presentation">-->
<!--                <a href="#cyrl" aria-controls="cyrl" role="tab" data-toggle="tab">Кириллица</a>-->
<!--            </li>-->
        </ul>
        <div class="tab-content">

            <div role="tabpanel" class="tab-pane active" id="uzb">
                <?= $form->field($model, 'title_uz')->textarea(['rows' => 2])->label("Nomi") ?>
                <?= $form->field($model, 'desc_uz')->textarea(['rows' => 3])->label("Qisqacha matni");?>
                <?= $form->field($model, 'content_uz')->widget(CKEditor::className(), [

                    'editorOptions' => ElFinder::ckeditorOptions('elfinder',[/* Some CKEditor Options */]),


                ])->label("To'liq matni");?>
            </div>


            <div role="tabpanel" class="tab-pane" id="rus">
                <?= $form->field($model, 'title_ru')->textarea(['rows' => 2]) ?>
                <?= $form->field($model, 'desc_ru')->textarea(['rows' => 3])->label("Краткое описание");?>
                <?= $form->field($model, 'content_ru')->widget(CKEditor::className(), [

                    'editorOptions' => ElFinder::ckeditorOptions('elfinder',[/* Some CKEditor Options */]),


                ]);?>
            </div>



            <div role="tabpanel" class="tab-pane" id="eng">
                <?= $form->field($model, 'title_en')->textarea(['rows' => 2]) ?>
                <?= $form->field($model, 'desc_en')->textarea(['rows' => 3])->label("Short description");?>
                <?= $form->field($model, 'content_en')->widget(CKEditor::className(), [

                    'editorOptions' => ElFinder::ckeditorOptions('elfinder',[/* Some CKEditor Options */]),
                ]);?>
            </div>
<!--            <div role="tabpanel" class="tab-pane" id="cyrl">-->
<!--                --><?//= $form->field($model, 'title_cyrl')->textarea(['rows' => 2]) ?>
<!--                --><?//= $form->field($model, 'desc_cyrl')->textarea(['rows' => 3])?>
<!--                --><?//= $form->field($model, 'content_cyrl')->widget(CKEditor::className(), [
//
//                    'editorOptions' => ElFinder::ckeditorOptions('elfinder',[/* Some CKEditor Options */]),
//
//
//                ]);?>
<!--            </div>-->


            <!-- Tab panes -->
        </div>
    </div>
    <!--    --><?php
    //    echo $form->field($model, 'image')->widget(InputFile::className(), [
    //        'language' => 'ru',
    //        'controller' => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
    //        'filter' => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
    //        'template' => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
    //        'options' => ['class' => 'form-control'],
    //        'buttonOptions' => ['class' => 'btn btn-primary'],
    //        'multiple' => false       // возможность выбора нескольких файлов
    //    ])
    //    ?>
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
    <div class="custom-file">
        <?= $form->field($model, 'imageFile1')->fileInput(['multiple' => true, 'accept' => 'image/*', 'id'=>'customFile', 'style'=>'display: none', 'options' => ['class' => 'custom-file-input']]) ?>
        <label class="custom-file-label" for="customFile">Картина</label>
    </div>
    <div class="custom-file">

        <?= $form->field($model, 'date')->widget(\yii\jui\DatePicker::className(), [
            // if you are using bootstrap, the following line will set the correct style of the input field
            'dateFormat' => 'php:Y-m-d',
            'value' => date('Y-m-d'),
            'options' => ['class' => 'form-control'],
            // ... you can configure more DatePicker properties here
        ]) ?>
    </div>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    <style>
        .mce-fullscreen{
            z-index: 1111;
        }
    </style>
</div>
