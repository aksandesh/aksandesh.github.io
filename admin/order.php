<?php require_once('header.php'); 
require_once('config.php');

$select1="SELECT * FROM baker_orders";
$query1=mysqli_query($conn,$select1);
$res_user=mysqli_num_rows($query1);

?>

<div id="content-wrapper">

      <div class="container-fluid">
	  
	         

      

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>Number of product row's(
              <?php 
			
			echo $res_user;
			
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
                    <th>user_id</th>
                    <th>user_name</th>
                     
                    <th>First name</th>
					<th>Last name</th>
					<th>Address</th>
					<th>Address1</th>
					<th>State</th>
					<th>City</th>
					<th>Zip</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Card</th>
					<th>CVV</th>
					<th>Amount</th>
					 <th colspan=2>Operation</th>
					  
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                     <th>id</th>
                    <th>user_id</th>
                    <th>user_name</th>
                     
                    <th>First name</th>
					<th>Last name</th>
					<th>Address</th>
					<th>Address1</th>
					<th>State</th>
					<th>City</th>
					<th>Zip</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Card</th>
					<th>CVV</th>
					<th>Amount</th>
					<th colspan=2>Operations</th>
					  
                  </tr>
                </tfoot>
                <tbody>
			                  <?php $i=1;
while ($res=mysqli_fetch_assoc($query1))
{ ?>


<tr> 
<td><?php echo $i++; ?> </td>
<td><?php echo  $res['user_id']; ?> </td>
<td><?php echo $res['user_name']; ?> </td>
 
<td><?php echo $res['name']; ?> </td>
<td><?php echo $res['name2']; ?> </td>
<td><?php echo $res['address']; ?> </td>
<td><?php echo $res['address2']; ?> </td>
<td><?php echo $res['state']; ?> </td>
<td><?php echo $res['city']; ?> </td>
<td><?php echo $res['zip']; ?> </td>
<td><?php echo $res['email']; ?> </td>
<td><?php echo $res['phone']; ?> </td>
<td><?php echo $res['card']; ?> </td>
<td><?php echo $res['cvv']; ?> </td>
<td><?php echo $res['amount']; ?> </td>

 



<td><button class="btn btn-info" data-toggle="modal" data-target="#exampleModal" onclick="edit_product(<?php echo $res['id']; ?>)" >Edit</button></td>

<td><a href="deleteprod.php?prod_id=<?php echo $res['id'];?>class="btn btn-info" role="button">Delete</a></td>


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
	  
	  	  <?php require_once('footer.php');?>