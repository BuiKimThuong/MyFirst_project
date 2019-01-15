<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="../index.php">Trang Chủ</a>
<?php 
	$file_header_admin = "../login.php";
	require_once '../check_admin.php';
	if (isset($_GET['error'])) {
			echo "<h2>Thêm nhân viên thất bại</h2>";
		}
 ?>
 <form action="process_insert.php" method="post" enctype="multipart/form-data">
 	<table width="50%" border="1">
 		<tr>
 			<td>Tên nhân viên</td>
 			<td><input type="text" name="ten"></td>
 		</tr>
 		<tr>
 			<td>Giới tính</td>
 			<td>
 				<input type="radio" name="gioi_tinh" value="1">Nam<br>
 				<input type="radio" name="gioi_tinh" value="0">Nữ
 			</td>
 		</tr>
 		<tr>
 			<td>SĐT</td>
 			<td><input type="text" name="sdt"></td>
 		</tr>
 		<tr>
 			<td>email</td>
 			<td><input type="email" name="email"></td>
 		</tr>
 		<tr>
 			<td>Mật khẩu</td>
 			<td><input type="password" name="password"></td>
 		</tr>
 		<tr>
 			<td>Địa chỉ</td>
 			<td><textarea name="dia_chi"></textarea></td>
 		</tr>
 		<tr>
 			<td>Cấp độ</td>
 			<td><select name="cap_do">
 				<option value="1">Super admin</option>
 				<option value="0" selected>admin</option>
 			</select></td>
 		</tr>
 		<tr>
 			<td colspan="2" align="center"><button name="submit" value="1">Thêm nhân viên</button></td>
 		</tr>
 	</table>
 </form>
</body>
</html>