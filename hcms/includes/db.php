<?php 

class Database
{
	public $conn;
	function __construct()
	{
		$this->conn = mysqli_connect("localhost","root","","clinic");
		
		/*if($this->conn){
			echo "Connected";
		}else{
			echo "Not Connected";
		}*/
	}
}



$obj = new Database;

?>