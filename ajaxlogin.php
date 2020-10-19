<?php
session_start();
	require("connect.php");
	//session_start();
	$un=$_POST['email'];
	$psw=$_POST['password'];
		
	$qry="select * from admin where email='$un' && password='$psw'";
	$res=mysqli_query($con,$qry);
		
	if(mysqli_num_rows($res)>0){
		$row=mysqli_fetch_assoc($res);
		$_SESSION['aid']=$row['aid'];
		$_SESSION['email']=$row['email'];
		
		echo "true";
	}else{
		echo "Invalid Username & Password";
	}
?>