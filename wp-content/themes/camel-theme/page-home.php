<?php 
/**
 * Template Name: Home
 *
 */
get_header(); ?>
   	<main class="home" id="home">
		<section class="banner">
			<div class="swiper-container banner-home">
				<div class="swiper-wrapper">
					<?php
						$args = array(
							'post_type' => 'banner',
							'posts_per_page' => -1
						);
						$var = new WP_Query($args);
							if($var->have_posts()):
								while($var->have_posts()):
									$var->the_post();?>																	
										<div class="swiper-slide">
											<?= get_the_post_thumbnail(get_the_ID());?>
											<div class="description">
												<h2><?php the_title()?></h2>
												<?php if (get_field('txt-first-btn') !== "") { ?>
													<a href="<?= esc_url(get_field('first-btn')); ?>" class="btn-primary"><span><?= esc_html(get_field('txt-first-btn')); ?></span></a>
												<?php } ?>

												<?php if (get_field('txt-secondary-btn') !== "") { ?>
													<a href="<?= esc_url(get_field('url-secondary-btn')); ?>" class="contact-us"><?= esc_html(get_field('txt-secondary-btn')); ?></a>
												<?php } ?>
											</div>
										</div>	
									<?php
								endwhile;
							endif;
						wp_reset_postdata(); 
					?>
				</div>
				<div class="swiper-pagination"></div>
				<div class="navigation align">
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
				</div>
			</div>			
		</section>
        <section class="our-services">
			<div class="container">
				<h2 class="h2-bold-title">Nossos serviços</h2>
				<article class="align-between">
					<?php
						$args = array(
							'post_type' => 'services',
							'posts_per_page' => 4
						);
						$var = new WP_Query($args);
							if($var->have_posts()):
								while($var->have_posts()):
									$var->the_post();?>																	
										<div>
											<img src="<?= get_field('icone_servico'); ?>" alt="">
											<h3 class="h1-bold"><?php the_title()?></h3>
											<p class="h3-light"><?= get_field('sobre_o_servico'); ?></p>
										</div>
									<?php
								endwhile;
							endif;
						wp_reset_postdata(); 
					?>
				</article>
			</div>
		</section>
   	</main>
<?php get_footer(); ?>