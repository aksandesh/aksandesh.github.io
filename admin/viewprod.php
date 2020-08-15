<?php require_once('header.php'); 
require_once('config.php');
$select="SELECT baker_prod.*, baker_cat.category from baker_prod JOIN baker_cat ON baker_prod.cat_id=baker_cat.id";
$query=mysqli_query($conn,$select);

$select1="SELECT * FROM baker_prod";
$query1=mysqli_query($conn,$select1);
 $res_prod=mysqli_num_rows($query1);

$select_cat="SELECT * FROM baker_cat";
$query_cat=mysqli_query($conn,$select_cat);
?>

    <div id="content-wrapper">

      <div class="container-fluid">
	  
	         

      

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>Number of product row's(
              <?php 
			
			echo $res_prod;
			
			?> )</div>
			
          <div class="card-body">
            <div class="table-responsive">
			
              <table class="table table-bordered  text-center" id="dataTable" width="100%" cellspacing="0">
			  <div class="row">
			  <div class="col-sm-12 col-md-6">
			  <div class="dataTables_length" id="dataTable_length"><label>Show 
			  <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
			  <option value="10">10</option>
			  <option value="25">25</option>
			  <option value="50">50</option>
			  <option value="100">100</option>
			  </select> entries</label>
			  </div>
			  </div>
			  <div class="col-sm-12 col-md-6">
			  <div id="dataTable_filter" class="dataTables_filter">
			  <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable">
			  </label>
			  </div>
			  </div>
			  </div>
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Description</th>
					 <th colspan=2>Operation</th>
					  
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                     <th>id</th>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Description</th>
					<th colspan=2>Operations</th>
					  
                  </tr>
                </tfoot>
                <tbody>
			                  <?php $i=1;
while ($res=mysqli_fetch_assoc($query))
{ ?>


<tr> 
<td><?php echo $i++; ?> </td>
<td><?php echo  $res['category']; ?> </td>
<td><?php echo $res['title']; ?> </td>
<td><?php echo $res['price']; ?> </td>
<td>  <img src="uploads/<?php echo $res['image']; ?>" height="150" width="150"> </td>
<td><?php echo $res['description']; ?> </td>



<td><button class="btn btn-info" data-toggle="modal" data-target="#exampleModal" onclick="edit_product(<?php echo $res['id']; ?>)" >Edit</button></td>

<td><a href="deleteprod.php?prod_id=<?php echo $res['id'];?>&&user_id=<?php echo $res['image'];?>"onclick="return confirm('Please click on OK to Delete.');"class="btn btn-info" role="button">Delete</a></td>


</tr>
<?php } ?>
                  
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <p class="small text-center text-muted my-5">
          <em>More table examples coming soon...</em>
        </p>

      </div>
      <!-- /.container-fluid -->
	  
	  <!-- Modal -->
	  
	    <div class="container " >
			<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog " role="document">
				<div class="modal-content">
				  <div class="modal-header bg-info" style=" padding:35px 50px;">
					<h5 class="modal-title mx-auto text-white " id="exampleModalLabel">Edit Product</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
			  </div>
			  
			 <div class="modal-body " style="padding:20px 50px;">
			   <form action="update_product.php" method="post" enctype="multipart/form-data">

<div class="form-group ">

<label  for="exampleFormControlTitle">Title	:   </label>

 <span><input type="text" id="exampleFormControlTitle" class="form-control" placeholder="Enter title"  name="title"></span>
 </div>
 
 
<label class="my-1" for="exampleFormControlcat">Category	:   </label>
<select  name="select" class="form-control" id="exampleFormControlcat">
                   <?php
while ($res=mysqli_fetch_assoc($query_cat))
{ ?>

 
<option value="<?php echo $res['id']; ?>"><?php echo  $res['category']; ?> </option>


<?php } ?>

</select>

	<label class="my-2 " for="exampleFormControlprice">Price	:	</label>
    <input  type="number" id="exampleFormControlprice" class="form-control" placeholder="price"   name="price">
 <br>	
 
 <img class="my=4" id="prod_img"/ src= width="100" height="100">
 <br>
 
 
  <input  type="file" name="image">
  
  <br>
<label class="my-2" for="exampleFormControlTextarea1">Description</label>
	 
  <textarea type="text" class="form-control border-bottom-primary"  id="exampleFormControlTextarea1" name="description" rows="2"></textarea
  
 
 <br><br>
 
 <div class="modal-footer" style="padding:20px 50px;" >
			
			<button type="button" class="btn btn-secondary pull-center " data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary">Update Data</button>
				
				
			  </div>
 
				
				<br>
				



			  
 
 
 
 <input type="hidden" name="old_image" >
  <input type="hidden" name="product_id">
  
  
 
 
 
 
 
 
 
 
 
</form>

</div>
<div class="bg-info" style="padding:35px 50px;">

<center><span>Copyright © Your Website 2020</span></center>
</div>


 
			</div>
		  </div>
		</div>
		
	
		
		
				<script>
		
		function edit_product(id){
				//alert(id);
				$.ajax({
					'url':'get_single_product.php',
					data:"id="+id,
					method:"get",
					dataType:'json',
					success:function(response){
						console.log(response);
						$('input[name="title"]').val(response.title); 
						$('select[name="select"]').val(response.cat_id);
						$('input[name="price"]').val(response.price); 
						$('textarea[name="description"]').val(response.description);
						$('input[name="old_image"').val(response.image);
						$('input[name="product_id"').val(response.id);
						$('#prod_img').attr('src',"uploads/"+response.image );
					}
				})
			}
        </script>
	  
	  
	  <?php require_once('footer.php');?>


