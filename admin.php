<?php

session_start();


if (!isset($_SESSION['success'])) {
	header('location: index.php');
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Pannel</title>
</head>
<body>
	

<h1>Welcome to Admin Pannel</h1>

<a href="logout.php">Log Out</a>

</body>
</html>