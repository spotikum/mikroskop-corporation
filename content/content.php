<?php
// Connect to the database
$db = new PDO('sqlite:database.db');

// Prepare a SELECT statement
$stmt = $db->prepare('select username, content, date from posts inner join user on user.id = posts.uid order by date desc');

// Execute the SELECT statement
$stmt->execute();

// Fetch the results
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) { ?>
     <div class="card mb-3">
          <div class="card-header">
               <?php echo $row['username']; ?>
          </div>
          <div class="card-body">
               <h5 class="card-title">
                    <?php echo $row['content']; ?>
               </h5>
          </div>
          <div class="card-footer">     
               <?php echo $row['date']; ?>
          </div>
     </div>
<?php }
?>

