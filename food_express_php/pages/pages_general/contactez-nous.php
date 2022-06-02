<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["email"])){
		header("Location: page1.php");
		exit(); 
	}
  
  require_once 'connexion.php';
 
  
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
<!-- 
<!DOCTYPE html>
<html lang="en">
  <head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>contactez-nous</title>
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

        
          </div> -->
        
        
        
          <div class="row_1">
             <div class="column_1"> 
                 <p>Pour nous contacter:</p>
                 <ul>
                   <li>Par corrier : 12 rue de marché des fleurs - 93200 Saint-Denis - France</li>
                   <li>par mail: &nbsp <a href="mailto:saint-denis-food-express@gmail.com">saint-denis-food-express@gmail.com </a></li>
                   <li>Par téléphone: &nbsp <a href="tel:01 23 45 56 12"> 01 23 45 56 12 </a></li>
                  
                 </ul>
                   
   
             </div>
        
             <div class="column_1"></div>
        
        
             <div class="column_1">
              <p>Vous pouvez nous écrire un message et nous allons vous répondre rapidement:</p>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Cliquer pour ecrire votre message</button>
    
                     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                       <div class="modal-dialog">
                         <div class="modal-content">
                           <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                             <form>
                               <div class="mb-3">
                                 <label for="recipient-name" class="col-form-label">Votre Nom:</label>
                                 <input type="text" class="form-control" id="recipient-Nickname">
                               </div>
                               <div class="mb-3">
                                 <label for="recipient-name" class="col-form-label">Votre Prénom:</label>
                                 <input type="text" class="form-control" id="recipient-Firstname">
                               </div>
                               <div class="mb-3">
                                 <label for="recipient-name" class="col-form-label">Votre adresse mail:</label>
                                 <input type="email" class="form-control" id="recipient-email">
                               </div>
                               <div class="mb-3">
                                 <label for="message-text" class="col-form-label">Votre Message:</label>
                                 <textarea class="form-control" id="message-text"></textarea>
                               </div>
                             </form>
                           </div>
                           <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="fermer">Fermer</button>
                             <button type="button" class="btn btn-primary" id="send-message">Envoyer le message</button>
                           </div>
                         </div>
                       </div>
                     </div>

             </div>
                   
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
        </footer> -->
<script src="../js/script.js"></script>
</body>
</html>
<?php
require_once './footer.php';
?>