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
                                <h1 class="title"><?php //echo $formfor; ?>Add Vehicle Class</h1>    
							</div>

                            <div class="pull-right hidden-xs">
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="index.php"><i class="fa fa-home"></i>Home</a>
                                    </li>
                                    <li>
                                        <a href="manager.php"><i class="fa fa-user"></i>Add vehicle Class</a>
                                    </li>
                                    <li class="active">
                                        <strong><?php // echo $formfor; ?>Add vehicle Class</strong>
                                    </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>
						<div class="col-lg-8 row-center">
							<div class="panel panel-primary">
							<div class="panel-heading"> <div class="panel-title" style="padding:9px"><i class="fa fa-car"></i>Add vehicle Class</div> 
							</div>
							
					
                            <div class="panel-body">
                             <div class="box">
                                    <div class="col-md-12 col-sm-12 col-xs-12">

									<form id="addvehicleclass" method="POST" autocomplete="off" enctype="multipart/form-data">

                                       
											
										
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
                        </section>
						</div>
                </section>
            </section>
            <!-- END CONTENT -->
			 <section id="main-content" class="sidebar_shift">
                <section class="wrapper" style='margin-top:5px;margin-left:210px;display:inline-block;width:100%;padding:15px 0 0 15px;'>
				
                    
                    <div class="clearfix"></div>
					
					
					<div class="col-lg-8" >
                        <section class="box">
						<div class="panel panel-primary">
							<div class="panel-heading"> <div class="panel-title" style="padding:9px"> <i class="fa fa-car"></i>Vehicle Class List </div> 
						
							</div>
					
							<div class="panel-body" class="box">
								<table id="example-1" class="table table-striped dt-responsive display" cellspacing="0" width="100%" border="1">
                                    <thead>
                                        <tr style="padding:6px">
                                        <th>No.</th>
										<th>Vehicle Type</th>									
										
										</tr>
									</thead>
                                           
                                    <tbody>
									
									<?php
										
														
													$qry1="select * from addvehicle_class";
													$res1=mysqli_query($con,$qry1);
													$no=1;
													if(mysqli_num_rows($res1)>0){
													
														while($row=mysqli_fetch_assoc($res1)){
										
												?>
										<tr>
												<td><?php echo $no++; ?></td>
												<td><?php echo $row['v_type']; ?></td>
											
								
										</tr>
												
												<?php
														}
														}else{
												?>
											<tr>	
												<td colspan="3"> <?php echo "REcords not found"; ?></td>
									
											</tr>
												
												<?php
														}
													
													
												?>
												
									
									          </tbody>
                                        
								</table>
							</div>
                    </div>
                    </div>
                </section>
                </section>
<?php
		require("footerstart.php");
?>

	<script type="text/javascript" src="assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="assets/plugins/fileinput/fileinput.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			
			$("#addvehicleclass").validate({
				rules:{
				
					v_type:{
						required:true,
						maxlength:100,
						
						minlength:5
						}
					},
					
					
				
			});
		});
	</script>

	
	
	<?php
	require("footerend.php");
	if(isset($_POST['btnadd'])){
		
		
		$vtype = $_POST['v_type'];
		
		
		$ins_query="insert into addvehicle_class(v_type) 
		values
		('".$vtype."' )";
	
		mysqli_query($con,$ins_query);
		header("location:addvehicleclass.php");
	}
	
		else{
		echo "button not set";	
		
	}
	
?>