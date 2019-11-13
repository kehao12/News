<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Quản lý mục tin</title>

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

	<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

		<a class="navbar-brand mr-1" href="#">Admin</a>

		<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
			<i class="fas fa-bars"></i>
		</button>

		<!-- Navbar Search -->
		<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Tìm kiếm..." aria-label="Search"
					aria-describedby="basic-addon2">
				<div class="input-group-append">
					<button class="btn btn-primary" type="button">
						<i class="fas fa-search"></i>
					</button>
				</div>
			</div>
		</form>

		<!-- Navbar -->
		<ul class="navbar-nav ml-auto ml-md-0">
			<!-- <li class="nav-item dropdown no-arrow mx-1">
				<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-bell fa-fw"></i>
					<span class="badge badge-danger">9+</span>
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
			</li> -->
			<!-- <li class="nav-item dropdown no-arrow mx-1">
				<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-envelope fa-fw"></i>
					<span class="badge badge-danger">7</span>
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
			</li> -->
			<li class="nav-item dropdown no-arrow">
				<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-user-circle fa-fw"></i>
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
					<!-- <a class="dropdown-item" href="#">Settings</a>
					<a class="dropdown-item" href="#">Activity Log</a> -->
					<!-- <div class="dropdown-divider"></div> -->
					<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Thoát</a>
				</div>
			</li>
		</ul>

	</nav>

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
					<li class="breadcrumb-item active">Quản lý danh mục</li>
					<a href="?controller=Admin&&action=themdm" class="btn btn-info btn-sm float-right"
						style="margin-left: 800px;">Tạo mới danh mục</a>
				</ol>

				<!-- Page Content -->

				<!-- <div class="card mb-3">
					<div class="card-header">
						<i class="fas fa-table"></i>
						Quản lý danh mục
						<a href="Admin-ThemCate.html" class="btn btn-info btn-sm" style="margin-left: 800px;">Thêm mục tin tức</a>
					</div>

					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>STT</th>
										<th>Tên danh mục</th>
										<th>Số danh mục con</th>
										<th>Số bài viết</th>
										<th>Thao tác</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<TH>STT</TH>
										<th>Tên danh mục</th>
										<th>Số danh mục con</th>
										<th>Số bài viết</th>
										<th>Thao tác</th>
									</tr>
								</tfoot>
								<tbody>
									<?php
												 $i=1; 
												 foreach ($data as $value) {
													?>
									<tr>
										<td><?php echo $i++;?></td>
										<td><?php echo $value['TenDM'] ?></td>
										<td></td>
										<td></td>
										<td>
											<div class="tt" style="margin: 0 auto; text-align: center;">
												<a href="">
													<i class="fas fa-edit" style="color: green;"></i>
												</a>
												<a href="">
													<i class="fas fa-trash-alt" style="color: red;margin-left: 20px;"></i>
												</a>
											</div>
										</td>
									</tr>
									<?php }?>
								</tbody>
							</table>
						</div>
					</div>
				</div> -->

				<div class="row">
					<div class="col-4">

						<div class="list-group" id="list-tab" role="tablist">
							<?php
												 foreach ($data as $value) {
													?>
							<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list"
								href="#list-<?php echo $value['idDM'] ?>" role="tab"
								aria-controls="<?php echo $value['idDM'] ?>"><?php echo $value['TenDM'] ?>

								<span
									class="badge badge-danger float-right ml-2"><?php if ($value['TrangThai'==1]) echo 'Hiện'; else echo 'Ẩn'; ?></span>
								<?php
												 foreach ($data2 as $value2) {
													 if ($value['idDM']==$value2['idDM']) {
														
													?>
								<span class="badge badge-success float-right"><?php echo $value2['SoLuong'] ?></span>
								<?php }}?>
							</a>
							<a href="?controller=Admin&action=suadm&id=<?php echo $value['idDM']; ?>"
								class="float-left">Sửa</a>
						
							<?php }?>
						</div>

					</div>

					<div class="col-8">
						<div class="tab-content" id="nav-tabContent">
							<?php
												 foreach ($data as $value) {
													?>
							<div class="tab-pane fade" id="list-<?php echo $value['idDM'] ?>" role="tabpanel"
								aria-labelledby="list-<?php echo $value['idDM'] ?>-list">
								<div class="list-group">
									
									<?php foreach($data1 as $value1){
									
										if($value['idDM']==$value1['idDM']){
										?>	

									<a href="?controller=Admin&action=themtl&id=<?php echo $value1['idDM'] ?>"
										class="float-left">-- Thêm mới thể loại</a>
									<a href="?controller=Admin&action=suatl&id=<?php echo $value1['idTL'] ?>"
										class="list-group-item list-group-item-action flex-column align-items-start">
										<div class="d-flex w-100 justify-content-between">
											<h5 class="mb-1"><?php echo $value1['TenTL'];?></h5>
											<small><?php echo $value1['NgayTao'];?></small>
										</div>
										<small><?php echo $value1['TenTL'];?></small>
									</a>
									<a href="#" data-toggle="modal" data-target="#delModal<?php echo  $value1['idTL'] ?>"
										class="float-right">Xoá</a>
										

                                                <div class="modal fade" id="delModal<?php echo $value1['idTL'] ?>"
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
                                                            <div class="modal-body">Nhấn "Xóa" để xóa thể loại
                                                                <?php echo $value1['TenTL'] ?>.</div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-secondary" type="button"
                                                                    data-dismiss="modal">Huỷ bỏ</button>
                                                                <a class="btn btn-primary"
                                                                    href="?controller=Admin&action=xoatl&id=<?php echo $value1['idTL'] ?>">Xóa</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
									<?php }} ?>
								</div>

							</div>
							<?php }?>

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

</body>

</html>