<?php
include "view/header.php";
?>
<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Trang chủ</a>
						<i>|</i>
					</li>
					<li>Sản phẩm <strong><?=$tendm?></strong></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- Single Page -->
				<!-- footer first section -->
				
			<!-- tittle heading -->
			
			<!-- //tittle heading -->
                <div class="boxdm">
                <?php
                    $i = 0;
                    foreach($dssp  as $sp ){
                       extract ($sp);
                       $linksp="index.php?act=sanphamct&idsp=".$id;
                       $hinh=$img_path.$img;
                       if(($i==2)||($i==5)||($i==8)||($i==11)){
                           $mt_5 = "";
                       }else{
                           $mt_5 ="col-md-4";
                       }
                       echo '<div class="boxspcl">
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
							<input type="hidden" name="id" value="'.$id.'" >
							<input type="hidden" name="price" value="'.$price.'" >
							<input type="hidden" name="img" value="'.$img.'" >	
							<input type="submit" name="themhang" value="Thêm giỏ hàng" class="button"/>
                           </fieldset>
                       </form>	<br>						
                   </div>';
                    }
                ?>
                </div>
                
             
           
			
	