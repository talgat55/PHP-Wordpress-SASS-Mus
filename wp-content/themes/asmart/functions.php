<?php
/*
* Require Image resize
*/
/*
* Register nav menu
*/
if (function_exists('register_nav_menus')) {

    $menu_arr = array(
        'top_menu' => 'Топ Меню',
        'footer_one_menu' => 'Футер  Меню 1',
        'footer_two_menu' => 'Футер Меню 2'
    );


    register_nav_menus($menu_arr);


}


/*
* Add Feature Imagee
**/
add_theme_support('post-thumbnails');
add_image_size( 'product-item', 244, 300, true );
add_image_size( 'product-item-thumb', 50, 62, true );
add_image_size( 'product', 260, 200, false );
add_image_size( 'woocommerce_single', 260, 200, false);
add_image_size( 'event-img', 260, 110, false);
add_image_size( 'news-img', 400, 250, false);
add_image_size( 'news-img-recent', 278, 80, true);

/**
 * Enqueue scripts and styles.
 */
function th_scripts()
{
    // Theme stylesheet.
    wp_enqueue_style('bootstrapcdn', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '');
    wp_enqueue_style('th-style', get_stylesheet_uri(), array(), '5');


    wp_enqueue_style('fontawesome-all', get_theme_file_uri('/assets/css/fontawesome-all.css'), array(), '');
    wp_enqueue_style('normalize', get_theme_file_uri('/assets/css/normalize.css'), array(), '');
    wp_enqueue_style('slick', get_theme_file_uri('/assets/css/slick.css'), array(), '');
    wp_enqueue_style('lightgallery', get_theme_file_uri('/assets/css/lightgallery.css'), array(), '');
    wp_enqueue_style('slick-theme', get_theme_file_uri('/assets/css/slick-theme.css'), array(), '');
    wp_enqueue_style('main-style', get_theme_file_uri('/assets/css/style.css'), array(), '5');


    // wp_enqueue_style( 'owl.theme.default.min', get_theme_file_uri(  '/assets/css/owl.theme.default.min.css'),array(), '' );

    //	wp_enqueue_style( 'datepicker.min', get_theme_file_uri(  '/assets/css/datepicker.min.css'),array(), '' );
    //  wp_enqueue_style( 'jquery.fancybox.min', get_theme_file_uri(  '/assets/css/jquery.fancybox.min.css'),array(), '' );
    //  wp_enqueue_style( 'jquery-ui.min', get_theme_file_uri(  '/assets/css/jquery-ui.min.css'),array(), '' );


    wp_enqueue_script('jquery', get_theme_file_uri('/assets/js/jquery-3.2.1.min.js'), array(), '');
    wp_enqueue_script('slick.min', get_theme_file_uri('/assets/js/slick.min.js'), array(), '');
    wp_enqueue_script('js.cookie.min', get_theme_file_uri('/assets/js/js.cookie.min.js'), array(), '');
    wp_enqueue_script('jquery.matchHeight', get_theme_file_uri('/assets/js/jquery.matchHeight.js'), array(), '');

//    wp_enqueue_style('select2.min.css','https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css', array(), '');
//    wp_enqueue_script('select2.min.js','https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js', array(), '');
//

//    wp_enqueue_script('jquery.query-object', get_theme_file_uri('/assets/js/jquery.query-object.js'), array(), '');
    wp_enqueue_script('lightgallery.min', get_theme_file_uri('/assets/js/lightgallery.min.js'), array(), '');
    wp_enqueue_script('lg-fullscreen.min', get_theme_file_uri('/assets/js/lg-fullscreen.min.js'), array(), '');
    wp_enqueue_script('lg-hash.min', get_theme_file_uri('/assets/js/lg-hash.min.js'), array(), '');
    wp_enqueue_script('jquery.inputmask', get_theme_file_uri('/assets/js/jquery.inputmask.js'), array(), '');
    wp_enqueue_script('lg-thumbnail.min', get_theme_file_uri('/assets/js/lg-thumbnail.min.js'), array(), '');
//    wp_enqueue_script('functions', get_theme_file_uri('/assets/js/functions.js'), array(), '');
    wp_enqueue_script('default', get_theme_file_uri('/assets/js/default.js'), array(), '4');

    if (is_home()  ||  is_page_template('page-about.php')) {

        wp_enqueue_script('yandex-maps', '//api-maps.yandex.ru/2.1/?lang=ru_RU', array(), '');

    }



}

add_action('wp_enqueue_scripts', 'th_scripts');


function admin_style() {
    echo '
    <style>
    .post-type-docs .preview.button{
        display: none;
    }
    </style>
    ';
}
add_action('admin_enqueue_scripts', 'admin_style');
/*
*  Rgister Post Type  Docs
*/

add_action('init', 'post_type_docs');

function post_type_docs()
{

    $labels = array(
        'name' => 'Документы',
        'singular_name' => 'Документы',
        'all_items' => 'Документы',
        'menu_name' => 'Документы' // ссылка в меню в админке
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "docs",
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );
    register_post_type('docs', $args);
}




/*
*  Rgister Post Type  Events
*/

add_action('init', 'post_type_events');

function post_type_events()
{

    $labels = array(
        'name' => 'Мероприятия',
        'singular_name' => 'Мероприятия',
        'all_items' => 'Мероприятия',
        'menu_name' => 'Мероприятия' // ссылка в меню в админке
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "events",
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );
    register_post_type('events', $args);
}



/*
*  Rgister Post Type  Qa
*/

add_action('init', 'post_type_media');

function post_type_media()
{
    $labels = array(
        'name' => 'Медиа',
        'singular_name' => 'Медиа',
        'all_items' => 'Медиа',
        'menu_name' => 'Медиа' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "media",
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );
    register_post_type('media', $args);
}


/*
*  Rgister Post Type Slider
*/
//
//add_action('init', 'post_type_slider');
//
//function post_type_slider()
//{
//    $labels = array(
//        'name' => 'Слайдер',
//        'singular_name' => 'Слайдер',
//        'all_items' => 'Слайдер',
//        'menu_name' => 'Слайдер' // ссылка в меню в админке
//    );
//    $args = array(
//        'labels' => $labels,
//        'public' => true,
//        'menu_position' => 5,
//        'has_archive' => true,
//        'query_var' => "slider",
//        'supports' => array(
//            'title',
//            'editor',
//            'thumbnail'
//        ),
//        'taxonomies' => array('category')
//    );
//    register_post_type('slider', $args);
//}

