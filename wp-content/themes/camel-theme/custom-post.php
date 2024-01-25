<?php 
// Banner
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
        'supports' => array('title','revisions', 'thumbnail'),
        'menu_icon' => 'dashicons-id-alt',
    );
    register_post_type('banner', $args);

