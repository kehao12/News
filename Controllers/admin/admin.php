<?php 
	include "./resources/PHPMailer-master/src/PHPMailer.php";
	include "./resources/PHPMailer-master/src/Exception.php";
	include "./resources/PHPMailer-master/src/OAuth.php";
	include  "./resources/PHPMailer-master/src/POP3.php";
	include "./resources/PHPMailer-master/src/SMTP.php";

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	

	function CovertVn($str)
{
$str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|� �|ặ|ẳ|ẵ)/", 'a', $str);
$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
$str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|� �|ợ|ở|ỡ)/", 'o', $str);
$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
$str = preg_replace("/(đ)/", 'd', $str);
$str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|� �|Ặ|Ẳ|Ẵ)/", 'A', $str);
$str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
$str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
$str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|� �|Ợ|Ở|Ỡ)/", 'O', $str);
$str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
$str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
$str = preg_replace("/(Đ)/", 'D', $str);
$str = preg_replace("/( )/", '-', $str);
return $str;
}

	function utf8tourl($text){
		$text = strtolower(CovertVn($text));
		$text = str_replace( "ß", "ss", $text);
		$text = str_replace( "%", "", $text);
		$text = preg_replace("/[^_a-zA-Z0-9 -] /", "",$text);
		$text = str_replace(array(' ', ' '), '-', $text);
		$text = str_replace("----","-",$text);
		$text = str_replace("---","-",$text);
		$text = str_replace("--","-",$text);
		return $text;
	}


if(isset($_GET['action'])) {
	$action=$_GET['action'];
}

else {
	$action='';
}

