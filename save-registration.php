<?php

require "config.php";

use App\User;

// Save the user information, and automatically login the user

function alert_function($message) {
	echo "<script type='text/javascript'>alert('$message');</script>";
}

function confirm_function() {
	echo "<script type='text/javascript'>confirm('Go back to register page?')</script>";
}

try {
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$middle_name = $_POST['middle_name'];
	$email = $_POST['email'];
	$password = User::hashPassword($_POST['password']);
	$confirm_pass = $_POST['confirm_password'];
	$birthday = $_POST['birthdate'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$contact_number = $_POST['contact_number'];

	if ($_POST['password'] !== $_POST['confirm_password']) {
		echo "Password and Confirm Password does not match" . "<br>";	
	}
	if ($_POST['password'] == $_POST['confirm_password']) {
		$result = User::register($first_name, $middle_name, $last_name, $email, $password, $birthday, $gender, $address, $contact_number);
		if ($result) {

			// Set the logged in session variable and redirect user to index page
	
			$_SESSION['is_logged_in'] = true;
			$_SESSION['user'] = [
				'id' => $result,
				'fullname' => $first_name . ' ' . $middle_name . ' ' . $last_name,
				'email' => $email,
				'pass' => $password,
				'birthday' => $birthday,
				'gender' => $gender,
				'address' => $address,
				'contact_number' => $contact_number
			];
			header('Location: index.php');
		}
	}

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

echo '<a href="register.php">Register</a>';

?>
<!DOCTYPE html>
<pre>
SESSION DATA
<?php
var_dump($_SESSION);
?>
</pre>

