<?php
include_once '../autres/verifBienReference.php';
    
    $reference = $_GET['reference'];
    $leBien = getBienByReference($db, $reference);
?>

<section class="midpage">
        <div class="top">
            <div class="topleft">
                <div class="title">
                    <h1>
                    <?php echo $leBien["type_bien"]." ".$leBien["nbpiece"]." pièces";?></h1>
                
                    </h1>
                    <span>
                    <h3><?php echo $leBien['prix']." €";?></h3>
                        
                    </span>
                </div>

                <div class="caracteristiques">
                    <section>
                        <h2>L'essentiel</h2>
                        <span>2 chambre</span>
                        <span>1 bureau</span>
                        <span>Terrain 1 675 m²</span>
                    </section>
                    <section>
                        <h2>L'intérieur</h2>
                        <span>Cheminée</span>
                        <span>Climatisation</span>
                        <span>Alarme</span>
                    </section>
                    <section>
                        <h2>L'extérieur</h2>
                        <span>Piscine</span>
                        <span>Terrasse</span>
                        <span>Jardin</span>
                    </section>
                </div>
                </div>
                <div class="slider">
                <img src="../<?php echo $leBien['img']?>" alt="Le bien">
            </div>

        <article>
            <h1>
                Description
            </h1>
            <p>
            <?php echo $leBien['description'];?>
                            </p>
        </article>
        <aside class="sticky">
            <h1>Une question sur le bien? Contactez-nous !</h1>
            <a href="../../contact.html">
                <section class="agenceAutrice">
                    <img src="../../images/icon_house.png" alt="logo_agence">
                    <h2>Agence Maintabio</h2>
                </section>
            </a>
        </aside>
    </section>
