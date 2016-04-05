<!-- Contenido del post -->

<?php //Elijo la imagen a imprimir 
	if(get_field('imgBgPost', 'option')) { 
		$titleImgBg = get_field('imgBgPost', 'option'); 
	} else { 
		$titleImgBg = get_field('imgBgEntrada'); 
	}
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
		<!-- Contenido del post -->
		<div class="contenido-wp u-wp-contenido contenido-single">
			<?php the_content(); ?>
			<!-- Compartir en redes sociales -->
			<?php anliSocialShare(); ?>
		</div>
		
	</div>
				