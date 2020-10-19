<?php 
	$host="localhost";
	$user="root";
	$pwd="";
	$dbname="rfid";
	$con=mysqli_connect($host,$user,$pwd);
	if($con){
		mysqli_select_db($con,$dbname);
	}else{
		die("Error");
	}
	
?>