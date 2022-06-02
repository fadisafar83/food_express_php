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
		if(empty($_POST['categorie']) || empty($_POST['nom_produit']) || empty($_POST['prix_produit'])){
			echo "Please fillout all required fields"; 
		}
		else
		{		
            $categorie                   = $_POST ['categorie'];
            $nom_produit                 = $_POST ['nom_produit'];
			$prix_produit                = $_POST['prix_produit'];
            $id_gestionaire_restaurant   = $_SESSION['id_gestionaire_restaurant'];
			$id_restaurant               = $_GET['id_resto'];

			$sql = "UPDATE express_menu SET categorie ='{$categorie}', nom_produit = '{$nom_produit}', prix_produit = '{$prix_produit}' 
						WHERE id_menu = ". $_POST['id_menu'];

			if( $conn->query($sql) === TRUE)
			{
				echo "<div class='alert alert-success'>Successfully updated menu</div>";
			}
			else
			{
				echo "<div class='alert alert-danger'>Error: There was an error while updating menu info</div>";
			}
		}
	}
	// recuperation du id passer en parametre 
	
	//$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
	
	/* 1- Récupértion du paramètre transmis */
	$id= $_GET['id'];
	 
	 //echo $id ;
	/*2- Selectionner en base les infos à montrer a l'utilisateur*/ 
	$sql = "SELECT * FROM express_menu WHERE id_menu={$id}";
	$result = $conn->query($sql); /*3- exécution de la requete retour d'un tableau*/ 

	if( $result->num_rows < 1 )
	{
		header('Location: cuisine_3.php'); /* retourner à la page daccueil*/
		exit;
	}
	$row = $result->fetch_assoc(); /*pas besoin de while une seule ligne retr*/ 
	?>

			
			    <form class="box" action="" method="POST">
			    <h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Modifier menu</h3> 
			    <div class="row">
				<input type="hidden" class='box-input col-12' value="<?=$row['id_menu']; ?>" name="id_menu" id="id_menu">
				<label for="categorie" class='form-label'>Catégorie de produit</label>
				<div class="input-group mb-3 col-12">
                <select name='categorie' id='categorie' value="<?= $row['categorie']; ?>" class="custom-select">
                    <option>Pizza</option>
					<option>Pâte</option>
					<option>Salad</option>
					<option>Sandwitche</option>
                    <option>Boisson</option>
                    <option>Dessert</option>
                    <option>Autre</option>
                   </select>
                  </div><br><br>
                <label for="nom_produit"  class='form-label'>Nom de produit</label>
				<input type="text" id="nom_produit"  name="nom_produit" placeholder= "ex:oriental" value="<?= $row['nom_produit']; ?>" class='box-input col-12'>
				<label for="prix_produit"  class='form-label'>Prix de produit</label>
				<input type="text" name="prix_produit" id="prix_produit" value="<?= $row['prix_produit']; ?>" class='box-input col-12'>
				<input type="submit" name="update" class='box-button mt-3' value="Modifier">
              </div>
			</form>
<?php 

 require_once '../footer.php';








