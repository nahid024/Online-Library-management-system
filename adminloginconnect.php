<!DOCTYPE html>
<html>
<body>

<?php
	 
	 
	$input2=$_POST['username'];
	$pas=$_POST['password'];
	 
 

	$user = 'root';
	$pass = '';
	$db = 'lms';
	
	$db_connect = new mysqli('localhost',$user,$pass,$db) or die('unable to connect');

	$qry = "select * from admin_info where Username='$input2' and Password='$pas'";
	 
	$res = $db_connect->query($qry) or die('bad query');
	if($res->num_rows>0){
		header("location:admin_home_page.php");
	}
	
	//echo $res->num_rows." "."<br>";
	 

?>
