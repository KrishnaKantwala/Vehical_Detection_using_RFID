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
				$qry="select dr_id,dr_name from doctor order by dr_name";
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
							<div class="panel-heading"> <div class="panel-title" style="padding:9px"> <i class="fa fa-user"></i>Member List </div> 
							
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
