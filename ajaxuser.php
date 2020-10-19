<?php
session_start();
	require("connect.php");
	//session_start();
	$un=$_POST['email'];
	$psw=$_POST['password'];
		
	$qry="select * from user where emailid='$un' && password='$psw'";
	$res=mysqli_query($con,$qry);
		
	if(mysqli_num_rows($res)>0){
		$row=mysqli_fetch_assoc($res);
		$_SESSION['user_id']=$row['user_id'];
		$_SESSION['emailid']=$row['emailid'];
		
		
		echo "true";
	}
	
	else{
		echo "Invalid Username & Password";
	}
?>