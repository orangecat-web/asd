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
                    <li class="active">購物金清單</li>
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
                        <h4>購物金清單</h4>
                        <div style="text-align:right">可用購物金：283999</div>
                        
                        <dl class="row cart">
                            <dt class="col-md-2 title">使用期限</dt>
                            <dt class="col-md-3 title">活動說明</dt>
                            <dt class="col-md-2 title">優惠代碼</dt>
                            <dt class="col-md-3 title">優惠內容</dt>
                            <dt class="col-md-2 title">使用範圍</dt>
                        </dl>
                        <dl class="row cart">
                            <dt class="col-xs-3 mtitle">使用期限</dt>
                            <dd class="col-md-2 col-xs-9 item">2015/09/15</dd>
                            <dt class="col-xs-3 mtitle">活動說明</dt>
                            <dd class="col-md-3 col-xs-9 item">全館大折扣</dd>
                            <dt class="col-xs-3 mtitle">優惠代碼</dt>
                            <dd class="col-md-2 col-xs-9 item">DFM1825798181</dd>
                            <dt class="col-xs-3 mtitle">優惠內容</dt>
                            <dd class="col-md-3 col-xs-9 item">滿額$1500元，可享95%優惠</dd>
                            <dt class="col-xs-3 mtitle">使用範圍</dt>
                            <dd class="col-md-2 col-xs-9 item">橘色活力</dd>
                        </dl>
                        
                        
                        <div style="text-align:right">已使用購物金：283999</div>
                        
                        <dl class="row cart">
                            <dt class="col-md-2 title">使用期限</dt>
                            <dt class="col-md-3 title">活動說明</dt>
                            <dt class="col-md-2 title">優惠代碼</dt>
                            <dt class="col-md-3 title">優惠內容</dt>
                            <dt class="col-md-2 title">使用範圍</dt>
                        </dl>
                        <dl class="row cart">
                            <dt class="col-xs-3 mtitle">使用期限</dt>
                            <dd class="col-md-2 col-xs-9 item">2015/09/15</dd>
                            <dt class="col-xs-3 mtitle">活動說明</dt>
                            <dd class="col-md-3 col-xs-9 item">全館大折扣</dd>
                            <dt class="col-xs-3 mtitle">優惠代碼</dt>
                            <dd class="col-md-2 col-xs-9 item">DFM1825798181</dd>
                            <dt class="col-xs-3 mtitle">優惠內容</dt>
                            <dd class="col-md-3 col-xs-9 item">滿額$1500元，可享95%優惠</dd>
                            <dt class="col-xs-3 mtitle">使用範圍</dt>
                            <dd class="col-md-2 col-xs-9 item">橘色活力</dd>
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