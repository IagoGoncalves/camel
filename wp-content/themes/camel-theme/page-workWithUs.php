	<?php 
/**
 * Template Name: Work with us
 *
 */
get_header(); ?>
    <main id="workWithUS" class="workWithUS-page" tabindex="-1" role="main">
		<?php set_query_var('parameter', 'Trabalhe conosco'); get_template_part('parts/breadcrump');?>
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSePLPWtyTAxu4aCa7TalVzfDgWapvvLcM1lhYfLsfrLcBC2Pg/viewform?embedded=true" width="700" height="2000px" frameborder="0" marginheight="0" marginwidth="0">Carregando…</iframe>
    </main>
<?php get_footer(); ?>