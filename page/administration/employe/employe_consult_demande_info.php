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
	<title>Site de l'agence Linkretz - Demande d'information</title>
	</head>
	<body>
    <?php 
		include "../../../include/header.html"; 
        include "../../../include/menu_employe.php"; 
	?>
        <section class="bleu">
			<h2>Liste des demandes d'information</h2>
			<div class="sec">
                <?php
                    include "../../../include/connexion_bd.php";

                    //exécution de la requête.
                    try {
                        $lesEnregs = $bdd->query("SELECT CONCAT(nom, ' ', prenom) AS nom_prenom, email, telephone, IF(deja_contacte = 'o', 'Oui', 'Non') AS deja_contacte, libelle, libelle_en, besoin FROM linkretz_viator_demande_info JOIN linkretz_viator_pays on linkretz_viator_demande_info.code_pays = linkretz_viator_pays.code");
                    } catch (PDOException $e) {
                        die("Err BDSelect : erreur de lecture <br>Message :" . $e->getMessage());
                    }
                                
                    //on test si le SELECT a retourné les enregistrements
                    if($lesEnregs->rowCount() == 0) {
                        echo "Aucune demande d'information n'a été enregistré";
                    } else {
                        //on lit le tableau retourné et pour chaque enregistrement.
                        echo"<table><tr>
                            <th>Nom et Prénom</th>
                            <th>Mail</th>
                            <th>Téléphone</th>
                            <th>A déjà contacté l'agence</th>
                            <th>Pays choisi</th>
                            <th>Besoin</th>
                            </tr>";
                        foreach ($lesEnregs as $enreg) {
                            $paysFr = htmlspecialchars($enreg->libelle, ENT_QUOTES, 'UTF-8');
                            $paysEn = htmlspecialchars($enreg->libelle_en, ENT_QUOTES, 'UTF-8');
                            echo "
                            <tr><td>" . htmlspecialchars($enreg->nom_prenom, ENT_QUOTES, 'UTF-8') . "</td> <td>" . htmlspecialchars($enreg->email, ENT_QUOTES, 'UTF-8') . "</td> <td>" . htmlspecialchars($enreg->telephone, ENT_QUOTES, 'UTF-8') . "</td> <td data-fr=\"" . htmlspecialchars($enreg->deja_contacte, ENT_QUOTES, 'UTF-8') . "\" data-en=\"" . htmlspecialchars($enreg->deja_contacte, ENT_QUOTES, 'UTF-8') . "\">" . htmlspecialchars($enreg->deja_contacte, ENT_QUOTES, 'UTF-8') . "</td> <td data-fr=\"$paysFr\" data-en=\"$paysEn\">" . htmlspecialchars($enreg->libelle, ENT_QUOTES, 'UTF-8') . "</td> <td>" . htmlspecialchars($enreg->besoin, ENT_QUOTES, 'UTF-8') . "</td></tr>";
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