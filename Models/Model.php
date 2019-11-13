<?php 
require_once('DbModel.php');
class Model extends DbModel{
	private  $con = null;
	private $result = null;

	public function fetch(){
			//$rows=$this->get_list();			
		if($this->result->num_rows > 0){
			$rows=$this->result->fetch_assoc();									
		}
		else{
			$rows=0;	
		}
		return $rows;				
	}
	public function insert($table,$value){
		$sql="INSERT INTO ($table) VALUES($value)";
		$dt=new database();
		$dt->command($sql);
	}
	public function update($sql){
		$dt=new database();
		$dt->command($sql);
	}
	public function delete($sql){
		$dt=new database();
		$dt->command($sql);
	}

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

	public function getAllData($table)
	{
		$sql="SELECT * FROM $table";
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
	

}
?>