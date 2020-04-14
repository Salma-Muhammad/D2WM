<!--chemin utiliser http://localhost/ci-exemple/index.php/produits/liste-->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url("assets/css/style.css"); ?>"> 
    <title>Exercice Codeigniter</title>
    
</head>
<body>
    <img class ="fit-picture" src="<?= base_url("assets/images/code.jpeg"); ?>" alt="img codeIgniter"> 
    <h1>Exercice 1 : affichage echo</h1>
    <p>Bonjour <?php echo $prenom." ".$nom; ?> !</p>   
<hr>
    
<h1>Exercice 2 : affichage tableau </h1>
<p> Liste des produits :</p>
    <ul>
        <?php foreach ($reference as $item):?>
                <li><?= $item;?></li>
        <?php endforeach;?>
        </ul>
<hr>
<h1>Les base de données :</h1>
<a href="<?= site_url("produits/ajouter"); ?>" role="button">Ajouter un produit</a>
<p>Liste des produits : </p>
<div class="row">
    <div class="col-lg-6">    
    <table border="1">
        <thead>
        <tr>
            <th>id</th>
            <th>Référence</th>
            <th>Libellé</th>
            <th>Description</th>
            <th>Modification</th>
        </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($liste_produits as $row) 
            {
                        echo "<tr>";
                        echo"<td>".$row->pro_id."</td>";
                        echo"<td>".$row->pro_ref."</td>";
                        echo"<td>".$row->pro_libelle."</td>";
                        echo"<td>".$row->pro_description."</td>"; 
                        echo"<td><a href=".site_url('produits/modifier/'.$row->pro_id).">Modif</a></td>";
                        echo"</tr>";
            }
            ?>
        <tbody>
    </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>