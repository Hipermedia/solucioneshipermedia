<?php
/**
 * Template Name: Multiproposito
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage SH_Base
 */

get_header(); ?>

<section class="u-contenedorCompleto">

	<?php while ( have_posts() ) : the_post(); ?>
	   	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
	    <article class="Page u-contenido">	

			<!-- Imágen destacada -->
			<figure class="Post-featuredImage" style="background-image: url('<?php if($url) { echo $url; } else { the_field('destacadaDefault', 'option'); } ?>');">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
				<?php else : ?>
					<img src="<?php the_field('destacadaDefault'); ?>" alt="">
				<?php endif; ?>

				<figcaption class="u-contenedor">
					<!-- Título del artículo -->
					<h1 class="Post-title"><?php the_title(); ?></h1>
				</figcaption>
				<div class="sprite"></div>
			</figure>

			<div class="u-contenedor contenido-wp-multiproposito">
				<?php the_content(); ?>	
			</div>

			<?php if( have_rows('multiproposito') ): ?>
				<?php while ( have_rows('multiproposito') ) : the_row(); ?> 
					<?php if( get_row_layout() == 'caracteristicas_layout' ): ?>
						<section class="Portafolio-contenedor u-contenedorCompleto">
							<div class="sprite"></div>
							<div class="Portafolio-heading u-contenedor">
								<h2><span><?php the_sub_field('titulo'); ?></span></h2>
								<p><?php the_sub_field('subtitulo'); ?></p>
							</div>
							<div class="imgrid Caracteristicas Portafolio u-contenedor" id="">
								<?php while(have_rows('bloques')): the_row(); ?>
									<div class="Caracteristicas-bloque">
										<div class="principal">
											<img src="<?php the_sub_field('icono'); ?>" alt="">
											<div class="secundario-1"></div>
											<div class="secundario-2"></div>
										</div>
										<div class="texto">
											<h2><?php the_sub_field('titulo'); ?></h2>
											<p><?php the_sub_field('subtitulo'); ?></p>
										</div>
									</div>
								<?php endwhile; ?>
							</div>
							<div class="sprite-2"></div>
						</section>
					<?php endif;  ?>

					<?php if( get_row_layout() == 'testimonios_layout' ): ?>
						<!-- PrimalBloques -->
						<section class="PrimalTestimony">
							<!-- Contenedor -->
							<div class="PrimalTestimony-contenido u-contenedor">
								<!-- Títulos de la sección -->
								<h1 class="PrimalTestimony-titulo"><?php the_sub_field('titulo'); ?></h1>
								<h2 class="PrimalTestimony-subtitulo"><?php the_sub_field('subtitulo'); ?></h2>
								<!-- bloque -->
								<div class="flexslider" id="testimonios-slider">
								  	<ul class="slides">
								  		<?php while(have_rows('testimonios')) : the_row(); ?>
								  			<li class="PrimalTestimony-block">
								  				<blockquote class="PrimalTestimony-blockCita">
								  					<?php the_sub_field('cita'); ?>
								  				</blockquote>
								  				<div class="PrimalTestimony-blockAuthor">
								  					<h4 class="PrimalTestimony-blockAuthor-name"><?php the_sub_field('autor'); ?></h4>
								  					<i class="fa fa-quote-left"></i>
								  					<p class="PrimalTestimony-blockMeta"><?php the_sub_field('descripcion'); ?></p>
								  				</div>
								  				<figure class="PrimalTestimony-blockFigure">
								  					<img src="<?php the_sub_field('foto'); ?>" alt="">
								  				</figure>
								  			</li>
								  		<?php endwhile; ?>
								  	</ul>
								</div>
							</div>
						</section>
					<?php endif;  ?>  

					<?php if( get_row_layout() == 'calltoaction_layout' ): ?>
						<section class="StarchiQuote u-contenedorCompleto">
							<div class="sprite"></div>
							<!-- Contenedor -->
							<div class="StarchiQuote-contenido u-contenedor">
								<div class="StarchiQuote-texto">
									<h2 class="StarchiQuote-textoCita"><?php the_sub_field('titulo'); ?></h2>
									<p><?php the_sub_field('subtitulo'); ?></p>
								</div>
								<div class="StarchiQuote-aside">
									<a class="StarchiQuote-contenidoBtn" href="" data-toggle="modal" data-target="#myModal"><?php the_sub_field('boton') ?></a>
									<a href=""><?php the_sub_field('texto'); ?></a>
								</div>
							</div>
							<div class="sprite-2"></div>
						</section>

						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  	<div class="modal-dialog" role="document">
						    	<div class="modal-content">
						      		<div class="modal-header">
						        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        		<h4 class="modal-title" id="myModalLabel">Solicitar una demostración</h4>
						      		</div>
						      		<div class="modal-body">
										<?php echo do_shortcode('[contact-form-7 id="190" title="Demostración"]'); ?>
						      		</div>
						      		<div class="modal-footer">
						        		<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
						      		</div>
						    	</div>
						  	</div>
						</div>

					<?php endif;  ?>  

				<?php endwhile;  ?>
			<?php endif;  ?> 

			<?php anliSocialShare(); ?>
	   
		</article>
	<?php endwhile; // end of the loop. ?>

</section>

<?php get_footer(); ?>




