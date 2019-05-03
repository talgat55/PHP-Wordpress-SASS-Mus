<?php


get_header(); ?>
    <h1 class="hide-title">Главная страница</h1>
    <div class="main">
        <section class="about">

                <div class="clearfix">
                    <div class="content-block">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4 col-xs-12">
                                    <div class="background lazy   right" data-src="<?php echo get_theme_file_uri('/assets/images/bg2.jpg') ?>"></div>
                                    <div class="content">
                                        <h2 class="sub-title  left">
                                            наш музей
                                        </h2>
                                        <div class="about">
                                            <?php
                                            $text = get_field('text_about_home', 'option');
                                                echo $text;
                                            ?>

                                        </div>


                                        <a href="#" class="link-about"  title="Перейти на страницу Нашего музея" >
                                            <img src="<?php echo get_theme_file_uri('/assets/images/about-img.jpg') ?>" alt="картинка"  />

                                        </a>
                                    </div>

                                </div>
                                <div class="col-sm-8 col-xs-12 relative">
                                    <div class="content">
                                        <div class="images clearfix">
                                            <?php
                                            foreach (get_field('images_about_home', 'option') as $value){
                                                echo '<img class="lazy"  src="'.get_theme_file_uri("/assets/images/sprite.jpg").'"  data-src="'.$value["url"].'" alt="изображение" />';

                                            }
                                            ?>
                                        </div>
                                        <div class="description">
                                            <?=get_field('text2_about_home', 'option'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

        </section>

        <section class="events">

                <div class="clearfix">
                    <div class="content-block">
                        <div class="container">
                            <div class="row flex">

                                <div class="col-sm-9 col-xs-12 relative">
                                    <div class="content">
                                        <ul class="list-events clearfix relative">
                                        <?php

                                        $arg = array(
                                            'posts_per_page' => 2,
                                            'post_type' => 'events',
                                            'status' => 'publish'
                                        );

                                        $the_query = new WP_Query($arg);
                                        $i = 0;
                                        while ($the_query->have_posts()) :
                                            $the_query->the_post();
                                            set_query_var( 'count',$i);
                                            get_template_part( 'inc/item', 'event' );

                                            $i++;
                                        endwhile;
                                        wp_reset_query();
                                        ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-12">
                                    <div class="background lazy" data-src="<?php echo get_theme_file_uri('/assets/images/bg3.jpg') ?>"></div>
                                    <div class="content">
                                        <h2 class="sub-title  right">
                                           события
                                        </h2>
                                        <a href="#" class="link-events"  title="Перейти на страницу Событий" >
                                           Читать больше
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

        </section>
        <section class="exposure">

            <div class="clearfix">
                <div class="content-block">
                    <div class="container">
                        <div class="row flex">
                            <div class="col-sm-4 col-xs-12">
                                <div class="background lazy   right" data-src="<?php echo get_theme_file_uri('/assets/images/bg4.jpg') ?>"></div>
                                <div class="content vertical-align left">
                                    <h2 class="sub-title  left">
                                        Экспозиции
                                    </h2>


                                </div>

                            </div>
                            <div class="col-sm-8 col-xs-12 relative">
                                <div class="content">
                                    <ul class="list-exposures clearfix relative">
                                        <?php

                                        $arg = array(
                                            'posts_per_page' => 3,
                                            'post_type' => 'exposure',
                                            'status' => 'publish'
                                        );

                                        $the_query = new WP_Query($arg);
                                        $i = 0;
                                        while ($the_query->have_posts()) :
                                            $the_query->the_post();
                                            $post_id        = $the_query->post->ID;
                                            $imagesArray    = get_field('gallery_explosure', $post_id);
                                            $typeArray      = get_field('type_explosure', $post_id);
                                            switch ($typeArray):
                                                case 'barracks':
                                                    $redyTopblock = 'Казарма Омского острога';
                                                    break;
                                                case 'dostsib':
                                                    $redyTopblock = 'Достоевский и Сибирь';
                                                    break;
                                                case 'writeomsk':
                                                    $redyTopblock = 'Писатели - Омичи';
                                                    break;
                                                default:
                                                    $redyTopblock = '';
                                                    break;
                                            endswitch;




                                        ?>
                                            <li class="item  col-sm-4 col-xs-12" >
                                                <div class="top-block">

                                                    <img src="<?php echo get_theme_file_uri('/assets/images/exposure-icon.png') ?>"   alt="Иконка" />
                                                    <h4 class="title">
                                                        <?=$redyTopblock; ?>
                                                    </h4>
                                                </div>

                                                <div class="carousel-exposure">
                                                    <?php

                                                    foreach ($imagesArray as $item){

                                                        echo '<div class="item-carousel lazy"   data-src="'.$item["url"].'"> </div>';
                                                    }

                                                    ?>
                                                </div>
                                                <div class="custom-pagination">
                                                    <div class="arrow">
                                                        <a href="#" class="prev  disable" >
                                                            <img class="icon" src="<?php echo get_theme_file_uri('/assets/images/exposure-arrow.png') ?>"   alt="Иконка" />
                                                        </a>
                                                    </div>
                                                    <div class="paginaiton">
                                                         <span>1</span>/<?=count($imagesArray); ?>
                                                    </div>
                                                    <div class="arrow">
                                                        <a href="#" class="next" >
                                                            <img class="icon" src="<?php echo get_theme_file_uri('/assets/images/exposure-arrow.png') ?>"   alt="Иконка" />
                                                        </a>
                                                    </div>
                                                </div>

                                            </li>

                                        <?php
                                        $i++;
                                        endwhile;
                                        wp_reset_query();
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <section class="exhibitions">

            <div class="clearfix">
                <div class="content-block">
                    <div class="container">
                        <div class="row flex">
                            <div class="col-sm-8 col-xs-12 relative">
                                <div class="content">
                                    <ul class="list-exposures clearfix relative">
                                        <?php

                                        $arg = array(
                                            'posts_per_page' => 2,
                                            'post_type' => 'exhibitions',
                                            'status' => 'publish'
                                        );

                                        $the_query = new WP_Query($arg);
                                        $i = 0;
                                        while ($the_query->have_posts()) :
                                            $the_query->the_post();
                                            $post_id        = $the_query->post->ID;
                                            $imagesArray    = get_field('gallery_exhibitions', $post_id);





                                            ?>
                                            <li class="item  col-sm-6 col-xs-12" >


                                                <div class="carousel-exposure">
                                                    <?php

                                                    foreach ($imagesArray as $item){

                                                        echo '<div class="item-carousel lazy"   data-src="'.$item["url"].'"> 

                                                                <div class="overlay-link">
                                                                <a href="'.get_the_permalink($post_id).'" class="link" >
                                                                    подробнее
                                                                </a>
                                                                </div>
                                                                
                                                                </div>';
                                                    }

                                                    ?>
                                                </div>
                                                <div class="custom-pagination">
                                                    <div class="arrow">
                                                        <a href="#" class="prev  disable" >
                                                            <img class="icon" src="<?php echo get_theme_file_uri('/assets/images/exposure-arrow.png') ?>"   alt="Иконка" />
                                                        </a>
                                                    </div>
                                                    <div class="paginaiton">
                                                        <span>1</span>/<?=count($imagesArray); ?>
                                                    </div>
                                                    <div class="arrow">
                                                        <a href="#" class="next" >
                                                            <img class="icon" src="<?php echo get_theme_file_uri('/assets/images/exposure-arrow.png') ?>"   alt="Иконка" />
                                                        </a>
                                                    </div>
                                                </div>

                                            </li>

                                            <?php
                                            $i++;
                                        endwhile;
                                        wp_reset_query();
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="background lazy   left" data-src="<?php echo get_theme_file_uri('/assets/images/bg5.jpg') ?>"></div>
                                <div class="content vertical-align left">
                                    <h2 class="sub-title text-right  right">
                                        Действующие
                                        выставки
                                    </h2>
                                    <a href="#" class="link-events"  title="Перейти на страницу Событий" >
                                        Читать больше
                                    </a>


                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </section>







    </div>

<?php get_footer();
