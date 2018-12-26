
<!-- HOME -->
<div id="home">
	<!-- container -->
	<div class="container">
		<!-- home wrap -->
		<div class="home-wrap">
			<!-- home slick -->
			<div id="home-slick">
				<!-- banner -->
				<div class="banner banner-1">
					<img src="./img/slide1.jpg" alt="" >
					<div class="banner-caption text-right">
						<h1 class="primary-color">Siêu Giảm Giá</h1>
						<h3 class="white-color font-weak">Lên Tới 50% </h3>
						<button class="primary-btn">Mua Ngay</button>
					</div>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="banner banner-1">
					<img src="./img/slide2.jpg" alt="">
				</div>
				<!-- /banner -->
			</div>
			<!-- /home slick -->
		</div>
		<!-- /home wrap -->
	</div>
	<!-- /container -->
</div>
<!-- /HOME -->

<!-- section -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- section-title -->
			<div class="col-md-12">
				<div class="section-title">
					<h2 class="title"><a href="products.php">Áo CLB Ngoại Hạng Anh</a></h2>
					<div class="pull-right">
						<div class="product-slick-dots-1 custom-dots"></div>
					</div>
				</div>
			</div>
			<!-- /section-title -->



			<!-- Product Slick -->
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="row">
					<div id="product-slick-1" class="product-slick">
						<!-- Product Single -->
						<?php 
							
							$query = "select * from san_pham where ma_cau_lac_bo = 1 order by ten_san_pham ASC";
							$result = mysqli_query($connect,$query);
							while ($row = mysqli_fetch_array($result)) {
						?>
							<div class=" product product-single">
								<div class="product-thumb">
									<div class="product-label">
										<span>New</span>
										<span class="sale">-20%</span>
									</div>
									<ul class="product-countdown">
										<li><span>00 H</span></li>
										<li><span>00 M</span></li>
										<li><span>00 S</span></li>
									</ul>
									<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Xem </button>
									<img src="./img/<?php echo $row['anh']; ?>" alt="">
								</div>
								<div class="product-body">
									<h3 class="product-price"><?php echo $row['gia']; ?>đ<del class="product-old-price">$45.00</del></h3>
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<h2 class="product-name"><a href="#"><?php echo $row['ten_san_pham']; ?></a></h2>
									<div class="product-btns">
										<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
										<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
										<a href="content/process_content.php?action=add&id=<?php echo $row['ma_san_pham']; ?>"><button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</button></a>
									</div>
								</div>
							</div>
						<?php
							}
						 ?>
							
						<!-- /Product Single -->

					</div>
				</div>
			</div>
			<!-- /Product Slick -->
		</div>
		<!-- /row -->

		<!-- row -->
		<div class="row">
			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h2 class="title">Áo CLB Laliga</h2>
					<div class="pull-right">
						<div class="product-slick-dots-2 custom-dots">
						</div>
					</div>
				</div>
			</div>
			<!-- section title -->

			<!-- Product Single -->
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="product product-single product-hot">
					<div class="product-thumb">
						<div class="product-label">
							<span class="sale">-20%</span>
						</div>
						<ul class="product-countdown">
							<li><span>00 H</span></li>
							<li><span>00 M</span></li>
							<li><span>00 S</span></li>
						</ul>
						<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
						<img src="./img/ao1.jpg" alt="">
					</div>
					<div class="product-body">
						<h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
						<div class="product-rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<h2 class="product-name"><a href="#">Áo Câu Lạc Bộ ...</a></h2>
						<div class="product-btns">
							<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
							<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
							<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</button>
						</div>
					</div>
				</div>
			</div>
			<!-- /Product Single -->

			<!-- Product Slick -->
			<div class="col-md-9 col-sm-6 col-xs-6">
				<div class="row">
					<div id="product-slick-2" class="product-slick">
						<!-- Product Single -->
						<div class="product product-single">
							<div class="product-thumb">
								<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
								<img src="./img/ao6.jpg" alt="">
							</div>
							<div class="product-body">
								<h3 class="product-price">$32.50</h3>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<h2 class="product-name"><a href="#">Áo Câu Lạc Bộ ...</a></h2>
								<div class="product-btns">
									<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
									<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
									<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</button>
								</div>
							</div>
						</div>
						<!-- /Product Single -->

						<!-- Product Single -->
						<div class="product product-single">
							<div class="product-thumb">
								<div class="product-label">
									<span class="sale">-20%</span>
								</div>
								<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
								<img src="./img/ao7.jpg" alt="">
							</div>
							<div class="product-body">
								<h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<h2 class="product-name"><a href="#">Áo Câu Lạc Bộ ...</a></h2>
								<div class="product-btns">
									<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
									<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
									<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</button>
								</div>
							</div>
						</div>
						<!-- /Product Single -->

						<!-- Product Single -->
						<div class="product product-single">
							<div class="product-thumb">
								<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
								<img src="./img/ao4.jpg" alt="">
							</div>
							<div class="product-body">
								<h3 class="product-price">$32.50</h3>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<h2 class="product-name"><a href="#">Áo Câu Lạc Bộ ...</a></h2>
								<div class="product-btns">
									<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
									<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
									<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</button>
								</div>
							</div>
						</div>
						<!-- /Product Single -->

						<!-- Product Single -->
						<div class="product product-single">
							<div class="product-thumb">
								<div class="product-label">
									<span>New</span>
									<span class="sale">-20%</span>
								</div>
								<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
								<img src="./img/ao3.jpg" alt="">
							</div>
							<div class="product-body">
								<h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<h2 class="product-name"><a href="#">Áo Câu Lạc Bộ ...</a></h2>
								<div class="product-btns">
									<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
									<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
									<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</button>
								</div>
							</div>
						</div>
						<!-- /Product Single -->

					</div>
				</div>
			</div>
			<!-- /Product Slick -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /section -->


