<?php
 
        session_start(); 
require_once('config.php');

$select3="SELECT * FROM `baker_cat`";
$query3=mysqli_query($con,$select3);

?>


<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Cake - Bakery</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/linearicons/style.css" rel="stylesheet">
        <link href="vendors/flat-icon/flaticon.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/magnifc-popup/magnific-popup.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
		<style>
		.shop_cart {
	display: inline-block;
	position: relative;
}
.shop_cart span {
	position: absolute;
	top: -0.5px;
	left: 20%;
	height: 16px;
	min-width: 16px;
	color: #fff;
	font-size: 15px;
	
	text-align: center;
	border-radius: 25px;
	padding: 2 2px;
	margin-left: -7px;
}
</style>
		
		
		
    </head>
    <body>
        
        <!--================Main Header Area =================-->
		<header class="main_header_area">
			<div class="top_header_area row m0">
				<div class="container">
					<!--<div class="float-left">
						<a href="tell:+18004567890"><i class="fa fa-phone" aria-hidden="true"></i> (+91)8087646251 </a>
						<a href="mainto:info@cakebakery.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@cakebakery.com</a>
					</div>-->
					<div class="float-right">
						<!--<ul class="h_social list_style">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>-->
						
						<?php
						require_once('config.php');
						if(isset($_SESSION['user_id']) && $_SESSION['user_id']!==""){
						?>
						<ul class="h_search list_style">
						
							<li class="shop_cart"><i class="lnr lnr-cart"></i>
							<span id="countdata">
					 <?php if(isset($_SESSION['cart'])) 
                                            { 
                                             echo count($_SESSION['cart']);
                                               } 
                                                 else{
                                                       echo 0;
                                                     }?>
					 </span>
					 <a href="cart.php">Cart</a></li>
							<!--<li><a class="popup-with-zoom-anim" href="#test-search"><i class="fa fa-search"></i></a></li>-->
							<li class="sign-in"><a href="login/logout.php">sign-out</i></a></li>
						</ul>
						
						<?php } else { ?>
						<ul class="h_search list_style">
						
							<li class="shop_cart"><i class="lnr lnr-cart"></i>
							<span id="countdata">
					 <?php if(isset($_SESSION['cart'])) 
                                            { 
                                             echo count($_SESSION['cart']);
                                               } 
                                                 else{
                                                       echo 0;
                                                     }?>
					 </span><a href="cart.php">Cart</a></li>
							<!--<li><a class="popup-with-zoom-anim" href="#test-search"><i class="fa fa-search"></i></a></li>-->
							<li class="sign-in"><a href="login/login_form.php">sign-in</a></li>
						</ul>
						
						<?php }  ?>
					</div>
				</div>
			</div>
			<div class="main_menu_two">
				<div class="container">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<a class="navbar-brand" href="index.php"><img src="img/logo-2.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="my_toggle_menu">
                            	<span></span>
                            	<span></span>
                            	<span></span>
                            </span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav justify-content-end">
								<li class="dropdown submenu active">
									<!--<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
									<ul class="dropdown-menu">-->
										<li><a href="index.php">Home </a></li>
										<!--<li><a href="index-2.html">Home 2</a></li>
										<li><a href="index-3.html">Home 3</a></li>
										<li><a href="index-4.html">Home 4</a></li>
										<li><a href="index-5.html">Home 5</a></li>-->
									<!--</ul>-->
								</li>
								<li><a href="#cake">New Arrival</a></li>
								
								<?php  while($res3=mysqli_fetch_assoc($query3)){ ?>
					<li><a href="productloop.php?id=<?php echo $res3['id'];?>"> 
					              <?php echo $res3['category']; ?> </a></li>
					<?php } ?>
								<!--<li><a href="menu.html">Pastries</a></li>
								<!--<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
									<ul class="dropdown-menu">
										<li><a href="about-us.html">About Us</a></li>
										<li><a href="our-team.html">Our Chefs</a></li>
										<li><a href="testimonials.html">Testimonials</a></li>
									</ul>
								</li>-->
								<!--<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
									<ul class="dropdown-menu">
										<li><a href="service.html">Services</a></li>
										<li class="dropdown submenu">
											<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Gallery</a>
											<ul class="dropdown-menu">
												<li><a href="portfolio.html">-  Gallery Classic</a></li>
												<li><a href="portfolio-full-width.html">-  Gallery Full width</a></li>
											</ul>
										</li>
										<li><a href="faq.html">Faq</a></li>
										<li><a href="what-we-make.html">What we make</a></li>
										<li><a href="special.html">Special Recipe</a></li>
										<li><a href="404.html">404 page</a></li>
										<li><a href="comming-soon.html">Coming Soon page</a></li>
									</ul>
								</li>-->
								<!--<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
									<ul class="dropdown-menu">
										<li><a href="blog.html">Blog with sidebar</a></li>
										<li><a href="blog-2column.html">Blog 2 column</a></li>
										<li><a href="single-blog.html">Blog details</a></li>
									</ul>
								</li>-->
								<!--<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
									<ul class="dropdown-menu">
										<li><a href="shop.html">Main shop</a></li>
										<li><a href="product-details.html">Product Details</a></li>-->
										<li><a href="cart.php">Cart</a></li>
										<!--<li><a href="checkout.html">Checkout Page</a></li>
									</ul>
								</li>-->
								<li><a href="customer_order.php">Order</a></li>
								<li><a href="#contactus">Contact Us</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</header>