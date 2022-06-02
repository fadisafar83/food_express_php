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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
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

<?php 
  if ($_SESSION['id_gestionaire_restaurant']) {
    echo '<a href="../pages_gestionaire/cuisine_3.php">Cuisines</a> ';

  }elseif($_SESSION['type'] === 'admin') {
    echo '<a href="../pages_admin/cuisine_2.php">Cuisines</a> ';

  }elseif($_SESSION['type'] === 'client'){
    echo '<a href="../pages_client/cuisine_1.php">Cuisines</a>' ;
}else{
  echo 'Error' ;
};
  ?>
  <!-- <a href="index_1.php">Cuisines</a> -->
  <a href="dolce_vita.php">Dolce Vita</a>


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
    <h2> Rialto </h2>
    <br>
    <h3 id= "Salades">Salades</h3>
    <hr>
    <p><strong>Salade Ceasar</strong> 13,00 €

    <?php $s= "salade ceasar";
  $sql = "SELECT * FROM express_menu WHERE nom_produit= '$s' ";
  
  $result = $conn->query($sql); 
 
  if($result->num_rows > 0)

  {
  foreach ($result as $res):?>
  		
    <td><input type='hidden'  value='<?= $res['id_menu'] ?>' name='id_menu' /></td>

    <?php endforeach; ?>

  	<td><a href='../pages_client/fairecommander2.php?id=<?=$res['id_menu']?>&id_resto=<?=$_GET['id_resto']?>'>Choisir ce produit</a></td>
    <?php } ?>




    <p> Poulet pané, croûton de pain, copeaux de parmesan, oeuf dur, pommes de terres sautées, sauce ceasar </p>
    <br>
    <p><strong>Salade de Saumon fumé</strong> 13,20 €  
    <p>Fines tranches de saumon, huile d'olive, câpres, roquette, copeaux de parmesan, citron </p>
    <?php $ss= "salade de saumon";
  $sql = "SELECT * FROM express_menu WHERE nom_produit= '$ss' ";
  
  $result = $conn->query($sql); 
 
  if($result->num_rows > 0)

  {
  foreach ($result as $res):?>
  		
    <td><input type='hidden'  value='<?= $res['id_menu'] ?>' name='id_menu' /></td>

    <?php endforeach; ?>

  	<td><a href='../pages_client/fairecommander.php?id=<?=$res['id_menu']?>&id_resto=<?=$_GET['id_resto']?>'>Choisir ce produit</a></td>
    <?php } ?>
    <br>
    <h3 id="Pizzas">Pizzas</h3>
    <hr>
    <p><strong>Pizza campione</strong> 11,50 € 
    <p>  Tomates, viande hachée, Mozzarella, œuf, champignons et origan. 31 cm. </p>
    <?php $pc= "pizza campione";
  $sql = "SELECT * FROM express_menu WHERE nom_produit= '$pc' ";
  
  $result = $conn->query($sql); 
 
  if($result->num_rows > 0)

  {
  foreach ($result as $res):?>
  		
    <td><input type='hidden'  value='<?= $res['id_menu'] ?>' name='id_menu' /></td>

    <?php endforeach; ?>

  	<td><a href='../pages_client/fairecommander.php?id=<?=$res['id_menu']?>&id_resto=<?=$_GET['id_resto']?>'>Choisir ce produit</a></td>
    <?php } ?>
    
    <br>
    <p><strong>Pizza tono</strong> 12,00 € 
    <p> Tomates, Mozzarella, thon, olives et origan. 31 cm.</p>

    <?php $pt= "pizza tono";
  $sql = "SELECT * FROM express_menu WHERE nom_produit= '$pt' ";
  
  $result = $conn->query($sql); 
 
  if($result->num_rows > 0)

  {
  foreach ($result as $res):?>
  		
    <td><input type='hidden'  value='<?= $res['id_menu'] ?>' name='id_menu' /></td>

    <?php endforeach; ?>

  	<td><a href='../pages_client/fairecommander.php?id=<?=$res['id_menu']?>&id_resto=<?=$_GET['id_resto']?>'>Choisir ce produit</a></td>
    <?php } ?>
    <br>
    <p><strong>Pizza salmon</strong> 10,00 € 
    <p> Tomates, Mozzarella, saumon fumé, crème fraîche et aneth. 31 cm</p>

    <?php $ps= "pizza salmon";
  $sql = "SELECT * FROM express_menu WHERE nom_produit= '$ps' ";
  
  $result = $conn->query($sql); 
 
  if($result->num_rows > 0)

  {
  foreach ($result as $res):?>
  		
    <td><input type='hidden'  value='<?= $res['id_menu'] ?>' name='id_menu' /></td>

    <?php endforeach; ?>

  	<td><a href='../pages_client/fairecommander.php?id=<?=$res['id_menu']?>&id_resto=<?=$_GET['id_resto']?>'>Choisir ce produit</a></td>
    <?php } ?>
    <br>
    <p><strong>Pizza Parma</strong> 14,50 €
    <p> Tomates, Mozzarella, jambon de Parme et origan. 31 cm.</p>
    <br>

    <?php $pp= "pizza parma";
  $sql = "SELECT * FROM express_menu WHERE nom_produit= '$pp' ";
  
  $result = $conn->query($sql); 
 
  if($result->num_rows > 0)

  {
  foreach ($result as $res):?>
  		
    <td><input type='hidden'  value='<?= $res['id_menu'] ?>' name='id_menu' /></td>

    <?php endforeach; ?>

  	<td><a href='../pages_client/fairecommander.php?id=<?=$res['id_menu']?>&id_resto=<?=$_GET['id_resto']?>'>Choisir ce produit</a></td>
    <?php } ?>
    <br>
    <h3 id="Pâtes">Pâtes</h3>
    <hr>
    <p><strong>Pâtes ail huile  d'olive</strong> 11,50 € </p>

    <?php $pap= "pâtes ail";
  $sql = "SELECT * FROM express_menu WHERE nom_produit= '$pap' ";
  
  $result = $conn->query($sql); 
 
  if($result->num_rows > 0)

  {
  foreach ($result as $res):?>
  		
    <td><input type='hidden'  value='<?= $res['id_menu'] ?>' name='id_menu' /></td>

    <?php endforeach; ?>

  	<td><a href='../pages_client/fairecommander.php?id=<?=$res['id_menu']?>&id_resto=<?=$_GET['id_resto']?>'>Choisir ce produit</a></td>
    <?php } ?>
    <br>
    <p><strong>Pâtes aux noix de Saint Jacques</strong> 12,50 € </p>
    <p>Pâtes au choix, sauce tomate, noix de Saint Jacques ail et huile d'olive</p>

    <?php $pn= "pâtes noix";
  $sql = "SELECT * FROM express_menu WHERE nom_produit= '$pn' ";
  
  $result = $conn->query($sql); 
 
  if($result->num_rows > 0)

  {
  foreach ($result as $res):?>
  		
    <td><input type='hidden'  value='<?= $res['id_menu'] ?>' name='id_menu' /></td>

    <?php endforeach; ?>

  	<td><a href='../pages_client/fairecommander.php?id=<?=$res['id_menu']?>&id_resto=<?=$_GET['id_resto']?>'>Choisir ce produit</a></td>
    <?php } ?>
    <br>
    <p><strong>Pâtes Quatre saisons</strong> 13,50 € </p>
    <p>Pâtes au choix, tomates fraiches, poivrons, artichaud, petit pois, champignons, crème</p>

    <?php $pq= "pâtes qsaisons";
  $sql = "SELECT * FROM express_menu WHERE nom_produit= '$pq' ";
  
  $result = $conn->query($sql); 
 
  if($result->num_rows > 0)

  {
  foreach ($result as $res):?>
  		
    <td><input type='hidden'  value='<?= $res['id_menu'] ?>' name='id_menu' /></td>

    <?php endforeach; ?>

  	<td><a href='../pages_client/fairecommander.php?id=<?=$res['id_menu']?>&id_resto=<?=$_GET['id_resto']?>'>Choisir ce produit</a></td>
    <?php } ?>
    <br>
    <p><strong>Ravioli aux cinq fromages</strong> 11,50 € </p>
    <p>Ravioli pur boeuf, gorgonzola, bitto, padano, parmesan, fontina </p>


    <?php $r= "ravioli";
  $sql = "SELECT * FROM express_menu WHERE nom_produit= '$r' ";
  
  $result = $conn->query($sql); 
 
  if($result->num_rows > 0)

  {
  foreach ($result as $res):?>
  		
    <td><input type='hidden'  value='<?= $res['id_menu'] ?>' name='id_menu' /></td>

    <?php endforeach; ?>

  	<td><a href='../pages_client/fairecommander.php?id=<?=$res['id_menu']?>&id_resto=<?=$_GET['id_resto']?>'>Choisir ce produit</a></td>
    <?php } ?>
    <br>
    <br>
    <h3 id="VinsItaliens">Vins Italiens</h3>
    <hr>
    <p><strong>Bardolino DOC rouge</strong> 15,00 € </p>
    <?php $vp= "vin bardoline";
  $sql = "SELECT * FROM express_menu WHERE nom_produit= '$vp' ";
  
  $result = $conn->query($sql); 
 
  if($result->num_rows > 0)

  {
  foreach ($result as $res):?>
  		
    <td><input type='hidden'  value='<?= $res['id_menu'] ?>' name='id_menu' /></td>

    <?php endforeach; ?>

  	<td><a href='../pages_client/fairecommander.php?id=<?=$res['id_menu']?>&id_resto=<?=$_GET['id_resto']?>'>Choisir ce produit</a></td>
    <?php } ?>
    

    <h3 id = "Desserts">Desserts</h3>
    <hr>
    <p><strong>Glace aux fruits rouges</strong> 4,00 €</p>
    <p>250 ml, morceaux de fraises, framboises et myrtilles</p>
    <?php $gf= "glace fruit";
  $sql = "SELECT * FROM express_menu WHERE nom_produit= '$gf' ";
  
  $result = $conn->query($sql); 
 
  if($result->num_rows > 0)

  {
  foreach ($result as $res):?>
  		
    <td><input type='hidden'  value='<?= $res['id_menu'] ?>' name='id_menu' /></td>

    <?php endforeach; ?>

  	<td><a href='../pages_client/fairecommander2.php?id=<?=$res['id_menu']?>&id_resto=<?=$_GET['id_resto']?>'>Choisir ce produit</a></td>
    <?php } ?>
    
     


  </div>
  <div class="side2 italy2">
   
  </div>
</div>


 <!-- Div footer%-->
 <?php

  
  require_once '../footer.php';
  
  
  ?>

<script src="../js/script.js"></script>
</body>
</html>



