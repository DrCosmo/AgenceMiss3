
<form action="" method="POST" id="formSearch">
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
    <div class="chooseJardin">
        <label for="ChoixJardin">Jardin : </label>
        <select name="ChoixJardin" id="ChoixJardin">
            <option value= "1">oui</option>
            <option value= "0">non</option>
        </select>
    </div>
    <div class="choosePrix">
        <label for="ChoixPrixMin">Prix Minimum : </label>
        <input Type="number" name = "ChoixPrixMin">
        <label for="ChoixPrixMax">Prix Maximum : </label>
        <input Type="number" name = "ChoixPrixMax">
    </div>
    <input type="submit" id="submit" name="submit" value="Rechercher">
</form>
