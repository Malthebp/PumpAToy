<?php 
require('../config.php');

// include ('../controllers/ProductController.php');

$test = "Hello world";
// map homepage
$router->map( 'GET', '/', function() {
	require __DIR__ . '/views/front-end/index.php';
});


/*******Routing for admin*******/
$router->map( 'GET', '/products', function() {
	require __DIR__ . '/views/backend/index.php';
});

//New Products
$router->map( 'GET', '/newproduct', function() {
	
	require __DIR__ . '/views/backend/newproduct.php';
});
$router->map( 'POST', '/newproduct', function() {
	require __DIR__ . '/process/products/store.php';
});

//Product
$router->map( 'GET', '/product/[i:id]', function() {
	require __DIR__ . '/views/backend/newproduct.php';
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