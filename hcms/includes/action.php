<?php 

include 'db.php';

class DataOperation extends Database
{

	public function insert_record($table,$fields){
				//"INSERT INTO tale_name (, ,) VALUES('','')";
		$sql = "";
		$sql .= "INSERT INTO ".$table;
		$sql .= "(".implode(",", array_keys($fields)).") VALUES";
		$sql .= "('".implode("','",array_values($fields))."')";
		$query = mysqli_query($this->conn,$sql);
		if($query){
			return true;
		}else{
			echo "Error: "."<br>".$query."<br>".mysqli_error($this->conn);
		}

	}
	


	public function fetch_record($table){
		$sql = "";
		$sql .= "SELECT * FROM ".$table;
		$array  = array();
		$query = mysqli_query($this->conn,$sql);
		while($row = mysqli_fetch_assoc($query)){

			$array[] = $row;
		}

		return $array;

	}


	public function fetch_record_cond($table, $where){
		$sql = "";
		$condition = "";
		$array  = array();

		foreach ($where as $key => $value) {
			// id = '5'	 and name = 'omoh'
			$condition .= $key ."='".$value."' AND ";

		}

		$condition = substr($condition, 0, -5);
		$sql .= "SELECT * FROM ".$table." WHERE ".$condition;
		$query = mysqli_query($this->conn,$sql);
		while($row = mysqli_fetch_assoc($query)){

			$array[] = $row;
		}

		return $array;


	}


	public function select_record($table,$where){


		$sql = "";
		$condition = "";
		foreach ($where as $key => $value) {
				// id = '5'	 and name = 'omoh'

			$condition .= $key . "='".$value."' AND ";

		}

		$condition = substr($condition, 0, -5);
		$sql = "SELECT * FROM ".$table." WHERE ".$condition;
		$query = mysqli_query($this->conn,$sql);
		$row = mysqli_fetch_array($query);
		return $row;

	}

	public function update_record($table,$where,$fields){
		$sql = "";
		$condition = "";
		foreach ($where as $key => $value) {
				// id = '5'	 and name = 'omoh'

			$condition .= $key . "='".$value."' AND ";

		}

		$condition = substr($condition, 0, -5);

		foreach ($fields as $key => $value) {
				// UPDATE table_name SET name = "",qty = "" WHERE id = '';

			$sql .= $key ."='".$value."', ";

		}

		$sql  = substr($sql,0 , -2);
		$sql = "UPDATE ".$table." SET ".$sql." WHERE ".$condition;
		if(mysqli_query($this->conn,$sql)){
			return true;
		}


	}

	public function delete_record($table,$where){

		$sql = "";
		$condition = "";

		foreach ($where as $key => $value) {
			
			$condition = $key . "='".$value."' AND ";

		}

		$condition = substr($condition, 0, -5);
		$sql = "DELETE FROM ".$table." WHERE ".$condition;
		if(mysqli_query($this->conn,$sql)){
			return true;
		}


	}



}


$obj  = new DataOperation;

if (isset($_GET['delete']) and isset($_GET['id']) ) {
	if ($_GET['delete'] == 1) {
		$id = $_GET['id'];
		$where = array('id' => $id );
		if ($obj->delete_record("department",$where)) {
			header('location:../departments.php?msg=department_deleted');
		}
	} elseif ($_GET['delete'] == 2) {
		$id = $_GET['id'];
		$where = array('id' => $id );
		if ($obj->delete_record("users",$where)) {
			header('location:../staffs.php?msg=staff_deleted');
		}
	} elseif ($_GET['delete'] == 3 ) {
		$id = $_GET['id'];
		$where = array('id' => $id );
		if ($obj->delete_record("visit_history",$where)) {
			header('location:../patient-history.php?msg=history_deleted');
		}
	}
	
}


?>