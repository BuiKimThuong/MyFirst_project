<!DOCTYPE html>
<html>
<head>
	<title>Trang admin</title>
	<meta charset="utf-8">
</head>
<body>
	<a href="../index.php">Trang Chủ</a>
	<?php 
		$file_header_admin = "../login.php";
		require_once '../check_admin.php';
		require_once '../connect_database.php';
		if (isset($_GET['delete_error'])) {
			echo "<h2>Xoá sản phẩm thất bại</h2>";
		}
		if (isset($_GET['edit_error'])) {
		echo "<h2>Sửa sản phẩm thất bại</h2>";
		}
		$search = "";
		if (isset($_GET['search'])) {
			$search = $_GET['search'];
		}
		$limit = 5;
		$page = 1;
		if (isset($_GET['page'])) {
			$page = $_GET['page'];
		}
		$offset = ($page - 1) * $limit;
		$query = "select * from cau_lac_bo
		where ten_cau_lac_bo like'%$search%' order by ma_cau_lac_bo limit $limit offset $offset ";
		$result = mysqli_query($connect,$query);

		$query_count = "select count(*) from cau_lac_bo where ten_cau_lac_bo like'%$search%'";
		$result_count = mysqli_query($connect,$query_count);
		$row_count = mysqli_fetch_array($result_count);
		$count = $row_count['count(*)'];
		$total_page = ceil($count/$limit);
		mysqli_close($connect);
	 ?>
<table width="50%" border="1px" align="center" >
	<caption>
		<form>
			<input type="text" name="search" value="<?php echo $search ?>">
			<button>Tìm Kiếm</button>
		</form>
	</caption>
	<tr>
		<td>Mã clb</td>
		<td>Tên câu lạc bộ</td>
		<td>Sửa</td>
	</tr>
	<?php 
		while ($row = mysqli_fetch_array($result)) {
	?>
		<tr>
			<td><?php echo $row['ma_cau_lac_bo']  ?></td>
			<td><?php echo $row['ten_cau_lac_bo']  ?></td>
			<td><a href="form_edit.php?ma=<?php echo $row['ma_cau_lac_bo'] ?>">Sửa</a></td>
		</tr>
	<?php
		}
	 ?>
</table>
<div align="center">
	<?php 
		for ($i=1; $i <= $total_page ; $i++) { 
	?>
	<a href="view.php?page=<?php echo $i ?>&search=<?php echo $search ?>"><?php echo $i ?></a>
	<?php				
	}
	 ?>
	
</div>
<a href="form_insert.php">Thêm</a>
</body>
</html>