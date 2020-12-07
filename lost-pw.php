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
                    <li class="active">忘記密碼</li>
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
                    <div class="panel-heading"><h3>忘記密碼</h3></div>
                    <div class="panel-body">
                        <form action="code_word.php" method="POST" role="form">
                            <p class="help-block">步驟1：請輸入您的手機號碼，獲取認證碼</p>
                            <div class="form-group">
                                <label for="">請輸入您的手機號碼</label>
                                <input type="email" placeholder="請輸入 E-mail 帳號" class="form-control" id="">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">確認送出</button>
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