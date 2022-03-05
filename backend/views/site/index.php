<?php
$menucount = common\models\Menu1::find()->count();
$submenucount = common\models\CreateMenu::find()->count();
$newcount = common\models\News::find()->count();
?>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
    <div class="widget widget-table-one">
        <div class="widget-heading">
            <h5 class="">Count Categores</h5>
        </div>

        <div class="widget-content">
            <div class="transactions-list">
                <div class="t-item">
                    <div class="t-company-name">
                        <div class="t-icon">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            </div>
                        </div>
                        <div class="t-name">
                            <h4>All Menus</h4>
                            <p class="meta-date">4 Aug 1:00PM</p>
                        </div>

                    </div>
                    <div class="t-rate rate-dec">
                        <p><span><?=$menucount;?></span> ta</p>
                    </div>
                </div>
            </div>
            <div class="transactions-list">
                <div class="t-item">
                    <div class="t-company-name">
                        <div class="t-icon">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            </div>
                        </div>
                        <div class="t-name">
                            <h4>All Sub Menus</h4>
                            <p class="meta-date">4 Aug 1:00PM</p>
                        </div>

                    </div>
                    <div class="t-rate rate-dec">
                        <p><span><?=$submenucount;?></span> ta</p>
                    </div>
                </div>
            </div>
            <div class="transactions-list">
                <div class="t-item">
                    <div class="t-company-name">
                        <div class="t-icon">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            </div>
                        </div>
                        <div class="t-name">
                            <h4>All News</h4>
                            <p class="meta-date">4 Aug 1:00PM</p>
                        </div>

                    </div>
                    <div class="t-rate rate-dec">
                        <p><span><?=$newcount;?></span> ta</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>