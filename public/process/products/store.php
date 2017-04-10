<?php
session_start();
require ('../config.php');

$query = $fpdo->from('ptoys_product');

	$name = $_POST['name'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	$available = $_POST['available'];
	$stock = $_POST['stock'];
	$oldvals = array('name' => $name, 'description' => $description, 'price' => $price, 'available' => $available, 'stock' => $stock);
	$errors = array();

if(empty($name)){
	$errors['name'] = 'Name must be filled';
}
if(empty($price)){
	$errors['price'] = 'Price must be filled';
}
if(empty($description)){
	$errors['description'] = 'Description must be filled';
}
if(empty($stock)){
	$errors['stock'] = 'Stock must be filled';
}
if(empty($available)){
	$errors['available'] = 'Is this item available?';
}

if(empty($errors))
{
	$values = array('name' => $name, 'description' => $description, 'price' => $price, 'available' => $available, 'stock' => $stock);
	$query = $fpdo->insertInto('ptoys_product', $values)->execute();
	header('location: product/' . $query);
} else {
	foreach ($errors as $key => $value) {
		$_SESSION['errors'][$key] = $value;
	}
	foreach ($oldvals as $key => $value) {
		$_SESSION['oldvals'][$key] = $value;
	}

	header('location: newproduct');
}

?>