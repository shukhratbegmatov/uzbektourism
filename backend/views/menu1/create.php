<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Menu1 */

$this->title = 'Create Menu1';
$this->params['breadcrumbs'][] = ['label' => 'Menu1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu1-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
