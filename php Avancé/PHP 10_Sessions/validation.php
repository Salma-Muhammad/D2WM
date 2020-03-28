<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

// On récupère nos variables de session
if (isset($_SESSION['email']) && isset($_SESSION['password'])) {

	echo '<body>';
	echo 'Votre login est '.$_SESSION['email'].' et votre mot de passe est '.$_SESSION['password'].'.';
	echo '<br />';

	// On affiche un lien pour fermer notre session
	echo '<a href="./sessions.php">Déconnection</a>';
}
else {
	echo 'Les variables ne sont pas déclarées.';
}
?>
