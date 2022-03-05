<?php
/**
 * Author: Nurmukhammadov Shakhrizod
 * date: 15.12.2019
 */

use yii\helpers\Html;

$lang = Yii::$app->language;

$this->title = $header->{'name_'.$lang};
$this->params['breadcrumbs'][] = $this->title;
$this->params['titlebreadcrumbs'] = $this->title;
$count = 1;
?>
<style>
    .sansserif {
        font-family: 'Open Sans', sans-serif;
    }
</style>
<div >
        <div class="list-type5">
            <ol>
                <?php foreach ($content as $items): ?>
                <li><a class="sansserif" href="<?php echo $items->{'link_'.$lang}?>"  target="_blank"><?php echo  $items->{'text_'.$lang}; ?></a></li>
                <?php endforeach;?>

            </ol>
        </div>
</div>

