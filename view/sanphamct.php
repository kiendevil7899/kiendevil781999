<?php
include "view/header.php";
?>
<div class="services-breadcrumb">
<?php
            extract($onesp);
            ?>
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Trang chủ</a>
						<i>|</i>
					</li>
					<li><?=$name?></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits py-5">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			
			<!-- //tittle heading -->
			<div class="row">
				<div class="col-lg-5 col-md-8 single-right-left ">
                <?php
                    $img=$img_path.$img;

                    echo'<div class="grid images_3_of_2">
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="'.$img.'">
									<div class="thumb-image"><img src="'.$img.'" alt=""></div>
								</li>	
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>';
                    echo'
				  </div>
				  <div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h3 class="mb-3">'.$name.'</h3>
					<p class="mb-3">
						<span class="item_price">'.$price.'<sup>vnđ</sup></span><br>
						<label>Miễn phí vận chuyển</label>
					</p>
					<div class="controls form-group">
										<select class="option-w3ls" name="size">
											<option>Chọn size</option>
											<option value="1" name="size">S</option>
											<option value="2" name="size">XL</option>
											<option value="3" name="size">M</option>
											<option value="4" name="size">L</option>
										</select>
									</div>
									<div class="controls form-group">
										<select class="option-w3ls" name="color">
											<option>Chọn màu</option>
											<option value="1" name="size">Vàng</option>
											<option value="2" name="size">Xanh</option>
											<option value="3" name="size">Hồng</option>
											<option value="4" name="size">Trắng</option>
										</select>
									</div>
									<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
							<form action="index.php?act=addtocart" method="post">
								<fieldset>		
								<input type="hidden" name="name" value="'.$name.'" >
								<input type="hidden" name="id" value="'.$id.'" >
								<input type="hidden" name="price" value="'.$price.'" >
								<input type="hidden" name="img" value="'.$img.'" >
								<input type="number" name="soluong" min="1" max="10" value="1">
								<input type="submit" name="themhang" value="Thêm giỏ hàng" class="button">
								</fieldset>
							</form>
						</div>
					</div>
								</div>
								
					<div class="product-single-w3l">
                    <b>Thông tin</b>
						<p>'.$thongtin.'</p><br><br>
                        <b>Mô tả sản phẩm</b>
						<p>'.$mota.'</p>
					</div>
					
				</div>';
                ?>
			</div>
           
			<div class="container py-md-5 py-sm-4 py-3">
				<!-- footer first section -->
				<h2 class="footer-top-head-w3l font-weight-bold mb-2">Sản phẩm cùng loại</h2>
				<div class="boxct" >
				<?php
				
                   foreach ($spcungloai as $spcungloai){
					extract($spcungloai);
					$hinh=$img_path.$img;
					$linksp="index.php?act=sanphamct&idsp=".$id;
					echo
					'
					<div class="boxspcl">
					    <a href="'.$linksp.'"><br>
					    <img src="'.$hinh.'" alt="" width=200 height=250><br>
					    <h8 style="">'.$name.'</h8>
						</a><br>
						<span style="color: red;">'.$price.'<sup>vnđ</sup></span>
						<form action="index.php?act=addtocart" method="post">
                       <fieldset>
                           <input style="
                           border-radius: 4px;
                           border: none;
                           text-decoration:none;
                           font-family: inherit;
                           box-shadow: 0px 4px 8px 0px rgb(0 0 0 / 45%);
                           color: #fff;
                           background-color: #0879c9;" 
                           <input type="hidden" name="name" value="'.$name.'" >
						   <input type="number" name="soluong" min="1" max="10" value="1">
							<input type="hidden" name="id" value="'.$id.'" >
							<input type="hidden" name="price" value="'.$price.'" >
							<input type="hidden" name="img" value="'.$img.'" >			
							<input type="submit" name="themhang" value="Thêm giỏ hàng" class="button">
                           </fieldset>
                       </form>	<br>						
					</div>
					';
				   }
				?>
				</div>
				

				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script>
                    $(document).ready(function(){
                        $("#binhluan").load("view/binhluan/binhluan.php", {idpro: <?=$id?>});       
					});
                </script>
	
		
    <div class="blcon" id="binhluan" style="position: relative;top: 30px;" >
		
	</div>
	</div>
		</div>
				</div>
				</div>
				


	<!-- //Single Page -->
	