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
                    <li class="active">我的願望清單</li>
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
                    <div class="orderBox myAddress wishList">
                        <h4>下次購買清單</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>商品名稱</th>
                                        <th>價格</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="col-md-2 col-sm-3">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <span class="cartImage"><img src="img/products/cart-image.jpg" alt="image"></span>
                                        </td>
                                        <td>Italian Winter Hat</td>
                                        <td>NT$ 99.00</td>
                                        <td>
                                            <a class="btn btn-default" href="#">加入購物車</a>
                                            <a class="btn btn-default" href="#">刪除</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-2 col-sm-3">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <span class="cartImage"><img src="img/products/cart-image.jpg" alt="image"></span>
                                        </td>
                                        <td>Italian Winter Hat</td>
                                        <td>NT$ 99.00</td>
                                        <td>
                                            <a class="btn btn-default" href="#">加入購物車</a>
                                            <a class="btn btn-default" href="#">刪除</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-2 col-sm-3">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <span class="cartImage"><img src="img/products/cart-image.jpg" alt="image"></span>
                                        </td>
                                        <td>Italian Winter Hat</td>
                                        <td>NT$ 99.00</td>
                                        <td>
                                            <a class="btn btn-default" href="#">加入購物車</a>
                                            <a class="btn btn-default" href="#">刪除</a>
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
<?php include("header.php") ?>
</body>
</html>