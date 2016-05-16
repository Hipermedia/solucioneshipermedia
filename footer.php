<?php
/* Footer
 ----------------------------------*/
?>
    <?php if(!is_home()) : ?>
        <div class="sprite-2"></div>
    <?php endif; ?>

</main>

<footer class="Footer">

    <section class="u-contenedor">
    	
    	<div class="Footer-bloque">
    		<figure class="Footer-bloqueLogo">
    			<img src="<?php the_field('logoContacto', 'option'); ?>" alt="">
    		</figure>
    	</div>

    	<div class="Footer-bloque">
            <p class="Footer-bloqueContacto"><i class="fa fa-envelope"></i><?php the_field('correoContacto', 'option'); ?></p>
            <p class="Footer-bloqueContacto"><i class="fa fa-mobile"></i><i class="fa fa-whatsapp"></i><?php the_field('movilContacto', 'option'); ?></p>
    		
    		<div class="Footer-bloqueRedes">
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
    		</div>
    	</div>

    	<div class="Footer-bloque">
    		<ul>
    			<li><a href="<?php inicio_url(); ?>">Inicio</a></li>
    			<li><a href="<?php inicio_url(); ?>/#shservicios">Servicios</a></li>
    			<li><a href="<?php inicio_url(); ?>/#shportafolio">Portafolio</a></li>
    			<li><a href="<?php inicio_url(); ?>/#shcontacto">Contacto</a></li>
    			<li><a href="<?php inicio_url(); ?>">No hacer click aquí</a></li>
    		</ul>
    	</div>

<!--     	<aside class="Footer-creditos">
    		<a class="Footer-firmaSH" href="http://www.solucioneshipermedia.com/">Soluciones Hipermedia | Desarrollo web</a>
    	</aside> -->
    </section>     

</footer>

<!-- JS personalizados del tema -->

<?php imgridImagesloaded(); //nuevo plugin de imágenes ?>
<?php imgridVelocity(); //nuevo plugin de imágenes ?> 
<?php imgridVelocityUi(); //nuevo plugin de imágenes ?> 
<?php imgrid(); //nuevo plugin de imágenes ?>
<?php waypoints(); // Librería que detecta puntos en el scroll de pantalla ?>
<?php bootstrap(); // framework Bootsrap ?>
<?php themejs(); // Los scripts personalizados del tema ?>

<?php wp_footer(); ?>
</body>
</html>
