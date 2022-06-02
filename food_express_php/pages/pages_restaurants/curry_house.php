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
<link rel="stylesheet" href="../css/style.css">

</head>
<body>
<!-- Div Header-->
<header>
  <div class="header">
   <h1 style="font-size: 40px;"><span class="green">Restaurants&nbsp&nbsp</span><span class="red">Indiens</span></h1>
 </div>
 </header>

<!-- Div navbar-->


<div class="nava">

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
  <a href="le_kashmir.php">Le Kashmir</a>


</div>
 <!-- Div 100%, div principale qui se decoupe en trois parties, side, main, side2-->
<div class="row">
   <!-- Div 20%-->
  <div class="side india1">
    <div class="Menus">
      <h2>Nos Menus</h2>
      <a href="#MenusCurryHouse">Menus Curry House</a>
      <a href="#Riz">Riz</a>
      <a href="#MenusduMidi">Menus du Midi</a>
      <a href="#MenuSandwitch">Menus Sandwitch</a>
      <a href="#Desserts">Desserts</a>
      
    </div>    
  </div>
   <!-- Div 60%-->
  <div class="main">
    <h2>Curry House<h2>
    <br>
    <h3 id= "MenusCurryHouse">Menus Curry House</h3>
    <hr>
    <p><strong>Menu Poulet tandori</strong> 14,00 € &nbsp&nbsp<button>Commander</button></p>
    <p> Entrée, cuisse de poulet mariné avec épices indiennes et grillées au four tandoor, dessert au choix </p>
    <br>
    <p><strong>Menu Samossa Légumes</strong> 12,00 € &nbsp&nbsp<button>Commander</button></p>
    <p> Entrée, beignets de forme triangulaire, pâte au blé avec une farce de légumes, dessert au choix <p>
    <br>
    <br>
    <h3 id="Riz">Riz</h3>
    <hr>
    <p><strong>Riz Pulao</strong> 3,50 € &nbsp&nbsp<button>Commander</button></p>
    <p>Riz au petits pois.</p>
    <br>
    <p><strong>Fried Rice</strong> 4,50 € &nbsp&nbsp<button>Commander</button></p>
    <p>Riz basmati avec petits pois, œufs, oignons et coriandres</p>
    <br>
    <p><strong>Riz Oignon</strong> 3.50 € &nbsp&nbsp<button>Commander</button></p>
    <p>Riz basmati aux oignons</p>
    <br>
    <br>
    <h3 id="MenusduMidi">Menus du Midi</h3>
    <hr>
    <p><strong>Menu Tikka</strong> 12,50 € &nbsp&nbsp<button>Commander</button></p>
    <p>Entrée, poulet Tikka, dessert et boisson au choix, servi uniquement le midi</p>
    <br>
    <p><strong>Menu Pakora</strong> 12,50 € &nbsp&nbsp<button>Commander</button></p>
    <p>Entrée, Pakora (Beignets de pommes de terre, oignons et aubergines), dessert et boisson au choix, servi uniquement le midi</p>
    <br>
    <br>
    <h3 id="#MenuSandwitch">Menu Sandwitch</h3>
    <hr>
    <p><strong>Tikka Sandwitch</strong> 7,90 € &nbsp&nbsp<button>Commander</button></p>
    <p>Poulet Tikka, salade, sauce tamarin avec nan fromage et frites, boisson au choix</p>
    <br>
    <p><strong>Kebab Sandwich</strong> 13,00 € &nbsp&nbsp<button>Commander</button></p>
    <p>Sheekh kebab, salade, sauce tamarin avec nan fromage et frites, boisson au choix</p>
    <br>
    <br>
    <h3 id = "Desserts">Desserts</h3>
    <hr>
    <p><strong>Gulab Jamun</strong> 4,50 € &nbsp&nbsp<button>Commander</button></p>
    <p>Poudre de lait, noix de coco et sirop de sucre</p>
    <br>
    <p><strong>Kheer</strong> 3,00 € &nbsp&nbsp<button>Commander</button></p>
    <p>Riz au lait</p>
    <br>
    <p><strong>Halwa</strong> 3,50 € &nbsp&nbsp<button>Commander</button></p>
    <p>Gâteau de semoule et noix de coco</p>  
     


  </div>
  <div class="side2 india2">
 
  </div>
</div>


 <!-- Div footer%-->
 <?php

  
  require_once '../footer.php';
  
  
  ?>

<script src="../js/script.js"></script>
</body>
</html>



