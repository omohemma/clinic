<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <title>Elite Hospital Admin Template - Hospital admin dashboard web app kit</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">

    <!-- color CSS -->
    <link href="css/colors/megna.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o)
        , m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-19175540-9', 'auto');
    ga('send', 'pageview');
</script>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Top Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a class="logo" href="index.html"><b><img src="plugins/images/eliteadmin-logo.png" alt="home" /></b><span class="hidden-xs"><strong>elite</strong>hospital</span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                        </li>
                    </ul>
                    <ul class="nav navbar-top-links navbar-right pull-right">
                        <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
                          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                      </a>
                      <ul class="dropdown-menu mailbox animated flipInY">
                        <li>
                            <div class="drop-title">You have 4 new messages</div>
                        </li>
                        <li>
                            <div class="message-center">
                                <a href="#">
                                    <div class="user-img"> <img src="plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                        </a>
                                        <a href="#">
                                            <div class="user-img"> <img src="plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <a href="#">
                                                <div class="user-img"> <img src="plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                        </li>
                                    </ul>
                                    <!-- /.dropdown-messages -->
                                </li>
                                <!-- /.dropdown -->
                                <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-note"></i>
                                  <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                              </a>
                              <ul class="dropdown-menu dropdown-tasks animated flipInX">
                                <li>
                                    <a href="#">
                                        <div>
                                            <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                                            <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <div>
                                            <p> <strong>Task 2</strong> <span class="pull-right text-muted">20% Complete</span> </p>
                                            <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <div>
                                            <p> <strong>Task 3</strong> <span class="pull-right text-muted">60% Complete</span> </p>
                                            <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <div>
                                            <p> <strong>Task 4</strong> <span class="pull-right text-muted">80% Complete</span> </p>
                                            <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                            <!-- /.dropdown-tasks -->
                        </li>
                        <!-- /.dropdown -->
                        <!-- .Megamenu -->
                        <li class="mega-dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><span class="hidden-xs">Mega</span> <i class="icon-options-vertical"></i></a>
                            <ul class="dropdown-menu mega-dropdown-menu animated bounceInDown">
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Forms Elements</li>
                                        <li><a href="form-basic.html">Basic Forms</a></li>
                                        <li><a href="form-layout.html">Form Layout</a></li>
                                        <li><a href="form-advanced.html">Form Addons</a></li>
                                        <li><a href="form-material-elements.html">Form Material</a></li>
                                        <li><a href="form-float-input.html">Form Float Input</a></li>
                                        <li><a href="form-upload.html">File Upload</a></li>
                                        <li><a href="form-mask.html">Form Mask</a></li>
                                        <li><a href="form-img-cropper.html">Image Cropping</a></li>
                                        <li><a href="form-validation.html">Form Validation</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Advance Forms</li>
                                        <li><a href="form-dropzone.html">File Dropzone</a></li>
                                        <li><a href="form-pickers.html">Form-pickers</a></li>
                                        <li><a href="icheck-control.html">Icheck Form Controls</a></li>
                                        <li><a href="form-wizard.html">Form-wizards</a></li>
                                        <li><a href="form-typehead.html">Typehead</a></li>
                                        <li><a href="form-xeditable.html">X-editable</a></li>
                                        <li><a href="form-summernote.html">Summernote</a></li>
                                        <li><a href="form-bootstrap-wysihtml5.html">Bootstrap wysihtml5</a></li>
                                        <li><a href="form-tinymce-wysihtml5.html">Tinymce wysihtml5</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Table Example</li>
                                        <li><a href="basic-table.html">Basic Tables</a></li>
                                        <li><a href="table-layouts.html">Table Layouts</a></li>
                                        <li><a href="data-table.html">Data Table</a></li>
                                        <li class="hidden"><a href="crud-table.html">Crud Table</a></li>
                                        <li><a href="bootstrap-tables.html">Bootstrap Tables</a></li>
                                        <li><a href="responsive-tables.html">Responsive Tables</a></li>
                                        <li><a href="editable-tables.html">Editable Tables</a></li>
                                        <li><a href="foo-tables.html">FooTables</a></li>
                                        <li><a href="jsgrid.html">JsGrid Tables</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Charts</li>
                                        <li> <a href="flot.html">Flot Charts</a> </li>
                                        <li><a href="morris-chart.html">Morris Chart</a></li>
                                        <li><a href="chart-js.html">Chart-js</a></li>
                                        <li><a href="peity-chart.html">Peity Charts</a></li>
                                        <li><a href="knob-chart.html">Knob Charts</a></li>
                                        <li><a href="sparkline-chart.html">Sparkline charts</a></li>
                                        <li><a href="extra-charts.html">Extra Charts</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-12 m-t-40 demo-box">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="white-box text-center bg-purple"><a href="eliteadmin-inverse/index.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 1</a></div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="white-box text-center bg-success"><a href="eliteadmin/index.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 2</a></div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="white-box text-center bg-info"><a href="eliteadmin-ecommerce/index.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 3</a></div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="white-box text-center bg-inverse"><a href="eliteadmin-horizontal-navbar/index3.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 4</a></div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="white-box text-center bg-warning"><a href="eliteadmin-iconbar/index4.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 5</a></div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="white-box text-center bg-danger"><a href="https://themeforest.net/item/elite-admin-responsive-web-app-kit-/16750820" target="_blank" class="text-white"><i class="linea-icon linea-ecommerce fa-fw" data-icon="d"></i><br/>Buy Now</a></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- /.Megamenu -->
                        <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                        <!-- /.dropdown -->
                    </ul>
                </div>
                <!-- /.navbar-header -->
                <!-- /.navbar-top-links -->
                <!-- /.navbar-static-side -->
            </nav>
            <!-- End Top Navigation -->
            <!-- Left navbar-header -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                            <!-- input-group -->
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                                </span> </div>
                                <!-- /input-group -->
                            </li>
                            <li class="user-pro">
                                <a href="#" class="waves-effect"><img src="plugins/images/users/d1.jpg" alt="user-img" class="img-circle"> <span class="hide-menu">Dr. Steve Gection<span class="fa arrow"></span></span>
                                </a>
                                <ul class="nav nav-second-level">
                                    <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </li>
                            <li class="nav-small-cap m-t-10">--- Main Menu</li>
                            <li> <a href="index.html" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard </span></a></li>
                            <li><a href="javascript:void(0);" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Mailbox<span class="fa arrow"></span></span></a>
                                <ul class="nav nav-second-level">
                                    <li> <a href="inbox.html">Inbox</a></li>
                                    <li> <a href="inbox-detail.html">Inbox detail</a></li>
                                    <li> <a href="compose.html">Compose mail</a></li>
                                </ul>
                            </li>
                            <li class="nav-small-cap">--- Proffessional</li>
                            <li> <a href="javascript:void(0);" class="waves-effect"><i class="ti-calendar p-r-10"></i> <span class="hide-menu"> Appointment <span class="fa arrow"></span></span></a>
                                <ul class="nav nav-second-level">
                                    <li> <a href="doctor-schedule.html">Doctor Schedule</a> </li>
                                    <li> <a href="book-appointment.html">Book Appointment</a> </li>
                                </ul>
                            </li>
                            <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-md p-r-10"></i> <span class="hide-menu"> Doctors <span class="fa arrow"></span></span></a>
                                <ul class="nav nav-second-level">
                                    <li> <a href="doctors.html">All Doctors</a> </li>
                                    <li> <a href="add-doctor.html">Add Doctor</a> </li>
                                    <li> <a href="edit-doctor.html">Edit Doctor</a> </li>
                                    <li> <a href="doctor-profile.html">Doctor Profile</a> </li>
                                </ul>
                            </li>
                            <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-people p-r-10"></i> <span class="hide-menu"> Patients <span class="fa arrow"></span></span></a>
                                <ul class="nav nav-second-level">
                                    <li> <a href="patients.html">All Patients</a> </li>
                                    <li> <a href="add-patient.html">Add Patient</a> </li>
                                    <li> <a href="edit-patient.html">Edit Patient</a> </li>
                                    <li> <a href="patient-profile.html">Patient Profile</a> </li>
                                </ul>
                            </li>
                            <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-chart p-r-10"></i> <span class="hide-menu"> Reports <span class="fa arrow"></span></span></a>
                                <ul class="nav nav-second-level">
                                    <li> <a href="payment-report.html">Payment Report</a></li>
                                    <li> <a href="income-report.html">Income Report</a></li>
                                    <li> <a href="sales-report.html">Sales Report</a></li>
                                </ul>
                            </li>
                            <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-inr p-r-10"></i> <span class="hide-menu"> Payments <span class="fa arrow"></span></span></a>
                                <ul class="nav nav-second-level">
                                    <li> <a href="payments.html">Payments</a></li>
                                    <li> <a href="add-payments.html">Add Payment</a></li>
                                    <li> <a href="patient-invoice.html">Patient Invoice</a></li>
                                </ul>
                            </li>
                            <li> <a href="widgets.html" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Widgets</span></a> </li>
                            <li> <a href="#" class="waves-effect"><i data-icon="7" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Icons<span class="fa arrow"></span></span></a>
                                <ul class="nav nav-second-level">
                                    <li> <a href="fontawesome.html">Font awesome</a> </li>
                                    <li> <a href="themifyicon.html">Themify Icons</a> </li>
                                    <li> <a href="simple-line.html">Simple line Icons</a> </li>
                                    <li><a href="linea-icon.html">Linea Icons</a></li>
                                    <li><a href="weather.html">Weather Icons</a></li>
                                </ul>
                            </li>
                            <li class="nav-small-cap">--- Extra Components</li>
                            <li> <a href="#" class="waves-effect active"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">UI Elements<span class="fa arrow"></span> <span class="label label-rouded label-info pull-right">13</span> </span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="panels-wells.html">Panels and Wells</a></li>
                                    <li><a href="panel-ui-block.html">Panels With BlockUI</a></li>
                                    <li><a href="portlet-draggable.html">Draggable Portlet</a></li>
                                    <li><a href="buttons.html">Buttons</a></li>
                                    <li><a href="bootstrap-switch.html">Bootstrap Switch</a></li>
                                    <li><a href="date-paginator.html">Date Paginator</a></li>
                                    <li><a href="sweatalert.html">Sweat alert</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="grid.html">Grid</a></li>
                                    <li><a href="tabs.html">Tabs</a></li>
                                    <li><a href="tab-stylish.html">Stylish Tabs</a></li>
                                    <li><a href="modals.html">Modals</a></li>
                                    <li><a href="progressbars.html">Progress Bars</a></li>
                                    <li><a href="notification.html">Notifications</a></li>
                                    <li><a href="carousel.html">Carousel</a></li>
                                    <li><a href="list-style.html">List & Media object</a></li>
                                    <li><a href="user-cards.html">User Cards</a></li>
                                    <li><a href="timeline.html">Timeline</a></li>
                                    <li><a href="timeline-horizontal.html">Horizontal Timeline</a></li>
                                    <li><a href="nestable.html">Nesteble</a></li>
                                    <li><a href="range-slider.html">Range Slider</a></li>
                                    <li><a href="ribbons.html">Ribbons</a></li>
                                    <li><a href="steps.html">Steps</a></li>
                                    <li><a href="session-idle-timeout.html">Session Idle Timeout</a></li>
                                    <li><a href="session-timeout.html">Session Timeout</a></li>
                                    <li><a href="tooltip-stylish.html">Stylish Tooltip</a></li>
                                    <li><a href="bootstrap.html">Bootstrap UI</a></li>
                                </ul>
                            </li>
                            <li> <a href="#" class="waves-effect"><i class="ti-files fa-fw
                              "></i> <span class="hide-menu">Sample Pages<span class="fa arrow"></span><span class="label label-rouded label-purple pull-right">30</span></span></a>
                              <ul class="nav nav-second-level">
                                <li><a href="starter-page.html">Starter Page</a></li>
                                <li><a href="blank.html">Blank Page</a></li>
                                <li><a href="javascript:void(0)" class="waves-effect">Email Templates
                                    <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li><a href="email-templates/basic.html">Basic</a></li>
                                        <li><a href="email-templates/alert.html">Alert</a></li>
                                        <li><a href="email-templates/billing.html">Billing</a></li>
                                        <li><a href="email-templates/password-reset.html">Reset Pwd</a></li>
                                    </ul>
                                </li>
                                <li><a href="lightbox.html">Lightbox Popup</a></li>
                                <li><a href="treeview.html">Treeview</a></li>
                                <li><a href="search-result.html">Search Result</a></li>
                                <li><a href="utility-classes.html">Utility Classes</a></li>
                                <li><a href="custom-scroll.html">Custom Scrolls</a></li>
                                <li><a href="login.html">Login Page</a></li>
                                <li><a href="login2.html">Login v2</a></li>
                                <li><a href="animation.html">Animations</a></li>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="register2.html">Register v2</a></li>
                                <li><a href="register3.html">3 Step Registration</a></li>
                                <li><a href="recoverpw.html">Recover Password</a></li>
                                <li><a href="lock-screen.html">Lock Screen</a></li>
                                <li><a href="400.html">Error 400</a></li>
                                <li><a href="403.html">Error 403</a></li>
                                <li><a href="404.html">Error 404</a></li>
                                <li><a href="500.html">Error 500</a></li>
                                <li><a href="503.html">Error 503</a></li>
                            </ul>
                        </li>
                        <li> <a href="forms.html" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Forms<span class="fa arrow"></span></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="form-basic.html">Basic Forms</a></li>
                                <li><a href="form-layout.html">Form Layout</a></li>
                                <li><a href="form-advanced.html">Form Addons</a></li>
                                <li><a href="form-material-elements.html">Form Material</a></li>
                                <li><a href="form-float-input.html">Form Float Input</a></li>
                                <li><a href="form-upload.html">File Upload</a></li>
                                <li><a href="form-mask.html">Form Mask</a></li>
                                <li><a href="form-img-cropper.html">Image Cropping</a></li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                                <li><a href="form-dropzone.html">File Dropzone</a></li>
                                <li><a href="form-pickers.html">Form-pickers</a></li>
                                <li><a href="icheck-control.html">Icheck Form Controls</a></li>
                                <li><a href="form-wizard.html">Form-wizards</a></li>
                                <li><a href="form-typehead.html">Typehead</a></li>
                                <li><a href="form-xeditable.html">X-editable</a></li>
                                <li><a href="form-summernote.html">Summernote</a></li>
                                <li><a href="form-bootstrap-wysihtml5.html">Bootstrap wysihtml5</a></li>
                                <li><a href="form-tinymce-wysihtml5.html">Tinymce wysihtml5</a></li>
                            </ul>
                        </li>
                        <li> <a href="tables.html" class="waves-effect"><i data-icon="O" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Tables<span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">7</span></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="basic-table.html">Basic Tables</a></li>
                                <li><a href="table-layouts.html">Table Layouts</a></li>
                                <li><a href="data-table.html">Data Table</a></li>
                                <li class="hidden"><a href="crud-table.html">Crud Table</a></li>
                                <li><a href="bootstrap-tables.html">Bootstrap Tables</a></li>
                                <li><a href="responsive-tables.html">Responsive Tables</a></li>
                                <li><a href="editable-tables.html">Editable Tables</a></li>
                                <li><a href="foo-tables.html">FooTables</a></li>
                                <li><a href="jsgrid.html">JsGrid Tables</a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">--- Support</li>
                        <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="F" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Multi-Level Dropdown<span class="fa arrow"></span></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="javascript:void(0)">Second Level Item</a> </li>
                                <li> <a href="javascript:void(0)">Second Level Item</a> </li>
                                <li> <a href="javascript:void(0)" class="waves-effect">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                                        <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                                        <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                                        <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="login.html" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                        <li class="hide-menu">
                            <a href="javacript:void(0);"> <span>Progress Report</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                                </div> <span>Leads Report</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Left navbar-header end -->
            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row bg-title">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Panels & Wells</h4> </div>
                            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                                <ol class="breadcrumb">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">UI Elements</a></li>
                                    <li class="active">Panels & Wells</li>
                                </ol>
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        <!-- .row -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="white-box">
                                    <h3 class="box-title">Simple White box panel</h3> Its a simple, give white-box class to div <code> &lt;div class="white-box"&gt; ... &lt;/div&gt; </code> </div>
                                </div>
                            </div>
                            <!-- /.row -->
                            <!-- .row -->
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="panel panel-inverse">
                                        <div class="panel-heading"><i class="ti-settings"></i> Default Panel
                                            <div class="panel-action">
                                                <div class="dropdown"> <a class="dropdown-toggle" id="examplePanelDropdown" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ti-settings"></i> <span class="caret"></span></a>
                                                    <ul class="dropdown-menu bullet dropdown-menu-right" aria-labelledby="examplePanelDropdown" role="menu">
                                                        <li role="presentation"><a href="javascript:void(0)" class="text-dark" role="menuitem"><i class="icon wb-reply " aria-hidden="true"></i> Reply</a></li>
                                                        <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i> Share</a></li>
                                                        <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i> Delete</a></li>
                                                        <li class="divider" role="presentation"></li>
                                                        <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-wrapper collapse in">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p> <a class="btn btn-custom m-t-10 collapseble">Get Code</a>
                                                <div class="m-t-15 collapseblebox dn">
                                                    <div class="well"> <code> &lt;div class="panel panel-default"&gt;<br/>
                                                        &nbsp; &nbsp;&lt;div class="panel-heading"&gt;Default Panel&lt;/div&gt; <br/>
                                                        <br/>
                                                        &lt;div class="panel-wrapper collapse in"&gt;<br/>
                                                        &nbsp;&nbsp; &lt;div class="panel-body"&gt;<br/>
                                                        ... ... ...<br/>
                                                        &nbsp;&nbsp; &lt;/div&gt;<br/>
                                                        &lt;/div&gt;<br/>
                                                        <br/>
                                                        &lt;div class="panel-footer"&gt; Panel Footer &lt;/div&gt;<br/>
                                                    &lt;/div&gt; </code> </div>
                                                </div>
                                            </div>
                                            <div class="panel-footer"> Panel Footer </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Panel with action
                                            <div class="panel-action"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a></div>
                                        </div>
                                        <div class="panel-wrapper collapse in">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p> <a class="btn btn-info m-t-10">Demo button</a> </div>
                                                <div class="panel-footer"> Panel Footer </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="panel panel-default">
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body">
                                                    <h3>Body title heading h3</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.Rorem psum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.</p>
                                                    <p> Aliquam ornare lacus adipiscing, posuere lectus et, fringilla auguelacus adipiscing, posuere lectus et, fringilla augue.</p> <a class="btn btn-success m-t-10">Demo button</a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                    <!-- .row -->
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">Title with small <small class="text-muted"> This is the small text...</small></div>
                                                <div class="panel-wrapper collapse in">
                                                    <div class="panel-body">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="panel panel-default">
                                                <div class="panel-heading"><i class="ti-settings"></i> Panel with icon</div>
                                                <div class="panel-wrapper collapse in">
                                                    <div class="panel-body">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">Panel with label <span class="label label-info m-l-5">New</span></div>
                                                <div class="panel-wrapper collapse in">
                                                    <div class="panel-body">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                    <!-- .row -->
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">Title with small
                                                    <div class="panel-action">
                                                        <div class="dropdown"> <a class="dropdown-toggle" id="examplePanelDropdown" data-toggle="dropdown" href="#" aria-expanded="false" role="button">Dropdown <span class="caret"></span></a>
                                                            <ul class="dropdown-menu bullet dropdown-menu-right" aria-labelledby="examplePanelDropdown" role="menu">
                                                                <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i> Reply</a></li>
                                                                <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i> Share</a></li>
                                                                <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i> Delete</a></li>
                                                                <li class="divider" role="presentation"></li>
                                                                <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel-wrapper collapse in">
                                                    <div class="panel-body">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                                    </div>
                                                    <div class="panel-footer"> Panel Footer </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">Panel with Tables</div>
                                                <div class="panel-wrapper collapse in">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">#</th>
                                                                <th>First Name</th>
                                                                <th>Last Name</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td align="center">1</td>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                            </tr>
                                                            <tr>
                                                                <td align="center">2</td>
                                                                <td>Jacob</td>
                                                                <td>Thornton</td>
                                                            </tr>
                                                            <tr>
                                                                <td align="center">3</td>
                                                                <td>Steave</td>
                                                                <td>Jobs</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="panel panel-default">
                                                <div class="panel-heading"> Panel With tab </div>
                                                <div class="panel-wrapper collapse in">
                                                    <ul class="nav customtab nav-tabs" role="tablist">
                                                        <li role="presentation" class="active nav-item"><a href="#home1" class="nav-link" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="ti-home"></i></span><span class="hidden-xs"> Home</span></a></li>
                                                        <li role="presentation" class="nav-item"><a href="#profile1" class="nav-link" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Profile</span></a></li>
                                                        <li role="presentation" class="nav-item"><a href="#messages1" class="nav-link" aria-controls="messages" role="tab" data-toggle="tab"><span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Messages</span></a></li>
                                                    </ul>
                                                    <div class="panel-body">
                                                        <div class="tab-content m-t-0">
                                                            <div role="tabpanel" class="tab-pane fade active in" id="home1">
                                                                <div class="col-md-6">
                                                                    <h3>Best Clean Tab ever</h3>
                                                                    <h4>you can use it with the small code</h4> </div>
                                                                    <div class="col-md-5 pull-right">
                                                                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div role="tabpanel" class="tab-pane fade" id="profile1">
                                                                    <div class="col-md-6">
                                                                        <h3>Lets check profile</h3>
                                                                        <h4>you can use it with the small code</h4> </div>
                                                                        <div class="col-md-5 pull-right">
                                                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
                                                                        </div>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                    <div role="tabpanel" class="tab-pane fade" id="messages1">
                                                                        <div class="col-md-6">
                                                                            <h3>Come on you have a lot message</h3>
                                                                            <h4>you can use it with the small code</h4> </div>
                                                                            <div class="col-md-5 pull-right">
                                                                                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
                                                                            </div>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                        <div role="tabpanel" class="tab-pane fade" id="settings1">
                                                                            <div class="col-md-6">
                                                                                <h3>Just do Settings</h3>
                                                                                <h4>you can use it with the small code</h4> </div>
                                                                                <div class="col-md-5 pull-right">
                                                                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
                                                                                </div>
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.row -->
                                                    <!-- .row -->
                                                    <div class="row">
                                                        <div class="col-lg-4 col-sm-4">
                                                            <div class="panel panel-info">
                                                                <div class="panel-heading"> Info Panel
                                                                    <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                                                                </div>
                                                                <div class="panel-wrapper collapse in" aria-expanded="true">
                                                                    <div class="panel-body">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.col-lg-4 -->
                                                        <div class="col-lg-4 col-sm-4">
                                                            <div class="panel panel-warning">
                                                                <div class="panel-heading"> Warning Panel
                                                                    <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                                                                </div>
                                                                <div class="panel-wrapper collapse in" aria-expanded="true">
                                                                    <div class="panel-body">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.col-lg-4 -->
                                                        <div class="col-lg-4 col-sm-4">
                                                            <div class="panel panel-danger">
                                                                <div class="panel-heading"> Danger Panel
                                                                    <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                                                                </div>
                                                                <div class="panel-wrapper collapse in" aria-expanded="true">
                                                                    <div class="panel-body">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.col-lg-4 -->
                                                        <!-- /.col-lg-4 -->
                                                        <div class="col-lg-4 col-sm-4">
                                                            <div class="panel panel-success">
                                                                <div class="panel-heading"> Success Panel
                                                                    <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                                                                </div>
                                                                <div class="panel-wrapper collapse in" aria-expanded="true">
                                                                    <div class="panel-body">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.col-lg-4 -->
                                                        <!-- /.col-lg-4 -->
                                                        <div class="col-lg-4 col-sm-4">
                                                            <div class="panel panel-primary">
                                                                <div class="panel-heading"> Primary Panel
                                                                    <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                                                                </div>
                                                                <div class="panel-wrapper collapse in" aria-expanded="true">
                                                                    <div class="panel-body">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.col-lg-4 -->
                                                        <!-- /.col-lg-4 -->
                                                        <div class="col-lg-4 col-sm-4">
                                                            <div class="panel panel-inverse">
                                                                <div class="panel-heading"> Inverse Panel
                                                                    <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                                                                </div>
                                                                <div class="panel-wrapper collapse in" aria-expanded="true">
                                                                    <div class="panel-body">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.col-lg-4 -->
                                                    </div>
                                                    <!-- /.row -->
                                                    <!-- .row -->
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h3>Wells</h3> </div>
                                                            <div class="col-lg-4">
                                                                <div class="well">
                                                                    <h4>Normal Well</h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                                                </div>
                                                            </div>
                                                            <!-- /.col-lg-4 -->
                                                            <div class="col-lg-4">
                                                                <div class="well well-lg">
                                                                    <h4>Large Well</h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                                                </div>
                                                            </div>
                                                            <!-- /.col-lg-4 -->
                                                            <div class="col-lg-4">
                                                                <div class="well well-sm">
                                                                    <h4>Small Well</h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                                                </div>
                                                            </div>
                                                            <!-- /.col-lg-4 -->
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
                                                    <footer class="footer text-center"> 2017 &copy; Elite Admin brought to you by themedesigner.in </footer>
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
                                            <!--Style Switcher -->
                                            <script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
                                        </body>

                                        </html>