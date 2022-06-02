<?php
// Informations d'identification
define('DB_SERVER', '......');
define('DB_USERNAME', '.....');
define('DB_PASSWORD', '.......');
define('DB_NAME', '.......');
 
// Connexion � la base de donn�es MySQL 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// V�rifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
    
}
?>





<!-- .................Autre façon de connexion avec la base de données ........................ 


 
$localhost 	= "localhost"; 
$username 	= "root"; 
$password 	= ""; 
$dbname 	= "gestiondb"; 
 
$conn = new mysqli($localhost, $username, $password, $dbname); 

if($conn->connect_error) {
    die("connection failed : " . $conn->connect_error);
    var_dump ($conn); exit;
}   -->