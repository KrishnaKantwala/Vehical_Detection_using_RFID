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
				$qry="select * from lostvehicle";
				$res=mysqli_query($con,$qry);
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
							<div class="panel-heading"> <div class="panel-title" style="padding:9px"> <i class=""></i>Complain List </div> 
							
							</div>
					
							<div class="panel-body" class="box">
								<table id="example-1" class="table table-striped dt-responsive display" cellspacing="0" width="100%" border="1">
                                    <thead>
                                        <tr style="padding:6px">
                                        <th>No.</th>
										<th>Ticket Number</th>										
                                        <th>Vehicle Number</th>
										<th>Date</th>
										<th>Description</th>
										<th>status</th>
										<th>User id</th>
										</tr>
									</thead>
                                           
                                    <tbody>
									
									<?php
										if(mysqli_num_rows($res)>0){
													$no=0;
													while($row=mysqli_fetch_assoc($res)){
														$no++;
									?>
											
                                               <tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $row['tid']; ?></td>
												
												<td><?php echo $row['v_number']; ?></td>
													<td><?php echo $row['lostdate']; ?></td>
														<td><?php echo $row['description']; ?></td>
												<td>
													<?php
														if($row['status']==1) echo "<label class='text-success'>Success</label>";
														else echo "<label class='text-danger'>Pending..</label>";
													?>
												</td>
												
												<td><?php echo $row['user_id']; ?>	
												
												<!--<a href="#" class="btn btn-sm btn-warning" rel="tooltip" data-color-class = "black" data-animate=" animated fadeIn" data-toggle="tooltip" data-original-title="View doctor detail" data-placement="top"><i class="fa fa-user-md"></i></a>
												
											
												
												<a href="#" class="btn btn-sm btn-primary" rel="tooltip" data-color-class = "black" data-animate=" animated fadeIn" data-toggle="tooltip" data-original-title="View patient Detail" data-placement="top"><i class="fa fa-wheelchair"></i></a>
												-->
												
												</td>
												
												     
										</tr>
												
											
												
												
												<!--<a href="#" class="btn btn-sm btn-warning" rel="tooltip" data-color-class = "black" data-animate=" animated fadeIn" data-toggle="tooltip" data-original-title="View doctor detail" data-placement="top"><i class="fa fa-user-md"></i></a>
												
												<a href="#" class="btn btn-sm btn-primary" rel="tooltip" data-color-class = "black" data-animate=" animated fadeIn" data-toggle="tooltip" data-original-title="View patient Detail" data-placement="top"><i class="fa fa-wheelchair"></i></a>-->
									
												<?php
												
													}
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
