<div class="thème_promo" id="themePromo">
    <label for="num_immat">Thème : </label>
    <select name="theme" id="theme">
        <?php
        if (isset($theme) && $theme == 0) {
            echo "<option selected value='0'>Veuillez sélectionner un thèmes</option>";
        } else {
            echo "<option value='0'>Veuillez sélectionner un thèmes</option>";
        }
        //connexion à la base de données et création de l'objet $bdd
        //qui sera utilisé pour faire les requêtes SQL
        include "../include/connexion_bd.php";

        //appel de la méthode query sur l'objet $bdd pour éxecuter la requête SQL qui récupère
        //toutes les valeurs de tous les enregistrements de la table.
        //le résultat retourné par la méthose query sera récupéré dans le tableau $lesEnregs
        try {
            $lesEnregs = $bdd->query("SELECT id, libelle FROM linkretz_viator_thematique order by libelle");
        } catch (PDOException $e) {
            //erreur grave : le script est arrêté avec l'instruction die
            die("Erreur de lecture des thematiques : " . $e->getMessage());
        }

        //la méthode query appelée a-t-elle retourné des enregistrements ?
        if ($lesEnregs->rowCount() > 0) {
            //oui. pour chaque enregistrement du tableau $lesEnregs, on crée
            //une option (=une ligne) dans la liste déroulante pour laquelle
            //le libellé de la thématique est affiché et l'id est placé dans
            //l'attribut value
            foreach ($lesEnregs as $enreg) {
                if (isset($theme) && $theme == $enreg->id) {
                    echo "<option selected value='" . htmlspecialchars($enreg->id, ENT_QUOTES, 'UTF-8') . "'>" . htmlspecialchars($enreg->libelle, ENT_QUOTES, 'UTF-8') . "</option>";
                } else {
                    echo "<option value='" . htmlspecialchars($enreg->id, ENT_QUOTES, 'UTF-8') . "'>" . htmlspecialchars($enreg->libelle, ENT_QUOTES, 'UTF-8') . "</option>";
                }
            }
        }
        ?>
    </select>
    <?php if(isset($msgErrSpe) && !empty(trim($msgErrSpe))) echo "<p class='msg_erreur'>",htmlspecialchars($msgErrSpe, ENT_QUOTES, 'UTF-8'),"</p>"; ?>   
</div>
<label for="intitule" id="labelIntitule">Intitulé : </label>
<input type="text" name="intitule" id="intitule" placeholder="Saisissez l'intitulé" value="<?php if (isset($intitule) && !empty(trim($intitule))) echo htmlspecialchars($intitule, ENT_QUOTES, 'UTF-8'); ?>" required />
<label for="duree" id="labelDuree">Durée (en jour) : </label>
<input type="text" name="duree" id="duree" placeholder="Saisissez la durée" value="<?php if (isset($duree) && !empty(trim($duree))) echo htmlspecialchars($duree, ENT_QUOTES, 'UTF-8'); ?>" required />
<label for="prix" id="labelPrix">Prix (en euro):</label>
<input type="text" name="prix" id="prix" placeholder="Saisissez le prix" value="<?php if (isset($prix) && !empty(trim($prix))) echo htmlspecialchars($prix, ENT_QUOTES, 'UTF-8'); ?>" required />
        
<input type="submit" name="valider" id="valider" value="Envoyer" />