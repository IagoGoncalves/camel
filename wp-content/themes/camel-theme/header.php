<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open();
    if (is_page('home')): ?>
        <div class="container-header" id="header-menu">
            <header class="align-between">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="photo">
                    <img alt="<?php echo esc_attr('Camel'); ?>" loading="<?php echo esc_attr('lazy'); ?>" src="<?php echo esc_url(get_template_directory_uri() . '/images/logo.png'); ?>"/>
                </a>
                <div class="mobile-menu-toggle mobile-version">
                    <div class="hamburger"></div>
                </div>
                <?php wp_nav_menu(array('theme_location' => 'camel_main_menu', 'depth' => 2)); ?>
                <a href="<?php echo esc_url(home_url('/orcamento')); ?>" class="btn-primary desktop-version"><span><?php echo esc_html('Orçamento'); ?></span></a>
            </header>
        </div>
    <?php endif;
    if (!is_page('home')): ?>
        <div class="container-header internal-header">
            <header class="align-between">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="photo">
                    <img alt="<?php echo esc_attr('Camel'); ?>" loading="<?php echo esc_attr('lazy'); ?>" src="<?php echo esc_url(get_template_directory_uri() . '/images/logo.png'); ?>"/>
                </a>
                <div class="mobile-menu-toggle mobile-version">
                    <div class="hamburger"></div>
                </div>
                <?php wp_nav_menu(array('theme_location' => 'wp_devs_main_menu', 'depth' => 2)); ?>
                <a href="<?php echo esc_url(home_url('/orcamento')); ?>" class="btn-primary desktop-version"><span><?php echo esc_html('Orçamento'); ?></span></a>
            </header>
        </div>
    <?php endif; 
    function formatarVariavel($variavel) {
        $variavel = str_replace(' ', '', $variavel);
        $variavel = str_replace('(', '', $variavel);
        $variavel = str_replace(')', '', $variavel);
        $variavel = str_replace('-', '', $variavel);
    
        return $variavel;
    } ?>
