<?php 
// the query
$args = array('p' => get_field('socioPortafolioItem'));
$the_query = new WP_Query( $args ); ?>
<?php if ( $the_query->have_posts() ) : ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<?php $url2 = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
		<div class="panel">
			<p class="u-acf-title"><span class="disenador"></span>Diseñador</p>
			<div class="Post-portafolioDisenador">
				<figure>
					<img src="<?php echo $url2; ?>" alt="">
				</figure>
				<div class="datos">
					<h2 class="socio"><?php the_title(); ?></h2>
					<p class="giro"><?php the_field('subtituloPost'); ?></p>
					<div class="mayoria">
						<p class="dato"><span class="correo"></span><?php the_field('correoSocio'); ?></p>
						<p class="dato"><span class="telefono"></span><?php the_field('telefonoSocio'); ?></p>
					</div>
					<div class="resto">
						<p class="dato"><span class="web"></span> <a href="<?php the_field('webSocio'); ?>"><?php the_field('webSocio'); ?></a></p>
						<a class="social fb" href="<?php the_field('facebookSocio'); ?>"></a>
						<a class="social tw" href="<?php the_field('twitterSocio'); ?>"></a>
						<a class="social gp" href="<?php the_field('googleSocio'); ?>"></a>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
