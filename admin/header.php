
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

	<link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
  <title>Cake Baker Admin Panel</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="./css/sb-admin-2.css" rel="stylesheet">
  
  
  
  
  
  
</head>



<body id="page-top">



  <nav class="navbar navbar-expand navbar-dark bg-primary static-top ">

    <a class="navbar-brand mr-1 px-2 " href="index.php"><img src="img/logo-3.png" alt=""></a>
	

    <!--<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>-->

    <!-- Navbar Search -->
     <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <!--<div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>-->
    </form> 
	
	<ul class="navbar-nav ml-auto ml-md-0">


												<li class="nav-item dropdown no-arrow">
													<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="fas fa-user-circle fa-fw fa-2x"></i>
													</a>
													<div class="dropdown-menu dropdown-menu-right mt-2 bg-danger" aria-labelledby="userDropdown">
														<a class="dropdown-item" href="logout.php"  >Logout</a>
													</div>
												</li>
											</ul>

    <!-- Navbar -->
    <!--<ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <!--<i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span
        </a>>-->
        <!--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <!--<i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>-->
        </a>
       <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>-->
      </li>
      <!--<li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<!--<i class="fas fa-user-circle fa-fw"></i>-->
        </a>
        <!--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>-->

  </nav>
  
  

  <div id="wrapper">
  
  
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
	
	<!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <img src="img/fav-icon.png">
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">


      <li class="nav-item dropdown bg-info ">
        <a class="nav-link dropdown-toggle text-white " href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <!--<i class="fas fa-fw fa-folder"></i>-->
          <span>Catogery</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          
          <a class="dropdown-item " href="add-cat.php">Add categories</a>
          <a class="dropdown-item" href="viewcat.php">View categories</a>
        
        </div>
      </li>
	   <li class="nav-item dropdown bg-info">
        <a class="nav-link dropdown-toggle text-white " href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <!--<i class="fas fa-fw fa-folder"></i>-->
          <span>Products</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          
		  <a class="dropdown-item" href="addprod.php">Add Products</a>
          <a class="dropdown-item" href="viewprod.php">View Products</a>
          
        
        </div>
      </li>
	  <li class="nav-item bg-info">
        <a class="nav-link text-white " href="order.php" >
          <!--<i class="fas fa-fw fa-chart-area"></i>-->
          <span>Order</span></a>
      </li>
	  
	  <li class="nav-item bg-info">
        <a class="nav-link text-white " href="customer.php">
          <!--<i class="fas fa-fw fa-chart-area"></i>-->
          <span>Customer</span></a>
      </li>
      <!--<li class="nav-item bg-danger">
        <a class="nav-link text-white text-center" href="logout.php" onclick="return confirm('Are you sure you wish to Logout.');">
          <!--<i class="fas fa-fw fa-chart-area"></i> 
          <span>LOGOUT</span></a>
      </li>-->
	  
	  
	   <!-- <li class="nav-item">
        <a class="nav-link" href="register.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>sign-up</span></a>
      </li> -->
      
    </ul>
