<?php
	require_once('dbconfig.php');

	$username = $_POST["username"];
	$password = $_POST["password"];

	$sql = 'SELECT * FROM users WHERE username = :uname';
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':uname', $username);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    if($password == $result['password']) {
    	echo 1;
    }
    else {
    	echo 0;
    } 

?>