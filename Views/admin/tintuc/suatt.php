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
				<div class="alert alert-success" style="width: 100%">Sửa Thành Công</div>
				<?php  } ?>
				<form action="" style="margin-bottom: 20px;" method="post">
					<?php foreach($data as $value){
					if($value['idBV']==$MaBV){	?>

					<div class="form-group">
						<input type="hidden" name="hinhtam" value="<?php echo $value['HinhAnh'] ?>">
						<input id="ckfinder-input-1" type="hidden" name="hinhanh" value="<?php echo $value['HinhAnh'] ?>" style="width:60%">
						<img id="hinhanh" src="<?php echo $value['HinhAnh'];?>" alt="" class="img-fluid"
							style="width:300px; height:200px;">
						<!-- <button id="ckfinder-popup-1" class="button-a button-a-background">Browse Server</button> -->
						<input onclick="selectFileWithCKFinder('ckfinder-input-1')" type="button" name="btnChonFile"
							id="btnChonFile" value="Chọn file" />

					</div>

					<div class="form-group">
						<label for="tieude">Tiêu đề:</label>
						<input type="text" class="form-control" value="<?php echo $value['TieuDe'];?>" required name="TieuDe">
					</div>
					<div class="form-group">
						<label for="tieude">Tác giả:</label>
						<input type="text" class="form-control" value="<?php echo $value['TacGia'];?>"  name="TacGia">
					</div>
					<div class="form-group">
						<label for="tomtat">Tóm tắt:</label>
						<input type="text" class="form-control" value="<?php echo $value['TomTat'];?>" required name="TomTat">
					</div>
					<!-- <div class="form-group">
                        <label for="file">URL hình:</label>
                        <input type="file" class="form-control" name="file">
                      </div> -->
				

				
					<div class="form-group">
						<label for="filter">Mục tin:</label>
						<select class="form-control" name="idTL">
							<?php foreach ($data2 as $value2 ) {
								foreach($data3 as $value3){
								if($value2['idTL']==$value['idTL'] && $value3['idDM']==$value2['idDM']){
											?>
							<option value="<?php echo $value2['idTL'] ?>" selected><?php echo  $value3['TenDM']." - ".$value2['TenTL'] ?>
							</option>

							<?php }}}?>
							<?php foreach ($data2 as $value2 ) {
								foreach($data3 as $value3){
								if($value3['idDM']==$value2['idDM'] && $value2['idTL']!=$value['idTL']){
										?>
							<option value="<?php echo $value2['idTL'] ?>"><?php echo  $value3['TenDM']." - ".$value2['TenTL'] ?></option>
							<?php }}}?>

						</select>
					</div>

					<!-- <div class="form-group mt-2">
						<label for="filter">Mục tin:</label>
						<select class="form-control" name="TL" required>
						<?php foreach ($data2 as $value2 ) {
								foreach($data3 as $value3){
									if($value3['idDM']==$value2['idDM']){
								if($value2['idTL']==$value['idTL']){
											?>
							<option value="<?php echo $value2['idTL'] ?>" selected><?php echo $value3['TenDM']." - ".$value2['TenTL'] ?>
							</option>

							<?php }}}}?>


							<?php foreach ($data2 as $value2 ) {
								foreach($data3 as $value3){
									if($value3['idDM']==$value2['idDM'] && $value2['idTL']!=$value['idTL'] ){
									
												?>
							<option value="<?php echo $value2['idTL'] ?>"><?php echo $value3['TenDM']." - ".$value2['TenTL'] ?></option>
							<?php }}}?>
						</select>
					</div> -->

					<textarea name="NoiDung" required class="ckeditor"
						id="ckeditor"><?php echo $value['NoiDung'] ?>    </textarea>

					<div class="form-group">
						<label for="filter">Trạng thái:</label>
						<select class="form-control" name="TrangThai">
							<option value="<?php echo $value['TrangThai'] ?>" selected>
								<?php if($value['TrangThai']==1) echo 'Hiện'; else echo 'Ẩn' ?></option>
							<?php for ($i=1; $i < 3; $i++) { 
                            ?>
							<option value="<?php echo $i; ?>"><?php if($i==1) echo 'Hiện'; else echo 'Ẩn'; ?></option>
							<?php }?>
						</select>
					</div>



					<button type="submit" name="sua" class="btn btn-default btn-primary">Đăng bài</button>


				</form>
				<?php } }?>

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
	<script>
		var inputs = document.querySelectorAll('.inputfile');
		Array.prototype.forEach.call(inputs, function (input) {
			var label = input.nextElementSibling,
				labelVal = label.innerHTML;

			input.addEventListener('change', function (e) {
				var fileName = '';
				if (this.files && this.files.length > 1)
					fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this
						.files.length);
				else
					fileName = e.target.value.split('\\').pop();

				if (fileName)
					label.querySelector('span').innerHTML = fileName;
				else
					label.innerHTML = labelVal;
			});
		});
	</script>
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

	var button1 = document.getElementById( 'ckfinder-popup-1' );
	var button2 = document.getElementById( 'ckfinder-popup-2' );

	function selectFileWithCKFinder( elementId ) {
		CKFinder.popup( {
			chooseFiles: true,
			width: 800,
			height: 600,
			onInit: function( finder ) {
				finder.on( 'files:choose', function( evt ) {
					var file = evt.data.files.first();
					var output = document.getElementById( elementId );
					output.value = file.getUrl();
					document.getElementById("hinhanh").src = output.value;
				} );

				finder.on( 'file:choose:resizedImage', function( evt ) {
					var output = document.getElementById( elementId );
					output.value = evt.data.resizedUrl;
					document.getElementById("hinhanh").src = output.value;
				} );
			}
		} );
	}
</script>


</body>

</html>