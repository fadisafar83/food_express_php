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

	if(isset($_POST['addnew'])){

		if(empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['mobile']) || empty($_POST['adresse']) || empty($_POST['codepostal']) ){ 
            echo "Champs obligatoires"; 
		}else{		
			$nom        = $_POST['nom'];
			$prenom     = $_POST['prenom'];
			$email      = $_POST['email'];
            $password       = $_POST['password'];
            $password   = hash('sha256',$_POST['password']);
            $mobile      = $_POST['mobile'];
			$adresse     = $_POST['adresse'];
			$code_postal = $_POST['codepostal'];
		
			
			$sql = "INSERT INTO `express_compte` (nom, prenom, email, mot_de_passe, mobile, adresse, code_postal) 
		    VALUES ('$nom', '$prenom', '$email', '$password', '$mobile', '$adresse', '$code_postal' )";


			if($conn->query($sql) === TRUE){
				echo "<div class='alert alert-success'>Nouvel utilisateur ajouté avec succès</div>";
			}else{
				echo "<div class='alert alert-danger'>Error: ajout impossible</div>";
			}
		}
	}
	?>
			    <form action="" method="POST" class="box">
			    <h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Nouvel utilisateur</h3> 
			    <div class="row">
				<label for="nom" class='form-label'>Nom</label>
				<input type="text" id="nom"  name="nom" class='box-input col-12'><br>
				<label for="prenom" class='form-label'>Prenom</label>
				<input type="text" id="prenom"  name="prenom" class='box-input col-12'><br>
				<label for="email" class='form-label'>Email</label> 
				<input type="email"  name="email" id="email" class='box-input col-12'><br>
                <label for='inputpassword' class='form-label'>Password</label>
                <input type="password" name='password' placeholder="************" class='box-input col-12' ><br><br>
				<label for="mobile" class='form-label'>Mobile</label>
				<input type="number" id="mobile"  name="mobile" class='box-input col-12'><br>
				<label for="adresse" class='form-label'>Adresse</label>
				<input type="text" id="adresse"  name="adresse" class='box-input col-12'><br>
			    <label for="codepostal" class='form-label'>Code postal</label> 
                  <div class="custom-select">
                    <select name='codepostal' id='code_postal'>
					<option>93200</option>
					<option>93206</option>
					<option>93210</option>
					<option>93284</option>
                   </select>
                  </div>
				  <br><br>
                <input type="submit" name="addnew" value="Ajouter" class='box-button mt-3'><br>
				</div>
			</form>

</body>
</html>
<?php 
 require_once '../footer.php';


