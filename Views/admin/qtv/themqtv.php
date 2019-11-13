
                <form action="?controller=Admin&&action=themqtv" style="margin-bottom: 20px;" method="post">
                    <div class="form-group">
                        <label for="tieude">Tên quản trị viên:</label>
                        <input type="text" class="form-control" name="tenqtv">
                      </div>
                      <div class="form-group">
                            <label for="tieude">Địa chỉ quản trị viên:</label>
                            <input type="text" class="form-control" name="diachi">
                          </div>
                          
                                  <div class="form-group">
                                       <label for="tieude">Tên tài khoản:</label>
                                        <input type="text" class="form-control" name="tentk">
                                      </div> 
                                      <div class="form-group">
                                            <label for="tieude">Mật khẩu:</label>
                                             <input type="password" class="form-control" name="matkhau">
                                           </div> 
                                        
                      <div class="form-group">
                            <label for="filter">Quyền:</label>
                            <select class="form-control" name="quyen">
								<?php foreach($quyen as $quyen1){?>
                                <option value="<?= $quyen1['id']?>"><?= $quyen1['tenloai']?></option>
								<?php }?>
                            </select>
                        </div> 
                        
                    <div class="form-group">
                        <label for="filter">Trạng thái:</label>
                        <select class="form-control" name="trangthai">
                            <option value="1" selected>Hoạt động</option>
                            <option value="0" >Ngắt hoạt động</option>
                        </select>
                    </div>

                   
                      <button type="submit"  name="them"  class="btn btn-default btn-primary">Đăng bài</button>
                </form>
               
  