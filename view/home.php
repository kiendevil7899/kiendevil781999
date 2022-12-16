<!DOCTYPE html>
<html lang="en">
<head>
<title>Web bán quần áo</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
	content="Shop bán quần áo uy tín, giá rẻ, chất lượng cao" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link
		href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
		rel="stylesheet">
	<link
		href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
		rel="stylesheet">
	<!-- //web fonts -->
</head>
<body>
	<!-- top-header -->
	<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-2">
				<div class="col-lg-4 header-most-top">

				</div>
				<div class="col-lg-8 header-right mt-lg-0 mt-2" style="margin-left:-170px;">
					<!-- header lists -->
					<ul>
						<?php
					      if(isset($_SESSION['user'])){
							extract($_SESSION['user']);
						?>
                        <li class="text-center border-right text-white" >
						    <i class=""></i> Xin chào &nbsp;<?=$name?></li>

							<li class="text-center border-right text-white"><a href="index.php?act=edit_user"  class="text-white">
							<i class="fas fa-sign-in-alt mr-2"></i> Cập nhật tài khoản </a></li>

							<li class="text-center border-right text-white"><a href="index.php?act=mybill"  class="text-white">
							<i class="fas fa-sign-in-alt mr-2"></i> Đơn hàng </a></li>
							<li class="text-center border-right text-white"><a href="admin/login.php"  class="text-white">
							<i class="fas fa-sign-in-alt mr-2"></i> Quản trị </a></li>
							<li class="text-center border-right text-white"><a href="index.php?act=logout" class="text-white">
							<i class="fas fa-sign-in-alt mr-2"></i> Thoát </a></li>
							
							<li class="text-center  text-white">
							<a href="index.php?act=quenmk"   class="text-white">
								<i class="fas fa-sign-in-alt mr-2"></i> Quên mật khẩu </a>
						</li>
						</li>
						<?php
						  }else{
						  ?>
						<li class="text-center border-right text-white">
							<i class="fas fa-phone mr-2"></i> 84 24 3944 6699
						</li>
						
						<li class="text-center border-right text-white">
							<a href="index.php?act=dangnhap" data-toggle="modal" data-target="#dangnhap" class="text-white">
								<i class="fas fa-sign-in-alt mr-2"></i> Đăng nhập </a>
						</li>
						<li class="text-center border-right text-white">
							<a href="index.php?act=dangky" data-toggle="modal" data-target="#dangky" class="text-white">
								<i class="fas fa-sign-out-alt mr-2"></i>Đăng ký </a>
						</li>
						<li class="text-center border-right text-white">
							<a href="index.php?act=quenmk"   class="text-white">
								<i class="fas fa-sign-in-alt mr-2"></i> Quên mật khẩu </a>
						</li>
					</ul>
					<?php 
				        } ?>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>
	<!-- modals -->
	<!-- log in -->
	<div class="modal fade" id="dangnhap" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center">Đăng nhập</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="index.php?act=dangnhap" method="post">
						<div class="form-group">
							<label class="col-form-label">Tài khoản</label>
							<input type="text" class="form-control" placeholder=" " name="user" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Mật khẩu</label>
							<input type="password" class="form-control" placeholder=" " name="pass"
								required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" name="dangnhap" value="Đăng nhập">
						</div>

						<p class="text-center dont-do mt-3">Chưa có tài khoản?
							<a href="index.php?act=dangky" data-toggle="modal" data-target="#dangky">
								Đăng ký</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- register -->
	<div class="modal fade" id="dangky" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Đăng ký </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="index.php?act=dangky" method="post">
						<div class="form-group">
							<label class="col-form-label">Tên khách hàng</label>
							<input type="text" class="form-control" placeholder=" " name="name" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" placeholder=" " name="email" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Tên tài khoản</label>
							<input type="text" class="form-control" placeholder=" " name="user" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Mật khẩu</label>
							<input type="password" class="form-control" placeholder=" " name="pass" required="">
							<input type="hidden" class="form-control" placeholder="" name="giaohang" value="0">
						</div>
						<div class="form-group">
							<label class="col-form-label">Số điện thoại</label>
							<input type="text" class="form-control" placeholder=" " name="tel" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Địa chỉ</label>
							<input type="text" class="form-control" placeholder=" " name="address" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" name="dangky" value="Đăng ký">
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!-- //top-header -->


	<!-- header-bottom-->
	<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						<a href="index.php" class="font-weight-bold font-italic">
							Men's Clothing
						</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
						<!-- search -->
						<div class="col-10 agileits_search">
							<form class="form-inline" action="index.php?act=sanpham" method="POST">
								<input class="form-control mr-sm-2" name="kyw" type="search"
									placeholder="Tìm kiếm sản phẩm" aria-label="Search" required>
								<button class="btn my-2 my-sm-0" name="timkiem" type="submit">Tìm kiếm</button>
							</form>
						</div>
						<!-- //search -->
						<!-- cart details -->
						<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								<form action="#" method="post" class="last">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="display" value="1">
									<button class="btn w3view-cart" type="submit" name="submit" value="">
										<i class="fas fa-cart-arrow-down"></i>
									</button>
								</form>
							</div>
						</div>
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
	<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="agileits-navi_search">
					<form action="index.php?act=sanpham" method="post">
						<select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
							<option value="">Danh mục sản phẩm</option>
							<?php
                                         foreach($dsdm as $dm){
											extract($dm);
											$linkdm = "index.php?act=sanpham&iddm=".$id;
											echo'
											<option value="'.$id.'"><li>
											<span class="span"><a href="'.$linkdm.'">'.$name.'</a></span>
										</li></option>';
										 }
									?>
						</select>
					</form>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="index.php">	
								Trang chủ
							</a>
						</li>
						
						
						<li class="nav-item  mr-lg-2 mb-lg-0 mb-2">

							<a class="nav-link " href="index.php?act=lienhe" role="button" aria-haspopup="true"
								aria-expanded="false">
								Liên hệ </a>

						</li>
						<li class="nav-item  mr-lg-2 mb-lg-0 mb-2">

