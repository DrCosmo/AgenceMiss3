<?php

include '../modeles/fonctionsAccesBDD.php';

$pdo=connectionBDD();

include_once '../controleurs/formSearch.php';

$lesPrix=getPrix($pdo);

var_dump($lesPrix);