<?php
include "testconnexion.php";

$pdo=$conn;
$villeSql = $pdo->prepare('SELECT * FROM ville');
$villeSql->execute();
$lesVilles = $villeSql->fetchAll();