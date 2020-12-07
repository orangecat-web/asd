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
                    <li class="active">修改密碼</li>
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
                    <div class="row">
                        <div class="col-xs-12">
                            <h1>修改密碼</h1>
                            <form action="account-profile.php" class="form-horizontal">
                                <div class="form-group">
                                    <label for="" class="col-md-2 col-sm-3 control-label">修改密碼</label>
                                    <div class="col-md-10 col-sm-9">
                                        <input type="password" class="form-control" id="" placeholder="請輸入您現在的密碼">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-2 col-sm-3 control-label">確認密碼</label>
                                    <div class="col-md-10 col-sm-9">
                                        <input type="password" class="form-control" id="" placeholder="請再次輸入您的密碼">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-offset-10 col-md-2 col-sm-offset-9 col-sm-3">
                                        <button type="submit" class="btn btn-primary btn-block">儲存</button>
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