<?php
ob_start();
session_start();
require_once 'dbconnect.php';
if(!isset($_SESSION['user']))
{
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Vegefoods </title>
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

<body class="goto-here">
  <div class="py-1 bg-primary">
    <div class="container">
      <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
        <div class="col-lg-12 d-block">
          <div class="row d-flex">
            <div class="col-md pr-4 d-flex topper align-items-center">
              <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span>
              </div>
              <span class="text">+ 1235 2355 98</span>
            </div>
            <div class="col-md pr-4 d-flex topper align-items-center">
              <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                  class="icon-paper-plane"></span></div>
              <span class="text">youremail@email.com</span>
            </div>
            <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
              <span class="text">3-5 Business days delivery &amp; Free Returns</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">Grocer</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">Shop</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="shop.php">Shop</a>
              <a class="dropdown-item" href="wishlist.php">Wishlist</a>
              <a class="dropdown-item" href="product-single.php">Single Product</a>
              <a class="dropdown-item" href="cart.php">Cart</a>
              <a class="dropdown-item" href="checkout.php">Checkout</a>
            </div>
          </li>
          <li class="nav-item active"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span
                class="icon-shopping_cart"></span>[<?php echo $_SESSION['id'];?>]</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false"><?php echo $_SESSION['user'];?></a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="logout.php?logout">Log Out</a> </div>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <div class="hero-wrap hero-bread" style="background-image: url('images/bg_18.jpg');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>About us</span></p>
          <h1 class="mb-0 bread">About us</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
    <div class="container">
      <br /> <br />
      <div class="row">
        <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center"
          style="background-image: url(images/about.jpg);">
          <a href="https://vimeo.com/45830194"
            class="icon popup-vimeo d-flex justify-content-center align-items-center">
            <span class="icon-play"></span>
          </a>
        </div>
        <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
          <div class="heading-section-bold mb-4 mt-md-5">
            <div class="ml-md-0">
              <h2 class="mb-4">Welcome to Grocer, an eCommerce website!</h2>
            </div>
          </div>
          <div class="pb-md-5">
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
              blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
              ocean.</p>
            <p>But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy
              Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they
              abused her for their.</p>
            <p><a href="shop.php" class="btn btn-primary">Shop now</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
    <div class="container py-4">
      <div class="row d-flex justify-content-center py-5">
        <div class="col-md-6">
          <h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
          <span>Get e-mail updates about our latest shops and special offers</span>
        </div>
        <div class="col-md-6 d-flex align-items-center">
          <form method="POST" action="#" class="subscribe-form">
            <div class="form-group d-flex">
              <input type="email" name="email" class="form-control" placeholder="Enter email address" required>
              <input type="submit" name="submit" value="Subscribe" class="submit px-3">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);">
    <div class="container">
      <div class="row justify-content-center py-5">
        <div class="col-md-10">
          <div class="row">
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="10000">0</strong>
                  <span>Happy Customers</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="100">0</strong>
                  <span>Branches</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="1000">0</strong>
                  <span>Partner</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="100">0</strong>
                  <span>Awards</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section testimony-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <span class="subheading">Testimony</span>
          <h2 class="mb-4">Our satisfied customers say</h2>
        </div>
      </div>
      <div class="row ftco-animate">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel">
            <div class="item">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text text-center">
                  <p class="mb-5 pl-4 line">Grocer is my go-to place!</p>
                  <p class="name">Rahul Rao</p>
                  <span class="position">Manager</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text text-center">
                  <p class="mb-5 pl-4 line">Wonderful experience.</p>
                  <p class="name">Mahesh Singh</p>
                  <span class="position">Teacher</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-5" style="background-image: url(images/person_4.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text text-center">
                  <p class="mb-5 pl-4 line">Best place for groceries online!</p>
                  <p class="name">Ashley Buttons</p>
                  <span class="position">Consultant</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text text-center">
                  <p class="mb-5 pl-4 line">Very affordable and super fast.</p>
                  <p class="name">Gary Smith</p>
                  <span class="position">Web Developer</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-5" style="background-image: url(images/person_5.jpeg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text text-center">
                  <p class="mb-5 pl-4 line">Fresh and very organic.</p>
                  <p class="name">Prajwal P</p>
                  <span class="position">System Analyst</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row no-gutters ftco-services">
        <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-shipped"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Free Shipping</h3>
              <span>On order over $100</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-diet"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Always Fresh</h3>
              <span>Product well package</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-award"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Superior Quality</h3>
              <span>Quality Products</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-customer-service"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Support</h3>
              <span>24/7 Support</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="ftco-footer ftco-section" style="background-color:rgb(129,174,69,0.9);">
    <div class="container bg-light">
      <div class="row">
        <div class="mouse">
          <a href="#" class="mouse-icon">
            <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
          </a>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Grocer</h2>

            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Menu</h2>
            <ul class="list-unstyled">
              <li><a href="shop.php" class="py-2 d-block">Shop</a></li>
              <li><a href="about.php" class="py-2 d-block">About</a></li>
              <li><a href="cart.php" class="py-2 d-block">Cart</a></li>
              <li><a href="contact.php" class="py-2 d-block">Contact Us</a></li>
            </ul>
          </div>
        </div>

        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Have Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain
                    View, Bangalore, India</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91
                      9449101299</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">grocers@gmail.com</span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </footer>




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
	$ename =($_POST['email']);
	if (isset($_POST['submit'])) {
		$stmts = $conn->prepare("INSERT INTO subscribers(email) values(?)");
		$stmts->bind_param("s",$ename);
		$res = $stmts->execute();
		if($res)
	{
	echo "<script type='text/javascript'>alert( 'Subscribed successfully to our newsletter!')</script>";
	}
	}
	}
	?>
</body>

</html>