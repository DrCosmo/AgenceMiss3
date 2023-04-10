<?php

include_once "../modeles/fonctionsAccesBDD.php";

$lepdo=connectionBDD();

$date='2025';
$prix='1';

//$sql=insertRecherche($lepdo, $date, NULL);

//var_dump($sql);

echo "</br></br>";

$statSurface=getSurface($lepdo);

$stats=getStatsPrix($lepdo);

var_dump($stats);
echo"Stat surface:";
var_dump($statSurface);

$nbP=getNbStatsPrix($lepdo);

echo "</br></br></br>";

var_dump($nbP);

echo "</br></br></br>NB de recherche sur une tranche de prix au total : ".$nbP['COUNT(tranchePrix)']."</br></br></br>";

foreach ($stats as $uneStats) {
    echo "La tranche de prix : ".$uneStats['prixMin']."--".$uneStats['prixMax'];
    echo "</br>";
    echo "Nb qu'il y a : ".$uneStats['COUNT(tranchePrix)'];
    echo "</br></br>";
}
echo"Toutes les surfaces:";
foreach ($statSurface as $uneStatSurface) {
    echo "Surface : ".$uneStatSurface['surface'];
    echo "</br>";
}