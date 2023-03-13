<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\styles.css">
    <title>Agence immobilière de NBB</title>
    </head>
    
    <body>
        <header>
            <h1>
                Agence Immo
            </h1>
            <nav>
                <ul>
                    <li><a href="?page=lesBiens" class="<?php if($page=="lesBiens"){ echo'navSelected'; }?>">Les biens</a></li>
                    <li><a href="?page=connexion" class="<?php if($page=="lesBiens"){ echo'navSelected'; }?>">Connexion</a></li>
                    <li><a href="?page=ajoutBien" class="<?php if($page=="lesBiens"){ echo'navSelected'; }?>">Ajouter un bien</a></li>
                </ul>
            </nav>
        </header>
        <section class="midpage">
