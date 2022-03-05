<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Digest */

//$this->title = 'Create Digest';
$this->params['breadcrumbs'][] = ['label' => 'Digests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="digest-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
