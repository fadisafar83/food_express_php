<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["email"])){
		header("Location: ../page1.php");
		exit(); 
	}
  
  require_once '../connexion/connexion.php';
  // require_once 'adminheader.php';
  
  ?>
  

  <?php
  // var_dump ($_SESSION['type']);exit;
  		// if ($_SESSION['type'] = 'admin') {require_once 'adminheader.php';}?>



<!DOCTYPE html>
<html lang="fr">
<head>
<title>Choix Restaurants Indiens</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- Div Header-->
<header>
  <div class="header">
   <h1 style="font-size: 40px;"><span class="orange">Restaurants&nbsp&nbsp</span><span class="green">Indiens</span></h1>
 </div>
 </header>


    

<!-- Div navbar-->
<div class="nava">

  <a href="page1.php">Accueil</a>

 
  <a href="cuisine_1.php">Cuisines</a> 
  <a href="Choix_Restaurants_Italiens.html">Cuisine Italienne</a>
  <a href="Choix_Restaurants_Orientaux.html">Cuisine Orientale</a> 
  <div class="dropdown">
    <button class="dropbtn">Restaurants Indiens 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="curry_house.php">Curry House</a>
      <a href="le_kashmir.php">Le Kashmir</a>
    </div>
  </div> 

</div> 
 <!-- Div 100%, div principale qui se decoupe en trois parties, side, main, side2-->
<div class="row">

   <!-- Div 20%-->
  <div class="side india1">
  
  </div>

   <!-- Div 60%-->
  <div class="main_1">

    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="img/curryhouse.jpeg" alt="Avatar" style="width:600px;height:600px;-moz-box-shadow: 10px 10px 5px #ccc;
          -webkit-box-shadow: 10px 10px 5px #ccc;
          box-shadow: 10px 10px 5px #ccc;
          -moz-border-radius:25px;
          -webkit-border-radius:25px;
          border-radius:25px;">
        </div>
        <div class="flip-card-back">
          <a href="https://www.curryhouse.fr/" target="_blanck">Restaurant Curry House</a> 
          <p>Vos plats préférés livrés gratuitement chez vous.</p> 
          <p>Commandez par saint-Desnis-Food-Express.fr</p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10484.4556732047!2d2.3552593!3d48.932272!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x67535b7219b81cff!2sCurry%20House!5e0!3m2!1sfr!2sfr!4v1633719699052!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="img/kashmir.jpeg" alt="Avatar" style="width:600px;height:600px;-moz-box-shadow: 10px 10px 5px #ccc;
          -webkit-box-shadow: 10px 10px 5px #ccc;
          box-shadow: 10px 10px 5px #ccc;
          -moz-border-radius:25px;
          -webkit-border-radius:25px;
          border-radius:25px;">
        </div>
        <div class="flip-card-back">
          <a href="https://www.lekashmir93.fr/" target="_blanck">Restaurant le Kashmir</a> 
          <p>Vos plats préférés livrés gratuitement chez vous.</p> 
          <p>Commandez par Saint-Desnis-Food-Express.fr</p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10487.137936865833!2d2.3433352!3d48.9194982!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x50ebc5f03e5a7a72!2sLe%20Kashmir!5e0!3m2!1sfr!2sfr!4v1633719410889!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>

  </div>

  <div class="side2 india2">
   
  </div>

</div>


 <!-- Div footer%-->
 <footer class="footer">
  <p><strong>&copy;2021 - Saint-Denis Food-Express</strong></p>
  <p><strong>12 rue de marché des fleurs - 93200 Saint-Denis - France</strong></p>
  <div class="footerLink">
      <ul>
            <li>
                <a href="../pages_general/connexion/apropos.php">Apropos</a>
                <a href="../pages_general/regoiniez-nous.php">Rejoignez-nous</a>
                <a href="../pages_general/contactez-nous.php">Contactez-nous</a>
                <!-- <a href="#about">Facebook</a>
                <a href="#about">Twitter</a> -->
            </li>
      </ul>
  </div> 
</footer>

<script src="../js/script.js"></script>
</body>
</html>



