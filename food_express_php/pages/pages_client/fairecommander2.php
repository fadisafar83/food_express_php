
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
<link rel="stylesheet" href="http://localhost/projet_site_food_express/css/style.css">

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
 


</div>

 <!-- Div 100%, div principale qui se decoupe en trois parties, side, main, side2-->
<div class="row">
   <!-- Div 20%-->
 
      
  </div>
   <!-- Div 60%-->
  <div class="main">
    <h2> Votre commande </h2>

    
    <?php
function mult($a,$b) {
  return $a * $b;
};

$gf= "glace fruit";
$sql = "SELECT * FROM express_menu WHERE nom_produit= '$gf' ";
$vp= "vin bardoline";
$sql = "SELECT * FROM express_menu WHERE nom_produit= '$vp' ";
$r= "ravioli";
$sql = "SELECT * FROM express_menu WHERE nom_produit= '$r' ";

$pq= "pâtes qsaisons";
$sql = "SELECT * FROM express_menu WHERE nom_produit= '$pq' ";

$pn= "pâtes noix";
$sql = "SELECT * FROM express_menu WHERE nom_produit= '$pn' ";

$pap= "pâtes ail";
$sql = "SELECT * FROM express_menu WHERE nom_produit= '$pap' ";
$pp= "pizza parma";
$sql = "SELECT * FROM express_menu WHERE nom_produit= '$pp' ";

$ps= "pizza salmon";
$sql = "SELECT * FROM express_menu WHERE nom_produit= '$ps' ";

$pt= "pizza tono";
$sql = "SELECT * FROM express_menu WHERE nom_produit= '$pt' ";

$pc= "pizza campione";
$sql = "SELECT * FROM express_menu WHERE nom_produit= '$pc' ";

$ss= "salade de saumon";
$sql = "SELECT * FROM express_menu WHERE nom_produit= '$ss' ";

$s= "salade cizare";
$sql = "SELECT * FROM express_menu WHERE nom_produit= '$s' ";
  
  $result = $conn->query($sql); 
 
  if($result->num_rows > 0)
  {?>
	<table>
		<tr>
    <th>Nom de produit</th>
      <th>Prix de produit</th>
      <th>Numbre d'unité acheté</th>
		</tr>
	<?php
  foreach ($result as $res):?>
  		
      <form action='' method='POST'>
      <tr>
      <td><input type='hidden'  value='<?= $res['id_menu'] ?>' name='id_menu' /></td>
      <td><input type='hidden'  value='<?= $_GET['id_resto'] ?>' name='id_resto' /></td>
    <td><input type='text' value='<?= $res['nom_produit'] ?>' name='nom_produit' /></td>
    <td><input type='text' value='<?= $res['prix_produit'] ?>' name='prix_produit' /></td>
    <td><input type="number" name="numbre_unite" min="0" id="pizza_input"><td>
    <td><input type="submit" name="commander" value=""/>Commander</td> 
    </tr>		
		</form>
   
    <?php  endforeach; ?>
	</table>
<?php 
}
else
{
	echo "<br><br>Pas d'enregistrements";
}

?>
<?php
 if (isset($_REQUEST['nom_produit'], $_REQUEST['prix_produit'], $_REQUEST['numbre_unite']))
{
	// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
	$id_menu = stripslashes($res['id_menu']);
	$id_menu = mysqli_real_escape_string($conn, $id_menu); 
 
	// récupérer l'email et supprimer les antislashes ajoutés par le formulaire
	$nom_produit = stripslashes($_REQUEST['nom_produit']);
	$nom_produit = mysqli_real_escape_string($conn, $nom_produit);
    	// récupérer l'email et supprimer les antislashes ajoutés par le formulaire
	$prix_produit = stripslashes($_REQUEST['prix_produit']);
	$prix_produit = mysqli_real_escape_string($conn, $prix_produit);
	// récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
	$numbre_unite = stripslashes($_REQUEST['numbre_unite']);
	$numbre_unite = mysqli_real_escape_string($conn, $numbre_unite);
    	// récupérer l'email et supprimer les antislashes ajoutés par le formulaire

      $sql = "INSERT into `express_commande` (id_menu, id_compte, nom_produit, prix_produit, numbre_unite, id_restaurant)
      VALUES ('$id_menu', '{$_SESSION['id_compte']}', '$nom_produit', '$prix_produit', '$numbre_unite', '{$_GET['id_resto']}')"; 
$result = mysqli_query($conn, $sql);

} 
if ($result){
$sql = "SELECT * FROM express_commande ORDER BY id_commande DESC LIMIT 1";
$result = $conn->query($sql); 



if($result->num_rows > 0)
  {?>
	<table>
		<tr>
    <!-- <th>Nom de produit</th>
      <th>Prix de produit</th>
      <th>Numbre d'unité acheté</th>
      <th>Prix total</th> -->
      <!-- <th width="20px">Confirmer</th>
			<th width="20px">Annuler</th> -->
		</tr>
	<?php
  foreach ($result as $res):?>
  		
      <form action='' method='POST'>
      <tr>
    <td><input type='hidden'  value='<?= $res['id_commande'] ?>' name='id_commande' /></td>
    <td><input type='hidden'  value='<?= $_res['id_resturant'] ?>' name='id_resto' /></td>
    <td><input type='hidden'  value='<?= $_res['id_compte'] ?>' name='id_compte' /></td>
    <td><input type='hidden'  value='<?= $_GET['id_menu'] ?>' name='id_menu' /></td>
    <td><input type='text' value='<?= $res['nom_produit'] ?>' name='nom_produit' /></td>
    <td><input type='text' value='<?= $res['prix_produit'] ?>' name='prix_produit' /></td>
    <td><input type="text" value='<?=$res['numbre_unite']?>'name="numbre_unite" min="0" id="pizza_input"><td>
    <td><input type='number' value="<?php echo mult ($res['numbre_unite'],$res['prix_produit'])?>" name='nom_produit' /></td>
    <td><input type="submit" value=" Annuler la commande" name="delete"/></td> 
    <td><input type="submit" value=" Confirmer la commande" name="confirme"/></td> 
    </tr>		
		</form>
   
    <?php  endforeach; ?>
	</table>
<?php 
}
else
{
	echo "<br><br>Pas d'enregistrements";
}
if( isset($_POST['delete'])){
	$sql = "DELETE FROM express_commande ORDER BY id_commande DESC LIMIT 2";
	if($conn->query($sql) === TRUE)
	{
    
		echo "<div class='alert alert-success'>Successfully delete  commande</div>";
	}
}

$t=$res['numbre_unite'] * $res['prix_produit'];
if( isset($_POST['confirme'])){
	$sql = "INSERT INTO  `express_commande_valide` (id_commande, prix_total, id_menu, id_restaurant, id_compte) 
VALUES ('{$res['id_commande']}',$t, '{$res['id_menu']}', '{$res['id_restaurant']}', '{$res['id_compte']}')";
	$result = mysqli_query($conn, $sql);
  
  if($result) 
  
	{
    
		echo "<div class='alert alert-success'>Successfully confirmed commande</div>";
	}
}

}?>

</body>
</html>