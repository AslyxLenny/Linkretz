<?php
// démarrage de la session
session_start();
// on vérifie si la session profil_utilisateur existe et si elle contient A
if (isset($_SESSION['profil_utilisateur']) == false || $_SESSION['profil_utilisateur'] != "A") {
    header("Location:/viator/linkretz/page/connexion.php");
}
?>