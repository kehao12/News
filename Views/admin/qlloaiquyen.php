<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quản lý thể loại</title>

    <!-- Bootstrap core CSS-->
    <link href="./resources/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="./resources/font/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="./resources/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./resources/css/sb-admin.css" rel="stylesheet">


</head>

<body id="page-top">

<?php include('header.php')?>

    <div id="wrapper">

        <!-- Sidebar -->
        <?php include('menu.php'); ?>

        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Quản lý loại người dùng</li>
                </ol>

                <!-- Page Content -->
                <?php include('thongbao.php')?>

                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i>
                        Quản lý loại người dùng
                        <button class="btn btn-info btn-sm float-right" data-toggle="modal" data-target="#create">Thêm
                            loại người dùng
                        </button>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên loại quyền</th>
                                        <th>Danh mục</th>
                                   
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên thể loại</th>
                                        <th>Danh mục</th>
                                        
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    if($data!=null){ 
                                    $j=1; foreach ($data as $value ) {
                                   ?>
                                    <tr>
                                        <td><?php echo $j++;?></td>
                                        <td style="font-size:15px;"><?php echo $value['tenloai'];?></td>
                                       
                                        <td>
                                            <?php if($value['qltl']==1){
                                                echo 'Quản lý thể loại <br>';
                                            } ?>
                                             <?php if($value['qlbv']==1){
                                                echo 'Quản lý bài viết <br>';
                                            } ?>
                                             <?php if($value['qlqtv']==1){
                                                echo 'Quản lý quản trị viên <br>';
                                            } ?>
                                             <?php if($value['qlbl']==1){
                                                echo 'Quản lý bình luận <br>';
                                            } ?>
                                            <?php if($value['qlloaiquyen']==1){
                                                echo 'Quản lý loại quyền <br>';
                                            } ?>
                                            <?php if($value['thongke']==1){
                                                echo 'Thống kê <br>';
                                            } ?>
                                        </td>
                                        <!-- <td>
                                            <div class="tt" style="margin: 0 auto; text-align: center;">
                                                <a href="#" data-toggle="modal"
                                                    data-target="#upModal<?php echo $value['id'] ?>">
                                                    <i class="fas fa-edit" style="color: green;"></i>
                                                </a>
                                                <div class="modal fade" id="upModal<?php echo $value['id'] ?>">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">

                                                          
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Sửa loại người dùng</h4>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                            </div>

                                                            
                                                            <div class="modal-body" style="text-align: left !important;">
                                                                <form
                                                                action="?controller=Admin&action=sualoai&id=<?php echo $value['id'] ?>"
                                                                    style="margin-bottom: 20px;" method="post">
            
                <div class="form-group">
                        <label for="tieude">Tên loại quyền:</label>
                        <input type="text" class="form-control" name="tenquyen" id="tenquyen" value="<?= $value['tenloai']?>" required>
                      </div>
                    <div class="form-group">
                    <label for="tieude">Danh mục quyền:</label>
                    </div>
                    
                      <div class="form-group">
                      <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck<?= $value['id']?>" name="qltl" value="1" <?php if($value['quyen1']==1){ echo 'checked';}?>>
  <label class="custom-control-label" for="customCheck<?= $value['id']?>">Quản lý thể loại</label>
</div>
                        </div>

                        <div class="form-group">
                      <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck<?= $value['id'].'a'?>" name="qlbv" value="1" <?php if($value['quyen2']==1){ echo 'checked';}?>>
  <label class="custom-control-label" for="customCheck<?= $value['id'].'a'?>">Quản lý bài viết</label>
</div>
                        </div>

                        <div class="form-group">
                      <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck<?= $value['id'].'b'?>" name="qlbl" value="1" <?php if($value['quyen3']==1){ echo 'checked';}?>>
  <label class="custom-control-label" for="customCheck<?= $value['id'].'b'?>">Quản lý bình luận</label>
</div>
                        </div>

                        <div class="form-group">
                      <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck<?= $value['id'].'c'?>" name="qlqtv" value="1" <?php if($value['quyen4']==1){ echo 'checked';}?>>
  <label class="custom-control-label" for="customCheck<?= $value['id'].'c'?>">Quản lý quản trị viên</label>
</div>
                        </div>

                        <div class="form-group">
                      <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck<?= $value['id'].'d'?>" name="qllq" value="1" <?php if($value['quyen4']==1){ echo 'checked';}?>>
  <label class="custom-control-label" for="customCheck<?= $value['id'].'c'?>">Quản lý loại quyền</label>
</div>
                        </div>

                        <div class="form-group">
                      <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck<?= $value['id'].'e'?>" name="thongke" value="1" <?php if($value['quyen4']==1){ echo 'checked';}?>>
  <label class="custom-control-label" for="customCheck<?= $value['id'].'c'?>">Thống kê</label>
</div>
                        </div>
		
                        <div class="form-group">
                                                                        <label for="filter">Trạng thái:</label>
                                                                        <select class="form-control" name="TrangThai">
                                                                            <option
                                                                                value="<?php echo $value['TrangThai'] ?>"
                                                                                selected>
                                                                                <?php if($value['TrangThai']==1) echo 'Hiện'; else echo 'Ẩn' ?>
                                                                            </option>
                                                                            <?php for ($i=1; $i < 3; $i++) { 
                            ?>
                                                                            <option value="<?php echo $i; ?>">
                                                                                <?php if($i==1) echo 'Hiện'; else echo 'Ẩn'; ?>
                                                                            </option>
                                                                            <?php }?>
                                                                        </select>
                                                                    </div>

					  
                    <button type="submit" name="them" class="btn btn-default btn-primary float-right">Sửa loại người dùng</button>
                  
                </form>
               
           
   </form>
    
                                                            </div>

                                                           
                                                            

                                                        </div>
                                                    </div>
                                                </div>
                                                
                                        </td> -->
                                    </tr>
                                    <?php }}?>
                                    <div class="modal fade" id="create">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Thêm loại người dùng</h4>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <?php include('loaiquyen/themloaiquyen.php')?>
                                                </div>

                                                <!-- Modal footer -->
                                                
                                            </div>
                                        </div>
                                    </div>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->


        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bạn muốn thoát?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Nhấn "Thoát" để đăng xuất.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Huỷ bỏ</button>
                    <a class="btn btn-primary" href="login.html">Thoát</a>
                </div>
            </div>
        </div>
    </div> -->

    <?php include('logout.php');?>

    <!-- Bootstrap core JavaScript-->
    <script src="resources/js/jquery.min.js"></script>
    <script src="resources/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="resources/js/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="resources/datatables/jquery.dataTables.js"></script>
    <script src="resources/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="resources/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="resources/js/datatables-demo.js"></script>

    <script type="text/javascript">

$(document).ready(function () {
 
window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove(); 
        <?php unset($_SESSION['success']);
        unset($_SESSION['fail']); ?>
    });
}, 5000);
 
});
</script>

<script>
    function validateform() {
        var tenquyen = document.getElementById('tenquyen').value;
        console.log(tenquyen);
 <?php foreach($data as $value){?>
        if (tenquyen == <?php echo $value['tenloai'] ?>) {
            alert("Name can't be blank");
            return false;
        } 
    <?php }?>
        
    }
</script>


</body>

</html>