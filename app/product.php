<?php 
require ('../config.php');
class product {

	public function create() {

	$name = $_POST['name'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	$available = $_POST['available'];
	$stock = $_POST['stock'];
	$image = $_POST['image'];
	$oldvals = array('name' => $name, 'description' => $description, 'price' => $price, 'available' => $available, 'stock' => $stock);
	$errors = array();

	//Image uploading
	$image = new Bulletproof\Image($_FILES); //Initialize Bulletproof
	if($image["image"]){
		$image->setLocation("images/products")
			  ->setName(date("dmYHis"));
	    $upload = $image->upload(); 
	    if($upload){
	        $imageUploaded = $upload->getFullPath();
	    }else{
	    	$errors['image'] = 'Something is wrong here!';
	    }
	}

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
	if(empty($available) && $available != 0){
		$errors['available'] = 'Is this item available?';
	}

	if(empty($errors))
	{
		$values = array('name' => $name, 'description' => $description, 'price' => $price, 'available' => $available, 'stock' => $stock, 'image' => $imageUploaded);
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

	}

	public function newProduct() {
		require $_SERVER['DOCUMENT_ROOT'].PUBLICROOT.'/views/backend/newproduct.php';
	}
	
	public function showAll() {
		require $_SERVER['DOCUMENT_ROOT'].PUBLICROOT.'/views/backend/products.php';
	}


}


?>