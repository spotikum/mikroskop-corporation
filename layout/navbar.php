<nav class="navbar navbar-expand-lg bg-light">
     <div class="container">
          <div class="container-fluid my-3">
               <button class="navbar-toggler justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>
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
                              <li><a class="dropdown-item" href="<?php $_SESSION['root'] ?>auth/logout.php">Logout</a></li>
                         </ul>
                    </li>
               </ul>
          </div>
     </div>
</nav>