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
                        <li class="text-center border-right text-white">
						    <i class=""></i> Xin chào &nbsp;<?=$name?></li>
							<li class="text-center border-right text-white"><a href="index.php?act=edit_user"  class="text-white">
							<i class="fas fa-sign-in-alt mr-2"></i> Cập nhật tài khoản </a></li>
							<li class="text-center border-right text-white"><a href="index.php?act=mybill"  class="text-white">
							<i class="fas fa-sign-in-alt mr-2"></i> Đơn hàng </a></li>
							<li class="text-center border-right text-white"><a href="index.php?act=logout" class="text-white">
							<i class="fas fa-sign-in-alt mr-2"></i> Thoát </a></li>
							<li class="text-center text-white">
							<a href="index.php?act=quenmk"  class="text-white">
								<i class=""></i> Quên mật khẩu </a>
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
						<li class="text-center text-white">
							<a href="index.php?act=quenmk"  class="text-white">
								<i class=""></i> Quên mật khẩu </a>
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
	<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						<a href="index.php" class="font-weight-bold font-italic">
							Trang chủ	
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
									<a href="index.php?act=bill" ><button class="btn w3view-cart" type="submit" name="submit" value="">
										<i class="fas fa-cart-arrow-down"></i>
										
									</button></a>
								</form>
							</div>
						</div>
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>