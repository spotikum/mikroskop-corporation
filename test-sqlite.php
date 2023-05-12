<?php
   // try {
   //    //open the database
   //    $db = new PDO('sqlite:database.db');

   //    //insert some data
   //    $db->exec("select username, content, date from posts inner join user on user.id = posts.uid order by date desc");

   //    echo $db;

   //    //close the database connection
   //    $db = null;
   // } catch(PDOException $e) {
   //    print 'Exception : '.$e->getMessage();
   // }
?>

<?php
// Connect to the database
$db = new PDO('sqlite:database.db');

// Prepare a SELECT statement
$stmt = $db->prepare('select username, content, date from posts inner join user on user.id = posts.uid order by date desc');

// Execute the SELECT statement
$stmt->execute();

// Fetch the results
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
   echo $row['username'] . ' ' . $row['content'] . ' ' . $row['date'] . "\n";
}
?>
