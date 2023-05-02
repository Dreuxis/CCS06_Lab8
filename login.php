<?php

require "config.php";

// If the session variable is already set, automatically redirect the user to index page
if (isset($_SESSION['is_logged_in'])) {
	if ($_SESSION['is_logged_in']) {
		header('Location: index.php');
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="design.css">
</head>
<style>
body {
	background-image: url('https://images7.alphacoders.com/122/1229139.jpg');
	background-repeat: no-repeat;
	background-size: 100% 250%;
}
</style>
<body>
<div class="main">
	<div class="login">
	<h1>Login</h1>

	<form action="attempt-login.php" method="POST">
		<div>
			<label>Email Address</label><br>
			<input type="email" name="email" placeholder="email@address.com" />	
		</div>
		<div>
			<label>Password</label><br>
			<input type="password" name="password" />	
		</div>
		<div>
			<button>
				Login
			</button>	
		</div>
	</form>
	<button>
		<a href="register.php">Register</a>
	</button>
	</div>
</div>
</div>
</body>
</html>