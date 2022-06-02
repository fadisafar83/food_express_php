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
	
	if( isset($_POST['update']) )
	{
		if(empty($_POST['type_restaurant']) || empty($_POST['type_cuisine']) || empty($_POST['nom']) || empty($_POST['adresse']) || empty($_POST['code_postal']) || empty($_POST['horaires_semaine']) || empty($_POST['horaires_samedi']) || empty($_POST['horaires_dimanche']) || empty($_POST['horaires_jours_feries']) || empty($_POST['telephone']) || empty($_POST['n_siret'])){
			echo "Please fillout all required fields"; 
		}
		else
		{		
            $type_restaurant           = $_POST ['type_restaurant'];
            $type_cuisine              = $_POST ['type_cuisine'];
			$nom                       = $_POST['nom'];
            $adresse                   = $_POST['adresse'];
			$code_postal               = $_POST['code_postal'];
            $horaires_semaine          = $_POST['horaires_semaine'];
            $horaires_samedi           = $_POST['horaires_samedi'];
            $horaires_dimanche 		   = $_POST['horaires_dimanche'];
            $horaires_jours_feries     = $_POST['horaires_jours_feries'];
			$id_gestionaire_restaurant = $_SESSION['id_gestionaire_restaurant'];
			$telephone                 = $_POST['telephone'];
			$n_siret                   = $_POST['n_siret'];
			$sql = "UPDATE express_restaurant SET type_restaurant ='{$type_restaurant}', type_cuisine = '{$type_cuisine}', nom = '{$nom}' 
            , adresse = '{$adresse}' , code_postal = '{$code_postal}' , horaires_semaine = '{$horaires_semaine}' , horaires_samedi = '{$horaires_samedi}'
            , horaires_dimanche = '{$horaires_dimanche}', horaires_jours_feries = '{$horaires_jours_feries}' , telephone = '{$telephone}', n_siret = '{$n_siret}'
						WHERE id_restaurant = ". $_POST['id_restaurant'];

			if( $conn->query($sql) === TRUE)
			{
				echo "<div class='alert alert-success'>Successfully updated  restaurant</div>";
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
	$sql = "SELECT * FROM express_restaurant WHERE id_restaurant={$id}";
	$result = $conn->query($sql); /*3- exécution de la requete retour d'un tableau*/ 

	if( $result->num_rows < 1 )
	{
		header('Location: cuisine_3.php'); /* retourner à la page daccueil*/
		exit;
	}
	$row = $result->fetch_assoc(); /*pas besoin de while une seule ligne retr*/ 
	?>


			<form class="box" action="" method="POST">
			<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Modifier votre restaurant</h3> 
			<div class="row">
				<input type="hidden" value="<?=$row['id_restaurant']; ?>" name="id_restaurant" id="id_restaurant">
				<label for="type_resturant" class='form-label'>Type du Restaurant</label>
                <select name='type_restaurant' id='type_restaurant' value="<?= $row['type_restaurant']; ?>" class="custom-select"><br>
					<option>streetfood</option>
					<option>classique</option>
					<option>grill</option>
					<option>traditionelle</option>
                    <option>sandwicherie</option>
                    <option>steak house,</option>
                    <option>Autre</option>
                   </select>
                  </div><br><br>
                <label for="type_cuisine">Type Cuisine</label>
				<input type="text" id="type_cuisine"  name="type_cuisine" placeholder= "ex:oriental" value="<?= $row['type_cuisine']; ?>" class='box-input col-12' >
				<label for="nom">Nom du Restaurant</label>
				<input type="text" name="nom" id="nom" value="<?= $row['nom']; ?>" class='box-input col-12' >
                <label for="adresse">adresse</label>
				<input type="text" id="adresse"  name="adresse" value="<?= $row['adresse']; ?>" class='box-input col-12' >
				<label for="codep_ostal">Code postal</label> 
                  <div class="select">
                    <select name='code_postal' id='code_postal'  value= "<?= $row['code_postal']; ?>">
					<option>93200</option>
					<option>93206</option>
					<option>93210</option>
					<option>93284</option>
                   </select>
                  </div><br><br>
                  <label for="horaires_semaine" class='form-label'>Horaires semaine</label>
				<input type="text" id="horaires_semaine"  name="horaires_semaine" value="<?= $row['horaires_semaine']; ?>" class='box-input col-12' >
                <label for="horaires_semedi" class='form-label'>Horaires samedi</label>
				<input type="text" id="horaires_samedi"  name="horaires_samedi" value="<?= $row['horaires_samedi']; ?>" class='box-input col-12' >
                <label for="horaires_dimanche" class='form-label'>Horaires dimanche</label>
				<input type="text" id="horaires_dimanche"  name="horaires_dimanche" value="<?= $row['horaires_dimanche']; ?>" class='box-input col-12' >
                <label for="horaires_jours_feries" class='form-label'>Horaires jours féries</label>
				<input type="text" id="horaires_jours_feries"  name="horaires_jours_feries" value="<?= $row['horaires_jours_feries']; ?>" class='box-input col-12' >
                <label for="telephone" class='form-label'>Téléphone</label>
				<input type="number"  name="telephone" id="telephone" value="<?= $row['telephone']; ?>" class='box-input col-12' >
                <label for="nom" class='form-label'>N° SIRET</label>
				<input type="text"  name="n_siret" id="n_siret" value="<?= $row['n_siret']; ?>" class='box-input col-12' >
				<input type="submit" name="update" class='box-button mt-3' value="Modifier">
                </div>
			</form>
	

<?php 

 require_once '../footer.php';








