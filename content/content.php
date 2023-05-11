<?php 
     require 'auth/config.php';

     $query = "SELECT * FROM content";
	$result = mysqli_query($koneksi, $query);
?>

<div class="card">
     <div class="card-header">
          <?php echo $_SESSION['username'] ?>
     </div>
          <div class="card-body">
          <h5 class="card-title">
               <?php 
                    while ($row = mysqli_fetch_assoc($result)) {
                         echo $row["content"];
                    }
               ?>
          </h5>
     </div>
</div>
