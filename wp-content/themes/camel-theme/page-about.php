	<?php 
/**
 * Template Name: About
 *
 */
get_header(); ?>
   	<main class="about-page" id="about-page">
		<?php set_query_var('parameter', 'Sobre a Camel'); get_template_part('parts/breadcrump');?>
		<div class="container">
			<section class="history align-between">
				<span>
					<h2 class="h2-bold-title">História da <b>Camel</b></h2>
					<p class="h2-light"><?= get_field('texto_historia_camel'); ?></p>
				</span>
				<img src="<?= get_field('imagem_historia_camel'); ?>" alt="">
			</section>
			<section class="solutions">
				<h2 class="h2-bold-title"><?= get_field('titulo_solucoes'); ?></h2>
				<p class="h2-light"><?= get_field('texto_solucoes'); ?></p>
				<?php 
					$galery = get_field('galeria_solucoes');
					if ($galery) {
						echo '<div class="swiper-slide">';
						foreach ($galery as $imagem) {
							$url_da_imagem = $imagem['url'];
							$titulo_da_imagem = $imagem['title'];
							$descricao_da_imagem = $imagem['description'];
							echo '<img src="' . $url_da_imagem . '" alt="' . $titulo_da_imagem . '" title="' . $titulo_da_imagem . '" />';
						}
						echo '</div>';
					}
				?>
			</section>
		</div>
   	</main>
<?php get_footer(); ?>