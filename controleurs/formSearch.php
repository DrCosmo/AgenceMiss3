<?php
include_once "modeles/fonctionsAccesBDD.php";

$lepdo=connectionBDD();

include_once "vues/search.php";

$today = date('y-m-j');

if(isset($_POST['submit'])){

    $noReference=$_POST['searchRef'];
    $noVille=$_POST['villeList'];
    $noType=$_POST['typeList'];
    $noJardin=$_POST['ChoixJardin'];
    $prix=$_POST['choixPrix'];
    $surfaceMin=$_POST['ChoixSurfaceMin'];
    $piecesMin=$_POST['ChoixPiecesMin'];


    if ($_POST['choixPrix']!=NULL || $_POST['ChoixSurfaceMin']!=NULL || $_POST['villeList']!=NULL) {
        if ($_POST['choixPrix']=='none') {
            $prixSelect = NULL;
        }
        if ($_POST['villeList']=='none') {
            $villeSelect = NULL;
        }
        if(!isset($_SESSION['nom'])){
            insertRecherche($lepdo, $today, $prixSelect,$_POST['ChoixSurfaceMin'], $villeSelect);
        }
    }

    $recherche=getBiensSearch($lepdo, $_POST['villeList'], 
    $_POST['typeList'],
    $_POST['ChoixJardin'],
    $_POST['choixPrix'],
    $_POST['ChoixSurfaceMin'],
    $_POST['ChoixPiecesMin'],
    $_POST['searchRef']);
}else {
    $recherche=getToutBiens($lepdo);
}
?>