<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice CodeIgniter</title>
</head>
<body>
<h1>Exercice 2 : affichage tableau </h1>

<p> Liste de produits :</p>
    <ul>
        <?php foreach ($reference as $item):?>

                <li><?= $item;?></li>

        <?php endforeach;?>
        </ul>
</body>
</html>