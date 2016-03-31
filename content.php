<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage SH_Base
 * @since SH Base 1.0
 */
?>



<!-- PrimalBloques -->
<section class="PrimalBlocks">
    <!-- Contenedor -->
    <div class="PrimalBlocks-contenido u-contenedor">   

        <h2 class="PrimalBlocks-titulo"><?php echo single_cat_title( '', false );?></h2>

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

    </div>
</section>