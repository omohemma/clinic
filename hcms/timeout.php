<?php
session_start();
include 'includes/action.php';
unset($_SESSION['role']);
$id = $_SESSION['id'];
$where = array("id"=>$id);
$myArray =  array(
	'status' => 'away'

);

$obj->update_record("users",$where,$myArray);


header('location:lock-screen.php');


?>