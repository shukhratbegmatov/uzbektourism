<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Covid */

$this->title = 'Create Covid';
$this->params['breadcrumbs'][] = ['label' => 'Covids', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="covid-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
