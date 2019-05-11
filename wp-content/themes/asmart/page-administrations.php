<?php
/*
 * Template Name: Страница  администрации
 */

get_header(); ?>

    <div id="primary" class="content-area  page-administration ">

        <div class="container">
            <div class="row flex" >
                <div class="col-sm-4 col-xs-12  desktop-carousel">
                    <div class="background lazy   right"
                         data-src="<?php echo get_theme_file_uri('/assets/images/bg-administration.jpg') ?>"></div>
                    <h1 class="sub-title  left">
                       <?= get_the_title(); ?>
                    </h1>



                </div>
                <div class="col-sm-8 col-xs-12   ">
                    <div class="content">
                        <ul class="list-administrations">
                        <?php
                        $arg = array(
                            'posts_per_page' => -1,
                            'post_type' => 'administrations',
                            'orderby' => 'date',
                            'order'   => 'ASC',
                            'status' => 'publish',

                        );

                        $the_query = new WP_Query($arg);
                        $i = 0;
                        while ($the_query->have_posts()) :
                            $the_query->the_post();
                            $post_id    = $the_query->post->ID;
                            $position   = get_field('position', $post_id);
                            $attachment = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "administration-img")[0];
                            $redyImg    = $attachment  ? $attachment : get_theme_file_uri('/assets/images/no-image.jpg') ;
                            ?>
                            <li class="item">
                                <div class="img-block">
                                <img src="<?= $redyImg; ?>"
                                     alt="Изображение"/>
                                </div>
                                <div class="text">
                                        <h3 class="name">
                                            <?= get_the_title($post_id); ?>
                                        </h3>
                                        <div class="position">
                                            <?=$position; ?>
                                        </div>
                                        <div class="content">
                                            <?= get_the_content($post_id); ?>
                                        </div>

                                </div>

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
        <?php  get_template_part('inc/form'); ?>
    </div>

<?php get_footer();
