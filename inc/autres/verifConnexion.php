<?php
if(isset($_SESSION['nom'])){
echo '<h1>Bonjour,'. $_SESSION['nom']," ",$_SESSION['prenom'];   
}
else{
    include_once 'vues/formulaireConnexion.php';
}
?>