<?php
$lang = Yii::$app->language;
$this->title =  Yii::t('app', 'Joylashtirish vositalarining reyestri');
$this->params['breadcrumbs'][] =  Yii::t('app', 'Joylashtirish vositalarining reyestri');
$this->params['titlebreadcrumbs'] =  Yii::t('app', 'Joylashtirish vositalarining reyestri');
?>
<style>
    .sansserif {
        font-family: 'Open Sans', sans-serif;
    }
    #dtBasicExample_wrapper{
        overflow-y: scroll;
    }
</style>

<?php
$this->registerJs("
$(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});


(function(document) {
	'use strict';

	var LightTableFilter = (function(Arr) {

		var _input;
    var _select;

		function _onInputEvent(e) {
			_input = e.target;
			var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filter);
				});
			});
		}
    
		function _onSelectEvent(e) {
			_select = e.target;
			var tables = document.getElementsByClassName(_select.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filterSelect);
				});
			});
		}

		function _filter(row) {
      
			var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
			row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';

		}
    
		function _filterSelect(row) {
     
			var text_select = row.textContent.toLowerCase(), val_select = _select.options[_select.selectedIndex].value.toLowerCase();
			row.style.display = text_select.indexOf(val_select) === -1 ? 'none' : 'table-row';

		}

		return {
			init: function() {
				var inputs = document.getElementsByClassName('light-table-filter');
				var selects = document.getElementsByClassName('select-table-filter');
				Arr.forEach.call(inputs, function(input) {
					input.oninput = _onInputEvent;
				});
				Arr.forEach.call(selects, function(select) {
         select.onchange  = _onSelectEvent;
				});
			}
		};
	})(Array.prototype);

	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
			LightTableFilter.init();
		}
	});

})(document);
");?>

<style>
    .selects1{
        background-color: transparent;
        border: none;
        border-bottom: 1px solid #9e9e9e;
        border-radius: 0;
        outline: none;
        height: 3rem;
         width: 25%;
        font-size: 1rem;
        margin: 0 0 20px 50px;
        padding: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
    }

    .searcha1{
        width: 140px !important;
    }
    .selectsearch{
        margin-left: 100px!important;
    }
    @media only screen and (max-width: 600px) {
        .selects1{

            width: 60%;
        }
        .searcha1{
            width: 110px !important;
        }
        .selectsearch{
            margin-left: 64px !important;
        }
    }
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;

    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    select:focus{
        /* outline: thin dotted #333; */
        /* outline: 5px auto -webkit-focus-ring-color; */
        /* outline-offset: -2px; */
        border-bottom: 1px solid #26a69a;
        -webkit-box-shadow: 0 1px 0 0 #26a69a;
        box-shadow: 0 1px 0 0 #26a69a;
    }
    select {
        display: block;
        margin-left: 10px;
    }
    td, th{
        padding: 0 10px;
    }
</style>
<section class="">
<!--<section class="container">-->

    <div style="float: left;">
        <input style="" type="search" class="light-table-filter searcha1" data-table="order-table" placeholder="<?=Yii::t('app', "Qidirish")?>" />
    </div>

    <div class="selectsearch" style="">
        <select type="search" class="select-table-filter selects1" data-table="order-table">
            <option value="">--<?=Yii::t('app', "Faoliyat turini tanlang")?>--</option>

            <?php $arr = array(); foreach ($body as $item): ?>
                <?php array_push($arr, $item['organization_type']); ?>
            <?php endforeach;?>

            <?php $arr1 = array_unique ($arr);  foreach ($arr1 as $item => $key): ?>
                <option value="<?=$key; ?>"><?=$key; ?></option>

            <?php endforeach;?>
            `
            <select>
    </div>

            <div style="height: 700px;overflow: auto;">

            <table class="order-table">
                <thead>
                <tr style="height: 50px">
                    <th>№ </th>
                    <th><?=Yii::t('app', "Tashkilot nomi")?> </th>
                    <th><?=Yii::t('app', "STIR")?> </th>
                    <th><?=Yii::t('app', "Shahar")?> </th>
                    <th><?=Yii::t('app', "Faoliyat turi")?> </th>
                    <th><?=Yii::t('app', "Umumiy xonalar soni")?> </th>
                    <th><?=Yii::t('app', "Davlat reestr raqami")?> </th>
                    <th><?=Yii::t('app', "Berilgan sana")?> </th>
                    <th><?=Yii::t('app', "Tugash sanasi")?> </th>
                    <th><?=Yii::t('app', "Yulduz")?> </th>
                    <th><?=Yii::t('app', "Telefon")?> </th>
                    <th><?=Yii::t('app', "Xaritada joylashuvi")?></th>
                </tr>
                </thead>
                    <tbody>
                    <?php $i = 1; foreach ($body as $item): ?>
                        <?php
                        $website = !empty($item['web_url']) ? $item['web_url'] : Yii::t('app', 'Mavjud emas');
                        ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?=$item['organization_name']; ?></td>
                            <td><?=$item['inn']; ?></td>
                            <td><?=$item['region_id']; ?></td>
                            <td><?=$item['organization_type']; ?></td>
                            <td><?=$item['number_of_rooms']; ?></td>
                            <td><?=$item['number_gov_sert'] ? $item['number_gov_sert'] : Yii::t('app', 'Mavjud emas'); ?></td>
                            <td><?=$item['sert_given_date'] ? $item['sert_given_date'] : Yii::t('app', 'Mavjud emas'); ?></td>
                            <td><?=$item['sert_end_date'] ? $item['sert_end_date'] : Yii::t('app', 'Mavjud emas');; ?></td>
                            <td><?=$item['star'] ? $item['star'] : Yii::t('app', 'Mavjud emas');; ?></td>
                            <td><p style="width:130px"><?=$item['phone']; ?></p></td>
                            <td>
                                <a href="<?= yii\helpers\Url::to(['committee/hotel-map?latitude='.$item['latitude'].'&longitude='.$item['longitude']])?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" style="    font-size: 30px;color: cornflowerblue;margin: 5px 51px;" height="1em" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
            </table>
            </div
</section>






