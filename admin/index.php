
<?php
session_start();
if(isset($_SESSION['user_id']) && $_SESSION['user_id']!=""){
$_SESSION['user_name'];

?>

<?php


require_once('header.php');
?>
<?php

 
 

		require_once("config.php");
        $prod=mysqli_query($conn,"SELECT * FROM `baker_prod`");
        $cat=mysqli_query($conn,"SELECT * FROM `baker_cat`");
        $user=mysqli_query($conn,"SELECT * FROM `baker_admin`");
        $res_prod=mysqli_num_rows($prod);
        $res_categ=mysqli_num_rows($cat);
        $res_users=mysqli_num_rows($user);
		?>
		
		
		
		<div id="content-wrapper" class="d-flex flex-column mx-3 my-3 ">

      <div id="content ">

    <b> <?php echo "WELCOME"." " .$_SESSION['user_name'];?></b>
	
	 <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                  </div>
                  <div class="mr-5">
                    <?php 
                        echo $res_prod." new products!"; 
                      ?>
                    </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="viewprod.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5">
                      <?php 
                        echo $res_categ." new categories!"; 
                      ?></div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="viewcat.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5">
                      <?php 
                        echo $res_users." admin!"; 
                      ?></div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="admin.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            </div>      
          </div>
          
      
        </div>

      </div>
      <!-- /.container-fluid -->

<?php 

require_once('footer.php');

?>

<?php }else{
	header("Location:login.php");
}
?>