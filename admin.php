<?php
	require_once('Models/DbModel.php');
	$con= new DbModel;
	$con->connect();
	require_once('Models/AdminModel.php');
	$model= new AdminModel;	
	require_once('Models/thongke.php');
	$thongke= new thongke;

	if(isset($_GET['controller'])){
		$controller=$_GET['controller'];
	}
	else{
		$controller='home';
	}

	switch ($controller) {
		case 'Admin':
			require_once('Controllers/admin/admin.php');
			break;
		case 'home':
		{
			require_once('Controllers/home.php');
			break;
		}
		
	}



	
?>
