<?php

include "modeles/fonctionsAccesBDD.php";

$lepdo=connectionBDD();

include_once "vues/search.php";

if(isset($_POST['submit'])){
    $noVille=$_POST['villeList'];
    $noType=$_POST['typeList'];
    getBiens($lepdo, $_POST['villeList'], $_POST['typeList']);
    
    header("Location: ?NoVille=$noVille&NoType=$noType");
}
?>