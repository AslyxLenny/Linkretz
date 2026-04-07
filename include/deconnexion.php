<?php
session_start(); // Toujours démarrer la session
session_destroy(); // Détruit toutes les données de session
header('Location:/viator/linkretz/page/connexion.php'); // Redirige vers la page de connexion
exit;
?>