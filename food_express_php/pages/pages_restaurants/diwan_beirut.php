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
   <h1 style="font-size: 40px;"><span class="green">Restaurants&nbsp&nbsp</span><span class="red">Orientaux</span></h1>
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
    echo '<a href="c../pages_client/cuisine_1.php">Cuisines</a>' ;
}else{
  echo 'Error' ;
};
  ?>
  <!-- <a href="index_1.php">Cuisines</a> -->
  <a href="au_couscous.php">Au Couscous</a>


</div>

 <!-- Div 100%, div principale qui se decoupe en trois parties, side, main, side2-->
<div class="row">
   <!-- Div 20%-->
  <div class="side orient1">
    <div class="Menus">
      <h2>Nos Menus</h2>
      <a href="#Couscous">Couscous</a>
      <a href="#Entrées">Entrées</a>
      <a href="#PlatPrincipal">Plat principal</a>
      <a href="#Boissons">Boissons</a>
      <a href="#Desserts">Desserts</a>
      
    </div>    
  </div>
   <!-- Div 60%-->
  <div class="main">
    <h2>Diwan Beirut<h2>
    <br>
    <h3 id= "PlatsàComposer">Plats à Composer</h3>
    <hr>
    <p><strong>Couscous Végetarien</strong> 14,00 € &nbsp&nbsp<button>Commander</button></p>
    <p> Couscous aux légumes (tomates, artichaud, aubergines, carottes), boisson et dessert au choix </p>
    <br>
    <p><strong>Couscous merguez</strong> 12,00 € &nbsp&nbsp<button>Commander</button></p>
    <p> Couscous aux merguez, cuisse de poulet, épices, boissons et dessert au choix <p>
    <br>
    <br>
    <h3 id="Entrées">Entrées</h3>
    <hr>
    <p><strong>Taboulé</strong> 5,50 € &nbsp&nbsp<button>Commander</button></p>
    <p> Salade à base de persil finement haché, dés de tomate et bourghoul arrosé de citron et d'huile d'olive </p>
    <br>
    <p><strong>Fatouche</strong> 6,00 € &nbsp&nbsp<button>Commander</button></p>
    <p> Salade de crudité avec du pain grillé parfumé au thym rouge, et mélasse de grenade </p>
    <br>
    <p><strong>Fatayer épinards</strong> 3.50 €  &nbsp&nbsp<button>Commander</button></p>
    <p> Beignets d'épinards assaisonnés de d'oignons et de pignons de pin </p>
    <br>
    <br>
    <h3 id="PlatPrincipal">Plat Principal</h3>
    <hr>
    <p><strong>Assiette Végétarienne</strong> 13,00 € &nbsp&nbsp<button>Commander</button></p>
    <p> Hommos,moutabbal, taboulé, moussaka,crème de betterave, feuille de vigne, falafel, samboussek fromage </p>
    <br>
    <p><strong>Assiette  Diwan</strong> 13,00 € &nbsp&nbsp<button>Commander</button></p>
    <p> Hommos, moutabbal, taboulé, moussaka, samboussek viande et safiha </p>
    <br>
    <p><strong>Taouk</strong> 13,00 € &nbsp&nbsp<button>Commander</button></p>
    <p> Poulet mariné au citron, ail et thym et servi avec salade, moutabal, bourghoul et crème d'ail </p>
    <br>
    <h3 id="Boissons">Boissons</h3>
    <hr>
    <p><strong>Coca-Cola</strong> 2,00 € &nbsp&nbsp<button>Commander</button></p>
    <p>33cl</p>
    <br>
    <p><strong>Orangina</strong> 2,00 € &nbsp&nbsp<button>Commander</button></p>
    <p>33cl</p>
    <br>
    <strong>Citronnade libanaise</strong> 2,00 € &nbsp&nbsp<button>Commander</button></p>
    <p>33cl</p>
    <br>
    <strong>Tropico</strong> 2,00 € &nbsp&nbsp<button>Commander</button></p>
    <p>33cl</p>
    <br>
    <strong>Bouteille d'eau</strong> 1,00 € &nbsp&nbsp<button>Commander</button></p>
    <p> 50cl</p>
    <br>
    <br>
    <h3 id = "Desserts">Desserts</h3>
    <hr>
    <p><strong>Mouhalabieh</strong> 3,50 € &nbsp&nbsp<button>Commander</button></p>
    <p> Flan au lait à la fleur d'orange, pistache et miel </p>
    <br>
    <p><strong>Loukoum</strong> 4,50 € &nbsp&nbsp<button>Commander</button></p>
    <p> 10 pièces au choix : Pistache, rose, bergamotte et noix </p>
    <br>
    <p><strong>Baklawas</strong> 4,50 € &nbsp&nbsp<button>Commander</button></p>
    <p>10 pièces </p>
    <br>

  </div>
  <div class="side2 orient2">
  
  </div>
</div>


 <!-- Div footer%-->
 <?php

  
  require_once '../footer.php';
  
  
  ?>

<script src="../js/script.js"></script>
</body>
</html>



