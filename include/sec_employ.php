<?php
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_secure', 1);
ini_set('session.cookie_samesite', 'Strict');
session_start();
// on vérifie si la session profil_util existe et si elle contient E
if (!isset($_SESSION['profil_utilisateur']) || $_SESSION['profil_utilisateur'] !== 'E') {
    header("Location:/viator/linkretz/page/connexion.php");
    exit;
}
?>