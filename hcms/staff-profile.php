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

$row = $obj->select_record("users",$where);

include 'includes/header.php';

?>
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row bg-title">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h4 class="page-title">Role Profile</h4> </div>
				<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
					<ol class="breadcrumb">
						<li><a href="#">Hospital</a></li>
						<li class="active">Doctor Profile</li>
					</ol>
				</div>
			</div>
			<!-- /.row -->
			<!-- .row -->
			<div class="row">
				<div class="col-md-4 col-xs-12">
					<div class="white-box">
						<div class="user-bg"> <img width="100%" alt="user" src="plugins/images/big/d2.jpg"> </div>
						<div class="user-btm-box">
							<!-- .row -->
							<div class="row text-center m-t-10">
								<div class="col-md-6 b-r"><strong>Name</strong>
									<p><?php echo  $row['fname'];?></p>
								</div>
								<div class="col-md-6"><strong>Designation</strong>
									<p><?php echo  $row['role'];?></p>
								</div>
							</div>
							<!-- /.row -->
							<hr>
							<!-- .row -->
							<div class="row text-center m-t-10">
								<div class="col-md-6 b-r"><strong>Email ID</strong>
									<p><?php echo  $row['email'];
									?></p>
								</div>
								<div class="col-md-6"><strong>Phone</strong>
									<p><?php echo  $row['phone'];
									?></p>
								</div>
							</div>
							<!-- /.row -->
							<hr>
							<!-- .row -->
							<div class="row text-center m-t-10">
								<div class="col-md-12"><strong>Address</strong>
									<p><?php echo  $row['address'];
									?></p>
								</div>
							</div>
							<hr>
							<!-- /.row -->
							<div class="col-md-4 col-sm-4 text-center">
								<p class="text-purple"><i class="ti-facebook"></i></p>
								<h1>258</h1> </div>
								<div class="col-md-4 col-sm-4 text-center">
									<p class="text-blue"><i class="ti-twitter"></i></p>
									<h1>125</h1> </div>
									<div class="col-md-4 col-sm-4 text-center">
										<p class="text-danger"><i class="ti-google"></i></p>
										<h1>140</h1> </div>
									</div>
								</div>
							</div>
							<div class="col-md-8 col-xs-12">
								<div class="white-box">
									<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active nav-item"><a href="#home" class="nav-link" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="ti-home"></i></span><span class="hidden-xs">About Me</span></a></li>
										<li role="presentation" class="nav-item"><a href="#profile" class="nav-link" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Update Profile</span></a></li>

									</ul>
									<!-- /.t
										abs -->
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane active" id="home">
												<div class="row">
													<div class="col-md-4 col-xs-6 b-r"> <strong>Full Name</strong>
														<br>
														<p class="text-muted"><?php echo  $row['fname'];
														?></p>
													</div>
													<div class="col-md-4 col-xs-6 b-r"> <strong>Mobile</strong>
														<br>
														<p class="text-muted"><?php echo  $row['phone'];
														?></p>
													</div>
													<div class="col-md-4 col-xs-6 b-r"> <strong>Email</strong>
														<br>
														<p class="text-muted"><?php echo  $row['email'];
														?></p>
													</div>
													
												</div>
												<hr>
												<p class="m-t-30"></p>
											</div>
											<div role="tabpanel" class="tab-pane" id="profile">
												<form class=" form-horizontal">
													<div class="form-group">
														<label class="col-md-12" for="example-text">Name</span></label>
														<div class="col-md-12">
															<input type="text" id="example-text" name="example-text" class="form-control" placeholder="enter your name" value="<?php echo  $row['fname'];
															?>"> 
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-12" for="bdate">Date of Birth</span></label>
														<div class="col-md-12">
															<input type="text" id="bdate" name="bdate" class="form-control mydatepicker" 
															placeholder="enter your birth date" value="<?php echo  $row['dob'];
															?>">
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-12">Gender</label>
														<div class="col-sm-12">
															<select class="form-control">
																<option selected="" value="<?php echo  $row['gender'];
																?>" disabled><?php echo  $row['gender'];?></option>
																<option value="Male">Male</option>
																<option value="Female">Female</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-12">Profile Image</label>
														<div class="col-sm-12">
															<div class="fileinput fileinput-new input-group" data-provides="fileinput">
																<div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
																<input type="file" name="..."> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-12" for="special">Speciality</span>
															</label>
															<div class="col-md-12">
																

																<select class="form-control" name="role" required="required">
																	<option selected="" readonly value="<?php echo  $row['role'];
																	?>"><?php echo  $row['role'];
																	?></option>
																	<option value="doctor">Doctor</option>
																	<option value="medical-record">Medical Record</option>

																</select> 

															</div>
														</div>
														<div class="form-group">
															<label class="col-md-12">About Me</label>
															<div class="col-md-12">
																<textarea class="form-control" rows="3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</textarea>
															</div>
														</div>


														<button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
														<button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
													</form>
												</div>
												<!-- /.tabs2 -->

											</div>
										</div>
									</div>
								</div>
								<!-- /.row -->
								<!-- .right-sidebar -->

								<!-- /.right-sidebar -->
							</div>
							<!-- /.container-fluid -->
							<footer class="footer text-center"> 2018 Mobile Health Care System </footer>
						</div>
						<!-- /#page-wrapper -->

						<?php 

						include 'includes/footer.php';
						?>