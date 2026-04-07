<?php
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$hote = $_ENV['DB_HOST'];
$utilisateur = $_ENV['DB_USER'];
$mdp = $_ENV['DB_PASS'];
$nombdd = $_ENV['DB_NAME'];

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