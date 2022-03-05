<?php
$lang = Yii::$app->language;
$this->title =  Yii::t('app', "Gid-ekskursiya yetakchilari Yagona elektron reyestri");
$this->params['titlebreadcrumbs'] =  Yii::t('app', "Gid-ekskursiya yetakchilari Yagona elektron reyestri");
$this->params['breadcrumbs'][] =   Yii::t('app', "Gid-ekskursiya yetakchilari Yagona elektron reyestri");

?>
<style>

    table th , table td{
        text-align: center;
    }

    table tr:nth-child(even){
        background-color: #e4e3e3
    }

    th {
        background: #333;
        color: #fff;
    }

    .pagination {
        margin: 0;
    }

    .pagination li:hover{
        cursor: pointer;
    }

    .header_wrap {
        padding:30px 0;
    }
    .num_rows {
        width: 20%;
        float:left;
    }
    .tb_search{
        width: 20%;
        float:right;
    }
    .pagination-container {
        width: 70%;
        float:left;
    }

    .rows_count {
        width: 20%;
        float:right;
        text-align:right;
        color: #999;
    }
    .num_rows{
        display: none;
    }
    #table-id_wrapper{
        overflow-x: auto;
    }
    .header_wrap{display: none}
    .dataTables_length{display: none;}
    td > span{
        margin-left: 7px;
    }
</style>
<div class="header_wrap">
    <div class="tb_search">
        <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.." class="form-control">
    </div>
</div>
<table class="table table-striped table-class" id= "table-id">
    <thead>
    <tr>
        <th>№</th>
        <th><?= Yii::t('app', "Toliq ismi (F.I.Sh)"); ?></th>
        <th><?= Yii::t('app', "Sertifikat (beyj) raqami"); ?> </th>
        <th><?= Yii::t('app', "Faoliyat olib boradigan tili"); ?></th>
        <th><?= Yii::t('app', "Toifasi"); ?></th>
        <th><?= Yii::t('app', "Faoliyat olib boradigan hududi"); ?></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1; foreach ($body as $item): ?>
        <?php
        $language = explode(',',$item['language']);
        $category = \frontend\controllers\CommitteeController::Category($item['category_guide']);
        $region = !empty($item['region_id']) ? explode(",", $item['region_id']) : '---------';
        ?>
        <tr>
            <td><?= $i++?></td>
            <td><?= $item['fio_uz'];?></td>
            <td><?= $item['attestation_sertificate']; ?></td>
            <td><?php foreach ($language as $langs => $key ):?>
                    <?=Yii::t('app', $key).'<br>';?>
                <?php endforeach;?>
            </td>
            <td><?= $category ?></td>
            <td>
                <?php foreach ($region as $reg => $key ): ?>
                    <span><?= Yii::t('app', $key); ?>, </span>
                <?php endforeach; ?>
            </td>
            <td><a href="<?=\yii\helpers\Url::to(["/committee/getdata?id="], true).$item['data_token'];?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" style="margin-top: 10px;" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                    </svg>
                </a>
            </td>
        </tr>
    <?php endforeach;?>
    <tbody>
</table>
<div class='pagination-container'>
    <nav>
        <ul class="pagination">
        </ul>
    </nav>
</div>
<script>
    getPagination('#table-id');
    $('#maxRows').trigger('change');
    function getPagination (table){

        $('#maxRows').on('change',function(){
            $('.pagination').html('');						// reset pagination div
            var trnum = 0 ;									// reset tr counter
            var maxRows = parseInt($(this).val());			// get Max Rows from select option

            var totalRows = $(table+' tbody tr').length;		// numbers of rows
            $(table+' tr:gt(0)').each(function(){			// each TR in  table and not the header
                trnum++;									// Start Counter
                if (trnum > maxRows ){						// if tr number gt maxRows

                    $(this).hide();							// fade it out
                }if (trnum <= maxRows ){$(this).show();}// else fade in Important in case if it ..
            });											//  was fade out to fade it in
            if (totalRows > maxRows){						// if tr total rows gt max rows option
                var pagenum = Math.ceil(totalRows/maxRows);	// ceil total(rows/maxrows) to get ..
                //	numbers of pages
                for (var i = 1; i <= pagenum ;){			// for each page append pagination li
                    $('.pagination').append('<li data-page="'+i+'">\
								      <span>'+ i++ +'<span class="sr-only">(current)</span></span>\
								    </li>').show();
                }											// end for i


            } 												// end if row count > max rows
            $('.pagination li:first-child').addClass('active'); // add active class to the first li


            //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT
            showig_rows_count(maxRows, 1, totalRows);
            //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT

            $('.pagination li').on('click',function(e){		// on click each page
                e.preventDefault();
                var pageNum = $(this).attr('data-page');	// get it's number
                var trIndex = 0 ;							// reset tr counter
                $('.pagination li').removeClass('active');	// remove active class from all li
                $(this).addClass('active');					// add active class to the clicked


                //SHOWING ROWS NUMBER OUT OF TOTAL
                showig_rows_count(maxRows, pageNum, totalRows);
                //SHOWING ROWS NUMBER OUT OF TOTAL



                $(table+' tr:gt(0)').each(function(){		// each tr in table not the header
                    trIndex++;								// tr index counter
                    // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
                    if (trIndex > (maxRows*pageNum) || trIndex <= ((maxRows*pageNum)-maxRows)){
                        $(this).hide();
                    }else {$(this).show();} 				//else fade in
                }); 										// end of for each tr in table
            });										// end of on click pagination list
        });
        // end of on select change

        // END OF PAGINATION

    }




    // SI SETTING
    $(function(){
        // Just to append id number for each row
        default_index();

    });

    //ROWS SHOWING FUNCTION
    function showig_rows_count(maxRows, pageNum, totalRows) {
        //Default rows showing
        var end_index = maxRows*pageNum;
        var start_index = ((maxRows*pageNum)- maxRows) + parseFloat(1);
        var string = 'Showing '+ start_index + ' to ' + end_index +' of ' + totalRows + ' entries';
        $('.rows_count').html(string);
    }

    // CREATING INDEX
    function default_index() {
        $('table tr:eq(0)').prepend('<th> ID </th>')

        var id = 0;

        $('table tr:gt(0)').each(function(){
            id++
            $(this).prepend('<td>'+id+'</td>');
        });
    }

    // All Table search script
    function FilterkeyWord_all_table() {

// Count td if you want to search on all table instead of specific column

        var count = $('.table').children('tbody').children('tr:first-child').children('td').length;

        // Declare variables
        var input, filter, table, tr, td, i;
        input = document.getElementById("search_input_all");
        var input_value =     document.getElementById("search_input_all").value;
        filter = input.value.toLowerCase();
        if(input_value !=''){
            table = document.getElementById("table-id");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 1; i < tr.length; i++) {

                var flag = 0;

                for(j = 0; j < count; j++){
                    td = tr[i].getElementsByTagName("td")[j];
                    if (td) {

                        var td_text = td.innerHTML;
                        if (td.innerHTML.toLowerCase().indexOf(filter) > -1) {
                            //var td_text = td.innerHTML;
                            //td.innerHTML = 'shaban';
                            flag = 1;
                        } else {
                            //DO NOTHING
                        }
                    }
                }
                if(flag==1){
                    tr[i].style.display = "";
                }else {
                    tr[i].style.display = "none";
                }
            }
        }else {
            //RESET TABLE
            $('#maxRows').trigger('change');
        }
    }

</script>

<?php
$this->registerJs(
    "$('table').DataTable();"
);
?>