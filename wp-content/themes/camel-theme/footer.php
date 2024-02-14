    <footer class="site-footer">
        <div class="container align-between">
            <img alt="<?php echo esc_attr('Camel'); ?>" loading="<?php echo esc_attr('lazy'); ?>" src="<?php echo esc_url(get_template_directory_uri() . '/images/logo-footer.png'); ?>"/>

            <div class="fast-access">
                <h2>Acesso rápido</h2>
                <?php wp_nav_menu( array( 'theme_location' => 'wp_devs_footer_menu', 'depth' => 1 )); ?>
            </div>
            <div class="services">
                <h2>Serviços</h2>
                <nav>
                    <a href="<?php echo esc_url( home_url( '/auxiliar-logistico' ) ); ?>">Auxiliar Logístico</a>
                    <a href="<?php echo esc_url( home_url( '/operador-de-empilhadeiras' ) ); ?>">Operador de Empilhadeiras</a>
                    <a href="<?php echo esc_url( home_url( '/operacao-logistica' ) ); ?>">Operação Logística</a>
                    <a href="<?php echo esc_url( home_url( '/auxiliar-de-descarga-de-material' ) ); ?>">Auxiliar de descarga de material</a>
                </nav>
            </div>
            <div class="contact">
                <h2><?php echo esc_html('Contato'); ?></h2> 
                <?php 
                    $args = array('post_type' => 'dados', 'posts_per_page' => 1);
                    $var = new WP_Query($args);
                    if ($var->have_posts()) :
                        $var->the_post(); ?>																	
                            <a href="<?php echo esc_url(get_field('endereco_url')); ?>" target="_blank"><?php echo esc_html(get_field('endereco')); ?></a>
                            <a href="tel:<?php echo esc_attr(get_field('numero_de_telefone')); ?>"><?php echo esc_html(get_field('numero_de_telefone')); ?></a>
                            <a href="https://api.whatsapp.com/send?phone=55<?php echo esc_attr(get_field('numero_de_celular')); ?>&text=<?php echo urlencode('Olá, vim pelo site da Camel'); ?>" target="_blank"><?php echo esc_html(get_field('numero_de_celular')); ?></a>
                        <?php
                    endif;
                    wp_reset_postdata(); 
                ?>
            </div>
        </div>
        <div class="copyright">
            <div class="container align-between">
                <p>Copyright 2024 © Todos os direitos reservados.</p>
                <img alt="<?php echo esc_attr('Camel'); ?>" loading="<?php echo esc_attr('lazy'); ?>" src="<?php echo esc_url(get_template_directory_uri() . '/images/idea.png'); ?>"/>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>