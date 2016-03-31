<?php
/**
 * The Template for displaying all single posts.
 */

get_header(); ?>

<section class="u-contenedorCompleto">

	<?php while ( have_posts() ) : the_post(); ?>
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
	    <article class="Post">	
			<!-- Imágen destacada -->
			<?php
			$categorias = get_the_category();
			$padre = $categorias[0]->category_parent;
			$padre1 = $categorias[1]->category_parent;
			$padre2 = $categorias[2]->category_parent;
			$padre3 = $categorias[3]->category_parent;
			$padre4 = $categorias[4]->category_parent;

			if ($padre==2 || $padre1==2 || $padre2==2 || $padre3==2 || $padre4==2) {
			?>

				<figure class="Post-featuredImage" style="background-image: url('<?php if(get_field('imgBgMultipro', 'option')) { the_field('imgBgMultipro', 'option'); } else { the_field('imgBgEntrada'); } ?>');">
					<?php if ( get_field('imgBgMultipro', 'option') ) : ?>
						<img src="<?php the_field('imgBgMultipro', 'option'); ?>" alt="">
					<?php else : ?>
						<img src="<?php the_field('imgBgEntrada'); ?>" alt="">
					<?php endif; ?>
					<figcaption class="u-contenedor">
						<!-- Título del artículo -->
						<h1 class="Post-title"><?php the_title(); ?></h1>
						<p><?php the_field('subtituloPost'); ?></p>
					</figcaption>
					<div class="sprite"></div>
				</figure>

			<?php } else { ?>

				<figure class="Post-featuredImage" style="background-image: url('<?php if(get_field('imgBgPost', 'option')) { the_field('imgBgPost', 'option'); } else { the_field('imgBgEntrada'); } ?>');">
					<?php if ( get_field('imgBgPost', 'option') ) : ?>
						<img src="<?php the_field('imgBgPost', 'option'); ?>" alt="">
					<?php else : ?>
						<img src="<?php the_field('imgBgEntrada'); ?>" alt="">
					<?php endif; ?>
					<figcaption class="u-contenedor">
						<!-- Título del artículo -->
						<h1 class="Post-title"><?php the_title(); ?></h1>
						<p><?php the_field('subtituloPost'); ?></p>
					</figcaption>
					<div class="sprite"></div>
				</figure>
			<?php } ?>

			<div class="u-contenedor">
				
				<?php
				$categorias = get_the_category();
				$padre2 = $categorias[0]->category_parent;
				$padre12 = $categorias[1]->category_parent;
				$padre22 = $categorias[2]->category_parent;
				$padre32 = $categorias[3]->category_parent;
				$padre42 = $categorias[4]->category_parent;

				//var_dump($categorias);

				if ($padre2==2 || $padre12==2 || $padre22==2 || $padre32==2 || $padre42==2) {
				?>
				<div class="Post-portafolioItem">

					<div class="panel">
						<figure class="Post-portafolioFigure">
							<img src="<?php echo $url; ?>" alt="">
						</figure>
						<div class="contenido-wp u-wp-contenido Post-portafolioContent">
							<?php the_content(); ?>
							<p class="u-acf-title"><span class="zelda"></span><a href="<?php the_field('urlPortafolioItem'); ?>"><?php the_field('textoPortafolioItem') ?></a></p>	
						</div>
					</div>

					<div class="panel">
						<p class="u-acf-title"><span class="servicio"></span>Servicio realizado</p>
						<?php $servicios = get_field_object('serviciosPortafolioItem'); ?>
						<?php $value = $servicios['value']; ?>
						<?php $choices = $servicios['choices']; ?>
						<?php foreach( $value as $v ): ?>
							<p class="Post-portafolioServicio"><span class="<?php echo $v; ?>"></span><?php echo $choices[$v]; ?></p>
						<?php endforeach; ?>
						<?php //var_dump($servicios); ?>
					</div>

					<div class="panel">
						<p class="u-acf-title"><span class="detalles"></span>Detalles del servicio</p>
						<?php the_field('detallesPortafolioItem'); ?>
					</div>

					<div class="panel">
						<p class="u-acf-title"><span class="capturas"></span>Capturas de pantalla</p>
						<?php echo do_shortcode(get_field('galeriaPortafolioItem')); ?>
					</div>

					<?php if (get_field('socioPortafolioItem')) : ?>


						<?php get_template_part('content','socio'); ?>


					<?php endif; ?>
				</div>

				<?php
				} else {
				?>
					<div class="contenido-wp u-wp-contenido">
						<?php the_content(); ?>
					</div>
				<?php } ?>
				<!-- Compartir en redes sociales -->
				<?php anliSocialShare(); ?>
			</div>
		</article>
	<?php endwhile; // end of the loop. ?>
	<?php //get_sidebar(); ?>
</section>
<?php get_footer(); ?>
