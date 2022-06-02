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

// require_once 'header.php';

?>
<div class="container">
	<?php 
	
	if( isset($_POST['update']) )
	{
		if(empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['mobile']) || empty($_POST['adresse']) || empty($_POST['code_postal']) )
		{
			echo "Please fillout all required fields"; 
		}
		else
		{		
			$nom          = $_POST['nom'];
			$prenom       = $_POST['prenom'];
			$email        = $_POST['email'];
			$password     = $_POST['mot_de_passe'];
			$password     = hash('sha256', $password);
            $mobile       = $_POST['mobile'];
			$adresse      = $_POST['adresse'];
			$code_postal  = $_POST['code_postal'];

			$sql = "UPDATE express_compte SET nom ='{$nom}', prenom = '{$prenom}', email = '{$email}' 
            , mot_de_passe = '{$password}' , mobile = '{$mobile}' , adresse = '{$adresse}' , code_postal = '{$code_postal}' 
						WHERE id_compte = ". $_POST['id_compte'];

			if( $conn->query($sql) === TRUE)
			{
				echo "<div class='alert alert-success'>Successfully updated  user</div>";
			}
			else
			{
				echo "<div class='alert alert-danger'>Error: There was an error while updating user info</div>";
			}
		}
	}
	// recuperation du id passer en parametre 
	
	//$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
	
	/* 1- Récupértion du paramètre transmis */
	$id= $_GET['id'];
	 
	 //echo $id ;
	/*2- Selectionner en base les infos à montrer a l'utilisateur*/ 
	$sql = "SELECT * FROM express_compte WHERE id_compte={$id}";
	$result = $conn->query($sql); /*3- exécution de la requete retour d'un tableau*/ 

	if( $result->num_rows < 1 )
	{
		header('Location: cuisine_2.php'); /* retourner à la page daccueil*/
		exit;
	}
	$row = $result->fetch_assoc(); /*pas besoin de while une seule ligne retr*/ 
	?>
			<form class="box" action=" " method="POST">
			<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Modifier un utilisateur</h3> 
			<div class="row">
				<input type="hidden" value="<?=$row['id_compte']; ?>" name="id_compte" id="id_compte" class='box-input col-12'>

				<label for="nom" class='form-label'>Nom</label>
				<input type="text" id="nom"  name="nom" value="<?= $row['nom']; ?>" class='box-input col-12'><br>

				<label for="prenom" class='form-label'>Prenom</label>
				<input type="text"  name="prenom" id="prenom" value="<?= $row['prenom']; ?>" class='box-input col-12'><br>

				<label for="email" class='form-label'>Email</label>
				<input type="email"  name="email" id="email" value="<?= $row['email']; ?>" class='box-input col-12'><br>

				<label for="password" class='form-label'>Password</label> 
				<input type="password" name="mot_de_passe" id="mot_de_passe" value="**************" class='box-input col-12'><br>

				<label for="mobile" class='form-label'>Téléphone</label>
                <input type="text"  name="mobile" id="mobile" value="<?= $row['mobile']; ?>" class='box-input col-12'><br>

				<label for="adresse" class='form-label'>adresse</label>
				<input type="text" id="adresse"  name="adresse" value="<?= $row['adresse']; ?>" class='box-input col-12'><br>

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
				<input type="submit" name="update" class='box-button mt-3' value="Modifier">
				</div>
			</form>
</div>
<?php 

 require_once '../footer.php';









