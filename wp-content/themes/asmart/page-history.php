<?php
/*
 * Template Name:  Страница истории
 */

get_header(); ?>

    <div id="primary" class="content-area  page-history ">

        <div class="container">
            <div class="row flex" >
                <div class="col-sm-4 col-xs-12  desktop-carousel">
                    <div class="background lazy   right"
                         data-src="<?php echo get_theme_file_uri('/assets/images/bg2.jpg') ?>"></div>
                    <h1 class="sub-title  left">
                       <?= get_the_title(); ?>
                    </h1>

                    <div class="history-carousel">
                        <?php
                        $gallery  = get_field('gallery_history_page');
                        foreach ($gallery as $value){?>
                            <div class="item">
                                <a  class="link-full" data-src="<?=$value['url'];?>"   >
                                    <div>
                                        <img  src="<?php echo get_theme_file_uri('/assets/images/search.png') ?>"    />
                                        <p>

                                            <?php _e('Увеличить', 'light'); ?>
                                        </p>
                                    </div>
                                </a>
                                <img  src="<?php echo get_theme_file_uri('/assets/images/ajax-loader-history.gif') ?>"  data-lazy="<?=$value['sizes']['history-img'];?>" alt="Картинка" />

                            </div>

                        <?php
                        }
                        ?>
                    </div>
                    <div class="history-arrow">
                        <a id="arrow-history-down" href="#" class="next">
                            <img src="<?php echo get_theme_file_uri('/assets/images/arr-partners.png') ?>"
                                 alt="иконка"/>
                        </a>
                    </div>
                </div>
                <div class="col-sm-8 col-xs-12   ">
                    <div class="content">


                    <?php
                    while (have_posts()) : the_post();

                        the_content();

                    endwhile;
                    ?>
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
