<?php  ob_start();
session_start();
require_once 'dbconnect.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>grocer </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no, shrink-to-fit=no">

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
<style>


</style>
<body >
    
   
    <!-- END nav -->
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
                <form method='POST' action='login.php'style="text-align:center;border:5px solid rgb(129,174,64);background-color:black;border-radius:25px;opacity:0.9;">
              <h2 style="color:rgb(129,174,64);text-align:center;">Log In </h2>
             <i class="icon-user ">&nbsp;&nbsp;</i><input type="text" name="Email"  style="background-color:transparent !important;border:none !important;border-bottom:2px solid white !important;color:rgb(129,174,64);"
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required><br><br>
                                  <i class="icon-key">&nbsp;&nbsp;</i><input type="password" name="Password"  style="background-color:transparent !important;border:none !important;border-bottom:2px solid white !important;color:rgb(129,174,64);"
                                     required><br><br>
                                    <h6 style="color:white;">New User?<a href="./register.php"> Register</a></h6>
                                <input type="submit"  style="justify-contents:center;"class="btn btn-md btn-primary" name="submit" value="Login"><br><br>
                                
                            </form>
				</div>
			</div>
		</div>

              
   
	<section class="ftco-section">
		<div class ="container" style="color:transparent;">
       <br /><br/>
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
    $umail=$_POST["Email"];
    $upass=$_POST["Password"];
    $fail="Login failed!";
    if(!filter_var($umail,FILTER_VALIDATE_EMAIL)) {die($erremail);}
    //$p= hash('sha256', $upass);
    $p=$upass;
    
    
    $res=mysqli_query($conn,"Select * from users where email='$umail' and password='$p'");
 
    $re=mysqli_fetch_array($res);
 
    if($re)
    {
    
        ob_start();
       session_start();
       $_SESSION['user']=$umail;
       $_SESSION['id'] =0;
       $_SESSION['dis']=0;
       $_SESSION['cost']=0;
       $_SESSION['ch']=null;
       $_SESSION['ap']=null;
       $_SESSION['gb']=null;
       $_SESSION['on']=null;
       $_SESSION['ga']=null;
       $_SESSION['pc']=null;
       $_SESSION['ca']=null;
       $_SESSION['ju']=null;
       $_SESSION['to']=null;
       $_SESSION['st']=null;
       $_SESSION['bp']=null;
       $_SESSION['br']=null;
      if (isset($_SESSION['user'])) {
        header("Location: index.php");
       exit;
       }
    }
    //else
    //echo "<script type='text/javascript'>alert( '$fail')</script>";  
}
?>
 </div>
</body>

</html>