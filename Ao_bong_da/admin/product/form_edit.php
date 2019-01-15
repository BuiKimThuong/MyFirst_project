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
	$query_clb = "select * from cau_lac_bo";
	$result_clb = mysqli_query($connect,$query_clb);

	$query = "select * from san_pham where ma_san_pham ='$ma'";
	$result = mysqli_query($connect,$query);
	$row = mysqli_fetch_array($result);
	mysqli_close($connect);
 ?>
 <form action="process_edit.php" method="post" enctype="multipart/form-data">
 	<input type="hidden" readonly name="ma" value="<?php echo $row['ma_san_pham'] ?>">
 	Tên Sản Phẩm
	<input type="text" name="ten" value="<?php echo $row['ten_san_pham'] ?>">
	<br>
	Số Lượng
	<input type="number" name="so_luong" value="<?php echo $row['so_luong_da_nhap']?>">
	<br>
	Giá
	<input type="number" name="gia" value="<?php echo $row['gia']?>">
	<br>
	Kích cỡ
 	<input type="text" name="kich_co" value="<?php echo $row['kich_co'] ?>">
	<br>
	Ảnh cũ
	<img src="img/<?php echo $row['anh'] ?>">
	<input type="hidden" name="anh_cu" value="<?php echo $row['anh'] ?>">
	<br>
	Chọn ảnh mới
	<input type="file" name="anh_moi" accept="img/*">
	<br>
	Câu lạc bộ
	<select name="ma_clb">
		<?php while ($row_clb = mysqli_fetch_array($result_clb)) { ?>
		<option value="<?php echo $row_clb['ma_cau_lac_bo'] ?>" 
			<?php  
				if ($row_clb['ma_cau_lac_bo'] == $row['ma_cau_lac_bo']) {
					echo "selected";
				}
			?> >
			<?php echo $row_clb['ten_cau_lac_bo']; ?>
		</option>
		<?php	
		} 
		?>
	</select>
	<button name="submit" value="1">Sửa sản phẩm</button>
 </form>
</body>
</html>