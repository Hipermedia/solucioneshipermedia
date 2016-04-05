<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<!-- Basic Page Needs
 ================================================== -->  
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
    <?php /*Print the <title> tag based on what is being viewed.*/
    	global $page, $paged;
    	wp_title( '|', true, 'right' );
    	// Add the blog name.
    	bloginfo( 'name' );
    	// Add the blog description for the home/front page.
    	$site_description = get_bloginfo( 'description', 'display' );
    	if ( $site_description && ( is_home() || is_front_page() ) )
    		echo " | $site_description";
    	// Add a page number if necessary:
    	if ( $paged >= 2 || $page >= 2 )
    		echo ' | ' . sprintf( __( 'Page %s', 'shbase' ), max( $paged, $page ) );
	?>
</title>
<meta name="author" content="<?php echo bloginfo( 'name' ); ?>" />
<meta name="robots" content="all">
<!-- Mobile Specific Metas
 ================================================== --> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- CSS
  ================================================== -->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<!-- Favicon
  ================================================== -->
<link href="<?php the_field('favicon', 'option'); ?>" rel="icon" type="image/x-icon" />
<!-- pingback
  ================================================== -->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>

<!-- Google Analytics
  ================================================== -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40281843-1', 'auto');
  ga('send', 'pageview');

</script>

</head>

<body <?php body_class(); ?>>

<header id="header" class="Header" role="banner" >

    <div id="Header-contenidoBefore" class="Header-contenidoBefore">
        <div class="u-contenedor">
            <p class="correo"><i class="fa fa-envelope"></i><?php the_field('correoContacto', 'option'); ?></p>
            <p class="movil"><i class="fa fa-mobile"></i><i class="fa fa-whatsapp"></i><?php the_field('movilContacto', 'option'); ?></p>
            <!-- Redes sociales -->
            <?php primalSocialShare(); ?>
        </div>
    </div>
    <section id="Header-contenido" class="Header-contenido">
        
        <!-- Logo -->
        <a href="<?php inicio_url(); ?>" id="header-logo" class="Header-logo  animated flipInX">
            <img src="<?php the_field('logo', 'option'); ?>" alt="<?php bloginfo('name'); ?>">
        </a>
        <!-- Formulario de búsqueda [Catacterística superior] -->
        <?php //get_search_form(); ?>
        
        <!-- Menú principal -->  
        <?php primalNav(); ?>
        
    </section>
</header>

<main class="main <?php if(!is_home()) { echo "bg-white"; } ?>">