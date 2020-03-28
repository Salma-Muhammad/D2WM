	
<?php
echo "<h2> Exercices exemples </h2>";

$date = date("d/m/Y");
echo"Nous sommes le ".$date."<br>";

// Ou directement :
echo"Nous sommes le ".date("d/m/Y")."<br>";

echo date("H:i:s");
echo "<br><br>";

/* Exercice 1
Affichez la date du jour au format mardi 2 juillet 2019.*/
echo "<h2>Exercice 1</h2>";

date_default_timezone_set('Europe/Paris');
setlocale(LC_ALL, 'fr_FR@euro', 'fr_FR', 'fra_fra');
echo strftime("<b>date format fr :</b> %A %e %B %Y <br><br>");

echo "<b>autres exemples </b><br>";
$date_française = date("D d F Y");
echo "Nous sommes le ". $date_française;
echo "<br><br>";

/*Exercice 2
Trouvez le numéro de semaine de la date suivante : 14/07/2019.*/
echo "<h2>Exercice 2</h2>";
$date_display = '2019-07-14' ;
echo "C'est la semaine " . date('W',strtotime($date_display)) ." de ". date('Y',strtotime($date_display));
echo "<br><br>";


/*Exercice 3
Combien reste-t-il de jours avant la fin de votre formation.*/
echo "<h2>Exercice 3</h2>";

$date_debut = strftime("%e.%m.%Y");
$date_fin = date("31.07.2020");
$duree = (strtotime($date_fin) - strtotime($date_debut));
$duree = round($duree / (60*60*24));
echo "Il nous reste ".$duree." jours avant la fin de la formation.";
echo "<br><br>";


/*Exercice 4
Reprenez l'exercice 3, mais traitez le problème avec les fonctions de gestion du timestamp, time() et mktime().*/
echo "<h2>Exercice 4</h2>";

$duree2 = mktime(0,0,0,07,31,2020) - time();
$duree2 = round($duree2 / (60*60*24));
echo "Il nous reste ".$duree2." jours avant la fin de la formation.";
echo "<br><br>";


/*Exercice 5
Quelle sera la prochaine année bissextile ?*/
echo "<h2>Exercice 5</h2>";
function est_bissextile($annee)
    {
        return date("m-d", strtotime("$annee-02-29")) == "02-29";
    }

for($I=2019;$I<=2025;$I++) 
{
    if(est_bissextile($I)) 
    {
        echo strval($I)." est une année bissextile.<BR>";
    }
    
}
echo "<BR><BR>";


/*Exercice 6
Montrez que la date du 17/17/2019 est erronée.*/
echo "<h2>Exercice 6</h2>";
$datePattern = "/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/";
$date1 = "17/17/2019";

if (preg_match($datePattern, $date))
{
    echo"La date ".$date1." est valide.<br>";
}
else 
{
    echo"La date ".$date1." est erronée.<br>";
} 
echo "<br><br>";


/*Exercice 7
Affichez l'heure courante sous cette forme : 11h25.*/
echo "<h2>Exercice 7</h2>";
echo "Il est ".date("H")." heures et ".date("i")." minutes";
echo "<br><br>";


/*Exercice 8
Ajoutez 1 mois à la date courante.*/
echo "<h2>Exercice 8</h2>";

$date3 = date("d-m-Y");
echo "La date d'aujourd'hui : ".$date3."<br>";
$date3 = date("d-m-Y", strtotime("+1 month", strtotime($date3."-01" )));
echo "Dans un mois la date sera : ".$date3 ;

echo "<br><br>";


?>