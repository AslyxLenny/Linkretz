<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<meta charset="UTF-8">
	<link rel="icon" type="image/x-icon" href="logo_linkretz.ico">
	<meta name ="viewport" content="width=device-width, initial-scale-1.0">
	<meta name="description" content="Site de l'agence Linkretz">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />
	<title>Site de l'agence Linkretz - Page d'accueil</title>
</head>
<body>	
	<?php 
		include "include/header.html"; 
		include "include/menu_client.html"; 
	?>
		<section class="accueiltop">
			<h2>Qui sommes-nous ?</h2>
			<div class = "sec">
				<p>Une agence familiale située à Chantilly, spécialisée dans la vente de séjours conçus par des tour-opérateurs.<br>
				Nous vous proposons également les services suivants :</p>
				<ul>
					<li>la vente de billets d'avion ou de train.</li>
					<li>la location de voitures, de villas ou d'appartements.</li>
					<li>la réservation de chambres d'hôtel.</li>
					<li>l'organisation de voyage à la carte.</li>
				</ul>
			</div>
		</section>
		<section class="accueil">
			<h2>Coordonnées</h2>
			<p class="table">
				6, rue du connétable<br>
				Batiment B<br>
				60500 Chantilly<br>
				France<br><br>
				<strong>+33 3 44 58 52 59</strong><br>
				agence@linkretz.com
			</p>
		</section>
		<section class="accueil">
			<h2>Horaires d'ouverture</h2>
			<?php
				include "include/connexion_bd.php";

				//exécution de la requête.
				try {
					$lesEnregs = $bdd->query("SELECT jour, day, horaire_matin, morning_schedule, horaire_aprem, afternoon_schedule FROM linkretz_viator_horaire_ouverture");
				} catch (PDOException $e) {
					die("Err BDSelect : erreur de lecture table tour_operateur dans tour_operateur_consult.php<br>Message :" . $e->getMessage());
				}
				
				//on test si le SELECT a retourné les enregistrements
				if($lesEnregs->rowCount() == 0) {
					echo "Aucune horaire n'a été enregistré";
				} else {
					//on lit le tableau retourné et pour chaque enregistrement, on affiche le nom et la description
					echo"<table><tr>
						<th>Jour</th>
						<th>Matin</th>
						<th>Après-midi</th>
						</tr>";
					foreach ($lesEnregs as $enreg) {
						echo "
						<tr><td data-fr=\"".htmlspecialchars($enreg->jour, ENT_QUOTES, 'UTF-8')."\" data-en=\"".htmlspecialchars($enreg->day, ENT_QUOTES, 'UTF-8')."\">".htmlspecialchars($enreg->jour, ENT_QUOTES, 'UTF-8')."</td> <td data-fr=\"".htmlspecialchars($enreg->horaire_matin, ENT_QUOTES, 'UTF-8')."\" data-en=\"".htmlspecialchars($enreg->morning_schedule, ENT_QUOTES, 'UTF-8')."\">".htmlspecialchars($enreg->horaire_matin, ENT_QUOTES, 'UTF-8')."</td> <td data-fr=\"".htmlspecialchars($enreg->horaire_aprem, ENT_QUOTES, 'UTF-8')."\" data-en=\"".htmlspecialchars($enreg->afternoon_schedule, ENT_QUOTES, 'UTF-8')."\">".htmlspecialchars($enreg->horaire_aprem, ENT_QUOTES, 'UTF-8')."</td></tr>";
					}
					echo"</table>";
				}
			?>
			</section>

		</section>
	<?php 
		include "include/footer.html"; 
	?>
<script src="js/Traduction.js" defer></script>
</body>
</html>