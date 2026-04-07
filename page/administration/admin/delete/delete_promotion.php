<?php
//include du script permettant de vérifier que l'on est connecté en tant qu'administrateur
include "../../../../include/sec_admin.php"; 

//on initialise la variable $msg qui contiendra le message à afficher après la suppression
$msg = "";

//on effectue un extract pour le GET
extract($_GET);

//est-ce que l'id de l'employé à supprimer à été passé en GET
if (isset($id) == true && $id > 0) {
    //connexion à la base de données
    include "../../../../include/connexion_bd.php";

    try{
        //on prépare la requête DELETE
        $req = $bdd->prepare("DELETE FROM linkretz_viator_promotion WHERE id=:par_id");
        
        //on affecte une valeur au paramètre déclaré dans la requête DELETE
        $req->bindValue('par_id', $id);

        //on exécute la requête DELETE
        $req->execute();

        //on indique dans la variable $msg que tout s'est bien passé
        $msg = "La suppression de la promotion à bien été réalisée";
        header('Location: ../gest_promotion.php');
    } catch(PDOException $e) {
        //cas d'une erreur d'exception on fait une redirection (header) vers gest_employe.php
        //en passant la variable $msg contient le message d'erreur
        $msg = "Les caractéristiques de la promotion n'ont pas été enregistrés" . $e->getMessage();
        header('Location: ../gest_promotion.php');
    }
} else {
    $msg = "Erreur grave : référence de l'employé à modifier incorrectes" . $e->getMessage();
    header('Location: ../gest_promotiony.php');
}
?>