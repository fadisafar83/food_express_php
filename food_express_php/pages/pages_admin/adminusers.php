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


// require_once 'header.php';  /*l'entete du site*/

// echo "<div class='container'>";



/* Si on appuie sur le bouton delete*/ 
// if( isset($_POST['delete'])){
// 	$sql = "DELETE FROM `compte` WHERE id_compte=" . $_POST['id_compte'];
// 	if($conn->query($sql) === TRUE)
// 	{
// 		echo "<div class='alert alert-success'>Successfully delete  user</div>";
// 	}
// }

/* requete pour selectionner tous les users de la table*/ 
$sql="SELECT * FROM express_compte";
$result = $conn->query($sql);  /* Execution de la requete avec retour d'un tableau*/ 


/*Verification du nombre de lignes du tableau retourné; Si > O alors presence données sinon  absence*/ 
if( $result->num_rows > 0)
{ 
	?>

	<h2>Tous les utilisateurs</h2>
	<table class="table table-bordered">
		<thead>
		<tr>
			<th scope="col">Nom</th>
			<th scope="col">Prenom</th>
			<th scope="col">Email</th>
            <th scope="col">mobile</th>
            <th scope="col">adresse</th>
            <th scope="col">code postal</th>
			<th scope="col" width="70px">Supprimer</th>
			<th scope="col" width="70px">Modifier</th>
		</tr>
</thead>
	<?php
	/*Parcours du tableau retourné pour affichage des infos ligne par ligne*/ 
	?>
	<?php foreach ($result as $res ):  ?>
		<input type='hidden' value='<?= $res['id_compte'] ?>' name='id_compte' />
  <tbody>
    <tr>
		<td><?= $res['nom'] ?></td>
		<td><?= $res['prenom'] ?></td>
		<td><?= $res['email'] ?></td>
		<td><?= $res['mobile'] ?></td>
		<td><?= $res['adresse'] ?></td>
        <td><?= $res['code_postal'] ?></td>
		<!-- <td><input type='submit' name='delete' value='Delete' class='btn btn-danger' /></td> -->
		<td><a href='admindelete.php?id=<?=$res['id_compte']?>'>supprimer</a></td>
		<td><a href='adminedit.php?id=<?=$res['id_compte']  ?>'>Edit</a></td>
		</tr>		
	<?php endforeach; ?>
	</tbody>
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