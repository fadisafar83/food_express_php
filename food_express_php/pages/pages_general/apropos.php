<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["email"])){
		header("Location: ./page1.php");
		exit(); 
	}
  
  require_once '../connexion/connexion.php';
 
  
  ?>

<?php 
  if ($_SESSION['id_gestionaire_restaurant']) {
    require_once '../pages_gestionaire/gestionaireheader.php';

  } elseif($_SESSION['type'] === 'admin') {
    require_once '../pages_admin/adminheader.php';

  }elseif($_SESSION['type'] === 'client'){
    require_once '../pages_client/clientheader.php';
}else{
  echo 'Error' ;
};
  ?>

<!-- <!DOCTYPE html>
<html lang="en"> -->
<!-- <head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>apropos</title>
</head>
<body>
   
    <body class="bodypage_1">
    
      <header>
        <div class="header">
         <h1 style="font-size: 40px;">Saint-Denis &nbspFood-Express</h1>
       </div>
       </header>

         <div class="nava">
            <a href="page1.php">Accueil</a>
            <a href="index_1.php">Cuisines</a>
            <a href="regoiniez-nous.php">Rejoignez-nous</a>
            <a href="apropos.php">Apropos</a>
            <a href="contactez-nous.php">Contactez-nous</a>
            <li style="float: right;"><button type="button" class="btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Gérer votre compte</button></li>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel_1">Modifier vos informations de connexion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Votre Nom:</label>
                        <input type="text" class="form-control" id="recipient-Nickname_1">
                      </div>
                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Votre Prénom:</label>
                        <input type="text" class="form-control" id="recipient-Firstname_1">
                      </div>
                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Votre adresse mail:</label>
                        <input type="email" class="form-control" id="recipient-email_1">
                      </div>
                      <div class="mb-3">
                        <label for="message-text" class="col-form-label">Votre mot de passe:</label>
                        <input type="password" class="form-control" id="recipient-password_1">
                      </div>
  
                      <div class="mb-3">
                        <label for="message-text" class="col-form-label">Votre téléphone:</label>
                        <input type="text" class="form-control" id="recipient-mobile_1">
                      </div>
  
                      <div class="col-12">
                        <label for="inputAddress" class="form-label">Adresse en Saint-Denis exclusivement</label>
                        <input type="text" class="form-control" id="inputAdresse_1" placeholder="15 rue de ...">
                      </div>
          
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Code postal</label>
                          </div>
                          <select class="custom-select" id="inputGroupSelect01_1">
                            <option selected>Choisissez</option>
                            <option value="1">93200</option>
                            <option value="2">93206</option>
                            <option value="3">93210</option>
                            <option value="3">93284</option>
                          </select>
                        </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="annuler">Annuler</button>
                    <button type="button" class="btn btn-primary"  id="valid-modif">Valider les modifications</button>
                  </div>
                </div>
              </div>
            </div> 
          </div> -->

          <div class="row_1">
             <div class="column_1"> 
              
              
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../img/equipe.png" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Qui sommes-nous ?</p>
                    <p class="card-text"> Nous sommes une équipe de 20 personnes originaires de la ville de Saint-Denis. Nous avons construit notre entreprise il ya 15 ans. Notre but c'est de servir les habitants de Saint-Denis et leurs restaurants. Notre service est exclusive à la ville de Saint-Denis.</p>
                  </div>
                </div>
             
              </div>
        
             <div class="column_1"></div>
        
        
             <div class="column_1">  </div>
                   
          </div>
          
          <!-- <footer class="footer">
            <p><strong>&copy;2021 - Saint-Denis Food-Express</strong></p>
            <p><strong>12 rue de marché des fleurs - 93200 Saint-Denis - France</strong></p>
            <div class="footerLink">
            <ul>
                <li >
           <a href="apropos.php">Apropos</a>
           <a href="regoiniez-nous.php">Rejoignez-nous</a>
           <a href="contactez-nous.php">Contactez-nous</a>
       
                </li>
              </ul>
            </div> 
          </div>
        </footer> -->
        <script src="../js/script.js"></script>
</body>
</html>
<?php require_once './footer.php';
?>