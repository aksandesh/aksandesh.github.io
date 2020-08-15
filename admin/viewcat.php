<?php require_once('header.php'); 

require_once('config.php');
$select="SELECT * FROM `baker_cat`";
$query=mysqli_query($conn,$select);

$num=mysqli_num_rows($query);

?>

    <div id="content-wrapper">

      <div class="container-fluid">

       

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>Number of category row's( <?php
            
			echo $num;
			
			?> )</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead >
                  <tr>
                    <th>SR NO.</th>
                    <th>Category</th>
					<th colspan=2>Operation</th>
                    
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>SR NO.</th>
                    <th>Category</th>
					<th colspan=2>Operation</th>
                    
                  </tr>
                </tfoot>
                <tbody>
			
                  <?php $i=1;
while ($res=mysqli_fetch_assoc($query))
{ ?>


<tr> 
<td><?php echo $i++; ?> </td>
<td><?php echo $res['category']; ?> </td>
<td><button class="btn btn-info" data-toggle="modal" data-target="#exampleModal" onclick="edit_category(<?php echo $res['id']; ?>)">Edit</button></td>
<td><a href="deletecat.php?user_id=<?php echo $res['id'];?>"onclick="return confirm('Please click on OK to Delete.');"class="btn btn-info" role="button">Delete</a></td>


</tr>
<?php } ?>
                  
                </tbody>
              </table>
            </div>
          </div>
         
        </div>

        
      </div>
      <!-- /.container-fluid -->
	  <!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header bg-info text-center">
					<h5 class="modal-title  text-white" id="exampleModalLabel">Edit Category</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
			  </div>
			   <form action="update_category.php" method="POST">
			  <div class="modal-body">
				<div class="form-group my-5">
					<input class="form-control" id="categ" name="categ" required placeholder="Type a category to add">
					<input class="form-control" name="categ_id"  type="hidden">
				</div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Update Data</button>
			  </div>
              </form>
			</div>
		  </div>
		</div>
		
		<script>
		
		function edit_category(id){
				//alert(id);
				$.ajax({
					'url':'get_single_category.php',
					data:"id="+id,
					method:"get",
					dataType:'json',
					success:function(response){
						//console.log(response);
						$('input[name="categ"]').val(response.category); 
						$('input[name="categ_id"]').val(response.id); 
					}
				})
			}
        </script>
	  
	  <?php require_once('footer.php');?>
