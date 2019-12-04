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
<body class="goto-here" >
<div class="py-1 bg-primary">
		<div class="container">
			<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
				<div class="col-lg-12 d-block">
					<div class="row d-flex">
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span
									class="icon-phone2"></span></div>
							<span class="text">+91 9449101299</span>
						</div>
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span
									class="icon-paper-plane"></span></div>
							<span class="text">grocers@gmail.com</span>
						</div>
						<div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
							<span class="text">3-5 Business days delivery &amp; Free Returns</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ftco-section " style="background-image: url(images/bg_3.jpg);  background-position: center;
  background-repeat: no-repeat;background-size:cover;height:100% !important;">
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-md-4 heading-section ftco-animate deal-of-the-day ftco-animate">
               
    <form method = "POST" action="register.php"style="text-align:center;border:5px solid rgb(129,174,64);background-color:black;border-radius:25px;opacity:0.9;">
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
		</div>

    <!-- END nav -->
    <section class="ftco-section">
		<div class ="container" style="color:transparent;">
       
        <br />
      
        </div>
	</section>   

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