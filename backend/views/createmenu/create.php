<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CreateMenu */

$this->title = 'Create Create Menu';
$this->params['breadcrumbs'][] = ['label' => 'Create Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="create-menu-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
