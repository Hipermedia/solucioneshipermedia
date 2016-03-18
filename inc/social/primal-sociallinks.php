<?php 
/** Botones de compartir en redes sociales. Estilo CLASSIC.
------------------------------------------------------------------- */ 
?>

<div id="header-social" class="social">
    <!-- Facebook -->
    <?php if (get_field('facebookContacto', 'option') != '') { ?>
        <a class="fb" href="<?php the_field('facebookContacto', 'option'); ?>" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
    <?php }  ?>
    <!-- Twitter -->
    <?php if (get_field('twitterContacto', 'option') != '') { ?>
        <a class="tw" href="<?php the_field('twitterContacto', 'option'); ?>"title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
    <?php }  ?>
    <!-- Youtube -->
    <?php if (get_field('youtubeContacto', 'option') != '') { ?>
        <a class="yt" href="<?php the_field('youtubeContacto', 'option'); ?>" title="Youtube" target="_blank"><i class="fa fa-youtube"></i></a>
    <?php }  ?>
    <!-- Google Plus -->
    <?php if (get_field('googleContacto', 'option') != '') { ?>
        <a class="gp" href="<?php the_field('googleContacto', 'option'); ?>" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a>
    <?php }  ?>
    <!-- Google Plus -->
    <?php if (get_field('linkedinContacto', 'option') != '') { ?>
        <a class="li" href="<?php the_field('linkedinContacto', 'option'); ?>" title="LinkedIn" target="_blank"><i class="fa fa-linkedin"></i></a>
    <?php }  ?>

    
      
</div><!-- #social -->