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

<?php if( have_rows('multiproposito') ): ?>

	<?php while ( have_rows('multiproposito') ) : the_row(); ?> 

		<?php if( get_row_layout() == 'cover_layout' ): ?>
			<section class="PrimalCover u-contenedorCompleto" style="background-image: url('<?php the_sub_field('coverImagenFondo'); ?>')">
				<div class="PrimalCover-contenido u-contenedor">
					<!-- Títulos y llamadas a la acción -->
					<div class="PrimalCover-titulos">
						<h1 class="PrimalCover-titulo"><?php the_sub_field('coverTituloPrincipal'); ?></h1>		
						<h2 class="PrimalCover-subtitulo"><?php the_sub_field('coverTituloSecundario'); ?></h2>
						<a href="#" class="PrimalCover-action btn btn-default btn-raised"><?php the_sub_field('coverBoton1'); ?></a>
						<a href="#" class="PrimalCover-action btn btn-default btn-raised"><?php the_sub_field('coverBoton2'); ?></a>
					</div>
					<!-- Imagen principal -->
					<figure class="PrimalCover-imagen">
						<img src="<?php the_sub_field('coverImagen'); ?>" alt="Sitio web efectivo SH">
					</figure>
				</div>		
			</section>
		<?php endif;  ?> 

		<?php if( get_row_layout() == 'frase_layout' ): ?>
			<!-- StarchiBloques -->
			<section class="StarchiQuote u-contenedor-completo" style="background-image: url('<?php the_sub_field('fraseImagenFondo'); ?>')">
				<!-- Contenedor -->
				<div class="StarchiQuote-contenido">
					<div class="StarchiQuote-texto">
						<i class="fa fa-quote-right StarchiQuote-textoIcono"></i>
						<h2 class="StarchiQuote-textoCita"><?php the_sub_field('fraseFrase') ?></h2>
					</div>
				</div>
			</section>
		<?php endif;  ?> 

		<?php if( get_row_layout() == 'galeria_layout' ): ?>
			<section class="u-contenedor">
				<div class="imgrid" id="imgrid-portfolio">
					<?php while(have_rows('galeriaGaleria')) : the_row(); ?>
						<figure class="filter-class group1">
						    <img src="<?php the_sub_field('imagen') ?>" alt="img01"/>
						    <figcaption>
						        <h2><?php the_sub_field('titulo'); ?></h2>
						        <p class="description"><?php the_sub_field('descripcion'); ?></p>
						    </figcaption>
						</figure>
					<?php endwhile; ?>
				</div>
			</section>
		<?php endif;  ?>

		<?php if( get_row_layout() == 'texto_layout' ): ?>
			<!-- PrimalBloques -->
			<section class="PrimalText">
				<!-- Contenedor -->
				<div class="PrimalText-contenido u-contenedor">
					<!-- Texto wysiwyg -->
					<div class="PrimalText-texto">
						<?php the_sub_field('textoTexto'); ?>
					</div>		
				</div>
			</section>
		<?php endif;  ?>

		<?php if( get_row_layout() == 'testimonios_layout' ): ?>
		<!-- PrimalBloques -->
			<section class="PrimalTestimony">
				<!-- Contenedor -->
				<div class="PrimalTestimony-contenido u-contenedor">
					
					<?php if( have_rows('testimoniosTestimonios') ): ?>
						<?php while( have_rows('testimoniosTestimonios') ): the_row(); ?>
							<!-- bloque -->
							<div class="PrimalTestimony-block">
								<figure class="PrimalTestimony-blockFigure">
									<i class="fa fa-quote-left"></i>
								</figure>
								<blockquote class="PrimalTestimony-blockCita">
									<?php the_sub_field('cita'); ?>
								</blockquote>
								<h4 class="PrimalTestimony-blockAuthor">
									<?php the_sub_field('autor'); ?>
									<span class="PrimalTestimony-blockMeta">
										<?php the_sub_field('descripcionAutor'); ?>
									</span>
								</h4>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</section>
		<?php endif;  ?>

		<?php if( get_row_layout() == 'galeriaSlider_layout' ): ?>
			<section class="GallerySlider u-contenedor"> 
			  <div id="slider-gallery" class="flexslider">
			      <ul class="slides">
			      	<?php while(have_rows('galeriaSlider')) : the_row(); ?>
			          	<li class="GallerySlider-slide">
			          	  <a class="GallerySlider-slideImage" href="" rel="lightbox">
			          	    <img src="<?php the_sub_field('imagen'); ?>" alt="">
			          	    <span class="bg-aux">
			          	      <i class="fa fa-search-plus"></i>
			          	    </span>
			          	  </a>
			          	  <div class="GallerySlider-slideCaption">
			          	  	<?php the_sub_field('texto'); ?>
			          	  </div>
			          	</li>
			        <?php endwhile; ?>
			      </ul>
			  </div>
			  <div id="slider-gallery-thumbnav" class="flexslider carousel">
			      <ul class="slides">
			      	<?php while(have_rows('galeriaSlider')) : the_row(); ?>
			          <li class="GallerySlider-slide">
			            <img src="<?php the_sub_field('imagen'); ?>" alt="">
			          </li>
			          <?php endwhile; ?>
			      </ul>
			  </div>
			</section>
		<?php endif;  ?>

		<?php if( get_row_layout() == 'contacto_layout' ): ?>
			<section class="MeteoroContact u-contenedor-completo">
			    <div class="MeteoroContact-mapa"> 
			    	<?php the_sub_field('contactoMapa'); ?>
			    </div>  
			    
			    <div class="MeteoroContact-contenido u-contenedor">
			        <div class="MeteoroContact-formulario">
			            <?php echo do_shortcode(get_sub_field('contactoFormulario')); ?>
			        </div>  
			        
			        <div class="MeteoroContact-datos">
			            <h2>meteoroContact</h2>
			            <p><i class="fa fa-map-marker"></i><?php the_sub_field('contactoDireccion'); ?></p>
			            <p><i class="fa fa-mobile"></i><?php the_sub_field('contactoCelular'); ?></p>
			            <p><i class="fa fa-phone"></i><?php the_sub_field('contactoTelefono'); ?></p>
			            <p><i class="fa fa-envelope"></i><?php the_sub_field('contactoCorreo'); ?></p>
			        </div>
			    </div>
			</section>
		<?php endif;  ?>

		<?php if( get_row_layout() == 'pricing_layout' ): ?>
		<section class="PrimalPricing u-contenedor">
			<div class="PrimalPricing-contenido">
				<?php while(have_rows('pricingPricing')) : the_row(); ?>
				<article class="PrimalPricing-servicio">
					<h2 class="PrimalPricing-servicioNombre"><?php the_sub_field('nombre'); ?></h2>
					<h3 class="PrimalPricing-servicioPrecio"><?php the_sub_field('precio'); ?></h3>
					<?php while(have_rows('caracteristicas')) : the_row(); ?>
						<div class="PrimalPricing-servicioCaracteristica"><?php the_sub_field('caracteristica'); ?></div>
					<?php endwhile; ?>
					<div class="PrimalPricing-servicioDescripcion"><?php the_sub_field('descripcion'); ?></div>
					<a href="" class="PrimalPricing-servicioBoton"><?php the_sub_field('boton'); ?></a>
				</article>	
				<?php endwhile; ?>		
			</div>	
		</section>
		<?php endif;  ?>
	<?php endwhile;  ?>
<?php endif;  ?> 
<?php get_footer(); ?>
