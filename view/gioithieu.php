<?php
	session_start();
    include("config.php");	
    include("chuc_nang/ham/ham.php");	
	if(isset($_POST['thong_tin_khach_hang']))
	{
		include("chuc_nang/gio_hang/thuc_hien_mua_hang.php");
	}
	if(isset($_POST['cap_nhat_gio_hang']))
	{
		include("chuc_nang/gio_hang/cap_nhat_gio_hang.php");
		trang_truoc();
	}	
    include "view/header.php"

?> 
<div class="col-md-3 logo_agile">
<h1 class="text-center" style="position: relative; left:700px; margin:auto;">
	<a href="index.php?act=gioithieu" class="font-weight-bold font-italic">
		 Giới Thiệu
	</a>
</h1>
</div>
<section id="content">
	
			<div class="container clearfix">
<p>Hệ thống thời trang Men's Clothing được thành lập từ năm 2010 chuyên may và bán các dòng sản phẩm như&nbsp;áo sơmi,&nbsp;áo thun, quần jean, quần kaki, quần tây ...&nbsp;<br></p><p>Hiện&nbsp;nay thương hiệu thời trang Men's Clothing ngày càng phát triển lớn mạnh với nhiều chi nhánh tại TP HCM và các tỉnh, thành phố lớn :<br><br><span class="_5mfr"><span class="_6qdm">📍</span></span>𝗖𝗡𝟭 : 647 Hậu Giang - P.11 - Q.6 ( &lrm;&lrm;𝟎𝟗𝟎𝟖 𝟎𝟗𝟑 𝟗𝟓𝟒 )<br><br><span class="_5mfr"><span class="_6qdm">📍</span></span>𝐂𝐍𝟐 : 507 Nguyễn Thị Thập - P.Tân Phong - Quận 7 ( 𝟎𝟗𝟑𝟔 𝟒𝟒𝟗 𝟒𝟗𝟗 )<br><br><span class="_5mfr"><span class="_6qdm">📍</span></span>𝐂𝐍𝟑 : 404 Nguyễn Trãi - P.8 - Q.5 ( &lrm;𝟎𝟗𝟎𝟖 𝟔𝟓𝟓 𝟒𝟒𝟖 )<br><br><span class="_5mfr"><span class="_6qdm">📍</span></span>𝐂𝐍𝟒 : 96 Bắc Hải - P.6 - Q.Tân Bình ( &lrm;&lrm;𝟎𝟗𝟑𝟖 𝟑𝟓𝟑 𝟒𝟕𝟒 )<br><br><span class="_5mfr"><span class="_6qdm">📍</span></span>𝐂𝐍𝟓 : 301 Âu Cơ - P.Phú Trung - Q.Tân Phú &lrm;( 𝟎𝟗𝟑𝟕 𝟐𝟐𝟓 𝟒𝟒𝟑 )<br><br><span class="_5mfr"><span class="_6qdm">📍</span></span>𝐂𝐍𝟔 : 358B Lê Văn Sỹ - P.14 - Q.3 &lrm;( 𝟎𝟗𝟑𝟔 𝟓𝟓𝟗 𝟕𝟑𝟑 )<br><br><span class="_5mfr"><span class="_6qdm">📍</span></span>𝐂𝐍𝟕 : 206 Quang Trung - P.10 - Q.Gò Vấp ( &lrm;𝟎𝟗𝟑𝟑 𝟑𝟔𝟔 𝟒𝟕𝟒 )<br><br><span class="_5mfr"><span class="_6qdm">📍</span></span>𝐂𝐍𝟖 : 78 Võ Văn Ngân - P.Bình - Thọ Q.Thủ Đức &lrm;( &lrm;𝟎𝟗𝟎𝟗 𝟕𝟐𝟒 𝟖𝟖𝟗 )<br><br><span class="_5mfr"><span class="_6qdm">📍</span></span>𝐂𝐍𝟗 : 412 Phạm Văn Thuận - P.Trung Dũng - Biên Hoà - Đồng Nai &lrm;( &lrm;𝟎𝟗𝟎𝟗 𝟔𝟑𝟑 𝟗𝟗𝟖 )<br><br><span class="_5mfr"><span class="_6qdm">📍</span></span>𝐂𝐍𝟏𝟎 : 107 Ba Cu - P.4 - Vũng Tàu &lrm;( 𝟎𝟗𝟎𝟗 𝟎𝟐𝟖 𝟒𝟗𝟗&lrm; )<br><br><span class="_5mfr"><span class="_6qdm">📍</span></span>𝐂𝐍 𝟏𝟏 : 8/10 Nguyễn Ảnh Thủ - P. Trung Mỹ Tây - Q.12 ( 𝟎𝟗𝟎𝟖 𝟖𝟓𝟎 𝟕𝟗𝟗 )<br><br><span class="_5mfr"><span class="_6qdm">📍</span></span>𝐂𝐍 𝟏𝟐 : 330 Lê Duẩn - P.Tân Chính - Q.Thanh Khê - TP. Đà Nẵng ( 𝟎𝟗𝟎𝟖 𝟒𝟒𝟏 𝟖𝟗𝟗 )</p><p><span>Tiêu chí lớn nhất Men's Clothing mong muốn sẽ đưa những sản phẩm của mình đến khách hàng với những chất liệu, mẫu mã, giá cả hợp lí nhất. Hơn thế nữa, chúng tôi muốn xây dựng một thương hiệu thời trang&nbsp;hàng đầu cho các bạn nam về nhu cầu thời trang mặc&nbsp;đẹp.</span></p><p>Đến với Men's Clothing, chúng tôi luôn tận tâm tư vấn giúp khách hàng tìm ra được những sản phẩm phù hợp và chắc chắn sẽ làm bạn hài lòng.</p><p><img src="https://file.hstatic.net/1000133495/file/img_9563_534f8da2d10a4bc8839a0ac6fe261e1a_grande.jpg"></p><p><em><strong></strong></em><br></p><p>&nbsp; &nbsp; &nbsp; &nbsp;</p><p><br></p><p>&nbsp; &nbsp;</p>
</div>
			<!-- #content end -->
		</section>