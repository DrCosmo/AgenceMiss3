<?php
    $server = "mysql:host=localhost:3306;dbname=agence_immo";
    $username = "root";
    $password = "";

    $conn = null;
    try {

    $conn = new PDO($server, $username, $password);

    } catch(PDOException $e) {

        echo "Connection failed: " . $e->getMessage();

    }



?>