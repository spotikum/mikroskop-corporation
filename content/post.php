<?php
	session_start();
	// $db = new PDO ('sqlite:../database.db');
	
	$uid = $_SESSION['uid'];
	$content = $_GET['content'];

	// Connect to the database
	$db = new PDO('sqlite:../database.db');

	// Prepare the INSERT statement
	$stmt = $db->prepare('INSERT INTO posts (uid, content) VALUES (?, ?);');

	// Bind the values
	$stmt->bindValue(1, 1);
	$stmt->bindValue(2, 'test');

	// Execute the statement
	$stmt->execute();

     header("Location: ../index.php");
?>
