<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Quản lý quản trị viên</title>

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
						<a href="admin.php">Dashboard</a>
					</li>
					<li class="breadcrumb-item active">Quản lý quản trị viên</li>
				</ol>

				<!-- Page Content -->
				<?php include('thongbao.php')?>

                <div class="card mb-3">
                    <div class="card-header">
                      <i class="fas fa-table"></i>
                      Quản lý quản trị viên

					  <button class="btn btn-info btn-sm float-right" data-toggle="modal" data-target="#create">Thêm quản trị viên
                        </button>
                    </div>
              
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th>STT</th>
                              <th>Tên quản trị</th>
                              <th>Địa chỉ</th>
                              <th>Tên tài khoản</th>
                              <th>Mật khẩu</th>
                              <th>Trạng thái</th>
							  <th>Chức vụ</th>
                              <th>Thao tác</th>
                            </tr>
                          </thead>
                          <tfoot>
                            <tr>
                                <th>STT</th>
                                <th>Tên quản trị</th>
                                <th>Địa chỉ</th>
                                <th>Tên tài khoản</th>
                                <th>Mật khẩu</th>
                                <th>Trạng thái</th>
								<th>Chức vụ</th>
                                <th>Thao tác</th>
                              </tr>
                         </tfoot>
                         <tbody>
                         
                          <?php 
                            $i=1;
								if($data){
                            foreach($data as $value){
                                foreach ($data1 as $value1) {
                                if($value['TaiKhoan']==$value1['TaiKhoan']){
                                  ?>
                            <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $value['TenNV']; ?></td>
                            <td><?php echo $value['DiaChi']; ?></td>
                            <td><?php echo $value['TaiKhoan']; ?></td>
                            <td><?php echo $value1['MatKhau']; ?></td>
                            <td><?php if($value1['TrangThai']==1) echo "Hoạt động"; else echo "Không hoạt động"; ?></td>
                            <td>
								<?php foreach($quyen as $quyen1){
									if($quyen1['id']==$value1['idLoai']){ echo $quyen1['tenloai']; }}?>
						
							</td>
                            <td>
							  <div class="tt" style="margin: 0 auto; text-align: center;">
							  <?php if($_SESSION['admin']!=$value['TaiKhoan']){?>
                                <a href="#" 
								data-toggle="modal" data-target="#upModal<?php echo $value['idNV'] ?>">
                                  <i class="fas fa-edit" style="color: green;"></i>
                                </a>
							  <?php }?>
							
								<div class="modal fade" id="upModal<?php echo $value['idNV'] ?>">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Sửa thông tin</h4>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body" style="text-align:left !important;">
                                                  
				<form action="?controller=Admin&action=suaqtv&id=<?php echo $value['idNV'] ?>" style="margin-bottom: 20px;" method="post">
			
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
						<select class="form-control" name="quyen" value="<?php echo $value1['idLoai'] ?>" >
						<?php foreach($quyen as $quyen1){
							if($value1['idLoai']==$quyen1['id']){?>
							<option value="<?= $quyen1['id']?>" selected><?= $quyen1['tenloai']?></option>
							<?php } else {?>
								<option value="<?= $quyen1['id']?>"><?= $quyen1['tenloai']?></option>
						<?php }}?>
						</select>
					</div>
					

					<div class="form-group">
						<label for="filter">Trạng thái:</label>
						<select class="form-control" name="trangthai">
							<option value="1" selected>Hoạt động</option>
							<option value="0">Ngắt hoạt động</option>
						</select>
					</div>


					<button type="submit" name="sua" class="btn btn-default btn-primary">Sửa thông tin quản trị
						viên</button>
				</form>
	
                                                </div>

                                              

                                            </div>
                                        </div>
                                    </div>
								<?php if($_SESSION['admin']!=$value['TaiKhoan']){?>

							
                                <a href="#" data-toggle="modal"
                                                    data-target="#delModal<?php echo $value['idNV'] ?>">
                                                    <i class="fas fa-trash-alt"
                                                        style="color: red;margin-left: 20px;"></i>
                                                </a>
                        
											<?php }?>
                                                <div class="modal fade" id="delModal<?php echo  $value['idNV'] ?>"
                                                    tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Bạn muốn
                                                                    xóa?</h5>
                                                                <button class="close" type="button" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">Nhấn "Xóa" để xóa quản trị viên 
                                                                <?php echo $value['TenNV'] ?> </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-secondary" type="button"
                                                                    data-dismiss="modal">Huỷ bỏ</button>
                                                                <a class="btn btn-primary"
                                                                    href="?controller=Admin&action=xoaqtv&id=<?php echo $value['idNV'] ?>">Xóa</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                              </div>
                            </td>
                            </tr>
                            <?php
                                }}}}
                                ?>
                          
						  <div class="modal fade" id="create">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Thêm quản trị viên</h4>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                   <?php include('qtv/themqtv.php')?>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                </div>

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

<script src="resources/js/jquery.validate.js"></script>
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





</body>

</html>
