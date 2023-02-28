<?php
include_once 'fonctionsAccesBDD.php';

 /* function verification(){
  $lePdo = connexionBDD();
  $infoUser=$lePdo ->prepare("SELECT nom,hachage FROM membres WHERE nom='$name' and hachage='$passwd'");
  if($found['nom']==$name && $found['hachage']==$passwd){
  header("location: index.php");
  }
  }
 */
  /*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$name=$_POST['name'];
$passwd=$_POST['passwd'];

$bd= connexionBDD();
 
 
 
$infoUser=$bd ->prepare("SELECT nom,prenom,hachage FROM membres WHERE nom='$name' and hachage='$passwd'");
$infoUser->execute();
$row=$infoUser->rowCount();

 if ($row > 0) {
     session_start();
     $_SESSION['username'] = $name;
     $_SESSION['prenom'] = $prenom;
        header("Location: ../index.php");
        exit();
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect";
    }

    deconnexionBDD($bd);
  
