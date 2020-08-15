<?php
require_once('header.php');

if(isset($_SESSION['user_id'])&& $_SESSION['user_id']!=""){  
require_once('config.php');
$amount=$_GET['grand_total'];
$prodid=$_GET['productid'];


$quantity=$_GET['quantity'];

$quan="";
foreach($quantity as $value){  if($quan==""){
	$quan=$value;
} else {
	$quan=$quan.",".$value;
}
}


$prod="";
foreach($prodid as $value){  if($prod==""){
	$prod=$value;
} else {
	$prod=$prod.",".$value;
}

}
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
        <link href="vendors/stroke-icon/style.css" rel="stylesheet">
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
        <link href="vendors/jquery-ui/jquery-ui.min.css" rel="stylesheet">
        <link href="vendors/nice-select/css/nice-select.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
		
		<script src="js/jquery2.js"></script>
		
<script src="checkoutvalidation.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
		
		
		<style>
		
		form-control max
		{
			border:none;
		}
		.states 
		{
			border:none;
			
		}
		.abc
		{
			float:center;
		}
		.cities
		{
			border:none;
		}
		.def
		{
			border:none;
			float:right;
		}
		
		.mtn
		{
			border:none;
			float:right;
		}
		.ltt
		{
			border:transparent;
		}
		
		
		
		</style>
		
    </head>
    <body>
        
        <!--================Main Header Area =================-->
	<!--	<header class="main_header_area">
			<div class="top_header_area row m0">
				<div class="container">
					<div class="float-left">
						<a href="tell:+18004567890"><i class="fa fa-phone" aria-hidden="true"></i> + (1800) 456 7890</a>
						<a href="mainto:info@cakebakery.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@cakebakery.com</a>
					</div>
					<div class="float-right">
						<ul class="h_social list_style">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
						<ul class="h_search list_style">
							<li class="shop_cart"><a href="#"><i class="lnr lnr-cart"></i></a></li>
							<li><a class="popup-with-zoom-anim" href="#test-search"><i class="fa fa-search"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="main_menu_area">
				<div class="container">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<a class="navbar-brand" href="index.html">
						<img src="img/logo.png" alt="">
						<img src="img/logo-2.png" alt="">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="my_toggle_menu">
                            	<span></span>
                            	<span></span>
                            	<span></span>
                            </span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">
								<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
									<ul class="dropdown-menu">
										<li><a href="index.html">Home 1</a></li>
										<li><a href="index-2.html">Home 2</a></li>
										<li><a href="index-3.html">Home 3</a></li>
										<li><a href="index-4.html">Home 4</a></li>
										<li><a href="index-5.html">Home 5</a></li>
									</ul>
								</li>
								<li><a href="cake.html">Our Cakes</a></li>
								<li><a href="menu.html">Menu</a></li>
								<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
									<ul class="dropdown-menu">
										<li><a href="about-us.html">About Us</a></li>
										<li><a href="our-team.html">Our Chefs</a></li>
										<li><a href="testimonials.html">Testimonials</a></li>
									</ul>
								</li>
							</ul>
							<ul class="navbar-nav justify-content-end">
								<li class="dropdown submenu">
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
								</li>
								<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
									<ul class="dropdown-menu">
										<li><a href="blog.html">Blog with sidebar</a></li>
										<li><a href="blog-2column.html">Blog 2 column</a></li>
										<li><a href="single-blog.html">Blog details</a></li>
									</ul>
								</li>
								<li class="dropdown submenu active">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
									<ul class="dropdown-menu">
										<li><a href="shop.html">Main shop</a></li>
										<li><a href="product-details.html">Product Details</a></li>
										<li><a href="cart.html">Cart Page</a></li>
										<li><a href="checkout.html">Checkout Page</a></li>
									</ul>
								</li>
								<li><a href="contact.html">Contact Us</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</header>-->
        <!--================End Main Header Area =================-->
        
        <!--================End Main Header Area =================-->
		
		<br><br>
		<br>
		<br>
        <section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>Chekout</h3>
        			<ul>
        				<li><a href="index.php">Home</a></li>
        				<li><a href="checkout.php">Chekout</a></li>
        			</ul>
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Billing Details Area =================-->    
        <section class="billing_details_area p_100">
            <div class="container">
                <!--<div class="return_option">
                	<h4>Returning customer? <a href="#">Click here to login</a></h4>
                </div>-->
                <div class="row">
                	<div class="col-lg-7">
               	    	<div class="main_title">
               	    		<h2>Billing Details</h2>
               	    	</div>
						<div class="col-md-2"></div>
						<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
						</div>
						<div class="col-md-2"></div>
                		<div class="billing_form_area">
						
						
						<!--"http://galaxyanalytics.net/demos/cake/theme/cake-html/contact_process.php"-->
                			<form   id="contactForm" onsubmit="return false" class="billing_form row">
								<div class="form-group col-md-6">
								    <label for="first">First Name *</label>
									<input type="text" class="form-control" id="first" name="name" placeholder="First Name">
								</div>
								<div class="form-group col-md-6">
								    <label for="last">Last Name *</label>
									<input type="text" class="form-control" id="last" name="name2" placeholder="Last Name">
								</div>
								<!--<div class="form-group col-md-12">
								    <label for="company">Company Name</label>
									<input type="text" class="form-control" id="company" name="company" placeholder="Company Name">
								</div>-->
								<div class="form-group col-md-12">
								    <label for="address">Address *</label>
									<input type="text" class="form-control" id="address" name="address" placeholder="Street Address">
									<input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment, Suit unit etc (optional)">
								</div>
								<!--<div class="form-group col-md-12">
								    <label for="city">Town / City *</label>
									<input type="text" class="form-control" id="city" name="city" placeholder="Town /City">
								</div>-->
								<!--<div class="form-group col-md-12">
								    <label for="city">Town / City *</label>
									<input type="text" class="form-control" id="city" name="city" placeholder="Town /City">
								</div>-->
								<div class="form-group col-md-12">
								    <label for="state1">State / Country *</label>
									<select class="product_select" id="state1" name="state">
                                        <option data-display="Select an option">Select an option</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Madhya pradesh">Madhya pradesh</option> 
                                        <option value="Punjab">Punjab</option>
                                        <option value="Gujarat">Gujarat</option>
                                    </select>
								</div>
								<div class="form-group col-md-6">
								    <label for="city">Town / City *</label>
									<input type="text" class="form-control" id="city" name="city" placeholder="Town /City">
								</div>
								<div class="form-group col-md-6">
								    <label for="zip">Postcode / Zip *</label>
									<input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode / Zip">
								</div>
								<div class="form-group col-md-6">
								    <label for="email">Email Address *</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
								</div>
								<div class="form-group col-md-6">
								    <label for="phone">Phone *</label>
									<input type="text" class="form-control" id="phone" name="phone" placeholder="Select an option">
								</div>
								<div class="form-group col-md-10">
								    <label for="card">Card Number *</label>
									<input type="text"   class="form-control" id="card" name="card" placeholder="Card number">
								</div>
								<div class="form-group col-md-2">
								    <label for="cvv">CVV *</label>
									<input type="text"   class="form-control" id="cvv" name="cvv" placeholder="CVV" >
								</div>
								<div class="form-group col-md-10">
								    <!--<label for="email">Card Number *</label>-->
									<span>Sub-Total</span>
								</div>
								<div class="form-group col-md-2">
								    
									<input type="text" class="form-control max"  readonly value=" <?php echo $amount;?>" name="amount"  >
								</div>
								
								<!--<div class="select_check col-md-12">
									<div class="creat_account">
										<input type="checkbox" id="f-option" name="selector">
										<label for="f-option">Create an account?</label>
										<div class="check"></div>
									</div>
								</div>
								<div class="select_check2 col-md-12">
									<div class="creat_account">
										<input type="checkbox" id="f-option2" name="selector">
										<label for="f-option2">Ship to a different address?</label>
										<div class="check"></div>
									</div>
								</div>
								<div class="form-group col-md-12">
									<label for="phone">Order Notes</label>
									<textarea class="form-control" name="message" id="message" rows="1" placeholder="Note about your order. e.g. special note for delivery"></textarea>
								</div>-->
								<div class="container">
								<div class="row justify-content-center mt-5">
								<div class="col-2">
								
								<input type="submit" value="submit" class="btn pest_btn">								
								</div>
								</div>
								</div>
												
<div class="row justify-content-center mt-5">
													<div class="col-5">
												<!--quantity:--><input type="hidden" readonly value="<?php echo $quan; ?>"class="from-control" name="quan" > </div>
												<div class="col-5">
												<!--products --><input type="hidden" readonly value="<?php echo $prod; ?>" class="from-control" name="prodarr"> 
															</div>
														
								
							</form>
							
							
							
							
							</div>
							
                		</div>
                	</div>
                	<div class="col-lg-5">
                		<div class="order_box_price">
                			<div class="main_title">
                				<h2>Your Order</h2>
                			</div>
							
							<div class="payment_list">
							
								<div class="price_single_cost">
									
									 
									<h5>Shipping And Handling<span class="text_f">Free Shipping</span></h5>
									<h3>Total <span><i class="fa fa-rupee"></i><?php echo $amount;?></span></h3>
								</div>
							
								<div id="accordion" class="accordion_area">
									<div class="card">
										<div class="card-header" id="headingOne">
											<h5 class="mb-0">
												<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												Direct Bank Transfer
												</button>
											</h5>
										</div>
										<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
											<div class="card-body">
											Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.
											</div>
										</div>
									</div>
								<!--	<div class="card">
										<div class="card-header" id="headingTwo">
											<h5 class="mb-0">
												<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												Check Payment
												</button>
											</h5>
										</div>
										<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
											<div class="card-body">
											Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.
											</div>
										</div>
									</div>-->
									<div class="card">
										<div class="card-header" id="headingThree">
											<h5 class="mb-0">
												<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												Paypal
												<img src="img/checkout-card.png" alt="">
												</button>
												<a href="#">What is PayPal?</a>
											</h5>
										</div>
										<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
											<div class="card-body">
											Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.
											</div>
										</div>
									</div>
								</div>
								<!--<button type="submit" value="submit" class="btn pest_btn">place order</button>-->
							</div>
						</div>
                	</div>
                </div>
            </div>
			<?php }else{?>
		<br><br>	
 
<br><br> 
<br><br>
<br>
<br>		
 <div class="return_option ">
					<h5 align="center"><a href="login/login_form.php"  class="btn-border" role="button" > PLEASE LOGIN TO PLACE ORDER</a></h5>

											<?php } ?> 
