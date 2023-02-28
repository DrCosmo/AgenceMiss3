<?php

function connectionBDD(){

    $server = "mysql:host=localhost;dbname=Agence_immo";
    $username = "CASLOGEZ";
    $password = "CASLOGEZ";
    
    try {
        $conn = new PDO($server, $username, $password);
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}

function getVilles($pdo){

    $villeSql = $pdo->prepare('SELECT noVille,libelle FROM ville');
    $villeSql->execute();
    $lesVilles = $villeSql->fetchAll();
    
    return $lesVilles;
}

function getTypes($pdo){

    $typeSql = $pdo->prepare('SELECT noType,libelle FROM type');
    $typeSql->execute();
    $lesTypes = $typeSql->fetchAll();
    
    return$lesTypes;
}

function getBiens($pdo, $ville, $type){
    $sql= "SELECT nbpiece,jardin,surface,prix,ville,type,Description,Img FROM bien WHERE type=$type and ville=$ville";
    $getBien = $pdo->prepare($sql);
    $getBien->execute();
    $lesBiens=$getBien->fetchAll();

    return $lesBiens;
}