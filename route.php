<?php 

require ('config.php');
$router->setBasePath('/laravel/mdu/pumpatoy/');

// map homepage
$router->map( 'GET', '/', function() {
    require __DIR__ . '/views/test.php';
});

?>