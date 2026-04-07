<?php 
// démarrage de la session
session_start();
// on vérifie si la session profil_util existe et si elle contient E ou A
if ((isset($_SESSION['profil_utilisateur']) == false || $_SESSION['profil_utilisateur'] != "E") && (isset($_SESSION['profil_utilisateur']) == false || $_SESSION['profil_utilisateur'] != "A")) {
    header("Location:/viator/linkretz/page/connexion.php");
}

include "../../../../include/connexion_bd.php"; 

try {
    $lesEnregs = $bdd->prepare("SELECT mot_de_passe FROM linkretz_viator_employe WHERE linkretz_viator_employe.id = :id");

    $id = $_SESSION['id'];

    $lesEnregs->bindValue(':id', $id);

    $lesEnregs->execute();

    $enreg = $lesEnregs->fetch();

} catch (PDOException $e) {
    die("Erreur de lecture des fonctions : " . $e->getMessage());
}

if ($enreg == false) {
// le SELECT n'a pas retourné d'enregistrement : on affiche un message d'erreur dans $msg
    $msg = $msg . "Erreur";
} else {
    // On récupère le hash du mot de passe
    $mot_de_passe = $enreg->mot_de_passe;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // on vérifie si la variable globale $_POST qui est un tableau contient des éléments
    if (count($_POST) == 0) {
        // Le tableau est vide
        $msg = "Aucune donnée n'a été soumise";
    } else {

        extract($_POST);
        
        // Déclaration de la constante
        $regexMdp = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\w\s]).{8,}$/";

        //controle des valeurs saisies
        if (!preg_match($regexMdp, $newpassword)) {

            $msg .= "Le mot de passe doit contenir au minimum 8 caractères, 1 majuscule, 1 minuscule, 1 chiffre et 1 caractère spéciale.<br>";
        }
        
        if($newpassword != $checknewpassword) {
            $msg .= "Les mot de passe ne sont pas identiques.<br>";
        }

        if (password_verify($currentpassword, $mot_de_passe) == false) {
            $msg .= "Le mot de passe actuel est incorrect.<br>";
        }
        
        if (empty($msg) == false) {
            $msg = $msg . "Le mot de passe n'a pas été enregistré car les valeurs saisies sont incorrectes.<br>";

        } else {
            try {
                // connexion à la base de données
                include("../../../../include/connexion_bd.php");
                
                $hash_mot_de_passe = password_hash($newpassword, PASSWORD_BCRYPT);

                // Instructions permettant l'update dans la table Employe
                $lesEnregs = $bdd->prepare("UPDATE linkretz_viator_employe SET mot_de_passe =:mot_de_passe WHERE id=:id");

                $lesEnregs->bindParam(':id', $id);
                $lesEnregs->bindParam(':mot_de_passe', $hash_mot_de_passe);
                
                // Exécution de la requête
                $lesEnregs->execute();
                $rowCount = $lesEnregs->rowCount();
                
                if($rowCount > 0) {
                $msg = "Le nouveau mot de passe a bien été enregistré ($rowCount ligne(s) affectée(s))";
                } else {
                    $msg = "Aucune modification n'a été effectuée. Vérifiez l'ID de l'employé.";
                }

            } catch (PDOException $e) {
                $msg = "Le nouveau mot de passe n'a pas été enregistré : " . $e->getMessage();
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
		<script src="../../../../js/ControleFormulaireMdp.js" defer></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />
	<title>Site de l'agence Linkretz - Modification mot de passe</title>
	</head>
	<body>
        <?php 
			include "../../../../include/header.html"; 
            if ($_SESSION['profil_utilisateur'] == 'A') {
                include "../../../../include/menu_admin.php";
            } else if ($_SESSION['profil_utilisateur'] == 'E')
            {
                include "../../../../include/menu_employe.php";
            }
            
		?>
        <section class="violet">
			<h2>Modification du mot de passse</h2>
			<div class="sec">
				<div id="container">
    			<form  method="POST" action="" name="editmdp" id="editmdp">
                    <input type="hidden" name="id" id="id" value="<?php echo $_SESSION['id']; ?>"/>

                    <label for="currentpassword">Mot de passe actuel</label>
                    <input type="password" name="currentpassword" id="currentpassword" placeholder="Saisissez votre mot de passe actuel."/>

                    <label for="newpassword">Nouveau mot de passe</label>
                    <input type="password" name="newpassword" id="newpassword" placeholder="Saisissez le nouveau mot de passe. (Minimum 8 caractères, 1 majuscule, 1 minuscule, 1 chiffre et 1 caractère spéciale)"/>

                    <label for="checknewpassword">Confirmer nouveau mot de passe</label>
                    <input type="password" name="checknewpassword" id="checknewpassword" placeholder="Confirmer le nouveau mot de passe">

				<button type="submit" id=valider name="valider" style="background-color: #5cb85c; color: white; width: 100%; padding: 10px; border: none;">Modifier l'employé</button>
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