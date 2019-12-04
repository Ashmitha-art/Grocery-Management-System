<?php  ob_start();
session_start();
require_once 'dbconnect.php';

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>grocer </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="goto-here"style="background-color:white;" >
    
   
    <!-- END nav -->
    <div class ="row">
    <div class ="col-9">
    <img class="img-fluid" src="images/bg_100.jpg" style="width:100%;height:112.19%;"/>
    </div>
    <div class ="col "style="margin-top:12%;margin-left:2%;margin-right:2.5%;margin-bottom:10%;border-radius:25px;background-color:black;border:4px solid rgb(129,174,64);" >
    
    <form method = "POST" action="register.php"style="text-align:center;">
    <h2 style="color:rgb(129,174,64);">Register </h2>
    <i class="icon-male"></i>&nbsp;&nbsp;<input type="text" name="n"  style="background-color:transparent !important;border:none !important;border-bottom:2px solid white !important;color:rgb(129,174,64);" pattern="([A-zÀ-ž\s]){2,}"
                                        required><br><br>
                                        <i class="icon-user "></i>&nbsp;&nbsp;<input type="text" name="e" 
                                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  style="background-color:transparent !important;border:none !important;border-bottom:2px solid white !important;color:rgb(129,174,64);"required><br><br>
                                        <i class="icon-key"></i>&nbsp;&nbsp;<input type="password" name="p" style="background-color:transparent !important;border:none !important;border-bottom:2px solid white !important;color:rgb(129,174,64);"  required><br><br>
                                    <h6 style="color:white;">Existing User?<a href="./login.php"> Log In</a></h6>
                                    <input type="submit" class="btn btn-md btn-primary" name="submit"
                                        value="Register"><br><br>

                                </form>
                            </div>
                            </div>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" /></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    <?php

if (isset($_POST['submit'])) {
    $n=$_POST["n"];
    $e=$_POST["e"];
    $p=$_POST["p"];
    $fail="Failed to register!";
    $fail1="Already in existence!";
    $res=mysqli_query($conn,"Select * from users where email='$e' or username='$n'");
    $re=mysqli_fetch_array($res);
    echo $p;

    
   if($re)
   {//"<p style='color:red; font-size:26px ;margin-left:330px; margin-top:-220px;'>".
    echo "<script type='text/javascript'>alert( '$fail1')</script>";
   }
    if($re==NULL)
    {
       // $pass2= hash('sha256', $p);
       $pass2=$p;
    $ruhi=mysqli_query($conn,"Insert into users(username,email,password) values('$n','$e','$pass2')");

    if($ruhi)
    {
        header("Location: login.php");
    }
    else
    echo "<script type='text/javascript'>alert( '$fail')</script>";
}
}
?>

</body>

</html>