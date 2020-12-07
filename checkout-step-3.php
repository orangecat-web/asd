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
                        <div class="col-xs-3 progress-wizard-step complete fullBar">
                            <div class="text-center progress-wizard-stepnum">購物清單</div>
                            <div class="progress"><div class="progress-bar"></div></div>
                            <a href="checkout-step-1.php" class="progress-wizard-dot"></a>
                        </div>
                        <div class="col-xs-3 progress-wizard-step active">
                            <div class="text-center progress-wizard-stepnum">資料填寫</div>
                            <div class="progress"><div class="progress-bar"></div></div>
                            <a href="checkout-step-2.php" class="progress-wizard-dot"></a>
                        </div>
                        <div class="col-xs-3 progress-wizard-step disabled">
                            <div class="text-center progress-wizard-stepnum">訂單確認</div>
                            <div class="progress"><div class="progress-bar"></div></div>
                            <a href="checkout-step-3.php" class="progress-wizard-dot"></a>
                        </div>
                        <div class="col-xs-3 progress-wizard-step disabled">
                            <div class="text-center progress-wizard-stepnum">訂單成立</div>
                            <div class="progress"><div class="progress-bar"></div></div>
                            <a href="checkout-step-4.php" class="progress-wizard-dot"></a>
                        </div>
                    </div>
                    <form action="" class="row" method="POST" role="form">
                        <div class="col-xs-12">
                            <div class="page-header">
                                <h4>付款人資訊 <span class="notice">(*為必填資訊)</span></h4>
                            </div>
                        </div>
                        <div class="form-group col-sm-6 col-xs-12">
                            <label for="">姓名*</label>
                            <input type="" class="form-control" id="">
                        </div>
                        <div class="form-group col-sm-6 col-xs-12" style="padding-bottom:1rem">
                            <label style="padding-bottom:1rem" for="">性別*</label>
                            <input type="radio" name="sex" id="sex" value="fumale" checked=""><span class="margin_r_10">小姐</span>
                            <input type="radio" name="sex" id="sex" value="mal">先生
                        </div>
                        <div class="form-group col-sm-6 col-xs-12">
                            <label for="">聯絡電話*</label>
                            <input type="" class="form-control" id="">
                        </div>
                        <div class="form-group col-sm-6 col-xs-12">
                            <label for="">E-mail*</label>
                            <input type="" class="form-control" id="">
                        </div>
                        <label class="col-md-12" for="">地址*</label>
                        <div class="form-group col-sm-4 col-xs-12">
                            <select class="form-control">
                                <option>縣市</option>
                                <option>2</option>
                                <option>3</option> 
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-4 col-xs-12">
                            <select class="form-control">
                                <option>鄉鎮市</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-4 col-xs-12">
                            <input type="zip" class="form-control" id="" placeholder="郵遞區號">
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group col-sm-12 col-xs-12">
                            <input type="" class="form-control" id="">
                        </div>
                        <div class="col-xs-12">
                            <div class="page-header">
                                <h4>取貨人資訊 <span class="notice">(*為必填資訊)</span></h4>
                            </div>
                        </div>
                        <div class="form-group col-sm-12 col-xs-12">
                            <div class="checkboxArea" style="margin:0 0 0 0">
                                <input id="checkbox1" type="checkbox" name="checkbox" value="1">
                                <label for="checkbox1"><span></span></label>
                                同付款人
                            </div>
                        </div>
                        <div class="form-group col-sm-6 col-xs-12">
                            <label for="">姓名*</label>
                            <input type="" class="form-control" id="">
                        </div>
                        <div class="form-group col-sm-6 col-xs-12" style="padding-bottom:1rem">
                            <label style="padding-bottom:1rem" for="">性別*</label>
                            <input type="radio" name="sex" id="sex" value="fumale" checked=""><span class="margin_r_10">小姐</span>
                            <input type="radio" name="sex" id="sex" value="mal">先生
                        </div>
                        <div class="form-group col-sm-6 col-xs-12">
                            <label for="">聯絡電話*</label>
                            <input type="" class="form-control" id="">
                        </div>
                        <div class="form-group col-sm-6 col-xs-12">
                            <label for="">E-mail*</label>
                            <input type="" class="form-control" id="">
                        </div>
                        <label class="col-md-12" for="">地址*</label>
                        <div class="form-group col-sm-4 col-xs-12">
                            <select class="form-control">
                                <option>縣市</option>
                                <option>2</option>
                                <option>3</option> 
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-4 col-xs-12">
                            <select class="form-control">
                                <option>鄉鎮市</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-4 col-xs-12">
                            <input type="zip" class="form-control" id="" placeholder="郵遞區號">
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group col-sm-12 col-xs-12">
                            <input type="" class="form-control" id="">
                        </div>
                        <div class="col-xs-12">
                            <div class="page-header">
                                <h4>發票資訊 <span class="notice">(*為必填資訊)</span></h4>
                            </div>
                        </div>
                        <div class="form-group col-sm-12 col-xs-12">
                            <label for=""><input type="radio" id=""> 捐贈</label>
                        </div>
                        <div class="form-group col-sm-12 col-xs-12">
                            <label for=""><input type="radio" id=""> 二聯式電子發票(個人)</label>
                        </div>
                        <div class="form-group col-sm-12 col-xs-12">
                            <label for=""><input type="radio" id=""> 三聯式發票(公司)</label>
                        </div>
                        <div class="col-xs-12">
                            <div class="page-header">
                                <h4>備註 <span class="notice">(有任何購買上特別需求，請記得寫在備註欄)</span></h4>
                            </div>
                        </div>
                        <div class="form-group col-sm-12 col-xs-12">
                            <textarea name="" id="" class="form-control"></textarea>
                        </div>
                        <div class="col-xs-12">
                            <div class="well well-lg clearfix">
                                <ul class="row pager">
                                    <li class="col-md-offset-8 next col-md-2 col-xs-12" style="margin-top:.5rem; margin-bottom:.5rem"><a href="checkout-step-2.php">上一步</a></li>
                                    <li class="next col-md-2 col-xs-12" style="margin-top:.5rem; margin-bottom:.5rem"><a href="checkout-step-4.php">下一步</a></li>
                                </ul>
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