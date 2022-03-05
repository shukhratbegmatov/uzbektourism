<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Galereya */

$this->title = 'Create Galereya';
$this->params['breadcrumbs'][] = ['label' => 'Galereyas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="galereya-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
