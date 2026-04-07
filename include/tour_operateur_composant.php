<input type="hidden" name="id" value="<?php if(isset($_GET['id'])) echo $_GET['id']; ?>"/>

<label for="immatriculation">Immatriculation</label>
<input type="text" name="immatriculation" id="immatriculation" placeholder="Saisissez l'immatriculation du tour-opérateur." value="<?php if(isset($immatriculation)) echo $immatriculation;?>" />

<label for="nom">Nom Français</label>
<input type="text" name="nom" id="nom" placeholder="Saisissez le nom français du tour-opérateur." value="<?php if(isset($nom)) echo $nom;?>"/>

<label for="nom">Nom Anglais</label>
<input type="text" name="nom_en" id="nom_en" placeholder="Saisissez le nom anglais du tour-opérateur." value="<?php if(isset($nom_en)) echo $nom_en;?>"/>

<label for="description">Description Française</label>
<input type="text" name="description" id="description" placeholder="Saisissez la description française du tour-opérateur"value="<?php if(isset($description)) echo $description;?>"/>

<label for="description">Description Anglaise</label>
<input type="text" name="description_en" id="description_en" placeholder="Saisissez la description anglaise du tour-opérateur"value="<?php if(isset($description_en)) echo $description_en;?>"/>

<div class="form-group">
    <label>Spécialité</label>
    <select name="specialite" id="specialite">
        <?php
        echo "<option value='0'>Veuillez sélectionner une spécialité</option>";
            include "connexion_bd.php";
            try {
                $lesEnregs = $bdd->query("SELECT id, libelle FROM linkretz_viator_specialite");
            } catch (PDOException $e)  {

                die("Erreur de lecture des spécialités : " . $e->getMessage());
            }
            foreach ($lesEnregs as $enreg) {
            if (isset($specialites) && $specialites == $enreg->id) {
                echo "<option selected value='$enreg->id'>$enreg->libelle</option>";
            } else {
                echo "<option value='$enreg->id'>$enreg->libelle</option>";
            }
        }
        ?>
    </select>
</div>