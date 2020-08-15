<?php
require_once('config.php');
$id=$_GET['id'];
$delete="DELETE FROM baker_prod where id=$id";
mysqli_query($conn,$delete);
 
/*unlink('uploads/' .$image);*/

header("Location:viewprod.php");
?>