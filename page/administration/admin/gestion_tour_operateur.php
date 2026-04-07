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
        <script src="../../../js/ControleSuppressionTourOperateur.js" defer></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />
	<title>Site de l'agence Linkretz - Gestion des tour-opérateurs</title>
	</head>
	<body>
        <?php 
            include "../../../include/header.html"; 
            include "../../../include/menu_admin.php"; 
        ?>
        <section class="jaune">
			<h2>Gestion des tour-opérateurs.<br>
            <?php echo ("Personne connectée : " . $prenom_nom . " (" . $fonction .")"); ?> </h2>
			<div class="button-container">
                <a href='./add/add_tour_operateur.php'>
                    <input type='button' name='AddTour' value='Ajouter un tour-opérateur'/>
                </a>
            </div><br>
                <div class="sec">
                <?php
                    include "../../../include/connexion_bd.php";

                    //exécution de la requête
                    try {
                        $lesEnregs = $bdd->query("SELECT linkretz_viator_tour_operateur.id, num_immat, nom, nom_en, libelle, libelle_en FROM linkretz_viator_tour_operateur JOIN linkretz_viator_specialite ON linkretz_viator_specialite.id = linkretz_viator_tour_operateur.id_specialite");
                    } catch (PDOException $e) {
                        die("Err BDSelect : erreur de lecture <br>Message :" . $e->getMessage());
                    }
                                
                    //on test si le SELECT a retourné les enregistrements
                    if($lesEnregs->rowCount() == 0) {
                        echo "Aucune tour-opérateur n'a été enregistré";
                    } else {
                        //on lit le tableau retourné et pour chaque enregistrement, on affiche le nom et la description
                        echo"<table><tr>
                            <th>Numéro Immatriculation</th>
                            <th>Nom Français</th>
                            <th>Nom Anglais</th>
                            <th>Spécialité</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                            </tr>";
                        foreach ($lesEnregs as $enreg) {
                            $libFr = htmlspecialchars($enreg->libelle);
                            $libEn = htmlspecialchars($enreg->libelle_en);
                            echo "
                            <tr>
                            <td>$enreg->num_immat</td>
                            <td>$enreg->nom</td>
                            <td>$enreg->nom_en</td>
                            <td data-fr=\"$libFr\" data-en=\"$libEn\">$enreg->libelle</td>
                            <td><a href='./edit/edit_tour_operateur.php?id=$enreg->id'><input type='button' name='EditTourOperateur' value='Modifier'/></a></td> 
                            <td><a href='./delete/delete_tour_operateur.php?id=$enreg->id' class='del'><input type='button' name='SupprTourOperateur' value='Supprimer'/>
                            </a></td></tr>";
                        }
                        echo"</table>";
                    }
                    // gestion_tour_operateur.php
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