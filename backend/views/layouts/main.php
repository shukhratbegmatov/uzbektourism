<?php

/* @var $this \yii\web\View */
/* @var $content string */
use backend\assets\AppAsset;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title>uzbektourism.uz</title>
    <?php $this->head() ?>
</head>
<body class="sidebar-noneoverflow">
<?php $this->beginBody() ?>
    <?php if(!Yii::$app->user->isGuest){echo $this->render('_header1');}?>
    <?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
