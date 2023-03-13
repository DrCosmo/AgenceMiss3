<?php



include_once 'inc/header.inc.php';

if (!isset($_GET['page']))
{
    $page="lesBiens";
}
else {
    $page = $_GET['page'];
}

switch($page){
 
	case 'lesBiens' :{
		include("vuescontroleurs/formSearch.php");
                include("vues/list.php");
                break;
	}
	case 'connexion' :{
		include("vues/formulaireConnexion.php");break; 
	}
        case 'ajoutBien' :{
                include("vuescontroleurs/ajoutBien.php");break;
        }
	
}

include_once 'inc/footer.inc.php';
?>
