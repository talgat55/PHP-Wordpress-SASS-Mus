<?php
/*
 * Template Name: Страница Записей
 */

get_header();

$template = get_field('template_articles');

?>

    <div id="primary" class="content-area  page-articles">

        <div class="container">
            <div class="row flex">
                <div class="col-sm-4 col-xs-12   ">
                    <div class="background lazy   right"
                         data-src="<?php echo get_theme_file_uri('/assets/images/bg-articles.jpg') ?>"></div>
                    <h1 class="sub-title  left  <?=$template; ?>">
                        <?= get_the_title(); ?>
                    </h1>


                </div>
                <div class="col-sm-8 col-xs-12   ">
                    <div class="content">
                        <ul class="list-events">


                            <?php
                            if ($template == 'events') {
                                $arg = [
                                    'posts_per_page' => 4,
                                    'post_type' => 'events',
                                    'orderby' => 'date',
                                    'order' => 'ASC',
                                    'status' => 'publish'
                                ];

                            } elseif ($template == 'archive') {

                                $arg = [
                                    'posts_per_page' => 4,
                                    'post_type' => 'events',
                                    'orderby' => 'date',
                                    'order' => 'ASC',
                                    'status' => 'publish',
                                ];

                            } else  if ($template == 'exhibitions') {

                                $arg = [
                                    'posts_per_page' => 4,
                                    'post_type' => 'exhibitions',
                                    'orderby' => 'date',
                                    'order' => 'ASC',
                                    'status' => 'publish'
                                ];
                            }else {


                                $arg = [
                                    'posts_per_page' => 4,
                                    'post_type' => 'edu_events',
                                    'orderby' => 'date',
                                    'order' => 'ASC',
                                    'status' => 'publish',

                                ];
                            }

                            $the_query = new WP_Query($arg);
                            $i = 0;
                            while ($the_query->have_posts()) :
                                $the_query->the_post();
                                set_query_var('count', $i);
                                get_template_part('inc/item', 'articles');

                                $i++;
                            endwhile;
                            $GLOBALS['wp_query'] = $the_query;
                            wpbeginner_numeric_posts_nav();
                            wp_reset_query();
                            ?>
                        </ul>
                    </div>

                </div>


            </div>

        </div>
        <?php get_template_part('inc/form'); ?>
    </div>


<?php get_footer();
