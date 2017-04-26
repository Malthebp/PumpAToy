<?php 
session_start();
require('../config.php');
define('PUBLICROOT', '/laravel/mdu/pumpatoy/public/');

// include ('../controllers/ProductController.php');

require('../app/product.php');
require('../app/user.php');

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


$router->map( 'GET', '/public/lol', function() {
	require __DIR__ . '/views/front-end/single-page.php';
});


/*******Routing for admin*******/
$router->map( 'GET', '/public/admin', function() {
	require __DIR__ . '/views/backend/index.php';
});

$router->map( 'GET', '/public/admin/products', function() {
	require $_SERVER['DOCUMENT_ROOT'].PUBLICROOT.'/views/backend/products.php';
});

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

//Product
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