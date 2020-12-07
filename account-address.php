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
                    <li class="active">收件人資料管理</li>
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
                        <h4>收件人資料管理</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>公司</th>
                                        <th>收件人</th>
                                        <th>地址</th>
                                        <th class="col-md-2 col-sm-3">電話</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Nokia</td>
                                        <td>Adam Smith</td>
                                        <td>9/4 C Babor Road, Mohammad Pur, Dhaka</td>
                                        <td>+884 5452 6452</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                                <button type="button" class="btn btn-default"><i class="fa fa-times" aria-hidden="true"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Samsung</td>
                                        <td>Adam Smith</td>
                                        <td>9/4 C Babor Road, Mohammad Pur, Dhaka</td>
                                        <td>+884 5452 6452</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                                <button type="button" class="btn btn-default"><i class="fa fa-times" aria-hidden="true"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Motorola</td>
                                        <td>Adam Smith</td>
                                        <td>9/4 C Babor Road, Mohammad Pur, Dhaka</td>
                                        <td>+884 5452 6452</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                                <button type="button" class="btn btn-default"><i class="fa fa-times" aria-hidden="true"></i></button>
                                            </div>
                                        </td>
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