<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["email"])){
		header("Location: ../page1.php");
		exit(); 
	}
  
  require_once '../connexion/connexion.php';
  require_once 'adminheader.php';
  
  ?>
<?php 
/* inclusion des dependances*/ 
 

// require_once 'header.php';  /*l'entete du site*/

// echo "<div class='container'>";



/* Si on appuie sur le bouton delete*/ 
if( isset($_POST['delete'])){
	$sql = "DELETE FROM `express_gestionaire_restaurant` WHERE id_gestionaire_restaurant=" . $_POST['id_gestionaire_restaurant'];
	if($conn->query($sql) === TRUE)
	{
		echo "<div class='alert alert-success'>Successfully delete  user</div>";
	}
}

/* requete pour selectionner tous les users de la table*/ 
$sql="SELECT * FROM gestionaire_restaurant";
$result = $conn->query($sql);  /* Execution de la requete avec retour d'un tableau*/ 


/*Verification du nombre de lignes du tableau retourné; Si > O alors presence données sinon  absence*/ 
if( $result->num_rows > 0)
{ 
	?>
	<h2>Tous les utilisateurs</h2>
	<table class="table table-bordered table-striped">
		<tr>
			<td>Nom</td>
			<td>Prenom</td>
			<td>Email</td>
			<td>Mot de passe</td>
            <td>mobile</td>
            <td>adresse domicile</td>
            <td>code postal domicile</td>
			<td width="70px">Supprimer</td>
			<td width="70px">Modifier</td>
		</tr>
	<?php
	/*Parcours du tableau retourné pour affichage des infos ligne par ligne*/ 
	?>
	<?php foreach ($result as $res ):  ?>
		<form action='' method='POST'>
		<input type='hidden' value='<?= $res['id_gestionaire_restaurant'] ?>' name='id_gestionaire_restaurant' />
		<tr>
		<td><?= $res['nom'] ?></td>
		<td><?= $res['prenom'] ?></td>
		<td><?= $res['email'] ?></td>
		<td><?= $res['mot_de_passe'] ?></td>
		<td><?= $res['mobile'] ?></td>
		<td><?= $res['adresse_domicile'] ?></td>
        <td><?= $res['code_postal_domicile'] ?></td>
		<!-- <td><input type='submit' name='delete' value='Delete' class='btn btn-danger' /></td> -->
		<td><a href='admindeletegestionaire.php?id="<?=$res['id_gestionaire_restaurant']  ?>"' >supprimer</a></td>
		<td><a href='admineditgestionaire.php?id="<?=$res['id_gestionaire_restaurant']  ?>"' >Edit</a></td>
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

<?php 

 require_once '../footer.php';