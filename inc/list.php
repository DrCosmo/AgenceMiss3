<?php
    include_once '../modeles/fonctionsAccesBDD.php';
    $pdo = connectionBDD();
?>
    <div id=listerBiens>
<?php
    include_once '../modeles/fonctionsAccesBDD.php';
    $lesBiens = getToutBiens($pdo);
    foreach ($lesBiens as $unBien){
        echo '<option value="'.'">'.'- '.$unBien['nbpiece'].',un(e) '.$unBien['surface'].' au prix de '.$unBien['prix'].'euros à '.$unBien['ville'].'</option>';
    }
    
?>
    </div>

