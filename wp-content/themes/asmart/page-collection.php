<?php
/*
 * Template Name: Страница Колекции
 */

get_header(); ?>

    <div id="primary" class="content-area  page-collection ">

        <div class="container">
            <div class="row flex">
                <div class="col-sm-4 col-xs-12   ">
                    <div class="background lazy   right"
                         data-src="<?php echo get_theme_file_uri('/assets/images/bg-collection.jpg') ?>"></div>
                    <h1 class="sub-title  left">
                        <?= get_the_title(); ?>
                    </h1>


                </div>
                <div class="col-sm-8 col-xs-12   ">
                    <div class="content">
                        <?php
                        while (have_posts()) : the_post();

                            the_content();

                        endwhile;
                        ?>
                    </div>
                    <div class="bottom-block">
                            <h4 class="title">
                                <?php _e('Наиболее крупные архивы', 'light'); ?>

                            </h4>
                        <div class="slider-wrapper">
                            <ul class="slider-collection">
                                <?php
                                    $arrayPhotos = get_field('array_photos');
                                    foreach ($arrayPhotos as $value){
                                        ?>
                                        <li class="item">
                                            <div class="  flex">
                                                <div class="col-sm-6 col-xs-12">
                                                    <img src="<?=$value['image_collection'] ; ?>"  alt="Изображение" />
                                                </div>
                                                <div class="col-sm-6 col-xs-12">
                                                    <div class="text">
                                                        <?=$value['title_iamge_collection'] ; ?>
                                                    </div>
                                                </div>

                                            </div>

                                        </li>
                                        <?php

                                    }
                                ?>
                            </ul>
                            <ul class="arrow-collection">
                                <li >
                                    <a href="#" class="prev">
                                        <img src="<?php echo get_theme_file_uri('/assets/images/arr-partners.png') ?>"
                                             alt="иконка"/>
                                    </a>
                                </li>
                                <li >
                                    <a href="#" class="next" >
                                        <img src="<?php echo get_theme_file_uri('/assets/images/arr-partners.png') ?>"
                                             alt="иконка"/>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>


            </div>

        </div>
        <?php get_template_part('inc/form'); ?>
    </div>

<?php get_footer();
