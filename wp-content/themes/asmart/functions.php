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
add_image_size( 'product', 260, 200, false );
add_image_size( 'event-img', 260, 110, false);
add_image_size( 'news-img', 400, 250, false);
add_image_size( 'news-img-recent', 278, 80, true);
add_image_size( 'partners-img', 216, 97, false);
add_image_size( 'history-img', 266, 165, true);
add_image_size( 'administration-img', 330, 310, true);


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

    if (  is_page_template('page-history.php')) {

        wp_enqueue_style('lightgallery', get_theme_file_uri('/assets/css/lightgallery.css'), array(), '');
    }
    wp_enqueue_style('slick-theme', get_theme_file_uri('/assets/css/slick-theme.css'), array(), '');
    wp_enqueue_style('main-style', get_theme_file_uri('/assets/css/style.css'), array(), '5');



    wp_enqueue_script('jquery', get_theme_file_uri('/assets/js/jquery-3.2.1.min.js'), array(), '');
    wp_enqueue_script('slick.min', get_theme_file_uri('/assets/js/slick.min.js'), array(), '');
    wp_enqueue_script('lazy', get_theme_file_uri('/assets/js/jquery.lazy.min.js'), array(), '');
//    wp_enqueue_script('jquery.matchHeight', get_theme_file_uri('/assets/js/jquery.matchHeight.js'), array(), '');


//    wp_enqueue_script('jquery.query-object', get_theme_file_uri('/assets/js/jquery.query-object.js'), array(), '');

//    wp_enqueue_script('jquery.inputmask', get_theme_file_uri('/assets/js/jquery.inputmask.js'), array(), '');

//    wp_enqueue_script('functions', get_theme_file_uri('/assets/js/functions.js'), array(), '');
    if (  is_page_template('page-history.php')) {
        wp_enqueue_script('lg-thumbnail.min', get_theme_file_uri('/assets/js/lg-thumbnail.min.js'), array(), '');
        wp_enqueue_script('lightgallery.min', get_theme_file_uri('/assets/js/lightgallery.min.js'), array(), '');
        wp_enqueue_script('lg-fullscreen.min', get_theme_file_uri('/assets/js/lg-fullscreen.min.js'), array(), '');
        wp_enqueue_script('lg-hash.min', get_theme_file_uri('/assets/js/lg-hash.min.js'), array(), '');
    }

    if (is_home()  ||  is_page_template('page-about.php')) {

        if (get_locale() == 'en_US') {
            $lang = 'en';
        } else {
            $lang = 'ru';
        }
        wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDkewQZi7iY6eOtlXajXXHFWHECGYWqfMs&language=' . $lang, array(), '2');
    }
    wp_enqueue_script('default', get_theme_file_uri('/assets/js/default.js'), array(), '4');





}

add_action('wp_enqueue_scripts', 'th_scripts');


/*
*  Register Post Type  Events
*/

add_action('init', 'post_type_events');

function post_type_events()
{

    $labels = array(
        'name' => 'События',
        'singular_name' => 'События',
        'all_items' => 'События',
        'menu_name' => 'События' // ссылка в меню в админке
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
*  Register Post Type  Exposure
*/

add_action('init', 'post_type_exposure');

function post_type_exposure()
{
    $labels = array(
        'name' => 'Экспозиция',
        'singular_name' => 'Экспозиция',
        'all_items' => 'Экспозиция',
        'menu_name' => 'Экспозиция' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "exposure",
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );
    register_post_type('exposure', $args);
}
/*
*  Register Post Type  Exhinitions
*/

add_action('init', 'post_type_exhibitions');

function post_type_exhibitions()
{
    $labels = array(
        'name' => 'Выставки',
        'singular_name' => 'Выставки',
        'all_items' => 'Выставки',
        'menu_name' => 'Выставки' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "exhibitions",
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );
    register_post_type('exhibitions', $args);
}

/*
*  Register Post Type  Educations Events
*/

add_action('init', 'post_type_educations_events');

function post_type_educations_events()
{
    $labels = array(
        'name' => 'Образовательные мероприятия',
        'singular_name' => 'Образовательные мероприятия',
        'all_items' => 'Образовательные мероприятия',
        'menu_name' => 'Образовательные мероприятия' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "edu_events",
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );
    register_post_type('edu_events', $args);
}

/*
*  Register Post Type  Partners
*/

add_action('init', 'post_type_partners');

function post_type_partners()
{
    $labels = array(
        'name' => 'Партнеры',
        'singular_name' => 'Партнеры',
        'all_items' => 'Партнеры',
        'menu_name' => 'Партнеры' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "slider_partners",
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );
    register_post_type('slider_partners', $args);
}

/*
*  Register Post Type  Admisitrations
*/

add_action('init', 'post_type_administrations');

function post_type_administrations()
{
    $labels = array(
        'name' => 'Администрация',
        'singular_name' => 'Администрация',
        'all_items' => 'Администрация',
        'menu_name' => 'Администрация' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "administrations",
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );
    register_post_type('administrations', $args);
}
/*
*  Register Post Type  Documents
*/

add_action('init', 'post_type_dpcuments');

function post_type_dpcuments()
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
            'title'
        )
    );
    register_post_type('docs', $args);
}
/*
*  Register Post Type Scientific work
*/

add_action('init', 'post_type_scientific_work');

function post_type_scientific_work()
{
    $labels = array(
        'name' => 'Научная жизнь',
        'singular_name' => 'Научная жизнь',
        'all_items' => 'Научная жизнь',
        'menu_name' => 'Научная жизнь' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "scientific_works",
        'supports' => array(
            'title'
        )
    );
    register_post_type('scientific_works', $args);
}
/*
*  Register Post Type Scientific work
*/

add_action('init', 'post_type_smionas');

function post_type_smionas()
{
    $labels = array(
        'name' => 'СМИ о нас',
        'singular_name' => 'СМИ о нас',
        'all_items' => 'СМИ о нас',
        'menu_name' => 'СМИ о нас' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "smionas",
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );
    register_post_type('smionas', $args);
}

/*
*  Register Post Type Settings
*/
if (function_exists('acf_add_options_page')) {

    // Let's add our Options Page
    acf_add_options_page(array(
        'page_title' => 'Настройки Темы',
        'menu_title' => 'Настройки Темы',
        'menu_slug' => 'theme-options',
        'capability' => 'edit_posts'
    ));


}
/**
 * Replace symbols for phone
 * @param $phone
 * @return mixed
 */
function pregPhone($phone){

    return  str_replace(['+','(', ')' , '-' , ' ' ], "", $phone);

}

/**
 * Group array by value
 * @param $array
 * @param $key
 * @return array
 */
function groupBy($array, $key) {
    $resultArr = array();
    foreach($array as $val) {
        $resultArr[$val[$key]][] = $val;
    }
    return $resultArr;
}


function wpbeginner_numeric_posts_nav() {

    if( is_singular() )
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );

    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="pagination"><ul>' . "\n";

    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li class="link-prev">%s</li>' . "\n", get_previous_posts_link('<span><i class="fas fa-angle-left"></i> назад</span>') );

    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }

    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li class="link-next">%s</li>' . "\n", get_next_posts_link('<span> далее <i class="fas fa-angle-right"></i></span>') );

    echo '</ul></div>' . "\n";

}