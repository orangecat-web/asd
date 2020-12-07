<?php include("header.php") ?>      
<!-- LIGHT SECTION -->
<section class="lightSection clearfix pageHeader">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <div class="page-title">
                    <h2>購物車</h2>
                </div>
            </div>
            <div class="col-xs-6">
                <ol class="breadcrumb pull-right">
                    <li>
                        <a href=".">首頁</a>
                    </li>
                    <li class="active">購物清單</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- MAIN CONTENT SECTION -->
<section class="mainContent clearfix stepsWrapper">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="innerWrapper clearfix stepsPage">
                    <div class="row progress-wizard" style="border-bottom:0;">

                        <div class="col-xs-3 progress-wizard-step complete">
                            <div class="text-center progress-wizard-stepnum">收件人資料</div>
                            <div class="progress"><div class="progress-bar"></div></div>
                            <a href="checkout-step-1.html" class="progress-wizard-dot"></a>
                        </div>

                        <div class="col-xs-3 progress-wizard-step disabled">
                            <div class="text-center progress-wizard-stepnum">運送方式</div>
                            <div class="progress"><div class="progress-bar"></div></div>
                            <a href="checkout-step-2.html" class="progress-wizard-dot"></a>
                        </div>

                        <div class="col-xs-3 progress-wizard-step disabled">
                            <div class="text-center progress-wizard-stepnum">付款方式</div>
                            <div class="progress"><div class="progress-bar"></div></div>
                            <a href="checkout-step-3.html" class="progress-wizard-dot"></a>
                        </div>

                        <div class="col-xs-3 progress-wizard-step disabled">
                            <div class="text-center progress-wizard-stepnum">購物完成</div>
                            <div class="progress"><div class="progress-bar"></div></div>
                            <a href="checkout-step-4.html" class="progress-wizard-dot"></a>
                        </div>
                    </div>

                    <form action="" class="row" method="POST" role="form">
                        <div class="col-xs-12">
                            <div class="page-header">
                                <h4>收件人資料</h4>
                            </div>
                        </div>
                        <div class="form-group col-sm-6 col-xs-12">
                            <label for="">First Name</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="form-group col-sm-6 col-xs-12">
                            <label for="">Last Name</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="form-group col-sm-6 col-xs-12">
                            <label for="">Email</label>
                            <input type="email" class="form-control" id="">
                        </div>
                        <div class="form-group col-sm-6 col-xs-12">
                            <label for="">Company</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="form-group col-sm-6 col-xs-12">
                            <label for="">Address</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="form-group col-sm-6 col-xs-12">
                            <label for="">Phone</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="form-group col-sm-6 col-xs-12">
                            <label for="">City</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="form-group col-sm-6 col-xs-12">
                            <label for="">Zip Code</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="form-group col-sm-6 col-xs-12">
                            <label for="">Country</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="form-group col-sm-6 col-xs-12">
                            <label for="">Fax</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="form-group col-sm-6 col-xs-12">
                            <label for="">First Name</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <div class="col-xs-12">
                            <div class="page-header">
                                <h4>Shipping information</h4>
                            </div>
                        </div>
                        <div class="col-xs-12 checkboxArea">
                            <input id="checkbox1" type="checkbox" name="checkbox" value="1" checked="checked">
                            <label for="checkbox1"><span></span>Same as billing Information </label>
                        </div>
                        <div class="col-xs-12">
                            <div class="well well-lg clearfix">
                                <ul class="pager">
                                    <li class="previous"><a href="#" class="hideContent">back</a></li>
                                    <li class="next"><a href="checkout-step-2.html">Continue</a></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include("footer.php") ?>
</body>
</html>