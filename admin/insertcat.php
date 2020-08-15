 
<?php 


require_once('config.php');
$cat=$_POST['category'];

$insert="INSERT into `baker_cat` (`category`) VALUES ('$cat')";
mysqli_query($conn,$insert);

header("Location:viewcat.php");



?> 
