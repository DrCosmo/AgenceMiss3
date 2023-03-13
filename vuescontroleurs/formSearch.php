<?php

include "modeles/fonctionsAccesBDD.php";

$lepdo=connectionBDD();

include_once "vues/search.php";

if(isset($_POST['submit'])){

    $noVille=$_POST['villeList'];
    $noType=$_POST['typeList'];
    $recherche=getBiensSearch($lepdo, $_POST['villeList'], $_POST['typeList']);
    header("Location: ?recherche=1&noVille=$noVille&noType=$noType");
}
?>