<?php 
	session_start();

if (isset($_SESSION['cart']) && count($_SESSION['cart'])>0){

require_once('config.php');
$username=$_SESSION['user_name'];
$userid=$_SESSION['user_id'];
  $cart_id= implode(",",$_SESSION['cart']);
 $select="SELECT * from `baker_prod` where id IN ($cart_id) ";
 $query=mysqli_query($con, $select);

while($res=mysqli_fetch_object($query)){
$insert="INSERT into `baker_cart_new` (`user_name`,`user_id`,`prod_id`) values ('$username','$userid','$res->id')";
mysqli_query($con, $insert);
}

	
	session_destroy();
	
	//unset($_SESSION['user_id']);
	//unset($_SESSION['user_name']); 
	
	
	header("Location:../index.php");
}else {
	
	session_destroy();
	header("Location:../index.php");
}
	
	
?>