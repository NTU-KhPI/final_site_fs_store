<?php

	$named = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];




	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "database_fs";


	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO call_request (first_name, email, message)
	VALUES ('$named', '$email', '$message')";

	if ($conn->query($sql) === TRUE) {
	  echo "sent!";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>