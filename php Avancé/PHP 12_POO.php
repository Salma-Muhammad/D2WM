<?php
date_default_timezone_set("Europe/Paris");

//on crée la classe Employe
class Employe 
{
    protected $nom;
    protected $prenom;
    protected $dateEmbauche;
    protected $poste;
    protected $salaire;// en k euros brut annuel
    protected $service;

    public function __construct($nom, $prenom, $dateEmbauche, $poste, $salaire, $service) 
    { 
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateEmbauche = $dateEmbauche;
        $this->poste = $poste;
        $this->salaire = $salaire;
        $this->service = $service;
    }

    public function getNom(){ return $this->nom; }
    public function getPrenom(){ return $this->prenom; }
    public function getDateEmbauche(){ return $this->dateEmbauche; }
    public function getPoste(){ return $this->poste; }
    public function getSalaire(){ return $this->salaire; }
    public function getService(){ return $this->service; }

    // determiner l'ancienneté  de l'employé
    public function Anciennete()
    {
        $dateEmbauche = date_create($this->getDateEmbauche());
        $date = date_create(date("d-m-Y"));
        $anciennete = date_diff($date, $dateEmbauche);
        return $anciennete->format('%Y');
    }

    // calcule de la prime
    public function primeAnciennete()
    {
        $primeAnciennete = ($this->getSalaire() * 0.02)*$this->Anciennete();
        return $primeAnciennete;
    }
    public function primeAnnuel()
    {
        $primeAnnuel = $this->getSalaire()* 0.05;
        return $primeAnnuel;
    }

    public function Affichage()
    {
        echo '<b>Nom : </b>'.$this->getNom().'<br>';
        echo '<b>Prénom : </b>'.$this->getPrenom().'<br>';
        echo '<b>Salaire : </b>'.$this->getSalaire().' k euros brut annuel <br>';
        echo '<b>Ancienneté : </b>'.$this->Anciennete().' an(s) d\'ancienneté <br>';
        echo '<b>Prime annuel : </b>'.$this->primeAnnuel().' k euros par an <br>';
        echo '<b>Prime ancienneté : </b>'.$this->primeAnciennete().' k euros pour '.$this->Anciennete().' an(s) <br>';
        echo 'Cet employé recevra '.$this->primeAnnuel().' et '.$this->primeAnciennete().' k euros le 30/11.<br><br>';
    }
}






// création employés
$employe1 = new Employe('SALIM', 'Omar', '05-11-2012', 'Developper', 10, 'informatique');
$employe2 = new Employe('FRAMERY', 'Roy', '25-01-2001', 'Directeur financier', 41, 'Finance');
$employe3 = new Employe('BOQUET', 'William', '01-12-1998', 'Directeur', 48, 'Direction');
$employe4 = new Employe('KINGUE', 'Claude', '06-08-1999', 'Vice-Directeur', 47, 'Commercial');
$employe5 = new Employe('MUHAMMAD', 'Salma', '23-01-2005', 'Chargé de recrutement', 36, 'Ressources humaines');

$employe1->Affichage();
$employe2->Affichage();
$employe3->Affichage();
$employe4->Affichage();
$employe5->Affichage();


