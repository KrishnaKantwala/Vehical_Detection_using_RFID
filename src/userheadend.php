

    </head>
    <!-- END HEAD -->
<?php 
	//$qry="select m_profile_image from manager where m_id=".$_SESSION['m_id'];
	//$res=mysqli_query($con,$qry);
	//$row=mysqli_fetch_assoc($res);
?>
    <!-- BEGIN BODY -->
    <body class="sidebar-collapse"><!-- START TOPBAR -->
        <div class='page-topbar sidebar-shift' style="background:#2D4153">
            <div class='logo-area'>
              <!--<h3 style="color:#FFF;"><center>edrf</center></h3>-->
            </div>
            <div class='quick-area'>
                <div class='pull-left'>
                    <ul class="info-menu left-links list-inline list-unstyled">
                        <!--<li class="sidebar-toggle-wrap">
                            <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
						
                        
                        <li class="hidden-sm hidden-xs searchform">
                            <div class="input-group">
                                <form action="http://jaybabani.com/ultra-admin-html/search-page.html" method="post">
                                    <input type="text" class="form-control animated fadeIn" placeholder="Search & Enter">
                                    <input type='submit' value="">
                                </form>
                            </div>
                        </li>-->
                    </ul>
                </div>		
                <div class='pull-right'>
                    <ul class="info-menu right-links list-inline list-unstyled">
                        <li class="profile">
                            <a href="#" data-toggle="dropdown" class="toggle">
                               <!-- <img src="images/manager/<?php //echo $row['m_profile_image'] ?>" alt="user-image" class="img-circle img-inline"> -->
                                <span><?php echo $_SESSION['emailid'] ?> <i class="fa fa-angle-down"></i></span>
                            </a>
                            <ul class="dropdown-menu profile animated fadeIn">
                                <li>
                                    <a href="user_form.php?m_id=<?php echo $_SESSION['user_id']; ?>">
                                        <i class="fa fa-user"></i>
                                        Update Profile
                                    </a>
                                </li>
                                <li>
									<?php 
										$msg="";
									?>
                                    <a data-toggle="modal" href="reset_password.php?dr_id=0&m_id=<?php echo $_SESSION['user_id']; ?>&msg=<?php echo $msg; ?>">
                                        <i class="fa fa-cog"></i>
                                        Password Change
                                    </a>
                                </li>

                                <li class="last">
                                    <a href="logout.php">
                                        <i class="fa fa-lock"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                       
                    </ul>			
                </div>		
            </div>

        </div>
        <!-- END TOPBAR -->

        <!-- START CONTAINER -->
        <div class="page-container row-fluid">

            <!-- SIDEBAR - START -->
            <div class="page-sidebar collapseit">


                <!-- MAIN MENU - START -->
                <div class="page-sidebar-wrapper" id="main-menu-wrapper" style="background:#2D4153"> 

                    <!-- USER INFO - START -->
                    <div class="profile-info row">

                        <div class="profile-image col-md-4 col-sm-4 col-xs-4">
                            <a href="#">
                               <!-- <img src="images/manager/<?php //echo $row['m_profile_image'] ?>" alt="user-image" class="img-circle img-inline"> -->
                            </a>
                        </div>
                        <div class="profile-details col-md-8 col-sm-8 col-xs-8">
                            <h3>
                                <a href="#"><?php echo $_SESSION['emailid'] ?> </a>
                            </h3>
                            <p class="profile-title">User</p>
                        </div>

                    </div>
                    <!-- USER INFO - END -->

                    <ul class='wraplist'>	
                        <li class=""> 
                            <a href="home.php">
                                <i class="fa fa-dashboard"></i>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                      
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-car"></i>
                                <span class="title">Vehicle</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
								 <li>
                                    <a class="" href="listvehicle.php">List of Vehicles</a>
                                </li>    
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-envelope"></i>
                                <span class="title">Memo</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="viewlist.php">Memo History</a>
                                </li>
                                
                         
                            </ul>
                        </li>
						
						<li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-credit-card"></i>
                                <span class="title">Payment</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                
                                <li>
                                    <a class="" href="home.php">Payment History</a>
                                </li>
                         
                            </ul>
                        </li>
                       
						 
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-edit"></i>
                                <span class="title">Complains</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="lostvehicle.php">Register Complain</a>
                                </li>
                                <li>
                                    <a class="" href="ticket.php">View Status</a>
                                </li>
                               
                            </ul>
                        </li>
                        
                      
					  </ul>

                </div>
                <!-- MAIN MENU - END -->

            </div>
			
			
                                        <!-- modal start -->
                                        <div class="modal fade" id="ultraModal-10" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
                                            <div class="modal-dialog animated fadeInDown">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Fade Down Modal</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Body goes here...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                                        <button class="btn btn-success" type="button">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->
			