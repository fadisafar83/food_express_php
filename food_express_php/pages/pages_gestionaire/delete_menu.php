<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["email"])){
		header("Location: ../page1.php");
		exit(); 
	}
  
  require_once '../connexion/connexion.php';
  require_once 'gestionaireheader.php'
  
  ?>

<?php 
/* inclusion des dependances*/ 


// require_once 'header.php'; 
 /*l'entete du site*/ 

// echo "<div class='container'>";



/* Si on appuie sur le bouton delete*/ 
if( isset($_POST['delete'])){
	$sql = "DELETE FROM `express_menu` WHERE id_menu = " . $_POST['id_menu'];
	if($conn->query($sql) === TRUE);
	
	{
		echo "<div class='alert alert-success'>Successfully delete  user</div>";
	
	}
}

/* 1- Récupértion du paramètre transmis */
$id= $_GET['id'];
	 
//echo $id ;
/*2- Selectionner en base les infos à montrer a l'utilisateur*/ 
$sql = "SELECT * FROM express_menu WHERE id_menu={$id}";
$result = $conn->query($sql); /*3- exécution de la requete retour d'un tableau*/ 

if( $result->num_rows < 1 )
{
   header('Location: gerer_restaurant.php'); /* retourner à la page daccueil*/
   exit;
}
$row = $result->fetch_assoc(); /*pas besoin de while une seule ligne retr*/ 

?>
			<form class="box" action="" method="POST">
			<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Supprimer votre menu</h3> 
			<div class="row">
				<input type="hidden" value="<?=$row['id_menu']; ?>" name="id_menu" id="id_menu">
                <label for="categorie" class='form-label'>Catégorie</label>
				<input type="text" id="categorie"  name="categorie"  value="<?= $row['categorie']; ?>" class='box-input col-12'>
				<label for="nom_produit" class='form-label'>Nom produit</label>
				<input type="text" name="nom_produit" id="nom_produit" value="<?= $row['nom_produit']; ?>" class='box-input col-12'>
                <label for="prix_produit" class='form-label'>Prix produit</label>
				<input type="text" name="prix_produit" id="prix_produit" value="<?= $row['prix_produit']; ?>" class='box-input col-12'>
				<input type='submit' name='delete' value='Confirmer la suppression' class='box-button mt-3' />
             </div>
			</form>
	

<?php 

 require_once '../footer.php';


		
		