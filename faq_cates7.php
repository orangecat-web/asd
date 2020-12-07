<?php include("header.php") ?>
<!-- LIGHT SECTION -->
<section class="lightSection clearfix pageHeader">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <div class="page-title">
                    <h2>常見問題</h2>
                </div>
            </div>
            <div class="col-xs-6">
                <ol class="breadcrumb pull-right">
                    <li>
                        <a href=".">首頁</a>
                    </li>
                    <li>常見問題</li>
                    <li class="active">其它問題</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- MAIN CONTENT SECTION -->
<section class="mainContent clearfix aboutUsInfo">
    <div class="row container">
        <?php include("nav-about.php") ?>
        <div class="col-md-9">
            <h2>其它問題</h2>
            <div class="col-sm-12 col-xs-12">
                <div class="accordionCommon" id="accordionTwo">
                    <div class="panel-group" id="accordionSecond">

                        <div class="panel panel-default">

                            <!-- id collapse-s-1,2,3,4...... -->
                            <a class="panel-heading accordion-toggle bg-color-2" data-toggle="collapse" data-parent="#accordionSecond" href="#collapse-s-1">
                                <span>Q1. 訂購需要先註冊會員嗎？</span>
                                <span class="iconBlock iconTransparent"><i class="fa fa-chevron-up"></i></span>
                                <span class="separator"></span>
                            </a>
                            <div id="collapse-s-1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>請先完成會員註冊後，即可開始訂購。如何註冊會員請參見「會員常見問題」</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <a class="panel-heading accordion-toggle bg-color-2" data-toggle="collapse" data-parent="#accordionSecond" href="#collapse-s-2">
                                <span>Q2. 訂購方式有：傳真訂購、劃撥訂購嗎？</span>
                                <span class="iconBlock iconTransparent"><i class="fa fa-chevron-up"></i></span>
                                <span class="separator"></span>
                            </a>
                            <div id="collapse-s-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>本站提供為網路訂購方式，所提供的付款方式為「信用卡」、「ATM轉帳」、「超商代碼繳費」、「超商取貨付款」、「宅配貨到付款」以上付款方式，目前尚無傳真訂購、劃撥訂購等方式，敬請見諒。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include("footer.php") ?>
</body>
</html>