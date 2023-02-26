<?php
include "tests/testTypeOptions.php";
include "tests/testVilleOptions.php";
?>
<form action="tests/testGetBienForm.php" method="POST">
    <div class="searchVille">
        <label for="villeList">Ville : </label>
        <select name="villeList" id="villeList">
            <?php
            foreach($lesVilles as $ville){
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
            foreach($lesTypes as $type){
                ?>
                <option value="<?php echo $type['noType']?>"><?php echo $type['libelle']?></option>
                <?php
            }
            ?>
        </select>
    </div>
    <input type="submit" id='submit' name="submit" value="Rechercher">
</form>

<?php
?>