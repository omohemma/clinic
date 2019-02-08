<?php 
session_start();
//Check if Userhas been logged in
if(!isset($_SESSION['role'])){
	header("location:sign-in.php");
}

include 'includes/action.php';

if(isset($_POST['add']))
{

	$target = '../../images/patients/';
	include 'includes/upload.php';

	$myArray =  array(
		'hospital_no' => $_POST["hospital_no"],
		'name' => $_POST["name"],
		'dob' => $_POST["dob"],
		'gender' => $_POST["gender"],
		'address' => $_POST["address"],
		'marital_status' => $_POST["marital_status"],
		'patner_name' => $_POST["patner_name"],
		'patner_address' => $_POST["patner_address"],
		'email' => $_POST["email"],
		'phone' => $_POST["phone"],
		'picture' =>  $file_name,
		'family' => $_POST["family"],
		'relationship' => $_POST["relationship"],
		'patner_phone' => $_POST["patner_phone"]
		
	);


	if($obj->insert_record("patients",$myArray)){
		header("location:add-patient.php?msg=record_inserted");
	}

}

include 'includes/header.php';

?>


<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row bg-title">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h4 class="page-title">Add Patient</h4> </div>
				<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
					<ol class="breadcrumb">
						<li><a href="index.html">Hospital</a></li>
						<li class="active">Add Patient</li>
					</ol>
				</div>
				<!-- /.col-lg-12 -->
			</div>


			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-info">
						<div class="panel-heading">Add Patient</div>
						<div class="panel-wrapper collapse in" aria-expanded="true">
							<div class="panel-body">
								<form method="post" class="form-horizontal" enctype="multipart/form-data">
									<div class="form-body">
										<h3 class="box-title">Patient Information</h3>
										<hr class="m-t-0 m-b-40">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label col-md-3">Hospital No.</label>
													<div class="col-md-9">
														<?php 
														
														$conn = mysqli_connect('us-cdbr-iron-east-01.cleardb.net','b55dc263b6abad','4056a8d5','heroku_6ce1e53c155f864');
														$query = "SELECT * FROM patients";
														$result = mysqli_query($conn,$query);

														$registered = mysqli_num_rows($result);
														$registered += 1;


														?>

														<input type="text" name="hospital_no" class="form-control" value="<?php echo date("m")."/".$registered; ?>"  readonly> </div>
													</div>
												</div>
												<!--/span-->
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label col-md-3">Name</label>
														<div class="col-md-9">
															<input type="text" name="name" class="form-control" placeholder="Patient's Name"> </div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Gender</label>
															<div class="col-md-9">
																<select class="form-control" name="gender">
																	<option selected="" disabled="">Choose Gender</option>
																	<option value="Male">Male</option>
																	<option value="Female">Female</option>
																</select> </div>
															</div>
														</div>
														<!--/span-->
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label col-md-3">Date of Birth</label>
																<div class="col-md-9">
																	<input type="text" name="dob" class="form-control mydatepicker" placeholder="Date of Birth"> </div>
																</div>
															</div>
															<!--/span-->
														</div>
														<!--/row-->
														<div class="row">

															<!--/span-->
															<div class="col-md-6">
																<div class="form-group">
																	<label class="control-label col-md-3">Address </label>
																	<div class="col-md-9">
																		<input type="text" name="address" class="form-control" placeholder="Address"> </div>
																	</div>
																</div>
																<!--/span-->

																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Marital Status</label>
																		<div class="col-md-9">
																			<select class="form-control" data-placeholder="Choose Marital Status" tabindex="1" name="marital_status">
																				<option selected="" disabled="">Choose Marital Status</option>
																				<option value="Married">Married</option>
																				<option value="Single">Single</option>
																				<option value="Divorced">Divorced</option>

																			</select>
																		</div>
																	</div>
																</div>
															</div>

															<div class="row">

																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Picture </label>
																		<div class="col-md-9">
																			<input type="file" name="file" class="form-control">
																		</div>
																	</div>
																</div>
																<!--/span-->

																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Family</label>
																		<div class="col-md-9">
																			<input type="text" class="form-control" name="family" placeholder="Family Name">
																		</div>
																	</div>
																</div>
															</div>



															<div class="row">

																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Phone Number</label>
																		<div class="col-md-9">
																			<input type="tel" name="phone" class="form-control" placeholder="Phone Number"> </div>
																		</div>
																	</div>
																	<!--/span-->

																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Email</label>
																			<div class="col-md-9">
																				<input type="email" name="email" class="form-control" placeholder="Email Address"> </div>
																			</div>
																		</div>
																	</div>
																</div>
																<h3 class="box-title">Patner Information</h3>
																<hr class="m-t-0 m-b-40">
																<!--/row-->
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Name</label>
																			<div class="col-md-9">
																				<input type="text" name="patner_name" class="form-control" placeholder="Name of Patner"> </div>
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group">
																				<label class="control-label col-md-3">Address </label>
																				<div class="col-md-9">
																					<input type="text" name="patner_address" class="form-control" placeholder="Address"> </div>
																				</div>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-md-6">
																				<div class="form-group">
																					<label class="control-label col-md-3">Relationship</label>
																					<div class="col-md-9">
																						<input type="text" name="relationship" class="form-control" placeholder="Mother"> </div>
																					</div>
																				</div>
																				<!--/span-->
																				<div class="col-md-6">
																					<div class="form-group">
																						<label class="control-label col-md-3">Phone Number</label>
																						<div class="col-md-9">
																							<input type="text" name="patner_phone" class="form-control" placeholder="Phone Number"> </div>
																						</div>
																					</div>
																					<!--/span-->
																				</div>
																				<!--/row-->


																				<div class="form-actions">
																					<div class="row">
																						<div class="col-md-6">
																							<div class="row">
																								<div class="col-md-offset-3 col-md-9">
																									<button type="submit" 
																									name="add" 
																									class="btn btn-success">Submit</button>
																									<button type="button" class="btn btn-default">Cancel</button>
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
    <script src="js/jasny-bootstrap.js"></script>
    <script src="js/mask.js"></script>
    <!--Style Switcher -->
    <script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</htm