
                <form action="?controller=Admin&action=suaqtv&id=<?php echo $MaTL?>" style="margin-bottom: 20px;" method="post">
                <?php foreach($data as $value){
                    if($value['idTL']==$MaTL){?>
                    <div class="form-group">
                        <label for="tieude">Tên thể loại:</label>
                        <input type="text" class="form-control" name="TenTL" value="<?php echo  $value['TenTL'] ?>" id="tieude" required> 
					  </div>
					  <div class="form-group">
                        <label for="filter">Thứ tự:</label>
                        <select class="form-control" name="ThuTu">
                            <option value="<?php echo  $value['ThuTu'] ?>" selected><?php echo  $value['ThuTu'] ?></option>
							<option value="2" >2</option>
							<option value="3">3</option>
							<option value="4" >4</option>
							<option value="5">5</option>
							<option value="6" >6</option>
							<option value="7">7</option>
                            <option value="8" >8</option>
                        </select>
                    </div>
                   
					  
					<button type="submit" name="them1" class="btn btn-default btn-primary">Sửa mục</button>
                <?php }}?>
                </form>
               
           
   </form>
     