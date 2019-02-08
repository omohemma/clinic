<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "clinic";

$conn = mysqli_connect($servername,$username,$password,$db);

if(!$conn){
	die("Connecton failed: ".mysqli_connect_error());
}



?>