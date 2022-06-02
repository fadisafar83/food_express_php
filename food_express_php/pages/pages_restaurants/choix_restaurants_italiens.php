<!DOCTYPE html>
<html lang="fr">
<head>
<title>Choix Restaurants Italiens</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<!-- Div Header-->
<header>
  <div class="header">
   <h1 style="font-size: 40px;"><span class="green">Restaurants&nbsp&nbsp</span><span class="red">Italiens</span></h1>
 </div>
 </header>

<!-- Div navbar-->
<div class="nava">

  <a href="page1.php">Accueil</a>
  <a href="index_1.php">Cuisines</a>
  <div class="dropdown">
    <button class="dropbtn">Restaurants Italiens 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="dolce_vita.php">Dolce Vita</a>
      <a href="rialto.php">Rialto</a>
    </div>
  </div>
</div>
 <!-- Div 100%, div principale qui se decoupe en trois parties, side, main, side2-->
<div class="row">

   <!-- Div 20%-->
  <div class="side italy1">
      
  </div>

   <!-- Div 60%-->
  <div class="main_1">

    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="img/dolce_vita.jpeg" alt="Avatar" style="width:600px;height:600px;-moz-box-shadow: 10px 10px 5px #ccc;
          -webkit-box-shadow: 10px 10px 5px #ccc;
          box-shadow: 10px 10px 5px #ccc;
          -moz-border-radius:25px;
          -webkit-border-radius:25px;
          border-radius:25px;">
        </div>
        <div class="flip-card-back">
          <a href="https://ladolcevita.metro.rest/?lang=fr" target="_blanck">Restaurant Dolce Vita</a> 
          <p>Vos plats préférés livrés gratuitement chez vous.</p> 
          <p>Commandez par saint-Desnis-Food-Express.fr</p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10487.06031397225!2d2.3427326!3d48.9198679!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x33bfe9d63eded676!2sLa%20Dolce%20Vita!5e0!3m2!1sfr!2sfr!4v1633719985402!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="img/rialto.jpeg" alt="Avatar" style="width:600px;height:600px;-moz-box-shadow: 10px 10px 5px #ccc;
          -webkit-box-shadow: 10px 10px 5px #ccc;
          box-shadow: 10px 10px 5px #ccc;
          -moz-border-radius:25px;
          -webkit-border-radius:25px;
          border-radius:25px;">
        </div>
        <div class="flip-card-back">
          <a href="https://www.tripadvisor.fr/Restaurant_Review-g196589-d7138828-Reviews-Pizzeria_Rialto-Saint_Denis_Seine_Saint_Denis_Ile_de_France.html" target="_blanck">Restaurant Rialto</a> 
          <p>Vos plats préférés livrés gratuitement chez vous.</p> 
          <p>Commandez par Saint-Desnis-Food-Express.fr</p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10483.534006431631!2d2.3512645!3d48.9366607!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3d3c0276ca3cf9a3!2sPizzeria%20Rialto!5e0!3m2!1sfr!2sfr!4v1633720096876!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          
        </div>
      </div>
    </div>
  
  </div>

  <div class="side2 italy2">
    
  </div>

</div>


 <!-- Div footer%-->
 <footer class="footer">
  <p><strong>&copy;2021 - Saint-Denis Food-Express</strong></p>
  <p><strong>12 rue de marché des fleurs - 93200 Saint-Denis - France</strong></p>
  <div class="footerLink">
      <ul>
            <li>
                <a href="apropos.php">Apropos</a>
                <a href="regoiniez-nous.php">Rejoignez-nous</a>
                <a href="contactez-nous.php">Contactez-nous</a>
                <!-- <a href="#about">Facebook</a>
                <a href="#about">Twitter</a> -->
            </li>
      </ul>
  </div> 
</footer>

<script src="js/script.js"></script>
</body>
</html>



