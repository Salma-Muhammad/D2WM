<?php get_header(); ?>
<h1> Bienvenue sur l'acceuil du site </h1>
<?php
if ( have_posts() ) : // S'il y a des articles 
    while ( have_posts() ) : the_post() // Tant qu'il y a des articles, alors pour chaque article on affiche : 
        ?>
        <!-- the_permalink() = url de la page de l'article (détail)
            the_title() = titre de l'article
            the_excerpt() = résumé de l'article (description courte)
        <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>  
        <?php                        
        echo"<div>".the_excerpt()."</div>";
        echo"<hr>";
    endwhile;
endif;
?>
<?php get_footer(); ?>