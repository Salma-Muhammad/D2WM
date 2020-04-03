<?php
function connexionBase()
{
    //declaration des parametre
    $host = "localhost";
    $user = "root";     // Votre loggin d'accès au serveur de BDD
    $password = "";     // Le Password pour vous identifier auprès du serveur
    $bdd = "entreprise";  // La bdd avec laquelle vous voulez travailler

    try
    {
        $db = new PDO('mysql:host='.$host.';charset=utf8;dbname='.$bdd, $user, $password);
    // Ajout d'une option PDO pour gérer les exceptions
        return $db;
        echo "Connexion réussi";
    }
    catch (Exception $e)
    {
        echo 'Erreur : ' . $e->getMessage() . '<br>';
        echo 'N° : ' . $e->getCode();
        die('Connexion au serveur impossible.');
    }
}
?>