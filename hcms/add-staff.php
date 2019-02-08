<?php 
session_start();
//Check if Userhas been logged in
if(!isset($_SESSION['role'])){
    header("location:sign-in.php");
}


if(($_SESSION['designation'] !== 'admin')){
    header("location:index.php");
}


include 'includes/action.php';


if(isset($_POST['add']))
{
    $target = '../../images/staffs/';
    include 'includes/upload.php';
    $formPass = $_POST["lname"];
    $myArray =  array(

        'title' => $_POST["title"],
        'fname' => $_POST["fname"],
        'lname' => $_POST["lname"],
        'gender' => $_POST["gender"],
        'address' => $_POST["address"],
        'state' => $_POST["state"],
        'lga' => $_POST["lga"],
        'hometown' => $_POST["hometown"],
        'email' => $_POST["email"],
        'phone' => $_POST["phone"],
        'picture' => $file_name,
        'speciality' => $_POST["speciality"],
        'file_no' => $_POST["file_no"],
        'dob' => $_POST["dob"],
        'role' => $_POST["role"],
        'appointment' => $_POST["appointment"],
        'designation' => 'staff',
        'username' => substr(strtolower($_POST["lname"]),0,1).".".strtolower($_POST["fname"]),
        'password' => password_hash(strtolower($_POST["lname"]),PASSWORD_DEFAULT)
    );


    if($obj->insert_record("users",$myArray)){
        header("location:staffs.php?msg=record_inserted");
    }

}


include 'includes/header.php';

