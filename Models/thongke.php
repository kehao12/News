<?php
require_once('Model.php');
require_once('AdminModel.php');
class thongke extends Model{
	private $con=null;
    private $result=null;	

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

	// Thực thi câu lệnh
	public function execute($sql)
	{
		$con=$this->connect();
		$this->result=$con->query($sql);
		return $this->result;
	}

	// Lấy dữ liệu
	public function getData()
	{
		if($this->result){
			$data=mysqli_fetch_array($this->result);
		}
		else{
			$data=0;
		}
		return $data;
    }
    
    public function dem_lan_xem_tk($ma)
    {
        
        $sql = "UPDATE thongke SET day = day + 1 WHERE idBV = $ma";
        return $this->execute($sql);
      
    }
    
    public function getBV($time,$sl){
        $sql="SELECT * FROM baiviet JOIN thongke ON thongke.idBV = baiviet.idBV ORDER by thongke.$time DESC LIMIT $sl";
   
        $this->execute($sql);

		if($this->num_rows()==0){
			$data=0;
		}	
		else
		{
			while($datas = $this->getData()){
				$data[]=$datas;
			}
		}
		return $data;
    }

    public function insertTK($idBV){
		$sql="INSERT INTO thongke (`idBV`,`day`, `yesterday`, `week`, `month`, `year`, `alltime`) 
        VALUES ('$idBV',1,0,0,0,0,0)";
		return $this->execute($sql);
    }
    
    public function getexist($id){
        $sql="SELECT * FROM thongke WHERE idBV=$id";
        $this->execute($sql);

		if($this->num_rows()==0){
			$data=0;
		}	
		else
		{
			while($datas = $this->getData()){
				$data[]=$datas;
			}
		}
		return $data;
    }

}
?>