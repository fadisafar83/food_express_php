<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["email"])){
		header("Location: ../page1.php");
		exit(); 
	}
  
  ?>

<?php 
/* inclusion des dependances*/ 
require_once '../connexion/connexion.php'; /* Variable à la bd $con*/ 
require_once 'clientheader.php';

// require_once 'header.php';  /*l'entete du site*/





/* Si on appuie sur le bouton delete*/ 
if( isset($_POST['delete'])){
	$sql = "DELETE FROM express_compte WHERE id_compte=" . $_POST['id_compte'];
	if($conn->query($sql) === TRUE)
	{
		echo "<div class='alert alert-success'>Successfully delete  user</div>";
	}
}

/* requete pour selectionner tous les users de la table*/ 
$query="SELECT * FROM express_compte  WHERE id_compte = " .$_SESSION['id_compte'];
$result = $conn->query($query);  /* Execution de la requete avec retour d'un tableau*/ 


/*Verification du nombre de lignes du tableau retourné; Si > O alors presence données sinon  absence*/ 
if($result->num_rows > 0)
{ 
	?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<div class="nava">

<a href="page1.php">Accueil</a>
<a href="index_1.php">Cuisines</a>
<a href="regoiniez-nous.php">Rejoignez-nous</a>
<a href="apropos.php">Apropos</a>
<a href="contactez-nous.php">Contactez-nous</a>


</div> -->
	<h2>Gérer vos informations de connexion</h2>
	<table class="table table-bordered table-striped">
		<tr>
			<td>Nom</td>
			<td>Prenom</td>
			<td>Email</td>
			<td>Mot de passe</td>
            <td>mobile</td>
            <td>adresse</td>
            <td>code postal</td>
			<td width="70px">Supprimer</td>
			<td width="70px">Modifier</td>
		</tr>
	<?php
	/*Parcours du tableau retourné pour affichage des infos ligne par ligne*/ 
	?>
	<?php foreach ($result as $res ):  ?>
		<form action='' method='POST'>
		<input type='hidden' value='<?= $res['id_compte'] ?>' name='id_compte' />
		<tr>
		<td><?= $res['nom'] ?></td>
		<td><?= $res['prenom'] ?></td>
		<td><?= $res['email'] ?></td>
		<td><?= $res['mot_de_passe'] ?></td>
		<td><?= $res['mobile'] ?></td>
		<td><?= $res['adresse'] ?></td>
        <td><?= $res['code_postal'] ?></td>
		<!-- <td><input type='submit' name='delete' value='Delete' class='btn btn-danger' /></td> -->
		<td><a href='clientdelete.php?id="<?=$res['id_compte']  ?>"'>supprimer</a></td>
		<td><a href='clientedit.php?id="<?=$res['id_compte']  ?>"'>Edit</a></td>
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

