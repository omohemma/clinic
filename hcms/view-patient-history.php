<?php 

session_start();
//Check if Userhas been logged in
if(!isset($_SESSION['role'])){
	header("location:sign-in.php");
}
include 'includes/action.php';


include 'includes/header.php';
$conn = mysqli_connect('localhost','root','','clinic');

?>
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row bg-title">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h4 class="page-title">Visit History</h4> </div>
				<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
					
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- .row -->
			<div class="row">

				<?php 


				$hospital_no = $_GET['h'];

				$where = array('hospital_no' =>$hospital_no );

				$rows = $obj->fetch_record_cond('visit_history',$where);

				foreach ($rows as $row ) {
					
					$time = $row['created_at'];

					?>
					<div class="panel panel-info block3 col-md-12">
						<div class="panel-heading"> Visit History
							<div class="panel-action">
								<a href="includes/action.php?delete=3&id=<?php echo $row ['id']; ?>" ><i class="fa fa-trash fa-2x" aria-hidden="true"></i> Delete</a>
							</div>

						</div>
						<div class="panel-wrapper collapse in" aria-expanded="true">
							<div class="panel-body">

								<h4>Doctor's Diagnosis</h4>
								<p><?php echo $row ['diagnosis'];  ?></p> 
								<br>
								<h4>Doctor's Remark</h4>
								<p><?php echo $row ['remark'];  ?></p> 
								
								
							</div>
						</div>
						<div class="panel-footer"> <?php echo date("d M Y" ,strtotime($time))." - ".$row['doctor'];  ?> </div>

					</div>

				<?php } ?>



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