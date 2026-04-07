<label for="nom">Nom</label>
<input type="text" name="nom" id="nom" placeholder="Saisissez le nom de l'employé." value="<?php if(isset($nom)) echo htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');?>"/>

<label for="prenom">Prénom</label>
<input type="text" name="prenom" id="prenom" placeholder="Saisissez le prénom de l'employé." value="<?php if(isset($prenom)) echo htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');?>" />

<label for="telephone">Téléphone</label>
<input type="tel" name="telephone" id="telephone" placeholder="Saisissez le numéro de téléphone de l'employé. (Format Internationnal sans espaces)" pattern="^\+[0-9]{1,4}[0-9]{4,14}$" title="Format: +indicatif suivi des numéros (ex: +33 6 12 34 56 78)"  value="<?php if(isset($telephone)) echo htmlspecialchars($telephone, ENT_QUOTES, 'UTF-8');?>"/>

<div class="form-group">
    <label>Fonction de l'employé</label>
    <select name="fonction" id="fonction">
        <?php
        echo "<option value='0'>Veuillez sélectionner la fonction de l'employé</option>";
            include "connexion_bd.php";
            try {
                $lesEnregs = $bdd->query("SELECT id, libelle FROM linkretz_viator_fonction");
            } catch (PDOException $e)  {

                die("Erreur de lecture des fonctions : " . $e->getMessage());
            }
            foreach ($lesEnregs as $enreg) {
            if (isset($fonction) && $fonction == $enreg->id) {
                echo "<option selected value='" . htmlspecialchars($enreg->id, ENT_QUOTES, 'UTF-8') . "'>" . htmlspecialchars($enreg->libelle, ENT_QUOTES, 'UTF-8') . "</option>";
            } else {
                echo "<option value='" . htmlspecialchars($enreg->id, ENT_QUOTES, 'UTF-8') . "'>" . htmlspecialchars($enreg->libelle, ENT_QUOTES, 'UTF-8') . "</option>";
            }
        }
        ?>

    </select>
</div>
<div class="form-group">
    <label>Profil</label>
    <input type="radio" name="profil" id="profil" value="E" <?php echo $code_profil === 'E' ? 'checked' : ''; ?>/>Employé (non-administrateur) 
    <input type="radio" name="profil" id="profil" value="A" <?php echo $code_profil === 'A' ? 'checked' : ''; ?>/> Administrateur
</div>