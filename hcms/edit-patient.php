<?php 
session_start();
//Check if Userhas been logged in
if(!isset($_SESSION['role'])){
	header("location:sign-in.php");
}

if (isset($_GET['id'])) {
	$id = $_GET['id'];

}else{
	header("location:index.php");
}

include 'includes/action.php';

$where = array('id' => $id);

$row = $obj->select_record("patients",$where);

if(isset($_POST['update'])){

	$where = array("id"=>$id);
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
		'picture' => $file_name,
		'family' => $_POST["family"],
		'relationship' => $_POST["relationship"],
		'patner_phone' => $_POST["patner_phone"]
		
	);

	if($obj->update_record("patients",$where,$myArray)){
		header("location:patients.php?msg=record_updated");
	}

}


include 'includes/header.php';

?>


<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row bg-title">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h4 class="page-title">Edit Patient</h4> </div>
				<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
					<ol class="breadcrumb">
						<li><a href="index.html">Hospital</a></li>
						<li class="active">Edit Patient</li>
					</ol>
				</div>
				<!-- /.col-lg-12 -->
			</div>


			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-info">
						<div class="panel-heading">Edit Patient</div>
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
														<input type="text" name="hospital_no" class="form-control" value="05/215" readonly="" value="<?php echo $row['hospital_no']; ?>"> </div>
													</div>
												</div>
												<!--/span-->
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label col-md-3">Name</label>
														<div class="col-md-9">
															<input type="text" name="name" class="form-control" placeholder="Patient's Name" value="<?php echo $row['name']; ?>"> </div>
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
																<select class="form-control" name="gender" required="required">
																	<option selected="" value="<?php echo  $row['gender'];
																	?>" disabled><?php echo  $row['gender'];?></option>
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
																	<input type="text" name="dob" class="form-control mydatepicker" placeholder="Date of Birth" value="<?php echo $row['dob']; ?>"> </div>
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
																		<input type="text" name="address" class="form-control" placeholder="Address" value="<?php echo $row['address']; ?>"> </div>
																	</div>
																</div>
																<!--/span-->

																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Marital Status</label>
																		<div class="col-md-9">
																			<select class="form-control" data-placeholder="Choose Marital Status" tabindex="1" name="marital_status" required="required">
																				<option selected="" value="<?php echo  $row['marital_status'];
																				?>" disabled><?php echo  $row['marital_status'];?></option>
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
																			<input type="text" class="form-control" name="family" placeholder="Family Name" value="<?php echo $row['family']; ?>">
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
																			<input type="tel" name="phone" class="form-control" placeholder="Phone Number" value="<?php echo $row['phone']; ?>"> </div>
																		</div>
																	</div>
																	<!--/span-->

																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Email</label>
																			<div class="col-md-9">
																				<input type="email" name="email" class="form-control" placeholder="Email Address" value="<?php echo $row['email']; ?>"> </div>
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
																				<input type="text" name="patner_name" class="form-control" placeholder="Name of Patner" value="<?php echo $row['patner_name']; ?>"> </div>
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group">
																				<label class="control-label col-md-3">Address </label>
																				<div class="col-md-9">
																					<input type="text" name="patner_address" class="form-control" placeholder="Address" value="<?php echo $row['patner_address']; ?>"> </div>
																				</div>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-md-6">
																				<div class="form-group">
																					<label class="control-label col-md-3">Relationship</label>
																					<div class="col-md-9">
																						<input type="text" name="relationship" class="form-control" placeholder="Mother" value="<?php echo $row['relationship']; ?>"> </div>
																					</div>
																				</div>
																				<!--/span-->
																				<div class="col-md-6">
																					<div class="form-group">
																						<label class="control-label col-md-3">Phone Number</label>
																						<div class="col-md-9">
																							<input type="text" name="patner_phone" class="form-control" placeholder="Phone Number" value="<?php echo $row['patner_phone']; ?>"> </div>
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
																									name="update" 
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

</html>