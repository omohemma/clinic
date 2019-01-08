<?php 

class Database
{
	public $conn;
	function __construct()
	{
		$this->conn = mysqli_connect("us-cdbr-iron-east-01.cleardb.net","b55dc263b6abad","4056a8d5","heroku_6ce1e53c155f864");
		
		/*if($this->conn){
			echo "Connected";
		}else{
			echo "Not Connected";
		}*/
	}
}



$obj = new Database;

?>