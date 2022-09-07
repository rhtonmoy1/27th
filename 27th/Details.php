<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Details</title>
	<?php

	include_once('./vendor/autoload.php');

	use HomeWork\Products\Products;

	$x = new Products();
	$products = $x->getProduct($_GET['id']);

	?>
</head>

<body>
	<div class="container mt-5 justify-content-center">
		<div class="row justify-content-center">
			<div class="col-md-4">
	<a href="./index.php"> Go Back </a>
	<h3>Product Name : <?= $products['name']?></h3>
	<h3> Product Price : <?= $products['price']?></h3>
	</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>