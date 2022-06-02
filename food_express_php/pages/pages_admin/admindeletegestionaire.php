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


// echo "<div class='container'>";



/* Si on appuie sur le bouton delete*/ 
if( isset($_POST['delete'])){
	$sql = "DELETE FROM `express_gestionaire_restaurant` WHERE id_gestionaire_restaurant = " . $_POST['id_gestionaire_restaurant'];
	
	if($conn->query($sql) === TRUE); var_dump($conn);exit;
	
	{
		echo "<div class='alert alert-success'>Successfully delete  user</div>";
	}
}

/* 1- Récupértion du paramètre transmis */
$id= $_GET['id'];
	 
//echo $id ;
/*2- Selectionner en base les infos à montrer a l'utilisateur*/ 
$sql = "SELECT * FROM express_gestionaire_restaurant WHERE id_gestionaire_restaurant={$id}";
$result = $conn->query($sql); /*3- exécution de la requete retour d'un tableau*/ 

if( $result->num_rows < 1 )
{
   header('Location: cuisine_2.php'); /* retourner à la page daccueil*/
   exit;
}
$row = $result->fetch_assoc(); /*pas besoin de while une seule ligne retr*/ 

?>
			
			<form class="box col-12" action="" method="POST">
			<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Supprimer gestionaire</h3>
			<div class="row">
				<input type="hidden" class='box-input col-12' value="<?=$row['id_gestionaire_restaurant']; ?>" name="id_gestionaire_restaurant" id="id_gestionaire_restaurant">
				<label for="nom" class='form-label'>Nom</label>
				<input type="text" class='box-input col-12' id="nom"  name="nom" value="<?= $row['nom']; ?>" class="form-control"><br>
				<label for="prenom" class='form-label'>Prenom</label>
				<input type="text"  class='box-input col-12' name="prenom" id="prenom" value="<?= $row['prenom']; ?>" class="form-control"><br>
				<label for="email" class='form-label'>Email</label>
				<input for="email" name="email" id="email" class='box-input col-12' value = "<?= $row['email'];?>"><br>
                <label for="password" class='form-label'>Mot de passe</label> 
				<input type="password" class='box-input col-12' name="mot_de_passe" id="password" value="" class="form-control"><br>
				<label for="mobile" class='form-label'>Mobile</label>
                <input type="number"  class='box-input col-12' name="mobile" id="mobile" value="<?= $row['mobile']; ?>" class="form-control"><br>
                <label for="adresse" class='form-label'>adresse domicile</label>
				<input for="text" class='box-input col-12' name="adresse_domicile" id="adresse_domicile" class="form-control" value = "<?= $row['adresse_domicile'];?>"><br>
				<label for="code_postal_domicile" class='form-label'>Code postal domicile</label> 
                  <div class="input-group mb-3 col-12">
                    <select name='code_postal_domicile' class="custom-select" id='code_postal_domicile'  value= "<?= $row['code_postal_domicile']; ?>">
					<option>93200</option>
					<option>93206</option>
					<option>93210</option>
					<option>93284</option>
                   </select>
                  </div>
				  <br><br>
				<td><input type='submit' name='delete' value='confirmer la suppression' class='box-button mt-3' /></td>
				</div>
			</form>

<?php 

 require_once '../footer.php';

		