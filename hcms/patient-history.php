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
				<h4 class="page-title">Patients</h4> </div>
				<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					<ol class="breadcrumb">
						<li><a href="#">Hospital</a></li>
						<li class="active">Patients</li>
					</ol>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- .row -->
			<div class="row">
				<!-- .col -->
				<div class="col-sm-12">
					<div class="panel panel-info">
						<div class="panel-heading"> All Patients</div>
						<div class="panel-wrapper collapse in" aria-expanded="true">
							<div class="panel-body">
								<div class="table-responsive">
									<table id="myTable" class="table table-striped">
										<thead>
											<tr>
												<th>#</th>
												<th>Hospital No</th>
												<th>Name</th>
												<th>Gender</th>
												<th>Date of Birth</th>
												<th>Marital Status</th>
												<th>Address</th>
												<th>Phone Number</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php 
											// $where = array('role' => 'dentistry' );
											$rows = $obj->fetch_record("patients");

											foreach ($rows as $row) {
												@$id += 1;
												?>
												<tr>
													<td><?php echo $id;  ?></td>
													<td><?php echo $row['hospital_no']; ?></td>
													<td><?php echo $row['name'];  ?></td>
													<td><?php echo $row['gender'];  ?></td>
													<td><?php echo $row['dob'];   ?></td>
													<td><?php echo $row['marital_status'];   ?></td>
													<td><?php echo $row['address'];   ?></td>
													<td><?php echo $row['phone'];   ?></td>

													<td>
														<a role="button" href="view-patient-history.php?h=<?php echo $row['hospital_no'];?>"><i class="fa fa-eye fa-2x text-success"></i></a>
													</td>
												</tr>
											<?php }?>

										</tbody>
									</table>
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