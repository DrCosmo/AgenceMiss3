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

function getBiensSearch($pdo, $ville, $type){
    $getBien = $pdo->prepare("SELECT nbpiece,jardin,surface,prix,ville,type,Description,Img FROM bien WHERE type= :typeChoisi and ville= :villeChoisi");
    $getBien->bindValue(':typeChoisi' , $type);
    $getBien->bindValue(':villeChoisi' , $ville);
    $executionOk = $getBien->execute();
    $lesBiens=$getBien->fetchAll();
    header("Location: ?NoVille=$ville&NoType=$type");
    return $lesBiens;
}