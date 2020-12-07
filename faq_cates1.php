<?php include("header.php") ?>
<link rel="stylesheet" href="css/cart.css">
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
                    <li class="active">會員常見問題</li>
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
            <h2>會員常見問題</h2>
            <div class="col-sm-12 col-xs-12">
                <div class="accordionCommon" id="accordionTwo">
                    <div class="panel-group" id="accordionSecond">

                        <div class="panel panel-default">

                            <!-- id collapse-s-1,2,3,4...... -->
                            <a class="panel-heading accordion-toggle bg-color-2" data-toggle="collapse" data-parent="#accordionSecond" href="#collapse-s-1">
                                <span>Q5. 我的手機號碼換了，但是E-MAIL不變，要如何重新註冊帳號?</span>
                                <span class="iconBlock iconTransparent"><i class="fa fa-chevron-up"></i></span>
                                <span class="separator"></span>
                            </a>
                            <div id="collapse-s-1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>購物網站首頁右上角點擊「會員登入」按鈕，選擇「立即註冊」後依照頁面導引輸入所需欄位資料，或使用Facebook 或 Google+直接登錄；通過手機簡訊驗證後完成註冊。</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <a class="panel-heading accordion-toggle bg-color-2" data-toggle="collapse" data-parent="#accordionSecond" href="#collapse-s-2">
                                <span>Q2. 忘記密碼如何重新設定?</span>
                                <span class="iconBlock iconTransparent"><i class="fa fa-chevron-up"></i></span>
                                <span class="separator"></span>
                            </a>
                            <div id="collapse-s-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>在會員登入頁面，點擊“忘記密碼”，根據頁面提示輸入註冊的手機號碼或E-mail帳號，並送出驗證碼後進行認證，並重新設置新密碼。密碼需由6-8位英數字的組合。</p>
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