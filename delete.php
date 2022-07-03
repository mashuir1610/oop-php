<?php
include 'function.php';

if (isset($_GET['id'])){
	$obj= new Shuvo;

	$obj->delete($_GET['id'],'users');
}
header("location: index.php");
?>