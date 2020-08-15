<?php 
	require_once('config.php');
	$email=$_POST['email'];
	$password=$_POST['password'];
	$select="SELECT * FROM `baker_user_info` where `email`='$email' && `password`='$password'";
	
	$query=mysqli_query($con, $select);
	$res=mysqli_fetch_array($query);
	 if(mysqli_num_rows($query)>0){
		 
		 session_start();
		 if(isset ($_SESSION['cart']) && ($_SESSION['cart'])!=""){
		  $xyz="do nothing";
			unset($_SESSION['cart']);
	 }
	
			$_SESSION['user_id']=$res['id'];
		$_SESSION['user_name']=$res['firstname']; 
		$_SESSION['email']=$res['email'];
		
		$userid=$_SESSION['user_id'];
		$select2="SELECT * from `baker_cart` where user_id='$userid'";
		$query2=mysqli_query($con, $select2);
		
		if(mysqli_num_rows($query2)>0)
		{
			
			$abc=array();
			while($res2=mysqli_fetch_assoc($query2))
			{    $abc[]=$res2;  
		     }
			
			
		
			foreach ($abc as $xyz)
			
			{   
				$pqr=$xyz['prod_id'];
				
				
				if(isset ($_SESSION['cart']) && (($_SESSION['cart'])!==false)) {
				
				  if (in_array($pqr,$_SESSION['cart']))
				  {
					  
					  				$xyz="do nothing";
					
				}
				else
				{
					array_push($_SESSION['cart'],$pqr);
				header("Location: ../index.php");

				}
				
				}
				
				
				else {
					
					$_SESSION['cart']=array();
					array_push($_SESSION['cart'],$pqr);
				}
				
			}
		   ($_SESSION['cart']);
		   header("Location: ../index.php");
		}
		
		else{ header("Location: ../index.php");}
	
	
	
	
	}
	else{
		header("Location: ../login.php?login_error=1");
	}
?>