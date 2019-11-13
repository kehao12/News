<?php

include "./resources/PHPMailer-master/src/PHPMailer.php";
	include "./resources/PHPMailer-master/src/Exception.php";
	include "./resources/PHPMailer-master/src/OAuth.php";
	include  "./resources/PHPMailer-master/src/POP3.php";
	include "./resources/PHPMailer-master/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

   session_start();

if(isset($_GET['action'])){
	$action=$_GET['action'];
}
else{
	$action='';
}

switch ($action) {

 

	case 'index':{
     
        $id='ThuTu';
        $table='baiviet';
        $table2='monhoc';
        $tl='theloai';
        $dm='danhmuc';

        $dm=$ad->getAllDataOrderBy($dm,$id);
        $tl=$ad->getAllData($tl);
   
        $ts=$ad->getAllDataTS();
        $data3=$ad->getAllData1BV();
        $bv=$ad->get4BV();
        $mh=$ad->getAllData($table2);

        
        $chuyende=$ad->getAllDataMH();
        $id;
        foreach($data3 as $value){
            $id=$value['idBV'];
        }
        $data2=$ad->getAllData4BV($id);

        if(isset($_POST['submit'])){
            $mail=$_POST['Email'];
            $res=$ad->insertMail($mail);
        }

        if(isset($_POST['dangky'])){
            $TenKH=$_POST['TenKH'];
            $SDT=$_POST['SDT'];
            $Email=$_POST['Email'];
            $TrangThai=0;
            $res=$ad->insertDK($TenKH,$SDT,$Email,$TrangThai);
        }
        
		require_once('Views/index/index.php');
		
		break;
    }
    
    case 'about':{
        $id='ThuTu';
        $tl='theloai';
        $dm='danhmuc';
        $dm=$ad->getAllDataOrderBy($dm,$id);
        $tl=$ad->getAllData($tl);
        require_once('Views/index/about1.php');
        break;
    }
    case 'chitiet':{
     
        $idBV=$_GET['id'];
 $tinnoibat=$ad->getTinNoiBat(12);
        $tinmoinhat=$ad->getTinMoiNhat(12);
        $module_name = 'tintuc';
        $session_name = $module_name . '_' . $idBV;
        $table3='baiviet';
        $data1=$ad->getAllData($table3);
        
      
        if(isset($_SESSION[$session_name])){

        } else
        {
       
	        // Gán giá trị session
	        $_SESSION[$session_name] = 1;
	        // Thực hiện cập nhật lượt xem, cộng dồn thêm 1
            $data4=$model->dem_lan_xem($idBV);
            
            $res=$thongke->getexist($idBV);
      
                if($res){
                    $tk=$thongke->dem_lan_xem_tk($idBV);
                } else 
                {
                    $ins=$thongke->insertTK($idBV);
                    
                }
            
            
        }
        $table2='binhluan';
        $data3=$ad->getAllData($table2);
     
 

        $id='ThuTu';
        $tl='theloai';
        $dm='danhmuc';
        $dm=$ad->getAllDataOrderBy($dm,$id);
        $tl=$ad->getAllData($tl);
        $table='baiviet';
        // $data=$model->getAllData($table);
        
        // $table1='danhmuc';
        // $id='ThuTu';
        $table2='binhluan';
        // $data3=$model->getAllData($table2);
        // $data1=$ad->getAllDataOrderBy($table,$id);
        $data=$ad-> getChitietBV($table, $idBV);
      
        // if(isset($_POST['gui'])){
          
        //     $Ngay=date("Y/m/d");
        //     $HoTen=$_POST['HoTen'];
        //     $NoiDung=$_POST['NoiDung'];
        //     $TrangThai=0;
      
        //     $data=$model->insertBL($Ngay,$NoiDung,$HoTen,$TrangThai,$idBV);
        //     // $data1={
        //     //     ngay:$ngay

        //     // }
        //   echo $Ngay;
            
        // }

        if(isset($_POST['gui'])){
          
            $Ngay=date("Y/m/d");
            $HoTen=$_POST['HoTen'];
            $NoiDung=$_POST['NoiDung'];
            $TrangThai=1;
      
            $data=$model->insertBL($Ngay,$NoiDung,$HoTen,$TrangThai,$idBV);
            // $data1={
            //     ngay:$ngay

            // }
     
        }
        
		require_once('Views/index/chitiet.php');
    
		break;
    }
   
    case 'chitietmh':{
        $id='ThuTu';
        $tl='theloai';
        $dm='danhmuc';
        $dm=$ad->getAllDataOrderBy($dm,$id);
        $tl=$ad->getAllData($tl);
        $table='monhoc';
        // $data=$model->getAllData($table);
        $id=$_GET['id'];
        // $table1='danhmuc';
        // $id='ThuTu';
        // $table2='binhluan';
        // $data3=$model->getAllData($table2);
        // $data1=$ad->getAllDataOrderBy($table,$id);
        $data=$ad->getAllData($table);
        $data1=$ad->getAllData3MH();
        // $data4=$model->dem_lan_xem($idBV);
        // if(isset($_POST['NoiDung'])){
        //     $Ngay=date("Y/m/d");
        //     $Email=$_POST['Email'];
        //     $HoTen=$_POST['HoTen'];
        //     $NoiDung=$_POST['NoiDung'];
        //     $TrangThai=1;
        //     $data=$model->insertBL($Ngay,$NoiDung,$Email,$HoTen,$TrangThai,$idBV);
        //     header('Location:index.php?controller=index&action=chitiet&id='.$idBV);
            
        // }
		require_once('Views/index/chitietmh.php');
    
		break;
    }
    
    case 'tintuc':{
        $id='ThuTu';
        $tl='theloai';
        $dm='danhmuc';
        $dm=$ad->getAllDataOrderBy($dm,$id);
        $tl=$ad->getAllData($tl);
        $table2='baiviet';
         $dem=$model->dem_the_loai(12);
        $tinnoibat=$ad->getTinNoiBat(12);
        $tinmoinhat=$ad->getTinMoiNhat(12);


        $data1=$ad->getAllDataTT();
        
            //Tính Record
            $rs=$model->totalPost();
            foreach($rs as $va){
                $total_records = $va['total'];
            }
            //TÌM LIMIT VÀ CURRENT_PAGE
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            $limit = 6;
    
            //TÍNH TOÁN TOTAL_PAGE VÀ START
            // tổng số trang
            $total_page = ceil($total_records / $limit);
    
            // Giới hạn current_page trong khoảng 1 đến total_page
            if ($current_page > $total_page){
                $current_page = $total_page;
            }
            else if ($current_page < 1){
                $current_page = 1;
            }
    
            // Tìm Start
            $start = ($current_page - 1) * $limit;
    
            $rs1=$model->Paging($start,$limit);

            if(isset($_POST['search'])){
                $key = $_POST['noidung'];
                $data10 = $ad->getSearch($key); 
                
            }
            
        require_once('Views/index/tintuc.php');
		
		
		break;
    }



    case 'bvtl':{
        $id1='ThuTu';
        $tl='theloai';
        $dm='danhmuc';
        $dm=$ad->getAllDataOrderBy($dm,$id1);
        $tl=$ad->getAllData($tl);
        $MaTL=$_GET['id'];
    
        $table2='baiviet';
        $table='theloai';
        $table1='danhmuc';
        $id='Tin tức';
        
        $dmtl=$model->danhmuctl($MaTL);
        $data=$ad->getAllData2Table1($table,$table1,$id);
        $table2='baiviet';
        $data1=$ad->getAllData($table2);
 $dem=$model->dem_the_loai(7);
        $tinnoibat=$ad->getTinNoiBat(12);
        $tinmoinhat=$ad->getTinMoiNhat(12);
         //Tính Record
         $rs=$model->totalPostID($MaTL);
         foreach($rs as $va){
             $total_records = $va['total'];
         }
         //TÌM LIMIT VÀ CURRENT_PAGE
         $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
         $limit = 6;
 
         //TÍNH TOÁN TOTAL_PAGE VÀ START
         // tổng số trang
         $total_page = ceil($total_records / $limit);
 
         // Giới hạn current_page trong khoảng 1 đến total_page
         if ($current_page > $total_page){
             $current_page = $total_page;
         }
         else if ($current_page < 1){
             $current_page = 1;
         }
 
         // Tìm Start
         $start = ($current_page - 1) * $limit;
 
         $rs1=$model->PagingID($start,$limit,$MaTL);

          if(isset($_POST['search'])){
                $key = $_POST['noidung'];
                $data10 = $ad->getSearch($key); 
                
            }
            
         
        require_once('Views/index/theloai.php');
		
		
		break;
    }

    case 'monhoc':{
        $id='ThuTu';
        $tl='theloai';
        $dm='danhmuc';
        $dm=$ad->getAllDataOrderBy($dm,$id);
        $tl=$ad->getAllData($tl);
        $table2='baiviet';
          $tinnoibat=$ad->getTinNoiBat(8);
        $tinmoinhat=$ad->getTinMoiNhat(8);
        $dem=$model->dem_the_loai(8);
            //Tính Record
            $rs=$model->totalPostMH();
            foreach($rs as $va){
                $total_records = $va['total'];
            }
            //TÌM LIMIT VÀ CURRENT_PAGE
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            $limit = 6;
            
    
            //TÍNH TOÁN TOTAL_PAGE VÀ START
            // tổng số trang
            $total_page = ceil($total_records / $limit);
    
            // Giới hạn current_page trong khoảng 1 đến total_page
            if ($current_page > $total_page){
                $current_page = $total_page;
            }
            else if ($current_page < 1){
                $current_page = 1;
            }
    
            // Tìm Start
            $start = ($current_page - 1) * $limit;
    
            $rs1=$model->PagingIDMH($start,$limit);

             if(isset($_POST['search'])){
                $key = $_POST['noidung'];
                $data10 = $ad->getSearch($key); 
                
            }
            
      
		
        require_once('Views/index/monhoc.php');
		break;
    }

    case 'lienhe':{
        $id='ThuTu';
        $tl='theloai';
        $dm='danhmuc';
        $dm=$ad->getAllDataOrderBy($dm,$id);
        $tl=$ad->getAllData($tl);


        require_once('Views/index/contact.php');
		
		
		break;
    }

    case 'tuyensinh':{
        $id='ThuTu';
        $tl='theloai';
        $dm='danhmuc';
        $dm=$ad->getAllDataOrderBy($dm,$id);
        $tl=$ad->getAllData($tl);
        $table2='baiviet';
          $tinnoibat=$ad->getTinNoiBat(7);
        $tinmoinhat=$ad->getTinMoiNhat(7);
       
          $dem=$model->dem_the_loai(7);


        $data=$ad->getAllDataTS();
        
            //Tính Record
            $rs=$model->totalPostTS();
            foreach($rs as $va){
                $total_records = $va['total'];
            }
            //TÌM LIMIT VÀ CURRENT_PAGE
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            $limit = 6;
    
            //TÍNH TOÁN TOTAL_PAGE VÀ START
            // tổng số trang
            $total_page = ceil($total_records / $limit);
    
            // Giới hạn current_page trong khoảng 1 đến total_page
            if ($current_page > $total_page){
                $current_page = $total_page;
            }
            else if ($current_page < 1){
                $current_page = 1;
            }
    
            // Tìm Start
            $start = ($current_page - 1) * $limit;
    
            $rs1=$model->PagingIDTS($start,$limit);
             if(isset($_POST['search'])){
                $key = $_POST['noidung'];
                $data10 = $ad->getSearch($key); 
                
            }
          
      
		
        require_once('Views/index/tuyensinh.php');
		break;
    }

    case 'comment':{
        
        if(isset($_POST['gui'])){
          
            $Ngay=date("Y/m/d");
            $HoTen=$_POST['HoTen'];
            $NoiDung=$_POST['NoiDung'];
            $TrangThai=0;
            $idBV=$_POST['idBV'];
      
            $data=$model->insertBL($Ngay,$NoiDung,$HoTen,$TrangThai,$idBV);
            // $data1={
            //     ngay:$ngay

            // }
     
            
        }
    }

    
   
}

?>