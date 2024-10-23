<?php
// Fonction pour ajouter le fichier CSS personnalisé
function theme_enqueue_styles() {
    // Ajoute le style du thème parent
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    
    // Ajoute le style du thème enfant (si c'est un thème enfant)
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
}

// Hook pour charger les styles au moment opportun
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function enqueue_vibration_script() {
    wp_enqueue_script('vibration-form', get_stylesheet_directory_uri() . '/js/vibration-form.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_vibration_script');