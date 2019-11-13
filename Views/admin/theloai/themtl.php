
                <form action="?controller=Admin&&action=themtl" style="margin-bottom: 20px;" method="post">
                    <div class="form-group">
                        <label for="tieude">Tên thể loại:</label>
                        <input type="text" class="form-control" name="TenTL" id="tieude" required>
					  </div>
					  <div class="form-group">
                        <label for="filter">Thứ tự:</label>
                        <select class="form-control" name="ThuTu">
                            <option value="1" selected>1</option>
							<option value="2" >2</option>
							<option value="3">3</option>
							<option value="4" >4</option>
							<option value="5">5</option>
							<option value="6" >6</option>
							<option value="7">7</option>
                            <option value="8" >8</option>
                        </select>
					</div>
					
					<div class="form-group">
                        <label for="filter">Danh mục:</label>
                        <select class="form-control" name="MaDM" required>
						<?php foreach($data1 as $value1){
							if($value1['TenDM']=='Tuyển sinh' || $value1['TenDM']=='Tin tức' ||  $value1['TenDM']=='Chuyên đề đào tạo' ){?>
                            <option value="<?php echo $value1['idDM']?>" ><?php echo $value1['TenDM']?></option>
						<?php }}?>
                        </select>
                    </div>
                    
					  
					<button type="submit" name="them1" class="btn btn-default btn-primary">Thêm mục</button>
                </form>
               
           
   </form>
    