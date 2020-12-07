<?php include("header.php") ?>
<!-- LIGHT SECTION -->
<section class="lightSection clearfix pageHeader prod_item01"><!--prod_item01 食尚精品,prod_item02 質感生活,prod_item03 美妝親子,prod_item04 健康活力-->
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <div class="page-title">
                    <h2>食尚精品</h2>
                </div>
            </div>
            <div class="col-xs-6">
                <ol class="breadcrumb pull-right">
                    <li>
                        <a href=".">回首頁</a>
                    </li>
                    <li class="active">館首頁</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- MAIN CONTENT SECTION -->
<section class="mainContent clearfix productsContent">
    <div class="container">
        <div class="row">
            <!--<div class="col-xs-12 mode">
                <div class="btn-group pull-right" role="group">
                    <button type="button" class="btn btn-default active" onclick="window.location.href='products-grid.php'"><i class="fa fa-th" aria-hidden="true"></i></button>
                    <button type="button" class="btn btn-default" onclick="window.location.href='products-list.php'"><i class="fa fa-th-list" aria-hidden="true"></i></button>
                </div>
            </div>-->
            <?php include("nav-prod.php") ?>
            <div class="col-md-9 col-sm-8 col-xs-12">
                <!--<div class="row filterArea">
<div class="col-xs-6">
<select name="guiest_id1" id="guiest_id1" class="select-drop">
<option value="0">Default sorting</option>
<option value="1">Sort by popularity</option>
<option value="2">Sort by rating</option>
<option value="3">Sort by newness</option>
<option value="3">Sort by price</option>            
</select>
</div>
</div>-->
                <div class="row">
                    <div class="bannercontainer bannerV1" style="margin-bottom: 1.5rem">
                        <div class="fullscreenbanner-container">
                            <div class="fullscreenbanner">
                                <ul>
                                    <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
                                        <img src="http://placehold.it/877x375" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                                    </li>
                                    <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2">
                                        <img src="img/home/banner-slider/slider-bg.jpg" alt="slidebg" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                                        <div class="slider-caption slider-captionV1 container captionCenter">
                                            <div class="tp-caption rs-caption-1 sft start text-center"
                                                 data-x="center"
                                                 data-y="228"
                                                 data-speed="800"
                                                 data-easing="Back.easeInOut"
                                                 data-endspeed="300">
                                                <img src="img/home/banner-slider/shoe2.png" alt="slider-image">
                                            </div>
                                        </div>
                                    </li>
                                    <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700"  data-title="Slide 3">
                                        <img src="img/home/banner-slider/slider-bg.jpg" alt="slidebg" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                                        <div class="slider-caption slider-captionV1 container">
                                            <div class="tp-caption rs-caption-1 sft start"
                                                 data-hoffset="0"
                                                 data-y="85"
                                                 data-speed="800"
                                                 data-easing="Back.easeInOut"
                                                 data-endspeed="300">
                                                <img src="img/home/banner-slider/shoe3.png" alt="slider-image">
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h3>中分類推薦</h3>
                    <div class="col-sm-4 col-xs-12">
                        <div class="productBox">
                            <div onclick="location.href='product-detail.php'" class="productImage clearfix">
                                <img src="img/products/products-01.jpg" alt="products-img">
                                <!--proditem01,02,03,04 各館產品代表色-->
                                <div class="productMasking proditem01">
                                    <ul class="list-inline btn-group" role="group">
                                        <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a class="btn btn-default" href="product-detail.php" ><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="productCaption clearfix">
                                <a href="product-detail.php">
                                    <h5>特寛仿藤古典四層收納櫃 附輪</h5>
                                </a>
                                <h3>NT$199</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="productBox">
                            <div onclick="location.href='product-detail.php'" class="productImage clearfix">
                                <img src="img/products/products-02.jpg" alt="products-img">
                                <div class="productMasking proditem01">
                                    <ul class="list-inline btn-group" role="group">
                                        <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a class="btn btn-default" href="product-detail.php" ><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="productCaption clearfix">
                                <a href="product-detail.php">
                                    <h5>特寛仿藤古典四層收納櫃 附輪</h5>
                                </a>
                                <h3>NT$249</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="productBox">
                            <div onclick="location.href='product-detail.php'" class="productImage clearfix">
                                <img src="img/products/products-03.jpg" alt="products-img">
                                <div class="productMasking proditem01">
                                    <ul class="list-inline btn-group" role="group">
                                        <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a class="btn btn-default" href="product-detail.php" ><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="productCaption clearfix">
                                <a href="product-detail.php">
                                    <h5>商品標題</h5>
                                </a>
                                <h3>NT$179</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="productBox">
                            <div onclick="location.href='product-detail.php'" class="productImage clearfix">
                                <img src="img/products/products-04.jpg" alt="products-img">
                                <div class="productMasking proditem01">
                                    <ul class="list-inline btn-group" role="group">
                                        <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a class="btn btn-default" href="product-detail.php" ><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="productCaption clearfix">
                                <a href="product-detail.php">
                                    <h5>商品標題</h5>
                                </a>
                                <h3>NT$149</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="productBox">
                            <div onclick="location.href='product-detail.php'" class="productImage clearfix">
                                <img src="img/products/products-05.jpg" alt="products-img">
                                <div class="productMasking proditem01">
                                    <ul class="list-inline btn-group" role="group">
                                        <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a class="btn btn-default" href="product-detail.php" ><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="productCaption clearfix">
                                <a href="product-detail.php">
                                    <h5>商品標題</h5>
                                </a>
                                <h3>NT$199</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="productBox">
                            <div onclick="location.href='product-detail.php'" class="productImage clearfix">
                                <img src="img/products/products-06.jpg" alt="products-img">
                                <div class="productMasking proditem01">
                                    <ul class="list-inline btn-group" role="group">
                                        <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a class="btn btn-default" href="product-detail.php" ><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="productCaption clearfix">
                                <a href="product-detail.php">
                                    <h5>特寛仿藤古典四層收納櫃 附輪</h5>
                                </a>
                                <h3>NT$249</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="productBox">
                            <div onclick="location.href='product-detail.php'" class="productImage clearfix">
                                <img src="img/products/products-07.jpg" alt="products-img">
                                <div class="productMasking proditem01">
                                    <ul class="list-inline btn-group" role="group">
                                        <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a class="btn btn-default" href="product-detail.php" ><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="productCaption clearfix">
                                <a href="product-detail.php">
                                    <h5>商品標題</h5>
                                </a>
                                <h3>NT$179</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="productBox">
                            <div onclick="location.href='product-detail.php'" class="productImage clearfix">
                                <img src="img/products/products-08.jpg" alt="products-img">
                                <div class="productMasking proditem01">
                                    <ul class="list-inline btn-group" role="group">
                                        <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a class="btn btn-default" href="product-detail.php" ><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="productCaption clearfix">
                                <a href="product-detail.php">
                                    <h5>商品標題</h5>
                                </a>
                                <h3>NT$149</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="productBox">
                            <div onclick="location.href='product-detail.php'" class="productImage clearfix">
                                <img src="img/products/products-09.jpg" alt="products-img">
                                <div class="productMasking proditem01">
                                    <ul class="list-inline btn-group" role="group">
                                        <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a class="btn btn-default" href="product-detail.php" ><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="productCaption clearfix">
                                <a href="product-detail.php">
                                    <h5>商品標題</h5>
                                </a>
                                <h3>NT$199</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="productBox">
                            <div onclick="location.href='product-detail.php'" class="productImage clearfix">
                                <img src="img/products/products-10.jpg" alt="products-img">
                                <div class="productMasking proditem01">
                                    <ul class="list-inline btn-group" role="group">
                                        <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a class="btn btn-default" href="product-detail.php" ><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="productCaption clearfix">
                                <a href="product-detail.php">
                                    <h5>特寛仿藤古典四層收納櫃 附輪</h5>
                                </a>
                                <h3>NT$249</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="productBox">
                            <div onclick="location.href='product-detail.php'" class="productImage clearfix">
                                <img src="img/products/products-11.jpg" alt="products-img">
                                <div class="productMasking proditem01">
                                    <ul class="list-inline btn-group" role="group">
                                        <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a class="btn btn-default" href="product-detail.php" ><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="productCaption clearfix">
                                <a href="product-detail.php">
                                    <h5>商品標題</h5>
                                </a>
                                <h3>NT$179</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="productBox">
                            <div onclick="location.href='product-detail.php'" class="productImage clearfix">
                                <img src="img/products/products-12.jpg" alt="products-img">
                                <div class="productMasking proditem01">
                                    <ul class="list-inline btn-group" role="group">
                                        <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a class="btn btn-default" href="product-detail.php" ><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="productCaption clearfix">
                                <a href="product-detail.php">
                                    <h5>商品標題</h5>
                                </a>
                                <h3>NT$149</h3>
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