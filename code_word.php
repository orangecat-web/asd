<?php include("header.php") ?>      
<!-- LIGHT SECTION -->
<section class="lightSection clearfix pageHeader">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <div class="page-title">
                    <h2>忘記密碼</h2>
                </div>
            </div>
            <div class="col-xs-6">
                <ol class="breadcrumb pull-right">
                    <li>
                        <a href=".">回首頁</a>
                    </li>
                     <li>
                        <a href="lost-pw.php">忘記密碼</a>
                    </li>
                    <li class="active">請輸入認證碼</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- MAIN CONTENT SECTION -->
<section class="mainContent clearfix lostPassword">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>請輸入認證碼</h3></div>
                    <div class="panel-body">
                        <form action="account-dashboard.php" method="POST" role="form">
                            <p class="help-block">步驟2：請輸入您的認證碼來登入帳號</p>
                            <div class="form-group">
                                <label for="">請輸入您的認證碼</label>
                                <input type="email" placeholder="請輸入 E-mail 帳號" class="form-control" id="">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">登入</button>
                            <button type="button" class="tn btn-default btn-block">重發驗證碼</button>
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