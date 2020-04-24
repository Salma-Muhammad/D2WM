<?php
/**
 * ajout des hooks
 * les actions 
 * les actions servent à ajouter des actions aux processus wordpress
 * les filtres servent a modifier des données en sortie
 */

//affichage du logo
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


//construction des menus

add_theme_support('menus');

?>