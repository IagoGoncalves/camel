	<?php 
/**
 * Template Name: About
 *
 */
get_header(); ?>
   <main class="about-page" id="about-page">
    <?php set_query_var('parameter', esc_html('Sobre a Camel')); get_template_part('parts/breadcrump');?>
    <div class="container">
        <section class="history align-between">
            <span>
                <h2 class="h2-bold-title"><?php echo esc_html('História da'); ?> <b><?php echo esc_html('Camel'); ?></b></h2>
                <p class="h2-light"><?php echo esc_html(get_field('texto_historia_camel')); ?></p>
            </span>
            <div class="wrapper-img">
                <img src="<?php echo esc_url(get_field('imagem_historia_camel')); ?>" alt="">
            </div>
        </section>
        <img class="forklift" alt="<?php echo esc_attr('Forklift'); ?>" loading="<?php echo esc_attr('lazy'); ?>" src="<?php echo esc_url(get_template_directory_uri() . '/images/forklift-vetor.png'); ?>"/>
        <section class="solutions">
            <h2 class="h2-bold-title"><?php echo esc_html(get_field('titulo_solucoes')); ?></h2>
            <p class="h2-light"><?php echo esc_html(get_field('texto_solucoes')); ?></p>
            <div class="swiper-container galery-per-view">
                <div class="swiper-wrapper align-between">
                    <?php 
                    $galery = get_field('galeria_solucoes');
                    if ($galery) {
                        foreach ($galery as $imagem) {
                            $url_da_imagem = esc_url($imagem['url']);
                            $titulo_da_imagem = esc_attr($imagem['title']);
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
        <h2 class="h2-bold-title"><?php echo esc_html('Nossos princípios'); ?></h2>
        <div class="container align-between">
            <div class="align">
                <img src="<?php echo esc_url(get_field('imagem_principio_1')); ?>" alt="">
                <h3><?php echo esc_html(get_field('titulo_principio_1')); ?></h3>
                <p><?php echo esc_html(get_field('texto_principio_1')); ?></p>
            </div>
            <div class="align">
                <img src="<?php echo esc_url(get_field('imagem_principio_2')); ?>" alt="">
                <h3><?php echo esc_html(get_field('titulo_principio_2')); ?></h3>
                <p><?php echo esc_html(get_field('texto_principio_2')); ?></p>
            </div>
            <div class="align">
                <img src="<?php echo esc_url(get_field('imagem_principio_3')); ?>" alt="">
                <h3><?php echo esc_html(get_field('titulo_principio_3')); ?></h3>
                <p><?php echo esc_html(get_field('texto_principio_3')); ?></p>
            </div>
        </div>
    </section>
    <section class="customers">
        <h2 class="h2-bold-title"><?php echo esc_html('Nossos clientes'); ?></h2>
        <div class="container align-between">
            <?php 
            $galery = get_field('galeria_de_clientes');
            if ($galery) {
                foreach ($galery as $imagem) {
                    $url_da_imagem = esc_url($imagem['url']);
                    $titulo_da_imagem = esc_attr($imagem['title']);
                    echo '<div class="wrapper-img"><img src="' . $url_da_imagem . '" alt="' . $titulo_da_imagem . '" title="' . $titulo_da_imagem . '" /></div>';
                }
            }
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>