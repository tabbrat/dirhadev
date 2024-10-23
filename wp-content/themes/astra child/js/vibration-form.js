document.addEventListener('DOMContentLoaded', function() {
    // Sélectionner le formulaire CF7 par sa classe
    const form = document.querySelector('.wpcf7-form'); 
  
    if (form) {
      // Ajouter la classe de vibration au formulaire
      form.classList.add('vibrating-form');
  
      // Stopper la vibration dès que l'utilisateur clique sur un champ du formulaire
      form.addEventListener('focusin', function() {
        form.classList.remove('vibrating-form');
      });
    }
  });
  