<?php get_header(); ?>
    <main id="services" class="services" tabindex="-1" role="main">
        <?php
            $args = array(
                'post_type' => 'services',
                'posts_per_page' => -1
            );
            $var = new WP_Query($args);
                if($var->have_posts()):
                    while($var->have_posts()):
                        $var->the_post();?>																	
                            <?php the_title() ?>	
                        <?php
                    endwhile;
                endif;
            wp_reset_postdata(); 
        ?>
    </main>
<?php get_footer(); ?>