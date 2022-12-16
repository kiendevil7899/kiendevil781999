<?php
    session_start();
	include_once "../../model/pdo.php";
	include_once "../../model/binhluan.php";
    $idpro = $_REQUEST['idpro'];
	$dsbl= show_bl($idpro);
	
?>
   
   <?php 
   if(isset($_SESSION['user'])){
	extract($_SESSION['user']);
	$username = $name;
	// echo''.$usename.'';
   }?>
	<div class="boxcon"><h4 style="margin-left:15px;font-family: roboto; position:relative;"><b style="">Bình luận</b></h4></div>
			    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
					<input type="hidden" name="idpro" value="<?=$idpro?>">
			        <textarea class="far-ay" name="noidung" cols="110" rows="5" placeholder="Gửi ý kiến, đánh giá của bạn" ></textarea>
					<input type="submit" name="guibl" value="Gửi" class="button1">
			 </form>
			 
			<?php
            if(isset($_POST['guibl'])&&($_POST['guibl'])){
                $noidung = $_POST['noidung'];
				$idpro = $_POST['idpro'];
				$iduser = $_SESSION['user']['id'];
				$ngaybl = date('h:i:sa d/m/Y');
				insert_binhluan($noidung,$iduser,$idpro,$ngaybl);
				header("Location: ".$_SERVER['HTTP_REFERER']);
			}
            ?>
            <div class="boxcon" > <h4 style="margin-left: 15px;margin-top: 30px;font-family: roboto;font-weight:bold;" class="ndbl" >Nội dung bình luận</h4></div>
    <?php
        foreach($dsbl as $bl){		
		extract ($bl);
		echo'<div class="blcon" style="margin-top: 20px;">
		 <h5 style="font-weight:bold;font-size:14pt;">'.$name.'</h5><p style="position: relative;top: -40px;left: 160px;font-size:15pt;font-faminly:initial;" ><sup>'.$ngaybl.'</sup></p>
		 <h6 style="position: relative;top: -22px;" >'.$noidung.'</h6> 
		 </div>
	 </div>';
		}
    ?>

		</div>

			 		
			  
			