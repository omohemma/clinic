<?php 

session_start();
//Check if Userhas been logged in
if(!isset($_SESSION['role'])){
	header("location:sign-in.php");
}
include 'includes/action.php';
include 'includes/header.php';

?>



<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row bg-title">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h4 class="page-title">All Patients [Visited]</h4> </div>
				<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					<ol class="breadcrumb">
						<li><a href="#">Hospital</a></li>
						<li class="active">Visited</li>
					</ol>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- .row -->
			<div class="row">
				<!-- .col -->
				<div class="col-sm-12">
					<div class="panel panel-info">
						<div class="panel-heading"> All Patients [Visited]</div>
						<div class="panel-wrapper collapse in" aria-expanded="true">
							<div class="panel-body">
								<div class="table-responsive">

									<?php if ($_SESSION['role'] == 'doctor') { ?>
										<table id="myTable" class="table table-striped">
											<thead>
												<tr>
													<th>#</th>
													<th>Hospital No</th>
													<th>Name</th>
													<th>Gender</th>
													<th>Age</th>

													<th>Booked On</th>

												</tr>
											</thead>
											<tbody>
												<?php 
												$date = date("Y-m-d");
												$speciality  = $_SESSION['speciality'];
												$where = array( 'service' => $speciality);
												$rows = $obj->fetch_record_cond("appointment",$where);

												foreach ($rows as $row) {
													@$id += 1;
													$time = $row['timestamp'];
													?>
													<tr>
														<td><?php echo $id;  ?></td>
														<td><?php echo $row['hospital_no']; ?></td>
														<td><?php echo $row['name'];  ?></td>
														<td><?php echo $row['gender'];  ?></td>
														<td><?php echo $row['age'];   ?></td>
														<td><?php echo date("h:i a" ,strtotime($time));?></td>

													</tr>
												<?php }?>

											</tbody>
										</table>

										<?php 

									} else {

										?>
										
										<table id="myTable" class="table table-striped">
											<thead>
												<tr>
													<th>#</th>
													<th>Hospital No</th>
													<th>Name</th>
													<th>Gender</th>
													<th>Age</th>
													<th>Department</th>
													<th>Doctor In Charge</th>
													<th>Booked On</th>
												</tr>
											</thead>
											<tbody>
												<?php 
												$date = date("Y-m-d");
												$where = array( 'created_at' =>$date );
												$rows = $obj->fetch_record("appointment");

												foreach ($rows as $row) {
													@$id += 1;
													$time = $row['timestamp'];
													?>
													<tr>
														<td><?php echo $id;  ?></td>
														<td><?php echo $row['hospital_no']; ?></td>
														<td><?php echo $row['name'];  ?></td>
														<td><?php echo $row['gender'];  ?></td>
														<td><?php echo $row['age'];   ?></td>
														<td><?php echo $row['service'];   ?></td>
														<td><?php echo $row['doctor'];   ?></td>
														<td><?php echo date("h:i a" ,strtotime($time));?></td>
													</tr>
												<?php }?>

											</tbody>
										</table>
										<?php 

									}
									?>


								</div>

							</div>
						</div>
					</div>
				</div>
				<!-- /.col -->

			</div>
			<!-- /.row -->
			<!-- /.row -->
			<!-- .right-sidebar -->

		</div>
		<!-- /.container-fluid -->
		<footer class="footer text-center"> 2018 Mobile Health Care System </footer>
	</div>
	<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

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

<script src="plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<!-- end - This is for export functionality only -->
<script>
	$(document).ready(function () {
		$('#myTable').DataTable();
		$(document).ready(function () {
			var table = $('#example').DataTable({
				"columnDefs": [
				{
					"visible": false
					, "targets": 2
				}
				]
				, "order": [[2, 'asc']]
				, "displayLength": 25
				, "drawCallback": function (settings) {
					var api = this.api();
					var rows = api.rows({
						page: 'current'
					}).nodes();
					var last = null;
					api.column(2, {
						page: 'current'
					}).data().each(function (group, i) {
						if (last !== group) {
							$(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
							last = group;
						}
					});
				}
			});
                // Order by the grouping
                $('#example tbody').on('click', 'tr.group', function () {
                	var currentOrder = table.order()[0];
                	if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                		table.order([2, 'desc']).draw();
                	}
                	else {
                		table.order([2, 'asc']).draw();
                	}
                });
            });
	});
	$('#example23').DataTable({
		dom: 'Bfrtip'
		, buttons: [
		'copy', 'csv', 'excel', 'pdf', 'print'
		]
	});
</script>

</body>

</html>