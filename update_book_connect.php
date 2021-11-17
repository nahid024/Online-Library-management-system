<?php
	
	$input1=$_POST['bname'];
	$input2=$_POST['quan'];
	$input3=$_POST['pri'];
	 
	 
	
	 
	
	$user = 'root';
	$pass = '';
	$db = 'lms';
	
	$db_connect = new mysqli('localhost',$user,$pass,$db) or die('unable to connect');

    if ($db_connect->connect_error) {
    die("Connection failed: " . $db_connect->connect_error);
    } 
    //echo "issue successfully";
	header("location:update_book.php");
	 
									
	 
	
	$sql="UPDATE add_book SET booksqty='$input2',price='$input3' where bookname='$input1'";
	$res = $db_connect->query($sql) or die('bad query');
	 
	
	
	
	 

?>