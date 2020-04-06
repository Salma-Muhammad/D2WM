<?php
// application/controllers/Produits.php

// instruction de sécurité qui empêche l'accès direct au fichier
defined('BASEPATH') OR exit('No direct script access allowed');

//la classe Produits hérite de la classe CI_Controller.
class Produits extends CI_Controller 
{
/**
 * Exercice 1 
 */

    public function liste()
    {
        // Déclaration du tableau associatif à tranmettre à la vue
        $aView = array();

        // Dans le tableau, on créé une donnée 'prénom' qui a pour valeur 'Dave'    
        $aView["prenom"] = "Dave";     
        // on ajoute un 2eme variable contenant Loper  
        $aView["nom"] = "Loper" ;  

        // On passe le tableau en second argument de la méthode 
        $this->load->view('liste', $aView);
    }

/**
 * Exercice 2
 */
    public function tableau()
    {
        $aProduits["item"] = ["Aramis", "Athos", "Clatronic", "Camping", "Green"];   
        
        $this->load->view('tableau', $aProduits);
    }





}
