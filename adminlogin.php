<?php
	require("connect.php");
	session_start();
	if(isset($_SESSION['aid'])){
		header("location:home.php");
	}
?>


<!DOCTYPE html>
<html class=" ">
    
<!-- Mirrored from jaybabani.com/ultra-admin-html/ui-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2015 16:26:02 GMT -->
<head>
        <!-- 
         * @Package: Ultra Admin - Responsive Theme
         * @Subpackage: Bootstrap
         * @Version: 2.0
         * This file is part of Ultra Admin Theme.
        -->
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Aalayam HR Admin</title>
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

                <form name="loginform" id="loginform"  method="post">
                    <p>
                        <label for="user_login">UserName<br />
                            <input type="email" name="email" id="user_login" class="input" size="20" /></label>
                    </p>
                    <p>
                        <label for="user_pass">PassWord<br />
                            <input type="password" name="password" id="user_pass" class="input"  size="20" /></label>
                    </p>
                    
                    <p class="submit">
                        <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-orange btn-block" value="Sign In" />
                    </p>
					<p id="login-error" class="error">
					</p>
                </form>

                <p id="nav">
                    <a class="pull-left" href="forgetpassword.php" title="Password Lost and Found">Forgot password?</a>
                    </p>


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
					email:{
						required:true,
						maxlength:40,
						minlength:5
					},
					password:{
						required:true,
						maxlength:40,
						minlength:5
					
					}	
				},
				submitHandler:function(form){
					$.ajax({
						url:"ajaxlogin.php",
						type:"post",
						data:$(form).serialize(),
						success:function(data){
							//alert(data);
							if(data.trim()=="true"){
								location.reload();
							}else{
								$("#login-error").html("Invalid Login Details.");
							}
						}
					});
				}
			});
		});
	</script>

	</body>

<!-- Mirrored from jaybabani.com/ultra-admin-html/ui-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2015 16:26:02 GMT -->
</html>
