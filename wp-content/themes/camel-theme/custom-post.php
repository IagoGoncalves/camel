<?php 
    $dados = array(
        'name'          => _x('Dados', 'post type general name'),
        'singular_name' => _x('Dado', 'post type singular name'),
        'menu_name'     => 'Dados',
    );
    $args = array(
        'labels'            => $dados,
        'description'       => 'Custom Post for dados',
        'public'            => true,
        'show_in_nav_menus' => true,
        'supports' => array('title','revisions'),
        'menu_icon' => 'dashicons-buddicons-buddypress-logo',
    );
    register_post_type('dados', $args);

    $banner = array(
        'name'          => _x('Banners', 'post type general name'),
        'singular_name' => _x('Banner', 'post type singular name'),
        'menu_name'     => 'Banner',
    );
    $args = array(
        'labels'            => $banner,
        'description'       => 'Custom Post for banner',
        'public'            => true,
        'show_in_nav_menus' => true,
        'supports' => array('title', 'thumbnail'),
        'menu_icon' => 'dashicons-format-image',
    );
    register_post_type('banner', $args);

    $services = array(
        'name'          => _x('Services', 'post type general name'),
        'singular_name' => _x('Service', 'post type singular name'),
        'menu_name'     => 'Services',
    );
    $args = array(
        'labels'            => $services,
        'description'       => 'Custom Post for services',
        'public'            => true,
        'show_in_nav_menus' => true,
        'supports' => array('title', 'revisions', 'thumbnail'),
        'menu_icon' => 'dashicons-admin-tools',
    );
    register_post_type('services', $args);