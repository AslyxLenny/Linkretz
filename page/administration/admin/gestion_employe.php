<?php 
include "../../../include/sec_admin.php"; 
$prenom_nom = $_SESSION['prenom_nom'];
$fonction = $_SESSION['fonction'];
?>
<!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<meta charset="UTF-8">
	<link rel="icon" type="image/x-icon" href="../../../logo_linkretz.ico">
		<meta name ="viewport" content="width=device-width, initial-scale-1.0">
		<meta name="description" content="Site de l'agence Linkretz">
		<link rel="stylesheet" href="../../../css/style.css">
        <script src="../../../js/ControleSuppressionEmploye.js" defer></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />
	<title>Site de l'agence Linkretz - Gestion des employés</title>
	</head>
	<body>
        <?php 
			include "../../../include/header.html"; 
            include "../../../include/menu_admin.php"; 
		?>
        <section class="bleu">
			<h2>Gestion des employés.<br>
            <?php echo ("Personne connectée : " . $prenom_nom . " (" . $fonction .")"); ?> </h2>
			<div class="button-container">
                <a href='./add/add_employe.php'>
                    <input type='button' name='AddEmp' value='Ajouter un employé'/>
                </a>
            </div><br>
            <div class="sec">
                <?php
                    include "../../../include/connexion_bd.php";

                    //exécution de la requête.
                    try {
                        $lesEnregs = $bdd->query("SELECT linkretz_viator_employe.id, nom, prenom, libelle, libelle_en, telephone, code_profil FROM linkretz_viator_employe JOIN linkretz_viator_fonction on linkretz_viator_employe.idfonction = linkretz_viator_fonction.id");
                    } catch (PDOException $e) {
                        die("Err BDSelect : erreur de lecture <br>Message :" . $e->getMessage());
                    }
                                
                    //on test si le SELECT a retourné les enregistrements
                    if($lesEnregs->rowCount() == 0) {
                        echo "Aucune employé n'a été enregistré";
                    } else {
                        //on lit le tableau retourné et pour chaque enregistrement, on affiche le nom et la description
                        echo"<table><tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Fonction</th>
                            <th>Téléphone</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                            </tr>";
                        foreach ($lesEnregs as $enreg) {
                            $libFr = htmlspecialchars($enreg->libelle);
                            $libEn = htmlspecialchars($enreg->libelle_en);
                            echo "
                            <tr><td>$enreg->nom</td> <td>$enreg->prenom</td> <td data-fr=\"$libFr\" data-en=\"$libEn\">$enreg->libelle</td> 
                            <td>$enreg->telephone</td> 
                            <td><a href='./edit/edit_employe.php?id=$enreg->id' class='edit'><input type='button' name='EditEmp' value='Modifier'/></a></td> 
                            <td><a href='./delete/delete_employe.php?id=$enreg->id' class='del'><input type='button' name='SupprEmp' value='Supprimer'/></a></td> </tr>";
                        }
                        echo"</table>";
                    }
                    // gestion_employe.php
                    if (isset($_GET['msg'])) {
                        // Décodage de l’URL et protection contre les injections HTML
                        $message = htmlspecialchars(urldecode($_GET['msg']), ENT_QUOTES, 'UTF-8');
                        echo '<div class="alert-message">' . $message . '</div>';
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