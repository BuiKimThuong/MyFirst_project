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
			echo "<h2>Thêm sản phẩm thất bại</h2>";
		}
 ?>
 <form action="process_insert.php" method="post" enctype="multipart/form-data">
 	Tên câu lạc bộ
	<input type="text" name="ten">
	<br>
	<button name="submit" value="1">Thêm câu lạc bộ</button>
 </form>
</body>
</html>