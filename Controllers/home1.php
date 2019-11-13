<?php 
if(isset($_GET['action'])){
	$action=$_GET['action'];
}
else{
	$action='home';
}

switch ($action) {
	case 'home':{

		header('Location:index.php?controller=index&action=index');
		break;
	}
}
 ?>