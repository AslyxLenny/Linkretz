// Récupérer le bouton de validation
const btnValider = document.getElementById('valider');

// Ajouter un écouteur d'événement au clic sur le bouton
btnValider.addEventListener('click', function(event) {
    //empêche l'envoie le temps de la vérification
    event.preventDefault();

    // Récupérer les valeurs des champs
    const prenom = document.getElementById('prenom').value;
    const nom = document.getElementById('nom').value;
    const telephone = document.getElementById('telephone').value;
    const fonction = document.getElementById('fonction').value;
    const profil = document.getElementById('profil').value;
    const email = document.getElementById('email').value;

    // Déclaration de la constante
    const regexTelephone = /^\+[0-9]{1,4}[0-9]{4,14}$/;
    const regexMail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


    // Initialiser la variable de message d'erreur
    let msg = '';
    
    // Effectuer les validations
    if (prenom === '') {
        msg += "Le prénom est obligatoire.<br>";
    }

    if (nom === '') {
        msg += "Le nom est obligatoire.<br>";
    }
    
    if (email === '') {
        msg += "L'e-mail est obligatoire.<br>";
    } else {
        if (!regexMail.test(email)) {
                msg += "Merci de saisir un e-mail valide.br>";
        }
    }

    if (telephone === '') {
        msg += "Le téléphone est obligatoire.<br>";
    } else {
        if (!regexTelephone.test(telephone)) {
                msg += "Le numéro de téléphone doit être au format international sans espace.<br>";
        }
    }

    if (fonction === "0") {
        msg += "La sélection d'une fonction est obligatoire.<br>";
    }

    if (profil != "admin" && profil != "emplo") {
        msg += "La sélection d'un profil est obligatoire.";
    }
    //Affichage des messages d'erreurs si une des valeur n'est pas respectée
    if (prenom === '' || nom === '' || telephone === '' || fonction === "0" || profil === '0' || !regexTelephone.test(telephone)) {
        message.innerHTML = msg;
    } else {
        // Si pas d'erreur, soumettre le formulaire
        message.innerHTML = '';
        document.querySelector('form').submit();
    }
});