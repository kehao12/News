
                <form action="?controller=Admin&&action=themloai" style="margin-bottom: 20px;" method="post">
                   <?php if($data){
                       foreach($data as $value){?>
                <div class="form-group">
                        <label for="tieude">Tên loại quyền:</label>
                        <input type="text" class="form-control" name="tenquyen" id="tenquyen" value="<?= $value['tenloai']?>" required>
                      </div>
                    <div class="form-group">
                    <label for="tieude">Danh mục quyền:</label>
                    </div>
                    
                      <div class="form-group">
                      <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1" name="qltl" value="1" <?php if($value['quyen1']==1){ echo 'checked';}?>>
  <label class="custom-control-label" for="customCheck1">Quản lý thể loại</label>
</div>
                        </div>

                        <div class="form-group">
                      <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck2" name="qlbv" value="1" <?php if($value['quyen2']==1){ echo 'checked';}?>>
  <label class="custom-control-label" for="customCheck2">Quản lý bài viết</label>
</div>
                        </div>

                        <div class="form-group">
                      <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck3" name="qlbl" value="1" <?php if($value['quyen3']==1){ echo 'checked';}?>>
  <label class="custom-control-label" for="customCheck3">Quản lý bình luận</label>
</div>
                        </div>

                        <div class="form-group">
                      <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck4" name="qlqtv" value="1" <?php if($value['quyen4']==1){ echo 'checked';}?>>
  <label class="custom-control-label" for="customCheck4">Quản lý quản trị viên</label>
</div>
                        </div>
		
                    
					  
                    <button type="submit" name="them1" class="btn btn-default btn-primary float-right">Thêm loại người dùng</button>
                       <?php }}?>
                </form>
               
           
   </form>
    