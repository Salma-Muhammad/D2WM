<?php
use PDO;
use Employe;

class EmployeManager
{
    /**
     * $pdo Objet PDO lié a la base de données "entreprise" 
     * pour l'utiliser dans plusieurs méthode par la suite
     */
    private $pdo;
    /**
     * objet PDOStatement resultant de l'utilisation des méthodes PDO::query
     * et pdo::prepare pour l'utiliser dans différrente méthode 
     */
    private $pdoStatement;

    // Initialisation de la connexion à la base de données
    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;charset=utf8;dbname=entreprise', 'root','');
    }

    /**
     * Permettra d'insérer un objet dans la bdd
     * @param Employe $employe
     * @return boolean : true si l'objet est insérer false si erreur
     */
    public function create(Employe $employe)
    {

    }

    /**
     * permettra de récupererun objet de la base de données
     * @param [int] $id identifiant de l'employé
     * @return boolean false si erreur sinon un objet Employe correspondant a l'id 
     * ou null si aucunne correspondance
     */
    public function read($id)
    {
        $this->pdoStatement = $this->pdo->prepare('SELECT * FROM employe WHERE id = :id');
        //liaison des paramètres
        $this->pdoStatement->bindValue(':id', $id, PDO::PARAM_INT); 
        //exécution de la requete
        $executionOK = $this->pdoStatement->execute();
        if($executionOK)
        {
            // récupération du résultat
            $employe = $this->pdoStatement->fetchObject('Employe');
            if($employe === false)
            {
                return null;
            }else 
            {
                return $employe;
            }

        }else
        {
            return false;
        }
    }

    /**
     * Récupére tous les objets EMploye de la bdd
     *
     * @return array|boolean tableau d'objets Employe ou un tableau vides s'il
     * n'y a aucun objet dans la bdd ou false si une erreur survient
     */
    public function readAll()
    {
        $this->pdoStatement = $this->pdo->query('SELECT * FROM employe')

        //construction d'un tableau d'objet 
        $employes = [];
        while($this->pdoStatement->fetchObjet('Employe'))
        {
            $employes[] = $employe;
        }
        return $employe;
    }

    /**
     * Met a jour un objet stockée dans la bdd
     * @param Employe $employe
     * @return boolean true en cas de succés ou false si erreur
     */
    public function update(Employe $employe)
    {

    }

    /**
     * Supprime un objet en bdd
     * @param Employe $employe
     * @return boolean true en cas de succés ou false si erreur
     */
    public function delete(Employe $employe)
    {

    }

}