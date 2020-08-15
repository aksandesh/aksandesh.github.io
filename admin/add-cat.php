<?php 
require_once('header.php'); 
?>

<div class="container">

<div class="row m-5">
<div class="form-group col-10 "> 
<form action="insertcat.php" method="post">
<label > ADD CATEGORIES </label>
 <input type="text" class="form-control" placeholder="add categories" name="category"/>
 <input type="submit" onclick=myfunction() class="form-control bg-primary mt-3 text-white" style="height:40px; width:100px;" value="ADD" />
</form>

</div>
</div>
<?php
require_once('footer.php');

?>

</div>
<script>
function myfunction()
{
  alert("Category Added Successfully");
}
</script>









