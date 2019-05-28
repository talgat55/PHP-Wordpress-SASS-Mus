<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


    <div id="primary" class="content-area  single-events ">

        <div class="container">
            <div class="row flex">
                <div class="col-sm-4 col-xs-12   ">
                    <div class="background lazy   right"
                         data-src="<?php echo get_theme_file_uri('/assets/images/single-bg.jpg') ?>"></div>
                    <h2 class="sub-title  left">
                        <?php _e('Архив Выставок', 'light'); ?>
                    </h2>


                </div>
                <div class="col-sm-8 col-xs-12   ">
                    <div class="content">

                        <?php while (have_posts()) : the_post(); ?>

                            <div class="img-block">
                                <div class="date">
                                    <?=  get_the_date('j F Y, H:i' )  ?>
                                </div>
                                <img class="single-news-image"
                                     src="<?= wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full')[0]; ?>"
                                     alt="Изображение"/>
                            </div>
                            <div class="content-wrapper">
                                <h1 class="heading-single"><?= get_the_title(); ?></h1>
                                <div class="description">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <a  class="link-to-back" href="/arhiv-meropriyatij">
                            <i class="fas fa-angle-left"></i>
                            <p>
                                <?php _e('назад', 'light'); ?>
                            </p>
                        </a>
                        <?php   $array_gallery = get_field('gallery_exhibitions', get_the_ID());

                        if(!empty($array_gallery)){
                        ?>
                        <div class="single-events-carousel-wrapper">
                        <div class="single-events-carousel">
                            <?php foreach ($array_gallery as $value){   ?>
                                    <div class="item">
                                        <a  class="link-full" data-src="<?=$value['url'];?>"   >
                                            <div>
                                                <img  src="<?php echo get_theme_file_uri('/assets/images/search.png') ?>"    />
                                                <p>
                                                    <?php _e('Увеличить', 'light'); ?>
                                                </p>
                                            </div>
                                        </a>
                                        <img src="<?=$value['url']; ?>" alt="Изображение" />

                                    </div>


                            <?php   } ?>
                        </div>
                            <div class="single-arrow">
                                <a href="#" class="next">
                                    <img src="<?php echo get_theme_file_uri('/assets/images/arr-partners.png') ?>"
                                         alt="иконка"/>
                                </a>
                            </div>
                        </div>
                            <?php } ?>
                    </div>
                </div>


            </div>

        </div>
        <?php get_template_part('inc/form'); ?>
    </div>

<?php get_footer();
