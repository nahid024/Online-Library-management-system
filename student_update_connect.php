<?php
	
	$input1=$_POST['aname'];
	$input2=$_POST['pname'];
	$input3=$_POST['nuser'];
	$passs=$_POST['npass'];
	$mail=$_POST['nemil'];
	$cn=$_POST['ncn'];
	$input=$_POST['sid'];
	 
	
	 
	
	$user = 'root';
	$pass = '';
	$db = 'lms';
	
	$db_connect = new mysqli('localhost',$user,$pass,$db) or die('unable to connect');

    if ($db_connect->connect_error) {
    die("Connection failed: " . $db_connect->connect_error);
    } 
    //echo "issue successfully";
	header("location:student_update.php");
	 
									
	 
	
	$sql="UPDATE student_reg SET Firstname='$input1', Lastname ='$input2 ', Username ='$input3', Password ='$passs', email ='$mail', ContructNo ='$cn' WHERE StudentId ='$input'";
	$res = $db_connect->query($sql) or die('bad query');
	 
	
	
	
	 

?>