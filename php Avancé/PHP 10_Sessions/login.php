<?php
// on la démarre 
session_start ();


// verification des champs input du formulaire
if (empty($_POST['email']))  // si le champs email est vide
{
	$verif = false ;  
	$_SESSION['emailErr'] = "L'email est requis"; //msg d'erreur
} // verification de la saisie avec la regex
else if (!preg_match("/^[a-zA-Z_]+(\.[a-zA-Z_]+)*\@[a-zA-Z_]+(\.[a-zA-Z_]+)*\.[a-zA-Z]{2,4}$/", $_POST["email"]))
{
	$verif = false ;  
	$_SESSION['emailErr'] = "l'email n'est pas valide"; //msg d'erreur
} 
else
{
	$verif = true ; // la saisie correspond à la regex 
}


if (empty($_POST['password'])) //si le champs password est vide
{
	$verif = false ;
	$_SESSION['passErr'] = 'Le mot de passe est requis'; //msg d'erreur
}


if ($verif == false) // les deux champs ne sont pas remplis
{
	header ('Location:sessions.php'); //redirection vers la page de session 
}
else 
{
	//on vérifie les informations du formulaire
	if (isset($_POST['email']) && isset($_POST['password'])) 
	{
		// on enregistre les paramètres comme variables de session
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['password'] = $_POST['password'];
		// on redirige l'utilisateur vers la page de validation
		header ('Location:validation.php');
		echo "<script>alert(\"la variable est nulle\")</script>";
	}
	else 
	{
		// redirection vers la page d'accueil
		header ('Location:sessions.php');
		echo "<script>alert(\"Connexion echoué\")</script>";
	}
}
?>