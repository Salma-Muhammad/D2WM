<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

/*----------gestion du texte-----------------*/
function excerpt_display_strong($texte) 
{
    return "<strong>".$texte."</strong>";
}   

add_filter('get_the_excerpt', 'excerpt_display_strong');

/*---------gestion du logo Youpi----------*/
function youpi_custom_logo_setup() 
{
    $aParams = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );

    // Ajout du support 
    add_theme_support('custom-logo', $aParams );
}

add_action( 'after_setup_theme', 'youpi_custom_logo_setup' );


/*---------------gestion des menus------------*/
add_theme_support('menus');  
register_nav_menu("principal", "Menu principal");

//ne pas refermer la balise php