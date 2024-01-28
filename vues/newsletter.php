<?php
$pdo = connectionBDD();
?>
<div class="inscription">
    <form action="" method="post">
        <div class="info-perso">
            <h3>Prénom</h3>
            <input type="text" name="prenom" value="<?php if(isset($prenom)){echo $prenom;}?>" placeholder="jhon"required>
            <h3>Nom</h3>
            <input type="text" name="nom" value="<?php if(isset($nom)){echo $nom;}?>" placeholder="Doe"required>
            <h3>Email</h3>
            <input type="email" name="email" value="<?php if(isset($email)){echo $email;}?>" placeholder="exemple@gmail.com"required>
            <h3>Mot de Passe<h3>
            <input type="password" name="passwd" value="<?php if(isset($passwd)){echo $passwd;}?>" placeholder="Mot de passe"required>
        </div>
        <h3>Vos critères de recherche : </h3>
        <div class="checkboxes">
            <?php
                foreach(getTypes($pdo) as $type){
                ?>
                    
                    <input type="checkbox" name=<?php echo $type[1]; ?>value="<?php echo $type[1];?>">
                        <label for=<?php echo $type[1]; ?> ><?php echo $type[1];?></label>
                    
            <?php
                }
            ?>
        </div>
        <div class="consent">
            <label for="consentement">J'accepte que mes données soit traitées par l'agence immobiliére :</label>
            <input type="checkbox" name="consentement" require>
        </div>
        <button type="submit" name="inscription">S'inscrire</button>
    </form>
</div>