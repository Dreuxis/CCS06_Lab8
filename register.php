<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	<link rel="stylesheet" href="design.css">
</head>
<style>
body {
	background-image: url('https://wallpaperaccess.com/full/251898.jpg');
	background-repeat: no-repeat;
	background-size: 100% 120%;
}
</style>
<body>
<div class="main">
	<div class ="register_form">
	<h1>Register a User</h1>

	<form action="save-registration.php" method="POST">
		<div>
			<label>First Name</label><br>
			<input type="text" name="first_name" placeholder="First Name" required/>	
		</div>
		<div>
			<label>Middle Name</label><br>
			<input type="text" name="middle_name" placeholder="Middle Name" />	
		</div>
		<div>
			<label>Last Name</label><br>
			<input type="text" name="last_name" placeholder="Last Name" required/>	
		</div>
		<div>
			<label>Email Address</label><br>
			<input type="email" name="email" placeholder="email@address.com" required/>	
		</div>
		<div>
			<label>Password</label><br>
			<input type="password" name="password" minlength="8" required/>	
		</div>
		<div>
			<label>Confirm Password</label><br>
			<input type="password" name="confirm_password" minlength="8" required/>	
		</div>
		<div>
			<label>Birthdate</label><br>
			<input type="date" name="birthdate" />	
		</div>
		<div>
			<label>Gender</label><br>
			<input type="radio" id="male" name="gender" value="Male"/>
			<label for="male">Male</label><br>
			<input type="radio" id="female" name="gender" value="Female"/>
			<label for="female">Female</label><br>
		</div>
		<div>
			<label>Address</label><br>
			<input type="text" name="address" placeholder="Write your address here"/>	
		</div>
		<div>
			<label>Contact Number</label><br>
			<input type="tel" name="contact_number" />	
		</div>
		<div>
			<button>
				Register User
			</button>	
		</div>
	</form>
	</div>
</div>
</body>
</html>