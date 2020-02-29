<?php
// Create connection
$dsn = 'mysql:host=localhost;dbname=music';
$username = 'root';
$password = '';

try{
		$db = new PDO($dsn, $username, $password);
}	catch (PDOException $e) {
		$error_message = $e->getMessage();
		exit();
}

// Check connection
//if (mysqli_connect_errno()) {
//  echo "Failed to connect to MySQL: " . mysqli_connect_error();
//}
?> 