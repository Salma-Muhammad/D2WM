<?php
// application/controllers/Produits.php

// instruction de sécurité qui empêche l'accès direct au fichier
defined('BASEPATH') OR exit('No direct script access allowed');

//la classe Produits hérite de la classe CI_Controller.
class Produits extends CI_Controller 
{
/**
 * Exercice 1 et 2
 * affichage tableau 
 */

    public function liste()
    {
        // Déclaration du tableau associatif à tranmettre à la vue
        $aView = array();

        // Dans le tableau, on créé une donnée 'prénom' qui a pour valeur 'Dave'    
        $aView["prenom"] = "Dave";     
        // on ajoute un 2eme variable contenant Loper  
        $aView["nom"] = "Loper" ;  

        $aView['reference']= array("Aramis", "Athos", "Clatronic", "Camping", "Green");
        
        /* ANCIEN CODE 
        $this->load->database();
        $requete = $this->db->query('SELECT * FROM produits');
        $aView["liste"] = $requete->result();
        */
    
        // NOUVEAU CODE 
    
        // Chargement du modèle 'produitsModel'
        $this->load->model('produitsModel');
    
        /* On appelle la méthode liste() du modèle,
        * qui retourne le tableau de résultat ici affecté dans la variable $aListe (un tableau) 
        * remarque la syntaxe $this->nomModele->methode()       
        */
        $aListe = $this->produitsModel->liste();
    
        $aView["liste_produits"] = $aListe;
    
        $this->load->view('liste', $aListe + $aView);
    
        // -- fin NOUVEAU CODE  
        // On passe le tableau en second argument de la méthode 
        //affichage dans views/liste.php
        //$this->load->view('liste', $aView);
    }

    public function ajouter()
    {
        if ($this->input->post()) 
        { // 2ème appel de la page: traitement du formulaire
            $data = $this->input->post();

            // Ajout d'une date d'ajout que le formulaire ne contient pas
            $data["pro_d_ajout"] = date("Y-m-d h:i:s");
            
            // Transformation d'une information venant du formalaire
            // par exemple forcer la référence d'un produit en majuscules
            $pro_ref = $this->input->post("pro_ref");
            $data["pro_ref"] = strtoupper($pro_ref);
            
            // Permet de personnaliser le style des messages d'erreurs
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger" style="width: 255px;font-size: 14px;">', '</div>');  
            // -> 1er argument : balise HTML d'ouverture du message d'erreur.
            // -> 2ème argument : balise HTML de fermeture.

            // Définition des filtres, ici une valeur doit avoir été saisie pour le champ 'pro_ref'
            $this->form_validation->set_rules('pro_ref', 'Référence', 'required|min_length[6]', array("required" => "Le %s doit être obligatoire.", "min_length" => "Le %s doit avoir longueur minimum de 6 caractères."));
            $this->form_validation->set_rules("pro_libelle", "Libellé", "required", array("required" => "Le %s doit être obligatoire."));                
            $this->form_validation->set_rules("pro_cat_id", "Catégorie", "required", array("required" => "La %s doit être obligatoire."));
            
            if ($this->form_validation->run() == FALSE)
            { // Echec de la validation, on réaffiche la vue formulaire 
                $this->load->view('ajouter');
            }
            else
            { // La validation a réussi, nos valeurs sont bonnes, on peut insérer en base
                // Insertion en base
                $this->db->insert('produits', $data);
                
                // Redirection sur la page de liste des produits
                redirect("produits/liste");
            }       
        } 
        else 
        { // 1er appel de la page: affichage du formulaire
            $this->load->view('ajouter');
        }
    } // -- ajouter() 


    public function modifier($id)
    {
        // Requête de sélection de l'enregistrement souhaité, ici le produit 7 
        $produit = $this->db->query("SELECT * FROM produits WHERE pro_id=?", $id);
        $aView["produit"] = $produit->row(); // première ligne du résultat

        if ($this->input->post()) 
        { // 2ème appel de la page: traitement du formulaire

            $data = $this->input->post();
            // Définition des filtres, ici une valeur doit avoir été saisie pour le champ 'pro_ref'
            $this->form_validation->set_rules('pro_ref', 'Référence', 'required');
            $this->form_validation->set_rules("pro_libelle", "Libellé", "required", array("required" => "Le %s doit être obligatoire."));                
            $this->form_validation->set_rules("pro_cat_id", "Catégorie", "required", array("required" => "La %s doit être obligatoire."));
            if ($this->form_validation->run() == FALSE)
            { // Echec de la validation, on réaffiche la vue formulaire 
                $this->load->view('modifier', $aView);
            }
            else
            { // La validation a réussi, nos valeurs sont bonnes, on peut modifier en base  
                $this->db->where('pro_id', $id);
                $this->db->update('produits', $data);
                redirect("produits/liste");
            }
        } 
        else 
        { // 1er appel de la page: affichage du formulaire             
        $this->load->view('modifier', $aView);
        }
    } // -- modifier()


    public function suppression($id)
    {
        //on execute la requete de suppression
        $this->db->where('pro_id', $id);
        $this->db->delete('produits');
        //on redirige vers la liste des produits
        redirect("produits/liste");
    }// -- suppression()

}