<?php





class userAuth {

	private $fpdo;


	function __construct()
	{
		global $fpdo;
		global $pdo;
		$this->fpdo = $fpdo;
		$this->pdo = $pdo;
	}

	public function login() {

		$config = new PHPAuth\Config($this->pdo);
		$auth   = new PHPAuth\Auth($this->pdo, $config);
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		//$login = $auth->login($email, $pass);

		var_dump($auth->login($email, $pass));

		if(!$login['error']){
			$_SESSION["hash"] = $login['hash'];
			header('Location: admin');
		} else {
			return $error;
		}


	}

}



?>