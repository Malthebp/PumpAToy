<?php 
require('../config.php');
define('PUBLICROOT', '/laravel/mdu/pumpatoy/public/');

// include ('../controllers/ProductController.php');

require('../app/product.php');

	// map homepage
$router->map( 'GET', '/', function() {
	require __DIR__ . '/views/front-end/index.php';
});


/*******Routing for admin*******/
$router->map( 'GET', '/public/admin', function() {
	require __DIR__ . '/views/backend/index.php';
});

$router->map( 'GET', '/public/admin/products', function() {
	$product = new product();
	$product->showAll();
});

//New Products
$router->map( 'GET', '/public/admin/product/new', function() {
	$product = new product();
	$product->newProduct();
});

$router->map( 'POST', '/public/admin/product/new', function() {
	//require __DIR__ . '/process/products/store.php';
	$product = new product();
	$product->create();
});

//Product
// $router->map( 'GET', '/product/[i:id]', function() {
// 	require __DIR__ . '/views/backend/product.php';
// });

$display_item = function($id) {
   global $fpdo;
   $p = $fpdo->from('ptoys_product',$id)->fetch();
   require __DIR__ . '/views/backend/product.php';
};

$router->map('GET','/public/admin/product/[i:id]', $display_item, 'content');







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