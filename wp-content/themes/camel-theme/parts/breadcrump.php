<section class="breadcrump">
    <h1 class="h2-bold-title"><?= get_query_var('parameter'); ?></h1>
    <span class="align">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="h3-light">Home</a>
        <p class="h3-light"> > <?php the_title()?></p>
    </span>
</section>
