<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["email"])){
		header("Location: ../page1.php");
		exit(); 
	}
  
  require_once '../connexion/connexion.php';
  // require_once 'clientheader.php';
  
  ?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Menus Dolce Vita</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="../../css/style.css">

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


 
  <!-- <a href="page1.php">Accueil</a> -->
  <?php 
  if ($_SESSION['id_gestionaire_restaurant']) {
    echo '<a href="../pages_gestionaire/cuisine_3.php">Cuisines</a> ';

  } elseif($_SESSION['type'] === 'admin') {
    echo '<a href="../pages_admin/cuisine_2.php">Cuisines</a> ';

  }elseif($_SESSION['type'] === 'client'){
    echo '<a href="../pages_client/cuisine_1.php">Cuisines</a>' ;
}else{
  echo 'Error' ;
};
  ?>

  <!-- <a href="index_1.php">Cuisines</a> -->
  <a href="rialto.php">Rialto</a>


</div>

 <!-- Div 100%, div principale qui se decoupe en trois parties, side, main, side2-->
<div class="row">
   <!-- Div 20%-->
  <div class="side italy1">
    <div class="Menus">
      <h2>Nos Menus</h2>
      <a href="#Salades">Salades</a>
      <a href="#Pizzas">Pizzas</a>
      <a href="#Pâtes">Pâtes</a>
      <a href="#VinsItaliens">Vins Italiens</a>
      <a href="#Desserts">Desserts</a>
      
    </div>    
  </div>
   <!-- Div 60%-->
  <div class="main">
    <h2> La Dolce Vita </h2>
    <br>
    <h3 id= "Salades">Salades</h3>
    <hr>

    <div class="saladeceasar">
      <p><strong>Salade Ceasar</strong> 13,00 € &nbsp&nbsp</p>
    <form>
      <input type="number" name="number"  min="0" id="saladeceasar_input">
    </form>
    <button id="commanderceasar">Commander</button>
    </div>
    
    <p> Poulet pané, croûton de pain, copeaux de parmesan, oeuf dur, pommes de terres sautées, sauce ceasar </p>
    <br>
    <div class="saumonfume">
      <p><strong>Salade de Saumon fumé</strong> 13,20 €  &nbsp&nbsp</p>
    <form>
      <input type="number" name="number" min="0" id="saumonfume_input">
    </form>
    <button id="commandersaumon">Commander</button>
    </div>
    <p>Fines tranches de saumon, huile d'olive, câpres, roquette, copeaux de parmesan, citron </p>
    <br>

    <div class="buttons_panier" style="display:flex; justify-content:space-between;">
      <input type="button" name="number" id="valider_salade_input" value="Valider commande salade">
      <input type="button" name="number" id="annuler_salade_input" value="Annuler commande salade"></div>

   



    <h3 id="Pizzas">Pizzas</h3>
    <hr>
    <p><strong>Pizza campione</strong> 11,50 € 
      <form>
        <input type="number" name="number"  min="0" id="pizzacampione_input">
      </form>
      <button id="commanderpizzacampion">Commander</button>
      <div class="buttons_panier" style="display:flex; justify-content:space-between;">
        <input type="button" name="number" id="valider_campione_input" value="Valider commande pizza campione">
        <input type="button" name="number" id="annuler_campione_input" value="Annuler commande pizza campione"></div>
    <p>  Tomates, viande hachée, Mozzarella, œuf, champignons et origan. 31 cm. </p>
    <br>
    <p><strong>Pizza tono</strong> 12,00 € &nbsp&nbsp<button>Commander</button></p>
    <p> Tomates, Mozzarella, thon, olives et origan. 31 cm.</p>
    <br>
    <p><strong>Pizza salmon</strong> 10,00 € &nbsp&nbsp<button>Commander</button></p>
    <p> Tomates, Mozzarella, saumon fumé, crème fraîche et aneth. 31 cm</p>
    <br>
    <p><strong>Pizza Parma</strong> 14,50 € &nbsp&nbsp<button>Commander</button></p>
    <p> Tomates, Mozzarella, jambon de Parme et origan. 31 cm.</p>
    <br>
    <br>
    <h3 id="Pâtes">Pâtes</h3>
    <hr>
    <p><strong>Pâtes ail huile  d'olive</strong> 11,50 € &nbsp&nbsp<button>Commander</button></p>
    <p>Pâtes au choix</p>
    <br>
    <p><strong>Pâtes aux noix de Saint Jacques</strong> 12,50 € &nbsp&nbsp<button>Commander</button></p>
    <p>Pâtes au choix, sauce tomate, noix de Saint Jacques ail et huile d'olive</p>
    <br>
    <p><strong>Pâtes Quatre saisons</strong> 13,50 € &nbsp&nbsp<button>Commander</button></p>
    <p>Pâtes au choix, tomates fraiches, poivrons, artichaud, petit pois, champignons, crème</p>
    <br>
    <p><strong>Ravioli aux cinq fromages</strong> 11,50 € &nbsp&nbsp<button>Commander</button></p>
    <p>Ravioli pur boeuf, gorgonzola, bitto, padano, parmesan, fontina </p>
    <br>
    <br>
    <h3 id="VinsItaliens">Vins Italiens</h3>
    <hr>
    <p><strong>Bardolino DOC rouge</strong> 15,00 € &nbsp&nbsp<button>Commander</button></p>
    <p>Taille au choix </p>
    <br>
    <p><strong> Toscana IGT rouge</strong> 16,00 € &nbsp&nbsp<button>Commander</button></p>
    <p>Taille au choix </p>
    <br>
    <p><strong>Nero d'Avola IGT rouge</strong> 16,50 € &nbsp&nbsp<button>Commander</button></p>
    <p>Vin siciliano, taille au choix</p>
    <br>
    <br>
    <h3 id = "Desserts">Desserts</h3>
    <hr>
    <p><strong>Glace aux fruits rouges</strong> 4,00 € &nbsp&nbsp<button>Commander</button></p>
    <p>250 ml, morceaux de fraises, framboises et myrtilles</p>
    <br>
    <p><strong>Galce au chocolat</strong> 3.50 € &nbsp&nbsp<button>Commander</button></p>
    <p>250 ml, éclats de chocolat, noisettes</p>
    <br>
    <p><strong>Tiramisiu</strong> 3,00 € &nbsp&nbsp<button>Commander</button></p>
    <p>Crème  de mascarpone, double couche de biscuits imbibés de café, éclats de chocolat</p>  
     


  </div>
  <div class="side2 italy2">

    <p>Votre panier</p>

    <p id="sous-total-ceasar" class="delete"></p>
    <p id="sous-total-saumon" class="delete"></p>
    <p id="sous-total-salade" class="delete"></p>

<hr>

<p id="sous-total-campione" class="delete_campione"></p>


    <form>
      <!-- <label for="commender">Commander</label> -->
      <input type="button" name="commander" id="commander_total" value="valider votre panier">
    </form>
  
  </div>
</div>


 <!-- Div footer%-->
 <?php

  
  require_once '../footer.php';
  
  
  ?>

<script src="../js/script.js"></script>
</body>
</html>



