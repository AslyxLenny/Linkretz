// Récupérer le bouton de validation
const btnValider = document.getElementById('valider');

// Ajouter un écouteur d'événement au clic sur le bouton
btnValider.addEventListener('click', function(event) {
    //empêche l'envoie le temps de la vérification
    event.preventDefault();

    // Récupérer les valeurs des champs
    const immatriculation = document.getElementById('immatriculation').value;
    const nom = document.getElementById('nom').value;
    const nom_en = document.getElementById('nom_en').value;
    const description = document.getElementById('description').value;
    const description_en = document.getElementById('description_en').value;
    const specialite = document.getElementById('specialite').value;

    // Initialiser la variable de message d'erreur
    let msg = '';
    
    // Effectuer les validations
    if (immatriculation === '') {
        msg += "L'immatriculation est obligatoire.<br>";
    }

    if (nom === '') {
        msg += "Le nom français du tour-opérateur est obligatoire.<br>";
    }

    if (nom_en === '') {
        msg += "Le nom anglais du tour-opérateur est obligatoire.<br>";
    }

    if (description === '') {
        msg += "La description française du tour-opérateur est obligatoire.<br>";
    }

    if (description_en === '') {
        msg += "La description anglaise du tour-opérateur est obligatoire.<br>";
    }

    if (specialite === "0") {
        msg += "La selection d'une spécialité est obligatoire.<br>";
    }

    //Affichage des messages d'erreurs si une des valeur n'est pas respectée
    if (immatriculation === '' || nom === '' || nom_en === ''|| description === '' || description_en === '' || specialite === "0") {
        message.innerHTML = msg;
    } else {
        // Si pas d'erreur, soumettre le formulaire
        message.innerHTML = '';
        document.querySelector('form').submit();
    }
});