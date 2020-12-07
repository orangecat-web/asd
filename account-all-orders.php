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
                    <li class="active">訂單紀錄</li>
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
                    <div class="orderBox">
                        <h4>訂單紀錄 <span class="notice">(僅保留 180 天內的訂單資料提供查詢)</span></h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>訂購日期</th>
                                        <th>訂單編號</th>
                                        <th>處理進度</th>
                                        <th>應付金額</th>
                                        <th>付款方式</th>
                                        <th>客服問答</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2016/09/20</td>
                                        <td>USF18237981923</td>
                                        <td><span class="label label-primary">處理中</span></td>
                                        <td>$99.00</td>
                                        <td>ATM(尚未繳費)</td>
                                        <td><a href="#" class="btn btn-default">查看訂單</a></td>
                                    </tr>
                                    <tr>
                                        <td>2016/09/20</td>
                                        <td>USF18237981923</td>
                                        <td><span class="label label-success">已取貨</span></td>
                                        <td>$99.00</td>
                                        <td>ATM(尚未繳費)</td>
                                        <td><a href="#" class="btn btn-default">查看訂單</a></td>
                                    </tr>
                                    <tr>
                                        <td>2016/09/20</td>
                                        <td>USF18237981923</td>
                                        <td><span class="label label-danger">取消訂單</span></td>
                                        <td>$99.00</td>
                                        <td>ATM(尚未繳費)</td>
                                        <td><a href="#" class="btn btn-default">查看訂單</a></td>
                                    </tr>
                                    <tr>
                                        <td>2016/09/20</td>
                                        <td>USF18237981923</td>
                                        <td><span class="label label-info">等待處理</span></td>
                                        <td>$99.00</td>
                                        <td>ATM(尚未繳費)</td>
                                        <td><a href="#" class="btn btn-default">查看訂單</a></td>
                                    </tr>
                                    <tr>
                                        <td>2016/09/20</td>
                                        <td>USF18237981923</td>
                                        <td><span class="label label-primary">處理中</span></td>
                                        <td>$99.00</td>
                                        <td>ATM(尚未繳費)</td>
                                        <td><a href="#" class="btn btn-default">查看訂單</a></td>
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