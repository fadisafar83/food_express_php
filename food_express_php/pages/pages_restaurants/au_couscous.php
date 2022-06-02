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
    echo '<a href="../pages_client/cuisine_1.php">Cuisines</a>' ;
}else{
  echo 'Error' ;
};
  ?>
  <!-- <a href="index_1.php">Cuisines</a> -->
  <a href="diwan_beirut.php">Diwan Beirut</a>


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
    <h2>Au Couscous<h2>
    <br>
    <h3 id= "Couscous">Couscous</h3>
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
    <p><strong>Oeuf mayonnaise</strong> 3,50 € &nbsp&nbsp<button>Commander</button></p>
    <br>
    <p><strong>Tomate mozzarella</strong> 4,50 € &nbsp&nbsp<button>Commander</button></p>
    <br>
    <p><strong>Thon mayonnaise</strong> 3.50 €  &nbsp&nbsp<button>Commander</button></p>
    <br>
    <p><strong>Salade landaise</strong> 5.0 €  &nbsp&nbsp<button>Commander</button></p>
    <br>
    <br>
    <h3 id="PlatPrincipal">Plat Principal</h3>
    <hr>
    <p><strong>Saldae césar</strong> 12,50 € &nbsp&nbsp<button>Commander</button></p>
    <p>Poulet, parmesan, oeuf dur, sauce césar</p>
    <br>
    <p><strong>Poulet rôti</strong> 12,50 € &nbsp&nbsp<button>Commander</button></p>
    <p>Poulet fermier rôti, purée maison</p>
    <br>
    <br>
    <h3 id="Boissons">Boissons</h3>
    <hr>
    <p><strong>Coca-Cola</strong> 2,00 € &nbsp&nbsp<button>Commander</button></p>
    <p>33cl</p>
    <br>
    <p><strong>Orangina</strong> 2,00 € &nbsp&nbsp<button>Commander</button></p>
    <p>33cl</p>
    <br>
    <strong>Perrier</strong> 2,00 € &nbsp&nbsp<button>Commander</button></p>
    <p>33cl</p>
    <br>
    <strong>Oasis</strong> 2,00 € &nbsp&nbsp<button>Commander</button></p>
    <p>33cl</p>
    <br>
    <strong>Tropico</strong> 2,00 € &nbsp&nbsp<button>Commander</button></p>
    <p>33cl</p>
    <br>
    <br>
    <h3 id = "Desserts">Desserts</h3>
    <hr>
    <p><strong>Crème brulée</strong> 4,50 € &nbsp&nbsp<button>Commander</button></p>
    <br>
    <p><strong>Cheesecake</strong> 5,00 € &nbsp&nbsp<button>Commander</button></p>
    <br>
    <p><strong>Panna cotta</strong> 4,50 € &nbsp&nbsp<button>Commander</button></p>

  </div>
  <div class="side2 orient2">
  
  </div>
</div>


 <!-- Div footer%-->
 <footer class="footer">
  <p><strong>&copy;2021 - Saint-Denis Food-Express</strong></p>
  <p><strong>12 rue de marché des fleurs - 93200 Saint-Denis - France</strong></p>
  <div class="footerLink">
      <ul>
            <li>
                <a href="../pages_general/apropos.php">Apropos</a>
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



