<?php 
require '../vendor/autoload.php';

//Config variable for route
$router = new AltoRouter();

// require ('../config.php');
// $router->setBasePath('/laravel/mdu/pumpatoy/');

// map homepage
// $router->map( 'GET', '/', function() {
//     require __DIR__ . '../views/test.php';
// });

$router->map('GET', '/test', '../views/test.php', 'test');

$match = $router->match();

// call closure or throw 404 status
if( $match && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] ); 
} else {
	// no route was matched
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}


?>