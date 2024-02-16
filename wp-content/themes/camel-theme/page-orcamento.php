	<?php 
/**
 * Template Name: Orçamento
 *
 */
get_header(); ?>
    <main id="budget" class="budget-page" tabindex="-1" role="main">
        <?php set_query_var('parameter', esc_html('Orçamento')); get_template_part('parts/breadcrump');?>
        <div class="container">
            <span>
                <h2 class="h2-bold-title"><?= get_field('titulo_da_secao'); ?></h2>
                <p class="h2-light"><?= get_field('texto_da_secao'); ?></p>
            </span>
            <div class="wpcf7 js" id="wpcf7-f296-o1" lang="en-US" dir="ltr">
                <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
                    <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $nome = $_POST['your-name'];
                            $email = $_POST['company-name'];
                            $mensagem = $_POST['city-name'];
                        }
                    ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init" onsubmit="event.preventDefault();">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="296">
                            <input type="hidden" name="_wpcf7_version" value="5.8.7">
                            <input type="hidden" name="_wpcf7_locale" value="en_US">
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f296-o1">
                            <input type="hidden" name="_wpcf7_container_post" value="0">
                            <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                        </div>
                        <div class="row1">
                            <p><label> Nome completo:<br><span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" autocomplete="name" aria-required="true" aria-invalid="false" value="" type="text" name="your-name"></span></label></p>
                            <p><label> Nome da empresa:<br><span class="wpcf7-form-control-wrap" data-name="company-name"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" autocomplete="name" aria-required="true" aria-invalid="false" value="" type="text" name="company-name"></span> </label></p>
                        </div>
                        <div class="row2">
                            <p><label> Cidade:<br><span class="wpcf7-form-control-wrap" data-name="city-name"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" autocomplete="name" aria-required="true" aria-invalid="false" value="" type="text" name="city-name"></span> </label></p>
                            <p><label> Estado:<br><span class="wpcf7-form-control-wrap" data-name="state-name"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" autocomplete="name" aria-required="true" aria-invalid="false" value="" type="text" name="state-name"></span> </label></p>
                            <p><label> Cep:<br><span class="wpcf7-form-control-wrap" data-name="cep"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" autocomplete="name" aria-required="true" aria-invalid="false" value="" type="text" name="cep"></span></label></p>
                        </div>
                        <div class="row3">
                            <p><label> Serviços:<br><span class="wpcf7-form-control-wrap" data-name="menu-86"><select class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false" name="menu-86">
                                <?php $args = array('post_type' => 'services','posts_per_page' => -1); $var = new WP_Query($args); if($var->have_posts()): while($var->have_posts()): $var->the_post();?>    
                                    <option value="<?php echo esc_attr(get_the_title()); ?>"><?php echo esc_html(get_the_title()); ?></option>
                                <?php endwhile; endif; wp_reset_postdata();?>
                            </select></span></label></p>
                            <a href="#" id="submitForm">Enviar orçamento</a>
                        </div>
                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                    </form>
                </div>
            </div>
            <div class="disabled" id="numeroDiv">
                <?php 
                    $args = array('post_type' => 'dados', 'posts_per_page' => 1);
                    $var = new WP_Query($args);
                        if($var->have_posts()):
                            $var->the_post();
                            echo formatarVariavel(strval(get_field('numero_de_celular')));
                        endif;
                    wp_reset_postdata(); 
                ?>
            </div>
    </main>
    <script>
        document.getElementById('submitForm').addEventListener('click', function(event) {
            event.preventDefault();
            var numeroTelefone = document.getElementById('numeroDiv').textContent.trim();
            var nomeCompleto = document.querySelector('input[name="your-name"]').value;
            var nomeEmpresa = document.querySelector('input[name="company-name"]').value;
            var cidade = document.querySelector('input[name="city-name"]').value;
            var estado = document.querySelector('input[name="state-name"]').value;
            var cep = document.querySelector('input[name="cep"]').value;
            var servicos = document.querySelector('select[name="menu-86"]').value;

            var url = `https://api.whatsapp.com/send?phone=55${numeroTelefone}&text=Olá, gostaria de um orçamento. Nome: `;
            url += encodeURIComponent(nomeCompleto) + ', Nome da Empresa: ' + encodeURIComponent(nomeEmpresa) + ', Cidade: ';
            url += encodeURIComponent(cidade) + ', Estado: ' + encodeURIComponent(estado) + ', Cep: ' + encodeURIComponent(cep);
            url += ', Serviço: ' + encodeURIComponent(servicos);

            window.open(url, '_blank');
        });
    </script>
<?php get_footer(); ?>