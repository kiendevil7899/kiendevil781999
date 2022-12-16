<?php include "view/header.php"?>
			<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
            <?php
                if(isset($bill)&&(is_array($bill))){
                extract($bill);
            }
            ?>    
			
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">Xem đơn hàng</h3>
			<!-- //tittle heading -->
			<div class="row"> 
			<div class="col-md-12">					
				<table class="table table-bordered ">
                <h5>- Mã đơn hàng: DAM-<?=$bill['id'];?></h5><br>
                <h5>- Ngày đặt hàng: <?=$bill['ngaydathang'];?></h5><br>
                <h5>- Tổng đơn hàng: <?=$bill['total'];?><sup>vnđ</sup></h5><br>
                <h5>- Phương thức thanh toán: <?=$bill['bill_pttt'];?></h5>
		</div>
		</div>
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						
							<div class="row">
								
							<div class="col-md-12">
								
								
								<table class="table table-bordered ">
									<tr>
										<th>Người đặt hàng</th>
										<th>Địa chỉ</th>
										<th>Email</th>
										<th>Điện thoại</th>
									</tr>
									
									<tr>
										<td><?=$bill['bill_name'];?></td>
										<td><?=$bill['bill_address'];?></td>
										<td><?=$bill['bill_email'];?></td>
										<td><?=$bill['bill_tel'];?></td>
										
									</tr>
									 
								</table>
							</div>


							<div class="col-md-12">
								<p>Chi tiết đơn hàng</p><br>
								
								<table class="table table-bordered ">
									<tr>
									<td>
									<?php
                                      bill_chi_tiet($billct);
                                    ?>
									</td>
									</tr>
								</table>
							</div>
							</div>

			
						<!-- //first section -->
					</div>
				</div>
				<!-- //product left -->
				<!-- product right -->
				
			</div>
		</div>
	</div>
	
	<!-- //top products -->