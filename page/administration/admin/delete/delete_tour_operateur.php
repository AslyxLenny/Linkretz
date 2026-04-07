<?php
// include du script permettant de vérifier que l’on est connecté en tant qu’administrateur
include "../../../../include/sec_admin.php"; 

// on initialise la variable $msg qui contiendra le message à afficher après la suppression
$msg = "";

// Est-ce que l'id de du tour-opérateur à supprimer a été passé en GET ?
if (isset($_GET['id']) == true && $_GET['id'] > 0) {
    // connexion à la base de données
    include "../../../../include/connexion_bd.php";

    try {
        // Requête permettant de supprimer de le tour-opérateur dont l'id est égal à $_GET['id']
		// Instructions permettant l'ajout dans la table tour_operateur
		$lesEnregs = $bdd->prepare('DELETE FROM linkretz_viator_tour_operateur WHERE id = :id');
		
		$lesEnregs->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
		// Exécution de la requête
		$lesEnregs->execute();

        // on indique dans la variable $msg que tout s'est bien passé
        $msg = "La suppression a été réalisée.";
    } catch (PDOException $e) {
        // cas d'une erreur d'exception
        // -----------------------------
        // on fait une redirection(header) vers gestion_tour_operateur.php
        // en passant la variable $msg contient le message d'erreur
        $msg = "Les caractéristiques du tour-opérateur n'ont pas été supprimées." . $msg;   
    }
} else {
    $msg = "Problème grave : référence de du tour-opérateur à modifier incorrectes." . $msg;
}

header('Location:/viator/linkretz/page/administration/admin/gestion_tour_operateur.php?msg=' . urlencode($msg));
exit;
?>