<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice CodeIgniter</title>
</head>
<body>
    <h1>Exercice 2 </h1>
    <ul>
        <?php foreach ($aProduits as $item):?>

                <li><?= $item;?></li>

        <?php endforeach;?>
        </ul>
    
</body>
</html>