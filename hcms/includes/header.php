
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <title>Hospital</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <link href="plugins/bower_components/register-steps/steps.css" rel="stylesheet">
    <link href="plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/bower_components/summernote/dist/summernote.css" rel="stylesheet" />
    <link href="plugins/bower_components/horizontal-timeline/css/horizontal-timeline.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link href="plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />

    <!-- Animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">

    <!-- color CSS you can use different color css from css/colors folder -->
    <!-- We have chosen the skin-blue (green.css) for this starter
          page. However, you can choose any other skin from folder css / colors .
      -->
      <link href="css/colors/megna.css" id="theme" rel="stylesheet">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-sidebar">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a class="logo" href="index.php"><b><img src="plugins/images/eliteadmin-logo.png" alt="home" /></b><span class="hidden-xs"><strong>elite</strong>hospital</span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>

                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">

                  <!-- /.dropdown -->
                  <li class="dropdown">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="../uploads/<?php echo $_SESSION['picture']; ?>" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $_SESSION['name']; ?></b> </a>
                    <ul class="dropdown-menu dropdown-user animated flipInY">
                        <li><a href="profile.php"><i class="ti-user"></i>  My Profile
                            <li><a href="logout.php"><i class="fa fa-power-off"></i>  Logout</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>

                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">

                        <li class="user-pro">
                            <a href="#" class="waves-effect"><img src="../uploads/<?php echo  $_SESSION['picture']; ?>" alt="user-img" class="img-circle"> <span class="hide-menu"><?php echo $_SESSION['name']; ?><span class="fa arrow"></span></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li><a href="profile.php"><i class="ti-user"></i> My Profile</a></li>

                                <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>

                        <li class="nav-small-cap m-t-10 font-weight-bold text-center">:: Main Navigation ::</li>
                        <li> <a href="index.php" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                        
                        
                       <!--  <li> <a href="javascript:void(0);" class="waves-effect"><i class="ti-calendar p-r-10"></i> <span class="hide-menu"> Appointment <span class="fa arrow"></span></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="doctor-schedule.php">Doctor Schedule</a> </li>
                                <li> <a href="book-appointment.php">Book Appointment</a> </li>
                            </ul>
                        </li> -->

                        
                        <li> <a href="queue.php" class="waves-effect"><i class="ti-calendar p-r-10"></i><span class="hide-menu">Queue List</span></a>
                        </li>

                        <!-- <li> <a href="javascript:void(0);" class="waves-effect"><i class="ti-calendar p-r-10"></i> <span class="hide-menu"> Visit History <span class="fa arrow"></span></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="doctor-schedule.php">Doctor Schedule</a> </li>
                                <li> <a href="book-appointment.php">Book Appointment</a> </li>
                            </ul>
                        </li> -->
                        <?php if($_SESSION['designation'] == 'admin'){ ?>
                            <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-people p-r-10"></i> <span class="hide-menu"> Departments <span class="fa arrow"></span></span></a>
                                <ul class="nav nav-second-level">
                                    <li> <a href="departments.php">All Departments</a> </li>
                                    <li> <a href="add-department.php">Add Departments</a> </li>

                                </ul>
                            </li>

                            <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-md p-r-10"></i> <span class="hide-menu"> Medical Staff <span class="fa arrow"></span></span></a>
                                <ul class="nav nav-second-level">
                                    <li> <a href="staffs.php">All Staffs</a> </li>

                                    <li> <a href="add-staff.php">Add Staff</a> </li>

                                </ul>
                            </li>
                        <?php } ?>
                        <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-people p-r-10"></i> <span class="hide-menu"> Patients <span class="fa arrow"></span></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="patients.php">All Patients</a> </li>
                                <li> <a href="add-patient.php">Add Patient</a> </li>
                            </ul>
                        </li>
                        <?php if($_SESSION['designation'] == 'admin' or $_SESSION['role'] == 'doctor'){ ?>
                            <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-people p-r-10"></i> <span class="hide-menu">Patient History <span class="fa arrow"></span></span></a>
                                <ul class="nav nav-second-level">
                                    <li> <a href="visited.php">Visited</a> </li>
                                    <li> <a href="patient-history.php">Patient History</a> </li>
                                </ul>
                            </li>
                        <?php } ?>
<!--                         <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-chart p-r-10"></i> <span class="hide-menu"> Reports <span class="fa arrow"></span></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="payment-report.php">Payment Report</a></li>
                                <li> <a href="income-report.php">Income Report</a></li>
                                <li> <a href="sales-report.php">Sales Report</a></li>
                            </ul>
                        </li> -->
                       <!--  <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-inr p-r-10"></i> <span class="hide-menu"> Payments <span class="fa arrow"></span></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="payments.php">Payments</a></li>
                                <li> <a href="add-payments.php">Add Payment</a></li>
                                <li> <a href="patient-invoice.php">Patient Invoice</a></li>
                            </ul>
                        </li> -->

                        <?php if( $_SESSION['role'] == 'doctor'){ ?>

                            <li><a href="timeout.php" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Timeout</span></a></li>
                        <?php }?>

                        <li><a href="logout.php" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                    </ul>
                </div>
            </div>
        <!-- Left navbar-header end -->