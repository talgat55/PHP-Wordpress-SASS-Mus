<?php
/*
 * Template Name: Страница документов
 */

get_header(); ?>

    <div id="primary" class="content-area  page-docs ">

        <div class="container">
            <div class="row flex">
                <div class="col-sm-4 col-xs-12  desktop-carousel">
                    <div class="background lazy   right"
                         data-src="<?php echo get_theme_file_uri('/assets/images/bg-docs.jpg') ?>"></div>
                    <h1 class="sub-title  left">
                        <?= get_the_title(); ?>
                    </h1>


                </div>
                <div class="col-sm-8 col-xs-12   ">
                    <div class="content">
                        <ul class="list-docs">
                            <?php
                            $arg = array(
                                'posts_per_page' => -1,
                                'post_type' => 'docs',
                                'orderby' => 'date',
                                'order' => 'ASC',
                                'status' => 'publish',

                            );

                            $the_query = new WP_Query($arg);
                            $i = 0;
                            while ($the_query->have_posts()) :
                                $the_query->the_post();
                                $post_id = $the_query->post->ID;
                                $doc = get_field('file_docs', $post_id);
                                ?>
                                <li class="item">
                                    <a target="_blank" href="<?=$doc; ?>" class="link-item">
                                        <div class="img-block">
                                            <img class="main" src="<?= get_theme_file_uri('/assets/images/img-doc.jpg'); ?>" alt="Изображение"/>
                                            <img class="hover" src="<?= get_theme_file_uri('/assets/images/img-doc-hover.jpg'); ?>" alt="Изображение"/>
                                        </div>
                                        <div class="text">
                                            <h3 class="title">
                                                <?= get_the_title($post_id); ?>
                                            </h3>

                                        </div>
                                    </a>

                                </li>
                            <?php
                            endwhile;

                            wp_reset_query();
                            ?>
                        </ul>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class=" col-xs-12  mobile-carousel">
                </div>
            </div>
        </div>
        <?php get_template_part('inc/form'); ?>
    </div>

<?php get_footer();
