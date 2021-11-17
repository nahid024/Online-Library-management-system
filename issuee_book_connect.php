<?php
	$input=$_POST['studentid'];
	$input1=$_POST['sname'];
	$input2=$_POST['booksnamae'];
	$pas=$_POST['bissuedate'];
	$mail=$_POST['breturndate'];
	 
	
	 
	
	$user = 'root';
	$pass = '';
	$db = 'lms';
	
	$db_connect = new mysqli('localhost',$user,$pass,$db) or die('unable to connect');

    if ($db_connect->connect_error) {
    die("Connection failed: " . $db_connect->connect_error);
    } 
    //echo "issue successfully";
	header("location:issuee_book.php");
	 
									
	 
	
	$sql="insert into issue_books values(' ','$input','$input1','$input2','$pas','$mail')";
	$res = $db_connect->query($sql) or die('bad query');
	$sql="update add_book set availableqty=availableqty-1 where bookname='$input2'";
	$res = $db_connect->query($sql) or die('bad query');
	
	
	
	
	 

?>