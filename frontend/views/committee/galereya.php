<?php
$lang = Yii::$app->language;

$this->title = Yii::t('app', 'Rasmlar');
$this->params['breadcrumbs'][] = Yii::t('app', 'Rasmlar');
$this->params['titlebreadcrumbs'] = Yii::t('app', 'Rasmlar');
?>

<style>
    .gallery-container h1 {
        text-align: center;
        margin-top: 50px;
        font-family: 'Droid Sans', sans-serif;
        font-weight: bold;
    }
    .gallery-container p.page-description {
        text-align: center;
        margin: 25px auto;
        font-size: 18px;
        color: #999;
    }
    .tz-gallery {
        /*padding: 40px;*/
    }
    /* Override bootstrap column paddings */
    .tz-gallery .row > div {
        padding: 2px;
    }
    .tz-gallery .lightbox img {
        /*width: 100%;*/
        border-radius: 0;
        position: relative;
    }
    .tz-gallery .lightbox:hover:after,
    .tz-gallery .lightbox:hover:before {
        opacity: 1;
    }
    .baguetteBox-button {
        background-color: transparent !important;
    }
    @media(max-width: 768px) {
        body {
            padding: 0;
        }
    }
    .tz-gallery .row > div {
        padding: 0px!important;
    }
    .sansserif {
        font-family: 'Open Sans', sans-serif;
    }
    @media only screen and (max-width: 600px) {
        .container {
            width: 100%;
        }
    }
    .lightbox > img{
        margin-left: -5px;
        max-width: 100%;
        border: 0;
        vertical-align: middle;
        width: 75px;
        aspect-ratio: auto 75 / 75;
        object-fit: cover;
        height: 75px;
    }
</style>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<link href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css" rel="stylesheet">
<div class="container gallery-container">
    <div class="tz-gallery">
        <?php foreach ($galereya as $gal):?>
        <a class="lightbox" href="<?=\yii\helpers\Url::to(["../img_conv/$gal->image_max"], true)?>">
            <img src="<?=\yii\helpers\Url::to(["../img_conv/$gal->image_min"], true)?>" alt="Bridge">
        </a>
        <?php endforeach;?>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>