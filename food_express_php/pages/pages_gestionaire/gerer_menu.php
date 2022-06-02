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


/* requete pour selectionner tous les users de la table*/ 
// $query="SELECT * FROM `menu` WHERE id_menu=" .$_SESSION['id_menu'];
// $query="SELECT * FROM `menu` WHERE id_gestionaire_restaurant=" .$_SESSION['id_gestionaire_restaurant'];
$query="SELECT * FROM `express_menu` WHERE id_restaurant= ".$_GET['id'];


$result = $conn->query($query);  /* Execution de la requete avec retour d'un tableau*/ 

/*Verification du nombre de lignes du tableau retourné; Si > O alors presence données sinon  absence*/ 
if($result->num_rows > 0)

{ 
	?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
	<h3>Votre menu</h3>
	<table class="table table-bordered table-striped">
		<tr>
			<th>Catégorie</th>
			<th>Nom de produit</th>
			<th>Prix de produit</th>
			<th width="70px">Supprimer</th>
			<th width="70px">Modifier</th>
		</tr>
	<?php
	/*Parcours du tableau retourné pour affichage des infos ligne par ligne*/ 
	?>
	<?php foreach ($result as $res ): ?>
		<input type='hidden' value='<?= $res['id_menu'] ?>' name='id_menu' />
		<tr>
		<td><?= $res['categorie'] ?></td>
		<td><?= $res['nom_produit'] ?></td>
		<td><?= $res['prix_produit'] ?></td>
		<!-- <td><input type='submit' name='delete' value='Delete' class='btn btn-danger' /></td> -->
		<td><a href='delete_menu.php?id=<?=$res['id_menu']?>'>supprimer</a></td>
		<td><a href='edit_menu.php?id=<?=$res['id_menu']?>&id_resto=<?=$_GET['id']?>'>Editer</a></td>
		</tr>		
	<?php endforeach; ?>
	</table>
<?php 
}
else
{
	echo "<br><br>Pas d'enregistrements";
}
?> 
</div>
</body>
</html>

<?php 

 require_once '../footer.php';

