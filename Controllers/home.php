<?php 
if(isset($_GET['action'])){
	$action=$_GET['action'];
}
else{
	$action='home';
}

switch ($action) {
	case 'home':{

		header('Location:admin.php?controller=Admin&action=index');

		break;
	}
}
 ?>