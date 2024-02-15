	<?php 
/**
 * Template Name: Services
 *
 */
get_header(); ?>
    <main id="services" class="services-page" tabindex="-1" role="main">
		<?php $args = array('post_type' => 'dados', 'posts_per_page' => 1); $var = new WP_Query($args); if ($var->have_posts()) : $var->the_post(); $whats = formatarVariavel(strval(get_field('numero_de_celular'))); endif; wp_reset_postdata(); ?>
        <?php set_query_var('parameter', esc_html('Todos serviços')); get_template_part('parts/breadcrump');?>
        <div class="container">
            <?php
            $args = array(
                'post_type' => 'services',
                'posts_per_page' => -1
            );
            $var = new WP_Query($args);
            if($var->have_posts()):
                while($var->have_posts()):
                    $var->the_post();?>	
                        <div class="align-between">
                            <?php echo get_the_post_thumbnail(get_the_ID()); ?>
                            <div>
                                <h2 class="h2-bold-title"><?php the_title() ?></h2>
                                <?php echo get_the_post_thumbnail(get_the_ID()); ?>
                                <p class="h2-light"><?php echo esc_html(get_field('sobre_o_servico')); ?></p>
                                <span class="talk-us">
                                    <a href="<?php the_permalink()?>" class="btn-primary"><span><?php echo esc_html(get_field('texto_botao_1')); ?></span></a>
                                    <a href="https://api.whatsapp.com/send?phone=55<?php echo esc_attr($whats); ?>&text=<?php echo urlencode('Olá, vim pelo site da Camel e gostaria de falar sobre '); ?> <?php the_title()?>" class="second-a" target="_blank"><?php echo esc_html(get_field('texto_botao_2')); ?></a>
                                </span>
                            </div>	
                        </div>
                    <?php
                endwhile;
            endif;
            wp_reset_postdata(); 
            ?>
        </div>
    </main>
<?php get_footer(); ?>