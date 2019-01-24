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
	$query = "select * from san_pham
	join cau_lac_bo
	on san_pham.ma_cau_lac_bo = cau_lac_bo.ma_cau_lac_bo
	where ten_san_pham like'%$search%' order by ma_san_pham limit $limit offset $offset";
	$result = mysqli_query($connect,$query);

	$query_count = "select count(*) from san_pham where ten_san_pham like'%$search%'";
	$result_count = mysqli_query($connect,$query_count);
	$row_count = mysqli_fetch_array($result_count);
	$count = $row_count['count(*)'];
	$total_page = ceil($count/$limit);
	?>
	<table width="100%" border="1px" align="center" >
		<caption>
			<form>
				<input type="text" name="search" value="<?php echo $search ?>">
				<button>Tìm Kiếm</button>
			</form>
		</caption>
		<tr>
			<td>Mã</td>
			<td>Tên sản phẩm</td>
			<td>Ảnh</td>
			<td>Kích cỡ</td>
			<td>Giá</td>
			<td>Mô tả</td>
			<td>Thời gian nhập</td>
			<td>Số lượng nhập</td>
			<td>Sân</td>
			<td>Mã clb</td>
			<td>Sửa</td>
			<td>Xóa</td>
		</tr>
		<?php 
		while ($row = mysqli_fetch_array($result)) {
			$ma_san_pham = $row['ma_san_pham'];
			?>
			<tr>
				<td><?php echo $row['ma_san_pham']  ?></td>
				<td><?php echo $row['ten_san_pham']  ?></td>
				<td ><img src="img/<?php echo $row['anh']  ?>" width="50px" height="50px"></td>
				<td><?php echo $row['kich_co']  ?></td>
				<td><?php echo $row['gia']  ?></td>
				<td><?php echo $row['mo_ta']  ?></td>
				<td><?php echo date("d-m-Y H:i",strtotime($row['thoi_gian_nhap_hang'])) ?></td>
				<td><?php echo $row['so_luong_da_nhap']  ?></td>
				<td><?php if ($row['san_nha'] == 0) {
					echo "sân nhà";
				} else {
					echo "sân khách";
				}
				?></td>
				<td><?php echo $row['ten_cau_lac_bo']  ?></td>
				<?php
				$query_sp = "select * from hoa_don_chi_tiet 
				where ma_san_pham = '$ma_san_pham'";
				$result_sp = mysqli_query($connect,$query_sp);
				$count_sp = mysqli_num_rows($result_sp);
				if ($count_sp == 0) { ?>
					<td><a href="form_edit.php?ma=<?php echo $row['ma_san_pham'] ?>">Sửa</a></td>
					<td><a href="delete.php?ma=<?php echo $row['ma_san_pham'] ?>&anh=<?php echo $row['anh'] ?>">Xóa</a></td>
				<?php } else { ?>
					<td colspan="2"></td>
					<?php
				}
				?>
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
		mysqli_close($connect);	
		?>
		
	</div>
	<a href="form_insert.php">Thêm</a>
</body>
</html>