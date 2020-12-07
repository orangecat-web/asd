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
                                <h4><i class="fa fa-truck" aria-hidden="true"></i> 請選擇信用卡分期期數 <span class="notice">(※除不盡餘數於第一期收取)</span></h4>
                            </div>
                        </div>
                        <div class="form-group col-xs-12">
                            <input type="radio" id="">
                            <span class="notice" style="font-size:2rem">$2,850元</span> x 3期 零利率 (共31家)
                            <p style="margin-top:1rem">台新、花旗、聯邦、國泰世華、玉山、台北富邦、中信、永豐、遠東、澳盛、匯豐、新光、兆豐、凱基(原萬泰)、第一、上海、日盛、渣打、大眾、合庫、華南、元大、安泰、華泰、陽信、臺企、台灣永旺、三信商銀、土銀、台中商銀、彰銀</p>
                        </div>
                        <div class="form-group col-xs-12">
                            <input type="radio" id="">
                            <span class="notice" style="font-size:2rem">$1,850元</span> x 6期 零利率 (共21家)
                            <p style="margin-top:1rem">國泰世華、花旗、玉山、台北富邦、台新、聯邦、中信、永豐、遠東、澳盛、匯豐、新光、第一、兆豐、大眾、凱基(原萬泰)、上海、華南、日盛、台灣永旺、渣打、合庫、元大、安泰、華泰、陽信、臺企、三信商銀、土銀、台中商銀、彰銀</p>
                        </div>

                        <div class="col-xs-12">
                            <div class="page-header">
                                <p>注意事項：(請穩達提供確定文字)</p>
                                <p>1.實際分期金額將依各發卡銀行規定略有調整。
                                <p>2.每個商品可接受的信用卡分期期數可能不同，系統會自動呈現您購物車中商品共同可接受的分期期數已利您進行結帳。</p>
                                <p>3.所有價格一律含稅，接受信用卡。</p>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="well well-lg clearfix">
                                <ul class="pager">
                                    <li class="next"><a href="checkout-step-3.php">下一步</a></li>
                                    <li class="next"><a style="margin-right:1rem" href="checkout-step-1.php">上一步</a></li>
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