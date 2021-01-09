<?php 
include 'Model.php';
$connection = new Model();
 
$action = $_GET['action'];
if($action == "add")
{
	$connection->add($_POST['name'],$_POST['major'],$_POST['university'],$_POST['harga_jual']);
	header('location:index.php');
}
elseif($action=="update")
{
	$connection->edit($_POST['name'],$_POST['major'],$_POST['university'],$_POST['id']);
	header('location:index.php');
}
elseif($action=="delete")
{
	$id = $_GET['id'];
	$connection->remove($id);
	header('location:index.php');
}
?>