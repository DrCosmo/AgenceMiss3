<?php
include "modeles/fonctionsAccesBDD.php";
$lepdo=connectionBDD();
?>
<form action="" method="POST">
    <div class="searchVille">
        <label for="villeList">Ville : </label>
        <select name="villeList" id="villeList">
            <?php
            foreach(getVilles($lepdo) as $ville){
                ?>
                <option value="<?php echo $ville['noVille']?>"><?php echo $ville['libelle']?></option>
                <?php
            }
            ?>
        </select>
    </div>
    <div class="chooseType">
        <label for="typelist">Type : </label>
        <select name="typeList" id="typelist">
            <?php
            foreach(getTypes($lepdo) as $type){
                ?>
                <option value="<?php echo $type['noType']?>"><?php echo $type['libelle']?></option>
                <?php
            }
            ?>
        </select>
    </div>
    <input type="submit" id="submit" name="submit" value="Rechercher">
</form>

<?php
if(isset($_POST['submit'])){
    $noVille=$_POST['villeList'];
    $noType=$_POST['typeList'];
    getBiens($lepdo, $_POST['villeList'], $_POST['typeList']);
    
    header("Location: index.php?NoVille=$noVille&NoType=$noType");
}
?>