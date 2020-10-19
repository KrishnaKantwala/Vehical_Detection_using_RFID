<?php
			include("userhead.php");
?>

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <link href="assets/plugins/datatables/css/jquery.dataTables.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/datatables/extensions/TableTools/css/dataTables.tableTools.min.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 
         <link href="assets/plugins/select2/select2.css" rel="stylesheet" type="text/css" media="screen"/>

       
	   
<?php
				require("userheadend.php");
				
				//$qry="select * from area order by a_name";
				//$res=mysqli_query($con,$qry);

?>
		  <section id="main-content" class="sidebar_shift">
                <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'> 
				
				 <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
					
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title">Register Complain</h1>                            </div>

                            <div class="pull-right hidden-xs">
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="userhome.php"><i class="fa fa-home"></i>Home</a>
                                    </li>
                                    <li>
                                        <a href="lostvehicle.php"></i>Register complain</a>
                                    </li>
                                    
                                </ol>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>
						<div class="col-lg-8 row-center">
						<div class="panel panel-primary">
							<div class="panel-heading"> <div class="panel-title" style="padding:9px"><i class="fa fa-envelop"></i>Register Your Complain Here</div> 
							</div>
							
					
                            <div class="panel-body">
                             <div class="box">
                                    <div class="col-md-12 col-sm-12 col-xs-12">

									<?php
											 
											$qry1="select * from rto where emailid='". $_SESSION['emailid']."' ";
											$res1=$con->query($qry1);	
										?>
							
										<form id="area_upd_form"  autocomplete="off" method="POST" action="a1.php">
											<div class="form-group">
												<label class="form-label">Vehicle number*</label>
													<div class="controls">
														<select name="v_number" id="v_number" class="select2">
															<?php 
															while($row=$res1->fetch_assoc()){
															?>
															
															<option value= "<?php echo $row['v_number'];?>"> <?php echo $row['v_number']; } ?> </option>
														</select>
												
													</div>
													
													<div class="form-group">
                                               <label class="form-label" for="formfield1">Description:</label>
									           <textarea name="description" class="bootstrap-wysihtml5-textarea" placeholder="Enter text ..." style="width: 100%; height: 250px; font-size: 14px; line-height: 23px;padding:15px; margin-bottom:10px"><?php echo $row['user_id']; ?></textarea>
                                           </div>
											</div>
																		 
								
											
                                            <div class="pull-right">
                                                <button type="submit" name="btnupdatearea" class="btn btn-info btn-corner">Save</button>
												<a href="lostvehicle.php" class="btn btn-danger btn-corner">Cancel</a>
                                            </div>
										
                                        </form>
						
									
									
									
									

								
								</div>
                            </div>
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
		
		
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <s
		cript src="assets/plugins/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
		<script src="assets/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
		<script src="assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
		<script src="assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
		<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE for dropdown  - END --> 
		<script src="assets/plugins/select2/select2.min.js" type="text/javascript"></script> 
		<script src="assets/js/others.js" type="text/javascript"></script>
		
		
		<script type="text/javascript" src="assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>
	
		
		<script type="text/javascript">
		$(document).ready(function(){
			$("#area_form").validate({
				rules:{
					area:{
						required:true,
					}
				}
				});
		
			$("#area_upd_form").validate({
				rules:{
					area:{
						required:true,
					}
				}
				});
		
		
		});
	</script>
	
		

