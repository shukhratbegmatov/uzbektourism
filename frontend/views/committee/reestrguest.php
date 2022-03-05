<?php
$lang = Yii::$app->language;
$this->title =  Yii::t('app', "Mehmonlar uyini ro'yxatdan o'tkazish");
$this->params['breadcrumbs'][] =  Yii::t('app', "Mehmonlar uyini ro'yxatdan o'tkazish");
$this->params['titlebreadcrumbs'] =  Yii::t('app', "Mehmonlar uyini ro'yxatdan o'tkazish");
?>
<style>
    .sansserif {
        font-family: 'Open Sans', sans-serif;
    }
    #dtBasicExample_wrapper{
        overflow-y: scroll;
    }
</style>
<div ><h3 class="sansserif" style="font-weight: 700; margin: 0 0 15px;"><?=Yii::t('app', "Litsenziyalangan va sertifikatlangan turizm tashkilotlari reyestri")?></h3></div><br>

<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
    <thead>
    <tr class="sansserif">
        <th class="th-sm"><?=Yii::t('app', "Tuman")?></th>
        <th class="th-sm"><?=Yii::t('app', "Shahar")?> </th>
        <th class="th-sm"><?=Yii::t('app', "INN")?> </th>
        <th class="th-sm"><?=Yii::t('app', "Kompaniya nomi")?> </th>
        <th class="th-sm"><?=Yii::t('app', "Ob'ektning qonuniy nomi")?> </th>
        <th class="th-sm"><?=Yii::t('app', "Ko'rinish")?> </th>
        <!--        <th class="th-sm">--><?//=Yii::t('app', "Ko'rish")?><!-- </th>-->
    </tr>
    </thead>
    <tbody class="sansserif">
    <?php foreach ($body as $item): ?>
        <?php if($item['organization_type'] == 'Гостиница' || $item['organization_type'] == 'Гостевой дом' || $item['organization_type'] == 'Хостел'): ?>
            <tr>
                <td><?=$item['region_id']; ?></td>
                <td><?=$item['city_id']; ?></td>
                <td><?=$item['inn']; ?></td>
                <td><?=$item['organization_name']; ?></td>
                <td><?=$item['legal_name']; ?></td>
                <td><?=$item['organization_type']; ?></td>
<!--                <td>-->
<!--                    <a href="#">-->
<!--                        <svg width="1em" style="font-size: 24px; color: cornflowerblue; margin: 5px 19px;" height="1em" viewBox="0 0 16 16" class="bi bi-eye" fill="currentColor" xmlns="http://www.w3.org/2000/svg">-->
<!--                            <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>-->
<!--                            <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>-->
<!--                        </svg>-->
<!--                    </a>-->
<!--                </td>-->
            </tr>
        <?php endif; ?>
    <?php endforeach;?>
    </tbody>
</table>

<?php
$this->registerJs("
$(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
");?>
