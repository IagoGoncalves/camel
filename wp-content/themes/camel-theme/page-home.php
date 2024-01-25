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
						$args = array('post_type' => 'banner','posts_per_page' => -1);
							$var = new WP_Query($args);
							if($var->have_posts()):
								while($var->have_posts()):
									$var->the_post();?>																	
										<div class="swiper-slide">
											<?= get_the_post_thumbnail(get_the_ID());?>
										</div>	
									<?php
								endwhile;
							endif;
						wp_reset_postdata(); 
					?>
				</div>
			</div>			
		</section>
        <?php
            for ($i=0; $i < 50; $i++) { 
                echo '<h1>iago lindo</h1>';
            }
        ?>
   	</main>
<?php get_footer(); ?>