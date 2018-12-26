<?php
	session_start();
    require("include/connect_database.php");
?> 
<!DOCTYPE html>
<html lang="vi">

<?php require_once 'include/head.php'; ?>

<body>
	<?php if (isset($_GET['error'])) {
		echo "Không tồn tại sản phẩm!";
	} ?>
	<!-- HEADER -->
	<?php require_once 'include/header.php'; ?>
	<!-- /HEADER -->
	
	<!-- NAVIGATION -->
	<?php require_once 'content/menu.php' ?>
	<!-- /NAVIGATION -->
	
	<!-- CONTENT -->
	<?php require_once 'content/content.php' ?>
	<!-- /CONTENT -->
	
	<!-- FOOTER -->
	<?php require_once 'include/footer.php'; ?>
	<!-- /FOOTER -->
	
</body>

</html>
