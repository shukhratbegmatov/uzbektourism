<?php
/**
 * Author: Nurmukhammadov Shakhrizod
 * date: 16.12.2019
 */

 $lang = Yii::$app->language;

$this->title = Yii::t('app','Statistika') ;
$this->params['breadcrumbs'][] = $this->title;
$this->params['titlebreadcrumbs'] = $this->title;


$this->registerMetaTag(['property' => 'og:description', 'content' => 'Research']);
$this->registerMetaTag(['property' => 'og:title', 'content' => 'Research']);
$this->registerMetaTag(['property' => 'og:url', 'content' => 'https://uzbektourism.uz/ru/research']);
$this->registerMetaTag(['property' => 'og:image', 'content' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmvsjWSJTFMIoEyP-GmG1KcVFPoC7dicokdWfLxZPgMIbau-nA5w']);
?>
<style>
    body{
        font-family: 'Open Sans', sans-serif !important;
    }

    .nav-tabs > li {

        width: 33.3%;
        margin-bottom: 6px!important;
    }
    @media only screen and (max-width: 500px) {
        .nav-tabs > li {

            width: 100%;
            margin-bottom: 6px!important;
        }
    }
    .fade{
        opacity: 1;
    }
</style>
 <?php if($lang === "uz" ){?>
     <div class="container-fluid" id="research">
         <div class="row">
             <div class="col-md-12">
                 <div class="col-lg-12   bhoechie-tab-container">
                     <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
                         <div class="list-group">
                             <a href="#" class="list-group-item active text-center">
                                 <img src="/images/infografika/hiker.svg" alt="">
                                 Chet ellik mehmonlar
                             </a>
                             <a href="#" class="list-group-item text-center">
                                 <img src="/images/infografika/line-chart.svg" alt="">Turizmning asosiy ko'rsatkichlari
                             </a>
                             <a href="#" class="list-group-item text-center">
                                 <img src="/images/infografika/conversation.svg" alt=""> Chet ellik mehmonlarni so'rov
                             </a>
                             <a href="#" class="list-group-item text-center">
                                 <img src="/images/infografika/data.svg" alt="">
                                 Tahlil materiallari
                             </a>
                         </div>
                     </div>
                     <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab" style="height: 456px;">
                         <!-- flight section -->
                         <div class="bhoechie-tab-content active">
                             <ul class="nav nav-tabs">
                                 <li class="active"><a data-toggle="tab" href="#home">2018-2019</a></li>
                                 <li><a data-toggle="tab" href="#menu1" >2019-2020</a></li>
                                 <li><a data-toggle="tab" href="#menu2" >2018-2021</a></li>
<!--                                 <li><a data-toggle="tab" href="#menu2" >Maqsad bo'yicha</a></li>-->
                             </ul>

                             <div class="tab-content">
                                 <div id="home" class="tab-pane fade in active" style="overflow-y: scroll; height: 379px;">
                                     <a href="/news/download?url=2018 ??  ??????.xlsx"><img src="/images/infografika/calculator.svg" alt="">  2018-yilda chet ellik sayyohlar soni</a><br>
                                     <a href="/news/download?url=countYanvarTourists.xlsx"><img src="/images/infografika/calculator.svg" alt="">  2018-yil yanvar va 2019-yil yanvar oyidagi chet ellik sayyohlar soni</a><br>
                                     <a href="/news/download?url=february2018_february2019.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  2018-yil fevral va 2019-yil fevral oylarida chet ellik sayyohlar soni</a><br>
                                     <a href="/news/download?url=???????? 2019 ??. ???????????????????? ?????? ??????????.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  2018-yil mart va 2019-yil mart oylarida chet ellik sayyohlar soni</a><br>
                                     <a href="/news/download?url=????????????_2019_??_????????????????????_??????_??????????.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  2018-yil aprel va 2019-yil aprel oylarida chet ellik sayyohlar soni</a><br>
                                     <a href="/news/download?url=?????? 2019 ??. ???????????????????? ?????? ??????????.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  2018-yil may va 2019-yil may oylarida chet ellik sayyohlar soni</a><br>
                                     <a href="/news/download?url=???????? 2019 ??. ???????????????????? ?????? ??????????.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  2018-yil iyun va 2019-yil iyun oylarida chet ellik sayyohlar soni</a><br>
                                     <a href="/news/download?url=???????? 2019 ?? ??????.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  2018-yil iyul va 2019-yil iyul oylarida chet ellik sayyohlar soni</a><br>
                                     <a href="/news/download?url=???????????? 2019 ?? ??????.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  2018-yil avgust va 2019-yil avgust oylarida chet ellik sayyohlar soni</a><br>
                                     <a href="http://cloud.uzbektourism.uz/uzbektourism/downloads/files/???????????????? 2019 ?? uzb.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  2018-yil sentabr va 2019-yil sentabr oylarida chet ellik sayyohlar soni</a><br>
                                     <a href="http://cloud.uzbektourism.uz/uzbektourism/downloads/files/?????????????? 2019 ?? uzb.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  2018-yil oktabr va 2019-yil oktabr oylarida chet ellik sayyohlar soni</a><br>
                                     <a href="http://cloud.uzbektourism.uz/uzbektourism/downloads/files/???????????? 2019 ?? uzb.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  2018-yil noyabr va 2019-yil noyabr oylarida chet ellik sayyohlar soni</a><br>
                                 </div>
                                 <div id="menu1" class="tab-pane fade">
                                     <a href="/news/download?url=2018 ??  ??????.xlsx"><img src="/images/infografika/calculator.svg" alt="">2019 yil yanvar va 2020 yil yanvar oyidagi chet ellik sayyohlar soni</a><br>
                                     <a href="/news/download?url=countYanvarTourists.xlsx"><img src="/images/infografika/calculator.svg" alt="">2019 yil fevral va 2020 yil fevral oyidagi chet ellik sayyohlar soni</a><br>
                                     <a href="/news/download?url=february2018_february2019.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">2020 yildagi chet ellik sayyohlar</a><br>
                                 </div>
                                 <div id="menu2" class="tab-pane fade">
                                     <a href="/news/download?url=2018_2021_????_??_1_??_??????_2021_??_??????_????????????????_??????.xlsx"><img src="/images/infografika/calculator.svg" alt="">2018_2021_????_??_1_??_??????_2021_??_??????_????????????????_??????</a><br>
                                     <a href="/news/download?url=2018-2020 yy. va 2021-y. 1-chorak xor. sayoh soni uzb.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">2018-2020 yy. va 2021-y. 1-chorak xor. sayoh soni uzb</a><br>
                                 </div>
                             </div>
                         </div>

                         <!-- train section -->
                         <div class="bhoechie-tab-content">
                             <ul class="nav nav-tabs">
                                 <li class="active tabssss" ><a data-toggle="tab" href="#home1" style="    margin-bottom: -12px;" >Turistik xizmatlarning eksporti</a></li>
                                 <li class="tabssss"><a data-toggle="tab" href="#menu11" class="" style="    margin-bottom: -12px;" >Turar joy imkoniyatlari
                                     </a></li>
                                 <li class="tabssss"><a data-toggle="tab" href="#menu21" style="    margin-bottom: -12px;" >Turizm infratuzilmasi
                                     </a></li>
                             </ul>

                             <div class="tab-content">
                                 <div id="home1" class="tab-pane fade in active">
                                     <a href="/news/download?url=assosiy_pokazateli.docx">
                                         <ul style="list-style: none">
                                             <img id="main_img" src="/images/infografika/infografika.jpg" alt="">
                                             <!--                                    <li><img src="/images/infografika/business-presentation.svg" alt=""></li>-->
                                             <!--                                    <li>???????????????? ????????????????????</li>-->
                                         </ul>
                                     </a>
                                 </div>
                                 <div id="menu11" class="tab-pane fade">
                                     <img src="/images/infografika/infografika123.jpg" style="width: 100%; height: 100%;" alt="">
                                 </div>
                                 <div id="menu21" class="tab-pane fade">
                                     <img src="/images/infografika/photo_2019-01-18_15-08-38.jpg" style="width: 100%; height: 100%;" alt="">
                                 </div>
                             </div>
                         </div>

                         <!-- hotel search -->
                         <div class="bhoechie-tab-content tab-pane" >
                             <br>
                             <a href="/news/download?url=uzbekistan_visitor_economy_version_impresa_rev(1).pdf"><img src="/images/infografika/Screenshot_4.png" alt="">  2014-yilda O???zbekistonda turizmni tahlil qilish</a><br>
                             <br>
                             <a href="/news/download?url=belaya_kniga.pdf"><img src="/images/infografika/Screenshot_3.png" alt="">  Turizm oq qog'ozi 2018</a>
                         </div>
                         <div class="bhoechie-tab-content tab-pane">
                             <br>

                             <a href="/news/download?url=21.02.rus.pdf"><img src="/images/calendar.svg" alt="">  2018-yil natijalari</a><br><br><br>
                             <a href="/news/download?url=21.02.rus.pdf"><img src="/images/calculator.svg" alt="">  2019-yil natijalari</a><br><br><br>
                             <a href="/news/download?url=21.02.rus.pdf"><img src="/images/calculator.svg" alt="">  Mehmonhona biznesining baholanishi - 2019-yil</a><br>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

 <?php }else if ($lang === "ru"){?>
     <div class="container-fluid" id="research">
         <div class="row">
             <div class="col-md-12">
                 <div class="col-lg-12  bhoechie-tab-container">
                     <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
                         <div class="list-group">
                             <a href="#" class="list-group-item active text-center">
                                 <img src="/images/infografika/hiker.svg" alt="">
                                 ?????????????????????? ????????????????????
                             </a>
                             <a href="#" class="list-group-item text-center">
                                 <img src="/images/infografika/line-chart.svg" alt="">???????????????? ???????????????????? ??????????????
                             </a>
                             <a href="#" class="list-group-item text-center">
                                 <img src="/images/infografika/conversation.svg" alt=""> ?????????? ?????????????????????? ??????????????????????
                             </a>
                             <a href="#" class="list-group-item text-center">
                                 <img src="/images/infografika/data.svg" alt="">
                                 ?????????????????????????? ??????????????????
                             </a>
                         </div>
                     </div>
                     <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab" style="height: 456px;">
                         <!-- flight section -->
                         <div class="bhoechie-tab-content active">
                             <ul class="nav nav-tabs">
                                 <li class="active"><a data-toggle="tab" href="#home">2018-2019</a></li>
                             </ul>

                             <div class="tab-content">
                                 <div id="home" class="tab-pane fade in active" style="overflow-y: scroll; height: 379px;">
                                     <a href="/news/download?url=2018 ??  ??????.xlsx"><img src="/images/infografika/calculator.svg" alt="">  ???????????????????? ?????????????????????? ???????????????? ???? 2018 ??.</a><br>
                                     <a href="/news/download?url=countYanvarTourists.xlsx"><img src="/images/infografika/calculator.svg" alt="">  ???????????????????? ?????????????????????? ???????????????? ???? ???????????? 2018 ??. ?? ???????????? 2019 ??.</a><br>
                                     <a href="/news/download?url=february2018_february2019.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  ???????????????????? ?????????????????????? ???????????????? ???? ?????????????? 2018 ??. ?? ?????????????? 2019 ??.</a><br>
                                     <a href="/news/download?url=???????? 2019 ??. ???????????????????? ?????? ??????????.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  ???????????????????? ?????????????????????? ???????????????? ???? ???????? 2018 ??. ?? ???????? 2019 ??.</a><br>
                                     <a href="/news/download?url=????????????_2019_??_????????????????????_??????_??????????.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  ???????????????????? ?????????????????????? ???????????????? ???? ???????????? 2018 ??. ?? ???????????? 2019 ??.</a><br>
                                     <a href="/news/download?url=?????? 2019 ??. ???????????????????? ?????? ??????????.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  ???????????????????? ?????????????????????? ???????????????? ???? ?????? 2018 ??. ?? ?????? 2019 ??.</a><br>
                                     <a href="/news/download?url=???????? 2019 ??. ???????????????????? ?????? ??????????.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  ???????????????????? ?????????????????????? ???????????????? ???? ???????? 2018 ??. ?? ???????? 2019 ??.</a><br>
                                     <a href="/news/download?url=???????? 2019 ?? ??????.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  ???????????????????? ?????????????????????? ???????????????? ???? ???????? 2018 ??. ?? ???????? 2019 ??.</a><br>
                                     <a href="/news/download?url=???????????? 2019 ?? ??????.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  ???????????????????? ?????????????????????? ???????????????? ???? ???????????? 2018 ??. ?? ???????????? 2019 ??.</a><br>
                                     <a href="/news/download?url=???????????????? 2019 ?? ??????.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  ???????????????????? ?????????????????????? ???????????????? ???? ???????????????? 2018 ??. ?? ???????????????? 2019 ??.</a><br>
                                     <a href="/news/download?url=?????????????? 2019 ?? ??????.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  ???????????????????? ?????????????????????? ???????????????? ???? ?????????????? 2018 ??. ?? ?????????????? 2019 ??.</a><br>
                                     <a href="/news/download?url=???????????? 2019 ?? ??????.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  ???????????????????? ?????????????????????? ???????????????? ???? ???????????? 2018 ??. ?? ???????????? 2019 ??.</a><br>
                                 </div>
                                 <div id="menu1" class="tab-pane fade">

                                 </div>
                                 <div id="menu2" class="tab-pane fade">

                                 </div>
                             </div>
                         </div>

                         <!-- train section -->
                         <div class="bhoechie-tab-content">
                             <ul class="nav nav-tabs">
                                 <li class="active tabssss" ><a data-toggle="tab" href="#home1" style="    margin-bottom: -12px;" >?????????????? ???????????????????? ??????????</a></li>
                                 <li class="tabssss"><a data-toggle="tab" href="#menu11" class="" style="    margin-bottom: -12px;" >???????????????? ????????????????????
                                     </a></li>
                                 <li class="tabssss"><a data-toggle="tab" href="#menu21" style="    margin-bottom: -12px;" >???????????????????????????? ??????????????
                                     </a></li>
                             </ul>

                             <div class="tab-content">
                                 <div id="home1" class="tab-pane fade in active">
                                     <a href="/news/download?url=assosiy_pokazateli.docx">
                                         <ul style="list-style: none">
                                             <img id="main_img" src="/images/infografika/infografika.jpg" alt="">
                                             <!--                                    <li><img src="/images/infografika/business-presentation.svg" alt=""></li>-->
                                             <!--                                    <li>???????????????? ????????????????????</li>-->
                                         </ul>
                                     </a>
                                 </div>
                                 <div id="menu11" class="tab-pane fade">
                                     <img src="/images/infografika/infografika123.jpg" style="width: 100%; height: 100%;" alt="">
                                 </div>
                                 <div id="menu21" class="tab-pane fade">
                                     <img src="/images/infografika/photo_2019-01-18_15-08-38.jpg" style="width: 100%; height: 100%;" alt="">
                                 </div>
                             </div>
                         </div>

                         <!-- hotel search -->
                         <div class="bhoechie-tab-content tab-pane" >
                             <br>
                             <a href="/news/download?url=uzbekistan_visitor_economy_version_impresa_rev(1).pdf"><img src="/images/infografika/Screenshot_4.png" alt="">  ???????????? ?????????????? ?? ?????????????????????? 2014 ??.</a><br>
                             <br>
                             <a href="/news/download?url=belaya_kniga.pdf"><img src="/images/infografika/Screenshot_3.png" alt="">  ?????????? ?????????? ?????????????? 2018 ??.</a>
                         </div>
                         <div class="bhoechie-tab-content tab-pane">
                             <br>

                             <a href="/news/download?url=21.02.rus.pdf"><img src="/images/calendar.svg" alt="">  ?????????? 2018</a><br>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
<?php }else if ($lang === "en"){?>
     <div class="container-fluid" id="research">
         <div class="row">
             <div class="col-md-12">
                 <div class="col-lg-12   bhoechie-tab-container">
                     <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
                         <div class="list-group">
                             <a href="#" class="list-group-item active text-center">
                                 <img src="/images/infografika/hiker.svg" alt="">
                                 Foreign visitors
                             </a>
                             <a href="#" class="list-group-item text-center">
                                 <img src="/images/infografika/line-chart.svg" alt="">Key Tourism Indicators
                             </a>
                             <a href="#" class="list-group-item text-center">
                                 <img src="/images/infografika/conversation.svg" alt=""> Survey of foreign visitors
                             </a>
                             <a href="#" class="list-group-item text-center">
                                 <img src="/images/infografika/data.svg" alt="">
                                 Analytical materials
                             </a>
                         </div>
                     </div>
                     <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab" style="height: 456px;">
                         <!-- flight section -->
                         <div class="bhoechie-tab-content active">
                             <ul class="nav nav-tabs">
                                 <li class="active"><a data-toggle="tab" href="#home">2018-2019</a></li>
                                 <li><a data-toggle="tab" href="#menu1" >2019-2020</a></li>
                             </ul>

                             <div class="tab-content">
                                 <div id="home" class="tab-pane fade in active" style="overflow-y: scroll; height: 379px;">
                                     <a href="/news/download?url=2018 ?? ??????.xlsx"><img src="/images/infografika/calculator.svg" alt="">  The number of foreign tourists in 2018</a><br>
                                     <a href="/news/download?url=January2018-2019.xlsx"><img src="/images/infografika/calculator.svg" alt=""> The number of foreign tourists in January 2018 and January 2019</a><br>
                                     <a href="/news/download?url=february2018-2019.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  The number of foreign tourists in February 2018 and February 2019</a><br>
                                     <a href="/news/download?url=march2018-2019.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  The number of foreign tourists in March 2018 and March 2019</a><br>
                                     <a href="/news/download?url=april2018-2019.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  The number of foreign tourists in April 2018 and April 2019</a><br>
                                     <a href="/news/download?url=may2018-2019.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  The number of foreign tourists in May 2018 and May 2019</a><br>
                                     <a href="/news/download?url=june2018-2019.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  The number of foreign tourists in June 2018 and June 2019</a><br>
                                     <a href="/news/download?url=july2018-2019.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  The number of foreign tourists in July 2018 and July 2019</a><br>
                                     <a href="/news/download?url=august2018-2019.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  The number of foreign tourists in August 2018 and August 2019</a><br>
                                     <a href="http://cloud.uzbektourism.uz/uzbektourism/downloads/files/???????????????? 2019 ?? ??????.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  The number of foreign tourists in September 2018 and September 2019</a><br>
                                     <a href="http://cloud.uzbektourism.uz/uzbektourism/downloads/files/?????????????? 2019 ?? ??????.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  The number of foreign tourists in October 2018 and October 2019</a><br>
                                     <a href="http://cloud.uzbektourism.uz/uzbektourism/downloads/files/???????????? 2019 ?? ??????.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  The number of foreign tourists in November 2018 and November 2019</a><br>
                                 </div>
                                 <div id="menu1" class="tab-pane fade">

                                 </div>
                                 <div id="menu2" class="tab-pane fade">

                                 </div>
                             </div>
                         </div>

                         <!-- train section -->
                         <div class="bhoechie-tab-content">
                             <ul class="nav nav-tabs">
                                 <li class="active tabssss" ><a data-toggle="tab" href="#home1" style="    margin-bottom: -12px;" >Export of tourist services</a></li>
                                 <li class="tabssss"><a data-toggle="tab" href="#menu11" class="" style="    margin-bottom: -12px;" >Accommodation facilities
                                     </a></li>
                                 <li class="tabssss"><a data-toggle="tab" href="#menu21" style="    margin-bottom: -12px;" >Tourism infrastructure
                                     </a></li>
                             </ul>

                             <div class="tab-content">
                                 <div id="home1" class="tab-pane fade in active">
                                     <a href="/news/download?url=assosiy_pokazateli.docx">
                                         <ul style="list-style: none">
                                             <img id="main_img" src="/images/infografika/infografika.jpg" alt="">
                                             <!--                                    <li><img src="/images/infografika/business-presentation.svg" alt=""></li>-->
                                             <!--                                    <li>???????????????? ????????????????????</li>-->
                                         </ul>
                                     </a>
                                 </div>
                                 <div id="menu11" class="tab-pane fade">
                                     <img src="/images/infografika/infografika123.jpg" style="width: 100%; height: 100%;" alt="">
                                 </div>
                                 <div id="menu21" class="tab-pane fade">
                                     <img src="/images/infografika/photo_2019-01-18_15-08-38.jpg" style="width: 100%; height: 100%;" alt="">
                                 </div>
                             </div>
                         </div>

                         <!-- hotel search -->
                         <div class="bhoechie-tab-content tab-pane" >
                             <br>
                             <a href="/news/download?url=uzbekistan_visitor_economy_version_impresa_rev(1).pdf"><img src="/images/infografika/Screenshot_4.png" alt="">  Analysis of tourism in Uzbekistan in 2014</a><br>
                             <br>
                             <a href="/news/download?url=belaya_kniga.pdf"><img src="/images/infografika/Screenshot_3.png" alt="">  Tourism White Paper 2018</a>
                         </div>
                         <div class="bhoechie-tab-content tab-pane">
                             <br>
                             <a href="/news/download?url=21.02.ang.pdf"><img  src="/images/calendar.svg" alt="">  Result 2018</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
<?php }else if ($lang === "cyrl"){?>
     <div class="container-fluid" id="research">
         <div class="row">
             <div class="col-md-12">
                 <div class="col-lg-12   bhoechie-tab-container">
                     <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
                         <div class="list-group">
                             <a href="#" class="list-group-item active text-center">
                                 <img src="/images/infografika/hiker.svg" alt="">
                                 ?????? ?????????? ??????????????????

                             </a>
                             <a href="#" class="list-group-item text-center">
                                 <img src="/images/infografika/line-chart.svg" alt="">???????????????????? ???????????? ??????????????????????????
                             </a>
                             <a href="#" class="list-group-item text-center">
                                 <img src="/images/infografika/conversation.svg" alt=""> ?????? ?????????? ?????????????????????? ??????????
                             </a>
                             <a href="#" class="list-group-item text-center">
                                 <img src="/images/infografika/data.svg" alt="">
                                 ???????????? ????????????????????????
                             </a>
                         </div>
                     </div>
                     <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab" style="height: 456px;">
                         <!-- flight section -->
                         <div class="bhoechie-tab-content active">
                             <ul class="nav nav-tabs">
                                 <li class="active"><a data-toggle="tab" href="#home">2018-2019</a></li>
                                 <li><a data-toggle="tab" href="#menu1" >2019-2020</a></li>
                             </ul>

                             <div class="tab-content">
                                 <div id="home" class="tab-pane fade in active" style="overflow-y: scroll; height: 379px;">
                                     <a href="/news/download?url=2018 ?? ??????.xlsx"><img src="/images/infografika/calculator.svg" alt="">  2018 ?????????? ?????? ?????????? ???????????????? ????????</a><br>
                                     <a href="/news/download?url=???????????? 2019 ?? ??????.xlsx"><img src="/images/infografika/calculator.svg" alt="">  2018 ?????? ?????????? ???? 2019 ?????? ?????????? ?????????????? ?????? ?????????? ???????????????? ????????</a><br>
                                     <a href="/news/download?url=?????????????? 2019 ?? ??????.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt=""> 2018 ?????? ???????????? ???? 2019 ?????? ???????????? ???????????????? ?????? ?????????? ???????????????? ????????</a><br>
                                     <a href="/news/download?url=???????? 2019 ?? ??????.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  2018 ?????? ???????? ???? 2019 ?????? ???????? ???????????????? ?????? ?????????? ???????????????? ????????</a><br>
                                     <a href="/news/download?url=???????????? 2019 ?? ??????.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  2018 ?????? ?????????? ???? 2019 ?????? ?????????? ???????????????? ?????? ?????????? ???????????????? ????????</a><br>
                                     <a href="/news/download?url=?????? 2019 ?? ??????.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  2018 ?????? ?????? ???? 2019 ?????? ?????? ???????????????? ?????? ?????????? ???????????????? ????????</a><br>
                                     <a href="/news/download?url=???????? 2019 ?? ??????.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  2018 ?????? ?????? ???? 2019 ?????? ?????? ???????????????? ?????? ?????????? ???????????????? ????????</a><br>
                                     <a href="/news/download?url=???????? 2019 ?? ??????.xlsxx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  2018 ?????? ?????? ???? 2019 ?????? ?????? ???????????????? ?????? ?????????? ???????????????? ????????</a><br>
                                     <a href="http://cloud.uzbektourism.uz/uzbektourism/downloads/files/???????????????? 2019 ?? ??????.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  2018 ?????? ???????????????? ???? 2019 ?????? ???????????????? ???????????????? ?????? ?????????? ???????????????? ????????</a><br>
                                     <a href="http://cloud.uzbektourism.uz/uzbektourism/downloads/files/?????????????? 2019 ?? ??????.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  2018 ?????? ?????????????? ???? 2019 ?????? ?????????????? ???????????????? ?????? ?????????? ???????????????? ????????</a><br>
                                     <a href="http://cloud.uzbektourism.uz/uzbektourism/downloads/files/???????????? 2019 ?? ??????.xlsx" ><img src="/images/infografika/calculator.svg" style="margin-top: 4px;" alt="">  2018 ?????? ???????????? ???? 2019 ?????? ???????????? ???????????????? ?????? ?????????? ???????????????? ????????</a><br>
                                 </div>
                                 <div id="menu1" class="tab-pane fade">

                                 </div>
                                 <div id="menu2" class="tab-pane fade">

                                 </div>
                             </div>
                         </div>

                         <!-- train section -->
                         <div class="bhoechie-tab-content">
                             <ul class="nav nav-tabs">
                                 <li class="active tabssss" ><a data-toggle="tab" href="#home1" style="    margin-bottom: -12px;" >???????????????? ?????????????????????????? ????????????????</a></li>
                                 <li class="tabssss"><a data-toggle="tab" href="#menu11" class="" style="    margin-bottom: -12px;" >?????????? ?????? ????????????????????????
                                     </a></li>
                                 <li class="tabssss"><a data-toggle="tab" href="#menu21" style="    margin-bottom: -12px;" >???????????? ????????????????????????????
                                     </a></li>
                             </ul>

                             <div class="tab-content">
                                 <div id="home1" class="tab-pane fade in active">
                                     <a href="/news/download?url=assosiy_pokazateli.docx">
                                         <ul style="list-style: none">
                                             <img id="main_img" src="/images/infografika/infografika.jpg" alt="">
                                             <!--                                    <li><img src="/images/infografika/business-presentation.svg" alt=""></li>-->
                                             <!--                                    <li>???????????????? ????????????????????</li>-->
                                         </ul>
                                     </a>
                                 </div>
                                 <div id="menu11" class="tab-pane fade">
                                     <img src="/images/infografika/infografika123.jpg" style="width: 100%; height: 100%;" alt="">
                                 </div>
                                 <div id="menu21" class="tab-pane fade">
                                     <img src="/images/infografika/photo_2019-01-18_15-08-38.jpg" style="width: 100%; height: 100%;" alt="">
                                 </div>
                             </div>
                         </div>

                         <!-- hotel search -->
                         <div class="bhoechie-tab-content tab-pane" >
                             <br>
                             <a href="/news/download?url=uzbekistan_visitor_economy_version_impresa_rev(1).pdf"><img src="/images/infografika/Screenshot_4.png" alt="">  2014 ?????????? ???????????????????????? ???????????????? ???????????? ??????????</a><br>
                             <br>
                             <a href="/news/download?url=belaya_kniga.pdf"><img src="/images/infografika/Screenshot_3.png" alt="">  ???????????? ???? ???????????? 2018</a>
                         </div>
                         <div class="bhoechie-tab-content tab-pane">
                             <br>

                             <a href="/news/download?url=21.02.rus.pdf"><img src="/images/calendar.svg" alt="">  2018 ?????? ????????????????????</a><br>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 <?php }?>




<style>
    .tab-pane ul li{
        display: inline;
        list-style: none;
    }
    .tab-pane img{

    }
    .tab-pane a{
        color: black;
        font-weight: bold;
    }
    #research #main_img{
        width: 100%;
        height: 100%;
    }
    #research img{
        height: 56px;
        padding-top: -12px;
        margin-top: -8px;
    }
    #research .list-group img{
        width: 100%;
    }
    #research ul li a{
        font-size: 16px;
    }
    .tabssss{
        padding: 0;
        padding-top: 7px;
        padding-bottom: 13px;
    }
    .bg_news_box .nav.nav-tabs li{
        width: 33.3%;
    }
    div.bhoechie-tab-container{
        z-index: 10;
        background-color: #ffffff;
        padding: 0 !important;
        border-radius: 4px;
        -moz-border-radius: 4px;
        border:1px solid #ddd;
        margin-top: 20px;
        -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
        box-shadow: 0 6px 12px rgba(0,0,0,.175);
        -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
        background-clip: padding-box;
        opacity: 0.97;
        filter: alpha(opacity=97);
    }
    div.bhoechie-tab-menu{
        padding-right: 0;
        padding-left: 0;
        padding-bottom: 0;
    }
    div.bhoechie-tab-menu div.list-group{
        margin-bottom: 0;
    }
    div.bhoechie-tab-menu div.list-group>a{
        margin-bottom: 0;
    }
    div.bhoechie-tab-menu div.list-group>a .glyphicon,
    div.bhoechie-tab-menu div.list-group>a .fa {
        color: #5A55A3;
    }
    div.bhoechie-tab-menu div.list-group>a:first-child{
        border-top-right-radius: 0;
        -moz-border-top-right-radius: 0;
    }
    div.bhoechie-tab-menu div.list-group>a:last-child{
        border-bottom-right-radius: 0;
        -moz-border-bottom-right-radius: 0;
    }
    div.bhoechie-tab-menu div.list-group>a.active,
    div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
    div.bhoechie-tab-menu div.list-group>a.active .fa{
        background-color: #5A55A3;
        background-image: #5A55A3;
        color: #ffffff;
    }
    div.bhoechie-tab-menu div.list-group>a.active:after{
        content: '';
        position: absolute;
        left: 100%;
        top: 50%;
        margin-top: -13px;
        border-left: 0;
        border-bottom: 13px solid transparent;
        border-top: 13px solid transparent;
        border-left: 10px solid #5A55A3;
    }

    div.bhoechie-tab-content{
        background-color: #ffffff;
        /* border: 1px solid #eeeeee; */
        padding-left: 20px;
        padding-top: 10px;
    }

    div.bhoechie-tab div.bhoechie-tab-content:not(.active){
        display: none;
    }
</style>
<!--<script>-->
<!--    $(document).ready(function() {-->
<!--        $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {-->
<!--            e.preventDefault();-->
<!--            $(this).siblings('a.active').removeClass("active");-->
<!--            $(this).addClass("active");-->
<!--            var index = $(this).index();-->
<!--            $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");-->
<!--            $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");-->
<!--        });-->
<!--    });-->
<!--</script>-->