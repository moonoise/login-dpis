<?php
include_once "conf.php";

if (isset($_SESSION[__USERNAME__])) {
    header("location:index.php");
    
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

    <title>Login-DPIS</title>

     <!-- Bootstrap Core CSS -->
     <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../node_modules/metismenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">User PASSWORD ด้วยกันกับระบบ DPIS</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" class="form-signin" name="form1" method="post" >
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username"  name="myusername" id="myusername" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="mypassword" id="mypassword" type="password" value="">
                                </div>
                                <!-- <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div> -->
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-info submit" name="Submit" id="submit">เข้าสู่ระบบ</button>
                            </fieldset>
                        </form>
                        <div id="message"></div>
                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
     <!-- jQuery -->
     <script src="../node_modules/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../node_modules/metismenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../assets/js/sb-admin-2.js"></script>

    <script src="../assets/js/login-dpis.js"></script>

</body>

</html>
