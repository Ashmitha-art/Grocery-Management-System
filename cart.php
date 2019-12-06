<?php
ob_start();
session_start();
$_SESSION['cost1'] =0;
$_SESSION['cost2'] =0;
$_SESSION['cost3'] =0;
$_SESSION['cost4'] =0;
$_SESSION['cost5'] =0;
$_SESSION['cost6'] =0;
$_SESSION['cost7'] =0;
$_SESSION['cost8'] =0;
$_SESSION['cost9'] =0;
$_SESSION['cost10'] =0;
$_SESSION['cost11'] =0;
$_SESSION['cost12'] =0;
$q1 =0;$quant1=1;$success="";
$q2 =0;$quant2=1;
$q3 =0;$quant3=1;
$q4 =0;$quant4=1;
$q5 =0;$quant5=1;
$q6 =0;$quant6=1;
$q7 =0;$quant7=1;
$q8 =0;$quant8=1;
$q9 =0;$quant9=1;
$q10 =0;$quant10=1;
$q11=0;$quant11=1;
$q12=0;$quant12=1;$_SESSION['r']=0;
require_once 'dbconnect.php'; 

if(!isset($_SESSION['user']))
{
    header("location:login.php");
}
if (isset($_POST['coupon'])) {
	$code =($_POST['code']);
	if (isset($_POST['coupon'])) {
		$res=mysqli_query($conn,"SELECT * from coupon where code= '$code'");

$re=mysqli_fetch_array($res);
$_SESSION['r']=$re['discount'];


		
	}
}
if (isset($_POST['estimate'])) {
	$coun =($_POST['coun']);
	if (isset($_POST['estimate'])) {
	
		$res1=mysqli_query($conn,"SELECT * from coupon where country= '$coun'");
		


$re1=mysqli_fetch_array($res1);
$r1=$re1['time'];

		
		
		if($r1){
			$success1="Delivery will take $r1 days ";

			
		}
	}
}

