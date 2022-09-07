<?php

namespace HomeWork\Products;


class Products
{
	function __construct()
	{
		session_start();
	}
	public function storeProduct($product)
	{
		$_SESSION['products'][] = $product;
	}
	public function deleteProduct($id)
	{
		unset($_SESSION['products'][$id]);
	}
	public function getProduct($id)
	{
		return $_SESSION['products'][$id];
	}
	public function updateProduct($product)
	{
		$id = (int)$product['id'];
		unset($product['id']);
		$_SESSION['products'][$id] = $product;
	}
}
