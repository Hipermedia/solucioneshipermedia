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

			<!-- Título del artículo -->
			<figure class="Post-featuredImage" style="background-image: url('<?php if($url) { echo $url; } else { the_field('imgBgPages', 'option'); } ?>');">			
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
				<?php else : ?>
					<img src="<?php the_field('imgBgPages', 'option'); ?>" alt="<?php the_title(); ?>">
				<?php endif; ?>
				
				<!-- Texto del título -->
				<figcaption class="u-contenedor">
					<h1 class="Post-title"><?php the_title(); ?></h1>
				</figcaption>
				<!-- Sprite decorativo -->
				<div class="sprite"></div>
			</figure>

			<div class="u-contenedor contenido-wp-multiproposito u-wp-contenido">
				<?php the_content(); ?>	
				<?php anliSocialShare(); ?>
			</div>
			
			<!-- Bloques multipropósito -->
			<?php if( have_rows('multiproposito') ): ?>
				<?php while ( have_rows('multiproposito') ) : the_row(); ?> 

					<!-- Bloque: Características -->
					<?php if( get_row_layout() == 'caracteristicas_layout' ): ?>
						<section class="Portafolio-contenedor u-contenedorCompleto">
							<div class="sprite"></div>
							<div class="Portafolio-heading u-contenedor">
								<h2 class="caracteristicas-main-titulo"><span><?php the_sub_field('titulo'); ?></span></h2>
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
											<h2 class="caracteristicas-titulo"><?php the_sub_field('titulo'); ?></h2>
											<p><?php the_sub_field('subtitulo'); ?></p>
										</div>
									</div>
								<?php endwhile; ?>
							</div>
							<div class="sprite-2"></div>
						</section>
					<?php endif;  ?>
					
					<!-- Bloque: Testimonios -->
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
								  				<a href="<?php the_sub_field('url', 'option'); ?>" class="PrimalTestimony-blockAuthor">
								  					<div class="PrimalTestimony-blockAuthor-info">
								  						<h4 class="PrimalTestimony-blockAuthor-name"><?php the_sub_field('autor', 'option'); ?></h4>
								  						<i class="fa fa-quote-left"></i>
								  						<p class="PrimalTestimony-blockMeta"><?php the_sub_field('descripcion', 'option'); ?></p>
								  					</div>
								  					<figure class="PrimalTestimony-blockFigure">
								  						<img src="<?php the_sub_field('foto'); ?>" alt="">
								  					</figure>
								  				</a>
								  			</li>
								  		<?php endwhile; ?>
								  	</ul>
								</div>
							</div>
						</section>
					<?php endif;  ?>  
					
					<!-- Bloque: Llamada a la acción -->
					<?php if( get_row_layout() == 'calltoaction_layout' ): ?>
						<section class="CallToAction u-contenedorCompleto inHome">
							<!-- Sprite decorativo superior -->
							<div class="sprite"></div>
							<!-- Contenedor -->
							<div class="CallToAction-contenido u-contenedor">
								<!-- Textos de la llamada a la acción -->
								<div class="CallToAction-texto">
									<h2><?php the_sub_field('titulo'); ?></h2>
									<p><?php the_sub_field('subtitulo'); ?></p>
								</div>
								<!-- Botón de llamada a la acción -->
								<div class="CallToAction-aside">
									<!-- Si se eligió que sea de tipo enlace -->
									<?php if (get_sub_field('tipoAccion') == 'modal') : ?>
										<a class="CallToAction-contenidoBtn" href="" data-toggle="modal" data-target="#myModal"><?php the_sub_field('boton') ?></a>
									<!-- Si se eligió que sea un modal -->
									<?php else : ?>
										<a class="CallToAction-contenidoBtn" href="<?php the_sub_field('urlBtn') ?>"><?php the_sub_field('boton') ?></a>
									<?php endif; ?>
									<!-- Comentario final -->
									<?php if (get_sub_field('texto')) : ?>
										<a href="<?php the_sub_field('urlTexto'); ?> ">
											<?php the_sub_field('texto'); ?>
										</a>
									<?php endif; ?>
								</div>
							</div>
							<!-- Sprite decorativo -->
							<div class="sprite-2"></div>
						</section>
						<!-- Modal de la llamada a la acción-->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content Contacto">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="myModalLabel"><?php the_sub_field('boton') ?></h4>
						      </div>
						      <div class="modal-body Contacto-formulario">
									<?php echo do_shortcode(get_sub_field('modalBtn')); ?>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
						      </div>
						    </div>
						  </div>
						</div>
					<?php endif;  ?>

					<!-- Bloque: Filmstrip -->					
					<?php if( get_row_layout() == 'filmstrip_layout' ): ?>
						<div class="Filmstrip">
							<section class="FilmstripSlider u-contenedor">
								<!-- <div class="wrapper"> -->
								<h2 class="FilmstripSlider-titulo"><?php the_sub_field('titulo'); ?></h2>
								<div class="FilmstripSlider-sliderContenedor">
									<p class="FilmstripSlider-sliderTitulo"><?php the_sub_field('subtitulo'); ?></p>
									<div id="slider-filmstrip" class="flexslider FilmstripSlider-contenido">
									  	<ul class="slides">
									  		<?php while(have_rows('clientes')) : the_row(); ?>
									  		<li class="FilmstripSlider-slide">
									  			<a href="<?php the_sub_field('url'); ?>">
									  				<img class="FilmstripSlider-slideImagen" src="<?php the_sub_field('logo'); ?>" alt="">
									  			</a>
									  		</li>
									  		<?php endwhile; ?>
									  	</ul>
									</div>
								</div>
								<figure class="FilmstripSlider-figure">
									<img src="<?php the_sub_field('imagen'); ?>" alt="">
								</figure>
							</section>
						</div>
					<?php endif;  ?>  

					<!-- Bloque: Hunabix -->
					<?php if( get_row_layout() == 'hunabix_layout' ): ?>
						<div class="u-contenedor Hunabix">
							<h2 class="Hunabix-title"><?php the_sub_field('titulo'); ?></h2>
							<div class="Hunabix-content">
								<?php the_sub_field('contenido'); ?>
							</div>
						</div>
					<?php endif;  ?>  
					
					<!-- Bloque: Iru -->
					<?php if( get_row_layout() == 'iru_layout' ): ?>
						<div class="u-contenedor">
							<h2 class=""><?php the_sub_field('titulo'); ?></h2>
							<div class="hibam">
								<?php the_sub_field('contenido'); ?>
							</div>
						</div>
					<?php endif;  ?>  

				<?php endwhile;  ?>
			<?php endif;  ?> 
	   
		</article>
	<?php endwhile; // end of the loop. ?>

</section>

<?php get_footer(); ?>




