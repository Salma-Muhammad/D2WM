<!-- application/views/liste.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Liste des produits</title>
</head>
<body>
    <h1>Liste des produits</h1>
    <p>Bonjour <?php echo $prenom." ".$nom; ?> !</p>
    <hr>
    <h1>Exercice 2 </h1>
    <ul>
        <?php foreach ($aProduits as $item):?>

                <li><?= $item;?></li>

        <?php endforeach;?>
        </ul>
</body>
</html>