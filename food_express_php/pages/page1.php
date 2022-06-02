<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body class="bodypage_1">
<?php
require './connexion/connexion.php'
?>
  <header>
    <div class="header">
     <h1 style="font-size: 40px;">Saint-Denis &nbspFood-Express</h1>
   </div>
   </header>

   <nav class="navbar navbar-light bg-light fixed-top" style="margin-left: 1350px;">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">Offcanvas navbar</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <!-- <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5> -->
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./pages_login/login.php">Vous êtes client</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="./pages_login/login_1.php">vous êtes gestionaire de restaurant</a>
          </li>
        </ul>
        <!-- <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
      </div>
    </div>
  </div>
</nav>

  <div class="row_1">
    <div class="column_1">
    </div>

    <div class="column_1"></div>


    <div class="column_1">
     
        

    </div>
  </div>
  
  <footer class="footer">
    <p><strong>&copy;2021 - Saint-Denis Food-Express</strong></p>
    <p><strong>12 rue de marché des fleurs - 93200 Saint-Denis - France</strong></p>
    <div class="footerLink">
      <ul>
        <li>
          <a href="./pages_general/apropos.php">Apropos</a>
          <a href="./pages_general/regoiniez-nous.php">Rejoignez-nous</a>
          <a href="./pages_general/contactez-nous.php">Contactez-nous</a>
        </li>
      </ul>
    
  </div>
</footer>
  <script src="../js/script.js"></script>
</body>
</html>