<?php
	// "username=" + name + "&email=" + email + "&password=" + pass1 + "&number=" + number;
	require_once('dbconfig.php');
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$number = $_POST["number"];

	$sql = "INSERT INTO users(username, email, password) VALUES(:username, :email, :password)";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':username', $username);
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':password', $password);
    $stmt->execute();
?>