<?php
date_default_timezone_set("Europe/Paris");

require "connexion_bdd.php";

$db = connexionBase();
$sql = "SELECT `emp_id`, `emp_nom`, `emp_prenom`, `emp_dateembauche`, `emp_fonction`, `emp_salaire`, `emp_service` FROM `employe`";
$requete = $db->query($sql);

// while ($perso = $requete->fetch(PDO::FETCH_ASSOC))
// {
//     echo $perso['emp_nom'];
// }


class Employe
{
    protected $id;
    protected $nom;
    protected $prenom;
    protected $dateEmbauche;
    protected $poste;
    protected $salaire;
    protected $service;
    public $db;

  public function __construct()
  {
    $this->db = connexionBase();
  }
    // public function setId($id){ return $this->id = $id; }
    // public function setNom($nom){ return $this->nom = $nom; }
    // public function setPrenom($prenom){ return $this->prenom= $prenom; }
    // public function setDateEmbauche($dateEmbauche){ return $this->dateEmbauche = $dateEmbauche; }
    // public function setPoste($poste){ return $this->poste = $poste ; }
    // public function setSalaire($salaire){ return $this->salaire = $salaire; }
    // public function setService($service){ return $this->service = $service; }
    
    // public function getId(){ return $this->id; }
    // public function getNom(){ return $this->nom; }
    // public function getPrenom(){ return $this->prenom; }
    // public function getDateEmbauche(){ return $this->dateEmbauche; }
    // public function getPoste(){ return $this->poste; }
    // public function getSalaire(){ return $this->salaire; }
    // public function getService(){ return $this->service; }

    public function Anciennete()
    {
      $sql = "SELECT `emp_dateembauche` FROM employe";
      $requete = $this->db->query($sql);

      while (list($dateEmbauche) = $requete->fetch(PDO::FETCH_NUM))
      {
        $date = date("Y-m-d");
        $anciennete = date_diff(new Datetime($date), new Datetime($dateEmbauche));
        echo $anciennete->format('%Y')."<br>";
      }
    }

    public function primeAnciennete()
    {
      $sql = "SELECT `emp_nom`, `emp_prenom`, `emp_salaire` FROM `employe`";
      $requete = $this->db->query($sql);

      while (list($nom, $prenom, $salaire) = $requete->fetch(PDO::FETCH_NUM))
      {
        $primeAnciennete = ($salaire* 0.02)*$anciennete->Anciennete();
        echo $primeAnciennete;
      }
    }

    public function nbemploye()
    {
    $sql = "SELECT count(`emp_id`) FROM `employe`";
    $requete = $this->db->query($sql);
    
    while (list($id) = $requete->fetch(PDO::FETCH_NUM)) 
    {
      echo "L'entreprise compte ".$id." employés.<br>";
    }
    }

    public function ranger()
    {
    $sql = "SELECT `emp_nom`, `emp_prenom` FROM `employe` ORDER BY `emp_nom` ASC ";   
    $requete = $this->db->query($sql);
    
      while (list($nom, $prenom) = $requete->fetch(PDO::FETCH_NUM)) 
      {
        echo $nom." ".$prenom."<br>";
      }
    }

    public function parService()
    {
      $sql = "SELECT `emp_service`, `emp_nom`,`emp_prenom`FROM `employe`ORDER BY `emp_service`";
      $requete = $this->db->query($sql);

      while (list($service, $nom, $prenom) = $requete->fetch(PDO::FETCH_NUM)) 
      {
        echo "<b>".$service." :</b> ".$nom." ".$prenom."<br>";
      }
    }


}

//on déclare un nouvelle employé
$employe = new Employe();
// anciennté de l'employé dans l'entreprise
$employe->Anciennete();
//exemple pour tester
$employe->nbemploye();
//employe ranger par ordre alphabétique
$employe->ranger();
//employe ranger par service
$employe->parService();
//prime anciennté
$employe->primeAnciennete();