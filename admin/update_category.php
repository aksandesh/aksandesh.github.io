<?php 
	require_once("config.php");
	$cat_id=$_POST['categ_id'];
	$category=$_POST['categ'];
	$update="UPDATE baker_cat set category ='$category' where id=$cat_id";
	mysqli_query($conn, $update);
	header("Location:viewcat.php"); 
?>