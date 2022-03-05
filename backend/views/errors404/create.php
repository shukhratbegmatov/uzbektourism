<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Errors404 */

$this->title = 'Create Errors404';
$this->params['breadcrumbs'][] = ['label' => 'Errors404s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="errors404-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
