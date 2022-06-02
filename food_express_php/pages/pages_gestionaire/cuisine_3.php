<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["email"])){
		header("Location: ../page1.php");
		exit(); 
	}
  
  require_once '../connexion/connexion.php';
  require_once 'gestionaireheader.php';
  
  ?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <title>commander</title>
</head> -->
<body>
  <!-- <header>
    <div class="header">
     <h1 style="font-size: 40px;">Saint-Denis &nbspFood-Express</h1>
   </div>
   </header>

<div class="nava">
       <a href="page1.php">Accueil</a>
       <a href="index_1.php">Cuisines</a>
        <a href="regoiniez-nous.php">Rejoignez-nous</a>
        <a href="apropos.php">Apropos</a>
        <a href="contactez-nous.php">Contactez-nous</a>
        <a href="clientuser.php">Gérer votre compte</a>
        
      </div> -->
      <div class="row_2">
        <div class="column_2">
          <!-- <a href="choix_restaurants_italiens.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"> Manger Italien</a> -->
            <div class="card" style="width: 25rem;">
                <img class="card-img-top" src="../../img/raviolii.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Goutter le ravioli, le plat typique de la cuisine italienne. Le ravioli est à la base de viande, de légumes et de fromage et cuits à l'eau bouillante.</p>
                </div>
              </div> <br><br>
              <div class="card" style="width: 25rem;">
                <img class="card-img-top" src="../../img/spaghettis.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Envie d’un petit plat de pâtes qui sent bon l’Italie ? Rien de tel que des spaghettis sauce tomate à l’italienne !</p>
                </div>
              </div><br><br>

              <div class="card" style="width: 25rem;">
                <img class="card-img-top" src="../../img/pizza.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Commandez votre pizza préférée dans le restaurant italien de votre choix. Choisissez et degustez le pizza à l'italienne sans bouger de chez vous.</p>
                </div>
              </div><br><br>

              <div class="card" style="width: 25rem;">
                <img class="card-img-top" src="../../img/boulette.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Qui peut résister à ces polpettes, des boulettes à l’italienne cuites dans une sauce tomatée ? N'attendez-pas Commandez votre plat de boulette et mangez le chaud.</p>
                </div>
              </div>
        </div>
        <div class="column_2">
          <!-- <a href="choix_restaurants_orientaux.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Manger Oriental</a> -->
            <div class="card" style="width: 25rem;">
                <img class="card-img-top" src="../../img/mezzes.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Les mezzés, incontournables de la cuisine libanaise. Les mezzés froids(Taboulé, Hommos). Les mezzés chauds (Kebbé,Feuilles de vigne farcies, Falafel).</p>
                </div>
              </div><br><br>

              <div class="card" style="width: 25rem;">
                <img class="card-img-top" src="../../img/couscous.jpeg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Le couscous se compose de semoule de blé dur préparée à l'huile d'olive et de légumes, d'épices, de viande ou de poisson</p>
                </div>
              </div><br><br>

              <div class="card" style="width: 25rem;">
                <img class="card-img-top" src="../../img/fatayer.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Le fatayer, fata'ir, ou encore fitiir est une pâtisserie salée fourrée avec de la viande, des épinards ou du fromage. Il est issu de la cuisine levantine</p>
                </div>
              </div><br><br>

              <div class="card" style="width: 25rem;" >
                <img class="card-img-top" src="../../img/baclawa.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Envie de sucré, commendez rapidement votre dessert oriental preferé.</p>
                </div>
              </div>
        </div>
        <div class="column_2">
          <!-- <a href="choix_restaurants_indiens.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Manger Indien</a> -->
            <div class="card" style="width: 25rem;">
                <img class="card-img-top" src="../../img/poulet_tandoori.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Dans le monde indien, le tandoori désigne un poulet cuit sur un four de pierre en feu</p>
                </div>
              </div><br><br>


              <div class="card" style="width: 25rem;">
                <img class="card-img-top" src="../../img/gambas_tandoori.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Goutez les crevettes préparées avec la sauce tandoori.</p>
                </div>
              </div><br><br>


              <div class="card" style="width: 25rem;">
                <img class="card-img-top" src="../../img/pakora.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Les pakora sont des beignets de légumes. Il est possible de faire des pakora avec des aubergines, des courgettes, des pommes de terre et d'autres légumes.</p>
                </div>
              </div><br><br>

              <div class="card" style="width: 25rem;">
                <img class="card-img-top" src="../../img/kashmiri_pilau.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Kashmir pilau est une délicieuse variante du riz à base de noix, de fruits secs, de safran et de fruits frais. Pilau est un riz aromatisé avec diverses épices, puis gonflé avec l'ajout de légumes, de noix ou même de viandes.</p>
                </div>
              </div>
        </div>
      </div>
      
      <?php

require_once '../footer.php';

?>


    <script src="../js/script.js"></script>
</body>
</html>