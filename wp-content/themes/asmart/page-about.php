<?php
/*
 * Template Name: Страница контактов
 */

get_header(); ?>


    <div id="primary" class="content-area  page-contacts ">

        <div class="container">
            <div class="row flex">
                <div class="col-sm-4 col-xs-12  ">
                    <div class="background lazy   right"
                         data-src="<?php echo get_theme_file_uri('/assets/images/bg-map.jpg') ?>"></div>
                    <h1 class="sub-title  left">
                        <?= get_the_title(); ?>
                    </h1>
                    <?php  get_template_part('inc/soc-links'); ?>

                </div>
                <div class="col-sm-8 col-xs-12   ">
                    <div class="content">
                        <div class="contact-info-block">
                            <div class="wrapper">

                                <?php  get_template_part('inc/info-list'); ?>

                            </div>


                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div id="map"></div>
    </div>

<?php get_footer();
