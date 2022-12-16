<?php include "view/header.php"?>
<div class="privacy py-sm-5 py-4">
    <div class="container py-xl-4 py-lg-2">
            <div class="checkout-left">
				<div class="address_form_agile mt-sm-5 mt-4">
					<h4 class="mb-sm-4 mb-3">Thông tin đặt hàng</h4>
					<form action="index.php?act=billcf" method="post" class="creditly-card-form agileinfo_form">
						<?php
                         if(isset($_SESSION['user'])){
							$name = $_SESSION['user']['name'];
							$address = $_SESSION['user']['address'];
							$email = $_SESSION['user']['email'];
							$tel = $_SESSION['user']['tel'];
						 }else{
							$name="";
							$address="";
							$email="";
							$tel="";
						 }

                        ?>
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls form-group">
										<input class="billing-address-name form-control" type="text" name="name" placeholder="Điền tên" value="<?=$name?>" required="">
									</div>
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left form-group">
											<di	v class="controls">
												<input type="text" class="form-control" placeholder="Số phone" name="tel" value="<?=$tel?>" required="">
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_right form-group">
											<div class="controls">
												<input type="text" class="form-control" placeholder="Địa chỉ" name="address" value="<?=$address?>" required="">
											</div>
										</div>
									</div>
									<div class="controls form-group">
										<input type="text" class="form-control" placeholder="Email" name="email" value="<?=$email?>" required="">
									</div>
									<div class="controls form-group">
										<select class="option-w3ls" name="pttt">
											<option>Chọn hình thức giao hàng</option>
											<option value="1" name="pttt">Giao tận nhà</option>
											<option value="2" name="pttt">Nhận tại cửa hàng</option>
											

										</select>
									</div>
								</div>
								
									<input type="hidden" name="" value="">
									<input type="hidden" name="" value="">
									<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				Giỏ hàng của bạn
			</h3>		
			<!-- //tittle heading -->
			<div class="checkout-right">
				<div class="table-responsive">
					<table class="timetable_sub">
					<thead>
							
						</thead>
						<tbody>
						<?php 
                        viewcart(0); 
                        ?>
						 
						</tbody>
						</table>
						<table  class="timetable_sub">
						<thead >
							<tbody>
							<td style="border:none;" colspan="" ><input type="submit" class="btn btn-success" value="Đồng ý thanh toán" name="dongydathang"></td>
							</tbody>
						</thead></table>
						</div>
						</div>
						</div>
						</div>
						<div class="checkout-right">
</div>
									
						</div>
					</form>
					
				</div>
			</div>
        </div>
 </div>
 