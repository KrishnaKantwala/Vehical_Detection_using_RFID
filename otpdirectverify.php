<?php
//$flag;
if(isset($_POST['verify'])){

	$con = mysqli_connect("localhost","root","","rfid");
	$sql = "SELECT mobile from rto where aadhar_number ='".$_POST['adhar']."' ";
	$result = mysqli_query($con,$sql);
	
	$row=mysqli_fetch_assoc($result);
	$num = $row['mobile'];

	$username = "sbldce@gmail.com";
	$hash = "4ca469e6fe64f52de0146554bc67080524331fe00ba80ab3f246d149e3268201";
	$test = "0";
	

	$sender = "TXTLCL";
	$numbers = $num;
	$otp = mt_rand(10000,99999);
	$message = "This is otp from rto system".$otp;
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".    $sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result= curl_exec($ch); // This is the result from the API
	echo $result;
	if (strpos($result, 'success') !== false) {
    echo "true";
		//$flag= 1;
	}
	else{
		echo "false";
		//$flag = 0;
	}
	curl_close($ch);
}	

/*
	if($flag==1)
 	{
?>
<html>
<body>
<form actio action="otpdirectverify.php" method="post">
	<div>Enter OTP here</div>
	<div><input type="text" name="chkotp" /></div>	
	<div><input type="submit" name="check" value="check"/></div>	
</form>
</body>
</html>
<?php 
	}
 ?>
<?php
if(isset($_POST['check']))
{
	if($otp = $_POST['chkotp'])
	{
	echo"verified";
	?>
	<html>
	<body>
	<form action="userset.php" action="post">
	<div><input type="submit" name="setuser" value="setusername"></div>
	</form>
	</body>	
	</html>
	<?php
	}
	else{
	echo"invalid otp";
	}
}	
	?>*/