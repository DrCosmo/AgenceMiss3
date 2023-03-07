<?php

echo "1 echo";

include_once 'modeles/fonctionsAccesBDD.php';

$lepdo=connectionBDD();
echo "apres include bdd";

include_once 'vues/ajoutBien.php';

echo "apres vue ajout bien";


if(isset($_POST['submit'])){
    
    echo 'dans le if debut';
    

    ajoutBien($lepdo, $_POST['saisieVille'], 
            $_POST['saisieType'], 
            $_POST['saisieJardin'], 
            $_POST['saisieSurface'], 
            $_POST['saisieNbPiece'], 
            $_POST['saisiePrix'], 
            $_POST['saisieDescription'], 
            $_POST['saisieImage']);
    
    echo 'dans le if apres fonction';
    
}

echo 'apres le IF';

