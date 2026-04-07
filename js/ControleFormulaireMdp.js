// Récupérer le bouton de validation
const btnValider = document.getElementById('valider');

// Ajouter un écouteur d'événement au clic sur le bouton
btnValider.addEventListener('click', function(event) {
    //empêche l'envoie le temps de la vérification
    event.preventDefault();

    // Récupérer les valeurs des champs
    const newpassword = document.getElementById('newpassword').value;
    const checknewpassword = document.getElementById('checknewpassword').value;

    // Déclaration de la constante
    const regexMdp = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\w\s]).{8,}$/;

    // Initialiser la variable de message d'erreur
    let msg = '';
    
    // Effectuer les validations
    if (!regexMdp.test(newpassword)) {
        msg += "Le mot de passe doit contenir au minimum 8 caractères, 1 majuscule, 1 minuscule, 1 chiffre et 1 caractère spéciale.<br>";
    }
    
    if(newpassword != checknewpassword) {
        msg += "Les mot de passe ne sont pas identiques.<br>";
    }

    //Affichage des messages d'erreurs si une des valeur n'est pas respectée
    if (!regexMdp.test(newpassword) || newpassword != checknewpassword) {
        message.innerHTML = msg;
    } else {
        // Si pas d'erreur, soumettre le formulaire
        message.innerHTML = '';
        document.querySelector('form').submit();
    }
});