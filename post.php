<?php
	session_start();
	require 'auth/config.php';

	$content = $_GET['content'];
	$uid = $_SESSION['uid'];

	$query = "insert into content values('$uid', '$content')";
	mysqli_query($koneksi, $query);

     header("Location: index.php");
?>
