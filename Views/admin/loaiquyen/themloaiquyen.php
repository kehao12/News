
                <form action="?controller=Admin&&action=themloai" name="myform"
                style="margin-bottom: 20px;" method="post" onsubmit="return validateform()">
                    <div class="form-group">
                        <label for="tieude">Tên loại quyền:</label>
                        <input type="text" class="form-control" name="tenquyen" id="tenquyen" required>
                      </div>
                    <div class="form-group">
                    <label for="tieude">Danh mục quyền:</label>
                    </div>
                      <div class="form-group">
                      <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1" name="qltl" value="1">
  <label class="custom-control-label" for="customCheck1">Quản lý thể loại</label>
</div>
                        </div>

                        <div class="form-group">
                      <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck2" name="qlbv" value="1">
  <label class="custom-control-label" for="customCheck2">Quản lý bài viết</label>
</div>
                        </div>

                        <div class="form-group">
                      <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck3" name="qlbl" value="1">
  <label class="custom-control-label" for="customCheck3">Quản lý bình luận</label>
</div>
                        </div>

                        <div class="form-group">
                      <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck4" name="qlqtv" value="1">
  <label class="custom-control-label" for="customCheck4">Quản lý quản trị viên</label>
</div>
                        </div>
        
                        <div class="form-group">
                      <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck5" name="qllq" value="1">
  <label class="custom-control-label" for="customCheck5">Quản lý loại quyền</label>
</div>
                        </div>

                        <div class="form-group">
                      <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck6" name="thongke" value="1">
  <label class="custom-control-label" for="customCheck6">Thống kê</label>
</div>
                        </div>
                    
					  
					<button type="submit" name="them1" class="btn btn-default btn-primary float-right">Thêm loại người dùng</button>
                </form>
               
           
   
    