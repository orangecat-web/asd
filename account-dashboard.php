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
					<li class="active">會員中心</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!-- MAIN CONTENT SECTION -->
<section class="mainContent clearfix userProfile">
	<div class="container">
		<div class="row">
			<div class="row col-sm-12 mx-auto mdata">
				<div class="col-md-3">
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="60" 
							 aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
							<span class="sr-only">40% 完成</span>
						</div>
					</div>
				</div>
				<div class="col-md-9">
					<p>您目前會員資訊完成60%，請進入 會員資料修改 填寫完整資料，將獲得紅利點數300點喔！</p>
				</div>
			</div>
			<?php include("nav-acc.php") ?>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="innerWrapper">
					<h3>Wellcome <span>Adam Smith</span></h3>
					<ul class="list-inline">
						<li><a href="account-all-orders.php" class="btn btn-default btn-lg"><i class="fa fa-shopping-cart" aria-hidden="true"></i>我的訂單</a></li>
						<li><a href="account-nextbuy.php" class="btn btn-default btn-lg"><i class="fa fa-gift" aria-hidden="true"></i>下次購買清單(0)</a></li>
						<li><a href="account-address.php" class="btn btn-default btn-lg"><i class="fa fa-list" aria-hidden="true"></i>收件人資料管理</a></li>
						<li><a href="account-assess.php" class="btn btn-default btn-lg"><i class="fa fa-commenting" aria-hidden="true"></i>商品評價</a></li>
						<li><a href="account-order-back.php" class="btn btn-default btn-lg"><i class="fa fa-plus-circle" aria-hidden="true"></i>退換貨申請</a></li>
					</ul>
					<div class="orderBox">
						<h4>我的訂單</h4>
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>訂單編號</th>
										<th>日期</th>
										<th>數量</th>
										<th>金額</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>#252125</td>
										<td>Mar 25, 2016</td>
										<td>2</td>
										<td>NT$ 99.00</td>
										<td><a href="#" class="btn btn-default">結帳去</a></td>
									</tr>
								</tbody>
							</table>
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