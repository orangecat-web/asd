<?php include("header.php") ?>
<link rel="stylesheet" href="css/cart.css">    
<!-- LIGHT SECTION -->
<section class="lightSection clearfix pageHeaderImage">
    <div class="container">
        <div class="tableBlock">
            <div class="row tableInner">
                <div class="col-xs-12">
                    <div class="page-title">
                        <h2>我的購物車</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.html">首頁</a>
                            </li>
                            <li class="active">我的購物車</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MAIN CONTENT SECTION -->
<section class="mainContent clearfix cartListWrapper">
    <div class="container">
       
        <dl class="row cart">
            <dt class="col-xs-2 title">&nbsp;</dt>
            <dt class="col-xs-4 title">商品</dt>
            <dt class="col-xs-2 title">單價</dt>
            <dt class="col-xs-2 title">數量</dt>
            <dt class="col-xs-2 title">小計</dt>
        </dl>

        <dl class="row cart outline">  
            <dd class="col-sm-2 col-xs-12 item item_img">
                <span class="cartImage"><img src="img/products/cart-image.jpg" alt="image"></span>
            </dd>
            <dt class="col-xs-3 mtitle">商品</dt>
            <dd class="col-sm-4 col-xs-9 item">ITALIAN WINTER HAT</dd>
            <dt class="col-xs-3 mtitle">單價</dt>
            <dd class="col-sm-2 col-xs-9 item">NT$ 99.00</dd>
            <dt class="col-xs-3 mtitle">數量</dt>
            <dd class="row col-sm-2 col-xs-9 item fcart">
                <button class="btn btn-default col-xs-4"><i class="fa fa-minus" aria-hidden="true"></i></button>
                <input class="col-xs-4" type="text">
                <button class="btn btn-default col-xs-4"><i class="fa fa-plus" aria-hidden="true"></i></button>
            </dd>
            <dt class="col-xs-3 mtitle">小計</dt>
            <dd class="col-sm-2 col-xs-9 item">NT$ 99.00</dd>
        </dl>

        <dl class="row cart outline">  
            <dd class="col-sm-2 col-xs-12 item item_img">
                <span class="cartImage"><img src="img/products/cart-image.jpg" alt="image"></span>
            </dd>
            <dt class="col-xs-3 mtitle">商品</dt>
            <dd class="col-sm-4 col-xs-9 item">ITALIAN WINTER HAT</dd>
            <dt class="col-xs-3 mtitle">單價</dt>
            <dd class="col-sm-2 col-xs-9 item">NT$ 99.00</dd>
            <dt class="col-xs-3 mtitle">數量</dt>
            <dd class="row col-sm-2 col-xs-9 item fcart">
                <button class="btn btn-default col-xs-4"><i class="fa fa-minus" aria-hidden="true"></i></button>
                <input class="col-xs-4" type="text">
                <button class="btn btn-default col-xs-4"><i class="fa fa-plus" aria-hidden="true"></i></button>
            </dd>
            <dt class="col-xs-3 mtitle">小計</dt>
            <dd class="col-sm-2 col-xs-9 item">NT$ 99.00</dd>
        </dl>

        <dl class="row cart outline">  
            <dd class="col-sm-2 col-xs-12 item item_img">
                <span class="cartImage"><img src="img/products/cart-image.jpg" alt="image"></span>
            </dd>
            <dt class="col-xs-3 mtitle">商品</dt>
            <dd class="col-sm-4 col-xs-9 item">ITALIAN WINTER HAT</dd>
            <dt class="col-xs-3 mtitle">單價</dt>
            <dd class="col-sm-2 col-xs-9 item">NT$ 99.00</dd>
            <dt class="col-xs-3 mtitle">數量</dt>
            <dd class="row col-sm-2 col-xs-9 item fcart">
                <button class="btn btn-default col-xs-4"><i class="fa fa-minus" aria-hidden="true"></i></button>
                <input class="col-xs-4" type="text">
                <button class="btn btn-default col-xs-4"><i class="fa fa-plus" aria-hidden="true"></i></button>
            </dd>
            <dt class="col-xs-3 mtitle">小計</dt>
            <dd class="col-sm-2 col-xs-9 item">NT$ 99.00</dd>
        </dl>

        <dl class="row cart outline">  
            <dd class="col-sm-12 col-xs-12 total" style="padding:1rem">
                <dl>
                    <dd>小計 <span>NT$ 792.00</span></dd>
                    <dd>運費 <span>NT$ 792.00</span></dd>
                    <dd>總計 <span>NT$ 792.00</span></dd>
                </dl>
            </dd>
        </dl>
        <dl class="row cart outline">   
            <dd class="col-sm-12 total" style="padding:1rem">
                <div class="checkBtnArea">
                    <a href="checkout-step-1.php" class="btn btn-primary btn-block">結帳 <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                </div>
                <div class="clearfix"></div>
            </dd>
        </dl>

    </div>
</section>
<?php include("footer.php") ?> 
</body>
</html>