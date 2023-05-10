<?php session_start(); if(empty($_SESSION['username'])){header("LOCATION: auth/login.php");}?>
<!doctype html>
<html lang="en">
     <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Mikroskop</title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     </head>
     <body>
          <nav class="navbar navbar-expand-lg bg-light">
               <div class="container">
                    <div class="container-fluid my-3">
                         <a class="navbar-brand" href="index.php">
                              <img src="https://cdn1.iconfinder.com/data/icons/google-s-logo/150/Google_Icons-06-512.png" alt="Logo" width="40" class="d-inline-block align-text-center">
                              Mikroskop
                         </a>
                         
                    </div>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                         <ul class="navbar-nav">
                              <li class="nav-item dropdown">
                                   <a class="nav-link dropdown-toggle navbar-brand" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <?php echo $_SESSION['username'] ?>
                                   </a>
                                   <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="auth/logout.php">Logout</a></li>
                                   </ul>
                              </li>
                         </ul>
                    </div>
               </div>
          </nav>
          <div class="container mt-5">
               <h1 class="text-center">Hello, world!</h1>
          </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
     </body>
</html>