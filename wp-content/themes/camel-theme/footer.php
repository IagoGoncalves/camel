    <footer class="site-footer">
        <div class="container align-between">
            <img alt="Camel" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/logo-footer.png"/>
            <div class="fast-access">
                <h2>Acesso rápido</h2>
                <?php wp_nav_menu( array( 'theme_location' => 'wp_devs_footer_menu', 'depth' => 1 )); ?>
            </div>
            <div class="services">
                <h2>Serviços</h2>
                <nav>
                    <a href="#">Auxiliar Logístico</a>
                    <a href="#">Operador de Empilhadeiras</a>
                    <a href="#">Operação Logística</a>
                    <a href="#">Auxiliar de descarga de material</a>
                </nav>
            </div>
            <div class="contact">
                <h2>Contato</h2> 

                <?php $args = array('post_type' => 'dados', 'posts_per_page' => 1);
                    $var = new WP_Query($args);
                        if($var->have_posts()):
                            $var->the_post();?>																	
                                <a href="<?= get_field('endereco_url'); ?>" target="_blank"><?= get_field('endereco'); ?></a>
                                <a href="tel:<?= get_field('numero_de_telefone'); ?>"><?= get_field('numero_de_telefone'); ?></a>
                                <a href="https://api.whatsapp.com/send?phone=55<?= get_field('numero_de_celular'); ?>&text=Olá, vim pelo site da Camel" target="_blank"><?= get_field('numero_de_celular'); ?></a>
                            <?php
                        endif;
                    wp_reset_postdata(); 
                ?>
            </div>
        </div>
        <div class="copyright">
            <div class="container align-between">
                <p>Copyright 2024 © Todos os direitos reservados.</p>
                <img alt="Camel" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/idea.png"/>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>