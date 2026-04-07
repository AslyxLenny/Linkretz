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

        $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
        $nom = isset($_POST['nom']) ? trim($_POST['nom']) : '';
        $prenom = isset($_POST['prenom']) ? trim($_POST['prenom']) : '';
        $telephone = isset($_POST['telephone']) ? trim($_POST['telephone']) : '';
        $fonction = isset($_POST['fonction']) ? $_POST['fonction'] : '0';
        $profil = isset($_POST['profil']) ? $_POST['profil'] : '0';
        $compte = isset($_POST['compte']) ? trim($_POST['compte']) : '';
        $mot_de_passe = isset($_POST['hash']) ? $_POST['hash'] : '';
        
        // Déclaration de la constante
        $regexTelephone = "/^\+[0-9]{1,4}[0-9]{4,14}$/";

        //controle des valeurs saisies
        if (empty(trim($nom))) {
            $msg .= "Le nom est obligatoire.<br>";
        }

        if (empty(trim($prenom))) {
            $msg .= "Le prénom est obligatoire.<br>";
        }

        if (empty(trim($telephone))) {

            $msg = $msg . "Le téléphone est obligatoire.<br>"; 

        } else if (!preg_match($regexTelephone, $telephone)) {

            $msg .= "Le numéro de téléphone doit être au format international sans espace.<br>";
        }

        if ($fonction == '0') {
            $msg = $msg . "La selection d'une fonction est obligatoire.<br>"; 
        }

        if ($profil == '0') {
            $msg = $msg . "Le selection du profil est obligatoire.<br>"; 
        }
        
        if (empty($msg) == false) {
            $msg = "L'employé n'a pas été enregistré car les valeurs saisies sont incomplètes.<br>" . $msg;

        } else {
            try {
                // connexion à la base de données
                include("../../../../include/connexion_bd.php");
                
                // Instructions permettant l'update dans la table Employe
                $lesEnregs = $bdd->prepare("UPDATE linkretz_viator_employe SET nom =:nom, prenom=:prenom, idfonction=:idfonction, telephone=:telephone, compte=:compte, mot_de_passe=:mot_de_passe, code_profil=:code_profil WHERE id=:id");

                $lesEnregs->bindParam(':id', $id);
                $lesEnregs->bindParam(':nom', $nom);
                $lesEnregs->bindParam(':prenom', $prenom);
                $lesEnregs->bindParam(':idfonction', $fonction);
                $lesEnregs->bindParam(':telephone', $telephone);
                $lesEnregs->bindParam(':compte', $compte);
                $lesEnregs->bindParam(':mot_de_passe', $mot_de_passe);
                $lesEnregs->bindParam(':code_profil', $profil);
                
                // Exécution de la requête
                $lesEnregs->execute();
                $rowCount = $lesEnregs->rowCount();
                if($rowCount > 0) {
                $msg = "Les caractéristiques de l'employé ont bien été modifiées ($rowCount ligne(s) affectée(s))";
                } else {
                    $msg = "Aucune modification n'a été effectuée. Vérifiez l'ID de l'employé.";
                }

                // on indique dans la variable $msg que tout s'est bien passé
                $msg = "Les caractéristiques de l'employé ont bien été modifiées.";
            } catch (PDOException $e) {
                $msg = "Les caractéristiques de l'employé n'ont pas été enregistrées : " . $e->getMessage();
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
		<script src="../../../../js/ControleFormulaireEmploye.js" defer></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />
	<title>Site de l'agence Linkretz - Modification employé</title>
	</head>
	<body>
        <?php 
			include "../../../../include/header.html"; 
            include "../../../../include/menu_admin.php";
			if(isset($_GET['id']) && intval($_GET['id']) > 0) {
				$id = intval($_GET['id']);
			}
			include "../../../../include/connexion_bd.php"; 
			try {
				$lesEnregs = $bdd->prepare("SELECT nom, prenom, libelle, telephone, compte, code_profil, idfonction, mot_de_passe FROM linkretz_viator_employe JOIN linkretz_viator_fonction ON linkretz_viator_employe.idfonction = linkretz_viator_fonction.id WHERE linkretz_viator_employe.id = :id");

				$lesEnregs->bindValue(':id', $_GET['id'], PDO::PARAM_INT);

				$lesEnregs->execute();
			} catch (PDOException $e) {
				die("Erreur de lecture des fonctions : " . $e->getMessage());
			}

            if($lesEnregs->rowCount() > 0) {
                $employe = $lesEnregs->fetch();
                $nom = $employe->nom;
                $prenom = $employe->prenom;
                $telephone = $employe->telephone;
                $fonction = $employe->idfonction;
                $mot_de_passe = $employe->mot_de_passe;
                $code_profil = $employe->code_profil;
            }
			
		?>
        <section class="bleu">
			<h2>Modification d'un employé</h2>
			<div class="sec">
				<div id="container">
    			<form  method="POST" name="employeadd" id="employeadd">
					<?php
						include "../../../../include/employe_composant.php"
					?>
					<label for="mot_de_passe"></label>
        			<input type="hidden" name="hash" id="hash" value="<?php if(isset($mot_de_passe)) echo htmlspecialchars($mot_de_passe, ENT_QUOTES, 'UTF-8');?>"/>
                    <input type="hidden" name="id" id="id" value="<?php if(isset($_GET['id'])) echo intval($_GET['id']); ?>"/>
				<button type="submit" id=valider style="background-color: #5cb85c; color: white; width: 100%; padding: 10px; border: none;">Modifier l'employé</button>
				</form>
				<div id="message">
					<?php 
						if (isset($msg)) echo htmlspecialchars($msg, ENT_QUOTES, 'UTF-8'); 
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