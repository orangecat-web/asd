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
                    <li class="active">會員資料</li>
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
                <div class="innerWrapper profile">
                    <div class="orderBox">
                        <h4>會員資料</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-sm-3 col-xs-12">
                            <div class="thumbnail">
                                <img src="img/products/profile/profile-image.jpg" alt="profile-image">
                                <div class="caption">
                                    <a href="#" class="btn btn-primary btn-block" role="button">更換大頭照</a>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 col-sm-9 col-xs-12">
                            <h1>基本資訊</h1>
                            <form action="account-edit.php" class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-md-offset-10 col-md-2 col-sm-offset-9 col-sm-3">
                                        <button type="submit" class="btn btn-primary btn-block">編輯</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-2 col-sm-3 control-label">帳號</label>
                                    <div class="col-md-10 col-sm-9 aprofile">
                                        yaks192012@yahoo.com.tw
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-2 col-sm-3 control-label">姓名</label>
                                    <div class="col-md-10 col-sm-9 aprofile">
                                        王小明 先生
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-2 col-sm-3 control-label">出生日期</label>
                                    <div class="col-md-10 col-sm-9 aprofile">
                                        1990 年 03 月 22 日
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-2 col-sm-3 control-label">行動電話</label>
                                    <div class="col-md-10 col-sm-9 aprofile">
                                        0911111111
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-2 col-sm-3 control-label">Email</label>
                                    <div class="col-md-10 col-sm-9 aprofile" style="padding-top:.2rem">
                                        yaks192012@yahoo.com.tw  <button type="button" class="btn btn-primary">尚未認證</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-2 col-sm-3 control-label">電子報</label>
                                    <div class="col-md-10 col-sm-9 aprofile">
                                        已訂閱
                                    </div>
                                </div>
                            </form>
                            <h1>聯絡資訊</h1>
                            <form action="account-edit.php" class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-md-offset-10 col-md-2 col-sm-offset-9 col-sm-3">
                                        <button type="submit" class="btn btn-primary btn-block">編輯</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-2 col-sm-3 control-label">市話</label>
                                    <div class="col-md-10 col-sm-9 aprofile">
                                        02232823333
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-2 col-sm-3 control-label">聯絡地址</label>
                                    <div class="col-md-10 col-sm-9 aprofile">
                                        258 台北市 中正區 竹林路一段999號19樓
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-2 col-sm-3 control-label">送貨地址</label>
                                    <div class="col-md-10 col-sm-9 aprofile">
                                        258 台北市 中正區 竹林路一段999號19樓
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-2 col-sm-3 control-label">可收貨時間</label>
                                    <div class="col-md-10 col-sm-9 aprofile">
                                        全日皆可
                                    </div>
                                </div>
                            </form>
                            <h1>其他資訊</h1>
                            <form action="account-edit.php" class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-md-offset-10 col-md-2 col-sm-offset-9 col-sm-3">
                                        <button type="submit" class="btn btn-primary btn-block">編輯</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-2 col-sm-3 control-label">學歷</label>
                                    <div class="col-md-10 col-sm-9 aprofile">
                                        大專
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-2 col-sm-3 control-label">婚姻狀況</label>
                                    <div class="col-md-10 col-sm-9 aprofile">
                                        258 台北市 中正區 竹林路一段999號19樓
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-2 col-sm-3 control-label">子女數目</label>
                                    <div class="col-md-10 col-sm-9 aprofile">
                                        3個
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-2 col-sm-3 control-label">子女生日</label>
                                    <div class="col-md-10 col-sm-9 aprofile">
                                        1990 年 03 月 22 日<br>
                                        1990 年 03 月 22 日<br>
                                        1990 年 03 月 22 日
                                    </div>
                                </div>
                            </form>
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