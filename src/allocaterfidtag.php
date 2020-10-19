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
                                <h1 class="title"><?php //echo $formfor; ?>Allocate RFID Tag</h1>    
							</div>

                            <div class="pull-right hidden-xs">
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="index.php"><i class="fa fa-home"></i>Home</a>
                                    </li>
                                    <li>
                                        <a href="manager.php"><i class="fa fa-user"></i>Allocate RFID Tag</a>
                                    </li>
                                    <li class="active">
                                        <strong><?php // echo $formfor; ?>Allocate RFID Tag</strong>
                                    </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>
						<div class="col-lg-8 row-center">
							<div class="panel panel-primary">
							<div class="panel-heading"> <div class="panel-title" style="padding:9px"><i class="fa fa-user"></i>Allocate RFID Tag</div> 
							</div>
							
					
                            <div class="panel-body">
                             <div class="box">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
									
											<?php
											 
											$qry1="select v_number from vehicle";
											$res1=$con->query($qry1);	
										?>
							
										

									<form id="allocaterfidtag" method="POST" autocomplete="off" enctype="multipart/form-data">

                                      
											<div class="form-group">
												<label class="form-label">Vehicle number*</label>
													<div class="controls">
														<select name="v_number" id="v_number" class="form-control">
															<?php 
															while($row=$res1->fetch_assoc()){
															?>
															
															<option value= "<?php echo $row['v_number'];?>"> <?php echo $row['v_number']; } ?> </option>
														</select>
												
													</div>
								
                                       </div>
										
										 <div class="form-group">
                                                <label class="form-label" for="formfield6">Allocate Rfid Tag Number:</label>
                                                <div class="controls">
													<input type="text" class="form-control" name="tag_number" >
                                                </div>
                                            </div>
											<div class="plist">
											
											
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
			
			$("#allocaterfidtag").validate({
				rules:{
				aadhar_number:{
						number:true,
						required:true,
						minlength:12,
						maxlength:12
					
				},
				
					v_type:{
						required:true,
						maxlength:100,
						
						minlength:true
						
						}
					},
					
									
				
			});
		});
		 $("select[name=v_type]").change(function(){
                $(this).parent(".form-group").siblings(".plist").html("");
                var j = $(this).val();
                var html;
                for (var i = 1; i <= j; i++) {
                html = "<div class='form-group'><div class='panel-heading'><h2 class='panel-title'><p>Vehicle "+i+"</p></h2></div><input class='form-control' name='rfid_tag_number"+i+"' placeholder='Enter Rfid Tag Number'><input class='form-control' name='vehicle_number"+i+"' placeholder='Enter Vehicle Number'><input class='form-control' name='chassis_no"+i+"' placeholder='Enter Chassis Number'><select class='form-control' name='vehicle_class"+i+"'><option value='1'></option></select></div>"; 
                  
                    $(this).parent(".form-group").siblings(".plist").append(html);
                }
					
             });
	</script>
	
	<?php
	require("footerend.php");
	if(isset($_POST['btnadd'])){
	
	
		
		$tag = $_POST['tag_number'];
		$vno = $_POST['v_number'];

$checkdata=" SELECT aadhar_number FROM vehicle  WHERE v_number='$vno' ";
  $result = mysqli_query($con, $checkdata);

$row = mysqli_fetch_array($result);
  $aadhar=$row['aadhar_number'];
	
		
		
		$ins_query="insert into rfid_tag(v_number,tag_number,aadhar_number) 
		values
		(
		'".$vno."',
		'".$tag."' ,'".$aadhar."')";
	
		mysqli_query($con,$ins_query);
		header("location:allocaterfidtag.php");
	}
	
		else{
		echo "button not set";	
		
	}
	
?>