<?php
	session_start();
	
	$uid = $_SESSION['uid'];
	$content = $_GET['content'];

	// Connect to the database
	$db = new PDO('sqlite:../database.sqlite');

	try {
		$db->exec("insert into posts(uid, content) values($uid,'$content')");
	} catch (PDOException $e) {
		echo $e->getMessage();
	}

     header("Location: ../index.php");
?>
