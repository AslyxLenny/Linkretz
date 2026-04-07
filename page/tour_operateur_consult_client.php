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
	<section class="jaune">
		<h2>Tour-opérateurs avec lesquels nous travaillons</h2>
		<div class="sec">
			<?php
				include "../include/connexion_bd.php";

				//exécution de la requête.
				try {
					$lesEnregs = $bdd->query("SELECT nom, nom_en, description, description_en, libelle, libelle_en FROM linkretz_viator_tour_operateur JOIN linkretz_viator_specialite ON linkretz_viator_specialite.id = linkretz_viator_tour_operateur.id_specialite");
				} catch (PDOException $e) {
					die("Err BDSelect : erreur de lecture table tour_operateur dans tour_operateur_consult.php<br>Message :" . $e->getMessage());
				}
				
				//on test si le SELECT a retourné les enregistrements
				if($lesEnregs->rowCount() == 0) {
					echo "Aucun tour-opérateur n'a été enregistré";
				} else {
					//on lit le tableau retourné et pour chaque enregistrement, on affiche le nom et la description
					foreach ($lesEnregs as $enreg) {
						$nomFr = htmlspecialchars($enreg->nom, ENT_QUOTES, 'UTF-8');
						$nomEn = htmlspecialchars($enreg->nom_en, ENT_QUOTES, 'UTF-8');
						$descFr = htmlspecialchars($enreg->description, ENT_QUOTES, 'UTF-8');
						$descEn = htmlspecialchars($enreg->description_en, ENT_QUOTES, 'UTF-8');
						$libFr = htmlspecialchars($enreg->libelle, ENT_QUOTES, 'UTF-8');
						$libEn = htmlspecialchars($enreg->libelle_en, ENT_QUOTES, 'UTF-8');
						echo "<strong data-fr=\"$nomFr\" data-en=\"$nomEn\">$nomFr</strong> / <span data-fr=\"$libFr\" data-en=\"$libEn\">$libFr</span><br><span data-fr=\"$descFr\" data-en=\"$descEn\">$descFr</span><br><br>";
					}
				}
			?>
		</div>
	</section>
	<?php 
		include "../include/footer.html"; 
	?>
<script src="../js/Traduction.js" defer></script>
</body>
</html>