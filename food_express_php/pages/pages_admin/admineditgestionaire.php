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

<div class="container">
	<?php 
	
	if( isset($_POST['update']) )
	{
		if( empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['mobile']) || empty($_POST['adresse_domicile']) || empty($_POST['code_postal_domicile']) )
		{
			echo "Please fillout all required fields"; 
		}
		else
		{	
			$nom        = $_POST['nom'];
			$prenom     = $_POST['prenom'];
			$email      = $_POST['email'];
			$password   = $_POST['mot_de_passe'];
			$password   = hash('sha256', $password);
            $mobile       = $_POST['mobile'];
			$adresse_domicile      = $_POST['adresse_domicile'];
			$code_postal_domicile      = $_POST['code_postal_domicile'];

			$sql = "UPDATE express_gestionaire_restaurant SET nom ='{$nom}', prenom = '{$prenom}', email = '{$email}' 
            , mot_de_passe = '{$password}' , mobile = '{$mobile}' , adresse_domicile = '{$adresse_domicile}' , code_postal_domicile = '{$code_postal_domicile}' 
						WHERE id_gestionaire_restaurant = ". $_POST['id_gestionaire_restaurant'];

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
	$sql = "SELECT * FROM express_gestionaire_restaurant WHERE id_gestionaire_restaurant ={$id}";
	$result = $conn->query($sql); /*3- exécution de la requete retour d'un tableau*/ 

	if( $result->num_rows < 1 )
	{
		header('Location: cuisine_2.php'); /* retourner à la page daccueil*/
		exit;
	}
	$row = $result->fetch_assoc(); /*pas besoin de while une seule ligne retr*/ 
	?>
			     <form class="box" action="" method="POST">
			     <h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Modifier gestionaire</h3> 
			    <div class="row">
				<input type="hidden" class='box-input col-12' value="<?=$row['id_gestionaire_restaurant']; ?>" name="id_gestionaire_restaurant" id="id_gestionaire_restaurant">
				<label for="nom" class='form-label'>Nom</label>
				<input type="text"  class='box-input col-12' id="nom"  name="nom" value="<?= $row['nom']; ?>"><br>
				<label for="prenom" class='form-label'>Prenom</label>
				<input type="text"  name="prenom" id="prenom" value="<?= $row['prenom']; ?>"  class='box-input col-12' ><br>
                <label for="email" class='form-label'>Email</label>
				<input for="email" name="email" id="email" class='box-input col-12' value = "<?= $row['email'];?>"><br>
				<label for="password" class='form-label'>Password</label> 
				<input type="password" name="mot_de_passe" id="mot_de_passe" value=""  class='box-input col-12'><br>
				<label for="mobile" class='form-label'>Téléphone</label>
                <input type="number"  name="mobile" id="mobile" value="<?= $row['mobile']; ?>"  class='box-input col-12'><br>
				<label for="adresse" class='form-label'>adresse domicile</label>
				<input type="text" id="adresse_domicile"  name="adresse_domicile" value="<?= $row['adresse_domicile']; ?>"  class='box-input col-12'><br>
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
				<input type="submit" name="update" class='box-button mt-3' value="Modifier">
               </div>
			</form>
	

<?php 

 require_once '../footer.php';








