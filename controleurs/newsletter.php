<?php
include_once 'modeles/fonctionsAccesBDD.php';
include_once "vues/newsletter.php";


if(isset($_SESSION['name'])){
    header('Location: ../index.php');
    exit;
}

if(!empty($_POST)){
    extract($_POST);

    if(isset($_POST['inscription'])){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $email=$_POST['email'];
        $passwd=$_POST['passwd'];
        $passwd=password_hash($passwd, PASSWORD_ARGON2ID);
        formInscription($prenom,$nom,$email,$passwd);
    }
}
?>