<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Admin</title>

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
					<li class="breadcrumb-item active">Blank Page</li>
				</ol>

				<!-- Page Content -->
				<h1>Blank Page</h1>
				<hr>
				<p>This is a great starting point for new custom pages.</p>

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<footer class="sticky-footer">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright © Your Website 2018</span>
					</div>
				</div>
			</footer>

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
					<a class="btn btn-primary" href="?controller=Admin&action=logout">Thoát</a>
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
