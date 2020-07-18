<?php include "../head.inc.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="assets/css/style.css">



    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">


</head>

<body>

<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong>Registration</strong></h1>

                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="form-box" style="margin-left:350px; width: 100%;">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Sign up now</h3>
                                <p>Fill in the form below to get instant access:</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-pencil"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form name="form"  method="post" action="Controller/UserController.php" class="registration-form" >
                                <div class="form-group">
                                    <label class="sr-only" for="form-first-name">First name</label>
                                    <input type="text" name="user_fname" placeholder="First name..." class="form-first-name form-control" id="fname" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-last-name">Last name</label>
                                    <input type="text" name="user_lname" placeholder="Last name..." class="form-last-name form-control" id="lname" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-email">Email</label>
                                    <input type="email" name="email" placeholder="Email..." class="form-email form-control" id="email" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-user-name">User name</label>
                                    <input type="text" name="username" placeholder="Username..." class="form-user-name form-control" id="username" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-password">Password</label>
                                    <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="password" required>
                                </div>

                                <div class="form-group">
                                    <label class="sr-only" for="form-password">Confirm Password</label>
                                    <input type="password" name="confirmpwd" placeholder="Confirm Password..." class="form-password form-control" id="confirm_password" required>
                                </div>

                                <center> <input type="submit" class="btn" value="Sign me up!" name="insert"></center>




                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>




    <!-- Footer -->


    <!-- Javascript -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.backstretch.min.js"></script>
    <script src="assets/js/scripts.js"></script>

    <!--[if lt IE 10]>
    <script src="assets/js/placeholder.js"></script>
    <![endif]-->

</body>

</html>



