<?php
function so_styles()
{
    wp_enqueue_style('main_style', get_template_directory_uri() . '/dist/assets/css/app.css');
}

add_action('wp_enqueue_scripts', 'so_styles');

//var_dump(get_template_directory_uri() . '/assets/scss/app.css');
function so_scripts()
{
    wp_enqueue_script('query', get_template_directory_uri() . '/dist/assets/js/app.js', '', '', true);
    if (is_page_template('template-contact.php')) {
        wp_enqueue_script('map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCO_3F0KHcJZGW6IoQj7hbBdbGxGtzlZ54', '', '', true);
    }

}

add_action('wp_enqueue_scripts', 'so_scripts');


add_theme_support('post-thumbnails');

add_action('init', 'so_custom_types');

function so_custom_types()
{
    $labels = array(
        'name' => _x('Team', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Team', 'post type singular name', 'your-plugin-textdomain'),
        'menu_name' => _x('Team', 'admin menu', 'your-plugin-textdomain'),
        'name_admin_bar' => _x('Book', 'add new on admin bar', 'your-plugin-textdomain'),
        'add_new' => _x('Add New', 'book', 'your-plugin-textdomain'),
        'add_new_item' => __('Add New', 'your-plugin-textdomain'),
        'new_item' => __('New', 'your-plugin-textdomain'),
        'edit_item' => __('Edit', 'your-plugin-textdomain'),
        'view_item' => __('View', 'your-plugin-textdomain'),
        'all_items' => __('All', 'your-plugin-textdomain'),
        'search_items' => __('Search', 'your-plugin-textdomain'),
        'parent_item_colon' => __('Parent:', 'your-plugin-textdomain'),
        'not_found' => __('No found.', 'your-plugin-textdomain'),
        'not_found_in_trash' => __('No found in Trash.', 'your-plugin-textdomain')
    );

    $args = array(
        'labels' => $labels,
        'description' => __('Description.', 'your-plugin-textdomain'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'post_team'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
    );

    register_post_type('post_team', $args);
}

if (function_exists('acf_add_options_page')) {

    acf_add_options_page();

}
function register_my_menu()
{
    register_nav_menu('header-menu', __('Header Menu'));
    register_nav_menu('footer-menu', __('Footer Menu'));
}

add_action('init', 'register_my_menu');

function so_acf_init()
{

    acf_update_setting('google_api_key', 'AIzaSyCO_3F0KHcJZGW6IoQj7hbBdbGxGtzlZ54');
}

add_action('acf/init', 'so_acf_init');

