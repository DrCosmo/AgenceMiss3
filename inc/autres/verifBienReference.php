<?php 
include_once '../modeles/fonctionsAccesBDD.php';
if (isset($_GET['reference'])) {
    $db = connectionBDD();
    $reference = $_GET['reference'];
    $leBien = getBienByReference($db, $reference);
} else {
    // afficher un message d'erreur ou rediriger l'utilisateur
}