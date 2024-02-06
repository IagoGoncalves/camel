	<?php 
/**
 * Template Name: Orçamento
 *
 */
get_header(); ?>
    <main id="budget" class="budget-page" tabindex="-1" role="main">
		<?php set_query_var('parameter', 'Orçamento'); get_template_part('parts/breadcrump');?>
        <div class="container">
            <span>
                <h2 class="h2-bold-title"><?= get_field('titulo_da_secao'); ?></h2>
                <p class="h2-light"><?= get_field('texto_da_secao'); ?></p>
            </span>
            <?php echo do_shortcode( '[contact-form-7 id="3af7968" title="Budget Form"]' ); ?>
        </div>
    </main>
<?php get_footer(); ?>