switch ($action) {
	case 'index': {
		session_start();
		if(isset($_SESSION['login'])) {
		require_once('Views/admin/adindex.php');
		}
		else 
		header('Location:admin.php?controller=Admin&action=login');
		break;
	}

	case 'login': {
		if(isset($_POST['DN'])) {
			$TenTK=$_POST['TenTK'];
			$Pass=$_POST['Pass'];
			$result=$model->login($TenTK, $Pass);
			$table="taikhoan";
			$data=$model->getAllData1AD($TenTK);
			$Quyen;
			echo $result;
			//$data=$model->fetchUser($TenTK);
			if($result==1) {
				session_start();
				$_SESSION['login']=1;
				$_SESSION['admin']=$TenTK;
				$_SESSION['pass']=$Pass;
				foreach($data as $value){
					$_SESSION['quyen']=$value['idLoai'];
					
				}
				
			

				header('Location:admin.php?controller=Admin&action=index');
			}

			else {

				header('Location:admin.php?controller=Admin&action=login');
			}

		}

		else {
			require_once('Views/admin/adlogin.php');
		}

		break;
	}

	case'logout': {
		session_start();
		unset($_SESSION['login']);
		unset($_SESSION['admin']);
		header('Location:admin.php?controller=Admin&action=login');
		break;

	}


	//Quản lý loại quyền
	case 'qlloaiquyen':{
		session_start();
		
			if(isset($_SESSION['login'])) {

				$table="loaiquyen";
				$dk=$model->getAllData($table);
				foreach($dk as $value){
					if($value['id']==$_SESSION['quyen']){
					
						if($value['qlqtv']==1){
			
				$table="loaiquyen";
		
				$data=$model->getAllData($table);
				
				require_once('Views/admin/qlloaiquyen.php');
			}
			else 
			header('Location:admin.php?controller=Admin&action=index');
		}
		
	
	}
}
	
		else 
		header('Location:admin.php?controller=Admin&action=login');
	
		

		break;
	}

	case 'themloai': {
		session_start();
		if(isset($_SESSION['login'])) {
		

			if(isset($_POST['them1'])) {
				$tenquyen=$_POST['tenquyen'];
				$table="loaiquyen";
				$dk;
				$data=$model->getAllData($table);
				foreach($data as $vl){
					if($tenquyen == $vl['tenloai'] ){
					$_SESSION['fail']=1;
					$dk=1;
					}
				}

				if($_POST['qltl']==null && $_POST['qlbv']==null && $_POST['qlqtv']==null 
				&& $_POST['qlbl']==null && $_POST['qllq']==null && $_POST['thongke']==null){
					$_SESSION['fail']=1;
					
					$dk=1;
				}
				
				if($_POST['qltl']==null){
					$qltl=0;
				} else {
					$qltl=$_POST['qltl'];
				}

				if($_POST['qlbv']==null){
					$qlbv=0;
				} else {
					$qlbv=$_POST['qlbv'];
				}

				if($_POST['qlqtv']==null){
					$qlqtv=0;
				} else {
					$qlqtv=$_POST['qlqtv'];
				}

				if($_POST['qlbl']==null){
					$qlbl=0;
				} else {
					$qlbl=$_POST['qlbl'];
				}

				if($_POST['qllq']==null){
					$qllq=0;
				} else {
					$qllq=$_POST['qllq'];
				}

				if($_POST['thongke']==null){
					$thongke=0;
				} else {
					$thongke=$_POST['thongke'];
				}
				

				
				if($dk != 1){
				$result=$model->insertLoai($tenquyen,$qltl,$qlbv,$qlqtv,$qlbl,$thongke,$qllq);
				}

				if($result) {
					$_SESSION['success']=1;
				} else 
				{
					$_SESSION['fail']=1;
				}

				header('Location:admin.php?controller=Admin&action=qlloaiquyen');
			}

		
	}
		else {
			header('Location:admin.php?controller=Admin&action=login');
		}
	

		break;
	}

	case 'sualoai': {
		session_start();
		if(isset($_SESSION['login'])) {
			if ($_SESSION['quyen']==1) {
			$id=$_GET['id'];
			$table="loaiquyen";
		
			$data=$model->getAllData($table);
			if(isset($_POST['them'])) {
				$tenquyen=$_POST['tenquyen'];
				if($_POST['qltl']==null){
					$qltl=0;
				} else {
					$qltl=$_POST['qltl'];
				}

				if($_POST['qlbv']==null){
					$qlbv=0;
				} else {
					$qlbv=$_POST['qlbv'];
				}

				if($_POST['qlqtv']==null){
					$qlqtv=0;
				} else {
					$qlqtv=$_POST['qlqtv'];
				}

				if($_POST['qlbl']==null){
					$qlbl=0;
				} else {
					$qlbl=$_POST['qlbl'];
				}
				$TrangThai=$_POST['TrangThai'];

				

				$result=$model->updateLoai($tenquyen,$qltl,$qlbv,$qlqtv,$qlbl,$TrangThai,$id);
				

				if($result) {
					$_SESSION['success']=2;
				} else 
				{
					$_SESSION['fail']=2;
				}

				header('Location:admin.php?controller=Admin&action=qlloaiquyen');
			}

			
		}
		else {
			header('Location:admin.php?controller=Admin&action=index');
		}
	}
		else {
			header('Location:admin.php?controller=Admin&action=login');
		}
	

		break;
	}



	// Quản lý quản trị viên
	case 'qlqtv': {
		session_start();
		
		if(isset($_SESSION['login'])) {

			$table="loaiquyen";
		$dk=$model->getAllData($table);
		foreach($dk as $value){
			if($value['id']==$_SESSION['quyen']){
			
				if($value['qlqtv']==1){

					$table="nhanvien";
					$table1="taikhoan";
					$data=$model->getAllData($table);
					$data1=$model->getAllData($table1);
					$quyen=$model->getAllData('loaiquyen');
					require_once('Views/admin/quanlyqtv.php');
				
				}
				else {
					header('Location:admin.php?controller=Admin&action=index');
				}
			}
	
			
			}
		}
			
		else 
		header('Location:admin.php?controller=Admin&action=login');
	
		

		break;
	}

	case 'themqtv': {
		session_start();
		if(isset($_SESSION['login'])) {
		
			$table="loaiquyen";
		$dk=$model->getAllData($table);
		foreach($dk as $value){
			if($value['id']==$_SESSION['quyen'] && $value['qlqtv']==1){
			$table="nhanvien";
			$table="taikhoan";
			$data=$model->getAllData($table);
			$quyen=$model->getAllData('loaiquyen');

			if(isset($_POST['them'])) {
				$Tenqtv=$_POST['tenqtv'];
				$Diachi=$_POST['diachi'];
				$Tentk=$_POST['tentk'];
				$Matkhau=$_POST['matkhau'];
				$Quyen=$_POST['quyen'];
				$Trangthai=$_POST['trangthai'];
				$tt=1;
				$result=$model->insertTK($Tentk, $Matkhau, $Quyen, $Trangthai);
				$result=$model->insertNV($Tenqtv, $Diachi, $tt, $Tentk);

				if($result) {
					$_SESSION['success']=1;
				} else 
				{
					$_SESSION['fail']=1;
				}

				header('Location:admin.php?controller=Admin&action=qlqtv');
				break;
			}

			
		}
		else {
			header('Location:admin.php?controller=Admin&action=index');
		}
	}
}
		else {
			header('Location:admin.php?controller=Admin&action=login');
		}
	

		break;
	}

	case 'suaqtv': {
		session_start();

		if(isset($_SESSION['login'])) {
			
			
			$table="loaiquyen";
		$dk=$model->getAllData($table);
		foreach($dk as $value){
			if($value['id']==$_SESSION['quyen'] && $value['qlqtv']==1){

			$MaQTV=$_GET['id'];
			$table="nhanvien";

			// $data=$model->getAllData($table);
			
			$data=$model->showInfo($MaQTV);

			if(isset($_POST['sua'])) {
				$Tenqtv=$_POST['tenqtv'];
				$Diachi=$_POST['diachi'];
				$Trangthai=$_POST['trangthai'];
				$Quyen=$_POST['quyen'];
				$result=$model->updateNV($MaQTV,$Tenqtv, $Diachi, $Trangthai,$Quyen);

				if($result) {
					$_SESSION['success']=2;
				} else 
				{
					$_SESSION['fail']=2;
				}
			}
			header('Location:admin.php?controller=Admin&action=qlqtv');
			break;
			
		}
		else {
			header('Location:admin.php?controller=Admin&action=index');
		}
	}
		}
		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'xoaqtv': {
		session_start();

		if(isset($_SESSION['login'])) {
			
			
			$table="loaiquyen";
		$dk=$model->getAllData($table);
		foreach($dk as $value){
			if($value['id']==$_SESSION['quyen'] && $value['qlqtv']==1){

			$MaQTV=$_GET['id'];

			if($model->deleteQTV($MaQTV)) {
				$_SESSION['success']=3;
				header('Location:admin.php?controller=Admin&action=qlqtv');
				break;
			}
			else {
				$_SESSION['fail']=3;
				header('Location:admin.php?controller=Admin&action=qlqtv');
				break;
			}
		}
		else {
			header('Location:admin.php?controller=Admin&action=index');
		}
	}
}
		else {
			header('Location:admin.php?controller=Admin&action=login');
		}
	

		break;
	}

	case 'qldm': {
		session_start();

		if(isset($_SESSION['login'])) {
			if ($_SESSION['quyen']==1) {
			$table='danhmuc';
			$table1='theloai';
			$id='ThuTu';
			$id1='idDM';
			$data=$model->getAllDataOrderBy($table, $id);
			$data1=$model->getAllDataOrderBy($table1, $id);
			$data2=$model->dem($table1, $id1);
			require_once('Views/admin/quanlydm.php');
		}
		else {
			header('Location:admin.php?controller=Admin&action=index');
		}
	}
	
		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'themdm': {
		session_start();

		if(isset($_SESSION['login'])) {
			if ($_SESSION['quyen']==1) {
			if(isset($_POST['them1'])) {
				$TenDM=$_POST['TenDM'];
				$ThuTu=$_POST['ThuTu'];
				$Trangthai=$_POST['TrangThai'];
				$result=$model->insertDM($TenDM, $ThuTu, $Trangthai);

				if($result) {
					$thanhcong[]='success';
				}
			}

			require_once('Views/admin/danhmuc/themdm.php');
		}
		else {
			header('Location:admin.php?controller=Admin&action=index');
		}
	}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}



	case 'suadm': {
		session_start();

		if(isset($_SESSION['login'])) {
			if ($_SESSION['quyen']==1) {
			$MaDM=$_GET['id'];
			$id='ThuTu';
			$table='danhmuc';
			$data=$model->getAllDataOrderBy($table, $id);

			if(isset($_POST['sua'])) {
				$TenDM=$_POST['TenDM'];
				$ThuTu=$_POST['ThuTu'];
				$Trangthai=$_POST['TrangThai'];
				$result=$model->updateDM($TenDM, $ThuTu, $Trangthai, $MaDM);

				if($result) {
					$thanhcong[]='success';
				}
			}

			require_once('Views/admin/danhmuc/suadm.php');
		}
		else {
			header('Location:admin.php?controller=Admin&action=index');
		}
	}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'xoadm': {
		session_start();

		if(isset($_SESSION['login'])) {
			if ($_SESSION['quyen']==1) {
			$MaDM=$_GET['id'];

			if($model->deleteDM($MaDM)) {
				header('Location:admin.php?controller=Admin&action=qldm');
			}
		}
		else {
			header('Location:admin.php?controller=Admin&action=index');
		}
	}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'qltl':{
		session_start();
	
		if(isset($_SESSION['login'])) {

			$table="loaiquyen";
			$dk=$model->getAllData($table);
			
			foreach($dk as $value){
				if($value['id'] == $_SESSION['quyen']){
			
			
			$table='theloai';
			$table1='danhmuc';
			$data=$model->getAllData($table);
			$data1=$model->getAllData($table1);
	
			if(isset($_POST['them1'])) {
				$TenTL=$_POST['TenTL'];
				$ThuTu=1;
				$Trangthai=1;
				$MaDM=$_POST['MaDM'];
	
				$ketqua=preg_replace('/([^\pL\.\ ]+)/u', '', strip_tags($TenTL));
				$a=trim($ketqua);
				$b=CovertVn($a);
				$TenKhongDau=utf8tourl($b);
			
				$result=$model->insertTL($TenTL, $ThuTu, $Trangthai, $MaDM, $TenKhongDau);
	
	
				// header('Location:admin.php?controller=Admin&action=qltl');
			}
	
			require_once('Views/admin/qltl.php');
			break;
		}
		
	}
}
	
		else {
			header('Location:admin.php?controller=Admin&action=login');
		}
	
		break;
	}

	case 'themtl': {
		session_start();

		if(isset($_SESSION['login'])) {
			$table="loaiquyen";
			$dk=$model->getAllData($table);
			foreach($dk as $value){
				if($value['id']==$_SESSION['quyen'] && $value['qltl']==1){
	
			
			$table='theloai';
			$table1='danhmuc';
			$data=$model->getAllData($table);
			$data1=$model->getAllData($table1);
			
			if(isset($_POST['them1'])) {
				$TenTL=$_POST['TenTL'];
				$ThuTu=1;
				$Trangthai=1;
				$MaDM=$_POST['MaDM'];

				$ketqua=preg_replace('/([^\pL\.\ ]+)/u', '', strip_tags($TenTL));
				$a=trim($ketqua);
				$b=CovertVn($a);
				$TenKhongDau=utf8tourl($b);
			
				$result=$model->insertTL($TenTL, $ThuTu, $Trangthai, $MaDM, $TenKhongDau);

				if($result) {
					$_SESSION['success']=1;
				} else 
				{
					$_SESSION['fail']=1;
				}


				header('Location:admin.php?controller=Admin&action=qltl');
				break;
			}

			require_once('Views/admin/theloai/themtl.php');
		}
		else {
			header('Location:admin.php?controller=Admin&action=index');
		}
	}
		}
		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'suatl': {
		session_start();

		if(isset($_SESSION['login'])) {
			
			$table="loaiquyen";
			$dk=$model->getAllData($table);
			foreach($dk as $value){
				if($value['id']==$_SESSION['quyen'] && $value['qltl']==1){
	

			$MaTL=$_GET['id'];
			$MaTL=$_GET['id'];
			$table='theloai';
			$table1='danhmuc';
			$data=$model->getAllData($table);
			$data1=$model->getAllData($table1);

			if(isset($_POST['them1'])) {
				$TenTL=$_POST['TenTL'];
				$ThuTu=$_POST['ThuTu'];
				$result=$model->updateTL($TenTL, $ThuTu, $MaTL);

				if($result) {
					$_SESSION['success']=2;
				} else 
				{
					$_SESSION['fail']=2;
				}


				header('Location:admin.php?controller=Admin&action=qltl');
				break;
			}

			require_once('Views/admin/theloai/suatl.php');
		}
		else {
			header('Location:admin.php?controller=Admin&action=index');
		}
	}
		}
		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'xoatl': {
		session_start();

		if(isset($_SESSION['login'])) {
			
			$table="loaiquyen";
			$dk=$model->getAllData($table);
			foreach($dk as $value){
				if($value['id']==$_SESSION['quyen'] && $value['qltl']==1){
	

			$MaTL=$_GET['id'];

			if($model->deleteTL($MaTL)) {
			
					$_SESSION['success']=3;

				header('Location:admin.php?controller=Admin&action=qltl');
				break;
			} else {
				
					$_SESSION['fail']=6;
					header('Location:admin.php?controller=Admin&action=qltl');
					break;
				
			}
		}
		else {
			header('Location:admin.php?controller=Admin&action=index');
		}
	}
}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'thongke':{
		session_start();

		if(isset($_SESSION['login'])) {
			// $MaQTV=$_SESSION['admin'];
			// $nv="nhanvien";

			// $data=$model->getAllData($table);
		
			$dk=$model->getAllData('loaiquyen');
			foreach($dk as $value){
				if($value['id']==$_SESSION['quyen']){
					if($value['qlbv']==1){
					
			$table3='danhmuc';
			$table1='theloai';
			$table='baiviet';
			$id='idDM';
			$data=$model->getAllData($table);
			$data1=$model->getAllDataOrderBy($table1, $id);
			$data3=$model->getAllData($table3);
			
			if(isset($_POST['thongke'])){
				$time=$_POST['time'];
				$sl=$_POST['soluong'];
			$tk=$thongke->getBV($time,$sl);
			}
			require_once('Views/admin/thongke.php');
					}
					else {
						header('Location:admin.php?controller=Admin&action=index');
					}
					
				}
			}
		}
		else {
			header('Location:admin.php?controller=Admin&action=login');
		}
	
	
		break;
	}

	case 'qltt': {
		session_start();

		if(isset($_SESSION['login'])) {
			// $MaQTV=$_SESSION['admin'];
			// $nv="nhanvien";

			// $data=$model->getAllData($table);
		
			$dk=$model->getAllData('loaiquyen');
			foreach($dk as $value){
				if($value['id']==$_SESSION['quyen']){
					if($value['qlbv']==1){
					
						$table3='danhmuc';
			$table1='theloai';
			$table='baiviet';
			$id='idDM';
			$data=$model->getAllData($table);
			$data1=$model->getAllDataOrderBy($table1, $id);
			$data3=$model->getAllData($table3);

			$danhmuctt=$model->getAllData('danhmuc');
		
			$theloaitt=$model->getAllDataOrderBy('theloai', 'ThuTu');
			$theloaitt1=$model->getAllData('theloai');
			require_once('Views/admin/quanlytt.php');
					}
					else {
						header('Location:admin.php?controller=Admin&action=index');
					}
					
				}
			}
		}
		else {
			header('Location:admin.php?controller=Admin&action=login');
		}
	
	
		break;
	}

	case 'suatt': {
		session_start();
		if(isset($_SESSION['login'])) {
			
			$table="loaiquyen";
			$dk=$model->getAllData($table);
			foreach($dk as $value){
				if($value['id']==$_SESSION['quyen'] && $value['qlbv']==1){
	


			if(isset($_POST['sua'])) {

				$TieuDe=$_POST['TieuDe'];
				$MaBV=$_GET['id'];
				$ketqua=preg_replace('/([^\pL\.\ ]+)/u', '', strip_tags($TieuDe));
				$a=trim($ketqua);
				$b=CovertVn($a);
				$TenKhongDau=utf8tourl($b);


				$TacGia=$_POST['TacGia'];
				$TomTat=$_POST['TomTat'];
				$NgayTao=date("d/m/Y");
				// echo $_POST['hinhanh'];
				// echo 'hinhtam'.$_POST['hinhtam'];

				
				if($_POST['hinhanh']===0){
					
					$HinhAnh=$_POST['hinhtam'];
					
				
				
				}
				else {
				
					$HinhAnh=$_POST['hinhanh'];
			
				}
				$NoiDung=$_POST['NoiDung'];
				$SoLanXem=0;
				$TrangThai=$_POST['TrangThai'];
				$idTL=$_POST['idTL'];

				$result=$model->updateBV($TieuDe, $TacGia, $TomTat, $HinhAnh, $NoiDung, $TrangThai, $idTL, $MaBV,$TenKhongDau);

				if($result) {
					$_SESSION['success']=2;
				} else 
				{
					$_SESSION['fail']=2;
				}
				header('Location:admin.php?controller=Admin&action=qltt');
				break;
			}
		}
		else {
			header('Location:admin.php?controller=Admin&action=index');
		}
	}
	}
	else {
		header('Location:admin.php?controller=Admin&action=login');
	}


			break;
		}



	case 'xoatintuc':{
		
		
		
		session_start();
		if(isset($_SESSION['login'])) {
			
			$table="loaiquyen";
			$dk=$model->getAllData($table);
			foreach($dk as $value){
				echo $value['id']==$_SESSION['quyen'] && $value['qlbv']==1;
				if($value['id']==$_SESSION['quyen'] && $value['qlbv']==1){
	
				
					$MaBV=$_GET['id'];

			if($model->deleteBV($MaBV)) {
			
					$_SESSION['success']=3;

				header('Location:admin.php?controller=Admin&action=qltt');
				break;
			} else {
				echo "abc";
				
					$_SESSION['fail']=3;
					header('Location:admin.php?controller=Admin&action=qltt');
					break;
				
			}
		}
		
	}
}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;

	}

	case 'themtt': {
		session_start();

		if(isset($_SESSION['login'])) {
			
			$table="loaiquyen";
			$dk=$model->getAllData($table);
			foreach($dk as $value){
				if($value['id']==$_SESSION['quyen'] && $value['qlbv']==1){	

			if(isset($_POST['them1'])) {

				$TieuDe=$_POST['TieuDe'];
				$ketqua=preg_replace('/([^\pL\.\ ]+)/u', '', strip_tags($TieuDe));
				$a=trim($ketqua);
				$b=CovertVn($a);
				$TenKhongDau=utf8tourl($b);			
				$TacGia=$_POST['TacGia'];
				$TomTat=$_POST['TomTat'];
				$NgayTao=date("Y/m/d");
				$HinhAnh=$_POST['hinhanh'];
				$NoiDung=$_POST['NoiDung'];
				$SoLanXem=0;
				$TrangThai=$_POST['TrangThai'];
				$idTL=$_POST['TL'];
				$TaiKhoan=$_SESSION['admin'];
				$result=$model->insertBV($TieuDe, $TacGia, $TomTat, $NgayTao, $HinhAnh, $NoiDung, $SoLanXem, $TrangThai, $idTL, $TaiKhoan,$TenKhongDau);

				if($result) {
					$_SESSION['success']=1;
				} else 
				{
					$_SESSION['fail']=1;
				}
				header('Location:admin.php?controller=Admin&action=qltt');
				break;
			}
		}
		else {
			header('Location:admin.php?controller=Admin&action=index');
		}
	}
	}
	else {
		header('Location:admin.php?controller=Admin&action=login');
	}
		break;
	}

	case 'qlbl': {
		session_start();

		if(isset($_SESSION['login'])) {

			
			$table="loaiquyen";
			$dk=$model->getAllData($table);
			
			foreach($dk as $value){
				
				if($value['id']==$_SESSION['quyen'] && $value['qlbl']==1){	
			
					$table='binhluan';
					$data=$model->getAllData($table);
					$table1='baiviet';
					$data1=$model->getAllData($table1);
		
					require_once('Views/admin/qlbl.php');
					
				} 
			
				
			}
			
			
		}
	
		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'suabl':{
		session_start();

		if(isset($_SESSION['login'])) {
			$table="loaiquyen";
			$dk=$model->getAllData($table);
			foreach($dk as $value){
				if($value['id']==$_SESSION['quyen'] && $value['qlbl']==1){	

			$MaBV=$_GET['id'];

			if($model->updateBL($MaBV)) {
				header('Location:admin.php?controller=Admin&action=qlbl');
				break;
			}
		}
		else {
			header('Location:admin.php?controller=Admin&action=index');
		}
	}
}
		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'xoabl':{
		session_start();

		if(isset($_SESSION['login'])) {
			$table="loaiquyen";
			$dk=$model->getAllData($table);
			foreach($dk as $value){
				if($value['id']==$_SESSION['quyen'] && $value['qlbl']==1){	

			$MaBV=$_GET['id'];

			if($model->deleteBL($MaBV)) {
				header('Location:admin.php?controller=Admin&action=qlbl');
				break;
			}
		}
		else {
			header('Location:admin.php?controller=Admin&action=index');
		}
	}
}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'qlmh': {
		session_start();

		if(isset($_SESSION['login'])) {
			
			$table='monhoc';
			$data=$model->getAllData($table);

			require_once('Views/admin/quanlymh.php');
		}
	
		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'themmh': {
		session_start();

		if(isset($_SESSION['login'])) {
			$table='monhoc';
			$id='ThuTu';
			$data=$model->getAllData($table);
	
			if(isset($_POST['them1'])) {
				$TenMH=$_POST['TenMH'];
				$NoiDung=$_POST['NoiDung'];
				$ThoiLuong=$_POST['ThoiLuong'];
				$HinhAnh=$_POST['hinhanh'];
				
			// 		$HinhAnh = $TenMH."_".$_FILES['HinhAnh']['name'];
			// 		$target = "./resources/index/images/".basename($HinhAnh);
			// 		$check=getimagesize($_FILES['HinhAnh']['tmp_name']);
			// 		if($check[2]){ 
			// 		if (move_uploaded_file($_FILES['HinhAnh']['tmp_name'], $target)) {
			// 		$msg = "Image uploaded successfully";
			// 	} else{
			// 		$msg = "Failed to upload image";
			// 	}
			// }
			// else {
			// 	echo '<script language="javascript">';
			// 	echo 'alert("message successfully sent")';
			// 	echo '</script>';
			// 	require_once('Views/admin/monhoc/themmh.php');
			// 	break;
			// }
			
				// $NgayTao=date("Y/m/d");
				$TrangThai=$_POST['TrangThai'];
				$result=$model->insertMH($TenMH, $NoiDung, $ThoiLuong, $HinhAnh, $TrangThai);

				if($result) {
					$thanhcong[]='success';
				}
			}

			require_once('Views/admin/monhoc/themmh.php');
		}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'suamh': {
		session_start();
		$baseUrl;
		if(isset($_SESSION['login'])) {
			$table='monhoc';
			
			$data=$model->getAllData($table);
			$MaBV=$_GET['id'];
			$data1=$model->getAllData1MH($MaBV);
	
			if(isset($_POST['them1'])) {
				$TenMH=$_POST['TenMH'];
				$NoiDung=$_POST['NoiDung'];
				$ThoiLuong=$_POST['ThoiLuong'];
		
				if(!isset($_POST['HinhTam'])){
					$HinhAnh=$_POST['HinhTam'];
					// foreach($data1 as $value){
					// 	$baseUrl="./resources/index/images/".$value['HinhAnh'];
					// 		}
					// 		unlink($baseUrl);
					// 	$HinhAnh = $TenMH."_".$_FILES['HinhTam']['name'];
		
					// 	$target = "./resources/index/images/".basename($HinhAnh);
					// 	$check=getimagesize($_FILES['HinhTam']['tmp_name']);
					// 	if($check[2]){ 
					// 		if (move_uploaded_file($_FILES['HinhTam']['tmp_name'], $target)) {
					// 			$msg = "Image uploaded successfully";
					// 		} else{
					// 			$msg = "Failed to upload image";
					// 		}
						// }
						// else {
						// 	echo '<script language="javascript">';
						// 	echo 'alert("message successfully sent")';
						// 	echo '</script>';
						// 	require_once('Views/admin/monhoc/suamh.php');
						// 	break;
						// 	}
					} 
				else {
					$HinhAnh=$_POST['HinhAnh'];
					}
				// $NgayTao=date("Y/m/d");
				$TrangThai=$_POST['TrangThai'];
				$result=$model->updateMH($MaBV,$TenMH, $NoiDung, $ThoiLuong, $HinhAnh, $TrangThai);

				if($result) {
					$thanhcong[]='success';
				}
			}

			require_once('Views/admin/monhoc/suamh.php');
		}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'xoamh':{
		session_start();

		if(isset($_SESSION['login'])) {
			$MaBV=$_GET['id'];

			if($model->deleteMH($MaBV)) {
				header('Location:admin.php?controller=Admin&action=qlmh');
			}
		}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'qlkh': {
		session_start();
	
		if(isset($_SESSION['login'])) {
			
			$table='khachhang';
			$data=$model->getAllData($table);
			require_once('Views/admin/qlkhachhang.php');
		}
	
		else {
			header('Location:admin.php?controller=Admin&action=login');
		}
	
		break;
	}



	case 'changePass':{
		session_start();
		$dk=0;
		$qtv=$model->findTK($_SESSION['admin']);
		if(isset($_POST['sua'])){
			foreach($qtv as $vl){
				$mk=md5($_POST['matkhau']);
				if($mk!=$vl['MatKhau']){
					$_SESSION['fail']=4;
					$dk=1;
				}
				if($_POST['matkhaumoi']!=$_POST['comfirm']){
					$_SESSION['fail']=5;
					$dk=1;
				}

				if($dk!=1){
					$mk=md5($_POST['matkhaumoi']);
					$rs=$model->changePass($_SESSION['admin'],$mk);
					if($rs){
						$_SESSION['success']=4;
					} else {
						$_SESSION['fail']=5;
					}
					
				
				}
				header('Location:admin.php?controller=Admin&action=qlqtv');
				break;
			}
		}
		break;
	}	



case 'qlmail': {
	session_start();

	if(isset($_SESSION['login'])) {
		
		$table1='theloai';
		$table='dangky';
		$data=$model->getAllData($table);
		require_once('Views/admin/qlmail.php');
	}

	else {
		header('Location:admin.php?controller=Admin&action=login');
	}

	break;
}



case 'sendmail': {
	session_start();

	if(isset($_SESSION['login'])) {
		$table='dangky';
		$data=$model->getAllData($table);
		// header('Location:admin.php?controller=Admin&action=qlmail');

		if(isset($_POST["send"])){

		
			$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username =  $_POST['post'];             // SMTP username
    $mail->Password =  $_POST['pass'];                      // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
 
    //Recipients
	$mail->setFrom($_POST['post'],$_POST['ten']);
  	foreach($data as $value){    // Add a recipient
	$mail->addAddress($value['Email']);   
	              }            // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');
 
    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
 
    //Content
	$mail->isHTML(true); 
	$mail->CharSet = "utf8";                                 // Set email format to HTML
    $mail->Subject = $_POST['subject'];;
    $mail->Body    = $_POST['message'];
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
	$mail->send();
	header('Location:admin.php?controller=Admin&action=qlmail');
   
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ';
}
		}
		require_once('Views/admin/mail/formmail.php');
	}

	else {
		header('Location:admin.php?controller=Admin&action=login');
	}

	break;
}

case 'sendmailID': {
	session_start();

	if(isset($_SESSION['login'])) {
		$table='dangky';
		$MaKH=$_GET['id'];
		$data=$model->getAllDataID($table,$MaKH);
		// header('Location:admin.php?controller=Admin&action=qlmail');

		if(isset($_POST["send"])){
			echo  $_POST['post'];
			echo  $_POST['pass'];
			$mail = new PHPMailer(true);       
try {
    //Server settings
    $mail->SMTPDebug = 2;                                
    $mail->isSMTP();                                      
    $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth = true;                              
	$mail->Username =  $_POST['post'];             
    $mail->Password =  $_POST['pass'];                       
    $mail->SMTPSecure = 'tls';                          
    $mail->Port = 587;                                
 
    //Recipients
	$mail->setFrom($_POST['post'],$_POST['ten']);
  	foreach($data as $value){    // Add a recipient
	$mail->addAddress($value['Email']);   
	              }            // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');
 
    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
 
    //Content
	$mail->isHTML(true); 
	$mail->CharSet = "utf8";                                 // Set email format to HTML
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['message'];
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
	$mail->send();
	header('Location:admin.php?controller=Admin&action=qlmail');
   
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;;
}
		}
		require_once('Views/admin/mail/formmailID.php');
	}

	else {
		header('Location:admin.php?controller=Admin&action=login');
	}

	break;
}

case 'sendmailIDKH': {
	session_start();

	if(isset($_SESSION['login'])) {
		$table='khachhang';
		$MaKH=$_GET['id'];
		$data=$model->getAllDataIDKH($table,$MaKH);
		// header('Location:admin.php?controller=Admin&action=qlmail');

		if(isset($_POST["send"])){

		
			$mail = new PHPMailer(true);                              
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username =  $_POST['post'];             // SMTP username
    $mail->Password =  $_POST['pass'];                       // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
 
    //Recipients
    $mail->setFrom($_POST['post'],$_POST['ten']);
  	foreach($data as $value){    // Add a recipient
	$mail->addAddress($value['Email']);   
	              }            // Name is optional
 
    //Content
	$mail->isHTML(true); 
	$mail->CharSet = "utf8";                                 // Set email format to HTML
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['message'];
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
	$mail->send();
	header('Location:admin.php?controller=Admin&action=qlkh');
   
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ';
}

	$TrangThai=1;
	$rs=$model->updateSTATUSKH($TrangThai,$MaKH);
		}
		require_once('Views/admin/mail/formmailID.php');
	}

	else {
		header('Location:admin.php?controller=Admin&action=login');
	}

	break;
}

case 'mailer':{

		$name = strip_tags(trim($_POST['name']));
	$name = str_replace(array("\r","\n"),array(" "," "),$name);
	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $subject = trim($_POST['subject']);
	$message = trim($_POST['message']);
	
	$email_content = "Name: $name <br>";
	$email_content .= "Email: $email <br>";
	$email_content .= "Subject: $subject <br>";
	$email_content .= "Message:\n$message <br>";

	$mail = new PHPMailer(true);       
try {
	

    //Server settings
    $mail->SMTPDebug = 2;                                
    $mail->isSMTP();                                      
    $mail->Host = 'smtp.gmail.com'; 
	$mail->SMTPAuth = true;    
	$mail->Username = 'hotrocongtacxahoi@gmail.com';             
    $mail->Password =  'congtacxahoi123';                                                     
    $mail->SMTPSecure = 'tls';                          
    $mail->Port = 587;                                
 
    //Recipients
	$mail->setFrom('hotrocongtacxahoi@gmail.com');
  
	$mail->addAddress('kuokuo0287@gmail.com');   
	
    //Content
	$mail->isHTML(true); 
	$mail->CharSet = "utf8";                                 // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $email_content;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
	$mail->send();
	$_SESSION['success1']=1;


   
} catch (Exception $e) {
	
}

}
}


	?>