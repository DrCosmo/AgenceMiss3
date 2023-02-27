<?php
    $server = "mysql:host=localhost;dbname=agence_immo";
    $username = "CASLOGEZ";
    $password = "CASLOGEZ";

    $conn = null;
    try {

    $conn = new PDO($server, $username, $password);

    } catch(PDOException $e) {

        echo "Connection failed: " . $e->getMessage();

    }



?>