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

function formConnexion($name,$passwd){

    $bd=connectionBDD();
$infoUser=$bd ->prepare("SELECT hachage FROM membres WHERE nom=?");
$infoUser->execute(array($name));
$infoUser=$infoUser->fetch();


 if (isset($infoUser['hachage'])) {
     if(password_verify($passwd, $infoUser['hachage'])){
        login($name,$bd);
     }
     else{
        
        echo "Nom d'utilisateur ou mot de passe incorrect";
     }
    } else {
        
        echo "Nom d'utilisateur de passe incorrect";
    }
}

function login($name,$bd){
    $infoUser=$bd ->prepare("SELECT nom,prenom,hachage FROM membres WHERE nom=?");
    $infoUser->execute(array($name));
    $infoUser=$infoUser->fetch();

    $_SESSION['nom'] = $infoUser['nom'];
    $_SESSION['prenom'] = $infoUser['prenom'];
    header('Location: index.php');
}
function getToutBiens($pdo){
    $sql= "SELECT description,img,jardin,nbpiece,prix,reference,surface,type,ville FROM bien INNER JOIN type ON type = noType ";
    $getBien = $pdo->prepare($sql);
    $getBien->execute();
    $biens=$getBien->fetchAll();
    return $biens;
}
