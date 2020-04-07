<!--chemin utiliser http://localhost/ci/index.php/produits/liste-->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= base_url("assets/css/style.css"); ?>"> 
    <title>Exercice Codeigniter</title>
    
</head>
<body>
    <img class ="fit-picture" src="<?= base_url("assets/images/code.jpeg"); ?>" alt="img codeIgniter"> 
    <h1>Exercice 1 : affichage echo</h1>
    <p>Bonjour <?php echo $prenom." ".$nom; ?> !</p>   
<hr>
    
<h1>Exercice 2 : affichage tableau </h1>
<p> Liste de produits :</p>
    <ul>
        <?php foreach ($reference as $item):?>
                <li><?= $item;?></li>
        <?php endforeach;?>
        </ul>
<hr>
<a href="<?= site_url("produits/modifier/10"); ?>">Modifier</a> 

</body>

</body>
</html>