<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Document</title>
</head>

<body>
	<?php
	session_start();
	
	?>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6">

		
	<div style=" width:90vw; display:flex; justify-content:center; flex-direction:column;">
		<div  style="margin-left: auto;"><a class="btn btn-success mb-3" href="create_products.php">Add</a></div>
		<table class="table table-striped " border="1">
			<thead>
				<tr>
					<th>#</th>
					<th>Product Name</th>
					<th>Price</th>
					<th>Options</th>
				</tr>
			</thead>
			<tbody>
				<?php
				if (isset($_SESSION['products'])) {
					$products = $_SESSION['products'];
					foreach ($products as $key => $product) { ?>
						<tr>
							<td><?php echo $key; ?></td>
							<td><?php echo $product['name']; ?></td>
							<td><?php echo $product['price']; ?></td>
							<td>
								<a class="btn btn-primary" href="./Details.php?id=<?=$key?>">Detais</a>
								<a class="btn btn-success" href="./update.php?id=<?=$key?>">Edit</a>
								<a class="btn btn-danger" href="./delete.php?id=<?=$key?>">Delete</a>

							</td>
						</tr>
				<?php  }
				} ?>
			</tbody>
		</table>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>