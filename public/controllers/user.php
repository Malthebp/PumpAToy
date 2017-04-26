<?php
require '../vendor/autoload.php';
$dbh = new PDO("mysql:host=mysql32.unoeuro.com;dbname=peterrytter_com_db2", "peterrytte_com", "Rytter8260");

$config = new PHPAuth\Config($dbh);
$auth   = new PHPAuth\Auth($dbh, $config);

$email = $_POST['email'];
$pass = $_POST['pass'];

var_dump($auth->login($email, $pass));

$login = $auth->login($email, $pass);

if(!$login['error']){
	$_SESSION["hash"] = $login['hash'];
	header('Location: admin');
} else {
	return $error;
}

?>