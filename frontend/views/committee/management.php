<?php
/**
 * Author: Nurmukhammadov Shakhrizod
 * date: 13.12.2019
 */

$this->params['breadcrumbs'][] = Yii::t('app','Rahbariyat');
$this->params['titlebreadcrumbs'] = Yii::t('app','Rahbariyat');
$this->title = Yii::t('app','Rahbariyat');
$data = common\models\Management::find()->all();
$lang = Yii::$app->language;

?>
<style>
    body{
        color: #000!important;
    }
    .top-header {
        width: 900px;
        height: auto;
        position: absolute;
        left: 50%;
        margin-left: -450px;
        padding: 10px 5px
    }

    .top-header .logo {
        width: 20%;
        float: left;
        margin-right: 2%;
        line-height: 50px;
        text-transform: capitalize;
        font-size: 20px
    }

    .top-header span {
        color: #2eca7f
    }

    .top-header .links {
        width: 68%;
        float: right;
        list-style: none;
        text-align: right;
        padding: 10px 5px
    }

    .top-header .links li {
        display: inline-block;
        margin-left: 25px;
        line-height: 35px
    }

    .top-header .links li a {
        text-decoration: none;
        color: #9198a3;
        text-transform: capitalize
    }

    .top-header .links .active {
        border-bottom: 2px solid #2eca7f
    }

    .top-header .links .home {
        color: #242a33
    }

    .top-header .links li:hover {
        border-bottom: 2px solid #2eca7f
    }

    .top-header .links li a:hover {
        color: #242a33
    }
    /* End Top Header */

    /* Start Box Card */
    /*.box-card1 {*/
    /*    width: 900px;*/
    /*    !*height: 600px;*!*/
    /*    background-color: #fff;*/
    /*    position: absolute;*/
    /*    left: 50%;*/
    /*    !*margin-top: 80px;*!*/
    /*    margin-left: -450px;*/
    /*    border-radius: 15px;*/
    /*    overflow: hidden;*/
    /*    box-shadow: 0px 10px 10px #DDD*/
    /*}*/
    /* Start Head */
    .box-card1 .head {
        background-color: #353573;
        padding: 50px;
        background-image: url(http://lmpixels.com/wp/aveo/wp-content/uploads/2017/09/sp_main_bg.png);
        color: #FFF
    }

    .box-card1 .head .img-box {
        float: left;
        width: 30%;
        margin-right: 2%
    }

    .box-card1 .head .img-box img {
        max-width: 100%;
        margin-bottom: -75px;
        padding: 3px;
        border: 1px solid #e9e9e9;
        background-color: #FFF
    }

    .box-card1 .head .img-box img:hover {
        position: relative;
        bottom: 10px;
        box-shadow: 0 20px 10px #3333334d
    }

    .box-card1 .head .info-box {
        float: right;
        width: 68%;
        text-align: center;
        padding-top: 40px;
        font-size: 20px;
        /*text-transform: capitalize*/
    }

    .box-card1 .head .info-box h1 {
        margin-bottom: 20px;
        font-size: 45px
    }
    /* End Head */

    /* Start Content */
    .box-card1 .content {
        padding: 15px
    }

    .box-card1 .content .info-box {
        float: left;
        /*width: 45%;*/
        /*margin-top: 3%;*/
    }

    .box-card1 .content .text-box {
        /*margin-right: 5%;*/
        float: left;
        /*width: 50%*/
    }

    .box-card1 .content .text-box h2 {
        margin-bottom: 20px
    }

    .box-card1 .content .text-box h2 span {
        color: #2eca7f
    }

    .box-card1 .content .text-box p {
        line-height: 1.6;
        margin-bottom: 30px;
        color: #000;
        font-size: 15px
    }

    .box-card1 .content .text-box a {
        text-decoration: none;
        padding: 10px 20px;
        border: 1px solid #DDD;
        color: #212121;
        box-shadow: 0 2px 4px #0000004d;
        text-transform: uppercase;
        font-size: 13px;
        font-weight: 600
    }

    .box-card1 .content .info-box {
        line-height: 35px;
        font-size: 16px
    }

    .box-card1 .content .info-box ul {
        list-style: none
    }

    .box-card1 .content .info-box .title1 {
        display: inline-block;
        min-width: 40px;
        color: #424242
    }

    .box-card1 .content .info-box li .value {
        color: #000;
        display: inline-block
    }

    .box-card1 .content .info-box .value a {
        color: #2eca7f;
        text-decoration: none
    }

    .box-card1 .content .info-box .value a:hover {
        color: #ff9800
    }
    /* End Content */
    /* End Box Card */

    /* Start Footer */
    .copyright {
        text-align: center;
        font-size: 12px;
        color: #9e9e9e;
        position: absolute;
        bottom: 0px;
        left: 50%;
        margin-left: -152px;
        margin-bottom: 20px
    }
    /* End Footer */

    /* Start Framework */
    .clearfix {
        clear: both
    }
    /* End Framework */



    .img11{
        height:auto;
        width:100%;
    }

    .item{
        padding-left:5px;
        padding-right:5px;
    }
    .item-card{
        transition:0.5s;
        cursor:pointer;
    }
    .item-card-title{
        font-size:15px;
        transition:1s;
        cursor:pointer;
    }
    .item-card-title i{
        font-size:15px;
        transition:1s;
        cursor:pointer;
        color:#ffa710
    }
    .card-title i:hover{
        transform: scale(1.25) rotate(100deg);
        color:#18d4ca;

    }
    .card:hover{
        transform: scale(1.05);
        box-shadow: 10px 10px 15px rgba(0,0,0,0.3);
    }
    .card-text{
        /*height:80px;*/
    }

    .card::before, .card::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        transform: scale3d(0, 0, 1);
        transition: transform .3s ease-out 0s;
        background: rgba(255, 255, 255, 0.1);
        content: '';
        pointer-events: none;
    }
    .card::before {
        transform-origin: left top;
    }
    .card::after {
        transform-origin: right bottom;
    }
    .card:hover::before, .card:hover::after, .card:focus::before, .card:focus::after {
        transform: scale3d(1, 1, 1);
    }


    @media only screen and (max-width: 768px) {
        .box-card1{
            display: none;
        }
    }

    @media only screen and (min-width: 768px) {
        .mobile1{
            display: none;
        }
    }
    .sansserif {
        font-family: 'Open Sans', sans-serif;
    }
    p.sansserif>li{
        margin-top: 30px!important;
    }

    /* DEMO */
    *,
    *:before,
    *:after {
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }
    body{
        margin:0;
        padding:0;
        /*font:0.875em/1.48 arial,tahoma;*/
    }
    .container-tab{
        margin:auto;
        /*max-width:800px;*/
        /*padding:0 16px;*/
    }
    /* TABS */
    .accordion-tabs {
        *zoom: 1;
        width: 100%;
        border: 1px solid #dddddd;
        border-radius: 0.1875em;
        margin-bottom: 1.5em;
        margin-left:0;
        padding-left:0;
    }
    .accordion-tabs:before,
    .accordion-tabs:after {
        content: " ";
        display: table;
    }
    .accordion-tabs:after {
        clear: both;
    }
    .accordion-tabs li{
        list-style:none;
    }
    .accordion-tabs li.tab-head-cont:first-child a {
        border-top-left-radius: 0.1875em;
        border-top-right-radius: 0.1875em;
        border-top: 0;
    }
    .accordion-tabs li.tab-head-cont:last-child a {
        border-bottom-left-radius: 0.1875em;
        border-bottom-right-radius: 0.1875em;
    }
    .accordion-tabs li.tab-head-cont a {
        text-decoration:none;
        border-top: 1px solid #dddddd;
        color: #888888;
        display: block;
        padding: 0.75em 0.809em;
    }
    .accordion-tabs li.tab-head-cont a:hover {
        color: #000000;
    }
    .accordion-tabs li.tab-head-cont a:focus {
        outline: none;
    }
    .accordion-tabs li.tab-head-cont a.is-active {
        background-color: #f7f7f7;
        border-bottom: 0;
        color:#333333;
    }
    .accordion-tabs li.tab-head-cont section {
        padding: 1.5em 1.618em;
        background: #f7f7f7;
        display: none;
        overflow: hidden;
        width: 100%;
    }

    /* RESPONSIVE */
    @media screen and (min-width: 40em) {
        .accordion-tabs {
            border: none;
            position: relative;
        }
        .accordion-tabs li.tab-head-cont {
            display: inline;
        }
        .accordion-tabs li.tab-head-cont:last-child a {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }
        .accordion-tabs li.tab-head-cont a {
            display: inline-block;
            vertical-align: baseline;
            zoom: 1;
            *display: inline;
            *vertical-align: auto;
            border-top: 0;
            border-top-right-radius: 0.1875em;
            border-top-left-radius: 0.1875em;
        }
        .accordion-tabs li.tab-head-cont a.is-active {
            background-color: #f7f7f7;
            border: 1px solid #dddddd;
            border-bottom: 1px solid #f7f7f7;
            margin-bottom: -1px;
        }
        .accordion-tabs li.tab-head-cont section {
            border-bottom-left-radius: 0.1875em;
            border-bottom-right-radius: 0.1875em;
            border: 1px solid #dddddd;
            float: left;
            left: 0;
            padding: 0.75em 0.809em;
        }
        /*.accordion-tabs li.tab-head-cont section p {*/
        /*    -webkit-columns: 2;*/
        /*    -moz-columns: 2;*/
        /*    columns: 2;*/
        /*}*/
    }
</style>

<?php foreach ($data as $managements):?>
    <?= $managements->{'text_'.$lang}; ?>
<?php endforeach;?>





