
<div class="user">
            <?php
if(isset($_SESSION['nom'])){
echo '<h1>Bonjour,'. $_SESSION['nom']," ",$_SESSION['prenom'];?>
<a href="?deconnexion=1"> Se déconnecter <a>
<?php  
}
?>
</div>