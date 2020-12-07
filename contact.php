<?php include("header.php") ?>
<!-- LIGHT SECTION -->
<section class="lightSection clearfix pageHeader">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <div class="page-title">
                    <h2>聯絡我們</h2>
                </div>
            </div>
            <div class="col-xs-6">
                <ol class="breadcrumb pull-right">
                    <li>
                        <a href=".">首頁</a>
                    </li>
                    <li class="active">聯絡我們</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- MAIN CONTENT SECTION -->
<section class="mainContent clearfix aboutUsInfo">
    <div class="row container">
        <?php include("nav-about.php") ?>
        <div class="col-md-9">
            <div id="contact-form-1">
                <form id="contactForm" data-toggle="validator" novalidate="true">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" placeholder="姓名" required="">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="電子郵件" required="">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" placeholder="手機">
                            </div>
                            <div class="form-group">
                                <select name="" id="" class="form-control">
                                    <option value="">一般問題</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea id="message" class="form-control" rows="5" placeholder="聯絡內容" required=""></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <button type="submit" id="form-submit" class="btn btn-md btn-primary-filled btn-form-submit">確認送出</button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include("footer.php") ?>
</body>
</html>