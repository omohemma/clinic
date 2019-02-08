<?php 

session_start();
//Check if Userhas been logged in
if(!isset($_SESSION['role'])){
	header("location:sign-in.php");
}
include 'includes/action.php';

if(isset($_POST['save']))
{

	$hospital_no = $_GET["hospital_no"];
	$id = $_GET['id'];
	$where = array("id"=>$id);
	$row = $obj->select_record("appointment",$where);

	$myArray =  array(
		'hospital_no' => $hospital_no,
		'name' => $row['name'],
		'age' => $row['age'],
		'doctor' => $_SESSION["name"],
		'remark' => $_POST["remark"],
		'diagnosis' => $_POST["diagnosis"]
		
	);


	if($obj->insert_record("visit_history",$myArray)){


		$id = $_GET['id'];
		$where = array("id"=>$id);
		$myArray =  array(
			'attended_to' => 'yes'

		);

		$obj->update_record("appointment",$where,$myArray);

		header("location:queue.php?msg=done");
	}

}
include 'includes/header.php';
$conn = mysqli_connect('localhost','root','','clinic');

?>
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row bg-title">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h4 class="page-title">Timeline</h4> </div>
				<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
					
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- .row -->
			<div class="row">
				<div class="col-md-12">
					<div class="white-box">

						<form method="post">
							<div>
								<div class="form-group col-md-6">
									<label>Doctors Diagnosis</label>
									<textarea class="form-control" rows="17" name="diagnosis">
										
									</textarea>
								</div>
								<div class="form-group col-md-6">
									<label>Doctors Remark</label>
									<textarea class="form-control" rows="17" name="remark">
									</textarea>
								</div>
							</div>
							<button type="submit" name="save"  class="btn btn-lg btn-block btn-success">Save</button>
						</form>
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
<!-- Custom Theme JavaScript -->
<script src="js/custom.min.js"></script>
<script src="plugins/bower_components/summernote/dist/summernote.min.js"></script>
<script>
	jQuery(document).ready(function () {
		$('.summernote').summernote({
                height: 350, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false // set focus to editable area after initializing summernote
            });
		$('.inline-editor').summernote({
			airMode: true
		});
	});
	window.edit = function () {
		$(".click2edit").summernote()
	}
	, window.save = function () {
		$(".click2edit").summernote('destroy');
	}
</script>
<!--Style Switcher -->
<script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>