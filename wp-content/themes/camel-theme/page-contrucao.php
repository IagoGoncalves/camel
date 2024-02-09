<?php
/**
 * Template Name: Pagina em construção
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

?>
    <style type="text/css">
        .site-em-construcao{
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 90vh;
        }
               
        img{
            max-width: 100%;
            width: 60%;
        }
        h1{
            font-size: 50px;
            font-weight: 800;
            text-transform: uppercase;
        }
    </style>
	<main id="site-em-construcao" class="site-em-construcao" tabindex="-1" role="main" style="text-align: center;">	
		<img style="max-width: 100%;" src="<?php echo get_template_directory_uri(); ?>/assets/images/construcao.jpg"/>
        <h1>Site em Construção</h1>
	</main><!-- #main -->
<?php

