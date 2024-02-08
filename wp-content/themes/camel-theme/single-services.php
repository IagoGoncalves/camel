<?php get_header(); ?>
    <main class="service-page" id="service">
		<?php set_query_var('internal-parameter', get_the_title()); get_template_part('parts/internal-breadcrump');?>
        <section class="whats-is-it">
            <div class="container align-between">
                <span>
                    <h2 class="h2-bold-title"><?= get_field('o_que_e'); ?></h2>
                    <p class="h2-light"><?= get_field('descritivo_do_servico'); ?></p>
                </span>
                <div class="wrapper-img">
                    <img src="<?= get_field('imagem_servico'); ?>" alt="">
                </div>
            </div>
        </section>
        <section class="gallery">
            <div class="container">
                <div class="swiper-container galery-per-view">
                    <div class="swiper-wrapper align-between">
                        <?php 
                            $galery = get_field('galeria_de_fotos');
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
            </div>
        </section>
        <section class="step-of-process">
            <h2 class="h2-bold-title"><?= get_field('titulo_etapa'); ?></h2>
            <div class="container">
                <div class="row align-between">
                    <div class="column">
                        <span>
                            <h3 class="h1-bold"><?= get_field('etapa_1_do_processo'); ?></h3>
                            <p class="h2-light"><?= get_field('texto_etapa_1'); ?></p>
                        </span>
                        <span>
                            <h3 class="h1-bold"><?= get_field('etapa_2_do_processo'); ?></h3>
                            <p class="h2-light"><?= get_field('texto_etapa_2'); ?></p>
                        </span>
                    </div>
                    <div class="wrapper-img">
                        <img src="<?= get_field('imagem_etapas'); ?>" alt="">
                    </div>
                    <div class="column">
                        <span>
                            <h3 class="h1-bold"><?= get_field('etapa_3_do_processo'); ?></h3>
                            <p class="h2-light"><?= get_field('texto_etapa_3'); ?></p>
                        </span>
                        <span>
                            <h3 class="h1-bold"><?= get_field('etapa_4_do_processo'); ?></h3>
                            <p class="h2-light"><?= get_field('texto_etapa_4'); ?></p>
                        </span>
                    </div>
                </div>
                <span class="row2">
                    <h3 class="h1-bold"><?= get_field('etapa_5_do_processo'); ?></h3>
                    <p class="h2-light"><?= get_field('texto_etapa_5'); ?></p>
                </span>
            </div>
        </section>
        <div class="container">
            <div class="flag-solutions align-between">
                <span>
                    <h2 class="h2-bold-title"><?= get_field('titulo_solucoes'); ?></h2>
                    <p class="h2-light"><?= get_field('texto_solucoes'); ?></p>
                </span>
                <a href="<?= get_field('url_solucoes'); ?>" class="btn-primary"><span><?= get_field('nome_botao_solucoes'); ?></span></a>
            </div>
        </div>
    </main>
<?php get_footer(); ?>