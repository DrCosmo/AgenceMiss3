<?php

include "modeles/fonctionsAccesBDD.php";

$lepdo=connectionBDD();

include_once "vues/search.php";

if(isset($_POST['submit'])){

    $noVille=$_POST['villeList'];
    $noType=$_POST['typeList'];
    //$noJardin=$_POST['ChoixJardin'];
    //$noPrixMax=$_POST['ChoixPrixMax'];
    //$noPrixMin=$_POST['ChoixPrixMin'];
    //$recherche=getBiensSearch($lepdo, $_POST['villeList'], $_POST['typeList'],$_POST['ChoixJardin'],$_POST['ChoixPrixMax'],$_POST['ChoixPrixMin']);
    header("Location: ?page=lesbiens&Recherche=1&noVille=$noVille&noType=$noType&noJardin=$noJardin&noPrixMax=$noPrixMax&noPrixMin=$noPrixMin&ChoixSurfaceMin=$surfaceMin&ChoixPiecesMin=$piecesMin");
}
?>