<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- SITE TITTLE -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--正式上線前請改為 index, follow-->
        <meta name="robots" content="noindex, nofollow">
        <!--SEO 搜尋用關鍵字及網站內容簡介-->
        <meta name="keywords" content="">
        <meta name="description" content="">
        <link rel="shortcut icon" href="favicon.ico">
        <title>EZwo 易窩蜂</title>

        <!-- PLUGINS CSS STYLE -->
        <link href="plugins/jquery-ui/jquery-ui.css" rel="stylesheet">
        <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="plugins/selectbox/select_option1.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="plugins/rs-plugin/css/settings.css" media="screen">
        <link rel="stylesheet" type="text/css" href="plugins/owl-carousel/owl.carousel.css" media="screen">

        <!-- GOOGLE FONT -->
        <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>

        <!-- CUSTOM CSS -->
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="css/colors/default.css" id="option_color">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    </head>

    <body class="body-wrapper">
        <div class="main-wrapper">
            <!-- HEADER -->
            <div class="header clearfix">
                <!-- TOPBAR -->
                <div class="topBar">
                    <div class="container">
                        <div class="row">
                            <!--社群按鈕-->
                            <!--<div class="col-md-6 col-sm-5 hidden-xs">
<ul class="list-inline">
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
<li><a href="#"><i class="fa fa-vimeo"></i></a></li>
<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
</ul>
</div>-->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <ul class="list-inline pull-right top-right">
                                    <li class="account-login"><span><a data-toggle="modal" href='.login-modal'>會員登入</a><small>｜</small><a data-toggle="modal" href='#signup'>加入會員</a></span></li>
                                    <li class="searchBox">
                                        <a href="#"><i class="fa fa-search"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <span class="input-group">
                                                    <input type="text" class="form-control" placeholder="請輸入關鍵字" aria-describedby="basic-addon2">
                                                    <button type="submit" class="input-group-addon">搜尋</button>
                                                </span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown cart-dropdown">
                                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i>NT$0 (0)</a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>購物車</li>
                                            <li>
                                                <a href="single-product.html">
                                                    <div class="media">
                                                        <img class="media-left media-object" src="img/home/cart-items/cart-item-01.jpg" alt="cart-Image">
                                                        <div class="media-body">
                                                            <h5 class="media-heading">INCIDIDUNT UT <br><span>2 X NT$199</span></h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="single-product.html">
                                                    <div class="media">
                                                        <img class="media-left media-object" src="img/home/cart-items/cart-item-01.jpg" alt="cart-Image">
                                                        <div class="media-body">
                                                            <h5 class="media-heading">INCIDIDUNT UT <br><span>2 X NT$199</span></h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="btn-group" role="group" aria-label="...">
                                                    <button type="button" class="btn btn-default" onclick="location.href='cart.php';">我的購物車</button>
                                                    <button type="button" class="btn btn-default" onclick="location.href='checkout-step-1.php';">結帳去</button>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>    
                </div>

                <!-- NAVBAR -->
                <nav class="navbar navbar-main navbar-default" role="navigation">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="."><img src="images/layout/logo.svg" alt="logo"></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-ex1-collapse">            
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                    <a href="products0-1.php" aria-expanded="false">主題/活動館</a>
                                </li>
                                <li class="dropdown">
                                    <a href="products1-1.php" aria-expanded="false">食尚精品</a>
                                </li>
                                <li class="dropdown">
                                    <a href="products1-2.php" aria-expanded="false">質感生活</a>
                                </li>
                                <li class="dropdown">
                                    <a href="products1-3.php" aria-expanded="false">美妝親子</a>
                                </li>
                                <li class="dropdown">
                                    <a href="products1-4.php" aria-expanded="false">健康活力</a>
                                </li>
                                <!--<li class="dropdown">
<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">質感生活</a>
<ul class="dropdown-menu dropdown-menu-left">
<li><a href="products-grid.php">次選單</a></li>
</ul>
</li>-->
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div>
                </nav>
            </div>