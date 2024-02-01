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
				<div class="swiper-container galery-per-view">
					<div class="swiper-wrapper align-between">
						<?php 
							$galery = get_field('galeria_solucoes');
							if ($galery) {
								foreach ($galery as $imagem) {
									$url_da_imagem = $imagem['url'];
									$titulo_da_imagem = $imagem['title'];
									$descricao_da_imagem = $imagem['description'];
									echo '<div class="swiper-slide"><img src="' . $url_da_imagem . '" alt="' . $titulo_da_imagem . '" title="' . $titulo_da_imagem . '" /></div>';
								}
							}
						?>
					</div>
					<div class="navigation align">
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
					</div>
				</div>
			</section>
		</div>
		<section class="principles">
			<h2 class="h2-bold-title">Nossos princípios</h2>
			<div class="container align-between">
				<div class="align">
					<img src="<?= get_field('imagem_principio_1'); ?>" alt="">
					<h3><?= get_field('titulo_principio_1'); ?></h3>
					<p><?= get_field('texto_principio_1'); ?></p>
				</div>
				<div class="align">
					<img src="<?= get_field('imagem_principio_2'); ?>" alt="">
					<h3><?= get_field('titulo_principio_2'); ?></h3>
					<p><?= get_field('texto_principio_2'); ?></p>
				</div>
				<div class="align">
					<img src="<?= get_field('imagem_principio_3'); ?>" alt="">
					<h3><?= get_field('titulo_principio_3'); ?></h3>
					<p><?= get_field('texto_principio_3'); ?></p>
				</div>
			</div>
		</section>
		<section class="customers">
			<h2 class="h2-bold-title">Nossos clientes</h2>
			<div class="container align-between">
				<?php 
					$galery = get_field('galeria_de_clientes');
					if ($galery) {
						foreach ($galery as $imagem) {
							$url_da_imagem = $imagem['url'];
							$titulo_da_imagem = $imagem['title'];
							$descricao_da_imagem = $imagem['description'];
							echo '<img src="' . $url_da_imagem . '" alt="' . $titulo_da_imagem . '" title="' . $titulo_da_imagem . '" />';
						}
					}
				?>
			</div>
		</section>
   	</main>
<?php get_footer(); ?>