<?php 
session_start();
require('../config.php');
define('PUBLICROOT', '/laravel/mdu/pumpatoy/public/');

// include ('../controllers/ProductController.php');

require('../app/product.php');
require('../app/user.php');
require('../app/category.php');

	// map homepage
$router->map( 'GET', '/public/', function() {
	require __DIR__ . '/views/front-end/index.php';
});
	// Register
$router->map( 'GET', '/register', function() {
	require __DIR__ . '/views/front-end/register.php';
});
	// User
$router->map( 'POST', '/user', function() {
	$loginUser = new userAuth();
	$loginUser = $loginUser->login();

	//require __DIR__ . '/controllers/user.php';
});

/*******Routing for frontend/non admins*******/
$router->map( 'GET', '/public/product/[i:id]', function($id) {
	$product = new product();
	$product = $product->showProduct($id);
	require __DIR__ . '/views/front-end/product.php';
});

$router->map( 'GET', '/public/prod', function() {
	require __DIR__ . '/views/front-end/products.php';
});

//Category
$router->map( 'GET', '/public/category/', function() {
	$cat = new Category();
	$results = $cat->index();
	require __DIR__ . '/views/front-end/category.php';
});

$router->map( 'GET', '/public/category/[i:id]', function($id) {
	$cat = new Category();
	$results = $cat->showProductsInCat($id);
	require __DIR__ . '/views/front-end/products.php';
});


/*******Routing for admin*******/
$router->map( 'GET', '/public/admin', function() {
	require __DIR__ . '/views/backend/index.php';
});

/*PRODUCTS*/
//New Products
$router->map( 'GET', '/public/admin/product/new', function() {
	require $_SERVER['DOCUMENT_ROOT'].PUBLICROOT.'/views/backend/newproduct.php';
});
$router->map( 'POST', '/public/admin/product/new', function() {
	//require __DIR__ . '/process/products/store.php';
	$product = new product();
	$product = $product->create();
	$product ? header('location: '.$product.'/') : header('location: new');
});

//Generel routing for products
$router->map( 'GET', '/public/admin/products', function() {
	require $_SERVER['DOCUMENT_ROOT'].PUBLICROOT.'/views/backend/products.php';
});
$router->map( 'GET', '/public/admin/product/[i:id]/', function($id) {
	$product = new product();
	$p = $product->showProduct($id);
	require __DIR__ . '/views/backend/product.php';
});
$router->map( 'POST', '/public/admin/product/[i:id]/delete', function($id) {
	$product = new product();
	$p = $product->delete($id);
	$p ? header('location: ../../products') : header('location: product/'. $p);
});
$router->map( 'POST', '/public/admin/product/[i:id]/update', function($id) {
	$product = new product();
	$p = $product->update($id);
	header('location: ../../product/'.$p.'/');
});

/*CATEGORIES*/
//New Categories
$router->map( 'GET', '/public/admin/category/new', function() {
	require $_SERVER['DOCUMENT_ROOT'].PUBLICROOT.'/views/backend/newcategory.php';
});
$router->map( 'POST', '/public/admin/category/new', function() {
	//require __DIR__ . '/process/products/store.php';
	$category = new category();
	$category = $category->create();
	$category ? header('location: '.$category.'/') : header('location: new');
});

//Generel routing for categories
$router->map( 'GET', '/public/admin/categories', function() {
	require $_SERVER['DOCUMENT_ROOT'].PUBLICROOT.'/views/backend/categories.php';
});
$router->map( 'GET', '/public/admin/category/[i:id]/', function($id) {
	$category = new category();
	$p = $category->showCategory($id);
	require __DIR__ . '/views/backend/category.php';
});
$router->map( 'POST', '/public/admin/category/[i:id]/delete', function($id) {
	$category = new category();
	$p = $category->delete($id);
	$p ? header('location: ../../categories') : header('location: category/'. $p);
});
$router->map( 'POST', '/public/admin/category/[i:id]/update', function($id) {
	$category = new category();
	$p = $category->update($id);
	header('location: ../../category/'.$p.'/');
});


// match current request url
$match = $router->match();


// call closure or throw 404 status
if( $match && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] ); 
} else {
	// no route was matched
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}


?>