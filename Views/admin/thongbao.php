<?php if(isset($_SESSION['success']) && $_SESSION['success']==1){ ?>
                <div class="alert alert-success">
                    Thêm thành công
                </div>
                <?php } if(isset($_SESSION['success']) && $_SESSION['success']==2){ ?>
                    <div class="alert alert-success">
                        Sửa thành công
                </div>
                <?php } if(isset($_SESSION['success']) && $_SESSION['success']==3){?>
                
                    <div class="alert alert-success">
                    Xoá thành công
                </div>
				<?php } if(isset($_SESSION['success']) && $_SESSION['success']==4){?>
                
				<div class="alert alert-success">
				Đổi mật khẩu thành công
			</div>
			<?php }?>
                <?php if(isset($_SESSION['fail']) && $_SESSION['fail']==1){ ?>
                <div class="alert alert-danger">
                    Thêm không thành công
                </div>
                <?php } if(isset($_SESSION['fail']) && $_SESSION['fail']==2){ ?>
                    <div class="alert alert-danger">
                        Sửa không thành công
                </div>
                <?php } if(isset($_SESSION['fail']) && $_SESSION['fail']==3){?>
                
                    <div class="alert alert-danger">
                    Xoá không thành công 
                </div>

                <?php } if(isset($_SESSION['fail']) && $_SESSION['fail']==6){?>
                
				<div class="alert alert-danger">
			    Xoá không thành công còn bài viết trong thể loại
			</div>
			
				<?php } if(isset($_SESSION['fail']) && $_SESSION['fail']==4){?>
                
				<div class="alert alert-danger">
				Mật khẩu cũ không đúng
			</div>
		
			<?php } if(isset($_SESSION['fail']) && $_SESSION['fail']==5){?>
                
				<div class="alert alert-danger">
				Xác nhận mật khẩu mới không trùng
			</div>
			<?php }?>