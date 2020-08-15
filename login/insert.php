<?php 


require_once('config.php');
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$email=$_POST['email'];
$password=$_POST['password'];

$insert="INSERT into `baker_user_info` (`firstname`,`lastname`,`contact`,`address`,`email`,`password`) VALUES ('$firstname','$lastname','$contact','$address','$email','$password')";

mysqli_query($con,$insert);
header("Location:login_form.php");



?> 
