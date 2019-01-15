<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$file_header_admin = "../login.php";
		require_once '../check_admin.php';
		require_once '../connect_database.php';
		$query = "select * from  hoa_don 
		join khach_hang on hoa_don.ma_khach_hang = khach_hang.ma_khach_hang
		join hoa_don_chi_tiet on hoa_don.ma_hoa_don = hoa_don_chi_tiet.ma_hoa_don
		join san_pham on hoa_don_chi_tiet.ma_san_pham = san_pham.ma_san_pham
		where tinh_trang =";
		if (isset($_GET['check'])) {
			$query.= "2 or tinh_trang = 3 order by thoi_gian_dat_hang";
		} else {
			$query.= "1 order by thoi_gian_dat_hang";
		}
		
		$result = mysqli_query($connect,$query);
		mysqli_close($connect);
		$array = array();
		while ($row = mysqli_fetch_array($result)) {
			$ma_hoa_don = $row['ma_hoa_don'];
			$array[$ma_hoa_don]['ten_khach_hang'] = $row['ten_khach_hang'];
			$array[$ma_hoa_don]['thoi_gian_dat_hang'] = $row['thoi_gian_dat_hang'];
			$array[$ma_hoa_don]['sdt'] = $row['sdt'];
			$array[$ma_hoa_don]['dia_chi'] = $row['dia_chi'];
			$array[$ma_hoa_don]['tinh_trang'] = $row['tinh_trang'];

			$ma_san_pham = $row['ma_san_pham'];
			$array[$ma_hoa_don]['san_pham'][$ma_san_pham]['ten_san_pham'] = $row['ten_san_pham'];
			$array[$ma_hoa_don]['san_pham'][$ma_san_pham]['so_luong'] = $row['so_luong'];
			$array[$ma_hoa_don]['san_pham'][$ma_san_pham]['gia'] = $row['gia'];

		}
	 ?>
	 <table width="100%" border="1">
	 	<tr>
	 		<th>Ngày đặt hàng</th>
			<th>Thời gian đặt hàng</th>
			<th>Sản Phẩm</th>
			<th>Thông tin Khách Hàng</th>
			<th>Duyệt</th>
			<th>Hủy</th>
	 	</tr>
	 	<?php 
	 		foreach ($array as $ma_hoa_don => $hoa_don) {
	 			$tong_tien = 0;
		 ?>
		 <tr>
		 	<td>
		 		<?php 
	 				$thoi_gian_dat_hang = $hoa_don['thoi_gian_dat_hang'];
	 				$ngay = date("d-m-Y",strtotime($thoi_gian_dat_hang));
	 				echo $ngay;
		 	 	?>
		 	 </td>
		 	 <td>
		 		<?php
	 				$gio = date("H:i",strtotime($thoi_gian_dat_hang));
	 				echo $gio;
		 	 	?>
		 	 </td>
		 	 <td>
		 	 	<ul>
		 	 		<?php foreach ($hoa_don['san_pham'] as $san_pham) { ?>
		 	 		<li>
		 	 			<?php echo $san_pham['ten_san_pham'] ?>: <?php echo $san_pham['so_luong'] ?>
		 	 		</li>
		 	 		<?php $tong_tien+= $san_pham['so_luong'] * $san_pham['gia'];
		 	 			}
		 	 		?>
		 	 	</ul>
		 	 	<b>Tổng tiền là :<?php echo $tong_tien ?></b>
		 	 </td>
		 	 <td>
		 	 	<?php echo $hoa_don['ten_khach_hang'] ?><br>
		 	 	<?php echo $hoa_don['sdt'] ?><br>
		 	 	<?php echo $hoa_don['dia_chi'] ?>
		 	 </td>
		 	 <?php if (isset($_GET['check']) && $hoa_don['tinh_trang'] == 2) { ?>
		 	 	<td align="center" colspan="2"><b>Đã duyệt</b></td>
	 	 	<?php } else if(isset($_GET['check']) && $hoa_don['tinh_trang'] == 3) { ?>
	 	 		<td align="center" colspan="2"><b>Đã hủy</b></td>
	 	 	<?php } else { ?>
	 	 		<td><a href="bill_check.php?ma_hoa_don=<?php echo $ma_hoa_don?>&kieu=duyet">Duyệt</a></td>
		 	 	<td><a href="bill_check.php?ma_hoa_don=<?php echo $ma_hoa_don?>&kieu=huy">Hủy</a></td>
		 	<?php
		 	 }
		 	  ?>
		 </tr>
		 <?php
	 		}
	 	 ?>
	 </table>
</body>
</html>