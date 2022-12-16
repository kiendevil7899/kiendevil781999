<?php include "view/header.php" ?>
<!-- checkout page -->
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
						
						
						<?php 
                       
                            viewcart(1);
                        ?>
							<tr>
                            <td colspan="7" ><a href="index.php?act=bill"><input type="button" class="btn btn-success" value="Thanh toán" name=""></a>
                            <a href="index.php?act=delallcart"><input type="button" class="btn btn-primary" value="Xóa giỏ hàng" name=""></a></td>

								</td>
							
							</tr>
                            
                            
						
					</table><br>
					<tr>
							<a href="index.php"><input type="button" class="btn btn-primary" value="Tiếp tục mua hàng" name=""></a></td>
							</tr>
				</div>
			</div>
		</div>
	</div>
	<!-- //checkout page -->