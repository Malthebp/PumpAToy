<?php
$dbh = new PDO("mysql:host=mysql32.unoeuro.com;dbname=peterrytter_com_db2", "peterrytte_com", "Rytter8260");

$config = new PHPAuth\Config($dbh);
$auth   = new PHPAuth\Auth($dbh, $config);

?>
<?php
	include 'layout.php';	
?>
	<section class="login-page form">
		<h1>PumpAToy</h1>
			<form class="register-form">
				<input type="text" placeholder="name"/>
				<input type="password" placeholder="password"/>
				<input type="text" placeholder="email address"/>
				<button>create</button>
				<p class="message">Already registered? <a href="#">Sign In</a></p>
			</form>
			<form class="login-form" action="user" method="POST">
				<input type="text" name="email" placeholder="email"/>
				<input type="password" name="pass" placeholder="password"/>
				<button type="submit">login</button>
				<p class="message">Not registered? <a href="#">Create an account</a></p>
			</form>
	</section>
	<script>
		$('.message a').click(function(){
			$('form').animate({height: "toggle", opacity: "toggle"}, "slow");
		});
	</script>
</body>
</html>