<?php
session_start();
include "../../../include/connexion_bd.php";
// Vérifier si un token est présent dans l'URL
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = isset($_POST['token']) ? $_POST['token'] : '';
    $newpassword = isset($_POST['newpassword']) ? $_POST['newpassword'] : '';
    $checknewpassword = isset($_POST['checknewpassword']) ? $_POST['checknewpassword'] : '';
    $premier_connexion = isset($_POST['premier_connexion']) ? $_POST['premier_connexion'] : 1;
    
    // Vérification que les mots de passe correspondent
    if ($newpassword != $checknewpassword) {
        die('Les mots de passe ne correspondent pas');
    }
    
    // Validation du token
    $tokenHash = hash('sha256', $token);
    try {
        if ($premier_connexion != 0) {
            $lesEnregs = $bdd->prepare('SELECT id FROM linkretz_viator_employe WHERE reset_token_hash = :resetHash AND reset_token_expires_at > NOW()');
            $lesEnregs->bindParam(':resetHash', $tokenHash);
            $lesEnregs->execute();
            $employe = $lesEnregs->fetch();
            $identifiant = $employe->id;
        
            if (!$employe) {
                die('Token invalide ou expiré');
            }
        }
        
        // Hashage du nouveau mot de passe
        $hash_mot_de_passe = password_hash($newpassword, PASSWORD_BCRYPT);
        
        // Mise à jour du mot de passe et suppression du token
        $lesEnregs = $bdd->prepare('UPDATE linkretz_viator_employe SET mot_de_passe = :mot_de_passe, reset_token_hash = NULL, reset_token_expires_at = NULL, premier_connexion = 1 WHERE id = :identifiant');
        $lesEnregs->bindParam(':mot_de_passe', $hash_mot_de_passe);
        $lesEnregs->bindParam(':identifiant', $identifiant);
        $lesEnregs->execute();
    } catch (PDOException $e) {
        $msg = "Le mot de passe na pas été enregistré : " . $e->getMessage();
    }
}

    header("Refresh:5; Location:/viator/linkretz/page/connexion.php");

$identifiant = $_SESSION['id'];
$lesEnregs = $bdd->prepare('SELECT premier_connexion FROM linkretz_viator_employe WHERE id = :identifiant');
$lesEnregs->bindParam(':identifiant', $identifiant);
$lesEnregs->execute();

if (!isset($_GET['token']) && $premier_connexion !=0) {
    die('Aucun token fourni');
} else {
    $token = $_GET['token'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<link rel="icon" type="image/x-icon" href="../../../logo_linkretz.ico">
    <meta name ="viewport" content="width=device-width, initial-scale-1.0">
    <meta name="description" content="Site de l'agence Linkretz">
    <link rel="stylesheet" href="../../../css/style.css">
    <script src="../../../js/ControleFormulaireMdp.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />
	<title>Site de l'agence Linkretz - Réinitialisation du mot de passe</title>
</head>
    <body>
        <h2>Réinitialisation du mot de passe</h2>
        <div class="sec">
            <div id="container">
                <form method="post" action="">
                    <input type="hidden" name="token" value="<?php echo htmlspecialchars($token); ?>">
                    
                    <div class="container">
                        <label for="newpassword">Nouveau mot de passe</label>
                        <input type="password" placeholder="Entrez votre nouveau mot de passe" name="newpassword" id="newpassword"required>
                        
                        <label for="checknewpassword">Confirmer le mot de passe</label>
                        <input type="password" placeholder="Confirmez votre nouveau mot de passe" name="checknewpassword" id="checknewpassword" required>

                        <button type="submit" id=valider name="valider" style="background-color: #5cb85c; color: white; width: 100%; padding: 10px; border: none;">Réinitialiser le mot de passe</button>
                    </div>
                </form>
            </div>
    <script src="../../../js/Traduction.js" defer></script>
</body>
</html>
