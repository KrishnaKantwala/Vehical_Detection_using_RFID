<?php
	require("headerstart.php");
?>

 <link rel="stylesheet" href="assets/plugins/fileinput/fileinput.css"/>
 <?php
	 require("headerend.php");
	/*if(isset($_SESSION['email'])){
		$formfor="Update";
	}else{
		$formfor="Add";
	}
	*/
?>
            <section id="main-content" class="sidebar_shift">
                <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>
				 <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
					
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title"><?php //echo $formfor; ?> Vehicle</h1>    
							</div>

                            <div class="pull-right hidden-xs">
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="index.php"><i class="fa fa-home"></i>Home</a>
                                    </li>
                                  
                                    <li class="active">
                                        <strong><?php //echo $formfor; ?>Vehicle</strong>
                                    </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>
						<div class="col-lg-8 row-center">
							<div class="panel panel-primary">
							<div class="panel-heading"> <div class="panel-title" style="padding:9px"><i class=""></i>Vehicles</div> 
							</div>
							
					
                            <div class="panel-body">
                             <div class="box">
                                    <div class="col-md-12 col-sm-12 col-xs-12">

									
									
									
				<form id="manager_form" method="POST" autocomplete="off" enctype="multipart/form-data">

                                        <div class="col-md-12 col-sm-12 col-xs-12">

                                            <div class="form-group">
                                                <label class="form-label" for="formfield1">User Name:</label>
                                                <div class="controls">
                                                    <input type="text" class="form-control" name="uname" >
                                                </div>
                                            </div>
											
											<div class="form-group">
                                                <label class="form-label" for="formfield1">Email:</label>
                                                <div class="controls">
                                                    <input type="text" class="form-control" name="email" >
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label" for="formfield2">Address:</label>
                                                <div class="controls">
                                                    <input type="textarea" class="form-control" name="addr" >
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label" for="formfield3">Contact no.:</label>
                                                <div class="controls">
                                                    <input type="text" class="form-control" name="mobile" >
                                                </div>
                                            </div>
											 <div class="form-group">
                                                <label class="form-label" for="formfield4">AadharCard Number:</label>
                                                <div class="controls">
                                                    <input type="text" class="form-control" name="aadhar_number" >
                                                </div>
                                            </div>
								
                                         <div class="form-group">
                                                <label class="form-label" for="formfield5">Vehicle Number:</label>
                                                <div class="controls">
                                                    <input type="text" class="form-control" name="v_number" >
                                                </div>
                                            </div>
                                     
										
										 <div class="form-group">
                                                <label class="form-label" for="formfield6">Vehicle Type:</label>
                                                <div class="controls">
                                                    <input type="text" class="form-control" name="v_type" >
                                                </div>
                                            </div>
											   <!-- </div> -->
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="pull-right">
                                                <button type="submit" name="btnadd" class="btn btn-info btn-corner">Save</button>&nbsp;&nbsp;&nbsp;
												<a href="home.php" class="btn btn-danger btn-corner">Cancel</a>
											</div>
                                        </div>
                                    </form>
									
					
                                </div>
                            </div>
                      <!--  </section> -->
						</div>
                </section>
            </section>
            <!-- END CONTENT -->



	<script type="text/javascript" src="assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="assets/plugins/fileinput/fileinput.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			
			$("#manager_form").validate({
				rules:{
					uname:{
						required:true,
						maxlength:100,
						
						minlength:10
					},
					
				
					email:{
						email:true,
						required:true,
						maxlength:100,
						minlength:true
					},
					mobile:{
						number:true,
						required:true,
						minlength:10,
						maxlength:11
					
				},
				aadhar_number:{
						number:true,
						required:true,
						minlength:12,
						maxlength:13
					
				},
				v_number:{
						required:true,
						maxlength:100,
						
						minlength:10
					},
					v_type:{
						required:true,
						maxlength:100,
						
						minlength:10
					},
					
					
				
			});
		});
	</script>

	
	<?php
	require("footerend.php");
	if(isset($_POST['btnadd'])){
		$uname = $_POST['uname'];
		$email = $_POST['email'];
		$addr= $_POST['addr'];
		$mobile = $_POST['mobile'];
		$aadhar = $_POST['aadhar_number'];
		$vno = $_POST['v_number'];
		$vtype = $_POST['v_type'];
		
		
		$ins_query="insert into rto(uname,emailid,addr,mobile,aadhar_number,v_number,v_type) 
		
		values
		('".$uname."',
		'".$email."',
		'".$addr."',
		'".$mobile."',
		'".$aadhar."',
		'".$vno."',
		'".$vtype."' )";
		//echo $ins_query;
		
		mysqli_query($con,$ins_query);
		header("location:listvehicle.php");
	}
	
		else{
		echo "button not set";	
		header("location:addvehicle.php");
	}
?>