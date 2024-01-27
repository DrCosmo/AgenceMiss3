<?php

include_once "../modeles/fonctionsAccesBDD.php";

$lepdo=connectionBDD();

$today = date('y-m-j');
$prix='1';
$ville='3';
$surf='99';

echo 'all set';

//insertRecherche($lepdo, $today, $prix, $surf, $ville);
insertRecherche($lepdo, $today, NULL, NULL, NULL);

echo 'insertion done';

/*
//$sql=insertRecherche($lepdo, $today, NULL, NULL);

//var_dump($sql);

*/