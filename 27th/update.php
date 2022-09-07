<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<?php
$id = $_GET['id'];
include_once('./vendor/autoload.php');

use HomeWork\Products\Products;

$x = new Products();
$product = $x->getProduct($id);

?>

<body>
	<form action="./set_product.php" method="POST">
	<input value=" <?=$id?>" type="text" name="id" placeholder="name" hidden>

		<input value="<?=$product['name'] ?>" type="text" name="name" placeholder="name"> <br>
		<input value="<?=$product['price'] ?>" type="text" name="price" placeholder="price"> <br>
		<button type="submit">Update</button>
	</form>
</body>

</html>