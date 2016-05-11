<!-- Contenido del post -->
<?php //Elijo la imagen a imprimir 
	if(get_field('imgBgPost', 'option')) { 
		$titleImgBg = get_field('imgBgPost', 'option'); 
	} else { 
		$titleImgBg = get_field('imgBgEntrada'); 
	}
	$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
?>
				
	<!-- Título del artículo -->
	<figure class="Post-featuredImage" style="background-image: url('<?= $titleImgBg; ?>');">
		<!-- Texto del título -->
		<h1 class="Post-title"><?php the_title(); ?></h1>
		<!-- Texto del subtítulo -->
		<p><?php the_field('subtituloPost'); ?></p>
		<!-- Sprite decorativo -->
		<div class="sprite"></div>
	</figure>
	
	<div class="u-contenedor">
		<div class="Post-portafolioItem">
			<!-- Descripción e imágen principal -->
			<div class="panel">
				<figure class="Post-portafolioFigure">
					<?php the_post_thumbnail(); ?>
				</figure>
				<div class="contenido-wp u-wp-contenido Post-portafolioContent">
					<?php the_content(); ?>
					<p class="u-acf-title Post-portafolioContent-url">
						<span class="zelda"></span>
						<a href="<?php the_field('urlPortafolioItem'); ?>" target="_blank"><?php the_field('textoPortafolioItem') ?></a>
					</p>	
				</div>
			</div>

			<div class="panel">
				<p class="u-acf-title"><span class="servicio"></span>Servicio realizado</p>
				<?php $servicios = get_field_object('serviciosPortafolioItem'); ?>
				<?php $value = $servicios['value']; ?>
				<?php $choices = $servicios['choices']; ?>
				<?php $home_url = home_url(); ?>
				<?php foreach( $value as $v ): ?>
					<?php if($v=='uno') {$zelda=$home_url.'/servicios/programacion-de-diseno-web/';} ?>
					<?php if($v=='dos') {$zelda=$home_url.'/servicios/consultoria-en-marketing-digital/';} ?>
					<?php if($v=='tres') {$zelda=$home_url.'/servicios/desarrollo-web/';} ?>
					<?php if($v=='cuatro') {$zelda=$home_url.'/servicios/cobrar-por-internet/';} ?>
					<?php if($v=='cinco') {$zelda=$home_url.'/#/';} ?>
					<?php if($v=='seis') {$zelda=$home_url.'/#/';} ?>
					<?php if($v=='siete') {$zelda=$home_url.'/servicios/sitio-web-efectivo/';} ?>
					<a href="<?php echo $zelda; ?>" class="Post-portafolioServicio"><span class="<?php echo $v; ?>"></span><?php echo $choices[$v]; ?></a>
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
				<?php // get_template_part('content','socio'); ?>
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
										<?php if(get_field('correoSocio')) :  ?>
											<p class="dato"><span class="correo"></span><?php the_field('correoSocio'); ?></p>
										<?php endif; ?>
										<?php if(get_field('telefonoSocio')) :  ?>
											<p class="dato"><span class="telefono"></span><?php the_field('telefonoSocio'); ?></p>
										<?php endif; ?>											
									</div>
									<div class="resto">
										<?php if(get_field('webSocio')) :  ?>
											<p class="dato"><span class="web"></span> <a href="<?php the_field('webSocio'); ?>" target="_blank"><?php the_field('webSocio'); ?></a></p>
										<?php endif; ?>
										<?php if(get_field('facebookSocio')) :  ?>											
											<a class="social fb" href="<?php the_field('facebookSocio'); ?>"></a>
										<?php endif; ?>			
										<?php if(get_field('twitterSocio')) :  ?>
											<a class="social tw" href="<?php the_field('twitterSocio'); ?>"></a>
										<?php endif; ?>											
										<?php if(get_field('googleSocio')) :  ?>
											<a class="social gp" href="<?php the_field('googleSocio'); ?>"></a>
										<?php endif; ?>											
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			<?php endif; ?>
		</div>
		<!-- Compartir en redes sociales -->
		<?php anliSocialShare(); ?>
		<?php comments_template(); ?>
	</div>