<?php
/**
 * template pour le header 
 */

$custom_logo_id = get_theme_mod('custom_logo');

$aLogo = wp_get_attachment_image_src($custom_logo_id , 'medium');

if (has_custom_logo()) 
{ // Si un logo a été défini
    echo'<a href="'.get_bloginfo('url').'" title="'.get_bloginfo('name').'"><img src="'.esc_url($aLogo[0]).'" alt="'.get_bloginfo('name').'" title="'.get_bloginfo('name').'" class="img-fluid"></a>';} 
else 
{   // Sinon on affiche le nom du site
    echo '<h1>'.get_bloginfo('name').'</h1>';
}

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php echo get_bloginfo('title');?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="<?php echo get_bloginfo('description');?>">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta name='robots' content='noindex,follow' />
<?php wp_head(); ?>
</head>




