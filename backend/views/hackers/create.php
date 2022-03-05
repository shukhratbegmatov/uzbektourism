<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Hackers */

$this->title = 'Create Hackers';
$this->params['breadcrumbs'][] = ['label' => 'Hackers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hackers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
