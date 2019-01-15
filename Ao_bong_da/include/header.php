<?php
	if (isset($_GET['loi'])) {
		$file = "form_login.php?error_session";
		require_once 'content/check_customer.php';
	} else {
		session_start();
	}
    require("include/connect_database.php");
?> 
	<!-- HEADER -->
	<header>
		<!-- header -->
		<div id="header">
			<div class=" container">
				<div class=" pull-left">
					<!-- Logo -->
					<div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 header-logo">
						<a class="logo" href="index.php">
							<img src="./img/logo5.png" alt="">
						</a>
					</div>
					<!-- /Logo -->

					
				</div>

				<!-- Search -->
				<div class="col-lg-4 col-md-3 col-sm-6 col-xs-6 header-search">
					<?php 
						$search = "";
						if (isset($_GET['search'])) {
							$search = $_GET['search'];
						}
					 ?>
					<form>
						<input class="input search-input form-control" type="text" placeholder="Tìm kiếm sản phẩm..." name="search" value="<?php echo $search ?>">
						<button class="search-btn" type="submit"><i class="fa fa-search "></i></button>
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
								<?php if (isset($_SESSION['ten'])) {
									$ten          = $_SESSION['ten'];
									?>
									<p>Xin chào <b><?php echo $ten ?></b></p>
									</div>
									<ul class="custom-menu" style="width: 240px;">
										<li><a href="profile.php"><i class="fa fa-user-o"></i> Tài Khoản</a></li>
										<li><a href="lich_su_mua_hang.php"><i class="fa fa-money"></i> Lịch sử mua hàng</a></li>
										<li><a href="logout.php"><i class="fa fa-sign-in"></i> Đăng Xuất</a></li>
									</ul>
								<?php } else { ?>
								<a href="#" class="text-uppercase">Đăng kí</a>/<a href="#" class="text-uppercase">Đăng nhập</a>
								</div>
								<ul class="custom-menu" style="width: 240px;">
									<li><a href="../Ao_bong_da/form_login.php"><i class="fa fa-sign-in"></i> Đăng Nhập</a></li>
									<li><a href="../Ao_bong_da/login.php"><i class="fa fa-user-plus"></i> Đăng Kí</a></li>
									<!-- <li><a href="#"><i class="fa fa-google-plus"></i> Đăng Nhập Bằng G+</a></li>
									<li><a href="#"><i class="fa fa-facebook"></i> Đăng Nhập Facebook</a></li> -->
								</ul>
								<?php
									}
								 ?>
						</li>
						<!-- /Account -->

						<!-- Cart -->
						<?php 
							if (isset($_SESSION['cart'])) {
								$query = "select * from san_pham where ma_san_pham in (";
								foreach ($_SESSION['cart'] as $id => $value) {
									$query =$query.$id.",";
								}
								$query = substr($query,0,-1).") order by ten_san_pham asc";
								$result = mysqli_query($connect,$query);
								$dem =0;
								$tong = 0;
								while ($row = mysqli_fetch_array($result)) {
									$dem+= $_SESSION['cart'][$row['ma_san_pham']]['so_luong'];
									$tong+= $_SESSION['cart'][$row['ma_san_pham']]['so_luong'] * $row['gia'];
								}
							}
							else{
								$tong = 0;
								$dem = 0;
							}

						?>
						<li class="col-xs-4  header-cart dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-shopping-cart"></i>
									<span class="qty"><?php echo $dem; ?></span>
								</div>
								<strong class="text-uppercase">Giỏ Hàng:</strong>
								<br>
								<span>Tổng tiền: <?php echo $tong?>đ</span>
							</a>
							<div class="custom-menu">
								<div id="shopping-cart">
									<div class="shopping-cart-list">
										<?php 
											if (isset($_SESSION['cart'])) {
												$query = "select * from san_pham where ma_san_pham in (";
												foreach ($_SESSION['cart'] as $id => $value) {
													$query =$query.$id.",";
												}
												$query = substr($query,0,-1).") order by ten_san_pham asc";
												$result = mysqli_query($connect,$query);
												while ($row = mysqli_fetch_array($result)) {

										?>
											<div class="product product-widget">
												<div class="product-thumb">
													<img src="./admin/product/img/<?php echo $row['anh'] ?>" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-price"><?php echo $row['gia']; ?><span class="qty">đ x	<?php echo $_SESSION['cart'][$row['ma_san_pham']]['so_luong'] ?></span></h3>
													<h2 class="product-name"><a href="#"><?php echo $row['ten_san_pham']; ?></a></h2>
												</div>
												<button class="cancel-btn"><i class="fa fa-trash"></i></button>
											</div>
										<?php
												}
											} 
											else {
												echo "<p>Bạn chưa chọn sản phẩm nào!</p>";
											}

										 ?>
									</div>
									<div class="shopping-cart-btns">
										<a href="checkout.php?loi">
											<button class="main-btn">Xem Giỏ Hàng</button>
										
										<button class="primary-btn">Thanh Toán <i class="fa fa-arrow-circle-right"></i></button>
										</a>
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