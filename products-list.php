<?php include("header.php") ?>
<!-- LIGHT SECTION -->
<section class="lightSection clearfix pageHeader">
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
           <div class="col-xs-12 mode">
                <div class="btn-group pull-right" role="group">
                    <button type="button" class="btn btn-default" onclick="window.location.href='products-grid.php'"><i class="fa fa-th" aria-hidden="true"></i></button>
                    <button type="button" class="btn btn-default active" onclick="window.location.href='products-list.php'"><i class="fa fa-th-list" aria-hidden="true"></i></button>
                </div>
            </div>
            <?php include("nav-prod.php") ?>
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="row productListSingle">
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
                    <div class="col-xs-12">
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="img/products/products-01.jpg" alt="Image">
                                <span class="maskingImage"><a data-toggle="modal" href="product-detail.php" class="btn viewBtn">Quick View</a></span>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="product-detail.php">商品標題</a></h4>
                                <p>商品簡介　Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <h3>NT$ 249</h3>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target=".login-modal"><i class="fa fa-heart" aria-hidden="true"></i></button>
                                    <button type="button" class="btn btn-default" onclick="location.href='cart-page.html';"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="img/products/products-02.jpg" alt="Image">
                                <span class="maskingImage"><a data-toggle="modal" href="product-detail.php" class="btn viewBtn">Quick View</a></span>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="product-detail.php">商品標題</a></h4>
                                <p>商品簡介　Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <h3>NT$ 249</h3>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target=".login-modal"><i class="fa fa-heart" aria-hidden="true"></i></button>
                                    <button type="button" class="btn btn-default" onclick="location.href='cart-page.html';"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="img/products/products-03.jpg" alt="Image">
                                <span class="maskingImage"><a data-toggle="modal" href="product-detail.php" class="btn viewBtn">Quick View</a></span>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="product-detail.php">商品標題</a></h4>
                                <p>商品簡介　Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <h3>NT$ 249</h3>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target=".login-modal"><i class="fa fa-heart" aria-hidden="true"></i></button>
                                    <button type="button" class="btn btn-default" onclick="location.href='cart-page.html';"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="img/products/products-04.jpg" alt="Image">
                                <span class="maskingImage"><a data-toggle="modal" href="product-detail.php" class="btn viewBtn">Quick View</a></span>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="product-detail.php">商品標題</a></h4>
                                <p>商品簡介　Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <h3>NT$ 249</h3>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target=".login-modal"><i class="fa fa-heart" aria-hidden="true"></i></button>
                                    <button type="button" class="btn btn-default" onclick="location.href='cart-page.html';"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="img/products/products-05.jpg" alt="Image">
                                <span class="maskingImage"><a data-toggle="modal" href="product-detail.php" class="btn viewBtn">Quick View</a></span>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="product-detail.php">商品標題</a></h4>
                                <p>商品簡介　Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <h3>NT$ 249</h3>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target=".login-modal"><i class="fa fa-heart" aria-hidden="true"></i></button>
                                    <button type="button" class="btn btn-default" onclick="location.href='cart-page.html';"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="img/products/products-06.jpg" alt="Image">
                                <span class="maskingImage"><a data-toggle="modal" href="product-detail.php" class="btn viewBtn">Quick View</a></span>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="product-detail.php">商品標題</a></h4>
                                <p>商品簡介　Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <h3>NT$ 249</h3>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target=".login-modal"><i class="fa fa-heart" aria-hidden="true"></i></button>
                                    <button type="button" class="btn btn-default" onclick="location.href='cart-page.html';"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="img/products/products-07.jpg" alt="Image">
                                <span class="maskingImage"><a data-toggle="modal" href="product-detail.php" class="btn viewBtn">Quick View</a></span>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="product-detail.php">商品標題</a></h4>
                                <p>商品簡介　Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <h3>NT$ 249</h3>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target=".login-modal"><i class="fa fa-heart" aria-hidden="true"></i></button>
                                    <button type="button" class="btn btn-default" onclick="location.href='cart-page.html';"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="img/products/products-08.jpg" alt="Image">
                                <span class="maskingImage"><a data-toggle="modal" href="product-detail.php" class="btn viewBtn">Quick View</a></span>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="product-detail.php">商品標題</a></h4>
                                <p>商品簡介　Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <h3>NT$ 249</h3>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target=".login-modal"><i class="fa fa-heart" aria-hidden="true"></i></button>
                                    <button type="button" class="btn btn-default" onclick="location.href='cart-page.html';"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                                </div>
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