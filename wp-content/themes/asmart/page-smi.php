<?php
/*
 * Template Name: Страница СМИ о нас
 */

get_header(); ?>

    <div id="primary" class="content-area  page-smi ">

        <div class="container">
            <div class="row flex">
                <div class="col-sm-4 col-xs-12   ">
                    <div class="background lazy   right"
                         data-src="<?php echo get_theme_file_uri('/assets/images/bg-smi.jpg') ?>"></div>
                    <h1 class="sub-title  left">
                        <?= get_the_title(); ?>
                    </h1>


                </div>
                <div class="col-sm-8 col-xs-12   ">
                        <div class="content-block">
                            <ul class="list-events clearfix relative">
                                <?php

                                $arg = array(
                                    'posts_per_page' => 4,
                                    'post_type' => 'smionas',
                                    'status' => 'publish'
                                );

                                $the_query = new WP_Query($arg);
                                $i = 0;
                                while ($the_query->have_posts()) :
                                    $the_query->the_post();
                                    $post_id = $the_query->post->ID;
                                    set_query_var('count', $i);

                                    $link = get_field('link_smi',$post_id );
                                    set_query_var('link_smi', $link);

                                    get_template_part('inc/item', 'event');

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
