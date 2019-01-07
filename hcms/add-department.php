<?php 

session_start();
//Check if Userhas been logged in
if(!isset($_SESSION['role'])){
	header("location:sign-in.php");
}
include 'includes/functions.php';
include 'includes/action.php';


if(isset($_POST['add']))
{

	$target = '../../assets/images/';
	include 'includes/upload.php';

	$myArray =  array(
		'dept_name' => $_POST["dept"],
		'about' =>validateFormData($_POST["desc"]),
		'icon' => $file_name,
		'dept_slug' => cleanUrl( $_POST["dept"])
		

	);


	if($obj->insert_record("department",$myArray)){
		header("location:add-department.php?msg=record_inserted");
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
				<h4 class="page-title">Add Department</h4>
			</div>
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
				<ol class="breadcrumb">
					<li><a href="index.php">Hospital</a></li>
					<li class="active">Add Department</li>
				</ol>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		
		
		<!-- .row -->
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-info">
					<div class="panel-heading"> Add  Department</div>
					<div class="panel-wrapper collapse in" aria-expanded="true">
						<div class="panel-body">

							<form class="form-horizontal " method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label class="col-md-12">Department Name</label>
									<div class="col-md-12">
										<input type="text" name="dept" class="form-control" placeholder="Name Of Department"> </div>
									</div>

									<div class="form-group">
										<label class="col-md-12">Department Image</label>
										<div class="col-md-12">
											<input type="file" name="file" class="form-control" required="required" placeholder="Department Image"> </div>
										</div>

										<div class="form-group">
											<label class="col-md-12">Description</label>
											<div class="col-md-12">
												<textarea class="form-control" name="desc" rows="5">A Little Description</textarea>
											</div>
										</div>

										<div class="form-actions">
											<div class="row">
												<div class="col-md-6">
													<div class="row">
														<div class="col-md-offset-3 col-md-9">
															<button type="submit" class="btn btn-success" name="add">Submit</button>
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
				<!-- /.row -->


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
    <script src="plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <script src="js/toastr.js"></script>
    <script type="text/javascript">
        //Alerts
        $(".myadmin-alert .closed").click(function (event) {
        	$(this).parents(".myadmin-alert").fadeToggle(350);
        	return false;
        });
        /* Click to close */
        $(".myadmin-alert-click").click(function (event) {
        	$(this).fadeToggle(350);
        	return false;
        });
        $(".showtop").click(function () {
        	$(".alerttop").fadeToggle(350);
        });
        $(".showtop2").click(function () {
        	$(".alerttop2").fadeToggle(350);
        });
        /** Alert Position Bottom  **/
        $(".showbottom").click(function () {
        	$(".alertbottom").fadeToggle(350);
        });
        $(".showbottom2").click(function () {
        	$(".alertbottom2").fadeToggle(350);
        });
        /** Alert Position Top Left  **/
        $("#showtopleft").click(function () {
        	$("#alerttopleft").fadeToggle(350);
        });
        /** Alert Position Top Right  **/
        $("#showtopright").click(function () {
        	$("#alerttopright").fadeToggle(350);
        });
        /** Alert Position Bottom Left  **/
        $("#showbottomleft").click(function () {
        	$("#alertbottomleft").fadeToggle(350);
        });
        /** Alert Position Bottom Right  **/
        $("#showbottomright").click(function () {
        	$("#alertbottomright").fadeToggle(350);
        });
    </script>

</body>

</html>
