<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



<h2>1.Exemple : écriture dans un fichiers</h2>
<p>Affichage dans la page essai.txt</p>
<?php
// On déclare une variable dont la valeur (contenu) sera écrite dans le fichier
$myVar = "Bonjour le monde \n";

// Ouverture en écriture seule 
$fp = fopen("essai.txt", "a"); 

// Ecriture du contenu ($myVar) 
fputs($fp, $myVar); 

// Fermeture du fichier  
fclose($fp); 
?>



<h2>2.Exemple : lecture dans un fichiers</h2>
<?php
// Ouverture en lecture seule  
$fp = fopen("essai.txt", "r"); 

// Boucle jusqu'à la fin du fichier
while (!feof($fp)) 
{ 
    // Lecture d'une ligne, le contenu de la ligne est affecté à la variable $ligne  
    $ligne = fgets($fp, 4096); 
    echo $ligne."<br>"; 
}
?>



<h2>3.Exercice : un compteur texte en PHP</h2>

<?php 
// On ouvre le fichier moncompteur.txt
$fichier = fopen("moncompteur.txt","r+");

// on lit le nombre indiqué dans ce fichier dans la variable
$visiteurs = fgets($fichier,255);

// on ajoute 1 au nombre de visiteurs
$visiteurs++;

// on se positionne au début du fichier
fseek($fichier,0);

// on écrit le nouveau nombre dans le fichier
fputs($fichier,$visiteurs);

// on referme le fichier moncompteur.txt
fclose($fichier);

// on indique sur la page le nombre de visiteurs
print("$visiteurs personnes sont passées par ici");
?>




<h2>4.Exercices</h2>
<?php
// Ouverture en lecture seule  
$fichier1 = fopen("ListeLiens.txt", "r"); 

// Boucle jusqu'à la fin du fichier
while (!feof($fichier1)) 
{ 
    // Lecture d'une ligne, le contenu de la ligne est affecté à la variable $line  
    $line = fgets($fichier1, 4096); 
    echo "<a href = ".$line.">$line</a> <br>"; 
}
?>



<h2>4.Exercice : téléchargement de fichiers</h2><br>

<form action="PHP_Les fichiers.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fichier">
    <input type="submit" name="valider"> 
</form>
<?php
// Le code suivant récupère l'extension ('jpg')
$extension = pathinfo($_POST["fichier"]["tmp_name"], PATHINFO_EXTENSION);  
// On met les types autorisés dans un tableau (ici pour une image)
$aMimeTypes = array("image/gif", "image/jpeg", "image/pjpeg", "image/png", "image/x-png", "image/tiff");

// On ouvre l'extension FILE_INFO
$finfo = finfo_open(FILEINFO_MIME_TYPE);

// On extrait le type MIME du fichier via l'extension FILE_INFO 
$mimetype = finfo_file($finfo, $_FILES["fichier"]["tmp_name"]);

// On ferme l'utilisation de FILE_INFO 
finfo_close($finfo);

if (in_array($mimetype, $aMimeTypes))
{
    echo "type de fichiers autorisé";        
    } 
    else 
    {
        // Le type n'est pas autorisé, donc ERREUR
        echo "Type de fichier non autorisé";    
        exit;
    }     

    // Si c'est un tableau et que celui-ci n'est pas vide 
if (is_array($_FILES["fichier"]["error"]) && !empty($_FILES["fichier"]["error"]) ) 
{ 
    ("ce type de fichiers n'est ps autorisé");            
} 
?>


</body>
</html>