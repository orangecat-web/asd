<?php include("header.php") ?>
<!-- LIGHT SECTION -->
<section class="lightSection clearfix pageHeader">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <div class="page-title">
                    <h2>會員登入</h2>
                </div>
            </div>
            <div class="col-xs-6">
                <ol class="breadcrumb pull-right">
                    <li>
                        <a href=".">回首頁</a>
                    </li>
                    <li class="active">會員登入</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- MAIN CONTENT SECTION -->
<section class="mainContent clearfix logIn">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>會員登入</h3></div>
                    <div class="panel-body">
                        <form action="account-dashboard.php" method="POST" role="form">
                            <div class="form-group">
                                <label for="">帳號</label>
                                <input type="email" placeholder="請輸入 E-mail 或手機號碼" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="">密碼</label>
                                <input type="password" placeholder="請輸入密碼" class="form-control" id="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> 自動登入會員
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">會員登入</button>
                            <button type="submit" class="btn btn-default pull-left"><i class="fa fa-facebook" aria-hidden="true"></i><span>facebook 登入</span></button>
                            <button type="submit" class="btn btn-default pull-right"><i class="fa fa-google-plus" aria-hidden="true"></i><span>google plus 登入</span></button>
                            <button type="button" onclick="location.href='lost-pw.php'" class="btn btn-link btn-block">忘記密碼 ?</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include("footer.php") ?>
</body>
</html>