<?php include("header.php") ?>      
<!-- LIGHT SECTION -->
<section class="lightSection clearfix pageHeader">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <div class="page-title">
                    <h2>sign up</h2>
                </div>
            </div>
            <div class="col-xs-6">
                <ol class="breadcrumb pull-right">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">sign up</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- MAIN CONTENT SECTION -->
<section class="mainContent clearfix signUp">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>加入會員</h3></div>
                    <div class="panel-body">
                        <form action="" method="POST" role="form">
                            <div class="form-group">
                                <label for="">請輸入手機號碼</label>
                                <input type="email" placeholder="請輸入手機號碼，09XXXXXXXX" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="">請輸入 E-Mail</label>
                                <input type="password" placeholder="請輸入 E-Mail" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="">請輸入密碼</label>
                                <input type="password" placeholder="請輸入密碼" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="">請再次輸入密碼</label>
                                <input type="password" placeholder="請再次輸入密碼" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <p><input type="checkbox"> 我已閱讀並同意 <a href="#">會員條款</a></p>
                                <p><span class="c_red"><i class="fa fa-info-circle" aria-hidden="true"></i> 您之後可用手機號碼或Email登入。當您的帳號有任何問題時，我們將會透過E-mail聯繫您。</span></p>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">確認送出</button>
                            <button type="button" onclick="location.href='signin.php'" class="btn btn-link btn-block"><span>已經是會員?</span> 登入</button>
                            <div class="logIn">
                                <button type="submit" class="btn btn-default pull-left"><i class="fa fa-facebook" aria-hidden="true"></i><span>使用facebook註冊</span></button>
                                <button type="submit" class="btn btn-default pull-right"><i class="fa fa-google-plus" aria-hidden="true"></i><span>使用google plus註冊</span></button>
                            </div>
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