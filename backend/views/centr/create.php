<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Centr */

$this->title = 'Create Centr';
$this->params['breadcrumbs'][] = ['label' => 'Centrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="centr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
