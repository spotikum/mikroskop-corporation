<?php
	// Start session
	session_start();

	// Connect to SQLite database
	$db = new PDO('sqlite:../database.sqlite');

	// Get data from login form
	$username = $_GET['username'];
	$password = $_GET['password'];

	// Prepare SELECT statement
	$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
	$get_count = $db->query($sql);
	$get_uid = $db->prepare($sql);
	$get_uid->execute();

	// Fetch all rows as an associative array
	$rows = $get_count->fetchAll(PDO::FETCH_ASSOC);
	$row = $get_uid->fetch(PDO::FETCH_ASSOC);

	// Get number of rows
	$num_rows = count($rows);
	$uid = $row['id'];

	// Check data
	if ($num_rows == 1) {
		$_SESSION['uid'] = $uid;
		$_SESSION['username'] = $username;
		header("Location: " . $_SESSION['root']);
	} else {
		header("Location: login.html");
	}
?>
