<?php
// démarrage de la session
session_start();

// Redirection selon le profil si l'utilisateur est déjà connecté
if ($_SESSION['profil_utilisateur'] == 'A') {
	echo '<meta http-equiv="refresh" content="0; url=/viator/linkretz/page/administration/admin/panel/panel_admin.php">';
	exit();
} else if ($_SESSION['profil_utilisateur'] == 'E') {
	echo '<meta http-equiv="refresh" content="0; url=/viator/linkretz/page/administration/admin/panel/panel_employe.php">';
	exit();
}

// est-ce des valeurs ont été transmises dans le tableau $_POST ?
if (count($_POST) > 0) {
	$identifiant = isset($_POST['identifiant']) ? trim($_POST['identifiant']) : '';
	$motdepasse = isset($_POST['motdepasse']) ? trim($_POST['motdepasse']) : '';
    
    
    // 1) Contrôle des valeurs saisies sur le formulaire (traité ci-dessous)
	$msg = "";
    $erreurs = false;
    
    // Vérification que les champs obligatoires sont remplis
    if (empty($identifiant)) {
        $msg .= "Le nom d'utilisateur est obligatoire.<br>";
        $erreurs = true;
    }
    
    if (empty($motdepasse)) {
        $msg .= "Le mot de passe est obligatoire.<br>";
        $erreurs = true;
    }
	
    try {
		if (!$erreurs) {
			// Connexion à la base de données
			include "../include/connexion_bd.php";
			// on prépare la requête select qui permet d'aller chercher le mot de passe et le profil
			$req = $bdd->prepare("SELECT linkretz_viator_employe.id, mot_de_passe, code_profil, libelle, prenom, nom, premier_connexion FROM linkretz_viator_employe JOIN linkretz_viator_fonction ON linkretz_viator_employe.idfonction = linkretz_viator_fonction.id WHERE linkretz_viator_employe.compte = :par_ident");

			// on affecte une valeur au paramètre déclaré dans la requête
			$req->bindValue(':par_ident', $identifiant);

			// on demande l'exécution de la requête
			$req->execute();

			// on récupère l'enregistrement
			$enreg = $req->fetch();

			// le SELECT a-t-il retourné un enregistrement ?
			if ($enreg == false) {
			// le SELECT n'a pas retourné d'enregistrement : on affiche un message d'erreur dans $msg
				$msg = "Identifiant et/ou mot de passe incorrect(s)";
			} else {
				// On récupère le hash du mot de passe, le profil et si premier_connexion=0
				$hash = $enreg->mot_de_passe;
				$code_profil = $enreg->code_profil;
				$premiere_connexion = $enreg->premiere_connexion;

				// Appel de la fonction password_verify
				if (password_verify($motdepasse, $hash) == true) {
					// On démarre la session
					session_start();
					// On crée la variable de session 'profil_util' qui contient le profil de l'utilisateur
					$_SESSION['id'] = $enreg->id;
					$_SESSION['profil_utilisateur'] = $code_profil; // $code_profil est récupéré depuis la base de données
					$_SESSION['prenom_nom'] = $enreg->prenom.' '.$enreg->nom;
					$_SESSION['fonction'] = $enreg->libelle;
					if ($premiere_connexion == 0)
					{
						echo '<meta http-equiv="refresh" content="0; url=/viator/linkretz/page/administration/password/reset_password.php">';
						exit();
					} else {
						// Redirection selon le profil
						if ($code_profil == 'A') {
							echo '<meta http-equiv="refresh" content="0; url=/viator/linkretz/page/administration/admin/panel/panel_admin.php">';
							exit();
						} else if ($code_profil == 'E') {
							echo '<meta http-equiv="refresh" content="0; url=/viator/linkretz/page/administration/admin/panel/panel_employe.php">';
							exit();
						}
					}
				} else {
				$msg = "Identifiant et/ou mot de passe incorrect(s)";
				}
			} 
		}
	} catch (PDOException $e) {
		$msg = "Erreur : " . $e->getMessage();
	}
}
?>

<!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<meta charset="UTF-8">
	<link rel="icon" type="image/x-icon" href="../logo_linkretz.ico">
		<meta name ="viewport" content="width=device-width, initial-scale-1.0">
		<meta name="description" content="Site de l'agence Linkretz">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />
	<title>Site de l'agence Linkretz - Liste des tour-opérateurs</title>
	</head>
	<body>
	<?php 
		include "../include/header.html"; 
		include "../include/menu_client.html"; 
	?>
		<section class="rouge">
			<h2>Connexion</h2>
			<div class="sec">
			<form method="POST">
				<label for="identifiant">Identifiant :</label>
				<input type="text" autocomplete="username" name="identifiant" id="identifiant" required>

				<label for="motdepasse">Mot de passe :</label>
				<input type="password" name="motdepasse" id="motdepasse" required>

				<label for="forget_password"> <a href="./administration/password/forgot_password.php"> Mot de passe oublié</a> </label>

				<input type="submit" name="valider" value="Connexion">
			</form>
			<?php if (isset($msg)) echo $msg; ?>
			</div>
		</section>
		<?php 
			include "../include/footer.html"; 
		?>
		
	<script src="../js/Traduction.js" defer></script>
</body>
</html>