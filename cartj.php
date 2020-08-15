<?php 
     // require_once('header.php');
	 session_start();
	 require_once('config.php');
	 $prod_id=$_GET['prod_id'];
	 
	 if(isset ($_SESSION['user_id']) && ($_SESSION['user_id'])!=""){
		 $userid=$_SESSION['user_id'];
		$username=$_SESSION['user_name'];
		$insert="INSERT INTO `baker_cart` (`user_id`,`user_name`,`prod_id`) VALUES ('$userid','$username','$prod_id')";
		mysqli_query($con,$insert);
	 }
	 
	  else {
		   $xyz="do nothing";
	  }
	  
	 
	 

		  
	 
	 if(isset ($_SESSION['cart']) && ($_SESSION['cart'])!=""){
		 if (in_array($prod_id,$_SESSION['cart'])){
			 $abc="item already in cart!!";
			 $response=count($_SESSION['cart']); 
		 }else{ 
		 array_push($_SESSION['cart'],$prod_id);
		 
		 $response=count($_SESSION['cart']);
		 
		 $abc="Item added succesfully";
		 } 
	 }else{
	 
		 $_SESSION['cart']=array();
		 array_push($_SESSION['cart'],$prod_id);
	 
		
		
		$response=count($_SESSION['cart']);
		$abc="Item added succesfully";
		
	 }
	 
	 
	 
	 
	 $res = array(
	 "count"=>$response, 
	 "msg"=>$abc
	 );
	 

// print_r ($_SESSION['cart']);
echo json_encode($res);


?>
