<?php include("header.php") ?>
<link rel="stylesheet" href="css/cart.css">
<!-- LIGHT SECTION -->
<section class="lightSection clearfix pageHeader">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <div class="page-title">
                    <h2>會員中心</h2>
                </div>
            </div>
            <div class="col-xs-6">
                <ol class="breadcrumb pull-right">
                    <li>
                        <a href=".">回首頁</a>
                    </li>
                    <li class="active">
                        <a href="account-dashboard.php">會員中心</a>
                    </li>
                    <li class="active">紅利點數</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- MAIN CONTENT SECTION -->
<section class="mainContent clearfix userProfile">
    <div class="container">
        <div class="row">
            <?php include("nav-acc.php") ?>     
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="innerWrapper">
                    <div class="orderBox myAddress">
                        <h4>紅利點數</h4>
                        <div style="text-align:right">可用紅利點數：283999</div>
                        <dl class="row bonus">
                            <dt class="col-md-2 title">開始日期</dt>
                            <dt class="col-md-2 title">到期日期</dt>
                            <dt class="col-md-6 title">點數內容</dt>
                            <dt class="col-md-2 title">紅利點數</dt>
                        </dl>
                        <dl class="row bonus">
                            <dt class="col-xs-3 mtitle">開始日期</dt>
                            <dd class="col-md-2 col-xs-9 item">2015/08/25</dd>
                            <dt class="col-xs-3 mtitle">到期日期</dt>
                            <dd class="col-md-2 col-xs-9 item">2016/10/11</dd>
                            <dt class="col-xs-3 mtitle">點數內容</dt>
                            <dd class="col-md-6 col-xs-9 item">總額$4,000元，贈4000點</dd>
                            <dt class="col-xs-3 mtitle">紅利點數</dt>
                            <dd class="col-md-2 col-xs-9 item">79</dd>
                        </dl>
                        
                        <dl class="row bonus">
                            <dt class="col-md-2 title">使用日期</dt>
                            <dt class="col-md-8 title">紀錄內容</dt>
                            <dt class="col-md-2 title">紅利點數</dt>
                        </dl>
                        <dl class="row bonus">
                            <dt class="col-xs-3 mtitle">使用日期</dt>
                            <dd class="col-md-2 col-xs-9 item">2016/10/11</dd>
                            <dt class="col-xs-3 mtitle">紀錄內容</dt>
                            <dd class="col-md-8 col-xs-9 item">訂單編號：CFM1825798181</dd>
                            <dt class="col-xs-3 mtitle">紅利點數</dt>
                            <dd class="col-md-2 col-xs-9 item">79</dd>
                        </dl>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include("footer.php") ?>
</body>
</html>