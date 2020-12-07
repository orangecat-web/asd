<?php include("header.php") ?>      
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
                    <li class="active">退換貨申請</li>
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
            <?php include("nav-acc-order.php") ?>
            <div class="col-md-10">
                <div class="innerWrapper">
                    <div class="orderBox myAddress">
                        <h4>退換貨申請</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>申請退貨日期</th>
                                        <th>訂單編號</th>
                                        <th>處理進度</th>
                                        <th>應退金額</th>
                                        <th>退貨商品</th>
                                        <th>客服問答</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2015/08/25</td>
                                        <td>USF18237981922/DYAI182894182</td>
                                        <td>已退款</td>
                                        <td>$14,000</td>
                                        <td>部份商品</td>
                                        <td>客服問答</td>
                                    </tr>
                                </tbody>
                            </table>
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