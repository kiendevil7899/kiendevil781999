<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0 " style="left: 155px;position: relative;">
						<div class="side-bar p-sm-4 p-3">
							<div class="search-hotel border-bottom py-2">
								<h3 class="agileits-sear-head mb-3">Tìm kiếm</h3>
								<form action="index.php?act=sanpham" method="POST">
									<input type="search" placeholder="Sản phẩm..." name="kyw" required="">
									<input type="submit" name="timkiem" value=" ">
								</form>
							</div>
							<!-- price -->
							<!-- //price -->

							<!-- reviews -->
							<!-- //reviews -->
							<!-- danh mục -->
							<div class="left-side border-bottom py-2">
								<h3 class="agileits-sear-head mb-3">Danh mục sản phẩm</h3>
								<ul>
									<?php
                                         foreach($dsdm as $dm){
											extract($dm);
											$linkdm = "index.php?act=sanpham&iddm=".$id;
											echo'
											<li>
											<span class="span"><a href="'.$linkdm.'">'.$name.'</a></span>
										</li>';
										 }
									?>
									<!-- <li>
										<span class="span"><a href="index.php?act=nam">Nam </a></span>
									</li>
									<li>
										<span class="span"><a href="index.php?act=nu">Nữ</a></span>
									</li>
									<li>
										<span class="span"><a href="index.php?act=pack">Pack</a></span>
									</li>
									<li>
										<span class="span"><a href="index.php?act=combo">Combo</a></span>
									</li>
									</li>
									<li>
										<span class="span"><a href="index.php?act=khuyenmai">Khuyến mãi</a></span>
									</li>

									<li>
										<span class="span"><a href="index.php?act=lienhe">Liên hệ</a></span>
									</li> -->
								</ul>
							</div>
							<!-- //danh mục -->


							<!-- best seller -->
							
										<h3 class="agileits-sear-head mb-3">Top sản phẩm bán chạy</h3>
										
												<div class="row">
							<?php
                                     foreach($dstop10 as $sp ){
										extract ($sp);
										$img=$img_path.$img;
										$linksp="index.php?act=sanphamct&idsp=".$id;
										echo '
													<div class="col-lg-3 col-sm-2 col-3 left-mar">
														<img src="'.$img.'"
															alt="" class="img-fluid"><br>
													</div>
													<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
														<a href="'.$linksp.'">'.$name.'</a>
														<a href="'.$linksp.'" class="price-mar mt-2">'.$price.'<sup>vnđ</sup></a><br>
													</div>';
									 } 
									?>
									</div>