<?php
	$servername = 'localhost';
    $dbname = 'yourspace';
    $username = 'root';
    $password = ''; 
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// always disable emulated prepared statement when using the MySQL driver
		$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
    catch(PDOException $pe) {
   		$conn = null;
    		die("Connection failed : ".$pe->getMessage());    		
    }
?>
