<?php
require_once('config.php');
$email=$_POST['email'];
$password=$_POST['password'];
$select="SELECT * FROM baker_admin WHERE email='$email' && password='$password'";
$query=mysqli_query($conn,$select);
 mysqli_num_rows($query);


if(mysqli_num_rows($query)>0){
	$res=mysqli_fetch_assoc($query);
	session_start();
	$_SESSION['user_id']=$res['id'];
	$_SESSION['user_name']=$res['name'];
	header("Location:index.php");
}
else{
	header("Location:login.php?error_msg=1");
}
?>