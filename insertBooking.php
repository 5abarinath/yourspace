<?php
	require_once('dbconfig.php');
	$planType = $_POST["planType"];
	$details = $_POST["details"];
	$date = $_POST["date"];
	$user_id = $_COOKIE["id"];
	if($planType == 4) {
		$room = $_POST["roomType"];
		$comp = $_POST["comp_name"];
		$total_people = $_POST["tot_people"];

		$sql = "INSERT INTO bookings(uid, datestamp, total_people, details) VALUES(:uid, :datestamp, :tot_people, :details)";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':uid', $user_id);
		$stmt->bindParam(':datestamp', $date);
		$stmt->bindParam(':tot_people', $total_people);
		$stmt->bindParam(':details', $details);
	    $stmt->execute();
	}
	else {
		$sql = "INSERT INTO bookings(uid, datestamp, details) VALUES(:uid, :datestamp, :details)";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':uid', $user_id);
		$stmt->bindParam(':datestamp', $date);
		$stmt->bindParam(':details', $details);
	    $stmt->execute();
	}
?>