</div>			
			
        </section>
		 
		  
							  
								
 			
		
        <!--================End Billing Details Area =================-->   
       
									
        <!--================Newsletter Area =================-->
		
				
        <!--<section class="newsletter_area">
		
		
        	<!--<div class="container ">
			
			
        		<div class="row newsletter_inner ">
        			<div class="col-lg-6">
        				
        			</div>
        			<!--<div class="col-lg-6">
        				<div class="newsletter_form">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Enter your email address">
								<div class="input-group-append">
									<button class="btn btn-outline-secondary" type="button">Subscribe Now</button>
								</div>
							</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>-->
        <!--================End Newsletter Area =================-->
		
		

        
        <!--================Footer Area =================-->
		

        <!--<footer class="footer_area">
        	<div class="footer_widgets">
        		<div class="container">
        			<div class="row footer_wd_inner">
        				<div class="col-lg-3 col-6">
        					<aside class="f_widget f_about_widget">
        						<img src="img/footer-logo.png" alt="">
        						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui bland itiis praesentium voluptatum deleniti atque corrupti.</p>
        						<ul class="nav">
        							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
        							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        						</ul>
        					</aside>
        				</div>
        				<div class="col-lg-3 col-6">
        					<aside class="f_widget f_link_widget">
        						<div class="f_title">
        							<h3>Quick links</h3>
        						</div>
        						<ul class="list_style">
        							<li><a href="#">Your Account</a></li>
        							<li><a href="#">View Order</a></li>
        							<li><a href="#">Privacy Policy</a></li>
        							<li><a href="#">Terms & Conditionis</a></li>
        						</ul>
        					</aside>
        				</div>
        				<div class="col-lg-3 col-6">
        					<aside class="f_widget f_link_widget">
        						<div class="f_title">
        							<h3>Work Times</h3>
        						</div>
        						<ul class="list_style">
        							<li><a href="#">Mon. :  Fri.: 8 am - 8 pm</a></li>
        							<li><a href="#">Sat. : 9am - 4pm</a></li>
        							<li><a href="#">Sun. : Closed</a></li>
        						</ul>
        					</aside>
        				</div>
        				<div class="col-lg-3 col-6">
        					<aside class="f_widget f_contact_widget">
        						<div class="f_title">
        							<h3>Contact Info</h3>
        						</div>
        						<h4>(1800) 574 9687</h4>
        						<p>Justshiop Store <br />256, baker Street,, New Youk, 5245</p>
        						<h5>cakebakery@contact.co.in</h5>
        					</aside>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="footer_copyright">
        		<div class="container">
        			<div class="copyright_inner">
        				<div class="float-left">
        					<h5><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></h5>
        				</div>
        				<div class="float-right">
        					<a href="#">Purchase Now</a>
        				</div>
        			</div>
        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        <!--================Search Box Area =================-->
       <!-- <div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
            <div class="search_box_inner">
                <h3>Search</h3>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="icon icon-Search"></i></button>
                    </span>
                </div>
            </div>
        </div>
        <!--================End Search Box Area =================-->
      
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!--<script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
       <!-- <script src="js/popper.min.js"></script>
        <!--<script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
       <!-- <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <!-- Extra plugin js -->
        <!--<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/magnifc-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/datetime-picker/js/moment.min.js"></script>
        <script src="vendors/datetime-picker/js/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        
        		
        
        <script src="js/theme.js"></script>-->
		
		
		 
       	
<br><br>
<br><br>
 
 
		<?php require_once('footer.php');?>
		
		 
		
   