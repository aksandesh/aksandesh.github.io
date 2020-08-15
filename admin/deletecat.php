<?php
require_once('config.php');
$id=$_GET['user_id'];
$delete="DELETE FROM baker_cat where id=$id";
mysqli_query($conn,$delete);
header("Location:viewcat.php");
?>