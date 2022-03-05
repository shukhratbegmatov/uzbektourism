$(document).ready(function() {
    $('#customFile').change(function(evt) {
        $('.custom-file-label').html($(this).val());
    });
});
$(document).ready(function() {
    $('#customFile').change(function(evt) {
        $('.kartin1').html($(this).val());

        var $preview = $('.gallery1').empty();
        if (this.files) $.each(this.files, readAndPreview);
        var image_size1 = this.files[0].size;

        function readAndPreview(i, file) {
            var reader = new FileReader();
            $(reader).on("load", function() {
                $preview.append($("<img>", {src:this.result, width:400, height:400}));
                $('.imgsize1').html("fayl xajmi: " + Math.round(image_size1  / 1024)+ " KB");
            });
            reader.readAsDataURL(file);
        }
    });
});


$(document).ready(function() {
    $('#customFile1').change(function(evt) {
        $('.kartin1').html($(this).val());

        var $preview = $('.gallery1').empty();
        if (this.files) $.each(this.files, readAndPreview);
        var image_size1 = this.files[0].size;

        function readAndPreview(i, file) {
            var reader = new FileReader();
            $(reader).on("load", function() {
                $preview.append($("<img>", {src:this.result, width:400, height:400}));
                $('.imgsize1').html("fayl xajmi: " + Math.round(image_size1  / 1024)+ " KB");
            });
            reader.readAsDataURL(file);
        }
    });
});
$(document).ready(function() {
    $('#customFile2').change(function(evt) {
        $('.kartin2').html($(this).val());
        var $preview = $('.gallery2').empty();
        if (this.files) $.each(this.files, readAndPreview);
        var image_size2 = this.files[0].size;
        function readAndPreview(i, file) {
            var reader = new FileReader();
            $(reader).on("load", function() {
                $preview.append($("<img>", {src:this.result, width:400, height:400}));
                $('.imgsize2').html("fayl xajmi: " + Math.round(image_size2  / 1024)+ " KB");
            });
            reader.readAsDataURL(file);
        }
    });
});


$('.field-errors404-answer_link1').hide();
function checkFluency(){
    let checkbox = document.getElementById('fluency');
    if (checkbox.checked == true){
        $('.field-errors404-answer_link').hide();
        $('.field-errors404-answer_link1').show();
    }
    if (checkbox.checked != true){
        $('.field-errors404-answer_link1').hide();
        $('.field-errors404-answer_link').show();
    }

}

