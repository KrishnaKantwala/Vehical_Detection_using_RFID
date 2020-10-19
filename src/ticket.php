<?php
			require("userhead.php");
?>

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <link href="assets/plugins/datatables/css/jquery.dataTables.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/datatables/extensions/TableTools/css/dataTables.tableTools.min.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->

<?php
				require("userheadend.php");
				$qry="select * from lostvehicle where user_id='". $_SESSION['user_id']."'";
				$res=mysqli_query($con,$qry);
?>
<!-- START CONTENT -->
            <section id="main-content" class="sidebar_shift">
                <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title">Compalin Detail</h1>                     
							</div>

                            <div class="pull-right hidden-xs">
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="home.php"><i class="fa fa-home"></i>Home</a>
                                    </li>

                                    <li class="active">
                                        <strong>Complain</strong>
                                    </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>

					
					<div class="col-lg-12">
                        <section class="box">
						<div class="panel panel-primary">
							<div class="panel-heading"> <div class="panel-title" style="padding:9px"> <i class="fa fa-edit"></i>Complain List </div> 
							
							
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
												
												<td>	
												<?php
													//if($row['ns_status']==1){
												?>
												
												<!--<a href="ticket.php?ns_id=<?php //echo $row['tid']; ?>&action=inactivate" class="btn btn-sm btn-danger" rel="tooltip" data-color-class = "black" data-animate=" animated fadeIn" data-toggle="tooltip" data-original-title="Inactivate" data-placement="top" onclick="return confirm('Are you sure want to inactivate this news?')"><i class="fa fa-times"></i></a>
												<?php 
													//}else{
												?>
												<a href="news.php?ns_id=<?php //echo $row['ns_id']; ?>&action=activate" class="btn btn-sm btn-success" rel="tooltip" data-color-class = "black" data-animate=" animated fadeIn" data-toggle="tooltip" data-original-title="Activate" data-placement="top" onclick="return confirm('Are you sure want to activate this news?')"><i class="fa fa-check"></i></a>
										<?php 
												//}
										?>
										-->
												
												</td>       
                                 
												</tr>
												
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
				/*if(isset($_GET['ns_id'])&&isset($_GET['action'])){
					if($_GET['action']=="activate"){
						$qry="update news set ns_status=1 where ns_id=".$_GET['ns_id'];
						mysqli_query($con,$qry);
						header("location:news.php");
					}else if($_GET['action']=="inactivate"){
						$qry="update news set ns_status=0 where ns_id=".$_GET['ns_id'];
						mysqli_query($con,$qry);
						header("location:news.php");			
					}else{
						header("location:news.php");
					}
				}
				*/
			?>