<!-- section -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h2 class="title">Áo CLB League 1</h2>
				</div>
			</div>
			<!-- section title -->

			<!-- Product Single -->
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="product product-single">
					<div class="product-thumb">
						<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
						<img src="./img/ao1.jpg" alt="">
					</div>
					<div class="product-body">
						<h3 class="product-price">$32.50</h3>
						<div class="product-rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<h2 class="product-name"><a href="#">Áo Câu Lạc Bộ ...</a></h2>
						<div class="product-btns">
							<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
							<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
							<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</button>
						</div>
					</div>
				</div>
			</div>
			<!-- /Product Single -->

			<!-- Product Single -->
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="product product-single">
					<div class="product-thumb">
						<div class="product-label">
							<span>New</span>
							<span class="sale">-20%</span>
						</div>
						<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
						<img src="./img/ao2.jpg" alt="">
					</div>
					<div class="product-body">
						<h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
						<div class="product-rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<h2 class="product-name"><a href="#">Áo Câu Lạc Bộ ...</a></h2>
						<div class="product-btns">
							<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
							<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
							<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</button>
						</div>
					</div>
				</div>
			</div>
			<!-- /Product Single -->

			<!-- Product Single -->
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="product product-single">
					<div class="product-thumb">
						<div class="product-label">
							<span>New</span>
							<span class="sale">-20%</span>
						</div>
						<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
						<img src="./img/ao3.jpg" alt="">
					</div>
					<div class="product-body">
						<h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
						<div class="product-rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<h2 class="product-name"><a href="#">Áo Câu Lạc Bộ ...</a></h2>
						<div class="product-btns">
							<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
							<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
							<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</button>
						</div>
					</div>
				</div>
			</div>
			<!-- /Product Single -->

			<!-- Product Single -->
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="product product-single">
					<div class="product-thumb">
						<div class="product-label">
							<span>New</span>
						</div>
						<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
						<img src="./img/ao4.jpg" alt="">
					</div>
					<div class="product-body">
						<h3 class="product-price">$32.50</h3>
						<div class="product-rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<h2 class="product-name"><a href="#">Áo Câu Lạc Bộ ...</a></h2>
						<div class="product-btns">
							<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
							<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
							<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</button>
						</div>
					</div>
				</div>
			</div>
			<!-- /Product Single -->
		</div>
		<!-- /row -->

		<!-- row -->
		<div class="row">
			<!-- banner -->
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="banner banner-2">
					<img src="./img/ao1.jpg" alt="">
					<div class="banner-caption">
						<h2 class="primary-btn">HÀNG<br>MỚI</h2>
						<button class="primary-btn">Mua Ngay</button>
					</div>
				</div>
			</div>
			<!-- /banner -->

			<!-- Product Single -->
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="product product-single">
					<div class="product-thumb">
						<div class="product-label">
							<span>New</span>
							<span class="sale">-20%</span>
						</div>
						<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
						<img src="./img/ao5.jpg" alt="">
					</div>
					<div class="product-body">
						<h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
						<div class="product-rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<h2 class="product-name"><a href="#">Áo Câu Lạc Bộ ...</a></h2>
						<div class="product-btns">
							<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
							<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
							<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</button>
						</div>
					</div>
				</div>
			</div>
			<!-- /Product Single -->

			<!-- Product Single -->
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="product product-single">
					<div class="product-thumb">
						<div class="product-label">
							<span>New</span>
							<span class="sale">-20%</span>
						</div>
						<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
						<img src="./img/ao6.jpg" alt="">
					</div>
					<div class="product-body">
						<h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
						<div class="product-rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<h2 class="product-name"><a href="#">Áo Câu Lạc Bộ ...</a></h2>
						<div class="product-btns">
							<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
							<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
							<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</button>
						</div>
					</div>
				</div>
			</div>
			<!-- /Product Single -->

			<!-- Product Single -->
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="product product-single">
					<div class="product-thumb">
						<div class="product-label">
							<span>New</span>
							<span class="sale">-20%</span>
						</div>
						<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
						<img src="./img/ao7.jpg" alt="">
					</div>
					<div class="product-body">
						<h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
						<div class="product-rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<h2 class="product-name"><a href="#">Áo Câu Lạc Bộ ...</a></h2>
						<div class="product-btns">
							<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
							<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
							<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</button>
						</div>
					</div>
				</div>
			</div>
			<!-- /Product Single -->
		</div>
		<!-- /row -->

		<!-- row -->
		<div class="row">
			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h2 class="title">Áo CLB Serie A</h2>
				</div>
			</div>
			<!-- section title -->

			<!-- Product Single -->
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="product product-single">
					<div class="product-thumb">
						<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
						<img src="./img/ao4.jpg" alt="">
					</div>
					<div class="product-body">
						<h3 class="product-price">$32.50</h3>
						<div class="product-rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<h2 class="product-name"><a href="#">Áo Câu Lạc Bộ ...</a></h2>
						<div class="product-btns">
							<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
							<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
							<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</button>
						</div>
					</div>
				</div>
			</div>
			<!-- /Product Single -->

			<!-- Product Single -->
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="product product-single">
					<div class="product-thumb">
						<div class="product-label">
							<span>New</span>
						</div>
						<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
						<img src="./img/ao3.jpg" alt="">
					</div>
					<div class="product-body">
						<h3 class="product-price">$32.50</h3>
						<div class="product-rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<h2 class="product-name"><a href="#">Áo Câu Lạc Bộ ...</a></h2>
						<div class="product-btns">
							<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
							<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
							<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</button>
						</div>
					</div>
				</div>
			</div>
			<!-- /Product Single -->

			<!-- Product Single -->
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="product product-single">
					<div class="product-thumb">
						<div class="product-label">
							<span class="sale">-20%</span>
						</div>
						<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
						<img src="./img/ao2.jpg" alt="">
					</div>
					<div class="product-body">
						<h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
						<div class="product-rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<h2 class="product-name"><a href="#">Áo Câu Lạc Bộ ...</a></h2>
						<div class="product-btns">
							<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
							<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
							<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</button>
						</div>
					</div>
				</div>
			</div>
			<!-- /Product Single -->

			<!-- Product Single -->
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="product product-single">
					<div class="product-thumb">
						<div class="product-label">
							<span>New</span>
							<span class="sale">-20%</span>
						</div>
						<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
						<img src="./img/ao1.jpg" alt="">
					</div>
					<div class="product-body">
						<h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
						<div class="product-rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<h2 class="product-name"><a href="#">Áo Câu Lạc Bộ ...</a></h2>
						<div class="product-btns">
							<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
							<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
							<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</button>
						</div>
					</div>
				</div>
			</div>
			<!-- /Product Single -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
	<!-- /section -->