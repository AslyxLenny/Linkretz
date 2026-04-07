<?php

// variable qui va contenir un message indiquant si l'enregistrement
// a été réalisé ou non dans la base de données
$msg = "";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // on vérifie si la variable globale $_POST qui est un tableau contient des éléments
    if (count($_POST) == 0) {
        $msg = "Aucune donnée n'a été transmise : le tableau $_POST est vide";
    } else {

        $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
        $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
        $deja_contacte = isset($_POST['deja_contacte']) ? $_POST['deja_contacte'] : 'non';
        $code_pays = isset($_POST['code_pays']) ? $_POST['code_pays'] : '';
        $besoin = isset($_POST['besoin']) ? $_POST['besoin'] : '';

        // Nettoyage des entrées
        $nom = trim($nom);
        $prenom = trim($prenom);
        $email = trim($email);
        $telephone = trim($telephone);
        $besoin = trim($besoin);

        // Déclaration des constantes
        $regexMail = '/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
        $regexTelephone = "/^\+[0-9]{1,4}[0-9]{4,14}$/";

        //controle des valeurs saisies
        if (empty(trim($nom))) {
            $msg .= "Le nom est obligatoire.<br>";
        }

        if (empty(trim($prenom))) {
            $msg .= "Le prénom est obligatoire.<br>";
        }

        if (empty(trim($email))) {
            $msg = $msg . "L'e-mail est obligatoire.<br>";
        } else if (!preg_match($regexMail, $email)) {
            $msg .= "Merci de saisir un e-mail valide.br>";
        }

        if (empty(trim($telephone))) {
            $msg = $msg . "Le téléphone est obligatoire.<br>"; 
        } else if (!preg_match($regexTelephone, $telephone)) {
            $msg .= "Le numéro de téléphone doit être au format international sans espace.<br>";
        }

        if (empty(trim($besoin))) {
            $msg = $msg . "La description du besoin est obligatoire.<br>"; 
        }

        if (empty($msg) == false) {
            $msg = "L'employé n'a pas été enregistré car les valeurs saisies sont incomplètes.<br>" . $msg;
        } else {
            // connexion à la base de données
            include "../include/connexion_bd.php";
            
            // on prépare la requête insert
            try {
                // Préparation de la requête d'insertion
                $lesEnregs = $bdd->prepare("INSERT INTO linkretz_viator_demande_info (nom, prenom, email, telephone, deja_contacte, code_pays, besoin) 
                VALUES (:nom, :prenom, :email, :telephone, :deja_contacte, :code_pays, :besoin, '')");
                
                $lesEnregs->bindParam(':nom', $nom);
                $lesEnregs->bindParam(':prenom', $prenom);
                $lesEnregs->bindParam(':email', $email);
                $lesEnregs->bindParam(':telephone', $telephone);
                $lesEnregs->bindParam(':deja_contacte', $deja_contacte);
                $lesEnregs->bindParam(':code_pays', $code_pays);
                $lesEnregs->bindParam(':besoin', $besoin);
                
                // Exécution de la requête
                $lesEnregs->execute();
                
                // on indique dans la variable $msg que tout s'est bien passé
                $msg = "<br>La demande a bien été enregistrée.";
            } catch (PDOException $e) {
                $msg = "<br>La demande n'a pas été enregistrée." . $e->getMessage();
            }  
        } 
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
		<title>Site de l'agence Linkretz - Nous contacter</title>
	</head>
	<body>
	<?php 
		include "../include/header.html"; 
		include "../include/menu_client.html"; 
	?>
		<section class="cyan">
			<h2>Demande d'information</h2>
			<div class="sec">
                <script src="../js/ControleFormulaireDemande.js" defer></script>
                <form action="demande_info_client_add.php" method="POST" name="demandeinfo" id="demandeinfo">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" placeholder="Veuillez saisir votre nom." required autofocus />

                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" id="prenom" placeholder="Veuillez saisir votre prénom." required autofocus/>
                        
                    <label for="email">E-mail</label>
                    <input type="mail" name="email" id="email" placeholder="Veuillez saisir votre e-mail." required autofocus/>
                        
                    <label for="telephone">Téléphone</label>
                    <input type="tel" name="telephone" id="telephone" placeholder="Saisissez le numéro de téléphone de l'employé. (Format Internationnal sans espaces)" pattern="^\+[0-9]{1,4}[0-9]{4,14}$" title="Format: +indicatif suivi des numéros (ex: +33 6 12 34 56 78)"  required autofocus value="<?php if(isset($telephone)) echo htmlspecialchars($telephone, ENT_QUOTES, 'UTF-8');?>"/>

                    <div class="form-group">
                        <label>Est-ce que vous nous avez déjà contacté ?</label>
                        <input type="radio" name="deja_contacte" value="non" checked /> non 
                        <input type="radio" name="deja_contacte" value="oui"/> oui
                    </div>
                    <div class="form-group">
                        <label>Dans quel pays souhaitez-vous voyager ?</label>
                        <select name="code_pays" id="code_pays">
                            <option value="CN">Chine</option>
                            <option value="DE">Allemagne</option>
                            <option value="DK">Danemark</option>
                            <option value="ES" selected>Espagne</option>
                            <option value="GR">Grèce</option>
                            <option value="IT">Italie</option>
                            <option value="NO">Norvège</option>
                            <option value="SE">Suède</option>
                        </select>
                    </div>
                    <label>Veuillez décrire votre besoin ci-dessous</label>
                    <textarea name="besoin" id="besoin" rows="5" cols="60"></textarea>
                    <button type="submit" id=valider style="background-color: #5cb85c; color: white; width: 100%; padding: 10px; border: none;">Envoyer</button>
                </form>
                <div id="message">
                    <?php 
                        if (isset($msg)) echo htmlspecialchars($msg, ENT_QUOTES, 'UTF-8'); 
                    ?>
                </div>
            </div>
		</section>
		<?php 
			include "../include/footer.html"; 
		?>
	<script src="../js/Traduction.js" defer></script>
</body>
</html>