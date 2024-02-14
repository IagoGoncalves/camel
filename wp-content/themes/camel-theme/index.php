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
					if ($var->have_posts()) :
						while ($var->have_posts()) :
							$var->the_post(); ?>
							<div class="swiper-slide">
								<?php echo get_the_post_thumbnail(get_the_ID()); ?>
								<img src="<?php echo esc_url(get_field('banner_mobile')); ?>" class="mobile-version" alt="">
								<div class="description">
									<h2><?php the_title() ?></h2>
									<span>
										<?php if (get_field('txt-first-btn') !== "") { ?>
											<a href="<?php echo esc_url(get_field('first-btn')); ?>" class="btn-primary"><span><?php echo esc_html(get_field('txt-first-btn')); ?></span></a>
										<?php } ?>

										<?php if (get_field('txt-secondary-btn') !== "") { ?>
											<a href="<?php echo esc_url(get_field('url-secondary-btn')); ?>" class="contact-us"><?php echo esc_html(get_field('txt-secondary-btn')); ?></a>
										<?php } ?>
									</span>
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
				<h2 class="h2-bold-title"><?php echo esc_html('Nossos serviços'); ?></h2>
				<article class="align-between">
					<?php
					$args = array(
						'post_type' => 'services',
						'posts_per_page' => 4
					);
					$var = new WP_Query($args);
					if ($var->have_posts()) :
						while ($var->have_posts()) :
							$var->the_post(); ?>
							<a href="<?php the_permalink() ?>">
								<img src="<?php echo esc_url(get_field('icone_servico')); ?>" alt="">
								<h3 class="h1-bold"><?php the_title() ?></h3>
								<p class="h3-light"><?php echo esc_html(get_field('sobre_o_servico')); ?></p>
							</a>
						<?php
						endwhile;
					endif;
					wp_reset_postdata();
					?>
				</article>
			</div>
		</section>
		<section class="about">
			<div class="container align-between">
				<div>
					<h2 class="h2-bold-subtitle"><?php echo esc_html(get_field('sobre_a_camel')); ?></h2>
					<p class="h2-light"><?php echo esc_html(get_field('texto_sobre_a_camel')); ?></p>
					<span class="talk-us">
						<a href="<?php echo esc_url(get_field('saiba_mais')); ?>" class="btn-primary"><span><?php echo esc_html(get_field('nome_botao_1')); ?></span></a>
						<a href="<?php echo esc_url(get_field('fale_conosco')); ?>" class="second-a"><?php echo esc_html(get_field('nome_botao_2')); ?></a>
					</span>
				</div>
				<img src="<?php echo esc_url(get_field('imagem_sobre_camel')); ?>" alt="">
			</div>
		</section>
		<section class="fork-lift">
			<div class="container align-between">
				<img src="<?php echo esc_url(get_field('imagem_empilhadeira')); ?>" alt="">
				<div>
					<h2 class="h2-bold-subtitle"><?php echo esc_html(get_field('titulo_secao_empilhadeira')); ?></h2>
					<p class="h2-light"><?php echo esc_html(get_field('texto_secao_empilhadeira')); ?></p>
					<div class="certifications">
						<p>Certificados:</p>
						<img src="<?php echo esc_url(get_field('certificado_1')); ?>" alt="">
						<img src="<?php echo esc_url(get_field('certificado_2')); ?>" alt="">
					</div>
					<hr>
					<span class="talk-us">
						<a href="<?php echo esc_url(get_field('saiba_mais')); ?>" class="btn-primary"><span><?php echo esc_html(get_field('empilhadeira_nome_botao_1')); ?></span></a>
						<a href="<?php echo esc_url(get_field('fale_conosco')); ?>" class="second-a"><?php echo esc_html(get_field('empilhadeira_nome_botao_2')); ?></a>
					</span>
				</div>
			</div>
		</section>
		<section class="interest">
			<div class="container">
				<h2 class="h2-bold-subtitle"><?php echo esc_html(get_field('titulo_da_secao_seja_um_colaborador')); ?></h2>
				<a href="<?php echo esc_url(get_field('url_botao_tenho_interesse')); ?>" class="btn-primary"><span><?php echo esc_html(get_field('texto_botao_tenho_interesse')); ?></span></a>
			</div>
		</section>
		<section class="xp">
			<div class="container align-between">
				<img src="<?php echo esc_url(get_field('imagem_experiencia_camel')); ?>" alt="">
				<div>
					<h2 class="h2-bold-subtitle"><?php echo esc_html(get_field('titulo_experiencia_camel')); ?></h2>
					<p class="h2-light"><?php echo esc_html(get_field('texto_experiencia_camel')); ?></p>
					<div class="companies">
						<img src="<?php echo esc_url(get_field('logo1')); ?>" alt="">
						<img src="<?php echo esc_url(get_field('logo2')); ?>" alt="">
						<img src="<?php echo esc_url(get_field('logo3')); ?>" alt="">
					</div>
				</div>
			</div>
		</section>
   	</main>
<?php get_footer(); ?>