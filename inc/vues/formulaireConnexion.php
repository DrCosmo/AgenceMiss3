<?php
include_once 'modeles/fonctionsAccesBDD.php';
include_once 'autres/verifSaisForm.php';

?>

<body>
    <div class="menuLogin">
        <form action="" method="post">
        <h3>Nom</h3>
        <input type="text" name="name" value="<?php if(isset($name)){echo $name;}?>" placeholder="Nom"required>
        <h3>Mot de Passe<h3>
        <input type="password" name="passwd" value="<?php if(isset($passwd)){echo $passwd;}?>" placeholder="Mot de passe"required>
        <button type="submit" name="connexion">Se connecter</button>
        </form>
    </div>
</body>