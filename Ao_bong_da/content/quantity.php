<?php 
	$ma = $_GET['ma'];
	session_start();
	if (isset($_GET['action'])=="plus") {
		$_SESSION['cart'][$ma]['so_luong']++;
	}
	else if (count($_SESSION['cart'])==1 && $_SESSION['cart'][$ma]['so_luong']==1) {
		unset($_SESSION['cart']);
	} 
	else if ($_SESSION['cart'][$ma]['so_luong']==1) {
		unset($_SESSION['cart'][$ma]);
	}
	else {
		$_SESSION['cart'][$ma]['so_luong']--;
	}
	header('location: ../checkout.php');
 ?>