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
  <!DOCTYPE html>
<html lang="en">
  <body>

<div class="row_1">
             <div class="column_1"> 
                    <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="../img/rejoignez-nous.png" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"> Si vous aimez le travail en équipe le chalenge et si vous êtes motivé 
                          pour faire connaissance à la ville de Saint-Denis,
                         regoiniez-nous rapidement. 
                         Pour nous rejoindre envoyez-nous votre CV.
                         Nous n'allons pas retarder à vous contacter.</p>
                         <form>
                          <label for="fileUpload">Télécharger votre CV</label><br>
                          <input type="file" id="fileUpload">
                        </form>
                      </div>
                    </div>



                    
             </div>
        
             <div class="column_1"></div>
        
        
             <div class="column_1">  </div>
                   
          </div>
        <script src="../js/script.js"></script>
</body>
</html>
<?php
require_once './footer.php';
?>