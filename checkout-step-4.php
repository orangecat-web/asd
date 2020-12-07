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
                        <div class="col-xs-3 progress-wizard-step complete fullBar">
                            <div class="text-center progress-wizard-stepnum">資料填寫</div>
                            <div class="progress"><div class="progress-bar"></div></div>
                            <a href="checkout-step-2.php" class="progress-wizard-dot"></a>
                        </div>
                        <div class="col-xs-3 progress-wizard-step active">
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
                            <div class="cartListInner">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th colspan="2"></th>
                                                <th>商品</th>
                                                <th>規格</th>
                                                <th>售價</th>
                                                <th>數量</th>
                                                <th>小計</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox" id=""><br></td>
                                                <td><span class="cartImage"><img src="img/products/cart-image.jpg" alt="image"></span></td>
                                                <td>【Taris】愛琴海碩大天然無花果乾200g/包 x5包(Taris土耳其無花果系列)</td>
                                                <td>【200g/包 x5包</td>
                                                <td>NT$ 99.00</td>
                                                <td><input type="text" placeholder="1"></td>
                                                <td>NT$ 99.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row totalAmountArea">
                                    <div class="col-sm-10 col-sm-offset-2 col-xs-12">
                                        <ul class="list-unstyled">
                                            <li>共計 4 件商品，商品金額總計 <span>NT$ 792.00</span></li>
                                            <li>優惠折扣(折價券) <span>80%</span></li>
                                            <li>運費<span class="notice">(滿額$600即可享免運費)</span> <span>NT$ 18.00</span></li>
                                            <li>總計 <span class="grandTotal">NT$ 810.00</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="page-header">
                                <h4>付款人資訊></h4>
                            </div>
                        </div>
                        <div class="form-group col-sm-12 col-xs-12">
                            <dl class="cstep4">
                                <dt>姓名</dt>
                                <dd>姚凱 先生</dd>
                                <dt>聯絡電話</dt>
                                <dd>0988222111</dd>
                                <dt>E-mail</dt>
                                <dd>jiangshe@gmail.com</dd>
                                <dt>地址</dt>
                                <dd>251 新北市中正區竹林路五段982-1號5樓-2</dd>
                            </dl>
                        </div>
                        <div class="col-xs-12">
                            <div class="page-header">
                                <h4>取貨人資訊</h4>
                            </div>
                        </div>
                        <div class="form-group col-sm-12 col-xs-12">
                            <dl class="cstep4">
                                <dt>姓名</dt>
                                <dd>姚凱 先生</dd>
                                <dt>聯絡電話</dt>
                                <dd>0988222111</dd>
                                <dt>E-mail</dt>
                                <dd>jiangshe@gmail.com</dd>
                                <dt>地址</dt>
                                <dd>251 新北市中正區竹林路五段982-1號5樓-2</dd>
                            </dl>
                        </div>
                        <div class="col-xs-12">
                            <div class="page-header">
                                <h4>發票資訊</h4>
                            </div>
                        </div>
                        <div class="form-group col-sm-12 col-xs-12">
                            <dl class="cstep4">
                                <dt style="float:none">三聯式電子發票(公司)</dt>
                                <dt>發票抬頭</dt>
                                <dd>李強股份有限公司</dd>
                                <dt>統一編號</dt>
                                <dd>12349829</dd>
                                <dt>發票收件人</dt>
                                <dd>崔菁安 先生</dd>
                                <dt>發票寄送地址</dt>
                                <dd>251 新北市中正區竹林路五段982-1號5樓-2</dd>
                            </dl>
                        </div>
                        <div class="col-xs-12">
                            <div class="page-header">
                                <h4>備註</h4>
                            </div>
                        </div>
                        <div class="form-group col-sm-12 col-xs-12">
                            <p>無</p>
                        </div>
                        <div class="col-xs-12">
                            <div class="well well-lg clearfix">
                                <ul class="pager">
                                    <li class="next"><a href="checkout-step-5.php">下一步</a></li>
                                    <li class="next"><a style="margin-right:1rem" href="checkout-step-3.php">上一步</a></li>
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