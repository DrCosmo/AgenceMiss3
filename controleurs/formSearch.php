<?php

include "modeles/fonctionsAccesBDD.php";

$lepdo=connectionBDD();

include_once "vues/search.php";

if(isset($_POST['submit'])){

    $noVille=$_POST['villeList'];
    $noType=$_POST['typeList'];
    getBiensSearch($lepdo, $_POST['villeList'], $_POST['typeList']);
    header("Location: ?page=lesbiens&Recherche=1&noVille=$noVille&noType=$noType");
}

if (isset($_POST['reset'])) {
    header("Location: ?page=lesbiens&Recherche=0");
}
?>