<?php
	require("headerstart.php");
?>
	<link rel="stylesheet" href="assets/plugins/fileinput/fileinput.css"/>
<?php
	require("headerend.php");
	/*if(isset($_GET['aid'])){
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
                                <h1 class="title"><?php //echo $formfor; ?>Add User</h1>    
							</div>

                            <div class="pull-right hidden-xs">
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="index.php"><i class="fa fa-home"></i>Home</a>
                                    </li>
                                    <li>
                                        <a href="manager.php"><i class="fa fa-user"></i>Add User</a>
                                    </li>
                                    <li class="active">
                                        <strong><?php // echo $formfor; ?> Add User</strong>
                                    </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>
						<div class="col-lg-8 row-center">
							<div class="panel panel-primary">
							<div class="panel-heading"> <div class="panel-title" style="padding:9px"><i class="fa fa-user"></i>Add User</div> 
							</div>
							
					
                            <div class="panel-body">
                             <div class="box">
                                    <div class="col-md-12 col-sm-12 col-xs-12">

									<form id="adduser" method="POST" autocomplete="off" enctype="multipart/form-data">

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
                        </section>
						</div>
                </section>
            </section>
            <!-- END CONTENT -->

<?php
		require("footerstart.php");
?>

	<script type="text/javascript" src="assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="assets/plugins/fileinput/fileinput.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#adduser").validate({
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
					addr:{
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
					}
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
		
		
		
		$ins_query="insert into rto1(uname,emailid,addr,mobile,aadhar_number) 
		values
		('".$uname."',
		'".$email."',
		'".$addr."',
		'".$mobile."',
		'".$aadhar."' )";
	
		mysqli_query($con,$ins_query);
		header("location:user.php");
	}
	
		else{
		echo "button not set";	
		
	}
	
?>