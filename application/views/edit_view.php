<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CRUD Operations  in CI</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
</head>
<body>

	<div class="jumbotron">
		<h1 align="center">CRUD CI APP</h1>
	</div>
	<div class="container">
		<h1 align="center">Edit Product</h1>

		<form action="<?php echo base_url(); ?>crud/update/<?php echo $singleProduct->id; ?>" method="post">
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" placeholder="enter name" class="form-control" value="<?php echo $singleProduct->name;  ?>">
			</div>
			<div class="form-group">
				<label for="price">Price</label>
				<input type="text" name="price" placeholder="enter price" class="form-control" value="<?php echo $singleProduct->price;  ?>">
			</div>
			<div class="form-group">
				<label for="quantity">Price</label>
				<input type="text" name="quantity" placeholder="enter quantity" class="form-control" value="<?php echo $singleProduct->quantity;   ?>">
			</div>


			<input type="submit" name="edit" value="Update" class="btn btn-primary">

		</form>
	</div>

	





	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


</body>
</html>