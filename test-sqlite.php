<?php
// Connect to SQLite database
$db = new PDO('sqlite:database.db');

// Prepare SELECT statement
$sql = "SELECT * FROM user WHERE username = 'spot' AND password = 'W'";
$get_count = $db->query($sql);
$get_uid = $db->prepare($sql);

$get_uid->execute();

// Fetch all rows as an associative array
$rows = $get_count->fetchAll(PDO::FETCH_ASSOC);
$row = $get_uid->fetch(PDO::FETCH_ASSOC);

// Get number of rows
$num_rows = count($rows);
$data = $row['username'];

echo "Number of rows: " . $data . $num_rows;
?>
