<?php 
//on demarre la session pour récupérer les variables sessions
session_start ();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemples</title>
    <!--lien bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>

    <h1 class="text-center"> Exercice : formulaire d'authentification </h1>

<form class="text-center border border-light p-5 offset-3" action="login.php" method="POST">

    <!-- Email -->
    <div class="col-6">
        <?php if (isset($_SESSION['emailErr'])) // Si emailErr existe alors 
        {
            echo $_SESSION['emailErr'] ; // afficher Le contenu de emailErr
            unset($_SESSION['emailErr']); // vider la variable $_SESSION[emailErr]
        } ?>
        <input type="text" id="email" name="email" class="form-control mb-4" placeholder="E-mail" value="<?= $_SESSION['email']?>">
    </div>

    <!-- Password -->
    <div class="col-6">
        <?php if (isset($_SESSION['passErr']))// Si passErr existe alors
        { 
            echo $_SESSION['passErr']; // afficher Le contenu de passErr
            unset($_SESSION['passErr']); // vider la variable $_SESSION[passErr]
        } ?>
        <input type="password" id="password" name="password" class="form-control mb-4" placeholder="Password">
    </div>

    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4 col-4 offset-1" type="submit">Sign in</button>
</form>


<!--lien bootstrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
</body>
</html>