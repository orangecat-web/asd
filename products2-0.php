<?php include("header.php") ?>
<!-- LIGHT SECTION -->
<section class="lightSection clearfix pageHeader prod_item01">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <div class="page-title">
                    <h2>主題/活動館</h2>
                </div>
            </div>
            <div class="col-xs-6">
                <ol class="breadcrumb pull-right">
                    <li>
                        <a href=".">回首頁</a>
                    </li>
                    <li>
                        <a href="products0-1.php">館首頁</a>
                    </li>
                    <li class="active">中分類</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- MAIN CONTENT SECTION -->
<section class="mainContent clearfix productsContent">
    <div class="container">
        <div class="row">
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
                    <h3>館長推薦</h3>
                    <div class="col-sm-4 col-xs-12">
                        <div class="productBox">
                            <div onclick="location.href='product-detail.php'" class="productImage clearfix">
                                <img src="img/products/products-01.jpg" alt="products-img">
                                <div class="productMasking proditem00">
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
                                <div class="productMasking proditem00">
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
                                <div class="productMasking proditem00">
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
                    <div class="col-sm-12">
                        <p>共計 <span>888</span> 個商品 頁數 1 / 80</p>
                        <div class="ranking">
                            <button>推薦指數 <i class="fa fa-arrow-down" aria-hidden="true"></i></button>
                            <button>價格 <i class="fa fa-arrow-up" aria-hidden="true"></i></button>
                        </div>
                        <nav aria-label="Page navigation" style="margin-bottom: 1.5rem;">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                                <div class="clearfix"></div>
                            </ul>
                            <div class="clearfix"></div>
                        </nav>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="productBox">
                            <div onclick="location.href='product-detail.php'" class="productImage clearfix">
                                <img src="img/products/products-04.jpg" alt="products-img">
                                <div class="productMasking proditem00">
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
                                <div class="productMasking proditem00">
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
                                <div class="productMasking proditem00">
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
                                <div class="productMasking proditem00">
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
                                <div class="productMasking proditem00">
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
                                <div class="productMasking proditem00">
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
                                <div class="productMasking proditem00">
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
                                <div class="productMasking proditem00">
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
                                <div class="productMasking proditem00">
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
                                <img src="img/products/products-10.jpg" alt="products-img">
                                <div class="productMasking proditem00">
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
                                <div class="productMasking proditem00">
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
                                <div class="productMasking proditem00">
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
                                <img src="img/products/products-10.jpg" alt="products-img">
                                <div class="productMasking proditem00">
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
                                <div class="productMasking proditem00">
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
                                <div class="productMasking proditem00">
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
                                <img src="img/products/products-10.jpg" alt="products-img">
                                <div class="productMasking proditem00">
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
                                <div class="productMasking proditem00">
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
                                <div class="productMasking proditem00">
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