if (isset($_GET['ch'])) {
	//header("Location: wishlist.php");
	if(!$_SESSION['ch'])
	$_SESSION['id']+=1;
	$_SESSION['ch']='ch';

}
if (isset($_GET['ap'])) {
	//header("Location: wishlist.php");
	if(!$_SESSION['ap'])
	$_SESSION['id']+=1;
	$_SESSION['ap']='ap';
	
}
if (isset($_GET['gb'])) {
	//header("Location: wishlist.php");
	if(!$_SESSION['gb'])
	$_SESSION['id']+=1;
	$_SESSION['gb']="sghxn";
	
}
if (isset($_GET['on'])) {
	//header("Location: wishlist.php");
	if(!$_SESSION['on'])
	$_SESSION['id']+=1;
	$_SESSION['on']='ss';
	
}
if (isset($_GET['ga'])) {
	//header("Location: wishlist.php");
	if(!$_SESSION['ga'])
	$_SESSION['id']+=1;
	$_SESSION['ga']='l';
	
}
if (isset($_GET['pc'])) {
	//header("Location: wishlist.php");
	if(!$_SESSION['pc'])
	$_SESSION['id']+=1;
	$_SESSION['pc']='s';
	
}
if (isset($_GET['ca'])) {
	//header("Location: wishlist.php");
	if(!$_SESSION['ca'])
	$_SESSION['id']+=1;
	$_SESSION['ca']='l';
	
}
if (isset($_GET['ju'])) {
	//header("Location: wishlist.php");
	if(!$_SESSION['ju'])
	$_SESSION['id']+=1;
	$_SESSION['ju']='l';
	
}
if (isset($_GET['to'])) {
	//header("Location: wishlist.php");
	if(!$_SESSION['to'])
	$_SESSION['id']+=1;
	$_SESSION['to']='l';
	
}
if (isset($_GET['st'])) {
	//header("Location: wishlist.php");
	if(!$_SESSION['st'])
	$_SESSION['id']+=1;
	$_SESSION['st']='l';
	
}
if (isset($_GET['bp'])) {
	//header("Location: wishlist.php");
	if(!$_SESSION['bp'])
	$_SESSION['id']+=1;
	$_SESSION['bp']='bp';
	
}
if (isset($_GET['br'])) {
   // header("Location: wishlist.php");
   if(!$_SESSION['br'])
	$_SESSION['id']+=1;
	$_SESSION['br']='l';
	
}
if (isset($_GET['chilli'])) {
    header("Location: cart.php");
	unset($_SESSION['ch']);
	$_SESSION['id']-=1;
	$_SESSION['dis']=0;
}
if (isset($_GET['apple'])) {
    header("Location: cart.php");
	unset($_SESSION['ap']);
	$_SESSION['id']-=1;
	$_SESSION['dis']=0;
}
if (isset($_GET['greenbeans'])) {
    header("Location: cart.php");
	unset($_SESSION['gb']);
	$_SESSION['id']-=1;
	$_SESSION['dis']=0;
}
if (isset($_GET['onion'])) {
	$_SESSION['id']-=1;
    header("Location: cart.php");
	unset($_SESSION['on']);
	$_SESSION['dis']=0;
}
if (isset($_GET['garlic'])) {
	$_SESSION['id']-=1;
    header("Location: cart.php");
	unset($_SESSION['ga']);
	$_SESSION['dis']=0;
}
if (isset($_GET['purple'])) {
    header("Location: cart.php");
	unset($_SESSION['pc']);
	$_SESSION['id']-=1;
	$_SESSION['dis']=0;
}
if (isset($_GET['carrot'])) {
    header("Location: cart.php");
	unset($_SESSION['ca']);
	$_SESSION['id']-=1;
	$_SESSION['dis']=0;
}
if (isset($_GET['juice'])) {
    header("Location: cart.php");
	unset($_SESSION['ju']);
	$_SESSION['id']-=1;
	$_SESSION['dis']=0;
}
if (isset($_GET['tomatoe'])) {
    header("Location: cart.php");
	unset($_SESSION['to']);
	$_SESSION['id']-=1;
	$_SESSION['dis']=0;
}
if (isset($_GET['brocolli'])) {
    header("Location: cart.php");
	unset($_SESSION['br']);
	$_SESSION['id']-=1;
	$_SESSION['dis']=0;
}
if (isset($_GET['pepper'])) {
    header("Location: cart.php");
	unset($_SESSION['bp']);
	$_SESSION['id']-=1;
	$_SESSION['dis']=0;
}
if (isset($_GET['berry'])) {
    header("Location: cart.php");
	unset($_SESSION['st']);
	$_SESSION['id']-=1;
	$_SESSION['dis']=0;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Grocer</title>
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
			<a class="navbar-brand" href="index.php">Grocer</a>
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
						<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['user'];?></a>
						<div class="dropdown-menu" aria-labelledby="dropdown04">
							<a class="dropdown-item" href="logout.php?logout">Log Out</a></div>
					</li>

				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<div class="hero-wrap hero-bread" style="background-image: url('images/bg_14.jpg');">
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Cart</span></p>
					<h1 class="mb-0 bread">My Cart</h1>
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
									<th>&nbsp;</th>
									<th>Product name</th>
									<th>Price</th>
									<th>Quantity</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody><?php
                                    if(isset($_SESSION['ch']))
                                    {
									
                                    echo '<tr class="text-center">
                                    
                                    
									<td class="product-remove" ><a href="cart.php?chilli"><span class="ion-ios-close"></span></a></td>

									<td class="image-prod">
										<div class="img" style="background-image:url(images/product-12.jpg);"></div>
									</td>

									<td class="product-name">
										<h3>Chilli</h3>
									</td>

									<td class="price">₹4.90</td>

									<td class="quantity">
									<form method ="POST" action ="#" >
										<div class="input-group mb-3">
											<input type="text" name="quantity1"
												class="quantity form-control input-number" value="'; ?><?php 
												
												if (isset($_POST['quantity1'])) {
													$quant1= $_POST['quantity1'];
													$q1 = $quant1*4.90;
													$_SESSION['dis'] =0;
													}
													else{
														$q1=4.90;
													}
												echo $quant1; ?><?php echo'" min="1" max="100">
										</div>
										</form>
									</td>
									 ';
										?>
								<?php 
										
										echo'
										
									<td class="total">₹ ';?><?php echo $q1;?>
								<?php 
									echo '</td>
									</tr>
								<!-- END TR-->';
									
								}
								
								if (($_SESSION['cost1']== 0))
								{
								$_SESSION['cost1'] = $q1; 
								}
									?>


								<?php
                                    if(isset($_SESSION['ca']))
                                    {
										
                                    echo '<tr class="text-center">
                                    
                                    
									<td class="product-remove"><a href="cart.php?carrot"><span class="ion-ios-close"></span></a></td>

									<td class="image-prod">
										<div class="img" style="background-image:url(images/product-7.jpg);"></div>
									</td>

									<td class="product-name">
										<h3>Carrots</h3>
									</td>

									<td class="price">₹12.20</td>

									<td class="quantity">
									<form method ="POST" action ="#" >
									<div class="input-group mb-3">
										<input type="text" name="quantity2"
											class="quantity form-control input-number" value="'; ?><?php 
											
											if (isset($_POST['quantity2'])) {
												$quant2= $_POST['quantity2'];
												$q2= $quant2*12.20;
												$_SESSION['dis'] =0;
												}
												else{
													$q2=12.20;
												}
											echo $quant2; ?><?php echo'" min="1" max="100">
									</div>
									</form>
								</td>
								 ';
									?>
								<?php 
									
									echo'
									
								<td class="total">₹ ';?><?php echo $q2;?>
								<?php 
								echo '</td>
								</tr>
							<!-- END TR-->';
								
							}
							
							if (($_SESSION['cost2']== 0))
							{
							$_SESSION['cost2'] = $q2; 
							}
								?>


								<?php
                                    if(isset($_SESSION['ga']))
                                    {
									
                                    
                                    echo '<tr class="text-center">
                                    
                                    
									<td class="product-remove"><a href="cart.php?garlic"><span class="ion-ios-close"></span></a></td>

									<td class="image-prod">
										<div class="img" style="background-image:url(images/product-11.jpg);"></div>
									</td>

									<td class="product-name">
										<h3>Garlic</h3>
									</td>

									<td class="price">₹7.90</td>

									<td class="quantity">
									<form method ="POST" action ="#" >
									<div class="input-group mb-3">
										<input type="text" name="quantity3"
											class="quantity form-control input-number" value="'; ?><?php 
											
											if (isset($_POST['quantity3'])) {
												$quant3= $_POST['quantity3'];
												$q3 = $quant3*7.90;
												$_SESSION['dis'] =0;
												}
												else{
													$q3=7.90;
												}
											echo $quant3; ?><?php echo'" min="1" max="100">
									</div>
									</form>
								</td>
								 ';
									?>
								<?php 
									
									echo'
									
								<td class="total">₹ ';?><?php echo $q3;?>
								<?php 
								echo '</td>
								</tr>
							<!-- END TR-->';
								
							}
							
							if (($_SESSION['cost3']== 0))
							{
							$_SESSION['cost3'] = $q3; 
							}
								?>


								<?php
                                    if(isset($_SESSION['ap']))
                                    {
										
                                    echo '<tr class="text-center">
                                    
                                    
									<td class="product-remove"><a href="cart.php?apple"><span class="ion-ios-close"></span></a></td>

									<td class="image-prod">
										<div class="img" style="background-image:url(images/product-10.jpg);"></div>
									</td>

									<td class="product-name">
										<h3>Apple</h3>
									</td>

									<td class="price">₹89.90</td>

									<td class="quantity">
									<form method ="POST" action ="#" >
										<div class="input-group mb-3">
											<input type="text" name="quantity4"
												class="quantity form-control input-number" value="'; ?><?php 
												
												if (isset($_POST['quantity4'])) {
													$quant4= $_POST['quantity4'];
													$q4 = $quant4*89.90;
													$_SESSION['dis'] =0;
													}
													else{
														$q4=89.90;
													}
												echo $quant4; ?><?php echo'" min="1" max="100">
										</div>
										</form>
									</td>
									 ';
										?>
								<?php 
										
										echo'
										
									<td class="total">₹ ';?><?php echo $q4;?>
								<?php 
									echo '</td>
									</tr>
								<!-- END TR-->';
									
								}
								
								if (($_SESSION['cost4']== 0))
								{
								$_SESSION['cost4'] = $q4; 
								}
									?>


								<?php
                                    if(isset($_SESSION['gb']))
                                    {

										
                                    echo '<tr class="text-center">
                                    
                                    
									<td class="product-remove"><a href="cart.php?greenbeans"><span class="ion-ios-close"></span></a></td>

									<td class="image-prod">
										<div class="img" style="background-image:url(images/product-3.jpg);"></div>
									</td>

									<td class="product-name">
										<h3>Green Beans</h3>
									</td>

									<td class="price">₹23.90</td>

									<td class="quantity">
									<form method ="POST" action ="#" >
										<div class="input-group mb-3">
											<input type="text" name="quantity5"
												class="quantity form-control input-number" value="'; ?><?php 
												
												if (isset($_POST['quantity5'])) {
													$quant5= $_POST['quantity5'];
													$q5 = $quant5*23.90;
													$_SESSION['dis'] =0;
													}
													else{
														$q5=23.90;
													}
												echo $quant5; ?><?php echo'" min="1" max="100">
										</div>
										</form>
									</td>
									 ';
										?>
								<?php 
										
										echo'
										
									<td class="total">₹ ';?><?php echo $q5;?>
								<?php 
									echo '</td>
									</tr>
								<!-- END TR-->';
									
								}
								
								if (($_SESSION['cost5']== 0))
								{
								$_SESSION['cost5'] = $q5; 
								}
									?>


								<?php
                                    if(isset($_SESSION['st']))
                                    {
									
                                    echo '<tr class="text-center">
                                    
                                    
									<td class="product-remove"><a href="cart.php?berry"><span class="ion-ios-close"></span></a></td>

									<td class="image-prod">
										<div class="img" style="background-image:url(images/product-2.jpg);"></div>
									</td>

									<td class="product-name">
										<h3>Strawberry</h3>
									</td>

									<td class="price">₹90.90</td>

									<td class="quantity">
									<form method ="POST" action ="#" >
									<div class="input-group mb-3">
										<input type="text" name="quantity6"
											class="quantity form-control input-number" value="'; ?><?php 
											
											if (isset($_POST['quantity6'])) {
												$quant6= $_POST['quantity6'];
												$q6 = $quant6*90.90;
												$_SESSION['dis'] =0;
												}
												else{
													$q6=90.90;
												}
											echo $quant6; ?><?php echo'" min="1" max="100">
									</div>
									</form>
								</td>
								 ';
									?>
								<?php 
									
									echo'
									
								<td class="total">₹ ';?><?php echo $q6;?>
								<?php 
								echo '</td>
								</tr>
							<!-- END TR-->';
								
							}
							
							if (($_SESSION['cost6']== 0))
							{
							$_SESSION['cost6'] = $q6; 
							}
								?>


								<?php
                                    if(isset($_SESSION['pc']))
                                    {
										
                                    echo '<tr class="text-center">
                                    
                                    
									<td class="product-remove"><a href="cart.php?purple"><span class="ion-ios-close"></span></a></td>

									<td class="image-prod">
										<div class="img" style="background-image:url(images/product-4.jpg);"></div>
									</td>

									<td class="product-name">
										<h3>Purple Cabbage</h3>
									</td>

									<td class="price">₹11.10</td>

									<td class="quantity">
									<form method ="POST" action ="#" >
									<div class="input-group mb-3">
										<input type="text" name="quantity7"
											class="quantity form-control input-number" value="'; ?><?php 
											
											if (isset($_POST['quantity7'])) {
												$quant7= $_POST['quantity7'];
												$q7 = $quant7*11.10;
												$_SESSION['dis'] =0;
												}
												else{
													$q7=11.10;
												}
											echo $quant7; ?><?php echo'" min="1" max="100">
									</div>
									</form>
								</td>
								 ';
									?>
								<?php 
									
									echo'
									
								<td class="total">₹ ';?><?php echo $q7;?>
								<?php 
								echo '</td>
								</tr>
							<!-- END TR-->';
								
							}
							
							if (($_SESSION['cost7']== 0))
							{
							$_SESSION['cost7'] = $q7; 
							}
								?>


								<?php

                                    if(isset($_SESSION['on']))
                                    {

                                    echo '<tr class="text-center">
                                    
                                    
									<td class="product-remove"><a href="cart.php?onion"><span class="ion-ios-close"></span></a></td>

									<td class="image-prod">
										<div class="img" style="background-image:url(images/product-9.jpg);"></div>
									</td>

									<td class="product-name">
										<h3>Onion</h3>
									</td>

									<td class="price">₹15.20</td>

									<td class="quantity">
									<form method ="POST" action ="#" >
										<div class="input-group mb-3">
											<input type="text" name="quantity8"
												class="quantity form-control input-number" value="'; ?><?php 
												
												if (isset($_POST['quantity8'])) {
													$quant8= $_POST['quantity8'];
													$q8 = $quant8*15.20;
													$_SESSION['dis'] =0;
													}
													else{
														$q8=15.20;
													}
												echo $quant8; ?><?php echo'" min="1" max="100">
										</div>
										</form>
									</td>
									 ';
										?>
								<?php 
										
										echo'
										
									<td class="total">₹ ';?><?php echo $q8;?>
								<?php 
									echo '</td>
									</tr>
								<!-- END TR-->';
									
								}
								
								if (($_SESSION['cost8']== 0))
								{
								$_SESSION['cost8'] = $q8; 
								}
									?>



								<?php
                                    if(isset($_SESSION['to']))
                                    {
										
                                    echo '<tr class="text-center">
                                    
                                    
									<td class="product-remove"><a href="cart.php?tomatoe"><span class="ion-ios-close"></span></a></td>

									<td class="image-prod">
										<div class="img" style="background-image:url(images/product-5.jpg);"></div>
									</td>

									<td class="product-name">
										<h3>Tomatoe</h3>
									</td>

									<td class="price">₹22.80</td>

									<td class="quantity">
									<form method ="POST" action ="#" >
									<div class="input-group mb-3">
										<input type="text" name="quantity9"
											class="quantity form-control input-number" value="'; ?><?php 
											
											if (isset($_POST['quantity9'])) {
												$quant9= $_POST['quantity9'];
												$q9= $quant9*22.80;
												$_SESSION['dis'] =0;
												}
												else{
													$q9=22.80;
												}
											echo $quant9; ?><?php echo'" min="1" max="100">
									</div>
									</form>
								</td>
								 ';
									?>
								<?php 
									
									echo'
									
								<td class="total">₹ ';?><?php echo $q9;?>
								<?php 
								echo '</td>
								</tr>
							<!-- END TR-->';
								
							}
							
							if (($_SESSION['cost9']== 0))
							{
							$_SESSION['cost9'] = $q9; 
							}
								?>


								<?php
                                    if(isset($_SESSION['br']))
                                    {
									
                                    echo '<tr class="text-center">
                                    
                                    
									<td class="product-remove"><a href="cart.php?brocolli"><span class="ion-ios-close"></span></a></td>

									<td class="image-prod">
										<div class="img" style="background-image:url(images/product-6.jpg);"></div>
									</td>

									<td class="product-name">
										<h3>Brocolli</h3>
									</td>

									<td class="price">₹50.20</td>

									<td class="quantity">
									<form method ="POST" action ="#" >
									<div class="input-group mb-3">
										<input type="text" name="quantity10"
											class="quantity form-control input-number" value="'; ?><?php 
											
											if (isset($_POST['quantity10'])) {
												$quant10= $_POST['quantity10'];
												$q10 = $quant10*50.20;
												$_SESSION['dis'] =0;
												}
												else{
													$q10=50.20;
												}
											echo $quant10; ?><?php echo'" min="1" max="100">
									</div>
									</form>
								</td>
								 ';
									?>
								<?php 
									
									echo'
									
								<td class="total">₹ ';?><?php echo $q10;?>
								<?php 
								echo '</td>
								</tr>
							<!-- END TR-->';
								
							}
							
							if (($_SESSION['cost10']== 0))
							{
							$_SESSION['cost10'] = $q10; 
							}
								?>


								<?php
                                    if(isset($_SESSION['bp']))
                                    {
										
                                    
                                    echo '<tr class="text-center">
                                    
                                    
									<td class="product-remove"><a href="cart.php?pepper"><span class="ion-ios-close"></span></a></td>

									<td class="image-prod">
										<div class="img" style="background-image:url(images/product-1.jpg);"></div>
									</td>

									<td class="product-name">
										<h3>Bell Pepper</h3>
									</td>

									<td class="price">₹46.45</td>

									<td class="quantity">
									<form method ="POST" action ="#" >
									<div class="input-group mb-3">
										<input type="text" name="quantity11"
											class="quantity form-control input-number" value="'; ?><?php 
											
											if (isset($_POST['quantity11'])) {
												$quant11= $_POST['quantity11'];
												$q11 = $quant11*46.45;
												$_SESSION['dis'] =0;
												}
												else{
													$q11=46.45;
												}
											echo $quant11; ?><?php echo'" min="1" max="100">
									</div>
									</form>
								</td>
								 ';
									?>
								<?php 
									
									echo'
									
								<td class="total">₹ ';?><?php echo $q11;?>
								<?php 
								echo '</td>
								</tr>
							<!-- END TR-->';
								
							}
							
							if (($_SESSION['cost11']== 0))
							{
							$_SESSION['cost11'] = $q11; 
							}
								?>


								<?php
                                    if(isset($_SESSION['ju']))
                                    {
									
                                    echo '<tr class="text-center">
                                    
                                    
									<td class="product-remove"><a href="cart.php?juice"><span class="ion-ios-close"></span></a></td>

									<td class="image-prod">
										<div class="img" style="background-image:url(images/product-8.jpg);"></div>
									</td>

									<td class="product-name">
										<h3>Juice</h3>
									</td>

									<td class="price">₹35.00</td>

									<td class="quantity">
									<form method ="POST" action ="#" >
									<div class="input-group mb-3">
										<input type="text" name="quantity12"
											class="quantity form-control input-number" value="'; ?><?php 
											
											if (isset($_POST['quantity12'])) {
												$quant12= $_POST['quantity12'];
												$q12 = $quant12*35.00;
												$_SESSION['dis'] =0;
												}
												else{
													$q12=35.00;
												}
											echo $quant12; ?><?php echo'" min="1" max="100">
									</div>
									</form>
								</td>
								 ';
									?>
								<?php 
									
									echo'
									
								<td class="total">₹ ';?><?php echo $q12;?>
								<?php 
								echo '</td>
								</tr>
							<!-- END TR-->';
								
							}
							
							if (($_SESSION['cost12']== 0))
							{
							$_SESSION['cost12'] = $q12; 
							}
								?>


							</tbody>
						</table>
					</div>
					<br />
					<form method="POST" action="cart.php">
						<p style="float:right"><input type="submit" class="btn btn-sm btn-primary" value="Clear Cart"
								name="cls" /></p>
						<p style="float:right"><input type="submit" style="margin-right:10px;"
								class="btn btn-sm btn-primary" value="Go To Shop" name="shop" /></p>

					</form>

				</div>
			</div>
			<div class="row justify-content-end">
				<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
					<div class="cart-total mb-3">
						<h3>Coupon Code</h3>
						<p>Enter your coupon code if you have one</p>
						<form action="cart.php" method="POST" class="info">
							<div class="form-group">
								<label for="">Coupon code</label>
								<input type="text" name="code" class="form-control text-left px-3" placeholder=""
									required>
							</div>

					</div>
					<p><input name="coupon" type="submit" value="Apply Coupon" class=" btn btn-primary submit px-3"></p>
					</form>
				</div>
				<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
					<div class="cart-total mb-3">
						<h3>Estimate shipping and tax</h3>
						<p>Enter your destination to get a shipping estimate</p>
						<form action="cart.php" method="POST" class="info">
							<div class="form-group">

								<label for="country">State / Country</label>
								<div class="select-wrap">
									<div class="icon"><span class="ion-ios-arrow-down"></span></div>
									<select name="coun" id="" class="form-control" required>
										<option value="France">France</option>
										<option value="India">India</option>

										<option value="Hongkong">Hongkong</option>
										<option value="Japan">Japan</option>

									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="country">State/Province</label>
								<input type="text" class="form-control text-left px-3" placeholder="">
							</div>
							<div class="form-group">
								<label for="country">Zip/Postal Code</label>
								<input type="text" class="form-control text-left px-3" placeholder="">
							</div>
							<?php 
							if(isset($success1))
					echo '<span style="color:red;font-size:1rem;">'.$success1.'</span>';?>
					</div>

					<p><input name="estimate" type="submit" value="Estimate" class=" btn btn-primary submit px-3"></p>

				</div>
				</form>
				<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
					<div class="cart-total mb-3">
						<h3>Cart Totals</h3>
						<p class="d-flex">
							<span>Subtotal</span>
							<span><?php 
						 $_SESSION['cost'] =$q1+$q2+$q3+$q4+$q5+$q6+$q7+$q8+$q9+$q10+$q11+$q12;
							 echo $_SESSION['cost'];
							
							 ?></span>
						</p>
						<p class="d-flex">
							<span>Delivery</span>
							<span>₹0.00</span>
						</p>
						<p class="d-flex">
							<?php if($_SESSION['r'])
		{
			if($_SESSION['cost']>50)
			{
				$_SESSION['r'] = $_SESSION['cost'] * ($_SESSION['r']/100);
			$success="Coupon applied".$_SESSION['r']." discount redeemed!";
			$_SESSION['dis']=$_SESSION['r'];
			}
			else
			{
				$_SESSION['dis']=0;
				$_SESSION['r'] =0;
				unset($_SESSION['coupon']);
			$success="Coupon not applicable due to low cart value!";
			
			}
			//echo "<script type='text/javascript'>alert( '$success')</script>";
		}
		else{
			$_SESSION['r']=0;
		}?>
							<span>Discount</span>
							<span><?php echo $_SESSION['dis']; ?></span>
						</p>
						<hr>
						<p class="d-flex total-price">
							<span>Total</span>
							<span><?php echo $_SESSION['cost'] - $_SESSION['dis']; ?></span>
						</p>
						<?php echo '<span style="color:red;font-size:0.68rem;">'.$success.'</span>';?>
					</div>
					<p><a href="checkout.php" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
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
							<input type="email" name="email" class="form-control" placeholder="Enter email address"
								required>
							<input type="submit" name="submit" value="Subscribe" class="submit px-3">
						</div>
					</form>
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
	<?php


if (isset($_POST['submit'])) {
	$ename =($_POST['email']);
	if (isset($_POST['submit'])) {
		$ruhi=mysqli_query($conn,"Insert into subcribers(email) values('$ename')");
		if($ruhi)
		{
		echo "<script type='text/javascript'>alert( 'Subscribed successfully to our newsletter!')</script>";
		}

	}
	}
	

	if(isset($_POST['cls']))
	{
		
		$_SESSION['ch'] =NULL;
		$_SESSION['bp'] =NUll;
		$_SESSION['ap'] =NULL;
		$_SESSION['gb'] =NULL;
		$_SESSION['on'] =NULL;
		$_SESSION['ga'] =NULL;
		$_SESSION['pc'] =NULL;
		$_SESSION['ca'] =NULL;
		$_SESSION['ju']=NULL;
		$_SESSION['to'] =NULL;
		$_SESSION['st']=NULL;
		$_SESSION['br'] =NULL;
		$_SESSION['id']=0;
		$_SESSION['dis'] = 0;
		$_SESSION['cost'] = 0;
		header("location:cart.php");
	}
	if(isset($_POST['shop']))
	{
		
		
		header("location:shop.php");
	}
			
?>

</body>

</html>