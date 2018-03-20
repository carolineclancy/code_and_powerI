<?php
	$servername = "localhost";
	$username = "username";
	$password = "password";
	$dbname = "myDB";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	// sql to create table
	$sql = "CREATE TABLE reviews (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	review VARCHAR(30) NOT NULL,
	rating VARCHAR(30) NOT NULL,
	reg_date TIMESTAMP
	)";

	if ($conn->query($sql) === TRUE) {
		echo "Table reviews created successfully";
	} else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>