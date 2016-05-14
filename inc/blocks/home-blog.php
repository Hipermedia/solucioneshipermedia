<?php 
/** Bloques de contenido. Estilo PRIMAL
------------------------------------------------------------------- */ 
?>
<!-- PrimalBloques -->
<section class="PrimalBlocks inHome">
	<!-- Contenedor -->
	<div class="PrimalBlocks-contenido u-contenedor">
		<!-- Títulos de la sección -->
		<h2 class="PrimalBlocks-titulo"><?php the_field('tituloBlog', 'option'); ?></h2>
		<h3 class="PrimalBlocks-subtitulo"><?php the_field('subtituloBlog', 'option'); ?></h3>

		<?php
		$cat = get_field('categoriaBlog', 'option');
		$posts = get_field('numeroBlog', 'option');

		$args = array( 'cat' => $cat, 'posts_per_page' => $posts ); 
		// the query
		$the_query = new WP_Query( $args ); ?>
		<?php if ( $the_query->have_posts() ) : ?>
			<?php $contador = 0; ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<?php $contador++; ?>
				<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>

				<?php $fecha = get_the_time(get_option('date_format')); ?>

				<?php $dia = substr($fecha, 0, 2); ?>

				<?php $mes = substr($fecha, 2, 4); ?>

				<div class="PrimalBlocks-block <?php if($contador>1){echo "u-hide";} ?>">
					<figure class="PrimalBlocks-blockFigure">
						<img src="<?php echo $url; ?>" alt="">
					</figure>
					<div class="PrimalBlocks-blockHeading">
						<h3 class="PrimalBlocks-blockTitulo"><?php the_title(); ?></h3>
						<div class="PrimalBlocks-blockFecha">
							<span class="mes"><?php echo $mes; ?></span>
							<span class="dia"><?php echo $dia; ?></span>
						</div>
					</div>
					<div class="PrimalBlocks-blockDescripcion">
						<?php the_excerpt(); ?>
					</div>
					<!-- <a href="" class="PrimalBlocks-blockAction">Leer más</a> -->
					<div class="PrimalBlocks-blockCategorias">

						<p class="titulo">Categorías</p>

						<p class="categorias">

							<?php
							$categorias = get_the_category();
							$size = sizeof($categorias);
							$cuentita = 0;

							foreach( $categorias as $category) {

								$cuentita++;

								$padre = $category->category_parent;

								if ($padre!=0) {
							?>
									<a href="<?php echo home_url(); ?>/category/<?php echo $category->slug; ?>">
							<?php  
							    	echo $category->cat_name;
								}

								if ( $cuentita < $size && $cuentita > 1 ) {
									echo ",";
								}
							?>
									</a>
							<?php
							
							}
							?>
						</p>
					</div>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>	
	</div>
</section>