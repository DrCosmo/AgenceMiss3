<?php

include "../modeles/fonctionsAccesBDD.php";

$lepdo=connectionBDD();

include_once "../vues/search.php";

echo "</br></br></br>";

if(isset($_POST['submit'])){

    $noReference=$_POST['searchRef'];
    echo '</br>Ref : ';
    var_dump($noReference);
    $noVille=$_POST['villeList'];
    echo '</br>Ville : ';
    var_dump($noVille);
    $noType=$_POST['typeList'];
    echo '</br>Type : ';
    var_dump($noType);
    $noJardin=$_POST['ChoixJardin'];
    echo '</br>Jardin : ';
    var_dump($noJardin);
    $prix=$_POST['choixPrix'];
    echo '</br>Prix : ';
    var_dump($prix);
    $surfaceMin=$_POST['ChoixSurfaceMin'];
    echo '</br>Surface : ';
    var_dump($surfaceMin);
    $piecesMin=$_POST['ChoixPiecesMin'];
    echo '</br>Pieces : ';
    var_dump($piecesMin);

    $recherche=getBiensSearch($lepdo, $_POST['villeList'], 
    $_POST['typeList'],
    $_POST['ChoixJardin'],
    $_POST['choixPrix'],
    $_POST['ChoixSurfaceMin'],
    $_POST['ChoixPiecesMin'],
    $_POST['searchRef']);

    echo "</br></br></br>";

    var_dump($recherche);

    // header("Location: ?hello");
    
    header("Location: ?page=lesbiens&Recherche=1&reference$noReference&noVille=$noVille&noType=$noType&noJardin=$noJardin&prix=$prix&ChoixSurfaceMin=$surfaceMin&ChoixPiecesMin=$piecesMin");
}