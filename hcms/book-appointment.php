<?php 

session_start();
//Check if Userhas been logged in
if(!isset($_SESSION['role'])){
	header("location:sign-in.php");
}
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$hospital_no =$_GET['hospital_no'];
}else{
	header("location:index.php");
}

include 'includes/action.php';

$where = array('id' => $id,'hospital_no' => $hospital_no);

$row = $obj->select_record("patients",$where);


if(isset($_POST['book']))
{

	$date = date("Y-m-d");


	$docorId = $_POST["subcat1"];
	$cond = array('role' => 'doctor' , 'id' => $docorId);
	$rows = $obj->select_record("users",$cond);

	if ($rows['status'] === 'away') {
		$phone = $rows['phone'];
		$name = $rows['title'].' '.$rows['fname'].' '.$rows['lname'];


//allow remote access to this script, replace the * to your domain e.g http://www.example.com if you wish to recieve requests only from your server
		header("Access-Control-Allow-Origin: http://localhost/clinic/hcms/");
//rebuild form data
		$message = 'Hi '.$name.' you have a patient awaiting you - '.'Name: '.$_POST["name"].' ,Urgency: '.$_POST["urgency"];

		$sender = 'HCMS';
		$postdata = http_build_query(
			array(
				'username' => 'emmaomoh@gmail.com',
				'password' => 'kach2boyz',
				'message' => $message,
				'mobiles' => $phone,
				'sender' => $sender,
			)
		);
//prepare a http post request
		$opts = array('http' =>
			array(
				'method'  => 'POST',
				'header'  => 'Content-type: application/x-www-form-urlencoded',
				'content' => $postdata
			)
		);
//craete a stream to communicate with betasms api
		$context  = stream_context_create($opts);
//get result from communication
		$result = file_get_contents('http://login.betasms.com/api/', false, $context);
//return result to client, this will return the appropriate respond code
		echo $result;



	}else{
		
		$name = $rows['title'].' '.$rows['fname'].' '.$rows['lname'];
	}

	$myArray =  array(
		'hospital_no' => $_POST["hospital_no"],
		'name' => $_POST["name"],
		'age' => $_POST["age"],
		'gender' => $_POST["gender"],
		'service' => $_POST["service"],
		'urgency' => $_POST["urgency"],
		'doctor' => $name,
		'created_at' => $date

	);


	if($obj->insert_record("appointment",$myArray)){
		header("location:patients.php?msg=appointment-booked");
	}

}
include 'includes/header.php';

?>




