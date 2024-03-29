<?php get_header(); ?>
    <main class="service-page" id="service">
        <?php set_query_var('internal-parameter', esc_html(get_the_title())); get_template_part('parts/internal-breadcrump');?>
        <section class="whats-is-it">
            <div class="container align-between">
                <span>
                    <h2 class="h2-bold-title"><?php echo esc_html(get_field('o_que_e')); ?></h2>
                    <p class="h2-light"><?php echo esc_html(get_field('descritivo_do_servico')); ?></p>
                </span>
                <div class="wrapper-img">
                    <img src="<?php echo esc_url(get_field('imagem_servico')); ?>" alt="">
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
                                    $url_da_imagem = esc_url($imagem['url']);
                                    $titulo_da_imagem = esc_attr($imagem['title']);
                                    $descricao_da_imagem = esc_html($imagem['description']);
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
            <h2 class="h2-bold-title"><?php echo esc_html(get_field('titulo_etapa')); ?></h2>
            <div class="container">
                <div class="row align-between">
                    <div class="column">
                        <?php if (get_field('etapa_1_do_processo') !== "") { ?>
                            <span>
                                <h3 class="h1-bold"><?php echo esc_html(get_field('etapa_1_do_processo')); ?></h3>
                                <p class="h2-light"><?php echo esc_html(get_field('texto_etapa_1')); ?></p>
                            </span>
                        <?php  } if (get_field('etapa_2_do_processo') !== "") { ?>
                            <span>
                                <h3 class="h1-bold"><?php echo esc_html(get_field('etapa_2_do_processo')); ?></h3>
                                <p class="h2-light"><?php echo esc_html(get_field('texto_etapa_2')); ?></p>
                            </span>
                        <?php  } ?>
                    </div>
                    <div class="wrapper-img">
                        <img src="<?php echo esc_url(get_field('imagem_etapas')); ?>" alt="">
                    </div>
                    <div class="column">
                        <?php if (get_field('etapa_3_do_processo') !== "") { ?>
                            <span>
                                <h3 class="h1-bold"><?php echo esc_html(get_field('etapa_3_do_processo')); ?></h3>
                                <p class="h2-light"><?php echo esc_html(get_field('texto_etapa_3')); ?></p>
                            </span>
                        <?php  } if (get_field('etapa_4_do_processo') !== "") { ?>
                            <span>
                                <h3 class="h1-bold"><?php echo esc_html(get_field('etapa_4_do_processo')); ?></h3>
                                <p class="h2-light"><?php echo esc_html(get_field('texto_etapa_4')); ?></p>
                            </span>
                        <?php  } ?>
                    </div>
                </div>
                <?php if (get_field('etapa_5_do_processo') !== "") { ?>
                    <span class="row2">
                        <h3 class="h1-bold"><?php echo esc_html(get_field('etapa_5_do_processo')); ?></h3>
                        <p class="h2-light"><?php echo esc_html(get_field('texto_etapa_5')); ?></p>
                    </span>
                <?php  } ?>
            </div>
        </section>
        <div class="container">
            <div class="flag-solutions align-between">
                <span>
                    <h2 class="h2-bold-title"><?php echo esc_html(get_field('titulo_solucoes')); ?></h2>
                    <p class="h2-light"><?php echo esc_html(get_field('texto_solucoes')); ?></p>
                </span>
                <?php 
                    $args = array('post_type' => 'dados', 'posts_per_page' => 1); $var = new WP_Query($args); if ($var->have_posts()) : $var->the_post(); 
                    $whats = formatarVariavel(strval(get_field('numero_de_celular')));
                    endif; wp_reset_postdata();
                ?>
                <a href="https://api.whatsapp.com/send?phone=55<?php echo esc_attr($whats); ?>&text=<?php echo urlencode('Olá, vim pelo site da Camel'); ?>" class="btn-primary"><span><?php echo esc_html(get_field('nome_botao_solucoes')); ?></span></a>
            </div>
        </div>
    </main>
<?php get_footer(); ?>