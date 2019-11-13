<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Quản lý tin tức</title>

	<!-- Bootstrap core CSS-->
	<link href="./resources/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template-->
	<link href="./resources/font/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

	<!-- Page level plugin CSS-->
	<link href="./resources/datatables/dataTables.bootstrap4.css" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="./resources/css/sb-admin.css" rel="stylesheet">
	<script src="./resources/js/jquery-3.3.1.min.js"></script>
	<script language="javascript" type="text/javascript" src="./resources/ckeditor/ckeditor.js"></script>
	<script language="javascript" type="text/javascript" src="./resources/ckfinder/ckfinder.js"></script>

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
		<?php include('Views\admin\menu.php'); ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<!-- Breadcrumbs-->
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="">Dashboard</a>
					</li>
					<li class="breadcrumb-item active">Quản lý quản trị viên</li>
				</ol>

				<!-- Page Content -->
				<?php if(isset($thanhcong)&& in_array('success',$thanhcong)){ ?>
				<div class="alert alert-success" style="width: 100%">Thêm Thành Công</div>
				<?php  } ?>
				<form action="" style="margin-bottom: 20px;" enctype="multipart/form-data" method="post">
					<?php foreach($data as $value){ 
                    if($value['idMH']==$MaBV){?>

					<div class="form-group">
						<input id="ckfinder-input-1" type="hidden" name="hinhanh" style="width:60%">
						<img id="hinhanh" src="./resources/img/images/avatar.jpg" alt="" class="img-fluid"
							style="width:300px; height:200px;">
						<!-- <button id="ckfinder-popup-1" class="button-a button-a-background">Browse Server</button> -->
						<input onclick="selectFileWithCKFinder('ckfinder-input-1')" type="button" name="btnChonFile"
							id="btnChonFile" value="Chọn file" />

					</div>

					<div class="form-group">
						<label for="tieude">Tên môn học:</label>
						<input type="text" class="form-control" name="TenMH" value="<?php echo $value['TenMH'] ?>">
					</div>
					<div class="form-group">
						<label for="tomtat">Thời lượng:</label>
						<input type="text" class="form-control" name="ThoiLuong"
							value="<?php echo $value['ThoiLuong'] ?>">
					</div>
					<!-- <div class="form-group">
                        <label for="file">URL hình:</label>
                        <input type="file" class="form-control" name="file">
                      </div> -->
					<div class="form-group">
						<label for="">Hình ảnh:</label>
						<input type="file" name="HinhTam">

						<input type="hidden" name="HinhAnh" value="<?php echo $value['HinhAnh'];?>">
					</div>
					<div class="form-group">
						<label for="tomtat">Nội dung:</label>
						<textarea name="NoiDung" class="ckeditor"
							id="ckeditor"><?php echo $value['NoiDung'] ?></textarea>
					</div>

					<div class="form-group">
						<label for="filter">Trạng thái:</label>
						<select class="form-control" name="TrangThai">
							<option value="0">Ẩn</option>
							<option value="1" selected>Hiện</option>
						</select>
					</div>


					<button type="submit" name="them1" class="btn btn-default btn-primary">Đăng bài</button>
				</form>


				<?php }}?>


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
	<?php include('Views\admin\logout.php');?>

	<!-- <script language="javascript">
		CKEditor.replace("content");
	</script> -->

	<!-- Bootstrap core JavaScript-->
	<script src="./resources/js/jquery.min.js"></script>
	<script src="./resources/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="./resources/js/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="./resources/js/sb-admin.min.js"></script>
	<script>
		function escapeHtml(unsafe) {
			return unsafe
				.replace(/&/g, "&amp;")
				.replace(/</g, "&lt;")
				.replace(/>/g, "&gt;")
				.replace(/"/g, "&quot;")
				.replace(/'/g, "&#039;");
		}

		var button1 = document.getElementById('ckfinder-popup-1');
		var button2 = document.getElementById('ckfinder-popup-2');

		function selectFileWithCKFinder(elementId) {
			CKFinder.popup({
				chooseFiles: true,
				width: 800,
				height: 600,
				onInit: function (finder) {
					finder.on('files:choose', function (evt) {
						var file = evt.data.files.first();
						var output = document.getElementById(elementId);
						output.value = file.getUrl();
						document.getElementById("hinhanh").src = output.value;
					});

					finder.on('file:choose:resizedImage', function (evt) {
						var output = document.getElementById(elementId);
						output.value = evt.data.resizedUrl;
						document.getElementById("hinhanh").src = output.value;
					});
				}
			});
		}
	</script>

</body>

</html>