<?php
include "view/header.php"
?>
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Cập nhật tài khoản </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
                
				<div class="modal-body">
                <?php
                    if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                        extract($_SESSION['user']);
                    }
                                                
                ?>
					<form action="index.php?act=edit_user" method="post">
						<div class="form-group">
							<label class="col-form-label">Tên khách hàng</label>
							<input type="text" class="form-control" placeholder=" " name="name" value="<?=$name?>" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" placeholder=" " name="email" value="<?=$email?>" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Tên tài khoản</label>
							<input type="text" class="form-control" placeholder=" " name="user" value="<?=$user?>" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Mật khẩu</label>
							<input type="password" class="form-control" placeholder=" " name="pass" value="<?=$pass?>" required="">
							<input type="hidden" class="form-control" placeholder="" name="giaohang" value="0">
						</div>
						<div class="form-group">
							<label class="col-form-label">Số điện thoại</label>
							<input type="text" class="form-control" placeholder=" " name="tel" value="<?=$tel?>" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Địa chỉ</label>
							<input type="text" class="form-control" placeholder=" " name="address" value="<?=$address?>" required="">
						</div>
						<div class="right-w3l">
                            <input type="hidden" name="id" value="<?=$id?>">
							<input type="submit" class="form-control" name="update_user" value="Cập nhật">
						</div>

					</form>
				</div>
			</div>
		</div>
