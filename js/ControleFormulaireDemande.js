// Récupérer le bouton de validation
const btnValider = document.getElementById('valider');
    
// Ajouter un écouteur d'événement au clic sur le bouton
btnValider.addEventListener('click', function(event) {
    //Empêche l'envoie le temps de la vérification
    event.preventDefault();

    // Récupérer les valeurs des champs
    const nom = document.getElementById('nom').value;
    const prenom = document.getElementById('prenom').value;
    const email = document.getElementById('email').value;
    const telephone = document.getElementById('telephone').value;
    const besoin = document.getElementById('besoin').value;

    // Déclaration des constantes
    const regexMail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const regexTelephone = /^\+[0-9]{1,4}[0-9]{4,14}$/;

    // Initialiser la variable de message d'erreur
    let msg = '';

    // Effectuer les validations
    if (nom === '') {
        msg += "Le nom est obligatoire.<br>";
    }

    if (prenom === '') {
        msg += "Le prénom est obligatoire.<br>";
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

    if (besoin === "") {
        msg += "Il est nécessaire de décire votre besoin.<br>";
    }

    // Affichage des messages d'erreurs si une des valeur n'est pas respectée
    if (nom === '' || prenom === '' || email === '' || !regexMail.test(email) || telephone === '' || !regex.test(telephone) || besoin === "") {
        message.innerHTML = msg;
    } else {
        // Si pas d'erreur, soumettre le formulaire
        message.innerHTML = '';
        document.querySelector('form').submit();
    }
});