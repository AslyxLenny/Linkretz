<?php 
include "../../../../include/sec_admin.php"; 
// variable qui va contenir un message indiquant si l'enregistrement a été réalisé ou non dans la base de données
$msg = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // on vérifie si la variable globale $_POST qui est un tableau contient des éléments
    if (count($_POST) == 0) {
        // Le tableau est vide
        $msg = "Aucune donnée n'a été soumise";
    } else {

        extract($_POST);
        
        //controle des valeurs saisies
        if (empty(trim($immatriculation))) {
            $msg .= "L'immatriculation est obligatoire.<br>";
        }

        if (empty(trim($nom))) {
            $msg .= "Le nom du tour-opérateur est obligatoire.<br>";
        }

        if (empty(trim($nom_en))) {
            $msg .= "Le nom du tour-opérateur est obligatoire.<br>";
        }

        if (empty(trim($description))) {
            $msg = $msg . "La description française du tour-opérateur est obligatoire.<br>"; 
        }

        if (empty(trim($description_en))) {
            $msg = $msg . "La description anglaise du tour-opérateur est obligatoire.<br>"; 
        }

        if ($specialite == 0) {
            $msg = $msg . "La selection d'une spécialité est obligatoire.<br>"; 
        }

        if (empty($msg) == false) {
            $msg = "Le tour-opérateur n'a pas été enregistré car les valeurs saisies sont incomplètes.<br>" . $msg;

        } else {
            try {
                // connexion à la base de données
                include("../../../../include/connexion_bd.php");
                
                // Instructions permettant l'update dans la table tour_opérateur
                $lesEnregs = $bdd->prepare("UPDATE linkretz_viator_tour_operateur SET num_immat =:immatriculation, nom=:nom, nom_en=:nom_en, description=:description, description_en=:description_en, id_specialite=:specialite  WHERE id=:id");

                $lesEnregs->bindParam(':id', $id);
                $lesEnregs->bindParam(':immatriculation', $immatriculation);
                $lesEnregs->bindParam(':nom', $nom);
                $lesEnregs->bindParam(':nom_en', $nom_en);
                $lesEnregs->bindParam(':description', $description);
                $lesEnregs->bindParam(':description_en', $description_en);
                $lesEnregs->bindParam(':specialite', $specialite);

                // Exécution de la requête
                $lesEnregs->execute();

                $rowCount = $lesEnregs->rowCount();
                if($rowCount > 0) {
                $msg = "Les caractéristiques du tour-opérateur ont bien été modifiées ($rowCount ligne affectée)";
                } else {
                    $msg = "Aucune modification n'a été effectuée. Vérifiez l'ID de du tour-opérateur.";
                }
            } catch (PDOException $e) {
                $msg = "Les caractéristiques du tour-opérateur n'ont pas été enregistrées : " . $e->getMessage();
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<meta charset="UTF-8">
	<link rel="icon" type="image/x-icon" href="../../../../logo_linkretz.ico">
		<meta name ="viewport" content="width=device-width, initial-scale-1.0">
		<meta name="description" content="Site de l'agence Linkretz">
		<link rel="stylesheet" href="../../../../css/style.css">
		<script src="../../../../js/ControleFormulaireTourOperateur.js" defer></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />
	<title>Site de l'agence Linkretz - Modification d'un tour-opérateur</title>
	</head>
	<body>
        <?php 
			include "../../../../include/header.html"; 
            include "../../../../include/menu_admin.php";
			if(isset($_GET['id]']) == true && $_GET['id'] > 0) {
				extract($_GET);
			}
			include "../../../../include/connexion_bd.php"; 
			try {
				$lesEnregs = $bdd->prepare("SELECT num_immat, nom, nom_en, description, description_en, id_specialite FROM linkretz_viator_tour_operateur JOIN linkretz_viator_specialite ON linkretz_viator_tour_operateur.id_specialite = linkretz_viator_specialite.id WHERE linkretz_viator_tour_operateur.id = :id");

				$lesEnregs->bindValue(':id', $_GET['id'], PDO::PARAM_INT);

				$lesEnregs->execute();
			} catch (PDOException $e) {
				die("Erreur de lecture des tour-opérateurs : " . $e->getMessage());
			}

				if($lesEnregs->rowCount() > 0) {
					$touroperateur = $lesEnregs->fetch();
					$id = $touroperateur->id;
					$immatriculation = $touroperateur->num_immat;
					$nom = $touroperateur->nom;
                    $nom_en = $touroperateur->nom_en;
					$description = $touroperateur->description;
                    $description_en = $touroperateur->description_en;
					$specialite = $touroperateur->id_specialite;
				}
		?>
        <section class="bleu">
			<h2>Modification d'un tour-opérateur</h2>
			<div class="sec">
				<div id="container">
    			<form  method="POST" name="touroperateuradd" id="touroperateuradd">
					<?php
						include "../../../../include/tour_operateur_composant.php"
					?>
				<button type="submit" id=valider style="background-color: #5cb85c; color: white; width: 100%; padding: 10px; border: none;">Modifier le tour-opérateur</button>
				</form>
				<div id="message">
					<?php 
						if (isset($msg)) echo $msg; 
					?>
				</div>
			</div>
        </section>
        <?php 
            include "../../../../include/footer.html"; 
        ?>
	<script src="../../../../js/Traduction.js" defer></script>
</body>
</html>