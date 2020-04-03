<?php
use PDO;
use Employe;

class EmployeManager
{
    private $pdo;
    private $pdoStatement;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;charset=utf8;dbname=entreprise', 'root','');
    }

    public function create(Employe $employe)
    {

    }

    public function read($id)
    {
        $this->pdoStatement = $this->pdo->prepare('SELECT * FROM employe WHERE id = :id');
        //liaison des paramètres
        $this->pdoStatement->bindValue(':id', $id, PDO::PARAM_INT); 
        //exécution de la requete
        $executionOK = $this->pdoStatement->execute();
        if($executionOK)
        {
            // récupération de notre résultat
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

    public function readAll()
    {
        $this->pdoStatement = $this->pdo->query('SELECT * FROM employe')

        //construction d'un tableau d'objet de type Employe
        
        $employes = [];
        while($this->pdoStatement->fetchObjet('Employe'))
        {
            $employes[] = $employe;
        }
        return $employe;
    }

    public function update(Employe $employe)
    {

    }

    public function delete(Employe $employe)
    {

    }

}