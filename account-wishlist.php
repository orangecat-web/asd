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
            <div class="col-xs-12">
                <div class="innerWrapper">
                    <div class="orderBox myAddress wishList">
                        <h4>我的願望清單</h4>

                        <dl class="row cart">
                            <dt class="col-md-2 title">商品圖片</dt>
                            <dt class="col-md-6 title">商品名稱</dt>
                            <dt class="col-md-2 title">價格</dt>
                            <dt class="col-md-2 title">&nbsp;</dt>
                        </dl>
                        <dl class="row cart">
                            <dt class="col-xs-3 mtitle">商品圖片</dt>
                            <dd class="col-md-2 col-xs-9 item"><span class="cartImage"><img src="img/products/cart-image.jpg" alt="image"></span></dd>
                            <dt class="col-xs-3 mtitle">商品名稱</dt>
                            <dd class="col-md-6 col-xs-9 item wishlist">PEKOE精選｜台灣本產荔枝酥禮盒</dd>
                            <dt class="col-xs-3 mtitle">點數內容</dt>
                            <dd class="col-md-2 col-xs-9 item">NT$ 490</dd>
                            <dt class="col-xs-3 mtitle">&nbsp;</dt>
                            <dd class="col-md-2 col-xs-9 item">
                                <a class="btn btn-default" href="#">詳情</a>
                                <a class="btn btn-default" rel="nofollow" data-method="delete" href="#">刪除</a>
                            </dd>
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