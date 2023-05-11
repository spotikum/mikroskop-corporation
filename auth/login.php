<?php
	session_start();
	// Menghubungkan ke database
	$host = "localhost";
	$user = "bukanspot";
	$password = "W";
	$database = "mikroskop";
	$koneksi = mysqli_connect($host, $user, $password, $database);

	// Menangkap data yang dikirim dari form login
	$username = $_GET['username'];
	$password = $_GET['password'];

	// Menyeleksi data user dari database
	$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($koneksi, $query);

	// Menghitung jumlah data yang ditemukan
	$count = mysqli_num_rows($result);

	// Mengecek apakah data ditemukan
	if ($count == 1) {
		$_SESSION['username'] = $username;
		header("Location: ../index.php");
	} else {
		header("Location: login.html");
	}
?>
