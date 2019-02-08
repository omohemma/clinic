<?php 

//start session
session_start();

if(isset($_SESSION['role'])){
    header("location:index.php");
}

//include functions file
include('includes/functions.php');



if(isset($_POST['login'])){

    $formUser = validateFormData($_POST['username']);
    $formPass = validateFormData($_POST['password']);
    
    //conect to database

    $conn = mysqli_connect('us-cdbr-iron-east-01.cleardb.net','b55dc263b6abad','4056a8d5','heroku_6ce1e53c155f864');
    
    
    //make query
    $query = "SELECT * FROM users WHERE username = '$formUser'";
    
    //store query results
    
    $result = mysqli_query($conn,$query);
    
    
    // check numbers of rows in database
    
    if(mysqli_num_rows($result) > 0 ){

        // store user's name and password
        while($row = mysqli_fetch_assoc($result)){

            $hashedPass =$row['password'];
            $id =$row['id'];

             //verify password 
            if (password_verify($formPass,$hashedPass)){

                $sql  = "UPDATE users
                SET status = 'online',
                on_duty = 'yes'
                WHERE id = '$id'
                ";

                $res = mysqli_query($conn,$sql);

                //store data into session variables
                $_SESSION['designation'] = $row['designation'];
                $_SESSION['speciality'] = $row['speciality'];
                $_SESSION['username'] = $formUser;
                $_SESSION['role'] = $row['role'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['picture'] = $row['picture'];
                $_SESSION['name'] = $row['title']." ".$row['fname']." " .$row['lname'];

                //redirect to dashboard page
                header("location:index.php");



            }
            else{
                $loginError = "<div class='alert alert-warning'>Wrong Email / Password Combination... Try again.<a class='close ' data-dismiss='alert'>&times;</a></div>";
            }


        }
        


    }
    else{
        $loginError = "<div class='alert alert-danger'>Account Not Registered <a class='close ' data-dismiss='alert'>&times;</a></div>";
    }
    mysqli_close($conn);
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <title>Hospital</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- color CSS -->
    <link href="css/colors/megna.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <section id="wrapper" class="login-register">
        <div class="login-box login-sidebar">
            <div class="white-box">
                <?php echo @$loginError; ?>
                <form class="form-horizontal " id="loginform"  method="post">
                    <br><br><br><br><br>
                    <a href="javascript:void(0)" class="text-center db"><img src="plugins/images/eliteadmin-logo-dark.png" alt="Home" />
                        <br/><img src="plugins/images/eliteadmin-text-dark.png" alt="Home" /></a>

                        <div class="form-group m-t-40">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" name="username" placeholder="Username"> </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input class="form-control" type="password" name="password" required="" placeholder="Password"> </div>
                                </div>

                                <div class="form-group text-center m-t-20">
                                    <div class="col-xs-12">
                                        <button type="submit" name="login" class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
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