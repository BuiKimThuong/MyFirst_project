<?php 
    session_start(); 
    require("include/connect_database.php"); 
    
?>
<!DOCTYPE html>
<html lang="en">

<?php require_once 'include/head.php'; ?>
<link rel="stylesheet" type="text/css" href="css/error.css">

<body>
	<!-- HEADER -->
	<?php require_once 'include/header.php'; ?>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<?php require_once 'include/menu.php';  ?>
	<!-- /NAVIGATION -->

	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Giỏ Hàng Của Bạn</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- Cart -->
				<?php require_once 'content/cart.php'; ?>
				<!-- /Cart -->
				<div class="pull-right" style="margin-right: 15px;margin-top: 10px;">
					<a href="index.php">
						<button class="primary-btn">CHỌN THÊM SẢN PHẨM</button>
					</a>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
	<!-- Script -->
	<!-- <script>
		function kiem_tra() {
			// regex_ho_ten 
			var dem_sai = 0;
			var ho_ten = document.getElementById('ho_ten').value;
			var regex_ho_ten = /^[a-zàáâãèéêếìíòóôõùúăđĩũơưăạảấầẩẫậắằẳẵặẹẻẽềềểễệỉịọỏốồổỗộớờởỡợụủứừửữựỳỵỷỹ\s]{5,50}$/i;
			var result_ho_ten = regex_ho_ten.test(ho_ten);
			if(result_ho_ten==false){
				document.getElementById('ho_ten').style.outline = 'none';
				document.getElementById('ho_ten').style.border = 'red 1px solid';
				document.getElementById('ho_ten').focus();
				document.getElementById('loi_ho_ten').style.display = 'block';
				dem_sai = 1;
			}
			else{
				document.getElementById('ho_ten').style.outline = 'none';
				document.getElementById('ho_ten').style.border = 'green 1px solid';
				document.getElementById('loi_ho_ten').style.display = 'none';
			}

			// regex_email
			var input_email = document.getElementById('email').value;
			var regex_email = /^[a-z][a-z0-9_\.]{6,30}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$/gm;
			var result_email = regex_email.test(input_email);
			if(result_email==false){
				document.getElementById('email').style.outline = 'none';
				document.getElementById('email').style.border = 'red 1px solid';
				document.getElementById('email').focus();
				document.getElementById('loi_email').style.display = 'block';
				dem_sai = 1;
			}
			else{
				document.getElementById('email').style.outline = 'none';
				document.getElementById('email').style.border = 'green 1px solid';
				document.getElementById('loi_email').style.display = 'none';
			}

			// result_sdt
			var input_sdt = document.getElementById('sdt').value;
			var regex_sdt = /^(0(([1-9])[0-9]{8,9}))$|^(\+84(\s?([1-9])[0-9]{8,9}))$/;
			var result_sdt = regex_sdt.test(input_sdt);
			if(result_sdt==false){
				document.getElementById('sdt').style.outline = 'none';
				document.getElementById('sdt').style.border = 'red 1px solid';
				document.getElementById('sdt').focus();
				document.getElementById('loi_sdt').style.display = 'block';
				dem_sai = 1;
			}
			else{
				document.getElementById('sdt').style.outline = 'none';
				document.getElementById('sdt').style.border = 'green 1px solid';
				document.getElementById('loi_sdt').style.display = 'none';
			}

			// regex_dia_chi
			var dia_chi = document.getElementById('dia_chi').value;
			var regex_dia_chi = /^[a-zàáâãèéêếìíòóôõùúăđĩũơưăạảấầẩẫậắằẳẵặẹẻẽềềểễệỉịọỏốồổỗộớờởỡợụủứừửữựỳỵỷỹ\s]{3,50}$/i;
			var result_dia_chi = regex_dia_chi.test(dia_chi);
			if(result_dia_chi==false){
				document.getElementById('dia_chi').style.outline = 'none';
				document.getElementById('dia_chi').style.border = 'red 1px solid';
				document.getElementById('dia_chi').focus();
				document.getElementById('loi_dia_chi').style.display = 'block';
				dem_sai = 1;
			}
			else{
				document.getElementById('dia_chi').style.outline = 'none';
				document.getElementById('dia_chi').style.border = 'green 1px solid';
				document.getElementById('loi_dia_chi').style.display = 'none';
			}

			// thanh_pho
			var thanh_pho = document.getElementById('thanh_pho').value;
			if(thanh_pho==-1){
				document.getElementById('loi_thanh_pho').style.display = 'block';
				document.getElementById('thanh_pho').focus();
				dem_sai = 1;
			}
			else{
				document.getElementById('thanh_pho').style.outline = 'none';
				document.getElementById('thanh_pho').style.border = 'green 1px solid';
				document.getElementById('loi_thanh_pho').style.display = 'none';
			}
			
			if(dem_sai==1)
			{
				return false;
			}
		}
	</script> -->
	<!-- /Script -->

	<!-- FOOTER -->
	<?php require_once 'include/footer.php'; ?>
	<!-- /FOOTER -->

</body>

</html>
