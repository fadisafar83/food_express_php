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


// require_once 'header.php'; 
 /*l'entete du site*/ 

// echo "<div class='container'>";



/* Si on appuie sur le bouton delete*/ 
if( isset($_POST['delete'])){
	$sql = "DELETE FROM `express_compte` WHERE id_compte = " . $_POST['id_compte'];
	if($conn->query($sql) === TRUE)
	{
		echo "<div class='alert alert-success'>Successfully delete  user</div>";
	}
}

/* 1- Récupértion du paramètre transmis */
$id= $_GET['id'];
	 
//echo $id ;
/*2- Selectionner en base les infos à montrer a l'utilisateur*/ 
$sql = "SELECT * FROM express_compte WHERE id_compte={$id}";
$result = $conn->query($sql); /*3- exécution de la requete retour d'un tableau*/ 

if( $result->num_rows < 1 )
{
   header('Location: adminusers.php'); /* retourner à la page daccueil*/
   exit;
}
$row = $result->fetch_assoc(); /*pas besoin de while une seule ligne retr*/ 

?>

			<form class="box" action="" method="POST" class="col-12">
			<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Supprimer un utilisateur</h3> 
			<div class="row">
				<input type="hidden" class='box-input col-12' value="<?=$row['id_compte']; ?>" name="id_compte" id="id_compte">
				<label for="nom" class='form-label'>Nom</label>
				<input type="text" class='box-input col-12' id="nom"  name="nom" value="<?= $row['nom']; ?>" class="form-control"><br>
				<label for="prenom" class='form-label'>Prenom</label>
				<input type="text"  class='box-input col-12' name="prenom" id="prenom" value="<?= $row['prenom']; ?>" class="form-control"><br>
				<label for="email" class='form-label'>Email</label>
				<input type="email"  name="email" id="email" value="<?= $row['email']; ?>" class='box-input col-12'><br>
                <label for="password" class='form-label'>Password</label> 
				<input type="password" class='box-input col-12' name="password" id="password" value="" class="form-control"><br>
				<label for="mobile" class='form-label'>Mobile</label>
                <input type="number"  class='box-input col-12' name="mobile" id="mobile" value="<?= $row['mobile']; ?>" class="form-control"><br>
                <label for="adresse"class='form-label'>adresse</label>
				<input for="text" class='box-input col-12' name="adresse" id="adresse" class="form-control" value = "<?= $row['adresse'];?>" class="form-control"><br>
				<label for="codepostal" class='form-label'>Code postal</label> 
                  <div class="input-group mb-3 col-12">
                    <select name='code_postal' class="custom-select" id='code_postal'  value= "<?= $row['code_postal']; ?>">
					<option>93200</option>
					<option>93206</option>
					<option>93210</option>
					<option>93284</option>
                   </select>
                  </div>
                  <br><br>
				  
				<input type='submit' name='delete' value='confirmer la suppression' class='box-button mt-3' />
				</div>
			</form>
<?php 

 require_once '../footer.php';



		