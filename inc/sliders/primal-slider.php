<?php 
/** Botones para compartir en redes sociales. Estilo ANLI
------------------------------------------------------------------- */ 
?>

<section class="PrimalSlider u-contenedorCompleto">
   <div id="slider-full" class="flexslider PrimalSlider-contenido">
      <ul class="slides">
         <?php while(have_rows('slider_ce', 'option')) : the_row(); ?>
            <li>
               <div class="PrimalSlider-slide u-contenedor" style="background-image: url('<?php the_sub_field('imagen', 'option'); ?>');">
                  <!-- <img class="PrimalSlider-slideImagen" src="" alt="" /> -->
                  <div class="PrimalSlider-slideCaption">
                     <div class="PrimalSlider-captionText">
                        <h2 class="PrimalSlider-slideTitulo"><?php the_sub_field('titulo', 'option'); ?></h2>
                        <div class="PrimalSlider-slideSubtitulo"><?php the_sub_field('descripcion', 'option') ?></div>
                        <a class="PrimalSlider-slideBoton" href="<?php the_sub_field('url', 'option'); ?>"><?php the_sub_field('btn', 'option'); ?></a>
                     </div>
                     <figure class="PrimalSlider-captionImage">
                        <img src="<?php the_sub_field('imagenDec') ?>" alt="">
                     </figure>
                  </div>
               </div>
            </li>
         <?php endwhile; ?>
      </ul>
   </div>
</section>
