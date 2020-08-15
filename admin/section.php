 
 
 
 
 <?php 
 session_start();
 
 $nam=$_SESSION['user_name'];
require_once("config.php");
        $prod=mysqli_query($conn,"SELECT * FROM `prod`");
        $cat=mysqli_query($conn,"SELECT * FROM `cat`");
        $user=mysqli_query($conn,"SELECT * FROM `user`");
        $res_prod=mysqli_num_rows($prod);
        $res_categ=mysqli_num_rows($cat);
        $res_users=mysqli_num_rows($user);
		
?>
	

 
 
 
 <div id="content-wrapper" class="d-flex flex-column mx-3 my-3 ">

      <div id="content ">

    <b> <?php echo "WELCOME".$nam; </b>
	
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
                        echo $res_users." new users!"; 
                      ?></div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
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