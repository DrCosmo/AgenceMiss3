<?php

include_once '../modeles/fonctionsAccesBDD.php';

$pdo=connectionBDD();

include_once '../controleurs/formSearch.php';

$Surfaces=getSurface($pdo);
var_dump($Surfaces);
foreach (getStatsPrix($lepdo) as $uneStat) {
    echo "['".$uneStat['prixMin']."',".$uneStat['COUNT(tranchePrix)']."],";
}