<?php 
/*
Plugin Name: Custom Post Types
Plugin URI: kylevalenzuela.com
Description: Custom Post Types for kylevalenzuela
Version: 1.0
Author: Kyle Valenzuela
Author URI: kylevalenzuela.com
License: GPL
Copyright: Kyle Valenzuela
*/

/**********************************
Platforms Custom Taxonomy 
 **********************************/


function create_platform_taxonomy() {
    $labels = array(
        'name'                           => 'Platfrom',
        'singular_name'                  => 'platform',
        'search_items'                   => 'Search platforms',
        'all_items'                      => 'All platforms',
        'edit_item'                      => 'Edit platforms',
        'update_item'                    => 'Update platforms',
        'add_new_item'                   => 'Add New platforms',
        'new_item_name'                  => 'New platform',
        'menu_name'                      => 'Platforms',
        'view_item'                      => 'View platform',
        'popular_items'                  => 'Popular platform',
        'separate_items_with_commas'     => 'Separate platforms with commas',
        'add_or_remove_items'            => 'Add or remove platforms',
        'choose_from_most_used'          => 'Choose from the most used platforms',
        'not_found'                      => 'No platform found'
    );

    register_taxonomy(
        'platform',
        'post',
        array(
            'label' => __( 'Platform' ),
            'hierarchical' => true,
            'labels' => $labels,
            'public' => true,
            'show_in_nav_menus' => false,
            'show_tagcloud' => false,
            'show_admin_column' => true,
            'rewrite' => array(
                'slug' => 'platform'
            ),
            'show_in_rest'       => true,
	  		'rest_base'          => 'platform',
	  		'rest_controller_class' => 'WP_REST_Terms_Controller',
        )
    );
}
add_action( 'init', 'create_platform_taxonomy' );


/**********************************
Design Type Custom Taxonomy 
 **********************************/


function create_designtype_taxonomy() {
    $labels = array(
        'name'                           => 'Design Type',
        'singular_name'                  => 'designtype',
        'search_items'                   => 'Search design types',
        'all_items'                      => 'All design types',
        'edit_item'                      => 'Edit design types',
        'update_item'                    => 'Update design types',
        'add_new_item'                   => 'Add New design types',
        'new_item_name'                  => 'New design type',
        'menu_name'                      => 'Design types',
        'view_item'                      => 'View design type',
        'popular_items'                  => 'Popular design type',
        'separate_items_with_commas'     => 'Separate design types with commas',
        'add_or_remove_items'            => 'Add or remove design types',
        'choose_from_most_used'          => 'Choose from the most used design types',
        'not_found'                      => 'No design type found'
    );

    register_taxonomy(
        'designtype',
        'post',
        array(
            'label' => __( 'Design Type' ),
            'hierarchical' => true,
            'labels' => $labels,
            'public' => true,
            'show_in_nav_menus' => false,
            'show_tagcloud' => false,
            'show_admin_column' => true,
            'rewrite' => array(
                'slug' => 'design-type'
            ),
            'show_in_rest'       => true,
	  		'rest_base'          => 'design-type',
	  		'rest_controller_class' => 'WP_REST_Terms_Controller',
        )
    );
}
add_action( 'init', 'create_designtype_taxonomy' );

/**********************************
Programing Language Custom Taxonomy 
 **********************************/


function create_programminglanguage_taxonomy() {
    $labels = array(
        'name'                           => 'Programming Lanuage',
        'singular_name'                  => 'programminglanguage',
        'search_items'                   => 'Search programming languages',
        'all_items'                      => 'All programming languages',
        'edit_item'                      => 'Edit programming languages',
        'update_item'                    => 'Update programming languages',
        'add_new_item'                   => 'Add New programming languages',
        'new_item_name'                  => 'New programming language',
        'menu_name'                      => 'Programming Languages',
        'view_item'                      => 'View programming language',
        'popular_items'                  => 'Popular programming language',
        'separate_items_with_commas'     => 'Separate programming languages with commas',
        'add_or_remove_items'            => 'Add or remove programming languages',
        'choose_from_most_used'          => 'Choose from the most used programming languages',
        'not_found'                      => 'No programming language found'
    );

    register_taxonomy(
        'programminglanguage',
        'post',
        array(
            'label' => __( 'Programming Lanuage' ),
            'hierarchical' => true,
            'labels' => $labels,
            'public' => true,
            'show_in_nav_menus' => false,
            'show_tagcloud' => false,
            'show_admin_column' => true,
            'rewrite' => array(
                'slug' => 'programming-language'
            ),
            'show_in_rest'       => true,
	  		'rest_base'          => 'programming-language',
	  		'rest_controller_class' => 'WP_REST_Terms_Controller',
        )
    );
}
add_action( 'init', 'create_programminglanguage_taxonomy' );


