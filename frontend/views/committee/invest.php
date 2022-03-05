<?php




$lang = Yii::$app->language;
$this->title =  Yii::t('app', "Investitsiya talab etiladigan obyektlar reestri");
$this->params['breadcrumbs'][] =  Yii::t('app', "Investitsiya talab etiladigan obyektlar reestri");
$this->params['titlebreadcrumbs'] =  Yii::t('app', "Turizm sohasida investitsiya talab etiladigan obyektlarning Yagona elektron reyestri");

?>
<style>
    .sansserif {
        font-family: 'Open Sans', sans-serif;
    }
    #dtBasicExample_wrapper{
        overflow-y: scroll;
    }
</style>
<div ><h3 class="sansserif" style="font-weight: 700; margin: 0 0 15px;"></h3></div><br>

<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
    <thead>
    <tr class="sansserif">
        <th class="th-sm">РЕГИОН</th>
        <th class="th-sm">НАИМЕНОВАНИЕ ПРОЕКТА </th>
        <th class="th-sm">ВИД ДЕЯТЕЛЬНОСТИ</th>
        <th class="th-sm">СОЗДАВАЕМЫЕ РАБОЧИЕ МЕСТА</th>
        <th class="th-sm"></th>
    </tr>
    </thead>
    <tbody class="sansserif">
    <?php foreach ($body as $item): ?>
            <tr>
                <td><?=$item['region_id']; ?></td>
                <td><?=$item['project_name']; ?></td>
                <td><?=$item['kind_activity']; ?></td>
                <td><?=$item['created_jobs']; ?></td>
                <td><a href="<?= yii\helpers\Url::to(['committee/hotel-map?latitude='.$item['latitude'].'&longitude='.$item['longitude']])?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" style="    font-size: 30px;color: cornflowerblue;margin: 5px 51px;" height="1em" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                        </svg>
                    </a>
                </td>
            </tr>
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
