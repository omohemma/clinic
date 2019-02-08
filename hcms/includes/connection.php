<?php

//mysql://b55dc263b6abad:4056a8d5@us-cdbr-iron-east-01.cleardb.net/heroku_6ce1e53c155f864?reconnect=true
//# mysql -u b55dc263b6abad -h us-cdbr-iron-east-01.cleardb.net -p heroku_6ce1e53c155f864 < clinic.sql
$servername = "us-cdbr-iron-east-01.cleardb.net";
$username = "b55dc263b6abad";
$password = "4056a8d5";
$db = "heroku_6ce1e53c155f864";

$conn = mysqli_connect($servername,$username,$password,$db);

if(!$conn){
	die("Connecton failed: ".mysqli_connect_error());
}



?>