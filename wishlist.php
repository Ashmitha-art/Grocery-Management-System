<?php
ob_start();
session_start();

require_once 'dbconnect.php';
if(!isset($_SESSION['user']))
{
    header("location:login.php");
} 
if (isset($_GET['ch1'])) {
    //header("Location: wishlist.php");
    $_SESSION['ch1']='ch';
}
if (isset($_GET['a1'])) {
    //header("Location: wishlist.php");
    $_SESSION['a1']='ap';
}
if (isset($_GET['gb1'])) {
    //header("Location: wishlist.php");
    $_SESSION['gb1']="sghxn";
}
if (isset($_GET['o1'])) {
    //header("Location: wishlist.php");
    $_SESSION['o1']='ss';
}
if (isset($_GET['g1'])) {
    //header("Location: wishlist.php");
    $_SESSION['g1']='l';
}
if (isset($_GET['p1'])) {
    //header("Location: wishlist.php");
    $_SESSION['p1']='s';
}
if (isset($_GET['c1'])) {
    //header("Location: wishlist.php");
    $_SESSION['c1']='l';
}
if (isset($_GET['j1'])) {
    //header("Location: wishlist.php");
    $_SESSION['j1']='l';
}
if (isset($_GET['t1'])) {
    //header("Location: wishlist.php");
    $_SESSION['t1']='l';
}
if (isset($_GET['b1'])) {
    //header("Location: wishlist.php");
    $_SESSION['b1']='l';
}
if (isset($_GET['bp1'])) {
    //header("Location: wishlist.php");
    $_SESSION['bp1']='bp';
}
if (isset($_GET['bb1'])) {
   // header("Location: wishlist.php");
    $_SESSION['bb1']='l';
}

