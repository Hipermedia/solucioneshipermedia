<a name="portafolio"></a>
<section class="Portafolio-contenedor u-contenedorCompleto">
	
	<div class="sprite">
		
	</div>

	<div class="Portafolio-heading u-contenedor">



		<h2>Nuestro <span>trabajo</span></h2>
		<p>Una muestra de los proyectos que hemos hecho con dedicación, amor y mucho café</p>

		<ul id="filters">
			<li><h3 id="unfilter-button">Todos</h3></li>
			<li><h3 id="filter-educacion">Educación</h3></li>
			<li><h3 id="filter-tienda">Tienda en línea</h3></li>
			<li><h3 id="filter-comerciales">Comerciales</h3></li>
			<li><h3 id="filter-institucionales">Institucionales</h3></li>
			<li><h3 id="filter-otros">Otros</h3></li>
		</ul>

	</div>

	<div class="imgrid Portafolio" id="imgrid-portfolio">
		<?php
		$cat = get_field('categoriaPortafolio', 'option');
		$num = get_field('numeroPortafolio', 'option');
		$args = array('cat' => $cat, 'posts_per_page' => $num); 
		$the_query = new WP_Query( $args ); ?>
		<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
			<?php $categorias = get_the_category(); ?>
			<?php //var_dump($categorias); ?>
			<?php 
				$cat1 = $categorias[0]->slug;
				$cat2 = $categorias[1]->slug;
			?>
				<a href="<?php the_permalink(); ?>">
					<figure class="filter-class Portafolio-block <?php echo $cat1." ".$cat2; ?>">
					    <img src="<?php echo $url; ?>" alt="<?php the_title(); ?>"/>
					    <figcaption>
					        <h2><?php the_title(); ?></h2>
					        <p class="description"><?php the_field('subtituloPost') ?></p>
					    </figcaption>
					</figure>
				</a>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>

	<div class="sprite-2">
		
	</div>
</section>