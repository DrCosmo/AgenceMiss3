<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Agence immobilière de NBB</title>
    </head>
    
    <body>
        <?php
            
            include_once 'autres\verifConnexion.php';
            include_once "vues\search.php";
        ?>
    