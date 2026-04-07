// Sélectionne tous les liens avec la classe "del" et leur ajoute un gestionnaire de clic
document.querySelectorAll('.del').forEach(lien => {
  lien.addEventListener('click', event => {
    // Affiche une boîte de confirmation
    const confirmation = confirm("Êtes-vous sûr de vouloir supprimer ce tour-opérateur ?");
    // Si l'utilisateur annule, on empêche le comportement par défaut (navigation vers tour_operateur_del.php)
    if (!confirmation) {
      event.preventDefault();
    }
  });
});