/**********************************
Photography Genre Custom Taxonomy 
 **********************************/


function create_photogenre_taxonomy() {
    $labels = array(
        'name'                           => 'Photo Genre',
        'singular_name'                  => 'photogenre',
        'search_items'                   => 'Search photo genres',
        'all_items'                      => 'All photo genres',
        'edit_item'                      => 'Edit photo genres',
        'update_item'                    => 'Update photo genres',
        'add_new_item'                   => 'Add New photo genres',
        'new_item_name'                  => 'New photo genre',
        'menu_name'                      => 'Photo genres',
        'view_item'                      => 'View photo genre',
        'popular_items'                  => 'Popular photo genre',
        'separate_items_with_commas'     => 'Separate photo genres with commas',
        'add_or_remove_items'            => 'Add or remove photo genres',
        'choose_from_most_used'          => 'Choose from the most used photo genres',
        'not_found'                      => 'No photo genre found'
    );

    register_taxonomy(
        'photogenre',
        'post',
        array(
            'label' => __( 'Photo Genre' ),
            'hierarchical' => true,
            'labels' => $labels,
            'public' => true,
            'show_in_nav_menus' => false,
            'show_tagcloud' => false,
            'show_admin_column' => true,
            'rewrite' => array(
                'slug' => 'photo-genre'
            ),
            'show_in_rest'       => true,
	  		'rest_base'          => 'photo_genre',
	  		'rest_controller_class' => 'WP_REST_Terms_Controller',
        )
    );
}
add_action( 'init', 'create_photogenre_taxonomy' );

/**********************************
Design Custom Post Type 
 **********************************/

function design_custom_post() {
    $args = array(
        'label' => 'Design',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => true,
        'rewrite' => array('slug' => 'design'),
        'query_var' => true,
        'menu_icon' => 'dashicons-art',
        'taxonomies' => array('category', 'platform', 'designtype'),
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'custom-fields',
            'revisions',
            'thumbnail',
            'page-attributes',
        ),
        'show_in_rest'       => true,
  		'rest_base'          => 'design',
  		'rest_controller_class' => 'WP_REST_Posts_Controller'
    );
    register_post_type( 'design', $args );
    flush_rewrite_rules(false);
}
add_action( 'init', 'design_custom_post' );


/**********************************
Development Custom Post Type 
 **********************************/

function dev_custom_post() {
    $args = array(
        'label' => 'Dev',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => true,
        'rewrite' => array('slug' => 'dev'),
        'query_var' => true,
        'menu_icon' => 'dashicons-editor-code',
        'taxonomies' => array('category', 'programminglanguage', 'platform'),
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'custom-fields',
            'revisions',
            'thumbnail',
            'page-attributes',
        ),
        'show_in_rest'       => true,
  		'rest_base'          => 'dev',
  		'rest_controller_class' => 'WP_REST_Posts_Controller'
    );
    register_post_type( 'dev', $args );
    flush_rewrite_rules(false);
}
add_action( 'init', 'dev_custom_post' );


/**********************************
Photography Custom Post Type 
 **********************************/

function photo_custom_post() {
    $args = array(
        'label' => 'Photography',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => true,
        'rewrite' => array('slug' => 'photography'),
        'query_var' => true,
        'menu_icon' => 'dashicons-camera',
        'taxonomies' => array('category', 'photogenre'),
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'custom-fields',
            'revisions',
            'thumbnail',
            'page-attributes',
        ),
        'show_in_rest'       => true,
  		'rest_base'          => 'photography',
  		'rest_controller_class' => 'WP_REST_Posts_Controller'
    );
    register_post_type( 'photography', $args );
    flush_rewrite_rules(false);
}
add_action( 'init', 'photo_custom_post' );



/**********************************
Change Post to Blog 
 **********************************/

function change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Blog';
}
add_action( 'admin_menu', 'change_post_label' );


?>