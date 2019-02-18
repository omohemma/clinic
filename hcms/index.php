<?php 




session_start();
//Check if Userhas been logged in
if(!isset($_SESSION['role'])){
  header("location:sign-in.php");
}

include 'includes/connection.php';

include 'includes/header.php';

?>

<!-- Left navbar-header end -->
<!-- Page Content -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row bg-title">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Hospital Dashboard</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
          <ol class="breadcrumb">
            <li><a href="index.php">Hospital</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <!--row -->
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="white-box">
            <div class="r-icon-stats"> <i class="ti-user bg-megna"></i>
              <div class="bodystate">
                <h4>
                  <?php 

                  $query = mysqli_query($conn,"SELECT * FROM patients");
                  echo mysqli_num_rows($query);
                  ?>
                </h4> 
                <span class="text-muted">Patients</span> </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="white-box">
              <div class="r-icon-stats"> <i class="ti-shopping-cart bg-info"></i>
                <div class="bodystate">
                  <h4>
                    <?php 
                    $date = date("Y-m-d");
                    $query = mysqli_query($conn,"SELECT * FROM appointment WHERE created_at = '$date'");
                    echo mysqli_num_rows($query);
                    ?>
                  </h4> 
                  <span class="text-muted">Visited Today</span> </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="white-box">
                <div class="r-icon-stats"> <i class="ti-wallet bg-success"></i>
                  <div class="bodystate">
                    <h4>
                      <?php 
                      $date = date("Y-m-d");
                      $query = mysqli_query($conn,"SELECT * FROM appointment WHERE created_at = '$date' and attended_to = 'yes'");
                      echo mysqli_num_rows($query);
                      ?>
                    </h4> 
                    <span class="text-muted">Attended To </span> </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="white-box">
                  <div class="r-icon-stats"> <i class="ti-wallet bg-inverse"></i>
                    <div class="bodystate">
                      <h4>
                        <?php 
                        $date = date("Y-m-d");
                        $query = mysqli_query($conn,"SELECT * FROM users WHERE  designation = 'staff'");
                        echo mysqli_num_rows($query);
                        ?>
                      </h4> 
                      <span class="text-muted">Medical Staff</span> </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/row -->
              <!-- /row -->
              <div class="row">
                <div class="col-sm-6">
                  <div class="white-box">
                    <h3 class="box-title m-b-0">New Patient List</h3>
                    <p class="text-muted">this is the sample data here for crm</p>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Hospital No</th>
                            <th> Name</th>
                            <th>Gender</th>

                          </tr>
                        </thead>
                        <tbody>

                          <?php 
                          $query = "SELECT * FROM patients LIMIT 12";
                          $result = mysqli_query($conn,$query);

                          while ( $row = mysqli_fetch_assoc($result)) {

                            @$id += 1;

                            ?>
                            <tr>
                              <td><?php echo $id; ?></td>
                              <td><?php echo $row['hospital_no']; ?></td>
                              <td><?php echo $row['name'] ; ?></td>
                              <td><?php echo $row['gender']; ?></td>
                            </tr>

                          <?php } ?>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="white-box">
                    <h3 class="box-title m-b-0">Doctors Status</h3>
                    <div class="table-responsive">
                      <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                           <th>#</th>
                           <th>Name</th>
                           <th>Department</th>
                           <th>Status</th>
                         </tr>
                       </thead>
                       <tbody>
                        <?php 


                        $query = "SELECT * FROM users WHERE role='doctor' AND status = 'online' OR status ='away' ";
                        $result = mysqli_query($conn,$query);

                        while ( $row = mysqli_fetch_assoc($result)) {


                          @$d_id += 1;


                          ?>
                          <tr>
                           <th><?php echo $d_id; ?></th>
                           <td><?php echo $row['title']." ".$row['fname']." ".$row['lname']; ?></td>
                           <td><?php echo $row['speciality']; ?></td>
                           <?php 

                           if ($row['status'] == 'online') $badge = 'success';
                           if ($row['status'] == 'away') $badge = 'warning';
                           ?>
                           <td><label class="badge badge-<?php echo $badge;?>"><?php echo $row['status']; ?></label></td>
                         </tr>
                       <?php } ?>


                     </tbody>
                   </table>
                 </div>
               </div>
             </div>
           </div>
           <!-- /.row -->
           <!-- .right-sidebar -->
           <div class="right-sidebar">
            <div class="slimscrollright">
              <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
              <div class="r-panel-body">
                <ul>
                  <li><b>Layout Options</b></li>
                  <li>
                    <div class="checkbox checkbox-info">
                      <input id="checkbox1" type="checkbox" class="fxhdr">
                      <label for="checkbox1"> Fix Header </label>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox checkbox-warning">
                      <input id="checkbox2" type="checkbox" class="fxsdr">
                      <label for="checkbox2"> Fix Sidebar </label>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox checkbox-success">
                      <input id="checkbox4" type="checkbox" class="open-close">
                      <label for="checkbox4"> Toggle Sidebar </label>
                    </div>
                  </li>
                </ul>
                <ul id="themecolors" class="m-t-20">
                  <li><b>With Light sidebar</b></li>
                  <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                  <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                  <li><a href="javascript:void(0)" data-theme="gray" class="yellow-theme">3</a></li>
                  <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                  <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                  <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme working">6</a></li>
                  <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                  <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                  <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                  <li><a href="javascript:void(0)" data-theme="gray-dark" class="yellow-dark-theme">9</a></li>
                  <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                  <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                  <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme">12</a></li>
                </ul>
                <ul class="m-t-20 chatonline">
                  <li><b>Chat option</b></li>
                  <li>
                    <a href="javascript:void(0)"><img src="plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                  </li>
                  <li>
                    <a href="javascript:void(0)"><img src="plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                  </li>
                  <li>
                    <a href="javascript:void(0)"><img src="plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                  </li>
                  <li>
                    <a href="javascript:void(0)"><img src="plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                  </li>
                  <li>
                    <a href="javascript:void(0)"><img src="plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                  </li>
                  <li>
                    <a href="javascript:void(0)"><img src="plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                  </li>
                  <li>
                    <a href="javascript:void(0)"><img src="plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                  </li>
                  <li>
                    <a href="javascript:void(0)"><img src="plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- /.right-sidebar -->
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
    <!--Morris JavaScript -->
    <script src="plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="plugins/bower_components/morrisjs/morris.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- jQuery peity -->
    <script src="plugins/bower_components/peity/jquery.peity.min.js"></script>
    <script src="plugins/bower_components/peity/jquery.peity.init.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/dashboard1.js"></script>
    <!--Style Switcher -->
    <script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
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