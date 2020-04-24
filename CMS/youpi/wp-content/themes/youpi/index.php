<?php
/**
* C’est ici que se trouve la structure HTML de base du site, ainsi que la « boucle WordPress »
*  qui va récupérer le contenu présent dans la base de données pour l’afficher dynamiquement sur les pages. 

* Si le fichier index.php est le seul template du thème, toutes les pages du site l’utiliseront.
*/

//appel du header
get_header();
?>

<body>
<div class="container">
    <div class="row">
        <div class="col-12">    
        <img src="http://localhost/wordpress522/wp-content/uploads/2019/10/cropped-youpi_logo.png" alt="Mon premier site Worpdress" class="class-fluid">      </div>  <!-- .col -->  
	    </div>  <!-- .row -->   
	<div id="menu" role="navigation" class="border-top border-bottom m-3"> 
        <ul>
            <li class="page_item page-item-36"><a href="mentions-legales/">Mentions légales</a></li>
            <li class="page_item page-item-2"><a href="page-d-exemple/">Page d’exemple</a></li>
        </ul>
	</div>
    <div class="row">
	    <div class="col-8">
		    <h1><a href="http://localhost/wordpress522/2019/10/22/maecenas-luctus-justo/" title="Maecenas luctus justo">Maecenas luctus justo</a></h1>	
		    <p>Non dui accumsan, in maximus elit aliquet. Suspendisse a lectus pulvinar diam suscipit sagittis.</p>
        <div>
        </div>
		<hr>
		<h1><a href="http://localhost/wordpress522/2019/10/22/donec-maximus-pellentesque-nisi/" title="Donec maximus pellentesque nisi">Donec maximus pellentesque nisi</a></h1>	
		<p>A sodales erat ornare vel. Nulla sagittis ante magna, ac venenatis nunc aliquam ac. Nulla faucibus enim justo, eu pulvinar nunc sodales sed. In hac habitasse platea dictumst. Sed eget enim nibh. Vivamus et varius massa, non tincidunt ex. Maecenas quis urna vel urna congue. </p>
         <div></div><hr>				    <h1><a href="calhost/wordpress522/2019/10/22/lorem-ipsum/" title="Lorem ipsum">Lorem ipsum</a></h1>	
				    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec ante  libero. Pellentesque vestibulum hendrerit turpis, sit amet tristique  nunc sagittis vitae. Cras eu faucibus ligula, ac porta nibh. Aliquam  erat volutpat. Aenean laoreet nunc turpis, id venenatis dolor rhoncus  vel.</p>
<div></div><hr>				    <h1><a href="http://localhost/wordpress522/2019/08/11/bonjour-tout-le-monde/" title="Bonjour tout le monde !">Bonjour tout le monde !</a></h1>	
				    <p>Bienvenue sur WordPress. Ceci est votre premier article. Modifiez-le ou supprimez-le, puis commencez à écrire&nbsp;!</p>
<div></div><hr>	    
</div>
	    <!-- sidebar.php -->
<div class="col-4 border border-dark">
   [ SIDEBAR ]
</div>	 </div>
</div> <!-- .container -->  

<?php
//appel du footer
get_footer();
?>