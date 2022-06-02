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
	if(isset($_POST['addnew'])){

		if(empty($_POST['type_restaurant']) || empty($_POST['type_cuisine']) || empty($_POST['nom']) || empty($_POST['adresse']) || empty($_POST['code_postal']) || empty($_POST['horaires_semaine']) || empty($_POST['horaires_samedi']) || empty($_POST['horaires_dimanche']) || empty($_POST['horaires_jours_feries']) || empty($_POST['telephone']) || empty($_POST['n_siret'])){ 
            echo "Champs obligatoires"; 
		}else{	
			
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
			
		
			
			$sql = "INSERT INTO `express_restaurant` (type_restaurant, type_cuisine, nom, adresse, code_postal, horaires_semaine, horaires_samedi, horaires_dimanche, horaires_jours_feries, id_gestionaire_restaurant, telephone, n_siret) 
		    VALUES ('$type_restaurant', '$type_cuisine', '$nom', '$adresse', '$code_postal', '$horaires_semaine', '$horaires_samedi', '$horaires_dimanche', '$horaires_jours_feries', '$id_gestionaire_restaurant', '$telephone', '$n_siret')";

			
			if($conn->query($sql) === TRUE){

			
				echo "<div class='alert alert-success'>Votre restaurant a été ajouté avec succès</div>";
			}else{
				echo "<div class='alert alert-danger'>Error: ajout impossible</div>";
			}
		}
	}
   
	?>
			<form class="box" action="" method="POST">
			<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Ajouter votre restaurant</h3> 
			<div class="row">
            <label for="type_restaurant" class='form-label'>Type restaurant</label> 
                  <div class="input-group mb-3 col-12">
                    <select name='type_restaurant' id='type_restaurant' class="custom-select">
					<option>streetfood</option>
					<option>classique</option>
					<option>grill</option>
					<option>traditionelle</option>
                    <option>sandwicherie</option>
                    <option>steak house,</option>
                    <option>Autre</option>
                   </select>
                  </div>
				<label for="type_cuisine" class='form-label'>Type cuisine</label>
				<input type="text" id="type_cuisine"  name="type_cuisine" class='box-input col-12' placeholder="oriental"><br>
				<label for="nom" class='form-label'>Nom de restaurant</label>
				<input type="text" id="nom"  name="nom" class='box-input col-12'><br>
                <label for="adresse" class='form-label'>Adresse restaurant</label>
				<input type="text" id="adresse"  name="adresse" class='box-input col-12'><br>
                <label for="code_postal" class='form-label'>Code postal restaurant</label> 
                  <div class="select">
                    <select name='code_postal' id='code_postal'>
					<option>93200</option>
					<option>93206</option>
					<option>93210</option>
					<option>93284</option>
                   </select>
                  </div><br><br>
				<label for="horaires_semaine" class='form-label'>Horaires semaine</label> 
				<input type="text"  name="horaires_semaine" id="horaires_semaine" class='box-input col-12'><br>
                <label for="horaires_samedi" class='form-label'>Horaires samedi</label> 
				<input type="text"  name="horaires_samedi" id="horaires_samedi" class='box-input col-12'><br>
                <label for="horaires_dimanche" class='form-label'>Horaires dimanche</label> 
				<input type="text"  name="horaires_dimanche" id="horaires_dimanche" class='box-input col-12'><br>
                <label for="horaires_jours_feries" class='form-label'>Horaires jours fériés </label> 
				<input type="text"  name="horaires_jours_feries" id="horaires_jours_feries" class='box-input col-12'><br>
				<label for="telephone" class='form-label'>Téléphone</label>
				<input type="number" id="telephone"  name="telephone" class='box-input col-12'><br>
				<label for="n_siret" class='form-label'>N° SIRET</label> 
				<input type="text"  name="n_siret" id="n_siret" class='box-input col-12'><br>
                <input type="submit" name="addnew" value="addnew" class='box-button mt-3'><br>
            </div>
			</form>
	

<?php 

 require_once '../footer.php';