<a class="nav-link " href="index.php?act=gioithieu" role="button" aria-haspopup="true"
	aria-expanded="false">
	Giới thiệu </a>

</li>
						<li class="nav-item  mr-lg-2 mb-lg-0 mb-2">

							<a class="nav-link " href="index.php?act=gopy" role="button" aria-haspopup="true"
								aria-expanded="false">
								Góp ý</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>

	<!-- //navigation -->
	<!-- banner -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item item1 active">
				<div class="container">
					<div class="w3l-space-banner" style="text-align:center;" >
					<img src="view/img/banner4.jpg" alt="" style="position:relative; right:400px; width:2022px; height: 640px;">
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- //banner -->
	<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">Danh mục sản phẩm</h3>
				<!-- //tittle heading -->
				<div class="row">
					<!-- product left -->
					<div class="agileinfo-ads-display col-lg-9">
						<div class="wrapper">
							<!-- first section -->
							<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4" style="width:970px; margin-left:0px;">
								<h3 class="heading-tittle text-center font-italic">Quần Áo Thời Trang</h3>
								<div class="row" style="display: -webkit-box;display: -ms-flexbox;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -100px;margin-left:0px;" >
									<?php
									$i = 0;
                                     foreach($spnew as $sp ){
										extract ($sp);
										$linksp="index.php?act=sanphamct&idsp=".$id;
										$hinh=$img_path.$img;
										if(($i==2)||($i==5)||($i==8)||($i==11)){
											$mt_5 = "col-md-4";
										}else{
											$mt_5 ="";
										}
										echo '<div class="'.$mt_5.' product-men mt-5" style="margin-right: 10px">
										<div class="men-pro-item simpleCart_shelfItem">
											<div class="men-thumb-item text-center">
											<img style="height: 450px; width: 300px;" src="'.$hinh.'" alt="">
												<div class="men-cart-pro">
													<div class="inner-men-cart-pro">
														<a href="'.$linksp.'"
															class="link-product-add-cart">Xem sản phẩm</a>
													</div>
												</div>
											</div>
											<div class="item-info-product text-center border-top mt-4">
												<h4 class="pt-1">
													<a href="'.$linksp.'">'.$name.'</a>
												</h4>
												<div class="info-product-price my-2">
													<span class="item_price">'.$price.'<sup>vnđ</sup></span>
												</div>
												<div
													class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
													<form action="index.php?act=addtocart" method="post">
														<fieldset>
														    <input type="hidden" name="name" value="'.$name.'" />
														    <input type="hidden" name="id" value="'.$id.'" />
														    <input type="hidden" name="price" value="'.$price.'" />
														    <input type="hidden" name="img" value="'.$img.'" />		
															<input type="number" name="soluong" min="1" max="10" value="1">
															<input type="submit" name="themhang" value="Thêm giỏ hàng" class="button"/>
														</fieldset>
													</form>
												</div>
											</div>
										</div>
									</div>';
									$i+=1;
									 } 
									?>
			
									
								</div>
							</div>
							<!-- //first section -->
							<!-- first section -->
							
							<!-- //first section -->

						</div>
					</div>
					<!-- //product left -->

					<!-- product right -->
					<?php
                     include "slide.php"
					?>
									
							<!-- <div class="f-grid py-2">
								<h3 class="agileits-sear-head mb-3">Sản phẩm bán chạy</h3>
								<div class="box-scroll">
									<div class="scroll">
										<div class="row">
											<div class="col-lg-3 col-sm-2 col-3 left-mar">
												<img src="view/img/quan-boxer-kate-nam-jockey-in-hoa-tiet-1200-trang-in-1-j1200-p1s200_large.jpg"
													alt="" class="img-fluid">
											</div>
											<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
												<a href="">Quần Short khaki Nam</a>
												<a href="" class="price-mar mt-2">3,000,000vnđ</a>
												<del>5,000,000vnđ</del>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3 col-sm-2 col-3 left-mar">
												<img src="view/img/ao-thun-t-shirt-jockey-cotton-1138-xam-nhat-mel-j1138-p1s200(1)_large.jpg"
													alt="" class="img-fluid">
											</div>
											<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
												<a href="">Áo T-Shirt nam Jockey</a>
												<a href="" class="price-mar mt-2">9,000,000vnđ</a>
												<del>10,000,000vnđ</del>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3 col-sm-2 col-3 left-mar">
												<img src="view/img/ao-t-top-nam-jockey-visco-1151-xanh-duong-j1151-p1s200(2)_large.jpg"
													alt="" class="img-fluid">
											</div>
											<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
												<a href="">Áo T-Shirt nam Jockey</a>
												<a href="" class="price-mar mt-2">5,300,000vnđ</a>
												<del>6,600,000vnđ</del>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3 col-sm-2 col-3 left-mar">
												<img src="view/img/ao-t-top-nam-jockey-visco-1151-xanh-duong-j1151-p1s200(2)_large.jpg"
													alt="" class="img-fluid">
											</div>
											<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
												<a href="">Áo T-Shirt nam Jockey</a>
												<a href="" class="price-mar mt-2">5,500,000vnđ</a>
												<del>6,000,000vnđ</del>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3 col-sm-2 col-3 left-mar">
												<img src="view/img/ao-t-top-nam-jockey-visco-1151-do-do-j1151-p1s200(1)_large.jpg"
													alt="" class="img-fluid">
											</div>
											<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
												<a href="">Áo T-Shirt nam Jockey</a>
												<a href="" class="price-mar mt-2">4,000,000vnđ</a>
												<del>10,000,000vnđ</del>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3 col-sm-2 col-3 left-mar">
												<img src="view/img/quan-boxer-kate-nam-jockey-in-hoa-tiet-1200-trang-in-2-j1200-p1s200_large.jpg"
													alt="" class="img-fluid">
											</div>
											<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
												<a href="">Quần Short khaki Nam </a>
												<a href="" class="price-mar mt-2">6,000,000vnđ</a>
												<del>7,000,000vnđ</del>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3 col-sm-2 col-3 left-mar">
												<img src="view../img/jockey-ao-thun-soc-ngang-1126-soc-hong-j1126-p1s101(1)_large.jpg"
													alt="" class="img-fluid">
											</div>
											<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
												<a href="">Áo T-Shirt nam Jockey</a>
												<a href="" class="price-mar mt-2">4,000,000vnđ</a>
												<del>5,000,000vnđ</del>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3 col-sm-2 col-3 left-mar">
												<img src="view/img/quan-boxer-kate-nam-jockey-in-hoa-tiet-1200-xanh-in-2-j1200-p1s200_large.jpg"
													alt="" class="img-fluid">
											</div>
											<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
												<a href="">Quần Short khaki Nam</a>
												<a href="" class="price-mar mt-2">4,000,000vnđ</a>
												<del>5,000,000vnđ</del>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3 col-sm-2 col-3 left-mar">
												<img src="view./img/ao-thun-t-shirt-jockey-cotton-1138-xanh-duong-j1138-p1s200-1_large.jpg"
													alt="" class="img-fluid">
											</div>
											<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
												<a href="">Áo T-Shirt nam Jockey</a>
												<a href="" class="price-mar mt-2">4,800,000vnđ</a>
												<del>5,600,000vnđ</del>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3 col-sm-2 col-3 left-mar">
												<img src="view/img/ao-t-top-nam-jockey-visco-1151-xanh-duong-j1151-p1s200(2)_large.jpg"
													alt="" class="img-fluid">
											</div>
											<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
												<a href="">Áo T-Shirt nam Jockey</a>
												<a href="" class="price-mar mt-2">4,500,000vnđ</a>
												<del>5,000,000vnđ</del>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3 col-sm-2 col-3 left-mar">
												<img src="view/img/ao-t-top-nam-jockey-visco-1151-trang-melange-j1151-p1s100-1_large.jpg"
													alt="" class="img-fluid">
											</div>
											<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
												<a href="">Áo T-Shirt nam Jockey</a>
												<a href="" class="price-mar mt-2">5,500,000vnđ</a>
												<del>6,000,000vnđ</del>
											</div>
										</div>


									</div>
								</div>
							</div> -->
							<!-- //best seller -->

							<!-- <div class="f-grid py-2">
								<h3 class="agileits-sear-head mb-3">Sản phẩm bán chạy</h3>
								<div class="box-scroll">
									<div class="scroll">
										<div class="row">
											<div class="col-lg-3 col-sm-2 col-3 left-mar">
												<img src="view/img/quan-boxer-kate-nam-jockey-in-hoa-tiet-1200-trang-in-1-j1200-p1s200_large.jpg"
													alt="" class="img-fluid">
											</div>
											<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
												<a href="">Quần Short khaki Nam</a>
												<a href="" class="price-mar mt-2">3,000,000vnđ</a>
												<del>5,000,000vnđ</del>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3 col-sm-2 col-3 left-mar">
												<img src="view/img/ao-thun-t-shirt-jockey-cotton-1138-xam-nhat-mel-j1138-p1s200(1)_large.jpg"
													alt="" class="img-fluid">
											</div>
											<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
												<a href="">Áo T-Shirt nam Jockey</a>
												<a href="" class="price-mar mt-2">9,000,000vnđ</a>
												<del>10,000,000vnđ</del>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3 col-sm-2 col-3 left-mar">
												<img src="view/img/ao-t-top-nam-jockey-visco-1151-xanh-duong-j1151-p1s200(2)_large.jpg"
													alt="" class="img-fluid">
											</div>
											<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
												<a href="">Áo T-Shirt nam Jockey</a>
												<a href="" class="price-mar mt-2">5,300,000vnđ</a>
												<del>6,600,000vnđ</del>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3 col-sm-2 col-3 left-mar">
												<img src="view/img/ao-t-top-nam-jockey-visco-1151-xanh-duong-j1151-p1s200(2)_large.jpg"
													alt="" class="img-fluid">
											</div>
											<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
												<a href="">Áo T-Shirt nam Jockey</a>
												<a href="" class="price-mar mt-2">5,500,000vnđ</a>
												<del>6,000,000vnđ</del>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3 col-sm-2 col-3 left-mar">
												<img src="view/img/ao-t-top-nam-jockey-visco-1151-do-do-j1151-p1s200(1)_large.jpg"
													alt="" class="img-fluid">
											</div>
											<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
												<a href="">Áo T-Shirt nam Jockey</a>
												<a href="" class="price-mar mt-2">4,000,000vnđ</a>
												<del>10,000,000vnđ</del>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3 col-sm-2 col-3 left-mar">
												<img src="view/img/quan-boxer-kate-nam-jockey-in-hoa-tiet-1200-trang-in-2-j1200-p1s200_large.jpg"
													alt="" class="img-fluid">
											</div>
											<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
												<a href="">Quần Short khaki Nam </a>
												<a href="" class="price-mar mt-2">6,000,000vnđ</a>
												<del>7,000,000vnđ</del>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3 col-sm-2 col-3 left-mar">
												<img src="view/img/jockey-ao-thun-soc-ngang-1126-soc-hong-j1126-p1s101(1)_large.jpg"
													alt="" class="img-fluid">
											</div>
											<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
												<a href="">Áo T-Shirt nam Jockey</a>
												<a href="" class="price-mar mt-2">4,000,000vnđ</a>
												<del>5,000,000vnđ</del>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3 col-sm-2 col-3 left-mar">
												<img src="view/img/quan-boxer-kate-nam-jockey-in-hoa-tiet-1200-xanh-in-2-j1200-p1s200_large.jpg"
													alt="" class="img-fluid">
											</div>
											<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
												<a href="">Quần Short khaki Nam</a>
												<a href="" class="price-mar mt-2">4,000,000vnđ</a>
												<del>5,000,000vnđ</del>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3 col-sm-2 col-3 left-mar">
												<img src="view/img/ao-thun-t-shirt-jockey-cotton-1138-xanh-duong-j1138-p1s200-1_large.jpg"
													alt="" class="img-fluid">
											</div>
											<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
												<a href="">Áo T-Shirt nam Jockey</a>
												<a href="" class="price-mar mt-2">4,800,000vnđ</a>
												<del>5,600,000vnđ</del>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3 col-sm-2 col-3 left-mar">
												<img src="view/img/ao-t-top-nam-jockey-visco-1151-xanh-duong-j1151-p1s200(2)_large.jpg"
													alt="" class="img-fluid">
											</div>
											<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
												<a href="">Áo T-Shirt nam Jockey</a>
												<a href="" class="price-mar mt-2">4,500,000vnđ</a>
												<del>5,000,000vnđ</del>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3 col-sm-2 col-3 left-mar">
												<img src="view/img/ao-t-top-nam-jockey-visco-1151-trang-melange-j1151-p1s100-1_large.jpg"
													alt="" class="img-fluid">
											</div>
											<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
												<a href="">Áo T-Shirt nam Jockey</a>
												<a href="" class="price-mar mt-2">5,500,000vnđ</a>
												<del>6,000,000vnđ</del>
											</div>
										</div>


									</div>
								</div>
							</div> -->
							
						</div>
						<!-- //product right -->
					</div>
				</div>
		</div>
	</div>
	<!-- //top products -->

</body>
</html>
