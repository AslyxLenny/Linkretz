<?php 
include "../../../include/sec_employ.php"; 
?>
<!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<meta charset="UTF-8">
	<link rel="icon" type="image/x-icon" href="../../../logo_linkretz.ico">
		<meta name ="viewport" content="width=device-width, initial-scale-1.0">
		<meta name="description" content="Site de l'agence Linkretz">
		<link rel="stylesheet" href="../../../css/style.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />
	<title>Site de l'agence Linkretz - Liste des employés</title>
	</head>
	<body>
    <?php 
		include "../../../include/header.html"; 
        include "../../../include/menu_employe.php"; 
	?>
        <section class="bleu">
			<h2>Liste des employés</h2>
			<div class="sec">
                <?php
                    include "../../../include/connexion_bd.php";

                    //exécution de la requête.
                    try {
                        $lesEnregs = $bdd->query("SELECT nom, prenom, libelle, libelle_en, telephone FROM linkretz_viator_employe JOIN linkretz_viator_fonction on linkretz_viator_employe.idfonction = linkretz_viator_fonction.id");
                    } catch (PDOException $e) {
                        die("Err BDSelect : erreur de lecture <br>Message :" . $e->getMessage());
                    }
                                
                    //on test si le SELECT a retourné les enregistrements
                    if($lesEnregs->rowCount() == 0) {
                        echo "Aucune horaire n'a été enregistré";
                    } else {
                        //on lit le tableau retourné et pour chaque enregistrement, on affiche le nom et la description
                        echo"<table><tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Fonction</th>
                            <th>Téléphone</th>
                            </tr>";
                        foreach ($lesEnregs as $enreg) {
                            $libFr = htmlspecialchars($enreg->libelle);
                            $libEn = htmlspecialchars($enreg->libelle_en);
                            echo "
                            <tr><td>$enreg->nom</td> <td>$enreg->prenom</td> <td data-fr=\"$libFr\" data-en=\"$libEn\">$enreg->libelle</td> <td>$enreg->telephone</td></tr>";
                        }
                        echo"</table>";
                    }
                ?>
            </div>
        </section>
        <?php 
            include "../../../include/footer.html"; 
        ?>
	<script src="../../../js/Traduction.js" defer></script>
</body>
</html>