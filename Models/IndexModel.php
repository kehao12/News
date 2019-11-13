<?php 
require_once('Model.php');
require_once('AdminModel.php');
class IndexModel extends Model{
	private $con=null;
	private $result=null;	

    public function totalPost()
	{
		$con=$this->connect();
	
		$sql="SELECT COUNT(idBV) AS total FROM baiviet WHERE idTL IN (SELECT idTL FROM theloai WHERE idDM = 12 ) AND TrangThai=1";
		$result=$this->execute($sql);

		return $result;
    }

    public function totalPostMH()
    {
        $con=$this->connect();
        $sql="SELECT COUNT(idBV) AS total FROM baiviet WHERE idTL IN (SELECT idTL FROM theloai WHERE idDM = 8 ) AND TrangThai=1";
		$result=$this->execute($sql);

		return $result;
    }

    public function totalPostID($id)
	{
		$con=$this->connect();
	
		$sql="SELECT COUNT(idBV) AS total FROM baiviet WHERE idTL='$id' AND TrangThai=1";
		$result=$this->execute($sql);

		return $result;
    }

    public function totalPostTS()
	{
		$con=$this->connect();
        $sql="SELECT COUNT(idBV) AS total FROM baiviet WHERE idTL IN (SELECT idTL FROM theloai WHERE idDM = 7 ) AND TrangThai=1";
		$result=$this->execute($sql);

		return $result;
    }


    

    public function Paging($start,$limit){
        $con=$this->connect();
        $sql="SELECT * FROM baiviet  WHERE idTL IN (SELECT idTL FROM theloai WHERE idDM = 12 ) AND TrangThai=1 LIMIT $start, $limit";
     
        return $result=$this->execute($sql);

    }
    
    public function PagingID($start,$limit,$tl){
        $con=$this->connect();
        $sql="SELECT * FROM baiviet WHERE idTL='$tl' AND TrangThai=1 LIMIT $start, $limit";
     
        return $result=$this->execute($sql);

    }

    public function PagingIDTS($start,$limit){
        $con=$this->connect();
        $sql="SELECT * FROM baiviet WHERE idTL IN (SELECT idTL FROM theloai WHERE idDM = 7 ) AND TrangThai=1 LIMIT $start, $limit";
     
        return $result=$this->execute($sql);

    }

    public function PagingIDMH($start,$limit){
        $con=$this->connect();
        $sql="SELECT * FROM baiviet WHERE idTL IN (SELECT idTL FROM theloai WHERE idDM = 8 ) AND TrangThai=1 LIMIT $start, $limit";
     
        return $result=$this->execute($sql);

    }

    public function num_rows()
	{
		if($this->result){
			$num=mysqli_num_rows($this->result);
		}
		else
		{
			$num=0;
		}
		return $num;
	}


    public function insertBL($Ngay,$NoiDung,$HoTen,$TrangThai,$idBV){
        $sql  = "INSERT INTO binhluan (Ngay,NoiDung,HoTen,TrangThai,idBV) VALUES 
        ('$Ngay','$NoiDung','$HoTen','$TrangThai','$idBV')";

		return $this->execute($sql);
    }

    public function dem_lan_xem($ma)
    {
        $ma = intval($ma);
        $sql = "UPDATE  baiviet  SET SoLanXem = SoLanXem+1 WHERE idBV = $ma";
        return $this->execute($sql);
      
    }

  
        public function dem_the_loai($id)
    {

        $sql="SELECT theloai.idTL,COUNT(idBV) AS total FROM baiviet JOIN theloai ON baiviet.idTL=theloai.idTL WHERE theloai.idTL IN (SELECT idTL FROM theloai WHERE idDM = '$id' ) AND baiviet.TrangThai=1 GROUP BY theloai.idTL";
        return $result=$this->execute($sql);
      
    }

         public function danhmuctl($id)
    {

        $sql="SELECT danhmuc.idDM FROM danhmuc JOIN theloai ON danhmuc.idDM=theloai.idDM WHERE theloai.idDM IN (SELECT idDM FROM theloai WHERE idTL = '$id' ) AND theloai.TrangThai=1 GROUP BY theloai.idDM";
 
        return $result=$this->execute($sql);
      
    }


   
}