<?php 
require_once('header.php'); 

require_once('config.php');
$user_id=$_GET['user_id'];
$editprod="SELECT * FROM `baker_prod` where id='$user_id'";
$query=mysqli_query($conn,$editprod);
$xyz=mysqli_fetch_assoc($query);
$select="SELECT * FROM `baker_cat`";
$query1=mysqli_query($conn,$select);

?>

<div class="container" >

<div class="row m-5">
<div class="form-group col-5 justify-content-around"> 
<form action="update.php" method="post" enctype="multipart/form-data">
<label for="prod" > EDIT PRODUCTS</label>


 <input type="text" class="form-control" placeholder="Enter title" value="<?php echo $xyz['title'];?>" name="title">
 <br><br>
 

<select name="select" class="form-control">
                   <?php
while ($res=mysqli_fetch_assoc($query1))
{ ?>

 
<option value="<?php echo $res['id']; ?>"><?php echo  $res['category']; ?> </option>


<?php } ?>

</select>
<br><br>

    <input type="number" class="form-control" placeholder="price" value="<?php echo  $xyz['price'];?>"  name="price">
 <br><br>
 
 <img src="uploads/<?php echo $xyz['image']; ?>" height="100" width="100">
 <br><br>
 
  <input type="file" name="image">
 <br><br>

      
  <input type="text" class="form-control" placeholder="description" name="description" value="<?php echo  $xyz['description'];?>">
 <br><br>
 
 
 
 
 <input type="submit"  class="form-control bg-primary mt-3 text-white" style="height:40px; width:100px;" value="ADD" >
 
 <input type="hidden" name="old_image" value="<?php echo $xyz['image'];?>">
  <input type="hidden" name="user_id" value="<?php echo $xyz['id'];?>">
 
 
 
 
 
 
 
 
 
</form>
</div>
</div>
</div>








<?php
require_once('footer.php');

?>