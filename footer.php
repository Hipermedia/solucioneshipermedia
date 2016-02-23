<?php
/* Footer
 ----------------------------------*/
?>

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
    			    <a href="<?php the_field('facebookContacto', 'option'); ?>" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
    			<?php }  ?>
    			<!-- Twitter -->
    			<?php if (get_field('twitterContacto', 'option') != '') { ?>
    			    <a href="<?php get_field('twitterContacto', 'option'); ?>"title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
    			<?php }  ?>
    			<!-- Youtube -->
    			<?php if (get_field('youtubeContacto', 'option') != '') { ?>
    			    <a href="<?php get_field('youtubeContacto', 'option'); ?>" title="Youtube" target="_blank"><i class="fa fa-youtube"></i></a>
    			<?php }  ?>
    			<!-- Google Plus -->
    			<?php if (get_field('googleContacto', 'option') != '') { ?>
    			    <a href="<?php get_field('googleContacto', 'option'); ?>" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a>
    			<?php }  ?>
    			<!-- Google Plus -->
    			<?php if (get_field('googleContacto', 'option') != '') { ?>
    			    <a href="<?php get_field('googleContacto', 'option'); ?>" title="LinkedIn" target="_blank"><i class="fa fa-linkedin"></i></a>
    			<?php }  ?>
    		</div>
    	</div>

    	<div class="Footer-bloque">
    		<ul>
    			<li>Inicio</li>
    			<li>Servicios</li>
    			<li>Portafolio</li>
    			<li>Contacto</li>
    			<li>No hacer click aquí</li>
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
<?php //imgridMin(); //nuevo plugin de imágenes ?>

<?php waypoints(); // Librería que detecta puntos en el scroll de pantalla ?>
<?php bootstrap(); // framework Bootsrap ?>
<?php bootstrapMaterial(); // Bootsrap - Material ?>
<?php ripples(); // Complemento de Bootsrap - Material ?>
<?php themejs(); // Los scripts personalizados del tema ?>

<?php wp_footer(); ?>
</body>
</html>