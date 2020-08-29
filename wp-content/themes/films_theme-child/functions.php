<?php
function films() {
    register_post_type( 'films',
        array(
            'labels' => array(
                'name' => 'Films',
                'add_new' => 'Add New',
                'edit_item' => 'Edit',
                'new_item' => 'New',
                'all_items' => 'All',
                'view_item' => 'View',
                'search_items' => 'Search',
                'not_found' => 'Not found',
                'not_found_in_trash' => 'No found in Trash',
                'parent_item_colon' => '',
                'menu_name' => 'Фільми',

            ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => true,
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array('title','editor','thumbnail'),
            'taxonomies'          => array( 'category' )
        ) );

}
add_action( 'init', 'films' );


add_action( 'wp_enqueue_scripts', 'films_theme_scripts_and_styles' );

function films_theme_scripts_and_styles() {
  wp_register_style( 'bootstrap', get_stylesheet_directory_uri().'/inc/css/bootstrap.css' );
  wp_register_style( 'custom', get_stylesheet_directory_uri().'/inc/css/custom.css' );
  wp_register_script('jQuery', get_stylesheet_directory_uri() . '/inc/js/jQuery.js');
  wp_register_script('custom-script', get_stylesheet_directory_uri() . '/inc/js/custom.js', array('jQuery'),true);
  wp_register_script('ajax', get_stylesheet_directory_uri() . '/inc/js/ajax.js', array('jQuery'),true);
  wp_enqueue_script( 'jQuery' );
  wp_enqueue_script( 'custom-script' );
  wp_enqueue_script( 'ajax' );
  wp_enqueue_style( 'bootstrap' );
  wp_enqueue_style( 'custom' );
}



include ('ajax_load.php');






