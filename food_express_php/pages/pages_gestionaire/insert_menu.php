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
	
	

	
	if(isset($_POST['ajouter'])){

		if(empty($_POST['categorie']) || empty($_POST['nom_produit']) || empty($_POST['prix_produit'])){ 
            echo "Champs obligatoires"; 
		}else{	

            $categorie                 = $_POST ['categorie'];
            $nom_produit               = $_POST ['nom_produit'];
			$prix_produit              = $_POST['prix_produit'];
			$id_restaurant             = $_GET['id_resto'];
			$id_gestionaire_restaurant = $_SESSION['id_gestionaire_restaurant'];

			$sql = "INSERT INTO `express_menu` (categorie, nom_produit, prix_produit, id_restaurant, id_gestionaire_restaurant) 
		    VALUES ('$categorie', '$nom_produit', '$prix_produit', '$id_restaurant', '$id_gestionaire_restaurant')";

			
			if($conn->query($sql) === TRUE){

			
				echo "<div class='alert alert-success'>Votre menu a été ajouté avec succès</div>";
			}else{
				echo "<div class='alert alert-danger'>Error: ajout impossible</div>";
			}
		}
	}
   
	?>
			<form class="box" action="" method="POST">
			<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Nouveau menu</h3> 
			<div class="row">
            <label for="categorie" class='form-label'>Catégorie</label> 
                  <div class="input-group mb-3 col-12">
                    <select name='categorie' id='categorie' class="custom-select">
					<option>Pizza</option>
					<option>Pâte</option>
					<option>Salad</option>
					<option>Sandwitche</option>
                    <option>Boisson</option>
                    <option>Dessert</option>
                    <option>Autre</option>
                   </select>
                  </div><br><br>
				<label for="nom_produit" class='form-label'>Nom de produit</label>
				<input type="text" id="nom_produit"  name="nom_produit" class='box-input col-12' placeholder="nom de produit"><br>
				<label for="prix_produit" class='form-label'>Prix de produit</label>
				<input type="number" id="prix_produit"  name="prix_produit" class='box-input col-12' placeholder="prix de produit"><br>
                <input type="submit" name="ajouter" value="Ajouter votre menu" class='box-button mt-3'><br>
			</form>
		</div>
	</div>
</div>
</div>

<?php 

 require_once '../footer.php';