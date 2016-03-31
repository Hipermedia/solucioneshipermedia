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
										<div class="mayoria">
											<h2 class="socio"><?php the_title(); ?></h2>
											<p class="giro"><?php the_field('subtituloPost'); ?></p>
											<p class="dato"><span></span><?php the_field('correoSocio'); ?></p>
											<p class="dato"><span></span><?php the_field('telefonoSocio'); ?></p>
										</div>
										<div class="resto">
											<p class="dato"><span></span><?php the_field('webSocio'); ?></p>
											<a class="social" href="<?php the_field('facebookSocio'); ?>"></a>
											<a class="social" href="<?php the_field('twitterSocio'); ?>"></a>
											<a class="social" href="<?php the_field('googleSocio'); ?>"></a>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>

						<?php else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>