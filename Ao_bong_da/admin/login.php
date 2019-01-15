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
		<fieldset>
			<legend>Đăng nhập</legend>
			<table>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" size="30"></td>
				</tr>
				<tr>
					<td>Mật khẩu</td>
					<td><input type="password" name="mat_khau" size="30"></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><button name="submit" value="1">Đăng nhập</button></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>