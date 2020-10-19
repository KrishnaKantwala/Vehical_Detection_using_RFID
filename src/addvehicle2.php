<?php
	require("headerstart.php");
?>
	<link rel="stylesheet" href="../aalayam/assets/plugins/fileinput/fileinput.css"/>
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
                                        <a href="../aalayam/index.php"><i class="fa fa-home"></i>Home</a>
                                    </li>
                                    <li>
                                        <a href="../aalayam/manager.php"><i class="fa fa-user"></i>Add vehicle</a>
                                    </li>
                                    <li class="active">
                                        <strong><?php // echo $formfor; ?>Add vehicle</strong>
                                    </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                   <div class="col-lg-4">
					<div class="panel panel-primary">
						<div class="panel-heading"> <div class="panel-title" style="padding:9px">Add Vehicle </div> </div>
							<div class="panel-body">

									<form id="addvehicle2" method="POST" autocomplete="off" enctype="multipart/form-data">

                                       
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
												<a href="../aalayam/home.php" class="btn btn-danger btn-corner">Cancel</a><br>
											</div>
                                        </div>
                                    </form>
							
															
									<div class="panel-body" class="box">
									<br><br><br>
									<?php  if(isset($_POST['btnadd']))
													{ ?>
								<table id="example-1" class="table table-striped dt-responsive display" cellspacing="0" width="100%" border="1">
                                    <thead>
                                        <tr style="padding:6px">
                                        <th>No.</th>
										<th>Vehicle Number</th>										
                                        <th>RFID Tag Number</th>
										</tr>
									</thead>
                                           
                                    <tbody>
							
									
									<?php
												
								
								$aadhar = $_POST['aadhar_number'];
								//$_SESSION['aadhar_no']=$aadhar;
								//echo $_SESSION['aadhar_no'];			
													
							
													
													
													$qry1="select v_number,rfid_tag_number from vehicle  where aadhar_number = '$aadhar'";
												
													$res1=mysqli_query($con,$qry1);
													$no=1;
													if(mysqli_num_rows($res1)>0){
													
														while($row=mysqli_fetch_assoc($res1)){
										
												?>
										<tr>
												<td><?php echo $no++; ?></td>
												<td><?php echo $row['v_number']; ?></td>												
												<td><?php echo $row['rfid_tag_number']; ?></td>     
										</tr>
												
												<?php
														}
														}else{
												?>
											<tr>	
												<td colspan="3"><script> alert("Records not found! \nAdd Vehicle for this User"); </script></td>
												     
											</tr>
												
												<?php
														}	
												?>
												
									
									          </tbody>
                                        
								</table>
					         				
									
							</div>	
								</div>
						</div>
					</div>
					
					
								
					  <div class="col-lg-8">
					<div class="panel panel-primary">
						<div class="panel-heading"> <div class="panel-title" style="padding:9px">Add More Vehicle?</div> </div>
							<div class="panel-body">
							
							<?php 
									  //$aadhar = $_POST['aadhar_number'];
											
							?>

								<form id="addmorevehicle" method="POST" autocomplete="off" enctype="multipart/form-data" action="ajaxaddvehicle.php">
								     
									 <!-- <button type="submit" name="addmore" class="btn btn-info btn-corner">Add More Vehicle?</button><br><br>  -->
									
									<?php  
									      //echo $aadhar;
										  //echo $_SESSION['aadhar_no'];
										  
									// if(isset($_POST['addmore']))
												//	{ ?>
												
											
                                         <div class="form-group">
                                                <label class="form-label" for="formfield5">Vehicle Number:</label>
                                                <div class="controls">
                                                    <input type="text" class="form-control" name="v_number" >
                                                </div>
                                            </div>
                                     
									  <div class="form-group">
                                                <label class="form-label" for="formfield5">RFID Tag Number:</label>
                                                <div class="controls">
                                                    <input type="text" class="form-control" name="tag_number" >
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
											
											<div class="form-group">
                                                <label class="form-label" for="formfield5"></label>
                                                <div class="controls">
                                          			<input type="hidden" id="aadhar1" name="aadhar1" value="<?php echo $aadhar; ?>">          
                                                </div>
                                            </div>
											   <!-- </div> -->
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="pull-right">
                                                <button type="submit" name="btnadd2" class="btn btn-info btn-corner">Add Vehicle</button>&nbsp;&nbsp;&nbsp;
												<a href="home.php" class="btn btn-danger btn-corner">Cancel</a>
											</div>
                                        </div>
										
										
										
										
                                    
									<?php //}  ?>
									</form>
									<?php }
									 ?>
									</div>
									</div>
									</div>
										
                                </div>
								</div>
								</section>
                            </div>
                        </section>
            </section>
			
			
			<?php
			
		require("footerstart.php");
?>

	<script type="text/javascript" src="../aalayam/assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="../aalayam/assets/plugins/fileinput/fileinput.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			
			$("#addvehicle2").validate({
				rules:{
					
				aadhar_number:{
						number:true,
						required:true,
						minlength:12,
						maxlength:12
					
				}
			},
			});
			$("#addmorevehicle").validate({
				rules:{
			
				v_number:{
						required:true,
						maxlength:100,
						minlength:true
					},
					
					rfid_tag_number:{
						required:true,
						maxlength:10,
						minlength:10
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
	
		require('footerend.php');
	
	
	 ?>