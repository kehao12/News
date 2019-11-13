
				<form action="?controller=Admin&action=suaqtv<?= $MaQTV ?>" style="margin-bottom: 20px;" method="post">
					<?php foreach($data as $value){
                     if($value['idNV']==$MaQTV){
            ?>
					<div class="form-group">
						<label for="tieude">Tên quản trị viên:</label>
						<input type="text" class="form-control" name="tenqtv" value="<?php echo $value['TenNV'] ?>">
					</div>
					<div class="form-group">
						<label for="tieude">Địa chỉ quản trị viên:</label>
						<input type="text" class="form-control" name="diachi" value="<?php echo $value['DiaChi'] ?>">
					</div>
					
					<div class="form-group">
						<label for="filter">Quyền:</label>
						<select class="form-control" name="quyen" value="<?php echo $value['Quyen'] ?>" >
							<option [value]="1">Quản trị</option>
							<option [value]="0">Đăng bài</option>
							
						</select>
					</div>
					

					<div class="form-group">
						<label for="filter">Trạng thái:</label>
						<select class="form-control" name="trangthai">
							<option value="0" selected>Hoạt động</option>
							<option value="1">Ngắt hoạt động</option>
						</select>
					</div>


					<button type="submit" name="sua" class="btn btn-default btn-primary">Sửa thông tin quản trị
						viên</button>
				</form>
	