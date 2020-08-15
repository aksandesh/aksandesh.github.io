<?php
session_start();
	
	if(isset($_SESSION['user_id'])&& $_SESSION['user_id']!=""){  
	require_once('config.php');
	
	$name=$_POST['name'];
	$name2=$_POST['name2'];
	$address=$_POST['address'];
	$address2=$_POST['address2'];
	$state=$_POST['state'];
	$city=$_POST['city'];
	$zip=$_POST['zip'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$card=$_POST['card'];
	$cvv=$_POST['cvv'];
	$amount=$_POST['amount'];
	
	$userid=$_SESSION['user_id'];
	$username=$_SESSION['user_name'];
	$useremail=$_SESSION['email'];
	$name1 = "/^[a-zA-Z ]+$/";
	$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$number = "/^[0-9]+$/";
	
	
	
	
	
	
	
	if(empty($name) || empty($name2) || empty($address) || empty($address2) || empty($state) ||
	empty($city) || empty($zip) || empty($email)|| empty($phone) || empty($card) || empty($cvv) ){
		
				echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>PLease Fill all fields..!</b>
			</div>
		";
		exit();
		
		} else {
		if(!preg_match($name1,$name)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $name is not valid..!</b>
			</div>
		";
		exit();
	}
	
	if(!preg_match($name1,$name2)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $l_name is not valid..!</b>
			</div>
		";
		exit();
	}
		if(!preg_match($number,$zip)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Zip number $zip is not valid</b>
			</div>
		";
		exit();
	}
	if(!(strlen($zip) == 6)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Zip number must be 6 digit</b>
			</div>
		";
		exit();
	}
	if(!preg_match($emailValidation,$email)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $email is not valid..!</b>
			</div>
		";
		exit();
	}
	if(!preg_match($number,$phone)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number $phone is not valid</b>
			</div>
		";
		exit();
	}
	if(!(strlen($phone) == 10)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number must be 10 digit</b>
			</div>
		";
		exit();
	}
	if(!preg_match($number,$card)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Card number $card is not valid</b>
			</div>
		";
		exit();
	}
	if(!(strlen($card) == 8)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Card number must be 8 digit</b>
			</div>
		";
		exit();
	}
	
	
	
	if(!preg_match($number,$cvv)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Cvv number $cvv is not valid</b>
			</div>
		";
		exit();
	}
	if(!(strlen($cvv) == 3)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>CVV number must be 3 digit</b>
			</div>
		";
		exit();
	}
		/*$sql = "SELECT prod_id,FROM cart WHERE user_id = '$userid'";
		$query = mysqli_query($con,$sql);
		if (mysqli_num_rows($query) > 0) {
			# code...
			while ($row=mysqli_fetch_array($query)) {*/
			//
			
		 
				
	  
   
	 	
	  //,`quantity`, `prodid`  '".$quan[$i]."','".$prodid[$i]."',
	  
	  /*$quan[]=$_POST['quan'];
	$prodid[]=$_POST['prodarr']; { }*/
	$quan=explode(',',$_POST['quan']);
	//print_r($_POST['prodarr']);
	$prodid=explode(',',$_POST['prodarr']);
	//print_r($prodid);
//die;	
	for ($i=0; $i < count($prodid); $i++){
		$insert1= "INSERT INTO `baker_order_new` (`user_id`,`user_name`,`name`,`name2`,`prod_id`,`quantity`) VALUES ('$userid','$username','$name','$name2','".$prodid[$i]."','".$quan[$i]."')";
			mysqli_query($con,$insert1);

	}
	    $insert="INSERT INTO `baker_orders` (`user_id`,`user_name`,`name`,`name2`,`address`,`address2`,`state`,`city`,`zip`,`email`,`phone`,`card`,`cvv`,`amount`) VALUES ('$userid','$username','$name','$name2','$address','$address2','$state','$city','$zip','$email','$phone','$card','$cvv','$amount')";
	 mysqli_query($con,$insert) ;
	 
				
	 
			
			
	  
	   $delete="DELETE FROM `baker_cart` where user_id=$userid";
          mysqli_query($con,$delete);
			  				
			
			

unset($_SESSION['cart']);
		
			echo "register_success";
			 	
		
}
	}else { $abc="do nothing";}
	
 

	 
 
?>