if (isset($_GET['chilli1'])) {
    header("Location: wishlist.php");
    unset($_SESSION['ch1']);
}
if (isset($_GET['apple1'])) {
    header("Location: wishlist.php");
    unset($_SESSION['a1']);
}
if (isset($_GET['greenbeans1'])) {
    header("Location: wishlist.php");
    unset($_SESSION['gb1']);
}
if (isset($_GET['onion1'])) {
    header("Location: wishlist.php");
    unset($_SESSION['o1']);
}
if (isset($_GET['garlic1'])) {
    header("Location: wishlist.php");
    unset($_SESSION['g1']);
}
if (isset($_GET['purple1'])) {
    header("Location: wishlist.php");
    unset($_SESSION['p1']);
}
if (isset($_GET['carrot1'])) {
    header("Location: wishlist.php");
    unset($_SESSION['c1']);
}
if (isset($_GET['juice1'])) {
    header("Location: wishlist.php");
    unset($_SESSION['j1']);
}
if (isset($_GET['tomatoe1'])) {
    header("Location: wishlist.php");
    unset($_SESSION['t1']);
}
if (isset($_GET['brocolli1'])) {
    header("Location: wishlist.php");
    unset($_SESSION['bb1']);
}
if (isset($_GET['pepper1'])) {
    header("Location: wishlist.php");
    unset($_SESSION['bp1']);
}
if (isset($_GET['berry1'])) {
    header("Location: wishlist.php");
    unset($_SESSION['b1']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Grocer </title>
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
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php">grocer</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item active dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">Shop</a>
						<div class="dropdown-menu" aria-labelledby="dropdown04">
							<a class="dropdown-item" href="shop.php">Shop</a>
							<a class="dropdown-item" href="wishlist.php">Wishlist</a>
							<a class="dropdown-item" href="product-single.php">Single Product</a>
							<a class="dropdown-item" href="cart.php">Cart</a>
							<a class="dropdown-item" href="checkout.php">Checkout</a>
						</div>
					</li>
					<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
					<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
					<li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span
								class="icon-shopping_cart"></span>[<?php echo $_SESSION['id'];?>]</a></li>
					<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false"><?php echo $_SESSION['user'];?></a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
             <a class="dropdown-item" href="logout.php?logout">Log Out</a>	</div>
					</li>

				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<div class="hero-wrap hero-bread" style="background-image: url('images/bg_12.jpg');">
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Wishlist</span>
					</p>
					<h1 class="mb-0 bread">My Wishlist</h1>
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-section ftco-cart">
		<div class="container">
			<div class="row">
				<div class="col-md-12 ftco-animate">
					<div class="cart-list">
						<table class="table">
							<thead class="thead-primary">
								<tr class="text-center">
									<th>&nbsp;</th>
									<th>Product List</th>
									<th>&nbsp;</th>
									<th>Price</th>
									<th>Quantity</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
							<?php
                                    if(isset($_SESSION['ch1']))
                                    {

                                   
                                    echo '<tr class="text-center">
                                    
                                    
									<td class="product-remove" ><a href="cart.php?chilli1"><span class="ion-ios-close"></span></a></td>

									<td class="image-prod">
										<div class="img" style="background-image:url(images/product-12.jpg);"></div>
									</td>

									<td class="product-name">
										<h3>Chilli</h3>
									</td>

									<td class="price">₹4.90</td>

									<td class="quantity">
										<div class="input-group mb-3">
											<input type="text" name="quantity"
												class="quantity form-control input-number" value="1" min="1" max="100">
										</div>
									</td>

									<td class="total">₹4.90</td>
                                </tr><!-- END TR-->';
                                    }
                                ?>
<?php
                                    if(isset($_SESSION['c1']))
                                    {

										
                                    echo '<tr class="text-center">
                                    
                                    
									<td class="product-remove"><a href="wishlist.php?carrot1"><span class="ion-ios-close"></span></a></td>

									<td class="image-prod">
										<div class="img" style="background-image:url(images/product-7.jpg);"></div>
									</td>

									<td class="product-name">
										<h3>Carrots</h3>
									</td>

									<td class="price">₹12.20</td>

									<td class="quantity">
										<div class="input-group mb-3">
											<input type="text" name="quantity"
												class="quantity form-control input-number" value="1" min="1" max="100">
										</div>
									</td>

									<td class="total">₹12.20</td>
                                </tr><!-- END TR-->';
                                    }
                                ?>
                                <?php
                                    if(isset($_SESSION['g1']))
                                    {
										
                                    
                                    echo '<tr class="text-center">
                                    
                                    
									<td class="product-remove"><a href="wishlist.php?garlic1"><span class="ion-ios-close"></span></a></td>

									<td class="image-prod">
										<div class="img" style="background-image:url(images/product-11.jpg);"></div>
									</td>

									<td class="product-name">
										<h3>Garlic</h3>
									</td>

									<td class="price">₹7.90</td>

									<td class="quantity">
										<div class="input-group mb-3">
											<input type="text" name="quantity"
												class="quantity form-control input-number" value="1" min="1" max="100">
										</div>
									</td>

									<td class="total">₹7.90</td>
                                </tr><!-- END TR-->';
                                    }
                                ?>
                                <?php
                                    if(isset($_SESSION['a1']))
                                    {

										
                                    echo '<tr class="text-center">
                                    
                                    
									<td class="product-remove"><a href="wishlist.php?apple1"><span class="ion-ios-close"></span></a></td>

									<td class="image-prod">
										<div class="img" style="background-image:url(images/product-10.jpg);"></div>
									</td>

									<td class="product-name">
										<h3>Apple</h3>
									</td>

									<td class="price">₹89.90</td>

									<td class="quantity">
										<div class="input-group mb-3">
											<input type="text" name="quantity"
												class="quantity form-control input-number" value="1" min="1" max="100">
										</div>
									</td>

									<td class="total">₹89.90</td>
                                </tr><!-- END TR-->';
                                    }
                                ?>
                                <?php
                                    if(isset($_SESSION['gb1']))
                                    {

										 
                                    echo '<tr class="text-center">
                                    
                                    
									<td class="product-remove"><a href="wishlist.php?greenbeans1"><span class="ion-ios-close"></span></a></td>

									<td class="image-prod">
										<div class="img" style="background-image:url(images/product-3.jpg);"></div>
									</td>

									<td class="product-name">
										<h3>Green Beans</h3>
									</td>

									<td class="price">₹23.90</td>

									<td class="quantity">
										<div class="input-group mb-3">
											<input type="text" name="quantity"
												class="quantity form-control input-number" value="1" min="1" max="100">
										</div>
									</td>

									<td class="total">₹23.90</td>
                                </tr><!-- END TR-->';
                                    }
                                ?>
                                <?php
                                    if(isset($_SESSION['b1']))
                                    {

										 
                                    echo '<tr class="text-center">
                                    
                                    
									<td class="product-remove"><a href="wishlist.php?berry1"><span class="ion-ios-close"></span></a></td>

									<td class="image-prod">
										<div class="img" style="background-image:url(images/product-2.jpg);"></div>
									</td>

									<td class="product-name">
										<h3>Strawberry</h3>
									</td>

									<td class="price">₹90.90</td>

									<td class="quantity">
										<div class="input-group mb-3">
											<input type="text" name="quantity"
												class="quantity form-control input-number" value="1" min="1" max="100">
										</div>
									</td>

									<td class="total">₹90.90</td>
                                </tr><!-- END TR-->';
                                    }
                                ?>
                                <?php
                                    if(isset($_SESSION['p1']))
                                    {

										
                                    echo '<tr class="text-center">
                                    
                                    
									<td class="product-remove"><a href="wishlist.php?purple1"><span class="ion-ios-close"></span></a></td>

									<td class="image-prod">
										<div class="img" style="background-image:url(images/product-4.jpg);"></div>
									</td>

									<td class="product-name">
										<h3>Purple Cabbage</h3>
									</td>

									<td class="price">₹11.10</td>

									<td class="quantity">
										<div class="input-group mb-3">
											<input type="text" name="quantity"
												class="quantity form-control input-number" value="1" min="1" max="100">
										</div>
									</td>

									<td class="total">₹11.10</td>
                                </tr><!-- END TR-->';
                                    }
                                ?>
                                <?php
                                    if(isset($_SESSION['o1']))
                                    {

										 
                                    echo '<tr class="text-center">
                                    
                                    
									<td class="product-remove"><a href="wishlist.php?onion1"><span class="ion-ios-close"></span></a></td>

									<td class="image-prod">
										<div class="img" style="background-image:url(images/product-9.jpg);"></div>
									</td>

									<td class="product-name">
										<h3>Onion</h3>
									</td>

									<td class="price">₹15.20</td>

									<td class="quantity">
										<div class="input-group mb-3">
											<input type="text" name="quantity"
												class="quantity form-control input-number" value="1" min="1" max="100">
										</div>
									</td>

									<td class="total">₹15.20</td>
                                </tr><!-- END TR-->';
                                    }
                                ?>
                                <?php
                                    if(isset($_SESSION['t1']))
                                    {

										
                                    echo '<tr class="text-center">
                                    
                                    
									<td class="product-remove"><a href="wishlist.php?tomatoe1"><span class="ion-ios-close"></span></a></td>

									<td class="image-prod">
										<div class="img" style="background-image:url(images/product-5.jpg);"></div>
									</td>

									<td class="product-name">
										<h3>Tomatoe</h3>
									</td>

									<td class="price">₹22.80</td>

									<td class="quantity">
										<div class="input-group mb-3">
											<input type="text" name="quantity"
												class="quantity form-control input-number" value="1" min="1" max="100">
										</div>
									</td>

									<td class="total">₹22.80</td>
                                </tr><!-- END TR-->';
                                    }
                                ?>
                                <?php
                                    if(isset($_SESSION['bb1']))
                                    {

										
                                    echo '<tr class="text-center">
                                    
                                    
									<td class="product-remove"><a href="wishlist.php?brocolli1"><span class="ion-ios-close"></span></a></td>

									<td class="image-prod">
										<div class="img" style="background-image:url(images/product-6.jpg);"></div>
									</td>

									<td class="product-name">
										<h3>Brocolli</h3>
									</td>

									<td class="price">₹50.20</td>

									<td class="quantity">
										<div class="input-group mb-3">
											<input type="text" name="quantity"
												class="quantity form-control input-number" value="1" min="1" max="100">
										</div>
									</td>

									<td class="total">₹50.20</td>
                                </tr><!-- END TR-->';
                                    }
                                ?>
                                <?php
                                    if(isset($_SESSION['bp1']))
                                    {
										
                                    
                                    echo '<tr class="text-center">
                                    
                                    
									<td class="product-remove"><a href="wishlist.php?pepper1"><span class="ion-ios-close"></span></a></td>

									<td class="image-prod">
										<div class="img" style="background-image:url(images/product-1.jpg);"></div>
									</td>

									<td class="product-name">
										<h3>Bell Pepper</h3>
									</td>

									<td class="price">₹46.45</td>

									<td class="quantity">
										<div class="input-group mb-3">
											<input type="text" name="quantity"
												class="quantity form-control input-number" value="1" min="1" max="100">
										</div>
									</td>

									<td class="total">₹46.45</td>
                                </tr><!-- END TR-->';
                                    }
                                ?>
                                 <?php
                                    if(isset($_SESSION['j1']))
                                    {
										
                                    
                                    echo '<tr class="text-center">
                                    
                                    
									<td class="product-remove"><a href="wishlist.php?juice1"><span class="ion-ios-close"></span></a></td>

									<td class="image-prod">
										<div class="img" style="background-image:url(images/product-8.jpg);"></div>
									</td>

									<td class="product-name">
										<h3>Juice</h3>
									</td>

									<td class="price">₹35.00</td>

									<td class="quantity">
										<div class="input-group mb-3">
											<input type="text" name="quantity"
												class="quantity form-control input-number" value="1" min="1" max="100">
										</div>
									</td>

									<td class="total">₹35.00</td>
                                </tr><!-- END TR-->';
                                    }
                                ?>
							</tbody>
						</table>
								
					</div><br /><br />
					<form method ="POST" action ="wishlist.php">
					<p style="float:right"><input type="submit" class="btn btn-sm btn-primary" value="Clear Wishlist" name="cls"/></p>
					<p style="float:right"><input type="submit" style="margin-right:10px;" class="btn btn-sm btn-primary" value="Go To Cart" name="shop"/></p>
				
									</form>
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
					<form  method = "POST" action="#" class="subscribe-form">
						<div class="form-group d-flex">
							<input type="email" name ="email" class="form-control" placeholder="Enter email address" required>
							<input type="submit" name ="submit" value="Subscribe" class="submit px-3">
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<footer class="ftco-footer ftco-section"style="background-color:rgb(129,174,69,0.9);">
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
								<li><a href="#"><span class="icon icon-envelope"></span><span
											class="text">grocers@gmail.com</span></a></li>
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
	<script>
		$(document).ready(function () {

			var quantitiy = 0;
			$('.quantity-right-plus').click(function (e) {

				// Stop acting like a button
				e.preventDefault();
				// Get the field name
				var quantity = parseInt($('#quantity').val());

				// If is not undefined

				$('#quantity').val(quantity + 1);


				// Increment

			});

			$('.quantity-left-minus').click(function (e) {
				// Stop acting like a button
				e.preventDefault();
				// Get the field name
				var quantity = parseInt($('#quantity').val());

				// If is not undefined

				// Increment
				if (quantity > 0) {
					$('#quantity').val(quantity - 1);
				}
			});

		});
	</script>

</body>

</html>
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
	if(isset($_POST['cls']))
	{
		
		unset($_SESSION['ch1']);
		unset($_SESSION['bp1']);
		unset($_SESSION['a1']);
		unset($_SESSION['gb1']);
		unset($_SESSION['o1']);
		unset($_SESSION['g1']);
		unset($_SESSION['p1']);
		unset($_SESSION['c1']);
		unset($_SESSION['j1']);
		unset($_SESSION['t1']);
		unset($_SESSION['b1']);
		unset($_SESSION['bb1']);
		header("location:wishlist.php");
	}
	if(isset($_POST['shop']))
	{
		
		
		header("location:shop.php");
	}
	?>