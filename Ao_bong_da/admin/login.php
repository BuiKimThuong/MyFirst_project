<!DOCTYPE html>
<html>
<head>
	<title>Form đăng nhập</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		if (isset($_GET['error'])) {
			echo "<h2>Sai email hoặc mật khẩu</h2>";
		}
		else if (isset($_GET['logout'])) {
			echo "<h2>Đăng xuất thành công</h2>";
		}
	 ?>
	<form action="login_process.php">
		Email
		<input type="email" name="email">
		<br>
		Mật khẩu
		<input type="password" name="mat_khau">
		<br>
		<button name="submit" value="1">Đăng nhập</button>
	</form>
</body>
</html>