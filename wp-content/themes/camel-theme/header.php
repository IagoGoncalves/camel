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
<?php wp_body_open(); ?>
    <div class="container-header">
        <header class="align-between">
            <div class="photo">
				<img alt="Camel" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/logo.png"/>
            </div>
            <?php wp_nav_menu( array( 'theme_location' => 'wp_devs_main_menu', 'depth' => 2 )); ?>
            <a href="#" class="btn-primary">Orçamento</a>
        </header>
    </div>