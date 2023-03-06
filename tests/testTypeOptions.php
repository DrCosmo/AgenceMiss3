<?php
include "testconnexion.php";

$pdo=$conn;
$typeSql = $pdo->prepare('SELECT * FROM type');
$typeSql->execute();
$lesTypes = $typeSql->fetchAll();