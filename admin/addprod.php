<?php 
require_once('header.php'); 


require_once('config.php');
$select="SELECT * FROM baker_cat";
$query=mysqli_query($conn,$select);

?>


<div class="container mx-auto " >
<div class="row   " style="padding:35px 50px;">
<div class="col-xl-10 col-lg-9 col-md-9">
<div class="form-group"  > 

<form  action="insertprod.php" method="post" enctype="multipart/form-data">
<br><h4><label for="prod" > ADD PRODUCTS</label></center></h4>
<br>

<div class="form-group">
<label class=" text-dark" for="exampleFormControlTitle">Title	:   </label>

 <input  type="text" class="form-control col-lg-5" id="exampleFormControlTitle" placeholder="title" name="title">
 </div>
 
 <br>
 
<label  for="exampleFormControlcat">Category	:   </label>
<select class="form-control col-lg-5" name="select" id="exampleFormControlcat">
                   <?php
while ($res=mysqli_fetch_assoc($query))
{ ?>

 
<option value="<?php echo  $res['id']; ?>" ><?php echo  $res['category']; ?></option>


<?php } ?>

</select>
<br><br>

	<span><label class=" text-dark " for="exampleFormControlprice">Price	:	</label>
	
    <input type="number" class="form-control col-lg-5" id="exampleFormControlprice" placeholder="price" name="price"></span>
	
	
 <br>
 
 <label class=" text-dark" for="exampleFormControlFile">Uploads	: </label>

  <input type="file" id="exampleFormControlFile" name="image">
  
 <br><br>
 
     <label class=" text-dark" for="exampleFormControlTextarea1">Description</label>
	 
  <textarea class="form-control border-bottom-primary col-lg-5" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
 
  
  
<br>
 
  <input type="submit"   onclick=myfunction() class="form-control bg-primary mt-3 text-white" style="height:40px; width:100px;" value="ADD" >
 
 
 
 
 
 
 
 
 
 
</form></center>

</div>
</div>
</div>


<?php
require_once('footer.php');

?>
</div>


<script>
function myfunction()
{
  alert("Product Added Successfully");
}
</script>






