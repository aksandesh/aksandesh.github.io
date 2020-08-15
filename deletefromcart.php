
<?php 

session_start();
require_once('config.php');
$prod_id=$_POST['prod_id'];


							if(isset($_SESSION['user_id']) && $_SESSION['user_id']!=""){
		$userid=$_SESSION['user_id'];
		
	$delete="DELETE FROM `baker_cart` where `prod_id`='$prod_id' && `user_id`='$userid'";
	
    mysqli_query($con,$delete);
	
							}
							
							 

$key=array_search($prod_id, $_SESSION['cart']);
	unset( $_SESSION['cart'][$key]);
	$_SESSION['cart'] = array_values($_SESSION['cart']);
	
	


	

?>
	

