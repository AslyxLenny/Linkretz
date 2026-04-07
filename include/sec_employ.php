<?php
// démarrage de la session
session_start();
// on vérifie si la session profil_util existe et si elle contient E
if (isset($_SESSION['profil_utilisateur']) == false || $_SESSION['profil_utilisateur'] != "E") {
    header("Location:/viator/linkretz/page/connexion.php");
}
?>