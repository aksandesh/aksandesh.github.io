<?php
require_once('config.php');
$nm=$_POST['name'];
$eid=$_POST['email'];
$pwd=($_POST['password']);

$query="INSERT INTO baker_admin (name,email,password) VALUES('$nm','$eid','$pwd')";

mysqli_query($conn,$query);

header("Location:login.php");

?>
