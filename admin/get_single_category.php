<?php 
	require_once('config.php');
	$id=$_GET['id'];
	$select="SELECT * FROM baker_cat where id=$id";
	$query=mysqli_query($conn, $select);
	$result=mysqli_fetch_assoc($query);
	echo json_encode($result);
?>