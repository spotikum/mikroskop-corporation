<!doctype html>
<html lang="en">
     <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Mikroskop</title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
          <?php session_start(); if(empty($_SESSION['uid'])){ $_SESSION['root'] = $_SERVER['REQUEST_URI']; header("LOCATION: auth/login.php");}?>
     </head>
     <body>
          <?php require 'layout/navbar.php' ?>
          <div class="container my-5 col-md-6">
               <form class="d-flex" action="content/post.php" class="needs-validation" novalidate="" autocomplete="off">
                    <input class="form-control me-2" type="text" placeholder="Send a post" aria-label="Search" id="content" name="content">
                    <button class="btn btn-outline-success" type="submit">Send</button>
               </form>
          </div>
          <div class="container col-md-8">
               <?php require 'content/content.php' ?>
          </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
     </body>
</html>