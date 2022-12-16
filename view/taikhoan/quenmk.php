<?php
include "view/header.php"
?>
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Quên mật khẩu </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
                
				<div class="modal-body">
					<form action="index.php?act=quenmk" method="post">	
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" placeholder=" " name="email" required="">
						</div>
						<div class="right-w3l">
                            <input type="hidden" name="id" value="<?=$id?>">
							<input type="submit" class="form-control" name="guiemail" value="Gửi">
						</div>

					</form>
				</div>
			</div>
		</div>
        <p style="color: red; text-align:center; font-size:20pt;font-family:Times New Roman;">
		<?php
            if(isset($thongbao)&&($thongbao!="")){
				echo $thongbao;
			}
		?>
	</p>