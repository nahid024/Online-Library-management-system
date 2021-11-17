<?php
		$input=$_POST['name'];
		$input1=$_POST['aname'];
		$input2=$_POST['pname'];
		$date=$_POST['pdate'];
		$price=$_POST['bprice'];
		$cn=$_POST['bq'];
		$acn=$_POST['baq'];
		
		 
		
		$user = 'root';
		$pass = '';
		$db = 'lms';
		
		$db_connect = new mysqli('localhost',$user,$pass,$db) or die('unable to connect');

		if ($db_connect->connect_error) {
		die("Connection failed: " . $db_connect->connect_error);
		} 
		echo "Registration successfully";
		header("location:add_books_info.php");
		 
		$sql="insert into add_book values(' ','$input','$input1','$input2','$date','$price','$cn','$acn')";
		$res = $db_connect->query($sql) or die('bad query');
		//if($res->num_rows>0){
		//header("location:add_books_info.php");
	
		?>