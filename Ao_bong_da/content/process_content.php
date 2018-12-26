<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	session_start(); 
	include '../include/connect_database.php';
	if (isset($_GET['action']) && $_GET['action']=="add") {
		$id = intval($_GET['id']);
		if (isset($_SESSION['cart'][$id])) {
			$_SESSION['cart'][$id]['so_luong']++;
			header('location:../index.php');  
		} else {
			$query = "select * from san_pham where ma_san_pham='$id'";
			$result = mysqli_query($connect,$query);
			$count = mysqli_num_rows($result);
			mysqli_close($connect);
			if ($count!=0) {
				$row = mysqli_fetch_array($result);
				$_SESSION['cart'][$row['ma_san_pham']]=array( 
					"so_luong" => 1, 
					"gia" => $row['gia']
				);
				header('location:../index.php');
			} 
			else {
				header('location:../index.php?error');
			}
		}
	} 
	?>
</body>
</html>

