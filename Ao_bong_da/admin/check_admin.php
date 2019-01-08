<?php 
	session_start();
	if (empty($_SESSION['ten_admin'])) {
		header('location:login.php?error');
	}
 ?>