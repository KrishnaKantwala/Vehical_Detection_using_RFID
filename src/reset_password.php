
<?php
	require("headerstart.php");
?>

<?php
	require("headerend.php");
?>

            <section id="main-content" class="sidebar_shift">
                <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>
				 <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
					
                        <div class="page-title">

                            <div class="pull-left">
                                <h2 class="title">Change Password</h2>                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>
						<div class="col-lg-8 row-center">
							<div class="panel panel-primary">
							<div class="panel-heading"> <div class="panel-title" style="padding:9px">Change Password</div> 
							</div>
							
					
                            <div class="panel-body">
                             <div class="box">
                                    <div class="col-md-12 col-sm-12 col-xs-12">

									<?php 
									//$dr_id=$_GET['aid'];
									/*$m_id=$_GET['m_id'];
									$msg=$_GET['msg'];
									if($msg)
									{
										
										echo "<h3 class=text-danger>".$msg."</h2>";
									}
									
									if($dr_id){
									*/
									?>
                                    <form id="chng_dr_psw_form" method="POST">

                                        <div class="col-md-12 col-sm-12 col-xs-12">
											<input type="hidden" name="dr_id" value="<?php /*echo $_GET['aid']; */?>" />


											<div class="form-group">
                                                <label class="form-label" for="formfield8">Old Password:*</label>
                                                <div class="controls">
                                                    <input type="password" class="form-control" id="old_psw" name="old_psw" >
                                                </div>
                                            </div>

											
											
											
                                            <div class="form-group">
                                                <label class="form-label" for="formfield8">New Password:*</label>
                                                <div class="controls">
                                                    <input type="password" class="form-control" id="new_psw" name="new_psw" >
                                                </div>
                                            </div>
											
											
											<div class="form-group">
                                                <label class="form-label" for="formfield8">Confirm Password:*</label>
                                                <div class="controls">
                                                    <input type="password" class="form-control" id="conf_psw" name="conf_psw" >
                                                </div>
                                            </div>

                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="pull-right">
                                                <button type="submit" name="btnchngpswd" class="btn btn-info btn-corner">Save</button>&nbsp;&nbsp;&nbsp;
												<a href="home.php" class="btn btn-danger btn-corner">Cancel</a>
											</div>
                                        </div>
                                    </form>
                                </div>
                           

									<?php
									/*}
									else if($m_id)
										
									{
										*/
									?>
									
									 <!-- <form id="chng_mng_psw_form" method="POST">

                                        <div class="col-md-12 col-sm-12 col-xs-12">
											<input type="hidden" name="m_id" value="<?php /*echo $_GET['m_id'];  */?>" />


											<div class="form-group">
                                                <label class="form-label" for="formfield8">Old Password:*</label>
                                                <div class="controls">
                                                    <input type="password" class="form-control" id="old_psw" name="old_psw" >
                                                </div>
                                            </div>

											
											
											
                                            <div class="form-group">
                                                <label class="form-label" for="formfield8">New Password:*</label>
                                                <div class="controls">
                                                    <input type="password" class="form-control" id="new_psw" name="new_psw" >
                                                </div>
                                            </div>
											
											
											<div class="form-group">
                                                <label class="form-label" for="formfield8">Confirm Password:*</label>
                                                <div class="controls">
                                                    <input type="password" class="form-control" id="conf_psw" name="conf_psw" >
                                                </div>
                                            </div>

                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="pull-right">
                                                <button type="submit" name="btnchngpswm" class="btn btn-info btn-corner">Save</button>&nbsp;&nbsp;&nbsp;
												<a href="home.php" class="btn btn-danger btn-corner">Cancel</a>
											</div>
                                        </div>
                                    </form> -->
                                </div>
                           
										
									<?php	
									/*}else{
										
										header("location:home.php");
									}*/
									?>

						   </div>
                        </section>
						</div>
                </section>
            </section>
            <!-- END CONTENT -->

<?php
		require("footerstart.php");
?>


	<script type="text/javascript" src="assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			
			
				
		$("#chng_dr_psw_form").validate({
				rules:{
					old_psw:{
						required:true,
						maxlength:100,
						minlength:3
					},
					new_psw:{
						required:true,
						maxlength:100,
						minlength:8
					
					},
					conf_psw:{
						required:true,
						maxlength:100,
						minlength:8,
						equalTo:"#new_psw"
					}
				
					},
				messages:{
					old_psw:{
						required:"This is Required.",
					},
					new_psw:{
						required:"this is required.",
					},
					conf_psw:{
						required:"This is Required.",
						equalTo:"this value must be same as previous field",
					}
				}
			});
		
		
		$("#chng_mng_psw_form").validate({
				rules:{
					old_psw:{
						required:true,
						maxlength:100,
						minlength:3
					},
					new_psw:{
						required:true,
						maxlength:100,
						minlength:8
					
					},
					conf_psw:{
						required:true,
						maxlength:100,
						minlength:8,
						equalTo:"#new_psw"
					}
				
					},
				messages:{
					old_psw:{
						required:"This is Required.",
					},
					new_psw:{
						required:"this is required.",
					},
					conf_psw:{
						required:"This is Required.",
						equalTo:"this value must be same as previous field",
					}
				}
			});
	
		
		});
	</script>
					
<?php
		require("footerend.php");
		if(isset($_POST['btnchngpswd'])){
			
			$old_psw=$_POST['old_psw'];
			
			$q1="select password from admin";
			$rs1=mysqli_query($con,$q1);
			$rw1=mysqli_fetch_assoc($rs1);
			$dr_psw=$rw1['password'];
			
			if($dr_psw==$old_psw){
				
				$new_psw=$_POST['new_psw'];
				$q2="update admin set password='$new_psw'";
				//echo $q2;
				mysqli_query($con,$q2);
				header("location:home.php");
				
			}
			else
			{
				$msg="Old password not match";
				header("location:reset_password.php");
				
				//header("location:reset_password.php?dr_id=".$_POST['dr_id']);
				//alert('old password not match with database');
			}
			
		}
		
		/* if(isset($_POST['btnchngpswm'])){
			
			$old_psw=$_POST['old_psw'];
			
			$q1="select m_password from manager where m_id=".$_POST['m_id'];
			$rs1=mysqli_query($con,$q1);
			$rw1=mysqli_fetch_assoc($rs1);
			$m_psw=$rw1['m_password'];
			
			if($m_psw==$old_psw){
				
				$new_psw=$_POST['new_psw'];
				$q2="update manager set m_password='$new_psw' where m_id=".$_POST['m_id'];
				//echo $q2;
				mysqli_query($con,$q2);
				header("location:home.php");
				
			}
			else
			{
				$msg="manager old password not match";
				header("location:reset_password.php?dr_id=".$dr_id."&m_id=".$m_id."&msg=".$msg);
				
			}
			
		
			
		}*/
?>