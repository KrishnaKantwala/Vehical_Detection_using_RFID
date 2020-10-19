<?php 


	require("connect.php");
	
	
	
	if(isset($_POST['btnadd2'])){
		
		
		$vno = $_POST['v_number'];
		$vtype = $_POST['v_type'];
		$tag = $_POST['tag_number'];
		$aadhar = $_POST['aadhar1'];
		
		
		$ins_query="insert into vehicle(v_number,v_type,aadhar_number,rfid_tag_number) 
		values
		(
		'".$vno."',
		'".$vtype."' ,'".$aadhar."','".$tag."')";
	
		$res = mysqli_query($con,$ins_query);
		header("location:addvehicle2.php");
		
?>

<?php
		
		
	}
	
		else{
		echo "button not set";	
		
	} 
	


?>