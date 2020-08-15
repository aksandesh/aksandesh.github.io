<?php
//require "config/constants.php";
 
require_once("config.php");
require_once('header.php');

if(!isset($_SESSION["user_id"])){
	header("location:index.php");
	
	
	  
	
}
$user_id = $_SESSION["user_id"];
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

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
		
    </head>
    <body>	<!--<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Khan Store</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
			</ul>
		</div>
	</div>-->
	
	<br><br>
		<br><br>
        <section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>Orders</h3>
        			<ul>
        				<li><a href="index.php">Home</a></li>
        				<li><a href="customer_order.php">Orders</a></li>
        			</ul>
        		</div>
        	</div>
        </section>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
	
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<h1>Customer Order details</h1>
						<hr/>
						<?php


$orders_list = "SELECT o.user_id,o.prod_id,o.quantity,o.name,o.name2,p.title,p.price,p.image FROM baker_order_new o,baker_prod p WHERE o.user_id='$user_id' AND o.prod_id=p.id";
		$query = mysqli_query($con,$orders_list);
							
							if (mysqli_num_rows($query) > 0) {
								while ($row=mysqli_fetch_array($query)) {
									?>
										<div class="row">
											<div class="col-md-6">
		<img style="float:right;" src="admin/uploads/<?php echo $row['image']; ?>" width="250" height="250" class="img-responsive img-thumbnail"/>
											</div>
											<div class="col-md-6">
												<table>
													<tr><td> Name</td><td><b><?php echo $row['name']; ?></b> <b><?php echo $row['name2']; ?></b></td></tr>
													<tr><td>Product Name</td><td><b><?php echo $row['title']; ?></b> </td></tr>
													<tr><td>Product Price</td><td><b><?php echo $row['price']; ?></b></td></tr>
													<tr><td>Quantity</td><td><b><?php echo $row['quantity']; ?></b></td></tr>
													 
												</table>
											</div>
										</div>
									<?php
								}
							}
						?>
						
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	<br><br>
	<br><br>
	<?php require_once('footer.php'); ?>
</body>
</html>
















































