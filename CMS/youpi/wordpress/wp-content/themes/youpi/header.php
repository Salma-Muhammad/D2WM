<!DOCTYPE html>
<!-- fonction language attributes  permet de definir automatiquement la langue-->
<html <?php language_attributes(); ?>>
<head>
    <!--fonction bloginfo permet de definir l'encodage utf8 par defaut-->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="<?php echo get_bloginfo('description');?>">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta name='robots' content='noindex,follow' />
    <title><?php echo get_bloginfo('title');?></title>
    <!--appelle des scripts et styles-->
    <?php wp_head(); ?>
</head>

<!--fonction body_class permet d’obtenir des noms de class bootstrap en fonction de la page visitée-->
<body <?php body_class(); ?>>
<header class="header">
<?php       
$custom_logo_id = get_theme_mod('custom_logo');

$aLogo = wp_get_attachment_image_src($custom_logo_id , 'medium');

echo'<a href="'.get_bloginfo('url').'" title="'.get_bloginfo('name').'"><img src="'.esc_url($aLogo[0]).'" alt="'.get_bloginfo('name').'" title="'.get_bloginfo('name').'" class="img-fluid"></a>';
?>

</header>

<?php wp_body_open(); ?>