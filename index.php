<?php
     session_start();
     if(empty($_SESSION['username'])){
          header("LOCATION: auth/login.php");
     }else{
          header("LOCATION: home.php");
     }
?>