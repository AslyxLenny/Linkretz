<?php
$hote = '91.216.107.183'; // nom ou adresse ip du serveur hébergeant le SGBD MySQL
$utilisateur = 'stsjr1615583_12elatn'; // compte de connexion utilisé par l'application
$mdp = '7R7pq3fn5y@'; // mot de passe du compte de connexion
$nombdd = 'stsjr1615583_12elatn'; // nom de la base de données

try {
    // création d'un objet qui sera utilisé pour travailler avec la base de données
    $bdd = new PDO("mysql:host=$hote;dbname=$nombdd;charset=utf8", $utilisateur, $mdp);
    
    // mode de fetch = FETCH_OBJ (on récupère les données dans des objets)
    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    
    // Activation des erreurs PDO
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch(PDOException $err){
    die("BDAcc erreur de connexion à la base de données.<br>Erreur :" . $err->getMessage());
}
?>