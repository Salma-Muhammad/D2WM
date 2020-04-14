<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class ProduitsModel extends CI_Model
{
    public function liste() 
    {
        $this->load->database();
        $requete = $this->db->query("SELECT * FROM produits");
        $aProduits = $requete->result();  
        return $aProduits;            
    } // -- liste()    

    public function ajouter()
    {
        $requete = $this->db->query("INSERT INTO INSERT INTO `produits`(`pro_id`, `pro_cat_id`, `pro_ref`, `pro_libelle`, `pro_description`, `pro_prix`, `pro_stock`, `pro_couleur`, `pro_photo`, `pro_d_ajout`, `pro_d_modif`, `pro_bloque`) 
        VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12])");
        
    }

    public function modifier($id)
    {
        $requete = $this->db->query("UPDATE `produits` SET `pro_id`=[value-1],`pro_cat_id`=[value-2],`pro_ref`=[value-3],`pro_libelle`=[value-4],
        `pro_description`=[value-5],`pro_prix`=[value-6],`pro_stock`=[value-7],`pro_couleur`=[value-8],`pro_photo`=[value-9],
        `pro_d_ajout`=[value-10],`pro_d_modif`=[value-11],`pro_bloque`=[value-12] WHERE pro_id= ?", $id);

    }

    public function supprimer($id)
    {
        $requete = $this->db->query("DELETE FROM `produits` WHERE pro_id= ?", $id);
        
    }

} // -- ProduitsModel
