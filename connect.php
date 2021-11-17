
<?php
	$input=$_POST['firstname'];
	$input1=$_POST['lastname'];
	$input2=$_POST['username'];
	$pas=$_POST['password'];
	$mail=$_POST['email'];
	$cn=$_POST['contact'];
	$si=$_POST['studentidNo'];
	
	 
	
	$user = 'root';
	$pass = '';
	$db = 'lms';
	
	$db_connect = new mysqli('localhost',$user,$pass,$db) or die('unable to connect');

    if ($db_connect->connect_error) {
    die("Connection failed: " . $db_connect->connect_error);
    } 
    //echo "Registration successfully";
	 
	
	 
	$sql="insert into student_reg values(' ','$input','$input1','$input2','$pas','$mail','$cn','$si','no')";
	$res = $db_connect->query($sql) or die('bad query');
	
	 
		header("location:studentreg.php");
		 
	
?>