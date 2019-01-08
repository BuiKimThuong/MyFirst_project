<div id="menu">
	<ul>
		<li><a href="#">Xin chào: <?php echo $_SESSION['ten_admin'] ?></a></li>
		<li><a href="#">Quản lý sản phẩm</a>
			<ul class="sub-menu">
				<li><a href="product/view.php">Xem sản phẩm</a></li>
				<li><a href="product/form_insert.php">Thêm sản phẩm</a></li>
			</ul>
		</li>
		<?php if($_SESSION['cap_do']==1){ ?>
		<li><a href="#">Quản lý nhân viên</a>
			<ul class="sub-menu">
				<li><a href="quan_ly_nhan_vien/nhan_vien_view.php">Xem nhân viên</a></li>
				<li><a href="#">Thêm nhân viên</a></li>
			</ul>
		</li>
		<?php } ?>
		<li><a href="#">Thay đổi thông tin cá nhân</a></li>
		<li><a href="logout.php">Đăng xuất</a></li>
	</ul>
</div>