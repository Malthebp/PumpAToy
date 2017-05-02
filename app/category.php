<?php 



class category {

	private $fpdo; 

	function __construct()
	{
		global $fpdo;
		$this->fpdo = $fpdo;
	}



	//SHOW ALL PRODUCTS IN CATEGORY 
	public function showProductsInCat($id)
	{
		// $results = array();
		// $results['products'] =  $this->fpdo->from('ptoys_category_product')->leftJoin('ptoys_category AS category')->leftJoin('ptoys_product AS product')->select('product.*')->where('category.id', $id)->fetchAll();
		// $results['category'] = $this->fpdo->From('ptoys_category')->where('id', $id)->fetch();
		// return $results;

		return $this->fpdo->from('ptoys_product')->innerJoin('ptoys_category_product ON ptoys_product_id = ptoys_product.id')->innerJoin('ptoys_category ON ptoys_category_product.ptoys_category_id = ptoys_category.id')->select('ptoys_category.*')->fetchAll();

	}

	//SHOW ALL CATEGORIES 
	public function index()
	{
		return $this->fpdo->from('ptoys_category')->fetchall();
	}
	//SHOW SINGLE CATEGORY
	public function showCategory($id)
	{
		return $p = $this->fpdo->from('ptoys_category',$id)->fetch();
	}

	//CREATE CATEGORY
	public function create() {
		$name = $_POST['name'];
		$available = $_POST['available'];
		$image = $_POST['image'];
		$oldvals = array('name' => $name, 'available' => $available);
		$errors = array();

		//Image uploading
		$image = new Bulletproof\Image($_FILES); //Initialize Bulletproof
		if($image["image"]){
			$image->setLocation("images/category")
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
		if(empty($available) && $available != 0){
			$errors['available'] = 'Is this item available?';
		}
		if(empty($errors))
		{
			$values = array('name' => $name, 'available' => $available, 'image' => $imageUploaded);
			$query = $this->fpdo->insertInto('ptoys_category', $values)->execute();

			return $query;
		} else {
			foreach ($errors as $key => $value) {
				$_SESSION['errors'][$key] = $value;
			}
			foreach ($oldvals as $key => $value) {
				$_SESSION['oldvals'][$key] = $value;
			}
			return false;
		}
		return false;
	}

	//DELETE CATEGORY
	public function delete($id)
	{
		return $query = $this->fpdo->deleteFrom('ptoys_category', $id)->execute();
	}

	//UPDATE CATEGORY
	public function update($id)
	{
		$name = $_POST['name'];
		$available = $_POST['available'];
		$image = isset($_POST['image']) ? $_POST['image'] : null;
		$oldvals = array('name' => $name, 'available' => $available);
		$errors = array();

		//Image uploading
		$image = new Bulletproof\Image($_FILES); //Initialize Bulletproof
		if($image["image"]){
			$image->setLocation("images/category")
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
		if(empty($available) && $available != 0){
			$errors['available'] = 'Is this item available?';
		}
		if(empty($errors))
		{
			$values = array('name' => $name, 'available' => $available, 'image' => $imageUploaded);
			$query = $this->fpdo->update('ptoys_category', $values, $id)->execute();

			return $id;
		} else {
			foreach ($errors as $key => $value) {
				$_SESSION['errors'][$key] = $value;
			}
			foreach ($oldvals as $key => $value) {
				$_SESSION['oldvals'][$key] = $value;
			}
			return $id;
		}
		return $id;
	}
}