<?php 
include "../../../../include/sec_employ.php"; 
$prenom_nom = $_SESSION['prenom_nom'];
$fonction = $_SESSION['fonction'];
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
	<title>Site de l'agence Linkretz - Panel Employé</title>
	</head>
	<body>
		<?php 
			include "../../../../include/header.html"; 
			include "../../../../include/menu_employe.php"; 
		?>
		<section class="accueiltop">
		<h2><?php echo "Bienvenue dans l'espace dédié aux employés ". $prenom_nom . "<br> Vous êtes " . $fonction . "."?> </h2>
		</section>
		<?php 
			include "../../../../include/footer.html"; 
		?>
	<script src="../../../../js/Traduction.js" defer></script>
</body>
</html>