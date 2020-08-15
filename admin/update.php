<?php 
require_once('config.php');
$title=$_POST['title'];
$price=$_POST['price'];

$description=$_POST['description'];
$old_img=$_POST['old_image'];

$filename=$_FILES['image']['name'];
if ($filename== "") {
$new_file_name=$old_img;
}else{
unlink('uploads/'.$old_img);
$newf=Date("Ymdhis");
$ext_array=explode('.',$filename);
$ext=$ext_array[count($ext_array)-1];
$new_file_name=$newf.".".$ext;
$source=$_FILES['image']['tmp_name'];
$destination="uploads/".$new_file_name;
move_uploaded_file($source,$destination);

}
$user_id=$_POST['user_id'];
  $update="UPDATE `prod` set `title`='$title' , `price`='$price', `description`='$description', `image`='$new_file_name' where id='$user_id' ";

mysqli_query($conn,$update);
header("Location:viewprod.php?msg=3");





?>
