<?php

include "modeles/fonctionsAccesBDD.php";

$lepdo=connectionBDD();

include_once "vues/search.php";

if(isset($_POST['submit'])){

    $noReference=$_POST['searchRef'];
    $noVille=$_POST['villeList'];
    $noType=$_POST['typeList'];
    $noJardin=$_POST['ChoixJardin'];
    $prix=$_POST['choixPrix'];
    $surfaceMin=$_POST['ChoixSurfaceMin'];
    $piecesMin=$_POST['ChoixPiecesMin'];

    $recherche=getBiensSearch($lepdo, $_POST['villeList'], 
    $_POST['typeList'],
    $_POST['ChoixJardin'],
    $_POST['choixPrix'],
    $_POST['ChoixSurfaceMin'],
    $_POST['ChoixPiecesMin'],
    $_POST['searchRef']);
    
    //header("Location: /index.php?page=lesbiens&Recherche=1&reference$noReference&noVille=$noVille&noType=$noType&noJardin=$noJardin&prix=$prix&ChoixSurfaceMin=$surfaceMin&ChoixPiecesMin=$piecesMin");
    exit;
}