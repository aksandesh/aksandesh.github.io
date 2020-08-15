<?php 

require_once('config.php');
$title=$_POST['title'];
$select=$_POST['select'];
$price=$_POST['price'];


$description=$_POST['description'];



$filename=$_FILES['image']['name'];
$newf=Date("Ymdhis");
$ext_array=explode('.',$filename);
$ext=$ext_array[count($ext_array)-1];
$new_file_name=$newf.".".$ext;
$source=$_FILES['image']['tmp_name'];
$destination="uploads/".$new_file_name;
move_uploaded_file($source,$destination);
 
 $insert="INSERT into baker_prod (cat_id, title , price , image , description ) VALUES ('$select','$title','$price','$new_file_name','$description')";

mysqli_query($conn,$insert);
header("Location:viewprod.php");
?>