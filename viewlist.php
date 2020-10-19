<?php
			require("headerstart.php");
?>

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <link href="assets/plugins/datatables/css/jquery.dataTables.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/datatables/extensions/TableTools/css/dataTables.tableTools.min.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->

<?php
				require("headerend.php");
				//$qry="select * from rto";
				//$res=mysqli_query($con,$qry);
?>
<!-- START CONTENT -->
            <section id="main-content" class="sidebar_shift">
                <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title">Dashboard</h1>                     
							</div>

                        </div>
                    </div>
                    <div class="clearfix"></div>

					
					<div class="col-lg-12">
                        <section class="box">
						<div class="panel panel-primary">
							<div class="panel-heading"> <div class="panel-title" style="padding:9px"> <i class=""></i>Vehicle List </div> 
							
							</div>
					
							<div class="panel-body" class="box">
								<table id="example-1" class="table table-striped dt-responsive display" cellspacing="0" width="100%" border="1">
                                    <thead>
                                        <tr style="padding:6px">
                                        <th>No.</th>
										<th>User Name</th>										
                                        <th>Address</th>
										<th>Contact Number</th>
										<th>Aadhar Number</th>
										<th>Vehicle Number</th>
										<th>Vehicle type</th>
										<th>RFID Tag Number</th>
										<th>Status</th>
										</tr>
									</thead>
                                           
                                    <tbody>
									
									<?php
										
														
													$qry1="select * from rto1 inner join vehicle where rto1.aadhar_number = vehicle.aadhar_number";
													$res1=mysqli_query($con,$qry1);
													$no=1;
													if(mysqli_num_rows($res1)>0){
													
														while($row=mysqli_fetch_assoc($res1)){
										
												?>
										<tr>
												<td><?php echo $no++; ?></td>
												<td><?php echo $row['uname']; ?></td>
												
												<td><?php echo $row['addr']; ?></td>
												
												<td><?php echo $row['mobile']; ?></td>
												
												<td><?php echo $row['aadhar_number']; ?></td>
												
												<td><?php echo $row['v_number']; ?></td>
												
												<td><?php echo $row['v_type']; ?></td>
												
												<td><?php echo $row['rfid_tag_number']; ?></td>
												
												<td><?php echo $row['verified']; ?></td>
												
												
												<!--<a href="#" class="btn btn-sm btn-warning" rel="tooltip" data-color-class = "black" data-animate=" animated fadeIn" data-toggle="tooltip" data-original-title="View doctor detail" data-placement="top"><i class="fa fa-user-md"></i></a>
												
											
												
												<a href="#" class="btn btn-sm btn-primary" rel="tooltip" data-color-class = "black" data-animate=" animated fadeIn" data-toggle="tooltip" data-original-title="View patient Detail" data-placement="top"><i class="fa fa-wheelchair"></i></a>
												-->
												
												
												
												     
										</tr>
												
												<?php
														}
														}else{
												?>
											<tr>	
												<td><?php echo "REcords not found"; ?></td>
												
												
												<!--<a href="#" class="btn btn-sm btn-warning" rel="tooltip" data-color-class = "black" data-animate=" animated fadeIn" data-toggle="tooltip" data-original-title="View doctor detail" data-placement="top"><i class="fa fa-user-md"></i></a>
												
												<a href="#" class="btn btn-sm btn-primary" rel="tooltip" data-color-class = "black" data-animate=" animated fadeIn" data-toggle="tooltip" data-original-title="View patient Detail" data-placement="top"><i class="fa fa-wheelchair"></i></a>-->
												
												     
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
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <script src="assets/plugins/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
		<script src="assets/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
		<script src="assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
		<script src="assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
		<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 
			<?php 
				require("footerend.php");
				
			?>