$( document ).ready(function() {
    var base_color = "rgb(230,230,230)";
    var active_color = "rgb(237, 40, 70)";
    var child = 1;
    var length = $("section").length - 1;
    $("#prev").addClass("disabled");
    $("#submit").addClass("disabled");

    $("section").not("section:nth-of-type(1)").hide();
    $("section").not("section:nth-of-type(1)").css('transform','translateX(100px)');

    var svgWidth = length * 200 + 24;
    $("#svg_wrap").html(
        '<svg version="1.1" id="svg_form_time" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 ' +
        svgWidth +
        ' 24" xml:space="preserve"></svg>'
    );

    function makeSVG(tag, attrs) {
        var el = document.createElementNS("http://www.w3.org/2000/svg", tag);
        for (var k in attrs) el.setAttribute(k, attrs[k]);
        return el;
    }

    for (i = 0; i < length; i++) {
        var positionX = 12 + i * 200;
        var rect = makeSVG("rect", { x: positionX, y: 9, width: 200, height: 6 });
        document.getElementById("svg_form_time").appendChild(rect);
        // <g><rect x="12" y="9" width="200" height="6"></rect></g>'
        var circle = makeSVG("circle", {
            cx: positionX,
            cy: 12,
            r: 12,
            width: positionX,
            height: 6
        });
        document.getElementById("svg_form_time").appendChild(circle);
    }

    var circle = makeSVG("circle", {
        cx: positionX + 200,
        cy: 12,
        r: 12,
        width: positionX,
        height: 6
    });
    document.getElementById("svg_form_time").appendChild(circle);

    $('#svg_form_time rect').css('fill',base_color);
    $('#svg_form_time circle').css('fill',base_color);
    $("circle:nth-of-type(1)").css("fill", active_color);


    $(".button").click(function () {
        $("#svg_form_time rect").css("fill", active_color);
        $("#svg_form_time circle").css("fill", active_color);
        var id = $(this).attr("id");
        if (id == "next") {
            $("#prev").removeClass("disabled");
            if (child >= length) {
                $(this).addClass("disabled");
                $('#submit').removeClass("disabled");
            }
            if (child <= length) {
                child++;
            }
        } else if (id == "prev") {
            $("#next").removeClass("disabled");
            $('#submit').addClass("disabled");
            if (child <= 2) {
                $(this).addClass("disabled");
            }
            if (child > 1) {
                child--;
            }
        }
        var circle_child = child + 1;
        $("#svg_form_time rect:nth-of-type(n + " + child + ")").css(
            "fill",
            base_color
        );
        $("#svg_form_time circle:nth-of-type(n + " + circle_child + ")").css(
            "fill",
            base_color
        );
        var currentSection = $("section:nth-of-type(" + child + ")");
        currentSection.fadeIn();
        currentSection.css('transform','translateX(0)');
        currentSection.prevAll('section').css('transform','translateX(-100px)');
        currentSection.nextAll('section').css('transform','translateX(100px)');
        $('section').not(currentSection).hide();
    });

});
//
//
//
// $(document).ready(function() {
//     App.init();
// });
// getPagination('#table-id');
// $('#maxRows').trigger('change');
// function getPagination (table){
//
//     $('#maxRows').on('change',function(){
//         $('.pagination').html('');						// reset pagination div
//         var trnum = 0 ;									// reset tr counter
//         var maxRows = parseInt($(this).val());			// get Max Rows from select option
//
//         var totalRows = $(table+' tbody tr').length;		// numbers of rows
//         $(table+' tr:gt(0)').each(function(){			// each TR in  table and not the header
//             trnum++;									// Start Counter
//             if (trnum > maxRows ){						// if tr number gt maxRows
//
//                 $(this).hide();							// fade it out
//             }if (trnum <= maxRows ){$(this).show();}// else fade in Important in case if it ..
//         });											//  was fade out to fade it in
//         if (totalRows > maxRows){						// if tr total rows gt max rows option
//             var pagenum = Math.ceil(totalRows/maxRows);	// ceil total(rows/maxrows) to get ..
//             //	numbers of pages
//             for (var i = 1; i <= pagenum ;){			// for each page append pagination li
//                 $('.pagination').append('<li data-page="'+i+'">\
// 								      <span>'+ i++ +'<span class="sr-only">(current)</span></span>\
// 								    </li>').show();
//             }											// end for i
//
//
//         } 												// end if row count > max rows
//         $('.pagination li:first-child').addClass('active'); // add active class to the first li
//
//
//         //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT
//         showig_rows_count(maxRows, 1, totalRows);
//         //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT
//
//         $('.pagination li').on('click',function(e){		// on click each page
//             e.preventDefault();
//             var pageNum = $(this).attr('data-page');	// get it's number
//             var trIndex = 0 ;							// reset tr counter
//             $('.pagination li').removeClass('active');	// remove active class from all li
//             $(this).addClass('active');					// add active class to the clicked
//
//
//             //SHOWING ROWS NUMBER OUT OF TOTAL
//             showig_rows_count(maxRows, pageNum, totalRows);
//             //SHOWING ROWS NUMBER OUT OF TOTAL
//
//
//
//             $(table+' tr:gt(0)').each(function(){		// each tr in table not the header
//                 trIndex++;								// tr index counter
//                 // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
//                 if (trIndex > (maxRows*pageNum) || trIndex <= ((maxRows*pageNum)-maxRows)){
//                     $(this).hide();
//                 }else {$(this).show();} 				//else fade in
//             }); 										// end of for each tr in table
//         });										// end of on click pagination list
//     });
//     // end of on select change
//
//     // END OF PAGINATION
//
// }
//

//
//
// // SI SETTING
// $(function(){
//     // Just to append id number for each row
//     default_index();
//
// });
//
// //ROWS SHOWING FUNCTION
// function showig_rows_count(maxRows, pageNum, totalRows) {
//     //Default rows showing
//     var end_index = maxRows*pageNum;
//     var start_index = ((maxRows*pageNum)- maxRows) + parseFloat(1);
//     var string = 'Showing '+ start_index + ' to ' + end_index +' of ' + totalRows + ' entries';
//     $('.rows_count').html(string);
// }
//
// // CREATING INDEX
// function default_index() {
//     $('table tr:eq(0)').prepend('<th> # </th>')
//
//     var id = 0;
//
//     $('table tr:gt(0)').each(function(){
//         id++
//         $(this).prepend('<td>'+id+'</td>');
//     });
// }
//
// // All Table search script
// function FilterkeyWord_all_table() {
//
// // Count td if you want to search on all table instead of specific column
//
//     var count = $('.table').children('tbody').children('tr:first-child').children('td').length;
//
//     // Declare variables
//     var input, filter, table, tr, td, i;
//     input = document.getElementById("search_input_all");
//     var input_value =     document.getElementById("search_input_all").value;
//     filter = input.value.toLowerCase();
//     if(input_value !=''){
//         table = document.getElementById("table-id");
//         tr = table.getElementsByTagName("tr");
//
//         // Loop through all table rows, and hide those who don't match the search query
//         for (i = 1; i < tr.length; i++) {
//
//             var flag = 0;
//
//             for(j = 0; j < count; j++){
//                 td = tr[i].getElementsByTagName("td")[j];
//                 if (td) {
//
//                     var td_text = td.innerHTML;
//                     if (td.innerHTML.toLowerCase().indexOf(filter) > -1) {
//                         //var td_text = td.innerHTML;
//                         //td.innerHTML = 'shaban';
//                         flag = 1;
//                     } else {
//                         //DO NOTHING
//                     }
//                 }
//             }
//             if(flag==1){
//                 tr[i].style.display = "";
//             }else {
//                 tr[i].style.display = "none";
//             }
//         }
//     }else {
//         //RESET TABLE
//         $('#maxRows').trigger('change');
//     }
// }