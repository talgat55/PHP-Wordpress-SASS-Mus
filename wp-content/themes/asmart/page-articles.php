<?php
/*
 * Template Name: Страница Записей
 */

get_header(); ?>

    <div id="primary" class="content-area  page-articles">

        <div class="container">
            <div class="row flex">
                <div class="col-sm-4 col-xs-12   ">
                    <div class="background lazy   right"
                         data-src="<?php echo get_theme_file_uri('/assets/images/bg-articles.jpg') ?>"></div>
                    <h1 class="sub-title  left">
                        <?= get_the_title(); ?>
                    </h1>


                </div>
                <div class="col-sm-8 col-xs-12   ">
                    <div class="content">
                        <ul class="list-events">


                            <?php
                            $template = get_field('template_articles');
                            if ($template == 'events') {

                                $redy_type = 'events';
                                $template = ['tax_query' => [
                                        [
                                            'taxonomy' => 'events_cats',
                                            'field' => 'slug',
                                            'terms' => 'edu_events',
                                            'operator' => 'NOT EXISTS'
                                        ]
                                    ]
                                ];

                            } elseif ($template == 'archive') {

                                $redy_type = 'events';
                                $template = '';

                            } else {
                                $redy_type = 'events';
                                $template =  ['tax_query' => [
                                    [
                                        'taxonomy' => 'events_cats',
                                        'field'    => 'slug',
                                        'terms'    => 'edu_events'
                                    ]
                                ]
                                ];
                            }
                            $arg = [
                                'posts_per_page' => 4,
                                'post_type' => $redy_type,
                                'orderby' => 'date',
                                'order' => 'ASC',
                                'status' => 'publish'
                                    . $template
                            ];

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
