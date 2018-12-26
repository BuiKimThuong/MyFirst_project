 <?php 
  // kiểm tra submit khi có sản phẩm,nếu sản phẩm có sl = 0 thì xóa.
    if(isset($_POST['submit']) && isset($_POST['so_luong'])) { 
       // xóa theo phiên mã sản phẩm.
        foreach($_POST['so_luong'] as $key => $val) {
            if ($val <= 0 && count($_POST['so_luong'])==1) {
            	unset($_SESSION['cart']);
            }
            else if($val <= 0) { 
                unset($_SESSION['cart'][$key]); 
            }
            else{ 
                $_SESSION['cart'][$key]['so_luong']=$val; 
            } 
        } 
          
    } 
  	if(isset($_POST['delete_all'])) {
  		unset($_SESSION['cart']);
  	}
  	// if(isset($_POST['delete'])) {
  	// 	print_r($_POST['delete']) ;
  	// 	foreach ($_POST['delete'] as $key => $value) {
  	// 		if (count($_POST['delete'])==1) {
   //          	unset($_SESSION['cart']);
   //          }
   //          else { 
   //              unset($_SESSION['cart']['ma_san_pham']); 
   //          }
  	// 	}
  	// }
?> 
<form method="post" action="./checkout.php" class="clearfix">
	<div class="col-md-6">
		<div class="billing-details">
			<p>Bạn chưa có tài khoản ? <a href="login.php">Đăng Kí</a></p>
			<div class="section-title">
				<h3 class="title">Thông Tin Khách Hàng</h3>
			</div>
			<div class="form-group">
				<label for="ho_ten">Họ Tên:</label>
				<input class="input" type="text" name="ho_ten" id="ho_ten" placeholder="Họ tên">
				<p id="loi_ho_ten" class="loi">Tên chỉ gồm chữ và nhiều hơn 4 kí tự !</p>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input id="email" type="email" class="input" placeholder="Email" name="email">
				<p id="loi_email" class="loi">Email không hợp lệ !</p>
			</div>
			<div class="form-group">
				<label for="sdt" >SĐT</label>
				<input id="sdt" type="text" class="input" placeholder="SĐT" >
				<p id="loi_sdt" class="loi">SĐT không tồn tại !</p>
			</div>
			<div class="form-group">
				<label for="dia_chi">Địa Chỉ:</label>
				<input class="input" type="text" name="dia_chi" id="dia_chi" placeholder="Địa Chỉ">
				<p id="loi_dia_chi" class="loi">Sai địa chỉ !</p>
			</div>
			<div class="form-group">
				<label for="thanh_pho">Tỉnh/TP</label>
				<select class="input" name="thanh_pho" id="thanh_pho">
					<option disabled selected value="-1">Tỉnh/TP</option>
					<option value="0">TP.HCM</option>
					<option value="1">Hải Phòng</option>
					<option value="2">Hà Nội</option>
				</select>
				<p id="loi_thanh_pho" class="loi">Bạn chưa chọn Tỉnh/TP !</p>
				<br>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="shiping-methods">
			<div class="section-title">
				<h4 class="title">PHƯƠNG THỨC VẬN CHUYỂN</h4>
			</div>
			<div class="input-checkbox">
				<input type="radio" name="shipping" id="shipping-1" checked>
				<label for="shipping-1">Tiêu chuẩn -  Miễn Phí Ship</label>
				<div class="caption">
					<p><p>
					</div>
				</div>
				<div class="input-checkbox">
					<input type="radio" name="shipping" id="shipping-2">
					<label for="shipping-2">Siêu Tốc - Tính Phí Theo Đơn Hàng</label>
					<div class="caption">
						<p><p>
						</div>
					</div>
				</div>

				<div class="payments-methods">
					<div class="section-title">
						<h4 class="title">HÌNH THỨC THANH TOÁN</h4>
					</div>
					<div class="input-checkbox">
						<input type="radio" name="payments" id="payments-1" checked>
						<label for="payments-1">Thanh toán tiền mặt khi nhận hàng</label>
						<div class="caption">
							<p><p>
							</div>
						</div>
						<div class="input-checkbox">
							<input type="radio" name="payments" id="payments-2">
							<label for="payments-2">Thanh toán qua chuyển khoản</label>
							<div class="caption">
								<p><p>
								</div>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="payments" id="payments-3">
								<label for="payments-3">
									Thanh toán qua Ngân Lượng (ATM nội địa, Visa, Master)
								</label>
								<div class="caption">
									<p><p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<div class="order-summary clearfix">
								<div class="section-title">
									<h3 class="title">Thông Tin Giỏ Hàng</h3>
								</div>
								<div class="pull-right" style="margin-right: 15px;margin-bottom: 10px;">
										<button class="primary-btn" name="delete_all">XÓA GIỎ HÀNG</button>
								</div>
								<table class="shopping-cart-table table">
									<thead>
										<tr>
											<th>sản Phẩm</th>
											<th></th>
											<th class="text-center">Giá</th>
											<th class="text-center">Số Lượng</th>
											<th class="text-center">Tổng Cộng</th>
											<th class="text-right"></th>
										</tr>
									</thead>
									<tbody>
										<?php 
											if (isset($_SESSION['cart'])) {
												$query = "select * from san_pham where ma_san_pham in (";
												foreach ($_SESSION['cart'] as $id => $value) {
													$query =$query.$id.",";
												}
												$query = substr($query,0,-1).") order by ten_san_pham asc";
												$result = mysqli_query($connect,$query);
												$tong_tien = 0;
												while ($row = mysqli_fetch_array($result)) {
													$tong_gia = $_SESSION['cart'][$row['ma_san_pham']]['so_luong'] * $row['gia'];
													$tong_tien+= $tong_gia;

										?>
										<tr>
											<td class="thumb"><img src="./img/<?php echo $row['anh'] ?>" alt=""></td>
											<td class="details">
												<a href="#"><?php echo $row['ten_san_pham'] ?></a>
												<ul>
													<li><span>Size: <?php echo $row['kich_co'] ?></span></li>
													<li><span>Loại: <?php echo $row['mo_ta'] ?></span></li>
												</ul>
											</td>
											<td class="price text-center"><strong><?php echo $row['gia'] ?>đ</strong><br><del class="font-weak"><small></small></del></td>
											<td class="qty text-center">
												<input class="input" type="number" name="so_luong[<?php echo $row['ma_san_pham'] ?>]" value="<?php echo $_SESSION['cart'][$row['ma_san_pham']]['so_luong'] ?>">
											</td>
											<td class="total text-center"><strong class="primary-color"><?php echo $tong_gia; ?>đ</strong></td>
											<td class="text-right">
												<a href="./content/delete_product.php?ma=<?php echo $row['ma_san_pham'] ?>"><i class="fa fa-trash"></i></a>
										</tr>
										<?php
												}
											}
											else{
												$tong_gia = 0;
												$tong_tien = 0;
											}
										 ?>
									</tbody>
									<tfoot>
										<tr>
											<th class="empty" colspan="3"></th>
											<th>TỔNG TIỀN</th>
											<th colspan="2" class="sub-total"><?php echo $tong_tien ?>đ</th>
										</tr>
										<tr>
											<th class="empty" colspan="3"></th>
											<th>PHÍ SHIP</th>
											<td colspan="2">Miễn Phí</td>
										</tr>
										<tr>
											<th class="empty" colspan="3"></th>
											<th>THÀNH TIỀN</th>
											<th colspan="2" class="total"><?php echo $tong_tien ?>đ</th>
										</tr>
									</tfoot>
								</table>
								<div class="pull-right">
									<button class="primary-btn" type="submit" name="submit" onclick="return kiem_tra()">ĐẶT HÀNG</button>
								</div>
							</div>

						</div>
					</form>