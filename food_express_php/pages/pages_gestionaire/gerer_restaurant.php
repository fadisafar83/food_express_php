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



// echo "<div class='container'>";



/* Si on appuie sur le bouton delete*/ 

// if( isset($_POST['delete'])){
// 	$sql = "DELETE FROM restaurant WHERE id_restaurant=" . $_POST['id_restaurant'];
// 	if($conn->query($sql) === TRUE)
	
// 	{
		
// 		echo "<div class='alert alert-success'>Successfully delete  user</div>";
// 	}
// }

/* requete pour selectionner tous les users de la table*/ 
$query="SELECT * FROM express_restaurant WHERE id_gestionaire_restaurant=" .$_SESSION['id_gestionaire_restaurant'];

$result = $conn->query($query);  /* Execution de la requete avec retour d'un tableau*/ 

/*Verification du nombre de lignes du tableau retourné; Si > O alors presence données sinon  absence*/ 
if($result->num_rows > 0)

{ 
	?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>

</div>
	<h2>Votre restaurant</h2>
	<table class="table table-bordered table-striped">
		<tr>
			<td>Type restaurant</td>
			<td>Type cuisine</td>
			<td>Nom restaurant</td>
			<td>adresse restaurant</td>
            <td>Code postal</td>
            <td>Horaires semaine</td>
            <td>Horaires samedi</td>
            <td>Horaires dimanche</td>
            <td>Horaires jours féries</td>
            <td>Téléphone</td>
            <td>N° SIRET</td>
			<td width="70px">Supprimer</td>
			<td width="70px">Modifier</td>
			<td width="70px">Insert menu</td>
			<td width="70px">Gerer menu</td>
		</tr>
	<?php
	/*Parcours du tableau retourné pour affichage des infos ligne par ligne*/ 
	?>
	<?php foreach ($result as $res ): ?>
		
		<form action='' method='POST'>
		<input type='hidden' value='<?= $res['id_restaurant'] ?>' name='id_restaurant' />
		<tr>
		<td><?= $res['type_restaurant'] ?></td>
		<td><?= $res['type_cuisine'] ?></td>
		<td><?= $res['nom'] ?></td>
		<td><?= $res['adresse'] ?></td>
		<td><?= $res['code_postal'] ?></td>
		<td><?= $res['horaires_semaine'] ?></td>
        <td><?= $res['horaires_samedi'] ?></td>
        <td><?= $res['horaires_dimanche'] ?></td>
        <td><?= $res['horaires_jours_feries'] ?></td>
        <td><?= $res['telephone'] ?></td>
        <td><?= $res['n_siret'] ?></td>
		<!-- <td><input type='submit' name='delete' value='Delete' class='btn btn-danger' /></td> -->
		<td><a href='delete_restaurant.php?id=<?=$res['id_restaurant']  ?>' >supprimer</a></td>
		<td><a href='edit_restaurant.php?id=<?=$res['id_restaurant']  ?>' >Edit</a></td>
		<td><a href='insert_menu.php?id_resto=<?=$res['id_restaurant']  ?>' >Insert menu</a></td>
		<td><a href='gerer_menu.php?id=<?=$res['id_restaurant']  ?>' >Gerer menu</a></td>
		</tr>		
		</form>
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

