<?php
include "config.php";

$userid = $_POST['userid'];

$sql = "select * from `baker_prod` where `id`='$userid'";
$result = mysqli_query($con,$sql);

$response = "<table border='0' width='100%'>";
while( $row = mysqli_fetch_array($result) ){
 $id = $row['id'];
 $emp_name = $row['title'];
 $price = $row['price'];
 $desc = $row['description'];
  //$img=   $row['image'];  
 
 $response .= "<tr>";
 $response .= "<td>Name : </td><td>".$emp_name."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>Salary : </td><td>".$price."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>Gender : </td><td>".$desc."</td>";
 $response .= "</tr>";

 //$response .= "<tr>";
// $response .= "<td> </td><td>".$img ."</td>";
 //$response .= "</tr>";

  

}
$response .= "</table>";

echo $response;
exit;