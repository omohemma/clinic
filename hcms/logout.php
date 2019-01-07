<?php
session_start();
include 'includes/action.php';
$id = $_SESSION['id'];
$where = array("id"=>$id);
$myArray =  array(
	'status' => 'offline',
	'on_duty' => 'no'

);

$obj->update_record("users",$where,$myArray);


if (isset($_SESSION['role'])) {
	session_unset();
	session_destroy();
	header('location:sign-in.php');
}


?>

