<!DOCTYPE html>
<html>
<body>

<?php
	 session_start();
	 
	$input2=$_POST['username'];
	$pas=$_POST['password'];
	$input3=$_POST['sid'];
	 
 

	$user = 'root';
	$pass = '';
	$db = 'lms';
	
	$db_connect = new mysqli('localhost',$user,$pass,$db) or die('unable to connect');
	 

	$qry = "select * from student_reg where Username='$input2' and Password='$pas' and StudentId='$input3' and status='yes'";
	 
	$res = $db_connect->query($qry) or die('bad query');
	if($res->num_rows>0){
		header("location:homepage.php");
		//$_SESSION["std"] ='$input3';
		
	}
	 

	 
?>
 
</body>
</html>