<!DOCTYPE html>
<html lang="vi">

<?php require_once 'include/head.php'; ?>

<body>
	 <?php
		if(isset($_COOKIE['ma_khach_hang'])){
			$ma = $_COOKIE['ma_khach_hang'];
			require_once 'include/connect_database.php';
			$query = "select * from khach_hang where ma_khach_hang = '$ma'";
			$result = mysqli_query($connect,$query);
			$count = mysqli_num_rows($result);
			mysqli_close($connect);
			if($count==0){
				header('location:form_login.php?error_cookie');
			}
			else{
				$row = mysqli_fetch_array($result);
				$ma           = $row['ma_khach_hang'];
				$ten          = $row['ten_khach_hang'];
				$email = $row['email'];
				$sdt = $row['sdt'];
				$ngay_sinh = $row['ngay_sinh'];
				$dia_chi = $row['dia_chi'];
				$gioi_tinh = $row['gioi_tinh'];
				session_start();
				$_SESSION['ten']          = $ten;
				$_SESSION['email'] = $email;
				$_SESSION['sdt'] = $sdt;
				$_SESSION['ngay_sinh'] = $ngay_sinh;
				$_SESSION['dia_chi'] = $dia_chi;
				$_SESSION['gioi_tinh'] = $gioi_tinh;
			}
		}
		else{
			session_start();
			$ten          = $_SESSION['ten'];
			$email = $_SESSION['email'];
			$sdt = $_SESSION['sdt'];
			$ngay_sinh = $_SESSION['ngay_sinh'];
			$dia_chi = $_SESSION['dia_chi'];
			$gioi_tinh = $_SESSION['gioi_tinh'];
			if(empty($_SESSION)){
				header('location:form_login.php?error_session');
			}
		}
		
	?>
	<!-- HEADER -->
	<?php include 'include/header.php'; ?>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<?php require_once 'include/menu.php'; ?>
	<!-- /NAVIGATION -->

	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Trang chủ</a></li>
				<li class="active">Tài Khoản</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<h1>Tên của bạn là: <?php echo $ten ?></h1>
				<h4>Ngày Sinh : <?php echo $ngay_sinh?></h4>
				<h4>Giới tính : <?php if ($gioi_tinh == 1) {
					echo "Nam";
				} else {
					echo "Nữ";
				}
				 ?></h4>
				<h4>Email : <?php echo $email ?></h4>
				<h4>SĐT : <?php echo $sdt ?></h4>
				<h4>Địa chỉ : <?php echo $dia_chi ?></h4>
				<button class="btn "><a style="color: red;" href="logout.php">Đăng xuất</a></button>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- FOOTER -->
	<?php require_once 'include/footer.php'; ?>
	<!-- /FOOTER -->
</body>

</html>
