<?php
if(isset($_SESSION['nom'])){
echo '<h1>Bonjour,'. $_SESSION['nom']," ",$_SESSION['prenom'];   
}
else{
    header("Location: ?page=connexion");
}
?>
