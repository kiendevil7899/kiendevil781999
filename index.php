<?php
error_reporting(0);
ob_start();
session_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/cart.php";
include "global.php";

if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[]; 

$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();
if((isset($_GET['act']))&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch($act){
		case 'sanpham':
			if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
               $kyw=$_POST['kyw'];
			}else{
				$kyw="";
			}
			if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
              $iddm=$_GET['iddm'];
			  
			}else{
				$iddm = 0;
			}
            $dssp=loadall_sanpham($kyw,$iddm);
			$tendm=load_ten_dm($iddm);
			include "view/sanpham.php";
            break;
		case 'sanphamct':
			if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
              $id=$_GET['idsp'];
			  $onesp=loadone_sanpham($id);
			  extract($onesp);
			  $spcungloai=load_sanpham_cungloai($id,$iddm);
			  
			  include "view/sanphamct.php";
			}else{
				include "view/home.php";
			}
            
            break;
		case 'dangky':
            if(isset($_POST['dangky'])&&($_POST['dangky'])){
            $email = $_POST['email'];
            $user = $_POST['user'];
			$name = $_POST['name'];
			$pass = $_POST['pass'];
			$tel = $_POST['tel'];
			$address = $_POST['address'];
			insert_taikhoan($name,$email,$user,$pass,$tel,$address);
			$thongbao = "Đã đăng ký thành công!";
			}	
			include "view/taikhoan/dangky.php";
			break;
		case 'dangnhap':
			
			if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			$login = login($user,$pass);
			if(is_array($login)){
				$_SESSION['user']=$login;
				// $thongbao="Bạn đã đăng nhập thành công!";
				header('Location: index.php');
			}else{
				$thongbao="Tài khoản hoặc mật khẩu không đúng. Vui lòng đăng nhập lại!";
			}
			}
			include "view/taikhoan/dangky.php";
			break;
		case 'edit_user':		
			if(isset($_POST['update_user'])&&($_POST['update_user'])){
				$name = $_POST['name'];
				$email = $_POST['email'];
				$user = $_POST['user'];
				$pass = $_POST['pass'];
				$tel = $_POST['tel'];
				$address = $_POST['address'];	
				$id = $_POST['id'];		
				update_user($id,$name,$email,$user,$pass,$tel,$address);
				$_SESSION['user']=login($user,$pass);
				header('Location: index.php?act=edit_user');
				}
				include "view/taikhoan/edit_user.php";
				break;
		case 'quenmk':		
			 if(isset($_POST['guiemail'])&&($_POST['guiemail'])){
			 	$email = $_POST['email'];	
			 	$checkmail=checkmail($email);
			 	if(is_array($checkmail)){
					$thongbao="Mật khẩu của bạn là: ".$checkmail['pass'];
				}
			 	else{
					$thongbao="Email không tồn tại";
				}
			 	}
				include "view/taikhoan/quenmk.php";
				break;	
	    case 'logout':
			session_unset();
			header('Location: index.php');
            break;	
		case 'addtocart':
			if(isset($_POST['themhang'])&&($_POST['themhang'])){
				$id = $_POST['id'];
				$name = $_POST['name'];
				$img = $_POST['img'];
				$price = $_POST['price'];
				$soluong= $_POST['soluong'];
				$tt = $soluong * $price;
				$cartsp = [$id,$name,$img,$price,$soluong,$tt];
				array_push($_SESSION['mycart'],$cartsp);
			}
			include "view/cart/viewcart.php";
			break;
		case 'delcart':
			if(isset($_GET['idcart'])){
				array_splice($_SESSION['mycart'],$_GET['idcart'],1);
			}else{
				$_SESSION['mycart']=[]; 
			}
			header ('Location: index.php?act=viewcart');
			break;
		case 'delallcart':
				if(isset($_GET['idcart'])){
					array_slice($_SESSION['mycart'],$_GET['idcart'],1);
				}else{
					$_SESSION['mycart']=[]; 
				}
				header ('Location: index.php?act=viewcart');
				break;
		case 'viewcart':

			include "view/cart/viewcart.php";
			break;
		case 'bill':
			include "view/cart/bill.php";
			break;
		case 'billcf':
			//tạo billa
			if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){
				if(isset($_SESSION['user'])) $iduser=$_SESSION['user']['id'];
				else $id=0;
                $name = $_POST['name'];
				$email = $_POST['email'];
				$address = $_POST['address'];
				$tel = $_POST['tel'];
				$pttt = $_POST['pttt'];
				$ngaydathang=date('h:i:sa d/m/Y');
				$tongdonhang=tongdonhang();

				$idbill=insert_bill($iduser,$name,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang);
			//insert into cart
			   foreach($_SESSION['mycart'] as $cart){
				insert_cart($_SESSION['user']['id'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
			   }  

                  $_SESSION['cart']=[];
			}
           	$bill =loadone_bill($idbill);
			$billct=loadall_cart($idbill);
		
			include "view/cart/billcf.php";
			break;
			case 'mybill':
				$listbill=loadall_bill($_SESSION['user']['id']);
				include "view/cart/mybill.php";
				break;
			
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;
        case 'quanao':
            include "view/quanao.php";
            break;
        case 'gopy':
            include "view/gopy.php";
            break;
		
    }
	
}else{
    include "view/home.php";
}

include "view/footer.php";
?>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/63025e3454f06e12d88fe67f/1gb0k00cd';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!-- js-files -->
	<!-- jquery -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //jquery -->
	<!-- nav smooth scroll -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //nav smooth scroll -->

	<!-- popup modal (for location)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //popup modal (for location)-->
	<!-- cart-js -->
	<!--  <script src="js/minicart.js"></script> -->
	<script>
		paypals.minicarts.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

		paypals.minicarts.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- imagezoom -->
	<script src="js/imagezoom.js"></script>
	<!-- //imagezoom -->

	<!-- flexslider -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

	<script src="js/jquery.flexslider.js"></script>
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>
	<!-- //FlexSlider-->
	<!-- //password-script -->

	<!-- scroll seller -->
	<script src="js/scroll.js"></script>
	<!-- //scroll seller -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>

	<!-- //for bootstrap working -->
	<!-- //js-files -->
	