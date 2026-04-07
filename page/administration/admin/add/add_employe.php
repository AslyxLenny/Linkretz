<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../../../../include/vendor/autoload.php';
include "../../../../include/sec_admin.php"; 

// variable qui va contenir un message indiquant si l'enregistrement a été réalisé ou non dans la base de données
$msg = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // on vérifie si la variable globale $_POST qui est un tableau contient des éléments
    if (count($_POST) == 0) {
        // Le tableau est vide
        $msg = "Aucune donnée n'a été soumise";
    } else {

        $nom = isset($_POST['nom']) ? trim($_POST['nom']) : '';
        $prenom = isset($_POST['prenom']) ? trim($_POST['prenom']) : '';
        $email = isset($_POST['email']) ? trim($_POST['email']) : '';
        $telephone = isset($_POST['telephone']) ? trim($_POST['telephone']) : '';
        $fonction = isset($_POST['fonction']) ? intval($_POST['fonction']) : 0;
        $profil = isset($_POST['profil']) ? $_POST['profil'] : '0';
        
        // Déclaration de la constante
        $regexTelephone = "/^\+[0-9]{1,4}[0-9]{4,14}$/";
        $regexMail = '/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';

        //controle des valeurs saisies
        if (empty(trim($nom))) {
            $msg .= "Le nom est obligatoire.<br>";
        }

        if (empty(trim($email))) {
                $msg = $msg . "L'e-mail est obligatoire.<br>";
        } else if (!preg_match($regexMail, $email)) {
                $msg .= "Merci de saisir un e-mail valide.br>";
        }

        if (empty(trim($prenom))) {
            $msg .= "Le prénom est obligatoire.<br>";
        }

        if (empty(trim($telephone))) {

            $msg = $msg . "Le téléphone est obligatoire.<br>"; 

        } else if (!preg_match($regexTelephone, $telephone)) {

            $msg .= "Le numéro de téléphone doit être au format international sans espace.<br>";
        }

        if ($fonction === 0) {
            $msg = $msg . "La selection d'une fonction est obligatoire.<br>"; 
        }

        if (!in_array($profil, ['A', 'E'])) {
            $msg = $msg . "Le selection du profil est obligatoire.<br>"; 
        }

        // on génère le compte composé du nom, suivi du premier caractère du prénom
        $compte = strtolower($nom . substr($prenom, 0, 1));
        
        // on récupère l'année en cours
        $annee = date("Y");
        
        // on génère le mot de passe en clair composé des 2 premiers caractères du nom suivis de 2 premiers caractères du prénom
        $mot_de_passe_en_clair = strtolower(substr($nom, 0, 2) . $annee . substr($prenom, 0, 2));
        
        // on appelle la fonction php password_hash pour obtenir le hash du mot de passe la fonction de hachage Bcrypt sera utilisée avec un grain de sel généré de manière aléatoire
        $hash_mot_de_passe = password_hash($mot_de_passe_en_clair, PASSWORD_BCRYPT);

        if (empty($msg) == false) {
            $msg = "L'employé n'a pas été enregistré car les valeurs saisies sont incomplètes.<br>" . $msg;

        } else {
            try {
                // connexion à la base de données
                include("../../../../include/connexion_bd.php");
                
                // Instructions permettant l'ajout dans la table Employe
                $lesEnregs = $bdd->prepare("INSERT INTO linkretz_viator_employe (nom, prenom, idfonction, telephone, compte, mot_de_passe, code_profil) 
                VALUES (:nom, :prenom, :idfonction, :telephone, :compte, :mot_de_passe, :code_profil)");
                
                $lesEnregs->bindParam(':nom', $nom);
                $lesEnregs->bindParam(':prenom', $prenom);
                $lesEnregs->bindParam(':idfonction', $fonction);
                $lesEnregs->bindParam(':telephone', $telephone);
                $lesEnregs->bindParam(':compte', $compte);
                $lesEnregs->bindParam(':mot_de_passe', $hash_mot_de_passe);
                $lesEnregs->bindParam(':code_profil', $profil);
                
                // Exécution de la requête
                $lesEnregs->execute();
                
                // on indique dans la variable $msg que tout s'est bien passé
                $msg = "Les caractéristiques de l'employé ont bien été enregistrées. ";

                // Paramètres SMTP
                $host = $_ENV['SMTP_HOST'];
                $port = $_ENV['SMTP_PORT'];
                $username = $_ENV['SMTP_USER'];
                $password = $_ENV['SMTP_PASS'];
                $encryption = $_ENV['SMTP_ENCRYPTION'];

                // Destinataire et message
                $to= $email;
                // Nouvelle version HTML

                $subject = "Nouvel employé Linkretz";
                $htmlBody ='
                <p>Bonjour,</p>
                <p>Vous avez êtes nouvel employé de l\'entreprise Linkretz.</p><br>
                <p>Votre identifiant est : '. $compte . '.</p>
                <p>Votre mot de passe est temporaire est ' . $mot_de_passe_en_clair . ', vous devrez le modifier à votre première connexion.</p>
                <p>Veuillez vous rendre sur : </p>
                <p>
                <a href="' . $_ENV['APP_URL'] . '/page/connexion.php">Linkretz - Connexion</a>
                </p>
                ';
                $mail = new PHPMailer(true);
                try {
                    // Serveur SMTP
                    $mail->CharSet = 'UTF-8';
                    $mail->isSMTP();
                    $mail->Host       = $host;
                    $mail->SMTPAuth   = true;
                    $mail->Username   = $username;
                    $mail->Password   = $password;
                    $mail->SMTPSecure = $encryption;
                    $mail->Port       = $port;

                    // Expéditeur et destinataire
                    $mail->setFrom($_ENV['SMTP_FROM'], $_ENV['SMTP_FROM_NAME']);
                    $mail->addAddress($to);

                    // Contenu
                    $mail->isHTML(true);
                    $mail->Subject = $subject;
                    $mail->Body    = $htmlBody;

                    $mail->send();
                    $msg .= "Un email de confirmation a été envoyé à $email.<br>";
                } catch (Exception $e) {
                    $msg .= "Une erreur est survenue lors de l'envoi de l'email" . $mail->ErrorInfo . "<br>";
                }

                //réinitialisation des composants graphiques
                $nom = "";
                $prenom = "";
                $telephone = "";
                $fonction = "0";
                $profil = '';
                $code_profil = '';
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
	<title>Site de l'agence Linkretz - Ajouter employé</title>
	</head>
	<body>
        <?php 
			include "../../../../include/header.html"; 
            include "../../../../include/menu_admin.php"; 
		?>
        <section class="bleu">
			<h2>Ajout d'un employé</h2>
			<div id="container">
    			<form  method="POST" name="employeadd" id="employeadd">
					<?php
						include "../../../../include/employe_composant.php"
					?>
                    <label for="email">E-mail</label>
                    <input type="mail" name="email" id="email" placeholder="E-mail de l'employé." required autofocus/>
                     

					<button type="submit" id=valider style="background-color: #5cb85c; color: white; width: 100%; padding: 10px; border: none;">Enregistrer</button>
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