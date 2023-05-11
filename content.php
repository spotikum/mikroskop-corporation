<?php 
     require 'auth/config.php';

     $query = "SELECT * FROM content";
	$result = mysqli_query($koneksi, $query);

     while ($row = mysqli_fetch_assoc($result)) {
          echo $row["content"];
     }
?>
