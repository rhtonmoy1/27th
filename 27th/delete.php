<?php


include_once('./vendor/autoload.php');

use HomeWork\Products\Products;

$x = new Products();
$x->deleteProduct($_GET['id']);

header("location: index.php");
