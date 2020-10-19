<?php
	require("headerstart.php");
?>
	<link rel="stylesheet" href="assets/plugins/fileinput/fileinput.css"/>
<?php
	require("headerend.php");
	
?>
 
            <section id="main-content" class="sidebar_shift">
                <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>
				 <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
					
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title"><?php //echo $formfor; ?>Add Vehicle</h1>    
							</div>

                            <div class="pull-right hidden-xs">
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="index.php"><i class="fa fa-home"></i>Home</a>
                                    </li>
                                    <li>
                                        <a href="manager.php"><i class="fa fa-user"></i>Add vehicle</a>
                                    </li>
                                    <li class="active">
                                        <strong><?php // echo $formfor; ?>Add vehicle</strong>
                                    </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>
						<div class="col-lg-8 row-center">
							<div class="panel panel-primary">
							<div class="panel-heading"> <div class="panel-title" style="padding:9px"><i class="fa fa-user"></i>Add vehicle</div> 
							</div>
							
					
                            <div class="panel-body">
                             <div class="box">
                                    <div class="col-md-12 col-sm-12 col-xs-12">

									<form id="addvehicle1" method="POST" autocomplete="off" enctype="multipart/form-data">

                                       
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
													<select name="v_type" id="v_type" class="form-control">
															<?php $q1='Select  *  from  addvehicle_class';
															      $r1 = mysqli_query($con,$q1);
																  while($row=mysqli_fetch_array($r1)){?>
												<option value='<?php echo $row['v_type']; ?>'>
															<?php echo $row['v_type']; ?>
												</option>
												
												<?php } ?>
															
															
														</select>
                                                    <!-- <input type="text" class="form-control" name="v_type" > -->
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
			
			$("#addvehicle1").validate({
				rules:{
					
				aadhar_number:{
						number:true,
						required:true,
						minlength:12,
						maxlength:12
					
				},
				v_number:{
						required:true,
						maxlength:100,
						minlength:true
					},
					v_type:{
						required:true,
						maxlength:100,
						minlength:true
						
						}
					},
					
					
				
			});
		});
	</script>

	
	
	<?php
	require("footerend.php");
	if(isset($_POST['btnadd'])){
		
		$aadhar = $_POST['aadhar_number'];
		$vno = $_POST['v_number'];
		$vtype = $_POST['v_type'];
		//$tag = $_POST['tag_number'];
		echo $vtype;
		
		
		$ins_query="insert into vehicle(v_number,v_type,aadhar_number) 
		values
		(
		'".$vno."',
		'".$vtype."' ,'".$aadhar."')";
		
		echo $ins_query;
		mysqli_query($con,$ins_query);
		header("location:addvehicle1.php");
	}
	
		else{
		echo "button not set";	
		
	}
	
?>