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

        $immatriculation = isset($_POST['immatriculation']) ? trim($_POST['immatriculation']) : '';
        $nom = isset($_POST['nom']) ? trim($_POST['nom']) : '';
        $nom_en = isset($_POST['nom_en']) ? trim($_POST['nom_en']) : '';
        $description = isset($_POST['description']) ? trim($_POST['description']) : '';
        $description_en = isset($_POST['description_en']) ? trim($_POST['description_en']) : '';
        $specialite = isset($_POST['specialite']) ? $_POST['specialite'] : '0';

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
                
                // Instructions permettant l'ajout dans la table tour-opérateur
                $lesEnregs = $bdd->prepare("INSERT INTO linkretz_viator_tour_operateur (num_immat, nom, nom_en, description, description_en, id_specialite) 
                VALUES (:immatriculation, :nom, :nom_en, :description, :description_en, :specialite)");
                
                $lesEnregs->bindParam(':immatriculation', $immatriculation);
                $lesEnregs->bindParam(':nom', $nom);
                $lesEnregs->bindParam(':nom_en', $nom_en);
                $lesEnregs->bindParam(':description', $description);
                $lesEnregs->bindParam(':description_en', $description_en);
                $lesEnregs->bindParam(':specialite', $specialite);

                
                // Exécution de la requête
                $lesEnregs->execute();
        
                // on indique dans la variable $msg que tout s'est bien passé
                $msg = "Les caractéristiques du tour-opérateur ont bien été enregistrées";

                //réinitialisation des composants graphiques
                $immatriculation = "";
                $nom = "";
                $nom_en = "";
                $description = "";
                $description_en = "";
                $specialite = "0";

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
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />
	<title>Site de l'agence Linkretz - Ajouter un tour-opérateur</title>
	</head>
	<body>
        <?php 
			include "../../../../include/header.html"; 
            include "../../../../include/menu_admin.php"; 
		?>
        <section class="bleu">
			<h2>Ajout d'un tour-opérateur</h2>
			<div id="container">
            <script src="../../../../js/ControleFormulaireTourOperateur.js" defer></script>
                <form  method="POST" name="touroperateuradd" id="touroperateuradd">
                    <?php include "../../../../include/tour_operateur_composant.php" ?>
                    <button type="submit" id=valider style="background-color: #5cb85c; color: white; width: 100%; padding: 10px; border: none;">Enregistrer</button>
                </form>
                <div id="message">
                <?php if (isset($msg)) echo htmlspecialchars($msg, ENT_QUOTES, 'UTF-8'); ?>
            </div>
        </section>
        
        <?php 
            include "../../../../include/footer.html"; 
        ?>
	<script src="../../../../js/Traduction.js" defer></script>
</body>
</html>