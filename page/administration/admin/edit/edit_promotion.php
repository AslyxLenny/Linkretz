<?php
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

//si l'id existe et est supérieur à 0 on exécute le code
if(isset($id) == true && $id > 0) {
    //connexion à la base de données
    include "../../../../include/connexion_bd.php";

    try {
        //on récupère les caractéristiques de l'employé
        //dont l'identifiant est contenu dans la variable $id
        $lesEnregs = $bdd->prepare("SELECT intitule, duree, prix, id_thematique FROM linkretz_viator_promotion WHERE id=:par_id");

        $lesEnregs->bindValue(':par_id', $id);

        $lesEnregs->execute();

        foreach ($lesEnregs as $enreg) {
            $intitule = $enreg->intitule;
            $duree = $enreg->duree;
            $prix = $enreg->prix;
            $theme = $enreg->id_thematique;
        }
        

    } catch (PDOException $e) {
        $msg = "Erreur d'affichage. Les données de la promotion n'ont pas pu être chargée";
    }
}

include "../../../../include/sec_admin.php";

//est-ce que des valeurs ont été transmises dans le tableau $_POST ?
if (count($_POST) > 0) {
    //oui (cela signifie que le script employe_ajout a été appelé
    //lors du clic sur le bouton "Enregistrer" du formulaire)

    //variable qui ve contenir un message indiquant si l'enregistrement 
    //a été réalisé dans la base de données 
    $msg = "";

    $theme = isset($_POST['theme']) ? $_POST['theme'] : '0';
    $intitule = isset($_POST['intitule']) ? trim($_POST['intitule']) : '';
    $duree = isset($_POST['duree']) ? trim($_POST['duree']) : '';
    $prix = isset($_POST['prix']) ? trim($_POST['prix']) : '';
    $id = isset($_POST['id']) ? intval($_POST['id']) : $id;

    $msgErrSpe = "";
    if ($theme == 0) {
        $msgErrSpe = "Vous devez sélectionner un theme";
    }

    if (empty($msgErrSpe)) {
        try {
            //on prépare la requête INSERT
            $req = $bdd->prepare("UPDATE linkretz_viator_promotion SET intitule=:par_intitule, duree=:par_duree, prix=:par_prix, id_thematique=:par_id_thematique WHERE id=:par_id");
    
            //on affecte une valeur à chacun des paramètres déclarés dans la requête INSERT
            $req->bindValue(':par_intitule', $intitule);
            $req->bindValue(':par_duree', $duree);
            $req->bindValue(':par_prix', $prix);
            $req->bindValue(':par_id_thematique', $theme);
            $req->bindValue(':par_id', $id);
    
            //on exécute la requête INSERT
            $req->execute();
            //on vérifie que les modification ont été ajouté dans la table
            if($req->rowCount() == 0){
                $msg = "Les modification n'ont pas été enregistré dans la base de données";
            } else {
                //on indique dans la variable $msg que tout s'est bien passé
                $msg = "<br>Les modification de la promotion a bien été enregistrée";
            }

            //réinitialisation des composants graphiques
            $intitule = "";
            $duree = "";
            $prix = "";
            $theme = 0;
        } catch (PDOException $e) {
            $msg = "<br>Les modification de la promotion n'a pas été enregistrée : " . $e->getMessage();
        }
    } else {
        $msgErr = "La demande n'a pas été enregistrée";
    }
} 
?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<meta charset="UTF-8">
	<link rel="icon" type="image/x-icon" href="../../../../logo_linkretz.ico">
	<meta name ="viewport" content="width=device-width, initial-scale-1.0">
	<meta name="description" content="Site de l'agence Linkretz">
	<link rel="stylesheet" href="../../../../css/style.css">
    <script src="../../../../js/verifFormPromotion.js" defer></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />
	<title>Site de l'agence Linkretz - Gestion des employés</title>
</head>
<body>
	<?php
    include "../../../../include/header.html";
    include "../../../../include/menu_administratif_2.html";
    ?>
    <section class="violet_admin">
        <h2>Modification d'une promotion</h2>
        <?php if(isset($msg) && empty(trim($msg)) == false) echo "<p class='messageBD'>",htmlspecialchars($msg, ENT_QUOTES, 'UTF-8'),"<p>"; ?>
        <div id="container">
            <form method="post">
                <?php include "../../../../include/promotion_composant_graph.php"; ?>
            </form>
            <p id="msgConfirm"><?php if (isset($msgErr) && !empty(trim($msgErr))) echo htmlspecialchars($msgErr, ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
    </section>
    <?php include "../../../../include/footer.html" ?>
<script src="../../../../js/Traduction.js" defer></script>
</body>
</html>