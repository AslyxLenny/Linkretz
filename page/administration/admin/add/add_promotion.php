<?php
include "../../../../include/sec_admin.php";

//est-ce que des valeurs ont été transmises dans le tableau $_POST ?
if (count($_POST) > 0) {
    //oui (cela signifie que le script a été appelé
    //lors du clic sur le bouton "Enregistrer" du formulaire)

    //variable qui ve contenir un message indiquant si l'enregistrement 
    //a été réalisé dans la base de données 
    $msg = "";

    //appel de la fonction extract qui va créer automatiquement les variables dont les noms
    //sont les index de $_POST et leur affecte la valeur associée
    extract($_POST);

    $msgErrSpe = "";
    if ($theme == 0) {
        $msgErrSpe = "Vous devez sélectionner un thème";
    }

    if (empty($msgErrSpe)) {
        try {
            //connexion à la base de données 
            include "../../../../include/connexion_bd.php";
    
            //on prépare la requête INSERT
            $req = $bdd->prepare("INSERT INTO linkretz_viator_promotion VALUES (0, :par_intitule, :par_duree, :par_prix, :par_id_theme)");
    
            //on affecte une valeur à chacun des paramètres déclarés dans la requête INSERT
            $req->bindValue(':par_id_theme', $theme);
            $req->bindValue(':par_intitule', $intitule);
            $req->bindValue(':par_duree', $duree);
            $req->bindValue(':par_prix', $prix);
    
            //on exécute la requête INSERT
            $req->execute();
            //on vérifie que les information ont été ajouté dans la table
            if($req->rowCount() == 0){
                echo("Les information n'ont pas été enregistré dans la base de données");
            }
            
            //on indique dans la variable $msg que tout s'est bien passé
            $msg = "<br>La nouvelle promotion a bien été enregistrée";

            //réinitialisation des composants graphiques
            $theme = 0;
            $intitule = "";
            $duree = "";
            $prix = "";
        } catch (PDOException $e) {
            $msg = "<br>La nouvelle promotion n'a pas été enregistrée : " . $e->getMessage();
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
    <section class="form_ajout_promotion">
        <h2>Ajout d'une promotion</h2>
        <?php if(isset($msg) && empty(trim($msg)) == false) echo "<p class='messageBD'>",$msg,"<p>"; ?>
        <div id="container">
            <form method="post">
                <?php include "../../../../include/promotion_composant_graph.php"; ?>
            </form>
            <p id="msgConfirm"><?php if (isset($msgErr) && !empty(trim($msgErr))) echo $msgErr; ?></p>
        </div>
    </section>
    <?php include "../../../../include/footer.html" ?>
<script src="../../../../js/Traduction.js" defer></script>
</body>
</html>