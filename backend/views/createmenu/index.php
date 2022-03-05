<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CreateMenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Create Menus';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-md-9"></div>
    <div class="col-md-3" style="    margin-left: 77.1%;">
        <p><?= Html::a('Add menu', ['create'], ['class' => 'btn btn-success', 'style'=>'width:81.5%']) ?></p>
    </div>
</div>
<div class="" style="width: 95%; margin-left: 3%">
    <div class="header_wrap">
        <div class="num_rows">
            <div class="form-group">
                <select class  ="form-control" name="state" id="maxRows">
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="70">70</option>
                    <option value="100">100</option>
                    <option value="5000">Show ALL Rows</option>
                </select>
            </div>
        </div>
        <div class="tb_search">
            <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.." class="form-control">
        </div>
    </div>
    <table class="table table-striped table-class" id= "table-id">
        <thead>
        <tr>
            <th>Name_uz</th>
            <th>Name_ru</th>
            <th>Name_en</th>
            <th>Name_cyrl</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($createmenus as $menu):?>
            <tr>
                <td><?= $menu->name_uz ?></td>
                <td><?= $menu->name_ru ?></td>
                <td><?= $menu->name_en ?></td>
                <td><?= $menu->name_cyrl ?></td>
                <td>
                    <ul class="table-controls">
                        <li><a href="<?=\yii\helpers\Url::to(["/createmenu/update?id=".$menu->id], true)?>" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg style="width: 24px !important;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                        <li><a href="<?=\yii\helpers\Url::to(["/createmenu/delete?id=".$menu->id], true)?>" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg style="width: 24px !important;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a></li>
                    </ul>
                </td>
            </tr>
        <?php endforeach;?>
        <tbody>
    </table>
    <div class='pagination-container'>
        <nav>
            <ul class="pagination"></ul>
        </nav>
    </div>
    <div class="rows_count">Showing 11 to 20 of 91 entries</div>

</div>
