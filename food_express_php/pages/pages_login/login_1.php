<!DOCTYPE html>
<html>
<head>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="http://localhost/projet_site_food_express/css/style.css">
</head>
<body>
<?php

require('../connexion/connexion.php'); /*  recup de la variable conn*/ 
session_start();/* ouverture de la session*/ 
$result= [];
if (isset($_POST['email'])){
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn, $email);
	
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
    
	/*Requete verification du compte*/ 
	$query = "SELECT * FROM `express_gestionaire_restaurant` WHERE email='$email' and mot_de_passe='".hash('sha256', $password)."'";
	$result = mysqli_query($conn,$query) or die(mysql_error());
	

	if (mysqli_num_rows($result) == 1)
	{
		$gestionaire_restaurant = mysqli_fetch_assoc($result);

		$_SESSION['email'] = $gestionaire_restaurant['email'];
		$_SESSION['id_gestionaire_restaurant'] = $gestionaire_restaurant['id_gestionaire_restaurant'];

	
		// $query = "SELECT * FROM `restaurant` WHERE id_gestionaire_restaurant='{$_SESSION['id_gestionaire_restaurant']}' ";
		// $resul = mysqli_query($conn,$query) or die(mysql_error());
		// foreach ($result as $res )
		// {
		// 	$_SESSION['id_restaurant'] = $res['id_restaurant'];
			
		// 	/// Add all information you want here to use it in any page like :
		// 	/// $_SESSION['nom'] = $res['nom']
		// }
	
	
	
		// $query = "SELECT * FROM `menu` WHERE id_gestionaire_restaurant='{$_SESSION['id_gestionaire_restaurant']}' ";
		// $resul = mysqli_query($conn,$query) or die(mysql_error());
		// foreach ($result as $res )
		// {
		// 	$_SESSION['id_menu'] = $res['id_menu'];
		// 	$_SESSION['id_restaurant'] = $res['id_restaurant'];
			
			
		// 	/// Add all information you want here to use it in any page like :
		// 	/// $_SESSION['nom'] = $res['nom']
		// }
			header('location: ../pages_gestionaire/cuisine_3.php');
	}else{
		$message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
	}
}
?>
<form class="box" action="" method="post" name="login">
<h1>Connexion gestionaire de restaurant</h1>
<input type="text" class="box-input" name="email" placeholder="Email">
<input type="password" class="box-input" name="password" placeholder="Mot de passe">
<input type="submit" value="Connexion " name="submit" class="box-button">
<p class="box-register">Vous n'avez pas encore un compte ? <a href="register_1.php">S'inscrire</a></p>
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>
</body>
</html>