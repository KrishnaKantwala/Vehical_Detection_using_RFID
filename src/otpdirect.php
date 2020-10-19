<?php

	session_start();
    require("connect.php");
	
	?>

<html>

<head>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>RFID</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
        
        <!-- CORE CSS FRAMEWORK - START -->
        <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <link href="assets/plugins/icheck/skins/square/orange.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->
		
    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" login_page">


        <div class="login-wrapper">
            <div id="login" class="login loginpage col-lg-offset-4 col-lg-4 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-offset-2 col-xs-8">
                <h1 style="color:#FFF;">RFID</h1>
			<?php
//$flag;)
if(isset($_POST['button'])){
     $v1 = $_POST['aadhar'];
	// echo $v1;
	$sql = "SELECT * from rto where aadhar_number ='".$_POST['aadhar']."' ";
	$result = mysqli_query($con,$sql);
	
	$row=mysqli_fetch_assoc($result);
	$num = $row['mobile'];
	$_SESSION["uid"] = $row['uid'];

	$username = "ldce1994@gmail.com";
	$hash = "4ed2e412980f0d4d7eb9d9f3ea5db0ce8721532e3e45d888bf9c3db1ffc66678";
	$test = "0";
	

	$sender = "TXTLCL";
	$numbers = $num;
	$otp = mt_rand(10000,99999);
	//$otp="12345";
	$message = "This is otp from rto system".$otp;
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".    $sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result= curl_exec($ch); // This is the result from the API
	//echo $result;
	if (strpos($result, 'success') !== false) {
   // echo "true";
		//$flag= 1;
	}
	else{
		echo "false";
		//$flag = 0;
	}
	$_SESSION['otpvalue']=$otp;
	curl_close($ch);
        	}	
	
?>

         


                <form name="otpform" autocomplete="off" id="otpform"  method="post" action= "try.php">
				     <p>
                        <label for="user_login">Enter OTP Number:<br />
							
                            <input type="text" name="otpno" id="otpno" class="input" size="20" />
                           </p>
						<?php //echo $otp; ?>                    
                    <p class="submit">
                        <input type="submit" name="button" id="button" class="btn btn-orange btn-block"  value="Submit"/>
                    	</p>
					<p id="login-error" class="error">
					</p>
					
                </form>
				
					
               

            </div>
        </div>       
        
        	<?php 
        	
	         ?>
               

            </div>
        </div>
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->
        <!-- CORE JS FRAMEWORK - START --> 
        <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script> 
        <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
        <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
        <!-- CORE JS FRAMEWORK - END --> 

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <script src="assets/plugins/icheck/icheck.min.js" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 
        <!-- CORE TEMPLATE JS - START --> 
        <script src="assets/js/scripts.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 
        <!-- Sidebar Graph - START --> 
        <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="assets/js/chart-sparkline.js" type="text/javascript"></script>
        <!-- Sidebar Graph - END --> 

   
	<script type="text/javascript" src="assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript">
		$(document).ready(function(){
			$("#loginform").validate({
				rules:{
					username:{
						required:true,
						maxlength:40,
						minlength:5
					}
					}
					
			});
		});
	</script>
				

	

	</body>

<!-- Mirrored from jaybabani.com/ultra-admin-html/ui-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2015 16:26:02 GMT -->
</html>