?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Add Medical Staff</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                    <ol class="breadcrumb">
                        <li><a href="index.html">Hospital</a></li>
                        <li class="active">Add Staff</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading"> Add Medical Staff</div>
                        <div class="panel-wrapper collapse in" aria-expanded="true">
                            <div class="panel-body">
                                <form method="post" class="form-horizontal" enctype="multipart/form-data">
                                    <div class="form-body">
                                        <h3 class="box-title">Personal Information</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Title</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="title" class="form-control" placeholder="Mr.">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">First Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="fname" class="form-control" placeholder="First Name">  </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Last Name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="lname" class="form-control" placeholder="Surname"> </div>
                                                        </div>
                                                    </div>
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

                                                       <!--/span-->
                                                   </div>

                                                   <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Date of Birth</label>
                                                            <div class="col-md-9">
                                                             <input type="text" name="dob" class="form-control mydatepicker" placeholder="Date of Birth">
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <!--/span-->
                                                 <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Address</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="address" class="form-control" placeholder="Address">  </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                                <!--/row-->
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">State of Origin</label>
                                                            <div class="col-md-9">
                                                                <select class="form-control" name="state" data-placeholder="Choose State of Origin" tabindex="1" onchange="stateChange(this);">
                                                                    <option selected disabled="">Choose State</option>
                                                                    <option value='Abia'>Abia</option>
                                                                    <option value='Adamawa'>Adamawa</option>
                                                                    <option value='AkwaIbom'>AkwaIbom</option>
                                                                    <option value='Anambra'>Anambra</option>
                                                                    <option value='Bauchi'>Bauchi</option>
                                                                    <option value='Bayelsa'>Bayelsa</option>
                                                                    <option value='Benue'>Benue</option>
                                                                    <option value='Borno'>Borno</option>
                                                                    <option value='CrossRivers'>CrossRivers</option>
                                                                    <option value='Delta'>Delta</option>
                                                                    <option value='Ebonyi'>Ebonyi</option>
                                                                    <option value='Edo'>Edo</option>
                                                                    <option value='Ekiti'>Ekiti</option>
                                                                    <option value='Enugu'>Enugu</option>
                                                                    <option value='Gombe'>Gombe</option>
                                                                    <option value='Imo'>Imo</option>
                                                                    <option value='Jigawa'>Jigawa</option>
                                                                    <option value='Kaduna'>Kaduna</option>
                                                                    <option value='Kano'>Kano</option>
                                                                    <option value='Katsina'>Katsina</option>
                                                                    <option value='Kebbi'>Kebbi</option>
                                                                    <option value='Kogi'>Kogi</option>
                                                                    <option value='Kwara'>Kwara</option>
                                                                    <option value='Lagos'>Lagos</option>
                                                                    <option value='Nasarawa'>Nasarawa</option>
                                                                    <option value='Niger'>Niger</option>
                                                                    <option value='Ogun'>Ogun</option>
                                                                    <option value='Ondo'>Ondo</option>
                                                                    <option value='Osun'>Osun</option>
                                                                    <option value='Oyo'>Oyo</option>
                                                                    <option value='Plateau'>Plateau</option>
                                                                    <option value='Rivers'>Rivers</option>
                                                                    <option value='Sokoto'>Sokoto</option>
                                                                    <option value='Taraba'>Taraba</option>
                                                                    <option value='Yobe'>Yobe</option>
                                                                    <option value='Zamfara'>Zamafara</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">LGA</label>
                                                            <div class="col-md-9">
                                                                <select class="form-control" data-placeholder="Choose LGA" name="lga" id="lga" tabindex="1">
                                                                    <option selected="" disabled="">Choose LGA</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                </div>

                                                <!--/row-->
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Hometown</label>
                                                            <div class="col-md-9">
                                                                <input type="text" name="hometown" class="form-control" placeholder="Hmetown">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Email</label>
                                                            <div class="col-md-9">
                                                                <input type="email" name="email" class="form-control" placeholder="Email Address">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                </div>

                                                <div class="row">

                                                    <!--/span-->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Phone</label>
                                                            <div class="col-md-9">
                                                                <input type="tel" name="phone" class="form-control" placeholder="Phone Number" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->


                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Picture</label>
                                                            <div class="col-md-9">
                                                                <input type="file" name="file" class="form-control" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <h3 class="box-title">Medical Information</h3>
                                                <hr class="m-t-0 m-b-40">
                                                <div class="row">


                                                   <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">File No.</label>
                                                        <div class="col-md-9">
                                                            <?php 
                                                            $conn = mysqli_connect('us-cdbr-iron-east-01.cleardb.net','b55dc263b6abad','4056a8d5','heroku_6ce1e53c155f864');
                                                            $query = "SELECT * FROM patients";
                                                            $result = mysqli_query($conn,$query);

                                                            $registered = mysqli_num_rows($result);
                                                            $registered += 1;


                                                            ?>
                                                            <input type="text" name="file_no" class="form-control" value="<?php echo date("m")."/".$registered; ?>"  readonly>  </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Role</label>
                                                            <div class="col-md-9">
                                                                <select class="form-control" name="role" required="required">
                                                                 <option selected="" disabled="">Choose Role</option>
                                                                 <option value="doctor">Doctor</option>
                                                                 <option value="medical-record">Medical Record</option>
                                                                 <option value="nurses">Nurses</option>
                                                             </select> </div>
                                                         </div>
                                                     </div>

                                                     <!--/span-->

                                                     <!--/span-->
                                                 </div>
                                                 <!--/row-->
                                                 <div class="row">


                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Speciality</label>
                                                            <div class="col-md-9">
                                                                <select class="form-control" data-placeholder="Choose Speciality" tabindex="1" name="speciality" required="required">

                                                                    <option selected="" disabled="">Choose Speciality</option>
                                                                    <option value="Others">Others</option>
                                                                    <?php 

                                                                    $rows = $obj->fetch_record("department");

                                                                    foreach ($rows as $row) {

                                                                        ?>
                                                                        <option value="<?php echo $row['dept_name']; ?>"><?php echo $row['dept_name'] ; ?></option>
                                                                    <?php } ?>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Date Of Appointment</label>
                                                            <div class="col-md-9">
                                                                <input type="text" name="appointment" class="form-control mydatepicker" placeholder="Date Of Appointment"> </div>
                                                            </div>
                                                        </div>

                                                        <!--/span-->

                                                        <!--/span-->
                                                    </div>

                                                </div>
                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-offset-3 col-md-9">
                                                                    <button type="submit" name="add" class="btn btn-success">Submit</button>
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

                    </div>
                    <!-- /.container-fluid -->
                    <footer class="footer text-center"> 2018 Mobile Health Care System </footer>
                </div>
                <!-- /#page-wrapper -->
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

    <script type="text/javascript" src="js/state-lga.js">
    </script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/mask.js"></script>
    <!--Style Switcher -->
    <script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
