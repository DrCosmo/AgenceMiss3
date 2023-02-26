<?php
include "testconnexion.php";

$pdo=$conn;

if(isset($_POST['submit'])){
    $noville=$_POST['villeList'];
    $notype=$_POST['typeList'];
    $sql= "SELECT * FROM bien WHERE type=$notype and ville=$noville";
    $getBien = $pdo->prepare($sql);
    $getBien->execute();
    $lesBiens=$getBien->fetchAll();

    header("Location: ../index.php?NoVille=$noville/NoType=$notype");
}
