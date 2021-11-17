<!DOCTYPE html>
<html>
<body>

<?php
	  
	 
	$input2=$_GET['id'];
	 
	 
 

	$user = 'root';
	$pass = '';
	$db = 'lms';
	
	$db_connect = new mysqli('localhost',$user,$pass,$db) or die('unable to connect');
	 

	$qry = "update student_reg set status='no' where id='$input2'";
	 
	$res = $db_connect->query($qry) or die('bad query');
	//if($res->num_rows>0){
		header("location:all_student_info.php");
		//$_SESSION["std"] ='$input3';
		
	
	 

	 
?>
 
</body>
</html>