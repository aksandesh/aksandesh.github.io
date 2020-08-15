<?php
require_once('config.php');
$id=$_GET['user_id'];
$image=$_GET['image']; 
unlink('uploads/' .$image);
$delete="DELETE FROM file where user_id=$id";
mysqli_query($conn,$delete);
header("Location:viewprod.php");
?>