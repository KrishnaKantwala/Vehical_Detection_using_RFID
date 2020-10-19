<?php

	session_start();
    require("connect.php");
	
	if(isset($_SESSION['user_id'])!=''){
		header("location:userhome.php");
	}
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


                <form name="loginform" autocomplete="off" id="loginform"  method="post" action="otpdirect.php">
				     <p>
                        <label for="user_login">Enter your AadharCard Number:<br />
							
                            <input type="text" name="aadhar" id="aadhar" class="input" size="20" />
                           </p>
                    
                    <p class="submit">
                        <input type="submit" name="button" id="button" class="btn btn-orange btn-block"  value="Submit" />
                    	</p>
					<p id="login-error" class="error">
					</p>
                </form>

               

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

