<?php

if ($_SERVER['REQUEST_METHOD'] != "POST") {
	header("location:./index.php");
}
include_once('./vendor/autoload.php');

use HomeWork\Products\Products;

$x = new Products();
$x->storeProduct($_POST);
header("location: index.php");
