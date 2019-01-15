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
		$query = "select * from cau_lac_bo order by ma_cau_lac_bo";
		$result = mysqli_query($connect,$query);
		if (isset($_GET['error'])) {
			echo "<h2>Thêm sản phẩm thất bại</h2>";
		}
	 ?>
	<form action="process_insert.php" method="post" enctype="multipart/form-data">
		Tên sản phẩm:
		<input type="text" name="ten">
		<br>
		Ảnh:
		<input type="file" name="anh" accept="img/*">
		<br>
		Kích cỡ:
		<input type="text" name="kich_co">
		<br>
		Giá:
		<input type="number" name="gia">
		<br>
		Mô tả:
		<input type="text" name="mo_ta">
		<br>
		Số lượng nhập:
		<input type="number" name="so_luong">
		<br>
		Chọn sân:
		<select name="san">
			<option value="0">Sân nhà</option>
			<option value="1">Sân khách</option>
		</select>
		<br>
		Câu lạc bộ:
		<select name="ma_clb">
			<?php while ($row = mysqli_fetch_array($result)) { ?>
				<option value=" <?php echo $row['ma_cau_lac_bo'] ?>">
					<?php echo $row['ten_cau_lac_bo'] ?>
				</option>
			<?php
			}
			?>
			
		</select>
		<br>
		<button name="submit" value="1">Thêm sản phẩm</button>
	</form>
</body>
</html>