<!-- Left navbar-header end -->
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row bg-title">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h4 class="page-title">Book Appointment</h4>
			</div>
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
				<ol class="breadcrumb">
					<li><a href="index.php">Hospital</a></li>
					<li class="active">Book Appointment</li>
				</ol>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-info">
					<div class="panel-heading"> Book An Appointment</div>
					<div class="panel-wrapper collapse in" aria-expanded="true">
						<div class="panel-body">
							<form method="post" class="form-horizontal">
								<div class="form-body">
									<h3 class="box-title">Appointment Information</h3>
									<hr class="m-t-0 m-b-40">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Hospital No.</label>
												<div class="col-md-9">
													<input type="text"
													name="hospital_no" class="form-control" value="<?php echo  $row['hospital_no'];
													?>" readonly>
												</div>
											</div>
										</div>
										<!--/span-->
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Name</label>
												<div class="col-md-9">
													<input type="text" name="name" class="form-control" value="<?php echo  $row['name'];
													?>" readonly>  </div>
												</div>
											</div>
											<!--/span-->
										</div>
										<!--/row-->
										<div class="row">

											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label col-md-3">Age</label>
													<div class="col-md-9">
														<input type="number" name="age" class="form-control" placeholder="22" value="<?php echo($row['dob'])
														?>" readonly> </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label col-md-3">Gender</label>
														<div class="col-md-9">
															<input type="text"  class="form-control" name="gender" value="<?php echo($row['gender']);
															?>"  readonly>
														</input> </div>
													</div>
												</div>
												<!--/span-->

												<!--/span-->
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label col-md-3">Service</label>
														<div class="col-md-9">
															<select class="form-control" data-placeholder="Choose Service" tabindex="1" name="service" required="required" id="maincategory">

																<option selected="" disabled="">Choose Service</option>
																<?php 

																$rows = $obj->fetch_record("department");

																foreach ($rows as $row) {

																	?>


																	?>
																	<option value="<?php echo $row['dept_name']; ?>"><?php echo $row['dept_name']; ?></option>
																<?php }?>

															</select>
														</div>
													</div>
												</div>
												<!--/span-->
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label col-md-3">Choose Doctor</label>
														<div class="col-md-9">


															<select class="form-control" name="subcat1" id="subcat1">						
															</select> </div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Urgency Level</label>
															<div class="col-md-9">
																<select class="form-control" data-placeholder="Choose Urgency Level" tabindex="1" name="urgency" required="required">
																	<option selected="" disabled="">Choose Urgency Level</option>
																	<option value="Normal">Normal</option>
																	<option value="Emergency">Emergency</option>
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
														<!-- <div class="col-md-6">
															<div class="form-group">
																<label class="control-label col-md-3">Date/Time</label>
																<div class="col-md-9">
																	<input type="text" class="form-control mydatepicker" name="validity"  readonly="" value="<script type='text/javascript'>getDate();</script>"> </div>
																</div>
															</div> -->
															<!--/span-->
														</div>

													</div>
													<div class="form-actions">
														<div class="row">
															<div class="col-md-6">
																<div class="row">
																	<div class="col-md-offset-3 col-md-9">
																		<button type="submit" name="book" class="btn btn-success">Submit</button>
																		<button type="reset" class="btn btn-default">Cancel</button>
																	</div>
																</div>
															</div>
															<div class="col-md-6"> </div>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--./row-->

						</div>
						<!-- /.container-fluid -->
						<footer class="footer text-center"> 2018 Mobile Health Care System </footer>
					</div>
					<!-- /#page-wrapper -->
				</div>
				<!-- /#wrapper -->
				<!-- jQuery -->
				<script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
				<!-- Bootstrap Core JavaScript -->
				<script src="bootstrap/dist/js/tether.min.js"></script>
				<script src="bootstrap/dist/js/bootstrap.min.js"></script>
				<script src="plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
				<!-- Menu Plugin JavaScript -->
				<script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
				<!--slimscroll JavaScript -->
				<script src="js/jquery.slimscroll.js"></script>
				<!--Wave Effects -->
				<script src="js/waves.js"></script>
				<!-- Date Picker Plugin JavaScript -->
				<script src="plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
				<script type="text/javascript">
        // Date Picker
        jQuery('.mydatepicker').datepicker();

    </script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/mask.js"></script>
    <!--Style Switcher -->
    <script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>

    <script type="text/javascript">
    	$(document).ready(function(){
    		$('#maincategory').on('change',function(){
    			var mainactegory_ID = $(this).val();
    			if(mainactegory_ID){
    				$.ajax({
    					type:'POST',
    					url:'ajaxData.php',
    					data:'mainactegory_ID='+mainactegory_ID,
    					success:function(html){
    						$('#subcat1').html(html);
    						$('#subcat2').html('<option value="">Select sub 1</option>'); 
    					}
    				}); 
    			}else{
    				$('#subcat1').html('<option value="">Select main cat</option>');
    				$('#city').html('<option value="">Select sub cat 1</option>'); 
    			}
    		});

    		$('#subcat1').on('change',function(){
    			var subcat1_id = $(this).val();
    			if(subcat1_id){
    				$.ajax({
    					type:'POST',
    					url:'ajaxData.php',
    					data:'subcat1_id='+subcat1_id,
    					success:function(html){
    						$('#city').html(html);
    					}
    				}); 
    			}else{
    				$('#city').html('<option value="">select sub 1</option>'); 
    			}
    		});
    	});
    </script>
</body>

</html>
