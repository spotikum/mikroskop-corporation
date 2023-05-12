<?php
// Create a new PDO object
$db = new PDO('sqlite:database.db');

try {
     $db->exec("insert into posts(uid, content) values(1,'hai hai lagi')");
} catch (PDOException $e) {
     echo $e->getMessage();
}

?>