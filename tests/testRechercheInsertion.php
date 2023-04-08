<?php

include_once "../modeles/fonctionsAccesBDD.php";

$lepdo=connectionBDD();

$date='2025';
$prix='1';

//$sql=insertRecherche($lepdo, $date, NULL);

//var_dump($sql);

echo "</br></br>";

$stats=getStatsPrix($lepdo);

var_dump($stats);

$nbP=getNbStatsPrix($lepdo);

echo "</br></br></br>";

var_dump($nbP);

echo "</br></br></br>NB de recherche sur une tranche de prix au total : ".$nbP['COUNT(tranchePrix)']."</br></br></br>";

foreach ($stats as $uneStats) {
    echo "La tranche de prix : ".$uneStats['tranchePrix'];
    echo "</br>";
    echo "Nb qu'il y a : ".$uneStats['COUNT(tranchePrix)'];
    echo "</br></br>";
}