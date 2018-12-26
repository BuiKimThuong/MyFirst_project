<!DOCTYPE html>
<html lang="vi">

<?php require_once 'include/head.php'; ?>

<body>
	<?php 
		session_start();
		$ten = $_SESSION['ten'];
		$email = $_SESSION['email'];
		$sdt = $_SESSION['sdt'];
		$dia_chi = $_SESSION['dia_chi'];
		$ngay_sinh = $_SESSION['ngay_sinh'];
		$gioi_tinh = $_SESSION['gioi_tinh'];
		if (empty($_SESSION)) {
			header('location: form_login.php?error_session');
		}
	 ?>
	<!-- HEADER -->
	<header>
		<!-- header -->
		<div id="header">
			<div class=" container">
				<div class=" pull-left">
					<!-- Logo -->
					<div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 header-logo">
						<a class="logo" href="#">
							<img src="./img/logo5.png" alt="">
						</a>
					</div>
					<!-- /Logo -->

					
				</div>

				<!-- Search -->
				<div class="col-lg-4 col-md-3 col-sm-6 col-xs-6 header-search">
					<form>
						<input class="input search-input form-control" type="text" placeholder="Tìm kiếm sản phẩm...">
						<button class="search-btn"><i class="fa fa-search "></i></button>
					</form>
				</div>
				<!-- /Search -->

				<div class="pull-right">
					<ul class="col-xs-12 header-btns">
						<!-- Account -->
						<li class="col-xs-4 header-account dropdown default-dropdown">
							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-user-o"></i>
								</div>
								<strong class="text-uppercase">Tài Khoản <i class="fa fa-caret-down"></i></strong><br>
								<p>Xin chào <b><?php echo $ten ?></b></p>
							</div>
							<ul class="custom-menu" style="width: 240px;">
								<li><a href="profile.php"><i class="fa fa-user-o"></i> Tài Khoản</a></li>
								<li><a href="logout.php"><i class="fa fa-sign-in"></i> Đăng Xuất</a></li>
							</ul>
						</li>
						<!-- /Account -->

						<!-- Cart -->
						<li class="col-xs-4  header-cart dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-shopping-cart"></i>
									<span class="qty">3</span>
								</div>
								<strong class="text-uppercase">Giỏ Hàng:</strong>
								<br>
								<span>35.20đ</span>
							</a>
							<div class="custom-menu">
								<div id="shopping-cart">
									<div class="shopping-cart-list">
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">32.50đ <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">SP1</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">32.50đ <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">SP2</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
									</div>
									<div class="shopping-cart-btns">
										<button class="main-btn">Xem Giỏ Hàng</button>
										<button class="primary-btn">Thanh Toán <i class="fa fa-arrow-circle-right"></i></button>
									</div>
								</div>
							</div>
						</li>
						<!-- /Cart -->

						<!-- Mobile nav toggle-->
						<li class="col-xs-4 nav-toggle">
							<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
						</li>
						<!-- / Mobile nav toggle -->
					</ul>
				</div>
			</div>
			<!-- header -->
		</div>
		<!-- container -->
	</header>
	<!-- /HEADER -->
	
	<!-- NAVIGATION -->
	<?php require_once 'content/index/menu.php' ?>
	<!-- /NAVIGATION -->

	<!-- CONTENT -->
	<?php require_once 'content/index/content.php' ?>
	<!-- /CONTENT -->

	<!-- FOOTER -->
	<?php require_once 'include/footer.php'; ?>
	<!-- /FOOTER -->
	
</body>

</html>
