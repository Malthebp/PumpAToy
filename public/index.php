<?php 
require('../config.php');
define('PUBLICROOT', '/laravel/mdu/pumpatoy/public/');

use Controllers\ProductController;
// include ('../controllers/ProductController.php');

	// map homepage
$router->map( 'GET', '/', function() {
	require __DIR__ . '/views/front-end/index.php';
});


/*******Routing for admin*******/
$router->map( 'GET', '/admin', function() {
	require __DIR__ . '/views/backend/index.php';
});

$router->map( 'GET', '/admin/products', function() {
	require __DIR__ . '/views/backend/products.php';
});

//New Products
$router->map( 'GET', '/admin/product/new', function() {
	require __DIR__ . '/views/backend/newproduct.php';
});

$router->map( 'POST', '/admin/product/new', function() {
	require __DIR__ . '/process/products/store.php';
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

$router->map('GET','/admin/product/[i:id]', $display_item, 'content');







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