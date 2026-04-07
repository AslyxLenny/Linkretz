<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../../../include/vendor/autoload.php';
// Connexion à la base de données
include "../../../include/connexion_bd.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = isset($_POST['id']) ? trim($_POST['id']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    
    // Vérifier si l'id existe dans la base de données
    $lesEnregs = $bdd->prepare("SELECT id FROM linkretz_viator_employe WHERE compte = :id");

    $lesEnregs->bindParam(':id', $id);

    $lesEnregs->execute();

    
    
    if($lesEnregs->rowCount() > 0) {
        $employe = $lesEnregs->fetch();
        $id = $employe->id;

        // Générer un token unique
        $token = bin2hex(random_bytes(32));
        
        // Stocker le hash du token dans la base de données
        $tokenHash = hash('sha256', $token);
        
        // Définir une date d'expiration 
        $expiry = time() + 3600;
        $expiryDate = date('Y-m-d H:i:s', $expiry);
        
        // Mettre à jour la base de données
        $lesEnregs = $bdd->prepare('UPDATE linkretz_viator_employe SET reset_token_hash = :tokenHash, reset_token_expires_at = :expiryDate WHERE id = :id');

        $lesEnregs->bindParam(':tokenHash', $tokenHash);
        $lesEnregs->bindParam(':expiryDate', $expiryDate);
        $lesEnregs->bindParam(':id', $id);

        $lesEnregs->execute();

        // Créer l'URL de réinitialisation
        $resetUrl = $_ENV['APP_URL'] . "/page/administration/password/reset_password.php?token=$token";

        // Paramètres SMTP
        $host = $_ENV['SMTP_HOST'];
        $port = $_ENV['SMTP_PORT'];
        $username = $_ENV['SMTP_USER'];
        $password = $_ENV['SMTP_PASS'];
        $encryption = $_ENV['SMTP_ENCRYPTION'];

        // Destinataire et message
        $to= $email;
        // Nouvelle version HTML

        $subject = "Réinitialisation de votre mot de passe";
        $htmlBody = '
        <p>Bonjour,</p>
        <p>Vous avez demandé la réinitialisation de votre mot de passe.</p>
        <p>
            <a href="' . $resetUrl . '">Réinitialiser le mot de passe</a>
        </p>
        <p>Ce lien expirera dans une heure.</p>
        <p>Si vous n\'avez pas demandé cette réinitialisation, ignorez simplement cet email.</p>
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
        } catch (Exception $e) {
            $msg = "Une erreur est survenue lors de l'envoi de l'email" . $mail->ErrorInfo . "<br>";
        }
        $msg = $msg . "Si votre adresse email est enregistrée dans notre système, vous recevrez un lien de réinitialisation.<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<meta charset="UTF-8">
	<link rel="icon" type="image/x-icon" href="../../../logo_linkretz.ico">
		<meta name ="viewport" content="width=device-width, initial-scale-1.0">
		<meta name="description" content="Site de l'agence Linkretz">
		<link rel="stylesheet" href="../../../css/style.css">
        <script src="../../../js/ControleFormulairePassword.js" defer></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />
	<title>Site de l'agence Linkretz - Mot de passe oublié</title>
	</head>
	<body>
        <?php 
			include "../../../include/header.html"; 
            include "../../../include/menu_client.html"; 
		?>
        <section class="bleu">
			<h2>Mot de passe oublié</h2>
			<div id="container">
    			<form  method="POST" name="forgotpassword" id="forgotpassword">

					<label for="identifiant">Identifiant</label>
                    <input type="text" name="id" id="id" placeholder="Saisissez votre identifiant."/>

                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Saisissez votre email."/>

					<button type="submit" id=valider style="background-color: #5cb85c; color: white; width: 100%; padding: 10px; border: none;">Envoyer le lien de réinitialisation</button>
				</form>
				<div id="message">
				<?php 
					if (isset($msg)) echo htmlspecialchars($msg, ENT_QUOTES, 'UTF-8'); 
				?>
				</div>
			</div>
        </section>
        <?php 
            include "../../../include/footer.html"; 
        ?>
	<script src="../../../js/Traduction.js" defer></script>
</body>
</html>