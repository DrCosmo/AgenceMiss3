<?php
    include_once 'modeles/fonctionsAccesBDD.php';
    $pdo = connectionBDD();
?>

<div id="listerBiens">

    <?php
        foreach ($recherche as $unBien) {
    ?>

    <a href="?page=vuebien&reference=<?php echo $unBien["reference"];?>" class="lebien">
        <div class="left">
            <section class="title">
                <h1><?php echo $unBien["type_bien"]." ".$unBien['nbpiece']." pièces";?></h1>
                <h3><?php echo $unBien['prix']." €";?></h3>
            </section>
            <section class="infos">
                <div>
                    <h4>Surface</h4>
                    <span><?php echo $unBien['surface']?>m²</span>
                </div>
                <div>
                    <h4>Nombres de pièces</h4>
                    <span><?php echo $unBien['nbpiece']?> pièce</span>
                </div>
                <div>
                    <h4>Ville</h4>
                    <span><?php echo $unBien["ville_nom"]?></span>
                </div>
            </section>
            <section class="description">
                <h4>Description</h4>
                <p><?php echo $unBien['description']?></p>
            </section>
        </div>
        <img src="<?php echo $unBien['img']?>" alt="vueBien">
    </a>

    <?php } ?>

</div>