<?php 
     $servername = "localhost";
     $username = "bukanspot";
     $password = "W";
     $dbname = "mikroskop";

     try {
          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "SELECT uid, content, date FROM content ORDER BY date DESC";
          foreach ($conn->query($sql) as $row) { ?>
            <div class="card mb-3">
                 <div class="card-header">
                      <?php echo $_SESSION['username'] ?>
                    </div>
                    <div class="card-body">
                         <h5 class="card-title">
                              <?php echo $row['date'] ?>
                         </h5>
                         <p>
                              <?php echo $row['id'] . $row['content']; ?>
                         </p>
                 </div>
            </div>
          <?php }
        } catch(PDOException $e) {
          echo $sql . "<br>" . $e->getMessage();
        }
        
        $conn = null;
?>

