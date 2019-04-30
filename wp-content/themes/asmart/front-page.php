<?php


get_header(); ?>
    <h1 class="hide-title">Главная страница</h1>
    <div class="main">
        <section class="about">

                <div class="clearfix">
                    <div class="content-block">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-5 col-xs-12">
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
                                <div class="col-sm-7 col-xs-12 relative">
                                    <div class="content">
                                        <div class="images clearfix">
                                            <?php
                                            foreach (get_field('images_about_home', 'option') as $value){
                                                echo '<img src="'.$value["url"].'" alt="изображение" />';

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

                                <div class="col-sm-7 col-xs-12 relative">
                                    <div class="content">
                                        <div class="images clearfix">
                                            <?php
                                            foreach (get_field('images_about_home', 'option') as $value){
                                                echo '<img src="'.$value["url"].'" alt="изображение" />';

                                            }
                                            ?>
                                        </div>
                                        <div class="description">
                                            <?=get_field('text2_about_home', 'option'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5 col-xs-12">
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

    </div>

<?php get_footer();
