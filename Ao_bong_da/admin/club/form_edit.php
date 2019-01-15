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
	require_once '../connect_database.php';
	
	$ma = $_GET['ma'];
	$query_clb = "select * from cau_lac_bo where ma_cau_lac_bo='$ma'";
	$result_clb = mysqli_query($connect,$query_clb);
	$row = mysqli_fetch_array($result_clb);
	mysqli_close($connect);
 ?>
 <form action="process_edit.php" method="post" enctype="multipart/form-data">
 	<input type="hidden" readonly name="ma" value="<?php echo $row['ma_cau_lac_bo'] ?>">
 	Tên câu lạc bộ
	<input type="text" name="ten" value="<?php echo $row['ten_cau_lac_bo'] ?>">
	<br>
	<button name="submit" value="1">Sửa câu lạc bộ</button>
 </form>
</body>
</html>