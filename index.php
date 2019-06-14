<?php

session_start();

if (isset($_SESSION['success'])) {
	header('location: admin.php');
}

if(isset($_POST['submit'])){

	define('FIRSTNAME', 'Selim');
	define('LASTNAME', 'Uddin');
	define('EMAIL', 'selimctg35@gmail.com');
	define('PASSWORD', '123');


	$firstname = $_POST['first_name'];
	$lastname = $_POST['last_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	if($firstname == FIRSTNAME && $lastname == LASTNAME && $email == EMAIL && $password == PASSWORD){

		$_SESSION['success'] = '';
		
		header('location: admin.php');
	
	}else{
		$fail = "Your Log in deatails is not valid";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>COOKIE</title>
</head>
<body>
	
	<form action=" " method="POST">

		<input type="text" name= "first_name" placeholder="First Name" required> <br>
		<input type="text" name= "last_name" placeholder="Last Name" required> <br>
		<input type="email" name= "email" placeholder="Email" required> <br>
		<input type="password" name= "password" placeholder="Password" required> <br>
		

		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
		if (isset($fail)) {
			echo "<h2> $fail </h2>";
		}

	?>

</body>
</html>



