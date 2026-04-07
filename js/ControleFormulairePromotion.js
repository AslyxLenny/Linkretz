//fonction qui permet de supprimer tout les balise qui on la même class
function supprEle(parag) {
    let eleMessage = document.querySelector(".msg_erreur")
    if (eleMessage){
	    let element = document.querySelectorAll(parag);
	    for (let balise of element) {
            balise.remove()
        }
    }
}

let btnValid = document.querySelector("#valider")
btnValid.addEventListener("click", function(event) {
    //on empêche l'envoie du formulaire
    event.preventDefault()

    //on supprime tous les message d'erreur s'il y en a
    supprEle(".msg_erreur")
    document.querySelector("#msgConfirm").innerHTML = ""

    //variables qui contiennent les valeurs des champs
    let eleIntitule = document.querySelector("#intitule").value
    let eleDuree = document.querySelector("#duree").value
    let elePrix = document.querySelector("#prix").value

    //variables qui contiendra les message d'erreur
    let msgIntitule = ""
    let msgDuree = ""
    let msgPrix = ""

    //expression regex pour vérifier qu'une variable ne contient que des chiffres
    // /^M[0-9]+$/
    // /^ et $/ : début et fin de chaîne
    // [0-9] : chiffres compris entre 0 et 9
    // + : signifie un ou plusieurs
    const regexNum = /^[0-9]+$/

    //on vérifie que tous les champs contiennent des valeurs valides
    if (eleIntitule.trim() == "") {
        msgIntitule = "Intitulé invalide"
    }
    if (eleDuree.trim() == "" || regexNum.test(eleDuree) == false) {
        msgDuree = "Durée invalide. Saisissez un nombre entier"
    }
    if (elePrix.trim() == "" || regexNum.test(elePrix) == false) {
        msgPrix = "Prix invalie. Saisissez un un nombre entier"
    }

    //si il n'y a aucun message d'erreur, on envoie le formulaire
    if (msgIntitule == "" && msgDuree == "" && msgPrix == "") {
        document.querySelector("form").submit()
    } else {
        //afficher un message pour dire que l'enregistrement n'a pas été pris en compte
        let eleMsgErr = document.querySelector("#msgConfirm")
        eleMsgErr.innerHTML = "La promotion n'a pas été enregistré"

        if (!msgIntitule == "") {
            //création d'un paragraphe p qui les messages d'erreurs
            eleMsgErr = document.createElement('p')
            eleMsgErr.setAttribute("class","msg_erreur")
            eleMsgErr.innerHTML = msgIntitule

            let endroit = document.querySelector("#labelDuree")
            endroit.before(eleMsgErr,endroit)
        }
        if (!msgDuree == "") {
            //création d'un paragraphe p qui les messages d'erreurs
            eleMsgErr = document.createElement('p')
            eleMsgErr.setAttribute("class","msg_erreur")
            eleMsgErr.innerHTML = msgDuree

            let endroit = document.querySelector("#labelPrix")
            endroit.before(eleMsgErr,endroit)
        }
        if (!msgPrix == "") {
            //création d'un paragraphe p qui les messages d'erreurs
            eleMsgErr = document.createElement('p')
            eleMsgErr.setAttribute("class","msg_erreur")
            eleMsgErr.innerHTML = msgPrix

            let endroit = document.querySelector("#valider")
            endroit.before(eleMsgErr,endroit)
        }
    }
})