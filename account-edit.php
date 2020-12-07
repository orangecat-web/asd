<?php include("header.php") ?>
<!-- LIGHT SECTION -->
<section class="lightSection clearfix pageHeader">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <div class="page-title">
                    <h2>會員中心</h2>
                </div>
            </div>
            <div class="col-xs-6">
                <ol class="breadcrumb pull-right">
                    <li>
                        <a href=".">回首頁</a>
                    </li>
                    <li class="active">
                        <a href="account-dashboard.php">會員中心</a>
                    </li>
                    <li class="active">會員資料</li>
                </ol>
            </div>
        </div>
    </div>
</section>      
<!-- MAIN CONTENT SECTION -->
<section class="mainContent clearfix userProfile">
    <div class="container">
        <div class="row">
            <?php include("nav-acc.php") ?>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="innerWrapper profile">
                    <div class="orderBox">
                        <h4>會員資料</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-sm-3 col-xs-12">
                            <div class="thumbnail">
                                <img src="img/products/profile/profile-image.jpg" alt="profile-image">
                                <div class="caption">
                                    <a href="#" class="btn btn-primary btn-block" role="button">更換大頭照</a>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 col-sm-9 col-xs-12">
                            <h1>基本資訊</h1>
                            <form action="account-profile.php" class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-md-offset-10 col-md-2 col-sm-offset-9 col-sm-3">
                                        <button type="submit" class="btn btn-primary btn-block">儲存</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-2 col-sm-3 control-label">帳號</label>
                                    <div class="col-md-10 col-sm-9 aprofile">
                                        yaks192012@yahoo.com.tw
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-2 col-sm-3 control-label">姓名</label>
                                    <div class="col-md-10 col-sm-9">
                                        <input type="text" class="form-control" id="" value="王小明" placeholder="">
                                        <label><input type="radio" name="gender"> 小姐</label> 
                                        <label><input type="radio" name="gender"> 先生</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-2 col-sm-3 control-label">出生日期</label>
                                    <div class="col-md-10 col-sm-9">
                                        <span class="quick-drop">
                                            <select name="guiest_id3" id="guiest_id3" class="select-drop">
                                                <option>年</option>
                                                <option>2000</option>
                                                <option>2001</option>
                                                <option>2002</option>          
                                            </select>
                                        </span>
                                        <span class="quick-drop">
                                            <select name="guiest_id3" id="guiest_id3" class="select-drop">
                                                <option>月</option>
                                                <option>一月</option>
                                                <option>二月</option>
                                                <option>三月</option>          
                                            </select>
                                        </span>
                                        <span class="quick-drop">
                                            <select name="guiest_id3" id="guiest_id3" class="select-drop">
                                                <option>日</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>          
                                            </select>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-2 col-sm-3 control-label">行動電話</label>
                                    <div class="col-md-10 col-sm-9">
                                        <input type="text" class="form-control" id="" value="0911111111" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-2 col-sm-3 control-label">Email</label>
                                    <div class="col-md-10 col-sm-9">
                                        <input type="text" class="form-control" id="" value="yaks192012@yahoo.com.tw" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-2 col-sm-3 control-label">電子報</label>
                                    <div class="col-md-10 col-sm-9">
                                        <div class="col-md-10 col-sm-9">
                                            <label><input type="radio" name="gender"> 我要訂閱</label> 
                                            <label><input type="radio" name="gender"> 取消訂閱</label>
                                            <input type="text" class="form-control" id="" value="shagawega18191@gmail.com" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <h1>聯絡資訊</h1>
                            <form action="account-profile.php" class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-md-offset-10 col-md-2 col-sm-offset-9 col-sm-3">
                                        <button type="submit" class="btn btn-primary btn-block">儲存</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-2 col-sm-3 control-label">市話</label>
                                    <div class="col-md-10 col-sm-9">
                                        <input type="text" class="form-control" id="" value="02232823333" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-2 col-sm-3 control-label">聯絡地址</label>
                                    <div class="col-md-10 col-sm-9">
                                        <span class="quick-drop">
                                            <select name="guiest_id3" id="guiest_id3" class="select-drop">
                                                <option>縣市</option>
                                                <option>2000</option>
                                                <option>2001</option>
                                                <option>2002</option>          
                                            </select>
                                        </span>
                                        <span class="quick-drop">
                                            <select name="guiest_id3" id="guiest_id3" class="select-drop">
                                                <option>鄉鎮市</option>
                                                <option>2000</option>
                                                <option>2001</option>
                                                <option>2002</option>          
                                            </select>
                                        </span>
                                        <input type="text" class="form-control" id="" value="123" placeholder="郵遞區號" style="margin-top:4rem">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-2 col-sm-3 control-label">送貨地址</label>
                                    <div class="col-md-10 col-sm-9">
                                        <span class="quick-drop">
                                            <select name="guiest_id3" id="guiest_id3" class="select-drop">
                                                <option>縣市</option>
                                                <option>2000</option>
                                                <option>2001</option>
                                                <option>2002</option>          
                                            </select>
                                        </span>
                                        <span class="quick-drop">
                                            <select name="guiest_id3" id="guiest_id3" class="select-drop">
                                                <option>鄉鎮市</option>
                                                <option>2000</option>
                                                <option>2001</option>
                                                <option>2002</option>          
                                            </select>
                                        </span>
                                        <input type="text" class="form-control" id="" value="123" placeholder="郵遞區號" style="margin-top:4rem">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-2 col-sm-3 control-label">可收貨時間</label>
                                    <div class="col-md-10 col-sm-9 aprofile">
                                        <label><input type="radio" name="gender"> 全日皆可</label> 
                                        <label><input type="radio" name="gender"> 白日 9:00 ~ 17:00</label>
                                        <label><input type="radio" name="gender"> 夜間 17:00 ~ 21:00</label>
                                    </div>
                                </div>
                            </form>
                            <h1>其他資訊</h1>
                            <form action="account-profile.php" class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-md-offset-10 col-md-2 col-sm-offset-9 col-sm-3">
                                        <button type="submit" class="btn btn-primary btn-block">儲存</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-2 col-sm-3 control-label">學歷</label>
                                    <div class="col-md-10 col-sm-9">
                                        <span class="quick-drop">
                                            <select name="guiest_id3" id="guiest_id3" class="select-drop">
                                                <option>學歷</option>
                                                <option>2000</option>
                                                <option>2001</option>
                                                <option>2002</option>          
                                            </select>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-2 col-sm-3 control-label">婚姻狀況</label>
                                    <div class="col-md-10 col-sm-9 aprofile">
                                        <label><input type="radio" name="gender"> 已婚</label>
                                        <label><input type="radio" name="gender"> 未婚</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-2 col-sm-3 control-label">子女數目</label>
                                    <div class="col-md-10 col-sm-9">
                                        <span class="quick-drop">
                                            <select name="guiest_id3" id="guiest_id3" class="select-drop">
                                                <option>0 個</option>
                                                <option>2000</option>
                                                <option>2001</option>
                                                <option>2002</option>          
                                            </select>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-2 col-sm-3 control-label">子女生日</label>
                                    <div class="col-md-10 col-sm-9">
                                        <span class="quick-drop">
                                            <select name="guiest_id3" id="guiest_id3" class="select-drop">
                                                <option>年</option>
                                                <option>2000</option>
                                                <option>2001</option>
                                                <option>2002</option>          
                                            </select>
                                        </span>
                                        <span class="quick-drop">
                                            <select name="guiest_id3" id="guiest_id3" class="select-drop">
                                                <option>月</option>
                                                <option>一月</option>
                                                <option>二月</option>
                                                <option>三月</option>          
                                            </select>
                                        </span>
                                        <span class="quick-drop">
                                            <select name="guiest_id3" id="guiest_id3" class="select-drop">
                                                <option>日</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>          
                                            </select>
                                        </span>
                                        <div class="clearfix" style="margin: .5rem 0"></div>
                                        <span class="quick-drop">
                                            <select name="guiest_id3" id="guiest_id3" class="select-drop">
                                                <option>年</option>
                                                <option>2000</option>
                                                <option>2001</option>
                                                <option>2002</option>          
                                            </select>
                                        </span>
                                        <span class="quick-drop">
                                            <select name="guiest_id3" id="guiest_id3" class="select-drop">
                                                <option>月</option>
                                                <option>一月</option>
                                                <option>二月</option>
                                                <option>三月</option>          
                                            </select>
                                        </span>
                                        <span class="quick-drop">
                                            <select name="guiest_id3" id="guiest_id3" class="select-drop">
                                                <option>日</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>          
                                            </select>
                                        </span>
                                        <div class="clearfix" style="margin: .5rem 0"></div>
                                        <span class="quick-drop">
                                            <select name="guiest_id3" id="guiest_id3" class="select-drop">
                                                <option>年</option>
                                                <option>2000</option>
                                                <option>2001</option>
                                                <option>2002</option>          
                                            </select>
                                        </span>
                                        <span class="quick-drop">
                                            <select name="guiest_id3" id="guiest_id3" class="select-drop">
                                                <option>月</option>
                                                <option>一月</option>
                                                <option>二月</option>
                                                <option>三月</option>          
                                            </select>
                                        </span>
                                        <span class="quick-drop">
                                            <select name="guiest_id3" id="guiest_id3" class="select-drop">
                                                <option>日</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>          
                                            </select>
                                        </span>
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