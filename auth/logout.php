<?php
     session_start();
     session_destroy();
     $root = $_SESSION['root'];
     header("Location: $root");
?>