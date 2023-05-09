<?php
     session_start();
     if(empty($_SESSION['username'])){
          header("LOCATION: login.php");
     }else{
          header("LOCATION: home.php");
     }
?>