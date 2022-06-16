<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD Operations  in CI</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
</head>
<body>
	<div class="jumbotron">
		<h1 align="center">CRUD CI APP</h1>
	</div>
	<div class="container">
		<div class="clear-fix">
			<h3 style="float: left;">All Products</h3>
			<a href="#" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#exampleModal">Add Product</a>
		</div>
		<table class="table table-striped table-hover ">
			<thead>
				<tr>
					<th>Product name</th>
					<th>Product price</th>
					<th>Product quantity</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($product_details as $products): ?>
					<tr>
						<td>
							<?php echo $products->name; ?>
						</td>
						<td>
							<?php echo $products->price; ?>
						</td>
						<td>
							<?php echo $products->quantity; ?>
						</td>
						<td>
							<a href="<?php echo base_url(); ?>crud/editProduct/<?php echo $products->id; ?>" class="btn btn-success">Edit</a>

							<a href="<?php echo base_url(); ?>crud/deleteProduct/<?php echo $products->id; ?>" class="btn btn-danger">Delete</a>
						</td>
					</tr>





				<?php endforeach; ?>






			
			</tbody>
		</table>
	</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<form action="<?php echo base_url(); ?>crud/addProduct" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="form-group">
        	<label for="name">Name</label>
        	<input type="text" name="name" placeholder="enter your name" class="form-control">

        </div>
        <div class="form-group">
        	<label for="price">Price</label>
        	<input type="text" name="price" placeholder="enter the price" class="form-control">

        </div>
        <div class="form-group">
        	<label for="quantity">Quantity</label>
        	<input type="text" name="quantity" placeholder="enter the quantity" class="form-control">

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="insert" value="Add Product" class="btn btn-info">
      </div>
  </form>

    </div>
  </div>
</div>


<?php if($this->session->flashdata('error')): ?>

<div align="center" style="color:#FFF" class="bg-danger">
<?php echo $this->session->flashdata('error'); ?>
</div>


<?php endif; ?>




<?php if($this->session->flashdata('inserted')): ?>

<div align="center" style="color:#FFF" class="bg-success">
<?php echo $this->session->flashdata('inserted'); ?>
</div>


<?php endif; ?>


<?php if($this->session->flashdata('updated')): ?>

<div align="center" style="color:#FFF" class="bg-success">
<?php echo $this->session->flashdata('updated'); ?>
</div>


<?php endif; ?>


<?php if($this->session->flashdata('deleted')): ?>

<div align="center" style="color:#FFF" class="bg-success">
<?php echo $this->session->flashdata('deleted'); ?>
</div>


<?php endif; ?>







<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


</body>
</html>