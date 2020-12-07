<?php include("header.php") ?>
<link rel="stylesheet" href="css/cart.css">
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
                            <div class="text-center progress-wizard-stepnum">購物清單</div>
                            <div class="progress"><div class="progress-bar"></div></div>
                            <a href="checkout-step-1.php" class="progress-wizard-dot"></a>
                        </div>
                        <div class="col-xs-3 progress-wizard-step disabled">
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
                                <h4><i class="fa fa-truck" aria-hidden="true"></i> 請選擇您的取貨方式</h4>
                            </div>
                        </div>
                        <div class="form-group col-xs-12">
                            <input type="radio" id="">
                            宅配 宅配貨到付款，將酌收 $80 元物流費，若單筆訂單滿 <span class="notice">$699</span> 元，即享有免運費優惠。
                        </div>

                        <div class="col-xs-12">
                            <div class="page-header">
                                <h4><i class="fa fa-tag" aria-hidden="true"></i> 請選擇優惠折扣方式</h4>
                            </div>
                        </div>

                        <div class="form-group col-xs-12">
                            <input type="radio" id="">
                            宅配 宅配貨到付款，將酌收 $50 元物流費，若單筆訂單滿 <span class="notice">$1,000</span> 元，即享有免運費優惠。
                        </div>
                        <div class="form-group col-xs-12">
                            <input type="radio" id="">
                            超商取貨 OK、萊爾富、全家取貨付款，將酌收 $50 元物流費，若單筆訂單滿 <span class="notice">$1,000</span> 元，即享有免運費優惠。
                        </div>

                        <dl class="row cart">
                            <dt class="col-xs-1 title">序號</dt>
                            <dt class="col-xs-1 title">商品圖片</dt>
                            <dt class="col-xs-3 title">商品</dt>
                            <dt class="col-xs-1 title">規格</dt>
                            <dt class="col-xs-1 title">售價</dt>
                            <dt class="col-xs-2 title">數量</dt>
                            <dt class="col-xs-1 title">小計</dt>
                            <dt class="col-xs-1 title">使用紅利</dt>
                            <dt class="col-xs-1 title">操作</dt>
                        </dl>

                        <dl class="row cart outline">
                            <dd class="col-sm-1 col-xs-12 item">1</dd>  
                            <dd class="col-sm-1 col-xs-12 item item_img">
                                <span class="cartImage"><img src="img/products/cart-image.jpg" alt="image"></span>
                            </dd>
                            <dt class="col-xs-3 mtitle">商品</dt>
                            <dd class="col-sm-3 col-xs-9 item">【Taris】愛琴海碩大天然無花果乾200g/包 x5包(Taris土耳其無花果系列)</dd>
                            <dt class="col-xs-3 mtitle">規格</dt>
                            <dd class="col-sm-1 col-xs-9 item">【200g/包 x5包】</dd>
                            <dt class="col-xs-3 mtitle">售價</dt>
                            <dd class="col-sm-1 col-xs-9 item">NT$ 99.00</dd>
                            <dt class="col-xs-3 mtitle">數量</dt>
                            <dd class="row col-sm-2 col-xs-9 item fcart">
                                <button class="btn btn-default col-xs-4"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                <input class="col-xs-4" type="text">
                                <button class="btn btn-default col-xs-4"><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </dd>
                            <dt class="col-xs-3 mtitle">小計</dt>
                            <dd class="col-sm-1 col-xs-9 item">NT$ 99.00</dd>
                            <dt class="col-xs-3 mtitle">使用紅利</dt>
                            <dd class="col-sm-1 col-xs-9 item">
                                <div class="checkboxArea">
                                    <span class="notice">最高可抵$100元</span>
                                </div>
                            </dd>
                            <dd class="col-sm-1 col-xs-12 item">
                                <button class="btn btn-checkout btn-block">下次購買</button>
                                <button class="btn btn-checkout btn-block">刪除商品</button>
                            </dd>
                        </dl>

                        <dl class="row cart outline">  
                            <dd class="col-sm-12 col-xs-12 total" style="padding:1rem">
                                <dl>
                                    <dd>共計 4 件商品，商品金額總計 <span>NT$ 792.00</span></dd>
                                    <dd>優惠折扣(折價券) <span>80%</span></dd>
                                    <dd>運費<span class="notice">(滿額$600即可享免運費)</span> <span>NT$ 18.00</span></dd>
                                    <dd>總計 <span class="grandTotal">NT$ 810.00</span></dd>
                                </dl>
                            </dd>
                        </dl>

                        <div class="col-xs-12">
                            <div class="page-header">
                                <h4><i class="fa fa-credit-card" aria-hidden="true"></i> 付款方式</h4>
                            </div>
                        </div>
                        <div class="form-group col-xs-12">
                            <input type="radio" id="">
                            信用卡一次付清 <img style="max-height:20px" src="images/visa.png" alt="">
                        </div>
                        <div class="form-group col-xs-12">
                            <input type="radio" id="">
                            信用卡分期零利率 (3,6期)
                        </div>
                        <div class="form-group col-xs-12">
                            <input type="radio" id="">
                            信用卡分期 (12,18,24,30期)
                        </div>
                        <div class="form-group col-xs-12">
                            <input type="radio" id="">
                            即時轉帳 (需讀卡機)
                        </div>
                        <div class="form-group col-xs-12">
                            <input type="radio" id="">
                            ATM轉帳
                        </div>
                        <div class="form-group col-xs-12">
                            <input type="radio" id="">
                            超商付款 <img style="max-height:20px" src="images/all_store.png" alt="">
                        </div>
                        <div class="form-group col-xs-12">
                            <input type="radio" id="">
                            貨到付款
                        </div>
                        <div class="col-xs-12">
                            <div class="well well-lg clearfix">
                                <ul class="pager">
                                    <li class="next"><a href="checkout-step-2.php">下一步</a></li>
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