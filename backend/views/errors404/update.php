<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Errors404 */

$this->title = 'Update Errors404: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Errors404s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="errors404-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
