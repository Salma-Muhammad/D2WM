<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url("assets/css/style.css"); ?>"> 
    <title>CI formulaire</title>
</head>
<body>


<h1>Les formulaires : modif en bd</h1>
<?= validation_errors(); ?>
<?= form_open(); ?>

<input type="hidden" name="pro_id" value="<?= $produit->pro_id; ?>">

    <div class="form-group">
        <label for="pro_libelle">Libellé :</label>
        <input type="text" name="pro_libelle" id="pro_libelle" class="form-control" value ="<?= set_value('pro_libelle', $produit->pro_libelle); ?>">
        <?= form_error('pro_libelle'); ?>
    </div> 

    <div class="form-group">
        <label for="pro_ref">Référence :</label>
        <input type="text" name="pro_ref" id="pro_ref" class="form-control" value="<?= set_value('pro_ref', $produit->pro_ref); ?>">
        <?= form_error('pro_ref'); ?>
    </div> 

    <div class="form-group">
        <label for="pro_cat_id">Catégorie :</label>
        <input type="text" name="pro_cat_id" id="pro_cat_id" class="form-control" value="<?= set_value('pro_cat_id', $produit->pro_cat_id); ?>">
        <?php echo form_error('pro_cat_id'); ?>
    </div>

    <button type="submit" class="btn btn-dark">Modifier</button>  
    <a href="<?= site_url("produits/suppression/".$produit->pro_id); ?>" role="button" >Supprimer</a>
 
</form>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

</body>
</html>