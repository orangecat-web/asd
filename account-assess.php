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
                    <li class="active">商品評價</li>
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
                        <h4>商品評價</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>序號</th>
                                        <th>評價日期</th>
                                        <th>商品名稱</th>
                                        <th>評價內容</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>2016/10/11</td>
                                        <td>商品名稱</td>
                                        <td>
                                            <div class="clearfix margin_b_10">                         
                                                <i class="fa fa-star star_color font-20 padding_t_5" aria-hidden="true"></i>
                                                <i class="fa fa-star star_color font-20 padding_t_5" aria-hidden="true"></i>
                                                <i class="fa fa-star star_color font-20 padding_t_5" aria-hidden="true"></i>
                                                <i class="fa fa-star star_white font-20 padding_t_5" aria-hidden="true"></i>
                                                <i class="fa fa-star star_white font-20 padding_t_5" aria-hidden="true"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td colspan="3" style="text-align:left">
                                            其他建議：<br>
                                            外型好看，又耐用！非常棒！我家寶貝也很喜歡，大推！！<br>
                                            客服回覆：<br>
                                            感謝您的支持，我們會更加努力增加商品品質，讓每位媽媽都可以放心地讓寶貝們穿上安心又漂亮的衣服喔～:)
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