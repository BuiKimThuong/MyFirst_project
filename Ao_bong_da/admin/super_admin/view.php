<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="../index.php">Trang chủ</a>
	<?php
	$file_header_admin = "../index.php";
	require_once '../check_admin.php';
	require_once '../connect_database.php';
		//mặc định lúc đầu không có giá trị tìm kiếm
	$search = "";

		//nếu có thì truyền vào biến
	if(isset($_GET['search'])){
		$search = $_GET['search'];
	}

		//giới hạn bản ghi trên 1 trang, ví dụ ở đây là limit: 1
	$limit = 10;

		//lúc đầu ở trang 1, không đc sửa
	$page = 1;

		//nếu chưa sang trang nào thì mặc định là 1, nếu không thì lấy về
	if (isset($_GET["page"])) { 
		$page  = $_GET["page"]; 
	}
	$offset = ($page-1) * $limit; 

		//câu lệnh lấy bản ghi
	$query_select = "select * from admin 
	where cap_do = 0 and ten_admin like '%$search%'
	limit $limit offset $offset";
	$result_select = mysqli_query($connect,$query_select);

		//lấy số bản ghi dựa theo tìm kiếm
	$query_count = "select count(*) from admin
	where cap_do = 0 and ten_admin like '%$search%'";
	$result_count = mysqli_query($connect,$query_count);
	$row_count = mysqli_fetch_array($result_count);
	$count = $row_count['count(*)'];

		//lấy số trang
	$total_page = ceil($count / $limit); 
	mysqli_close($connect);
	?>
	<?php echo "<h2 align='center'>Có $count nhân viên</h2>" ?>

	<caption>
		<form>
			Tìm kiếm: 
			<input type="text" name="search" value="<?php echo $search ?>">
			<button>Tìm</button>
		</form>
	</caption>
	<br>


	<table border="1"  width="100%">
		<tr>
			<th>Mã</th>
			<th>Tên nhân viên</th>
			<th>SĐT</th>
			<th>Email</th>
			<th>Địa Chỉ</th>
			<th>Mật khẩu</th>
			<th>Giới tính</th>
		</tr>
		<?php
		$dem = 0;
		while($row = mysqli_fetch_array($result_select)){
			$dem++;
			?>
			<tr>
				<td><?php echo $dem ?></td>
				<td><?php echo $row['ten_admin'] ?></td>
				<td><?php echo $row['sdt'] ?></td>
				<td><?php echo $row['email'] ?></td>
				<td><?php echo $row['dia_chi'] ?></td>
				<td><?php echo $row['mat_khau'] ?></td>
				<td><?php if ($row['gioi_tinh'] == 1) {
					echo "Nam";
				} else {
					echo "Nữ";
				}
				?></td>
				<tr>
					<?php
				}
				?>
			</table>
			<div align='center'>
				<?php
				for ($i=1; $i<=$total_page; $i++) 
				{ 
					?> 
					<a href='view.php?page=<?php echo $i ?>&search=<?php echo $search ?>'><?php echo $i ?></a> 
					<?php
				}
				?>
			</div><br>
			<a href="insert_form.php">Thêm nhân viên</a>
		</body>
		</html>